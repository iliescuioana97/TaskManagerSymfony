<?php 
namespace Symfony\Component\EventDispatcher
{
interface EventSubscriberInterface
{
public static function getSubscribedEvents();
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
abstract class SessionListener implements EventSubscriberInterface
{
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$request = $event->getRequest();
$session = $this->getSession();
if (null === $session || $request->hasSession()) {
return;
}
$request->setSession($session);
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 128),
);
}
abstract protected function getSession();
}
}
namespace Symfony\Bundle\FrameworkBundle\EventListener
{
use Symfony\Component\HttpKernel\EventListener\SessionListener as BaseSessionListener;
use Symfony\Component\DependencyInjection\ContainerInterface;
class SessionListener extends BaseSessionListener
{
private $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
protected function getSession()
{
if (!$this->container->has('session')) {
return;
}
return $this->container->get('session');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
interface SessionStorageInterface
{
public function start();
public function isStarted();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function regenerate($destroy = false, $lifetime = null);
public function save();
public function clear();
public function getBag($name);
public function registerBag(SessionBagInterface $bag);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy;
class NativeSessionStorage implements SessionStorageInterface
{
protected $bags;
protected $started = false;
protected $closed = false;
protected $saveHandler;
protected $metadataBag;
public function __construct(array $options = array(), $handler = null, MetadataBag $metaBag = null)
{
session_cache_limiter(''); ini_set('session.use_cookies', 1);
session_register_shutdown();
$this->setMetadataBag($metaBag);
$this->setOptions($options);
$this->setSaveHandler($handler);
}
public function getSaveHandler()
{
return $this->saveHandler;
}
public function start()
{
if ($this->started) {
return true;
}
if (\PHP_SESSION_ACTIVE === session_status()) {
throw new \RuntimeException('Failed to start the session: already started by PHP.');
}
if (ini_get('session.use_cookies') && headers_sent($file, $line)) {
throw new \RuntimeException(sprintf('Failed to start the session because headers have already been sent by "%s" at line %d.', $file, $line));
}
if (!session_start()) {
throw new \RuntimeException('Failed to start the session');
}
$this->loadSession();
return true;
}
public function getId()
{
return $this->saveHandler->getId();
}
public function setId($id)
{
$this->saveHandler->setId($id);
}
public function getName()
{
return $this->saveHandler->getName();
}
public function setName($name)
{
$this->saveHandler->setName($name);
}
public function regenerate($destroy = false, $lifetime = null)
{
if (\PHP_SESSION_ACTIVE !== session_status()) {
return false;
}
if (null !== $lifetime) {
ini_set('session.cookie_lifetime', $lifetime);
}
if ($destroy) {
$this->metadataBag->stampNew();
}
$isRegenerated = session_regenerate_id($destroy);
$this->loadSession();
return $isRegenerated;
}
public function save()
{
session_write_close();
$this->closed = true;
$this->started = false;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$_SESSION = array();
$this->loadSession();
}
public function registerBag(SessionBagInterface $bag)
{
if ($this->started) {
throw new \LogicException('Cannot register a bag when the session is already started.');
}
$this->bags[$bag->getName()] = $bag;
}
public function getBag($name)
{
if (!isset($this->bags[$name])) {
throw new \InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', $name));
}
if ($this->saveHandler->isActive() && !$this->started) {
$this->loadSession();
} elseif (!$this->started) {
$this->start();
}
return $this->bags[$name];
}
public function setMetadataBag(MetadataBag $metaBag = null)
{
if (null === $metaBag) {
$metaBag = new MetadataBag();
}
$this->metadataBag = $metaBag;
}
public function getMetadataBag()
{
return $this->metadataBag;
}
public function isStarted()
{
return $this->started;
}
public function setOptions(array $options)
{
$validOptions = array_flip(array('cache_limiter','cookie_domain','cookie_httponly','cookie_lifetime','cookie_path','cookie_secure','entropy_file','entropy_length','gc_divisor','gc_maxlifetime','gc_probability','hash_bits_per_character','hash_function','name','referer_check','serialize_handler','use_cookies','use_only_cookies','use_trans_sid','upload_progress.enabled','upload_progress.cleanup','upload_progress.prefix','upload_progress.name','upload_progress.freq','upload_progress.min-freq','url_rewriter.tags',
));
foreach ($options as $key => $value) {
if (isset($validOptions[$key])) {
ini_set('session.'.$key, $value);
}
}
}
public function setSaveHandler($saveHandler = null)
{
if (!$saveHandler instanceof AbstractProxy &&
!$saveHandler instanceof NativeSessionHandler &&
!$saveHandler instanceof \SessionHandlerInterface &&
null !== $saveHandler) {
throw new \InvalidArgumentException('Must be instance of AbstractProxy or NativeSessionHandler; implement \SessionHandlerInterface; or be null.');
}
if (!$saveHandler instanceof AbstractProxy && $saveHandler instanceof \SessionHandlerInterface) {
$saveHandler = new SessionHandlerProxy($saveHandler);
} elseif (!$saveHandler instanceof AbstractProxy) {
$saveHandler = new SessionHandlerProxy(new \SessionHandler());
}
$this->saveHandler = $saveHandler;
if ($this->saveHandler instanceof \SessionHandlerInterface) {
session_set_save_handler($this->saveHandler, false);
}
}
protected function loadSession(array &$session = null)
{
if (null === $session) {
$session = &$_SESSION;
}
$bags = array_merge($this->bags, array($this->metadataBag));
foreach ($bags as $bag) {
$key = $bag->getStorageKey();
$session[$key] = isset($session[$key]) ? $session[$key] : array();
$bag->initialize($session[$key]);
}
$this->started = true;
$this->closed = false;
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
class PhpBridgeSessionStorage extends NativeSessionStorage
{
public function __construct($handler = null, MetadataBag $metaBag = null)
{
$this->setMetadataBag($metaBag);
$this->setSaveHandler($handler);
}
public function start()
{
if ($this->started) {
return true;
}
$this->loadSession();
return true;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$this->loadSession();
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeSessionHandler extends \SessionHandler
{
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeFileSessionHandler extends NativeSessionHandler
{
public function __construct($savePath = null)
{
if (null === $savePath) {
$savePath = ini_get('session.save_path');
}
$baseDir = $savePath;
if ($count = substr_count($savePath,';')) {
if ($count > 2) {
throw new \InvalidArgumentException(sprintf('Invalid argument $savePath \'%s\'', $savePath));
}
$baseDir = ltrim(strrchr($savePath,';'),';');
}
if ($baseDir && !is_dir($baseDir) && !@mkdir($baseDir, 0777, true) && !is_dir($baseDir)) {
throw new \RuntimeException(sprintf('Session Storage was not able to create directory "%s"', $baseDir));
}
ini_set('session.save_path', $savePath);
ini_set('session.save_handler','files');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
abstract class AbstractProxy
{
protected $wrapper = false;
protected $saveHandlerName;
public function getSaveHandlerName()
{
return $this->saveHandlerName;
}
public function isSessionHandlerInterface()
{
return $this instanceof \SessionHandlerInterface;
}
public function isWrapper()
{
return $this->wrapper;
}
public function isActive()
{
return \PHP_SESSION_ACTIVE === session_status();
}
public function getId()
{
return session_id();
}
public function setId($id)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the ID of an active session');
}
session_id($id);
}
public function getName()
{
return session_name();
}
public function setName($name)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the name of an active session');
}
session_name($name);
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
class SessionHandlerProxy extends AbstractProxy implements \SessionHandlerInterface
{
protected $handler;
public function __construct(\SessionHandlerInterface $handler)
{
$this->handler = $handler;
$this->wrapper = ($handler instanceof \SessionHandler);
$this->saveHandlerName = $this->wrapper ? ini_get('session.save_handler') :'user';
}
public function open($savePath, $sessionName)
{
return (bool) $this->handler->open($savePath, $sessionName);
}
public function close()
{
return (bool) $this->handler->close();
}
public function read($sessionId)
{
return (string) $this->handler->read($sessionId);
}
public function write($sessionId, $data)
{
return (bool) $this->handler->write($sessionId, $data);
}
public function destroy($sessionId)
{
return (bool) $this->handler->destroy($sessionId);
}
public function gc($maxlifetime)
{
return (bool) $this->handler->gc($maxlifetime);
}
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
interface SessionInterface
{
public function start();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function invalidate($lifetime = null);
public function migrate($destroy = false, $lifetime = null);
public function save();
public function has($name);
public function get($name, $default = null);
public function set($name, $value);
public function all();
public function replace(array $attributes);
public function remove($name);
public function clear();
public function isStarted();
public function registerBag(SessionBagInterface $bag);
public function getBag($name);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
class Session implements SessionInterface, \IteratorAggregate, \Countable
{
protected $storage;
private $flashName;
private $attributeName;
public function __construct(SessionStorageInterface $storage = null, AttributeBagInterface $attributes = null, FlashBagInterface $flashes = null)
{
$this->storage = $storage ?: new NativeSessionStorage();
$attributes = $attributes ?: new AttributeBag();
$this->attributeName = $attributes->getName();
$this->registerBag($attributes);
$flashes = $flashes ?: new FlashBag();
$this->flashName = $flashes->getName();
$this->registerBag($flashes);
}
public function start()
{
return $this->storage->start();
}
public function has($name)
{
return $this->storage->getBag($this->attributeName)->has($name);
}
public function get($name, $default = null)
{
return $this->storage->getBag($this->attributeName)->get($name, $default);
}
public function set($name, $value)
{
$this->storage->getBag($this->attributeName)->set($name, $value);
}
public function all()
{
return $this->storage->getBag($this->attributeName)->all();
}
public function replace(array $attributes)
{
$this->storage->getBag($this->attributeName)->replace($attributes);
}
public function remove($name)
{
return $this->storage->getBag($this->attributeName)->remove($name);
}
public function clear()
{
$this->storage->getBag($this->attributeName)->clear();
}
public function isStarted()
{
return $this->storage->isStarted();
}
public function getIterator()
{
return new \ArrayIterator($this->storage->getBag($this->attributeName)->all());
}
public function count()
{
return count($this->storage->getBag($this->attributeName)->all());
}
public function invalidate($lifetime = null)
{
$this->storage->clear();
return $this->migrate(true, $lifetime);
}
public function migrate($destroy = false, $lifetime = null)
{
return $this->storage->regenerate($destroy, $lifetime);
}
public function save()
{
$this->storage->save();
}
public function getId()
{
return $this->storage->getId();
}
public function setId($id)
{
$this->storage->setId($id);
}
public function getName()
{
return $this->storage->getName();
}
public function setName($name)
{
$this->storage->setName($name);
}
public function getMetadataBag()
{
return $this->storage->getMetadataBag();
}
public function registerBag(SessionBagInterface $bag)
{
$this->storage->registerBag($bag);
}
public function getBag($name)
{
return $this->storage->getBag($name);
}
public function getFlashBag()
{
return $this->getBag($this->flashName);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class GlobalVariables
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function getUser()
{
if (!$this->container->has('security.token_storage')) {
return;
}
$tokenStorage = $this->container->get('security.token_storage');
if (!$token = $tokenStorage->getToken()) {
return;
}
$user = $token->getUser();
if (!is_object($user)) {
return;
}
return $user;
}
public function getRequest()
{
if ($this->container->has('request_stack')) {
return $this->container->get('request_stack')->getCurrentRequest();
}
}
public function getSession()
{
if ($request = $this->getRequest()) {
return $request->getSession();
}
}
public function getEnvironment()
{
return $this->container->getParameter('kernel.environment');
}
public function getDebug()
{
return (bool) $this->container->getParameter('kernel.debug');
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateReferenceInterface
{
public function all();
public function set($name, $value);
public function get($name);
public function getPath();
public function getLogicalName();
public function __toString();
}
}
namespace Symfony\Component\Templating
{
class TemplateReference implements TemplateReferenceInterface
{
protected $parameters;
public function __construct($name = null, $engine = null)
{
$this->parameters = array('name'=> $name,'engine'=> $engine,
);
}
public function __toString()
{
return $this->getLogicalName();
}
public function set($name, $value)
{
if (array_key_exists($name, $this->parameters)) {
$this->parameters[$name] = $value;
} else {
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
return $this;
}
public function get($name)
{
if (array_key_exists($name, $this->parameters)) {
return $this->parameters[$name];
}
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
public function all()
{
return $this->parameters;
}
public function getPath()
{
return $this->parameters['name'];
}
public function getLogicalName()
{
return $this->parameters['name'];
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReference as BaseTemplateReference;
class TemplateReference extends BaseTemplateReference
{
public function __construct($bundle = null, $controller = null, $name = null, $format = null, $engine = null)
{
$this->parameters = array('bundle'=> $bundle,'controller'=> $controller,'name'=> $name,'format'=> $format,'engine'=> $engine,
);
}
public function getPath()
{
$controller = str_replace('\\','/', $this->get('controller'));
$path = (empty($controller) ?'': $controller.'/').$this->get('name').'.'.$this->get('format').'.'.$this->get('engine');
return empty($this->parameters['bundle']) ?'views/'.$path :'@'.$this->get('bundle').'/Resources/views/'.$path;
}
public function getLogicalName()
{
return sprintf('%s:%s:%s.%s.%s', $this->parameters['bundle'], $this->parameters['controller'], $this->parameters['name'], $this->parameters['format'], $this->parameters['engine']);
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateNameParserInterface
{
public function parse($name);
}
}
namespace Symfony\Component\Templating
{
class TemplateNameParser implements TemplateNameParserInterface
{
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
}
$engine = null;
if (false !== $pos = strrpos($name,'.')) {
$engine = substr($name, $pos + 1);
}
return new TemplateReference($name, $engine);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReferenceInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Templating\TemplateNameParser as BaseTemplateNameParser;
class TemplateNameParser extends BaseTemplateNameParser
{
protected $kernel;
protected $cache = array();
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
} elseif (isset($this->cache[$name])) {
return $this->cache[$name];
}
$name = str_replace(':/',':', preg_replace('#/{2,}#','/', str_replace('\\','/', $name)));
if (false !== strpos($name,'..')) {
throw new \RuntimeException(sprintf('Template name "%s" contains invalid characters.', $name));
}
if ($this->isAbsolutePath($name) || !preg_match('/^(?:([^:]*):([^:]*):)?(.+)\.([^\.]+)\.([^\.]+)$/', $name, $matches) || 0 === strpos($name,'@')) {
return parent::parse($name);
}
$template = new TemplateReference($matches[1], $matches[2], $matches[3], $matches[4], $matches[5]);
if ($template->get('bundle')) {
try {
$this->kernel->getBundle($template->get('bundle'));
} catch (\Exception $e) {
throw new \InvalidArgumentException(sprintf('Template name "%s" is not valid.', $name), 0, $e);
}
}
return $this->cache[$name] = $template;
}
private function isAbsolutePath($file)
{
$isAbsolute = (bool) preg_match('#^(?:/|[a-zA-Z]:)#', $file);
if ($isAbsolute) {
@trigger_error('Absolute template path support is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);
}
return $isAbsolute;
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
interface FileLocatorInterface
{
public function locate($name, $currentPath = null, $first = true);
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating\Loader
{
use Symfony\Component\Config\FileLocatorInterface;
use Symfony\Component\Templating\TemplateReferenceInterface;
class TemplateLocator implements FileLocatorInterface
{
protected $locator;
protected $cache;
public function __construct(FileLocatorInterface $locator, $cacheDir = null)
{
if (null !== $cacheDir && file_exists($cache = $cacheDir.'/templates.php')) {
$this->cache = require $cache;
}
$this->locator = $locator;
}
protected function getCacheKey($template)
{
return $template->getLogicalName();
}
public function locate($template, $currentPath = null, $first = true)
{
if (!$template instanceof TemplateReferenceInterface) {
throw new \InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.');
}
$key = $this->getCacheKey($template);
if (isset($this->cache[$key])) {
return $this->cache[$key];
}
try {
return $this->cache[$key] = $this->locator->locate($template->getPath(), $currentPath);
} catch (\InvalidArgumentException $e) {
throw new \InvalidArgumentException(sprintf('Unable to find template "%s" : "%s".', $template, $e->getMessage()), 0, $e);
}
}
}
}
namespace Psr\Log
{
interface LoggerAwareInterface
{
public function setLogger(LoggerInterface $logger);
}
}
namespace Psr\Cache
{
interface CacheItemPoolInterface
{
public function getItem($key);
public function getItems(array $keys = array());
public function hasItem($key);
public function clear();
public function deleteItem($key);
public function deleteItems(array $keys);
public function save(CacheItemInterface $item);
public function saveDeferred(CacheItemInterface $item);
public function commit();
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
interface AdapterInterface extends CacheItemPoolInterface
{
}
}
namespace Psr\Log
{
trait LoggerAwareTrait
{
protected $logger;
public function setLogger(LoggerInterface $logger)
{
$this->logger = $logger;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
abstract class AbstractAdapter implements AdapterInterface, LoggerAwareInterface
{
use LoggerAwareTrait;
private static $apcuSupported;
private static $phpFilesSupported;
private $namespace;
private $deferred = array();
private $createCacheItem;
private $mergeByLifetime;
protected $maxIdLength;
protected function __construct($namespace ='', $defaultLifetime = 0)
{
$this->namespace =''=== $namespace ?'': $this->getId($namespace).':';
if (null !== $this->maxIdLength && strlen($namespace) > $this->maxIdLength - 24) {
throw new InvalidArgumentException(sprintf('Namespace must be %d chars max, %d given ("%s")', $this->maxIdLength - 24, strlen($namespace), $namespace));
}
$this->createCacheItem = \Closure::bind(
function ($key, $value, $isHit) use ($defaultLifetime) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
$item->defaultLifetime = $defaultLifetime;
return $item;
},
null,
CacheItem::class
);
$this->mergeByLifetime = \Closure::bind(
function ($deferred, $namespace, &$expiredIds) {
$byLifetime = array();
$now = time();
$expiredIds = array();
foreach ($deferred as $key => $item) {
if (null === $item->expiry) {
$byLifetime[0 < $item->defaultLifetime ? $item->defaultLifetime : 0][$namespace.$key] = $item->value;
} elseif ($item->expiry > $now) {
$byLifetime[$item->expiry - $now][$namespace.$key] = $item->value;
} else {
$expiredIds[] = $namespace.$key;
}
}
return $byLifetime;
},
null,
CacheItem::class
);
}
public static function createSystemCache($namespace, $defaultLifetime, $version, $directory, LoggerInterface $logger = null)
{
if (null === self::$apcuSupported) {
self::$apcuSupported = ApcuAdapter::isSupported();
}
if (!self::$apcuSupported && null === self::$phpFilesSupported) {
self::$phpFilesSupported = PhpFilesAdapter::isSupported();
}
if (self::$phpFilesSupported) {
$opcache = new PhpFilesAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$opcache->setLogger($logger);
}
return $opcache;
}
$fs = new FilesystemAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$fs->setLogger($logger);
}
if (!self::$apcuSupported) {
return $fs;
}
$apcu = new ApcuAdapter($namespace, (int) $defaultLifetime / 5, $version);
if (null !== $logger) {
$apcu->setLogger($logger);
}
return new ChainAdapter(array($apcu, $fs));
}
abstract protected function doFetch(array $ids);
abstract protected function doHave($id);
abstract protected function doClear($namespace);
abstract protected function doDelete(array $ids);
abstract protected function doSave(array $values, $lifetime);
public function getItem($key)
{
if ($this->deferred) {
$this->commit();
}
$id = $this->getId($key);
$f = $this->createCacheItem;
$isHit = false;
$value = null;
try {
foreach ($this->doFetch(array($id)) as $value) {
$isHit = true;
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch key "{key}"', array('key'=> $key,'exception'=> $e));
}
return $f($key, $value, $isHit);
}
public function getItems(array $keys = array())
{
if ($this->deferred) {
$this->commit();
}
$ids = array();
foreach ($keys as $key) {
$ids[] = $this->getId($key);
}
try {
$items = $this->doFetch($ids);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', array('keys'=> $keys,'exception'=> $e));
$items = array();
}
$ids = array_combine($ids, $keys);
return $this->generateItems($items, $ids);
}
public function hasItem($key)
{
$id = $this->getId($key);
if (isset($this->deferred[$key])) {
$this->commit();
}
try {
return $this->doHave($id);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to check if key "{key}" is cached', array('key'=> $key,'exception'=> $e));
return false;
}
}
public function clear()
{
$this->deferred = array();
try {
return $this->doClear($this->namespace);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to clear the cache', array('exception'=> $e));
return false;
}
}
public function deleteItem($key)
{
return $this->deleteItems(array($key));
}
public function deleteItems(array $keys)
{
$ids = array();
foreach ($keys as $key) {
$ids[$key] = $this->getId($key);
unset($this->deferred[$key]);
}
try {
if ($this->doDelete($ids)) {
return true;
}
} catch (\Exception $e) {
}
$ok = true;
foreach ($ids as $key => $id) {
try {
$e = null;
if ($this->doDelete(array($id))) {
continue;
}
} catch (\Exception $e) {
}
CacheItem::log($this->logger,'Failed to delete key "{key}"', array('key'=> $key,'exception'=> $e));
$ok = false;
}
return $ok;
}
public function save(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return $this->commit();
}
public function saveDeferred(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return true;
}
public function commit()
{
$ok = true;
$byLifetime = $this->mergeByLifetime;
$byLifetime = $byLifetime($this->deferred, $this->namespace, $expiredIds);
$retry = $this->deferred = array();
if ($expiredIds) {
$this->doDelete($expiredIds);
}
foreach ($byLifetime as $lifetime => $values) {
try {
$e = $this->doSave($values, $lifetime);
} catch (\Exception $e) {
}
if (true === $e || array() === $e) {
continue;
}
if (is_array($e) || 1 === count($values)) {
foreach (is_array($e) ? $e : array_keys($values) as $id) {
$ok = false;
$v = $values[$id];
$type = is_object($v) ? get_class($v) : gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', array('key'=> substr($id, strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null));
}
} else {
foreach ($values as $id => $v) {
$retry[$lifetime][] = $id;
}
}
}
foreach ($retry as $lifetime => $ids) {
foreach ($ids as $id) {
try {
$v = $byLifetime[$lifetime][$id];
$e = $this->doSave(array($id => $v), $lifetime);
} catch (\Exception $e) {
}
if (true === $e || array() === $e) {
continue;
}
$ok = false;
$type = is_object($v) ? get_class($v) : gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', array('key'=> substr($id, strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null));
}
}
return $ok;
}
public function __destruct()
{
if ($this->deferred) {
$this->commit();
}
}
protected static function unserialize($value)
{
if ('b:0;'=== $value) {
return false;
}
$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
try {
if (false !== $value = unserialize($value)) {
return $value;
}
throw new \DomainException('Failed to unserialize cached value');
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
} finally {
ini_set('unserialize_callback_func', $unserializeCallbackHandler);
}
}
private function getId($key)
{
CacheItem::validateKey($key);
if (null === $this->maxIdLength) {
return $this->namespace.$key;
}
if (strlen($id = $this->namespace.$key) > $this->maxIdLength) {
$id = $this->namespace.substr_replace(base64_encode(hash('sha256', $key, true)),':', -22);
}
return $id;
}
private function generateItems($items, &$keys)
{
$f = $this->createCacheItem;
try {
foreach ($items as $id => $value) {
$key = $keys[$id];
unset($keys[$id]);
yield $key => $f($key, $value, true);
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', array('keys'=> array_values($keys),'exception'=> $e));
}
foreach ($keys as $key) {
yield $key => $f($key, null, false);
}
}
public static function handleUnserializeCallback($class)
{
throw new \DomainException('Class not found: '.$class);
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\CacheException;
class ApcuAdapter extends AbstractAdapter
{
public static function isSupported()
{
return function_exists('apcu_fetch') && ini_get('apc.enabled') && !('cli'=== PHP_SAPI && !ini_get('apc.enable_cli'));
}
public function __construct($namespace ='', $defaultLifetime = 0, $version = null)
{
if (!static::isSupported()) {
throw new CacheException('APCu is not enabled');
}
if ('cli'=== PHP_SAPI) {
ini_set('apc.use_request_time', 0);
}
parent::__construct($namespace, $defaultLifetime);
if (null !== $version) {
CacheItem::validateKey($version);
if (!apcu_exists($version.'@'.$namespace)) {
$this->clear($namespace);
apcu_add($version.'@'.$namespace, null);
}
}
}
protected function doFetch(array $ids)
{
try {
return apcu_fetch($ids);
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
}
}
protected function doHave($id)
{
return apcu_exists($id);
}
protected function doClear($namespace)
{
return isset($namespace[0]) && class_exists('APCuIterator', false)
? apcu_delete(new \APCuIterator(sprintf('/^%s/', preg_quote($namespace,'/')), APC_ITER_KEY))
: apcu_clear_cache();
}
protected function doDelete(array $ids)
{
foreach ($ids as $id) {
apcu_delete($id);
}
return true;
}
protected function doSave(array $values, $lifetime)
{
try {
return array_keys(apcu_store($values, null, $lifetime));
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (1 === count($values)) {
apcu_delete(key($values));
}
throw $e;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\Exception\InvalidArgumentException;
trait FilesystemAdapterTrait
{
private $directory;
private $tmp;
private function init($namespace, $directory)
{
if (!isset($directory[0])) {
$directory = sys_get_temp_dir().'/symfony-cache';
}
if (isset($namespace[0])) {
if (preg_match('#[^-+_.A-Za-z0-9]#', $namespace, $match)) {
throw new InvalidArgumentException(sprintf('Namespace contains "%s" but only characters in [-+_.A-Za-z0-9] are allowed.', $match[0]));
}
$directory .='/'.$namespace;
}
if (!file_exists($dir = $directory.'/.')) {
@mkdir($directory, 0777, true);
}
if (false === $dir = realpath($dir) ?: (file_exists($dir) ? $dir : false)) {
throw new InvalidArgumentException(sprintf('Cache directory does not exist (%s)', $directory));
}
if (!is_writable($dir .= DIRECTORY_SEPARATOR)) {
throw new InvalidArgumentException(sprintf('Cache directory is not writable (%s)', $directory));
}
if ('\\'=== DIRECTORY_SEPARATOR && strlen($dir) > 234) {
throw new InvalidArgumentException(sprintf('Cache directory too long (%s)', $directory));
}
$this->directory = $dir;
$this->tmp = $this->directory.uniqid('', true);
}
protected function doClear($namespace)
{
$ok = true;
foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->directory, \FilesystemIterator::SKIP_DOTS)) as $file) {
$ok = ($file->isDir() || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
protected function doDelete(array $ids)
{
$ok = true;
foreach ($ids as $id) {
$file = $this->getFile($id);
$ok = (!file_exists($file) || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
private function write($file, $data, $expiresAt = null)
{
if (false === @file_put_contents($this->tmp, $data)) {
return false;
}
if (null !== $expiresAt) {
@touch($this->tmp, $expiresAt);
}
if (@rename($this->tmp, $file)) {
return true;
}
@unlink($this->tmp);
return false;
}
private function getFile($id, $mkdir = false)
{
$hash = str_replace('/','-', base64_encode(hash('sha256', static::class.$id, true)));
$dir = $this->directory.strtoupper($hash[0].DIRECTORY_SEPARATOR.$hash[1].DIRECTORY_SEPARATOR);
if ($mkdir && !file_exists($dir)) {
@mkdir($dir, 0777, true);
}
return $dir.substr($hash, 2, 20);
}
}
}
namespace Symfony\Component\Cache\Adapter
{
class FilesystemAdapter extends AbstractAdapter
{
use FilesystemAdapterTrait;
public function __construct($namespace ='', $defaultLifetime = 0, $directory = null)
{
parent::__construct('', $defaultLifetime);
$this->init($namespace, $directory);
}
protected function doFetch(array $ids)
{
$values = array();
$now = time();
foreach ($ids as $id) {
$file = $this->getFile($id);
if (!file_exists($file) || !$h = @fopen($file,'rb')) {
continue;
}
if ($now >= (int) $expiresAt = fgets($h)) {
fclose($h);
if (isset($expiresAt[0])) {
@unlink($file);
}
} else {
$i = rawurldecode(rtrim(fgets($h)));
$value = stream_get_contents($h);
fclose($h);
if ($i === $id) {
$values[$id] = parent::unserialize($value);
}
}
}
return $values;
}
protected function doHave($id)
{
$file = $this->getFile($id);
return file_exists($file) && (@filemtime($file) > time() || $this->doFetch(array($id)));
}
protected function doSave(array $values, $lifetime)
{
$ok = true;
$expiresAt = time() + ($lifetime ?: 31557600);
foreach ($values as $id => $value) {
$ok = $this->write($this->getFile($id, true), $expiresAt."\n".rawurlencode($id)."\n".serialize($value), $expiresAt) && $ok;
}
return $ok;
}
}
}
namespace Psr\Cache
{
interface CacheItemInterface
{
public function getKey();
public function get();
public function isHit();
public function set($value);
public function expiresAt($expiration);
public function expiresAfter($time);
}
}
namespace Symfony\Component\Cache
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
final class CacheItem implements CacheItemInterface
{
protected $key;
protected $value;
protected $isHit;
protected $expiry;
protected $defaultLifetime;
protected $tags = array();
protected $innerItem;
protected $poolHash;
public function getKey()
{
return $this->key;
}
public function get()
{
return $this->value;
}
public function isHit()
{
return $this->isHit;
}
public function set($value)
{
$this->value = $value;
return $this;
}
public function expiresAt($expiration)
{
if (null === $expiration) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($expiration instanceof \DateTimeInterface) {
$this->expiry = (int) $expiration->format('U');
} else {
throw new InvalidArgumentException(sprintf('Expiration date must implement DateTimeInterface or be null, "%s" given', is_object($expiration) ? get_class($expiration) : gettype($expiration)));
}
return $this;
}
public function expiresAfter($time)
{
if (null === $time) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($time instanceof \DateInterval) {
$this->expiry = (int) \DateTime::createFromFormat('U', time())->add($time)->format('U');
} elseif (is_int($time)) {
$this->expiry = $time + time();
} else {
throw new InvalidArgumentException(sprintf('Expiration date must be an integer, a DateInterval or null, "%s" given', is_object($time) ? get_class($time) : gettype($time)));
}
return $this;
}
public function tag($tags)
{
if (!is_array($tags)) {
$tags = array($tags);
}
foreach ($tags as $tag) {
if (!is_string($tag)) {
throw new InvalidArgumentException(sprintf('Cache tag must be string, "%s" given', is_object($tag) ? get_class($tag) : gettype($tag)));
}
if (isset($this->tags[$tag])) {
continue;
}
if (!isset($tag[0])) {
throw new InvalidArgumentException('Cache tag length must be greater than zero');
}
if (isset($tag[strcspn($tag,'{}()/\@:')])) {
throw new InvalidArgumentException(sprintf('Cache tag "%s" contains reserved characters {}()/\@:', $tag));
}
$this->tags[$tag] = $tag;
}
return $this;
}
public static function validateKey($key)
{
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given', is_object($key) ? get_class($key) : gettype($key)));
}
if (!isset($key[0])) {
throw new InvalidArgumentException('Cache key length must be greater than zero');
}
if (isset($key[strcspn($key,'{}()/\@:')])) {
throw new InvalidArgumentException(sprintf('Cache key "%s" contains reserved characters {}()/\@:', $key));
}
}
public static function log(LoggerInterface $logger = null, $message, $context = array())
{
if ($logger) {
$logger->warning($message, $context);
} else {
$replace = array();
foreach ($context as $k => $v) {
if (is_scalar($v)) {
$replace['{'.$k.'}'] = $v;
}
}
@trigger_error(strtr($message, $replace), E_USER_WARNING);
}
}
}
}
namespace Symfony\Component\Routing
{
interface RequestContextAwareInterface
{
public function setContext(RequestContext $context);
public function getContext();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContextAwareInterface;
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
const ABSOLUTE_URL = 0;
const ABSOLUTE_PATH = 1;
const RELATIVE_PATH = 2;
const NETWORK_PATH = 3;
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH);
}
}
namespace Symfony\Component\Routing\Generator
{
interface ConfigurableRequirementsInterface
{
public function setStrictRequirements($enabled);
public function isStrictRequirements();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Psr\Log\LoggerInterface;
class UrlGenerator implements UrlGeneratorInterface, ConfigurableRequirementsInterface
{
protected $routes;
protected $context;
protected $strictRequirements = true;
protected $logger;
protected $decodedChars = array('%2F'=>'/','%40'=>'@','%3A'=>':','%3B'=>';','%2C'=>',','%3D'=>'=','%2B'=>'+','%21'=>'!','%2A'=>'*','%7C'=>'|',
);
public function __construct(RouteCollection $routes, RequestContext $context, LoggerInterface $logger = null)
{
$this->routes = $routes;
$this->context = $context;
$this->logger = $logger;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function setStrictRequirements($enabled)
{
$this->strictRequirements = null === $enabled ? null : (bool) $enabled;
}
public function isStrictRequirements()
{
return $this->strictRequirements;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
if (null === $route = $this->routes->get($name)) {
throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
}
$compiledRoute = $route->compile();
return $this->doGenerate($compiledRoute->getVariables(), $route->getDefaults(), $route->getRequirements(), $compiledRoute->getTokens(), $parameters, $name, $referenceType, $compiledRoute->getHostTokens(), $route->getSchemes());
}
protected function doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, array $requiredSchemes = array())
{
$variables = array_flip($variables);
$mergedParams = array_replace($defaults, $this->context->getParameters(), $parameters);
if ($diff = array_diff_key($variables, $mergedParams)) {
throw new MissingMandatoryParametersException(sprintf('Some mandatory parameters are missing ("%s") to generate a URL for route "%s".', implode('", "', array_keys($diff)), $name));
}
$url ='';
$optional = true;
$message ='Parameter "{parameter}" for route "{route}" must match "{expected}" ("{given}" given) to generate a corresponding URL.';
foreach ($tokens as $token) {
if ('variable'=== $token[0]) {
if (!$optional || !array_key_exists($token[3], $defaults) || null !== $mergedParams[$token[3]] && (string) $mergedParams[$token[3]] !== (string) $defaults[$token[3]]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, array('{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]])));
}
if ($this->logger) {
$this->logger->error($message, array('parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]));
}
return;
}
$url = $token[1].$mergedParams[$token[3]].$url;
$optional = false;
}
} else {
$url = $token[1].$url;
$optional = false;
}
}
if (''=== $url) {
$url ='/';
}
$url = strtr(rawurlencode($url), $this->decodedChars);
$url = strtr($url, array('/../'=>'/%2E%2E/','/./'=>'/%2E/'));
if ('/..'=== substr($url, -3)) {
$url = substr($url, 0, -2).'%2E%2E';
} elseif ('/.'=== substr($url, -2)) {
$url = substr($url, 0, -1).'%2E';
}
$schemeAuthority ='';
if ($host = $this->context->getHost()) {
$scheme = $this->context->getScheme();
if ($requiredSchemes) {
if (!in_array($scheme, $requiredSchemes, true)) {
$referenceType = self::ABSOLUTE_URL;
$scheme = current($requiredSchemes);
}
}
if ($hostTokens) {
$routeHost ='';
foreach ($hostTokens as $token) {
if ('variable'=== $token[0]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#i'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, array('{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]])));
}
if ($this->logger) {
$this->logger->error($message, array('parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]));
}
return;
}
$routeHost = $token[1].$mergedParams[$token[3]].$routeHost;
} else {
$routeHost = $token[1].$routeHost;
}
}
if ($routeHost !== $host) {
$host = $routeHost;
if (self::ABSOLUTE_URL !== $referenceType) {
$referenceType = self::NETWORK_PATH;
}
}
}
if (self::ABSOLUTE_URL === $referenceType || self::NETWORK_PATH === $referenceType) {
$port ='';
if ('http'=== $scheme && 80 != $this->context->getHttpPort()) {
$port =':'.$this->context->getHttpPort();
} elseif ('https'=== $scheme && 443 != $this->context->getHttpsPort()) {
$port =':'.$this->context->getHttpsPort();
}
$schemeAuthority = self::NETWORK_PATH === $referenceType ?'//': "$scheme://";
$schemeAuthority .= $host.$port;
}
}
if (self::RELATIVE_PATH === $referenceType) {
$url = self::getRelativePath($this->context->getPathInfo(), $url);
} else {
$url = $schemeAuthority.$this->context->getBaseUrl().$url;
}
$extra = array_udiff_assoc(array_diff_key($parameters, $variables), $defaults, function ($a, $b) {
return $a == $b ? 0 : 1;
});
$fragment ='';
if (isset($defaults['_fragment'])) {
$fragment = $defaults['_fragment'];
}
if (isset($extra['_fragment'])) {
$fragment = $extra['_fragment'];
unset($extra['_fragment']);
}
if ($extra && $query = http_build_query($extra,'','&', PHP_QUERY_RFC3986)) {
$url .='?'.strtr($query, array('%2F'=>'/'));
}
if (''!== $fragment) {
$url .='#'.strtr(rawurlencode($fragment), array('%2F'=>'/','%3F'=>'?'));
}
return $url;
}
public static function getRelativePath($basePath, $targetPath)
{
if ($basePath === $targetPath) {
return'';
}
$sourceDirs = explode('/', isset($basePath[0]) &&'/'=== $basePath[0] ? substr($basePath, 1) : $basePath);
$targetDirs = explode('/', isset($targetPath[0]) &&'/'=== $targetPath[0] ? substr($targetPath, 1) : $targetPath);
array_pop($sourceDirs);
$targetFile = array_pop($targetDirs);
foreach ($sourceDirs as $i => $dir) {
if (isset($targetDirs[$i]) && $dir === $targetDirs[$i]) {
unset($sourceDirs[$i], $targetDirs[$i]);
} else {
break;
}
}
$targetDirs[] = $targetFile;
$path = str_repeat('../', count($sourceDirs)).implode('/', $targetDirs);
return''=== $path ||'/'=== $path[0]
|| false !== ($colonPos = strpos($path,':')) && ($colonPos < ($slashPos = strpos($path,'/')) || false === $slashPos)
? "./$path" : $path;
}
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\HttpFoundation\Request;
class RequestContext
{
private $baseUrl;
private $pathInfo;
private $method;
private $host;
private $scheme;
private $httpPort;
private $httpsPort;
private $queryString;
private $parameters = array();
public function __construct($baseUrl ='', $method ='GET', $host ='localhost', $scheme ='http', $httpPort = 80, $httpsPort = 443, $path ='/', $queryString ='')
{
$this->setBaseUrl($baseUrl);
$this->setMethod($method);
$this->setHost($host);
$this->setScheme($scheme);
$this->setHttpPort($httpPort);
$this->setHttpsPort($httpsPort);
$this->setPathInfo($path);
$this->setQueryString($queryString);
}
public function fromRequest(Request $request)
{
$this->setBaseUrl($request->getBaseUrl());
$this->setPathInfo($request->getPathInfo());
$this->setMethod($request->getMethod());
$this->setHost($request->getHost());
$this->setScheme($request->getScheme());
$this->setHttpPort($request->isSecure() ? $this->httpPort : $request->getPort());
$this->setHttpsPort($request->isSecure() ? $request->getPort() : $this->httpsPort);
$this->setQueryString($request->server->get('QUERY_STRING',''));
return $this;
}
public function getBaseUrl()
{
return $this->baseUrl;
}
public function setBaseUrl($baseUrl)
{
$this->baseUrl = $baseUrl;
return $this;
}
public function getPathInfo()
{
return $this->pathInfo;
}
public function setPathInfo($pathInfo)
{
$this->pathInfo = $pathInfo;
return $this;
}
public function getMethod()
{
return $this->method;
}
public function setMethod($method)
{
$this->method = strtoupper($method);
return $this;
}
public function getHost()
{
return $this->host;
}
public function setHost($host)
{
$this->host = strtolower($host);
return $this;
}
public function getScheme()
{
return $this->scheme;
}
public function setScheme($scheme)
{
$this->scheme = strtolower($scheme);
return $this;
}
public function getHttpPort()
{
return $this->httpPort;
}
public function setHttpPort($httpPort)
{
$this->httpPort = (int) $httpPort;
return $this;
}
public function getHttpsPort()
{
return $this->httpsPort;
}
public function setHttpsPort($httpsPort)
{
$this->httpsPort = (int) $httpsPort;
return $this;
}
public function getQueryString()
{
return $this->queryString;
}
public function setQueryString($queryString)
{
$this->queryString = (string) $queryString;
return $this;
}
public function getParameters()
{
return $this->parameters;
}
public function setParameters(array $parameters)
{
$this->parameters = $parameters;
return $this;
}
public function getParameter($name)
{
return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
}
public function hasParameter($name)
{
return array_key_exists($name, $this->parameters);
}
public function setParameter($name, $parameter)
{
$this->parameters[$name] = $parameter;
return $this;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface UrlMatcherInterface extends RequestContextAwareInterface
{
public function match($pathinfo);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
interface RouterInterface extends UrlMatcherInterface, UrlGeneratorInterface
{
public function getRouteCollection();
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface RequestMatcherInterface
{
public function matchRequest(Request $request);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\ConfigCacheInterface;
use Symfony\Component\Config\ConfigCacheFactoryInterface;
use Symfony\Component\Config\ConfigCacheFactory;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\ConfigurableRequirementsInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumperInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class Router implements RouterInterface, RequestMatcherInterface
{
protected $matcher;
protected $generator;
protected $context;
protected $loader;
protected $collection;
protected $resource;
protected $options = array();
protected $logger;
private $configCacheFactory;
private $expressionLanguageProviders = array();
public function __construct(LoaderInterface $loader, $resource, array $options = array(), RequestContext $context = null, LoggerInterface $logger = null)
{
$this->loader = $loader;
$this->resource = $resource;
$this->logger = $logger;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function setOptions(array $options)
{
$this->options = array('cache_dir'=> null,'debug'=> false,'generator_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_base_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_dumper_class'=>'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper','generator_cache_class'=>'ProjectUrlGenerator','matcher_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_base_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_dumper_class'=>'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper','matcher_cache_class'=>'ProjectUrlMatcher','resource_type'=> null,'strict_requirements'=> true,
);
$invalid = array();
foreach ($options as $key => $value) {
if (array_key_exists($key, $this->options)) {
$this->options[$key] = $value;
} else {
$invalid[] = $key;
}
}
if ($invalid) {
throw new \InvalidArgumentException(sprintf('The Router does not support the following options: "%s".', implode('", "', $invalid)));
}
}
public function setOption($key, $value)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
$this->options[$key] = $value;
}
public function getOption($key)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
return $this->options[$key];
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->loader->load($this->resource, $this->options['resource_type']);
}
return $this->collection;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
if (null !== $this->matcher) {
$this->getMatcher()->setContext($context);
}
if (null !== $this->generator) {
$this->getGenerator()->setContext($context);
}
}
public function getContext()
{
return $this->context;
}
public function setConfigCacheFactory(ConfigCacheFactoryInterface $configCacheFactory)
{
$this->configCacheFactory = $configCacheFactory;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
return $this->getGenerator()->generate($name, $parameters, $referenceType);
}
public function match($pathinfo)
{
return $this->getMatcher()->match($pathinfo);
}
public function matchRequest(Request $request)
{
$matcher = $this->getMatcher();
if (!$matcher instanceof RequestMatcherInterface) {
return $matcher->match($request->getPathInfo());
}
return $matcher->matchRequest($request);
}
public function getMatcher()
{
if (null !== $this->matcher) {
return $this->matcher;
}
if (null === $this->options['cache_dir'] || null === $this->options['matcher_cache_class']) {
$this->matcher = new $this->options['matcher_class']($this->getRouteCollection(), $this->context);
if (method_exists($this->matcher,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$this->matcher->addExpressionLanguageProvider($provider);
}
}
return $this->matcher;
}
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['matcher_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getMatcherDumperInstance();
if (method_exists($dumper,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$dumper->addExpressionLanguageProvider($provider);
}
}
$options = array('class'=> $this->options['matcher_cache_class'],'base_class'=> $this->options['matcher_base_class'],
);
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
return $this->matcher = new $this->options['matcher_cache_class']($this->context);
}
public function getGenerator()
{
if (null !== $this->generator) {
return $this->generator;
}
if (null === $this->options['cache_dir'] || null === $this->options['generator_cache_class']) {
$this->generator = new $this->options['generator_class']($this->getRouteCollection(), $this->context, $this->logger);
} else {
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['generator_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getGeneratorDumperInstance();
$options = array('class'=> $this->options['generator_cache_class'],'base_class'=> $this->options['generator_base_class'],
);
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
$this->generator = new $this->options['generator_cache_class']($this->context, $this->logger);
}
if ($this->generator instanceof ConfigurableRequirementsInterface) {
$this->generator->setStrictRequirements($this->options['strict_requirements']);
}
return $this->generator;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function getGeneratorDumperInstance()
{
return new $this->options['generator_dumper_class']($this->getRouteCollection());
}
protected function getMatcherDumperInstance()
{
return new $this->options['matcher_dumper_class']($this->getRouteCollection());
}
private function getConfigCacheFactory()
{
if (null === $this->configCacheFactory) {
$this->configCacheFactory = new ConfigCacheFactory($this->options['debug']);
}
return $this->configCacheFactory;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
interface RedirectableUrlMatcherInterface
{
public function redirect($path, $route, $scheme = null);
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
const REQUIREMENT_MATCH = 0;
const REQUIREMENT_MISMATCH = 1;
const ROUTE_MATCH = 2;
protected $context;
protected $allow = array();
protected $routes;
protected $request;
protected $expressionLanguage;
protected $expressionLanguageProviders = array();
public function __construct(RouteCollection $routes, RequestContext $context)
{
$this->routes = $routes;
$this->context = $context;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function match($pathinfo)
{
$this->allow = array();
if ($ret = $this->matchCollection(rawurldecode($pathinfo), $this->routes)) {
return $ret;
}
throw 0 < count($this->allow)
? new MethodNotAllowedException(array_unique($this->allow))
: new ResourceNotFoundException(sprintf('No routes found for "%s".', $pathinfo));
}
public function matchRequest(Request $request)
{
$this->request = $request;
$ret = $this->match($request->getPathInfo());
$this->request = null;
return $ret;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function matchCollection($pathinfo, RouteCollection $routes)
{
foreach ($routes as $name => $route) {
$compiledRoute = $route->compile();
if (''!== $compiledRoute->getStaticPrefix() && 0 !== strpos($pathinfo, $compiledRoute->getStaticPrefix())) {
continue;
}
if (!preg_match($compiledRoute->getRegex(), $pathinfo, $matches)) {
continue;
}
$hostMatches = array();
if ($compiledRoute->getHostRegex() && !preg_match($compiledRoute->getHostRegex(), $this->context->getHost(), $hostMatches)) {
continue;
}
if ($requiredMethods = $route->getMethods()) {
if ('HEAD'=== $method = $this->context->getMethod()) {
$method ='GET';
}
if (!in_array($method, $requiredMethods)) {
$this->allow = array_merge($this->allow, $requiredMethods);
continue;
}
}
$status = $this->handleRouteRequirements($pathinfo, $name, $route);
if (self::ROUTE_MATCH === $status[0]) {
return $status[1];
}
if (self::REQUIREMENT_MISMATCH === $status[0]) {
continue;
}
return $this->getAttributes($route, $name, array_replace($matches, $hostMatches));
}
}
protected function getAttributes(Route $route, $name, array $attributes)
{
$attributes['_route'] = $name;
return $this->mergeDefaults($attributes, $route->getDefaults());
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$status = $route->getSchemes() && !$route->hasScheme($scheme) ? self::REQUIREMENT_MISMATCH : self::REQUIREMENT_MATCH;
return array($status, null);
}
protected function mergeDefaults($params, $defaults)
{
foreach ($params as $key => $value) {
if (!is_int($key)) {
$defaults[$key] = $value;
}
}
return $defaults;
}
protected function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage(null, $this->expressionLanguageProviders);
}
return $this->expressionLanguage;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Route;
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
public function match($pathinfo)
{
try {
$parameters = parent::match($pathinfo);
} catch (ResourceNotFoundException $e) {
if ('/'=== substr($pathinfo, -1) || !in_array($this->context->getMethod(), array('HEAD','GET'))) {
throw $e;
}
try {
parent::match($pathinfo.'/');
return $this->redirect($pathinfo.'/', null);
} catch (ResourceNotFoundException $e2) {
throw $e;
}
}
return $parameters;
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$schemes = $route->getSchemes();
if ($schemes && !$route->hasScheme($scheme)) {
return array(self::ROUTE_MATCH, $this->redirect($pathinfo, $name, current($schemes)));
}
return array(self::REQUIREMENT_MATCH, null);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher as BaseMatcher;
class RedirectableUrlMatcher extends BaseMatcher
{
public function redirect($path, $route, $scheme = null)
{
return array('_controller'=>'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction','path'=> $path,'permanent'=> true,'scheme'=> $scheme,'httpPort'=> $this->context->getHttpPort(),'httpsPort'=> $this->context->getHttpsPort(),'_route'=> $route,
);
}
}
}
namespace Symfony\Component\HttpKernel\CacheWarmer
{
interface WarmableInterface
{
public function warmUp($cacheDir);
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Router as BaseRouter;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
class Router extends BaseRouter implements WarmableInterface
{
private $container;
public function __construct(ContainerInterface $container, $resource, array $options = array(), RequestContext $context = null)
{
$this->container = $container;
$this->resource = $resource;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->container->get('routing.loader')->load($this->resource, $this->options['resource_type']);
$this->resolveParameters($this->collection);
}
return $this->collection;
}
public function warmUp($cacheDir)
{
$currentDir = $this->getOption('cache_dir');
$this->setOption('cache_dir', $cacheDir);
$this->getMatcher();
$this->getGenerator();
$this->setOption('cache_dir', $currentDir);
}
private function resolveParameters(RouteCollection $collection)
{
foreach ($collection as $route) {
foreach ($route->getDefaults() as $name => $value) {
$route->setDefault($name, $this->resolve($value));
}
foreach ($route->getRequirements() as $name => $value) {
$route->setRequirement($name, $this->resolve($value));
}
$route->setPath($this->resolve($route->getPath()));
$route->setHost($this->resolve($route->getHost()));
$schemes = array();
foreach ($route->getSchemes() as $scheme) {
$schemes = array_merge($schemes, explode('|', $this->resolve($scheme)));
}
$route->setSchemes($schemes);
$methods = array();
foreach ($route->getMethods() as $method) {
$methods = array_merge($methods, explode('|', $this->resolve($method)));
}
$route->setMethods($methods);
$route->setCondition($this->resolve($route->getCondition()));
}
}
private function resolve($value)
{
if (is_array($value)) {
foreach ($value as $key => $val) {
$value[$key] = $this->resolve($val);
}
return $value;
}
if (!is_string($value)) {
return $value;
}
$container = $this->container;
$escapedValue = preg_replace_callback('/%%|%([^%\s]++)%/', function ($match) use ($container, $value) {
if (!isset($match[1])) {
return'%%';
}
if (preg_match('/^env\(\w+\)$/', $match[1])) {
throw new RuntimeException(sprintf('Using "%%%s%%" is not allowed in routing configuration.', $match[1]));
}
$resolved = $container->getParameter($match[1]);
if (is_string($resolved) || is_numeric($resolved)) {
return (string) $resolved;
}
throw new RuntimeException(sprintf('The container parameter "%s", used in the route configuration value "%s", '.'must be a string or numeric, but it is of type %s.',
$match[1],
$value,
gettype($resolved)
)
);
}, $value);
return str_replace('%%','%', $escapedValue);
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
class PhpArrayAdapter implements AdapterInterface
{
private $file;
private $values;
private $createCacheItem;
private $fallbackPool;
public function __construct($file, AdapterInterface $fallbackPool)
{
$this->file = $file;
$this->fallbackPool = $fallbackPool;
$this->createCacheItem = \Closure::bind(
function ($key, $value, $isHit) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
return $item;
},
null,
CacheItem::class
);
}
public static function create($file, CacheItemPoolInterface $fallbackPool)
{
if ((PHP_VERSION_ID >= 70000 && ini_get('opcache.enable')) || defined('HHVM_VERSION')) {
if (!$fallbackPool instanceof AdapterInterface) {
$fallbackPool = new ProxyAdapter($fallbackPool);
}
return new static($file, $fallbackPool);
}
return $fallbackPool;
}
public function warmUp(array $values)
{
if (file_exists($this->file)) {
if (!is_file($this->file)) {
throw new InvalidArgumentException(sprintf('Cache path exists and is not a file: %s.', $this->file));
}
if (!is_writable($this->file)) {
throw new InvalidArgumentException(sprintf('Cache file is not writable: %s.', $this->file));
}
} else {
$directory = dirname($this->file);
if (!is_dir($directory) && !@mkdir($directory, 0777, true)) {
throw new InvalidArgumentException(sprintf('Cache directory does not exist and cannot be created: %s.', $directory));
}
if (!is_writable($directory)) {
throw new InvalidArgumentException(sprintf('Cache directory is not writable: %s.', $directory));
}
}
$dump =<<<'EOF'
<?php

// This file has been auto-generated by the Symfony Cache Component.

return array(


EOF
;
foreach ($values as $key => $value) {
CacheItem::validateKey(is_int($key) ? (string) $key : $key);
if (null === $value || is_object($value)) {
try {
$value = serialize($value);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, get_class($value)), 0, $e);
}
} elseif (is_array($value)) {
try {
$serialized = serialize($value);
$unserialized = unserialize($serialized);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable array value.', $key), 0, $e);
}
if ($unserialized !== $value || (false !== strpos($serialized,';R:') && preg_match('/;R:[1-9]/', $serialized))) {
$value = $serialized;
}
} elseif (is_string($value)) {
if ('N;'=== $value || (isset($value[2]) &&':'=== $value[1])) {
$value = serialize($value);
}
} elseif (!is_scalar($value)) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, gettype($value)));
}
$dump .= var_export($key, true).' => '.var_export($value, true).",\n";
}
$dump .="\n);\n";
$dump = str_replace("' . \"\\0\" . '","\0", $dump);
$tmpFile = uniqid($this->file, true);
file_put_contents($tmpFile, $dump);
@chmod($tmpFile, 0666);
unset($serialized, $unserialized, $value, $dump);
@rename($tmpFile, $this->file);
$this->values = (include $this->file) ?: array();
}
public function getItem($key)
{
if (null === $this->values) {
$this->initialize();
}
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (!isset($this->values[$key])) {
return $this->fallbackPool->getItem($key);
}
$value = $this->values[$key];
$isHit = true;
if ('N;'=== $value) {
$value = null;
} elseif (is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
$e = null;
$value = unserialize($value);
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (null !== $e) {
$value = null;
$isHit = false;
}
}
$f = $this->createCacheItem;
return $f($key, $value, $isHit);
}
public function getItems(array $keys = array())
{
if (null === $this->values) {
$this->initialize();
}
foreach ($keys as $key) {
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
}
return $this->generateItems($keys);
}
public function hasItem($key)
{
if (null === $this->values) {
$this->initialize();
}
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
return isset($this->values[$key]) || $this->fallbackPool->hasItem($key);
}
public function clear()
{
$this->values = array();
$cleared = @unlink($this->file) || !file_exists($this->file);
return $this->fallbackPool->clear() && $cleared;
}
public function deleteItem($key)
{
if (null === $this->values) {
$this->initialize();
}
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
return !isset($this->values[$key]) && $this->fallbackPool->deleteItem($key);
}
public function deleteItems(array $keys)
{
if (null === $this->values) {
$this->initialize();
}
$deleted = true;
$fallbackKeys = array();
foreach ($keys as $key) {
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (isset($this->values[$key])) {
$deleted = false;
} else {
$fallbackKeys[] = $key;
}
}
if ($fallbackKeys) {
$deleted = $this->fallbackPool->deleteItems($fallbackKeys) && $deleted;
}
return $deleted;
}
public function save(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->fallbackPool->save($item);
}
public function saveDeferred(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->fallbackPool->saveDeferred($item);
}
public function commit()
{
return $this->fallbackPool->commit();
}
private function initialize()
{
$this->values = @(include $this->file) ?: array();
}
private function generateItems(array $keys)
{
$f = $this->createCacheItem;
$fallbackKeys = array();
foreach ($keys as $key) {
if (isset($this->values[$key])) {
$value = $this->values[$key];
if ('N;'=== $value) {
yield $key => $f($key, null, true);
} elseif (is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
yield $key => $f($key, unserialize($value), true);
} catch (\Error $e) {
yield $key => $f($key, null, false);
} catch (\Exception $e) {
yield $key => $f($key, null, false);
}
} else {
yield $key => $f($key, $value, true);
}
} else {
$fallbackKeys[] = $key;
}
}
if ($fallbackKeys) {
foreach ($this->fallbackPool->getItems($fallbackKeys) as $key => $item) {
yield $key => $item;
}
}
}
}
}
namespace Doctrine\Common\Cache
{
interface MultiPutCache
{
function saveMultiple(array $keysAndValues, $lifetime = 0);
}
}
namespace Doctrine\Common\Cache
{
interface MultiGetCache
{
function fetchMultiple(array $keys);
}
}
namespace Doctrine\Common\Cache
{
interface ClearableCache
{
public function deleteAll();
}
}
namespace Doctrine\Common\Cache
{
interface FlushableCache
{
public function flushAll();
}
}
namespace Doctrine\Common\Cache
{
interface Cache
{
const STATS_HITS ='hits';
const STATS_MISSES ='misses';
const STATS_UPTIME ='uptime';
const STATS_MEMORY_USAGE ='memory_usage';
const STATS_MEMORY_AVAILABLE ='memory_available';
const STATS_MEMORY_AVAILIABLE ='memory_available';
public function fetch($id);
public function contains($id);
public function save($id, $data, $lifeTime = 0);
public function delete($id);
public function getStats();
}
}
namespace Doctrine\Common\Cache
{
abstract class CacheProvider implements Cache, FlushableCache, ClearableCache, MultiGetCache, MultiPutCache
{
const DOCTRINE_NAMESPACE_CACHEKEY ='DoctrineNamespaceCacheKey[%s]';
private $namespace ='';
private $namespaceVersion;
public function setNamespace($namespace)
{
$this->namespace = (string) $namespace;
$this->namespaceVersion = null;
}
public function getNamespace()
{
return $this->namespace;
}
public function fetch($id)
{
return $this->doFetch($this->getNamespacedId($id));
}
public function fetchMultiple(array $keys)
{
if (empty($keys)) {
return array();
}
$namespacedKeys = array_combine($keys, array_map(array($this,'getNamespacedId'), $keys));
$items = $this->doFetchMultiple($namespacedKeys);
$foundItems = array();
foreach ($namespacedKeys as $requestedKey => $namespacedKey) {
if (isset($items[$namespacedKey]) || array_key_exists($namespacedKey, $items)) {
$foundItems[$requestedKey] = $items[$namespacedKey];
}
}
return $foundItems;
}
public function saveMultiple(array $keysAndValues, $lifetime = 0)
{
$namespacedKeysAndValues = array();
foreach ($keysAndValues as $key => $value) {
$namespacedKeysAndValues[$this->getNamespacedId($key)] = $value;
}
return $this->doSaveMultiple($namespacedKeysAndValues, $lifetime);
}
public function contains($id)
{
return $this->doContains($this->getNamespacedId($id));
}
public function save($id, $data, $lifeTime = 0)
{
return $this->doSave($this->getNamespacedId($id), $data, $lifeTime);
}
public function delete($id)
{
return $this->doDelete($this->getNamespacedId($id));
}
public function getStats()
{
return $this->doGetStats();
}
public function flushAll()
{
return $this->doFlush();
}
public function deleteAll()
{
$namespaceCacheKey = $this->getNamespaceCacheKey();
$namespaceVersion = $this->getNamespaceVersion() + 1;
if ($this->doSave($namespaceCacheKey, $namespaceVersion)) {
$this->namespaceVersion = $namespaceVersion;
return true;
}
return false;
}
private function getNamespacedId($id)
{
$namespaceVersion = $this->getNamespaceVersion();
return sprintf('%s[%s][%s]', $this->namespace, $id, $namespaceVersion);
}
private function getNamespaceCacheKey()
{
return sprintf(self::DOCTRINE_NAMESPACE_CACHEKEY, $this->namespace);
}
private function getNamespaceVersion()
{
if (null !== $this->namespaceVersion) {
return $this->namespaceVersion;
}
$namespaceCacheKey = $this->getNamespaceCacheKey();
$this->namespaceVersion = $this->doFetch($namespaceCacheKey) ?: 1;
return $this->namespaceVersion;
}
protected function doFetchMultiple(array $keys)
{
$returnValues = array();
foreach ($keys as $key) {
if (false !== ($item = $this->doFetch($key)) || $this->doContains($key)) {
$returnValues[$key] = $item;
}
}
return $returnValues;
}
abstract protected function doFetch($id);
abstract protected function doContains($id);
protected function doSaveMultiple(array $keysAndValues, $lifetime = 0)
{
$success = true;
foreach ($keysAndValues as $key => $value) {
if (!$this->doSave($key, $value, $lifetime)) {
$success = false;
}
}
return $success;
}
abstract protected function doSave($id, $data, $lifeTime = 0);
abstract protected function doDelete($id);
abstract protected function doFlush();
abstract protected function doGetStats();
}
}
namespace Symfony\Component\Cache
{
use Doctrine\Common\Cache\CacheProvider;
use Psr\Cache\CacheItemPoolInterface;
class DoctrineProvider extends CacheProvider
{
private $pool;
public function __construct(CacheItemPoolInterface $pool)
{
$this->pool = $pool;
}
protected function doFetch($id)
{
$item = $this->pool->getItem(rawurlencode($id));
return $item->isHit() ? $item->get() : false;
}
protected function doContains($id)
{
return $this->pool->hasItem(rawurlencode($id));
}
protected function doSave($id, $data, $lifeTime = 0)
{
$item = $this->pool->getItem(rawurlencode($id));
if (0 < $lifeTime) {
$item->expiresAfter($lifeTime);
}
return $this->pool->save($item->set($data));
}
protected function doDelete($id)
{
return $this->pool->deleteItem(rawurlencode($id));
}
protected function doFlush()
{
$this->pool->clear();
}
protected function doGetStats()
{
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\ResourceInterface;
interface ConfigCacheInterface
{
public function getPath();
public function isFresh();
public function write($content, array $metadata = null);
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\ResourceInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;
class ResourceCheckerConfigCache implements ConfigCacheInterface
{
private $file;
private $resourceCheckers;
public function __construct($file, array $resourceCheckers = array())
{
$this->file = $file;
$this->resourceCheckers = $resourceCheckers;
}
public function getPath()
{
return $this->file;
}
public function isFresh()
{
if (!is_file($this->file)) {
return false;
}
if (!$this->resourceCheckers) {
return true; }
$metadata = $this->getMetaFile();
if (!is_file($metadata)) {
return true;
}
$metadata = $this->getMetaFile();
if (!is_file($metadata)) {
return false;
}
$e = null;
$meta = false;
$time = filemtime($this->file);
$signalingException = new \UnexpectedValueException();
$prevUnserializeHandler = ini_set('unserialize_callback_func','');
$prevErrorHandler = set_error_handler(function ($type, $msg, $file, $line, $context) use (&$prevErrorHandler, $signalingException) {
if (E_WARNING === $type &&'Class __PHP_Incomplete_Class has no unserializer'=== $msg) {
throw $signalingException;
}
return $prevErrorHandler ? $prevErrorHandler($type, $msg, $file, $line, $context) : false;
});
try {
$meta = unserialize(file_get_contents($metadata));
} catch (\Error $e) {
} catch (\Exception $e) {
}
restore_error_handler();
ini_set('unserialize_callback_func', $prevUnserializeHandler);
if (null !== $e && $e !== $signalingException) {
throw $e;
}
if (false === $meta) {
return false;
}
foreach ($meta as $resource) {
foreach ($this->resourceCheckers as $checker) {
if (!$checker->supports($resource)) {
continue; }
if ($checker->isFresh($resource, $time)) {
break; }
return false; }
}
return true;
}
public function write($content, array $metadata = null)
{
$mode = 0666;
$umask = umask();
$filesystem = new Filesystem();
$filesystem->dumpFile($this->file, $content, null);
try {
$filesystem->chmod($this->file, $mode, $umask);
} catch (IOException $e) {
}
if (null !== $metadata) {
$filesystem->dumpFile($this->getMetaFile(), serialize($metadata), null);
try {
$filesystem->chmod($this->getMetaFile(), $mode, $umask);
} catch (IOException $e) {
}
}
}
private function getMetaFile()
{
return $this->file.'.meta';
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\SelfCheckingResourceChecker;
class ConfigCache extends ResourceCheckerConfigCache
{
private $debug;
public function __construct($file, $debug)
{
$this->debug = (bool) $debug;
$checkers = array();
if (true === $this->debug) {
$checkers = array(new SelfCheckingResourceChecker());
}
parent::__construct($file, $checkers);
}
public function isFresh()
{
if (!$this->debug && is_file($this->getPath())) {
return true;
}
return parent::isFresh();
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
class FileLocator implements FileLocatorInterface
{
protected $paths;
public function __construct($paths = array())
{
$this->paths = (array) $paths;
}
public function locate($name, $currentPath = null, $first = true)
{
if (''== $name) {
throw new \InvalidArgumentException('An empty file name is not valid to be located.');
}
if ($this->isAbsolutePath($name)) {
if (!file_exists($name)) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist.', $name));
}
return $name;
}
$paths = $this->paths;
if (null !== $currentPath) {
array_unshift($paths, $currentPath);
}
$paths = array_unique($paths);
$filepaths = array();
foreach ($paths as $path) {
if (@file_exists($file = $path.DIRECTORY_SEPARATOR.$name)) {
if (true === $first) {
return $file;
}
$filepaths[] = $file;
}
}
if (!$filepaths) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist (in: %s).', $name, implode(', ', $paths)));
}
return $filepaths;
}
private function isAbsolutePath($file)
{
if ($file[0] ==='/'|| $file[0] ==='\\'|| (strlen($file) > 3 && ctype_alpha($file[0])
&& $file[1] ===':'&& ($file[2] ==='\\'|| $file[2] ==='/')
)
|| null !== parse_url($file, PHP_URL_SCHEME)
) {
return true;
}
return false;
}
}
}
namespace Symfony\Component\DependencyInjection
{
interface ContainerAwareInterface
{
public function setContainer(ContainerInterface $container = null);
}
}
namespace Symfony\Component\DependencyInjection
{
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
interface ContainerInterface
{
const EXCEPTION_ON_INVALID_REFERENCE = 1;
const NULL_ON_INVALID_REFERENCE = 2;
const IGNORE_ON_INVALID_REFERENCE = 3;
public function set($id, $service);
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);
public function has($id);
public function initialized($id);
public function getParameter($name);
public function hasParameter($name);
public function setParameter($name, $value);
}
}
namespace Symfony\Component\DependencyInjection
{
interface ResettableContainerInterface extends ContainerInterface
{
public function reset();
}
}
namespace Symfony\Component\DependencyInjection
{
use Symfony\Component\DependencyInjection\Exception\EnvNotFoundException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class Container implements ResettableContainerInterface
{
protected $parameterBag;
protected $services = array();
protected $methodMap = array();
protected $privates = array();
protected $aliases = array();
protected $loading = array();
private $underscoreMap = array('_'=>'','.'=>'_','\\'=>'_');
private $envCache = array();
public function __construct(ParameterBagInterface $parameterBag = null)
{
$this->parameterBag = $parameterBag ?: new EnvPlaceholderParameterBag();
}
public function compile()
{
$this->parameterBag->resolve();
$this->parameterBag = new FrozenParameterBag($this->parameterBag->all());
}
public function isFrozen()
{
return $this->parameterBag instanceof FrozenParameterBag;
}
public function getParameterBag()
{
return $this->parameterBag;
}
public function getParameter($name)
{
return $this->parameterBag->get($name);
}
public function hasParameter($name)
{
return $this->parameterBag->has($name);
}
public function setParameter($name, $value)
{
$this->parameterBag->set($name, $value);
}
public function set($id, $service)
{
$id = strtolower($id);
if ('service_container'=== $id) {
throw new InvalidArgumentException('You cannot set service "service_container".');
}
if (isset($this->aliases[$id])) {
unset($this->aliases[$id]);
}
$this->services[$id] = $service;
if (null === $service) {
unset($this->services[$id]);
}
if (isset($this->privates[$id])) {
if (null === $service) {
@trigger_error(sprintf('Unsetting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
unset($this->privates[$id]);
} else {
@trigger_error(sprintf('Setting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0. A new public service will be created instead.', $id), E_USER_DEPRECATED);
}
}
}
public function has($id)
{
for ($i = 2;;) {
if ('service_container'=== $id
|| isset($this->aliases[$id])
|| isset($this->services[$id])
) {
return true;
}
if (isset($this->privates[$id])) {
@trigger_error(sprintf('Checking for the existence of the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
}
if (isset($this->methodMap[$id])) {
return true;
}
if (--$i && $id !== $lcId = strtolower($id)) {
$id = $lcId;
continue;
}
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this,'get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
return true;
}
return false;
}
}
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
{
for ($i = 2;;) {
if ('service_container'=== $id) {
return $this;
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if (isset($this->services[$id])) {
return $this->services[$id];
}
if (isset($this->loading[$id])) {
throw new ServiceCircularReferenceException($id, array_keys($this->loading));
}
if (isset($this->methodMap[$id])) {
$method = $this->methodMap[$id];
} elseif (--$i && $id !== $lcId = strtolower($id)) {
$id = $lcId;
continue;
} elseif (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this, $method ='get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
} else {
if (self::EXCEPTION_ON_INVALID_REFERENCE === $invalidBehavior) {
if (!$id) {
throw new ServiceNotFoundException($id);
}
$alternatives = array();
foreach ($this->getServiceIds() as $knownId) {
$lev = levenshtein($id, $knownId);
if ($lev <= strlen($id) / 3 || false !== strpos($knownId, $id)) {
$alternatives[] = $knownId;
}
}
throw new ServiceNotFoundException($id, null, null, $alternatives);
}
return;
}
if (isset($this->privates[$id])) {
@trigger_error(sprintf('Requesting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
}
$this->loading[$id] = true;
try {
$service = $this->$method();
} catch (\Exception $e) {
unset($this->services[$id]);
throw $e;
} finally {
unset($this->loading[$id]);
}
return $service;
}
}
public function initialized($id)
{
$id = strtolower($id);
if ('service_container'=== $id) {
return false;
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
return isset($this->services[$id]);
}
public function reset()
{
$this->services = array();
}
public function getServiceIds()
{
$ids = array();
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
foreach (get_class_methods($this) as $method) {
if (preg_match('/^get(.+)Service$/', $method, $match)) {
$ids[] = self::underscore($match[1]);
}
}
}
$ids[] ='service_container';
return array_unique(array_merge($ids, array_keys($this->methodMap), array_keys($this->services)));
}
public static function camelize($id)
{
return strtr(ucwords(strtr($id, array('_'=>' ','.'=>'_ ','\\'=>'_ '))), array(' '=>''));
}
public static function underscore($id)
{
return strtolower(preg_replace(array('/([A-Z]+)([A-Z][a-z])/','/([a-z\d])([A-Z])/'), array('\\1_\\2','\\1_\\2'), str_replace('_','.', $id)));
}
protected function getEnv($name)
{
if (isset($this->envCache[$name]) || array_key_exists($name, $this->envCache)) {
return $this->envCache[$name];
}
if (isset($_ENV[$name])) {
return $this->envCache[$name] = $_ENV[$name];
}
if (false !== $env = getenv($name)) {
return $this->envCache[$name] = $env;
}
if (!$this->hasParameter("env($name)")) {
throw new EnvNotFoundException($name);
}
return $this->envCache[$name] = $this->getParameter("env($name)");
}
private function __clone()
{
}
}
}
namespace Symfony\Component\EventDispatcher
{
class Event
{
private $propagationStopped = false;
public function isPropagationStopped()
{
return $this->propagationStopped;
}
public function stopPropagation()
{
$this->propagationStopped = true;
}
}
}
namespace Symfony\Component\EventDispatcher
{
interface EventDispatcherInterface
{
public function dispatch($eventName, Event $event = null);
public function addListener($eventName, $listener, $priority = 0);
public function addSubscriber(EventSubscriberInterface $subscriber);
public function removeListener($eventName, $listener);
public function removeSubscriber(EventSubscriberInterface $subscriber);
public function getListeners($eventName = null);
public function getListenerPriority($eventName, $listener);
public function hasListeners($eventName = null);
}
}
namespace Symfony\Component\EventDispatcher
{
class EventDispatcher implements EventDispatcherInterface
{
private $listeners = array();
private $sorted = array();
public function dispatch($eventName, Event $event = null)
{
if (null === $event) {
$event = new Event();
}
if ($listeners = $this->getListeners($eventName)) {
$this->doDispatch($listeners, $eventName, $event);
}
return $event;
}
public function getListeners($eventName = null)
{
if (null !== $eventName) {
if (!isset($this->listeners[$eventName])) {
return array();
}
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
return $this->sorted[$eventName];
}
foreach ($this->listeners as $eventName => $eventListeners) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
}
return array_filter($this->sorted);
}
public function getListenerPriority($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== in_array($listener, $listeners, true)) {
return $priority;
}
}
}
public function hasListeners($eventName = null)
{
return (bool) count($this->getListeners($eventName));
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->listeners[$eventName][$priority][] = $listener;
unset($this->sorted[$eventName]);
}
public function removeListener($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== ($key = array_search($listener, $listeners, true))) {
unset($this->listeners[$eventName][$priority][$key], $this->sorted[$eventName]);
}
}
}
public function addSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->addListener($eventName, array($subscriber, $params));
} elseif (is_string($params[0])) {
$this->addListener($eventName, array($subscriber, $params[0]), isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->addListener($eventName, array($subscriber, $listener[0]), isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function removeSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_array($params) && is_array($params[0])) {
foreach ($params as $listener) {
$this->removeListener($eventName, array($subscriber, $listener[0]));
}
} else {
$this->removeListener($eventName, array($subscriber, is_string($params) ? $params : $params[0]));
}
}
}
protected function doDispatch($listeners, $eventName, Event $event)
{
foreach ($listeners as $listener) {
if ($event->isPropagationStopped()) {
break;
}
call_user_func($listener, $event, $eventName, $this);
}
}
private function sortListeners($eventName)
{
krsort($this->listeners[$eventName]);
$this->sorted[$eventName] = call_user_func_array('array_merge', $this->listeners[$eventName]);
}
}
}
namespace Symfony\Component\EventDispatcher
{
use Symfony\Component\DependencyInjection\ContainerInterface;
class ContainerAwareEventDispatcher extends EventDispatcher
{
private $container;
private $listenerIds = array();
private $listeners = array();
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function addListenerService($eventName, $callback, $priority = 0)
{
if (!is_array($callback) || 2 !== count($callback)) {
throw new \InvalidArgumentException('Expected an array("service", "method") argument');
}
$this->listenerIds[$eventName][] = array($callback[0], $callback[1], $priority);
}
public function removeListener($eventName, $listener)
{
$this->lazyLoad($eventName);
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $i => list($serviceId, $method, $priority)) {
$key = $serviceId.'.'.$method;
if (isset($this->listeners[$eventName][$key]) && $listener === array($this->listeners[$eventName][$key], $method)) {
unset($this->listeners[$eventName][$key]);
if (empty($this->listeners[$eventName])) {
unset($this->listeners[$eventName]);
}
unset($this->listenerIds[$eventName][$i]);
if (empty($this->listenerIds[$eventName])) {
unset($this->listenerIds[$eventName]);
}
}
}
}
parent::removeListener($eventName, $listener);
}
public function hasListeners($eventName = null)
{
if (null === $eventName) {
return (bool) count($this->listenerIds) || (bool) count($this->listeners);
}
if (isset($this->listenerIds[$eventName])) {
return true;
}
return parent::hasListeners($eventName);
}
public function getListeners($eventName = null)
{
if (null === $eventName) {
foreach ($this->listenerIds as $serviceEventName => $args) {
$this->lazyLoad($serviceEventName);
}
} else {
$this->lazyLoad($eventName);
}
return parent::getListeners($eventName);
}
public function getListenerPriority($eventName, $listener)
{
$this->lazyLoad($eventName);
return parent::getListenerPriority($eventName, $listener);
}
public function addSubscriberService($serviceId, $class)
{
foreach ($class::getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->listenerIds[$eventName][] = array($serviceId, $params, 0);
} elseif (is_string($params[0])) {
$this->listenerIds[$eventName][] = array($serviceId, $params[0], isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->listenerIds[$eventName][] = array($serviceId, $listener[0], isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function getContainer()
{
return $this->container;
}
protected function lazyLoad($eventName)
{
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as list($serviceId, $method, $priority)) {
$listener = $this->container->get($serviceId);
$key = $serviceId.'.'.$method;
if (!isset($this->listeners[$eventName][$key])) {
$this->addListener($eventName, array($listener, $method), $priority);
} elseif ($listener !== $this->listeners[$eventName][$key]) {
parent::removeListener($eventName, array($this->listeners[$eventName][$key], $method));
$this->addListener($eventName, array($listener, $method), $priority);
}
$this->listeners[$eventName][$key] = $listener;
}
}
}
}
}
namespace Symfony\Component\HttpFoundation
{
class Response
{
const HTTP_CONTINUE = 100;
const HTTP_SWITCHING_PROTOCOLS = 101;
const HTTP_PROCESSING = 102; const HTTP_OK = 200;
const HTTP_CREATED = 201;
const HTTP_ACCEPTED = 202;
const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
const HTTP_NO_CONTENT = 204;
const HTTP_RESET_CONTENT = 205;
const HTTP_PARTIAL_CONTENT = 206;
const HTTP_MULTI_STATUS = 207; const HTTP_ALREADY_REPORTED = 208; const HTTP_IM_USED = 226; const HTTP_MULTIPLE_CHOICES = 300;
const HTTP_MOVED_PERMANENTLY = 301;
const HTTP_FOUND = 302;
const HTTP_SEE_OTHER = 303;
const HTTP_NOT_MODIFIED = 304;
const HTTP_USE_PROXY = 305;
const HTTP_RESERVED = 306;
const HTTP_TEMPORARY_REDIRECT = 307;
const HTTP_PERMANENTLY_REDIRECT = 308; const HTTP_BAD_REQUEST = 400;
const HTTP_UNAUTHORIZED = 401;
const HTTP_PAYMENT_REQUIRED = 402;
const HTTP_FORBIDDEN = 403;
const HTTP_NOT_FOUND = 404;
const HTTP_METHOD_NOT_ALLOWED = 405;
const HTTP_NOT_ACCEPTABLE = 406;
const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
const HTTP_REQUEST_TIMEOUT = 408;
const HTTP_CONFLICT = 409;
const HTTP_GONE = 410;
const HTTP_LENGTH_REQUIRED = 411;
const HTTP_PRECONDITION_FAILED = 412;
const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
const HTTP_REQUEST_URI_TOO_LONG = 414;
const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
const HTTP_EXPECTATION_FAILED = 417;
const HTTP_I_AM_A_TEAPOT = 418; const HTTP_MISDIRECTED_REQUEST = 421; const HTTP_UNPROCESSABLE_ENTITY = 422; const HTTP_LOCKED = 423; const HTTP_FAILED_DEPENDENCY = 424; const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425; const HTTP_UPGRADE_REQUIRED = 426; const HTTP_PRECONDITION_REQUIRED = 428; const HTTP_TOO_MANY_REQUESTS = 429; const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431; const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;
const HTTP_INTERNAL_SERVER_ERROR = 500;
const HTTP_NOT_IMPLEMENTED = 501;
const HTTP_BAD_GATEWAY = 502;
const HTTP_SERVICE_UNAVAILABLE = 503;
const HTTP_GATEWAY_TIMEOUT = 504;
const HTTP_VERSION_NOT_SUPPORTED = 505;
const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506; const HTTP_INSUFFICIENT_STORAGE = 507; const HTTP_LOOP_DETECTED = 508; const HTTP_NOT_EXTENDED = 510; const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;
public $headers;
protected $content;
protected $version;
protected $statusCode;
protected $statusText;
protected $charset;
public static $statusTexts = array(
100 =>'Continue',
101 =>'Switching Protocols',
102 =>'Processing', 200 =>'OK',
201 =>'Created',
202 =>'Accepted',
203 =>'Non-Authoritative Information',
204 =>'No Content',
205 =>'Reset Content',
206 =>'Partial Content',
207 =>'Multi-Status', 208 =>'Already Reported', 226 =>'IM Used', 300 =>'Multiple Choices',
301 =>'Moved Permanently',
302 =>'Found',
303 =>'See Other',
304 =>'Not Modified',
305 =>'Use Proxy',
307 =>'Temporary Redirect',
308 =>'Permanent Redirect', 400 =>'Bad Request',
401 =>'Unauthorized',
402 =>'Payment Required',
403 =>'Forbidden',
404 =>'Not Found',
405 =>'Method Not Allowed',
406 =>'Not Acceptable',
407 =>'Proxy Authentication Required',
408 =>'Request Timeout',
409 =>'Conflict',
410 =>'Gone',
411 =>'Length Required',
412 =>'Precondition Failed',
413 =>'Payload Too Large',
414 =>'URI Too Long',
415 =>'Unsupported Media Type',
416 =>'Range Not Satisfiable',
417 =>'Expectation Failed',
418 =>'I\'m a teapot', 421 =>'Misdirected Request', 422 =>'Unprocessable Entity', 423 =>'Locked', 424 =>'Failed Dependency', 425 =>'Reserved for WebDAV advanced collections expired proposal', 426 =>'Upgrade Required', 428 =>'Precondition Required', 429 =>'Too Many Requests', 431 =>'Request Header Fields Too Large', 451 =>'Unavailable For Legal Reasons', 500 =>'Internal Server Error',
501 =>'Not Implemented',
502 =>'Bad Gateway',
503 =>'Service Unavailable',
504 =>'Gateway Timeout',
505 =>'HTTP Version Not Supported',
506 =>'Variant Also Negotiates (Experimental)', 507 =>'Insufficient Storage', 508 =>'Loop Detected', 510 =>'Not Extended', 511 =>'Network Authentication Required', );
private static $deprecatedMethods = array('setDate','getDate','setExpires','getExpires','setLastModified','getLastModified','setProtocolVersion','getProtocolVersion','setStatusCode','getStatusCode','setCharset','getCharset','setPrivate','setPublic','getAge','getMaxAge','setMaxAge','setSharedMaxAge','getTtl','setTtl','setClientTtl','getEtag','setEtag','hasVary','getVary','setVary','isInvalid','isSuccessful','isRedirection','isClientError','isOk','isForbidden','isNotFound','isRedirect','isEmpty',
);
private static $deprecationsTriggered = array(
__CLASS__ => true,
BinaryFileResponse::class => true,
JsonResponse::class => true,
RedirectResponse::class => true,
StreamedResponse::class => true,
);
public function __construct($content ='', $status = 200, $headers = array())
{
$this->headers = new ResponseHeaderBag($headers);
$this->setContent($content);
$this->setStatusCode($status);
$this->setProtocolVersion('1.0');
$class = get_class($this);
if ($this instanceof \PHPUnit_Framework_MockObject_MockObject || $this instanceof \Prophecy\Doubler\DoubleInterface) {
$class = get_parent_class($class);
}
if (isset(self::$deprecationsTriggered[$class])) {
return;
}
self::$deprecationsTriggered[$class] = true;
foreach (self::$deprecatedMethods as $method) {
$r = new \ReflectionMethod($class, $method);
if (__CLASS__ !== $r->getDeclaringClass()->getName()) {
@trigger_error(sprintf('Extending %s::%s() in %s is deprecated since version 3.2 and won\'t be supported anymore in 4.0 as it will be final.', __CLASS__, $method, $class), E_USER_DEPRECATED);
}
}
}
public static function create($content ='', $status = 200, $headers = array())
{
return new static($content, $status, $headers);
}
public function __toString()
{
return
sprintf('HTTP/%s %s %s', $this->version, $this->statusCode, $this->statusText)."\r\n".
$this->headers."\r\n".
$this->getContent();
}
public function __clone()
{
$this->headers = clone $this->headers;
}
public function prepare(Request $request)
{
$headers = $this->headers;
if ($this->isInformational() || $this->isEmpty()) {
$this->setContent(null);
$headers->remove('Content-Type');
$headers->remove('Content-Length');
} else {
if (!$headers->has('Content-Type')) {
$format = $request->getRequestFormat();
if (null !== $format && $mimeType = $request->getMimeType($format)) {
$headers->set('Content-Type', $mimeType);
}
}
$charset = $this->charset ?:'UTF-8';
if (!$headers->has('Content-Type')) {
$headers->set('Content-Type','text/html; charset='.$charset);
} elseif (0 === stripos($headers->get('Content-Type'),'text/') && false === stripos($headers->get('Content-Type'),'charset')) {
$headers->set('Content-Type', $headers->get('Content-Type').'; charset='.$charset);
}
if ($headers->has('Transfer-Encoding')) {
$headers->remove('Content-Length');
}
if ($request->isMethod('HEAD')) {
$length = $headers->get('Content-Length');
$this->setContent(null);
if ($length) {
$headers->set('Content-Length', $length);
}
}
}
if ('HTTP/1.0'!= $request->server->get('SERVER_PROTOCOL')) {
$this->setProtocolVersion('1.1');
}
if ('1.0'== $this->getProtocolVersion() && false !== strpos($this->headers->get('Cache-Control'),'no-cache')) {
$this->headers->set('pragma','no-cache');
$this->headers->set('expires', -1);
}
$this->ensureIEOverSSLCompatibility($request);
return $this;
}
public function sendHeaders()
{
if (headers_sent()) {
return $this;
}
if (!$this->headers->has('Date')) {
$this->setDate(\DateTime::createFromFormat('U', time()));
}
foreach ($this->headers->allPreserveCase() as $name => $values) {
foreach ($values as $value) {
header($name.': '.$value, false, $this->statusCode);
}
}
header(sprintf('HTTP/%s %s %s', $this->version, $this->statusCode, $this->statusText), true, $this->statusCode);
foreach ($this->headers->getCookies() as $cookie) {
if ($cookie->isRaw()) {
setrawcookie($cookie->getName(), $cookie->getValue(), $cookie->getExpiresTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->isSecure(), $cookie->isHttpOnly());
} else {
setcookie($cookie->getName(), $cookie->getValue(), $cookie->getExpiresTime(), $cookie->getPath(), $cookie->getDomain(), $cookie->isSecure(), $cookie->isHttpOnly());
}
}
return $this;
}
public function sendContent()
{
echo $this->content;
return $this;
}
public function send()
{
$this->sendHeaders();
$this->sendContent();
if (function_exists('fastcgi_finish_request')) {
fastcgi_finish_request();
} elseif ('cli'!== PHP_SAPI) {
static::closeOutputBuffers(0, true);
}
return $this;
}
public function setContent($content)
{
if (null !== $content && !is_string($content) && !is_numeric($content) && !is_callable(array($content,'__toString'))) {
throw new \UnexpectedValueException(sprintf('The Response content must be a string or object implementing __toString(), "%s" given.', gettype($content)));
}
$this->content = (string) $content;
return $this;
}
public function getContent()
{
return $this->content;
}
public function setProtocolVersion($version)
{
$this->version = $version;
return $this;
}
public function getProtocolVersion()
{
return $this->version;
}
public function setStatusCode($code, $text = null)
{
$this->statusCode = $code = (int) $code;
if ($this->isInvalid()) {
throw new \InvalidArgumentException(sprintf('The HTTP status code "%s" is not valid.', $code));
}
if (null === $text) {
$this->statusText = isset(self::$statusTexts[$code]) ? self::$statusTexts[$code] :'unknown status';
return $this;
}
if (false === $text) {
$this->statusText ='';
return $this;
}
$this->statusText = $text;
return $this;
}
public function getStatusCode()
{
return $this->statusCode;
}
public function setCharset($charset)
{
$this->charset = $charset;
return $this;
}
public function getCharset()
{
return $this->charset;
}
public function isCacheable()
{
if (!in_array($this->statusCode, array(200, 203, 300, 301, 302, 404, 410))) {
return false;
}
if ($this->headers->hasCacheControlDirective('no-store') || $this->headers->getCacheControlDirective('private')) {
return false;
}
return $this->isValidateable() || $this->isFresh();
}
public function isFresh()
{
return $this->getTtl() > 0;
}
public function isValidateable()
{
return $this->headers->has('Last-Modified') || $this->headers->has('ETag');
}
public function setPrivate()
{
$this->headers->removeCacheControlDirective('public');
$this->headers->addCacheControlDirective('private');
return $this;
}
public function setPublic()
{
$this->headers->addCacheControlDirective('public');
$this->headers->removeCacheControlDirective('private');
return $this;
}
public function mustRevalidate()
{
return $this->headers->hasCacheControlDirective('must-revalidate') || $this->headers->hasCacheControlDirective('proxy-revalidate');
}
public function getDate()
{
if (!$this->headers->has('Date')) {
$this->setDate(\DateTime::createFromFormat('U', time()));
}
return $this->headers->getDate('Date');
}
public function setDate(\DateTime $date)
{
$date->setTimezone(new \DateTimeZone('UTC'));
$this->headers->set('Date', $date->format('D, d M Y H:i:s').' GMT');
return $this;
}
public function getAge()
{
if (null !== $age = $this->headers->get('Age')) {
return (int) $age;
}
return max(time() - $this->getDate()->format('U'), 0);
}
public function expire()
{
if ($this->isFresh()) {
$this->headers->set('Age', $this->getMaxAge());
}
return $this;
}
public function getExpires()
{
try {
return $this->headers->getDate('Expires');
} catch (\RuntimeException $e) {
return \DateTime::createFromFormat(DATE_RFC2822,'Sat, 01 Jan 00 00:00:00 +0000');
}
}
public function setExpires(\DateTime $date = null)
{
if (null === $date) {
$this->headers->remove('Expires');
} else {
$date = clone $date;
$date->setTimezone(new \DateTimeZone('UTC'));
$this->headers->set('Expires', $date->format('D, d M Y H:i:s').' GMT');
}
return $this;
}
public function getMaxAge()
{
if ($this->headers->hasCacheControlDirective('s-maxage')) {
return (int) $this->headers->getCacheControlDirective('s-maxage');
}
if ($this->headers->hasCacheControlDirective('max-age')) {
return (int) $this->headers->getCacheControlDirective('max-age');
}
if (null !== $this->getExpires()) {
return $this->getExpires()->format('U') - $this->getDate()->format('U');
}
}
public function setMaxAge($value)
{
$this->headers->addCacheControlDirective('max-age', $value);
return $this;
}
public function setSharedMaxAge($value)
{
$this->setPublic();
$this->headers->addCacheControlDirective('s-maxage', $value);
return $this;
}
public function getTtl()
{
if (null !== $maxAge = $this->getMaxAge()) {
return $maxAge - $this->getAge();
}
}
public function setTtl($seconds)
{
$this->setSharedMaxAge($this->getAge() + $seconds);
return $this;
}
public function setClientTtl($seconds)
{
$this->setMaxAge($this->getAge() + $seconds);
return $this;
}
public function getLastModified()
{
return $this->headers->getDate('Last-Modified');
}
public function setLastModified(\DateTime $date = null)
{
if (null === $date) {
$this->headers->remove('Last-Modified');
} else {
$date = clone $date;
$date->setTimezone(new \DateTimeZone('UTC'));
$this->headers->set('Last-Modified', $date->format('D, d M Y H:i:s').' GMT');
}
return $this;
}
public function getEtag()
{
return $this->headers->get('ETag');
}
public function setEtag($etag = null, $weak = false)
{
if (null === $etag) {
$this->headers->remove('Etag');
} else {
if (0 !== strpos($etag,'"')) {
$etag ='"'.$etag.'"';
}
$this->headers->set('ETag', (true === $weak ?'W/':'').$etag);
}
return $this;
}
public function setCache(array $options)
{
if ($diff = array_diff(array_keys($options), array('etag','last_modified','max_age','s_maxage','private','public'))) {
throw new \InvalidArgumentException(sprintf('Response does not support the following options: "%s".', implode('", "', array_values($diff))));
}
if (isset($options['etag'])) {
$this->setEtag($options['etag']);
}
if (isset($options['last_modified'])) {
$this->setLastModified($options['last_modified']);
}
if (isset($options['max_age'])) {
$this->setMaxAge($options['max_age']);
}
if (isset($options['s_maxage'])) {
$this->setSharedMaxAge($options['s_maxage']);
}
if (isset($options['public'])) {
if ($options['public']) {
$this->setPublic();
} else {
$this->setPrivate();
}
}
if (isset($options['private'])) {
if ($options['private']) {
$this->setPrivate();
} else {
$this->setPublic();
}
}
return $this;
}
public function setNotModified()
{
$this->setStatusCode(304);
$this->setContent(null);
foreach (array('Allow','Content-Encoding','Content-Language','Content-Length','Content-MD5','Content-Type','Last-Modified') as $header) {
$this->headers->remove($header);
}
return $this;
}
public function hasVary()
{
return null !== $this->headers->get('Vary');
}
public function getVary()
{
if (!$vary = $this->headers->get('Vary', null, false)) {
return array();
}
$ret = array();
foreach ($vary as $item) {
$ret = array_merge($ret, preg_split('/[\s,]+/', $item));
}
return $ret;
}
public function setVary($headers, $replace = true)
{
$this->headers->set('Vary', $headers, $replace);
return $this;
}
public function isNotModified(Request $request)
{
if (!$request->isMethodCacheable()) {
return false;
}
$notModified = false;
$lastModified = $this->headers->get('Last-Modified');
$modifiedSince = $request->headers->get('If-Modified-Since');
if ($etags = $request->getETags()) {
$notModified = in_array($this->getEtag(), $etags) || in_array('*', $etags);
}
if ($modifiedSince && $lastModified) {
$notModified = strtotime($modifiedSince) >= strtotime($lastModified) && (!$etags || $notModified);
}
if ($notModified) {
$this->setNotModified();
}
return $notModified;
}
public function isInvalid()
{
return $this->statusCode < 100 || $this->statusCode >= 600;
}
public function isInformational()
{
return $this->statusCode >= 100 && $this->statusCode < 200;
}
public function isSuccessful()
{
return $this->statusCode >= 200 && $this->statusCode < 300;
}
public function isRedirection()
{
return $this->statusCode >= 300 && $this->statusCode < 400;
}
public function isClientError()
{
return $this->statusCode >= 400 && $this->statusCode < 500;
}
public function isServerError()
{
return $this->statusCode >= 500 && $this->statusCode < 600;
}
public function isOk()
{
return 200 === $this->statusCode;
}
public function isForbidden()
{
return 403 === $this->statusCode;
}
public function isNotFound()
{
return 404 === $this->statusCode;
}
public function isRedirect($location = null)
{
return in_array($this->statusCode, array(201, 301, 302, 303, 307, 308)) && (null === $location ?: $location == $this->headers->get('Location'));
}
public function isEmpty()
{
return in_array($this->statusCode, array(204, 304));
}
public static function closeOutputBuffers($targetLevel, $flush)
{
$status = ob_get_status(true);
$level = count($status);
$flags = defined('PHP_OUTPUT_HANDLER_REMOVABLE') ? PHP_OUTPUT_HANDLER_REMOVABLE | ($flush ? PHP_OUTPUT_HANDLER_FLUSHABLE : PHP_OUTPUT_HANDLER_CLEANABLE) : -1;
while ($level-- > $targetLevel && ($s = $status[$level]) && (!isset($s['del']) ? !isset($s['flags']) || $flags === ($s['flags'] & $flags) : $s['del'])) {
if ($flush) {
ob_end_flush();
} else {
ob_end_clean();
}
}
}
protected function ensureIEOverSSLCompatibility(Request $request)
{
if (false !== stripos($this->headers->get('Content-Disposition'),'attachment') && preg_match('/MSIE (.*?);/i', $request->server->get('HTTP_USER_AGENT'), $match) == 1 && true === $request->isSecure()) {
if ((int) preg_replace('/(MSIE )(.*?);/','$2', $match[0]) < 9) {
$this->headers->remove('Cache-Control');
}
}
}
}
}
namespace Symfony\Component\HttpFoundation
{
class ResponseHeaderBag extends HeaderBag
{
const COOKIES_FLAT ='flat';
const COOKIES_ARRAY ='array';
const DISPOSITION_ATTACHMENT ='attachment';
const DISPOSITION_INLINE ='inline';
protected $computedCacheControl = array();
protected $cookies = array();
protected $headerNames = array();
public function __construct(array $headers = array())
{
parent::__construct($headers);
if (!isset($this->headers['cache-control'])) {
$this->set('Cache-Control','');
}
}
public function __toString()
{
$cookies ='';
foreach ($this->getCookies() as $cookie) {
$cookies .='Set-Cookie: '.$cookie."\r\n";
}
ksort($this->headerNames);
return parent::__toString().$cookies;
}
public function allPreserveCase()
{
return array_combine($this->headerNames, $this->headers);
}
public function replace(array $headers = array())
{
$this->headerNames = array();
parent::replace($headers);
if (!isset($this->headers['cache-control'])) {
$this->set('Cache-Control','');
}
}
public function set($key, $values, $replace = true)
{
parent::set($key, $values, $replace);
$uniqueKey = str_replace('_','-', strtolower($key));
$this->headerNames[$uniqueKey] = $key;
if (in_array($uniqueKey, array('cache-control','etag','last-modified','expires'))) {
$computed = $this->computeCacheControlValue();
$this->headers['cache-control'] = array($computed);
$this->headerNames['cache-control'] ='Cache-Control';
$this->computedCacheControl = $this->parseCacheControl($computed);
}
}
public function remove($key)
{
parent::remove($key);
$uniqueKey = str_replace('_','-', strtolower($key));
unset($this->headerNames[$uniqueKey]);
if ('cache-control'=== $uniqueKey) {
$this->computedCacheControl = array();
}
}
public function hasCacheControlDirective($key)
{
return array_key_exists($key, $this->computedCacheControl);
}
public function getCacheControlDirective($key)
{
return array_key_exists($key, $this->computedCacheControl) ? $this->computedCacheControl[$key] : null;
}
public function setCookie(Cookie $cookie)
{
$this->cookies[$cookie->getDomain()][$cookie->getPath()][$cookie->getName()] = $cookie;
}
public function removeCookie($name, $path ='/', $domain = null)
{
if (null === $path) {
$path ='/';
}
unset($this->cookies[$domain][$path][$name]);
if (empty($this->cookies[$domain][$path])) {
unset($this->cookies[$domain][$path]);
if (empty($this->cookies[$domain])) {
unset($this->cookies[$domain]);
}
}
}
public function getCookies($format = self::COOKIES_FLAT)
{
if (!in_array($format, array(self::COOKIES_FLAT, self::COOKIES_ARRAY))) {
throw new \InvalidArgumentException(sprintf('Format "%s" invalid (%s).', $format, implode(', ', array(self::COOKIES_FLAT, self::COOKIES_ARRAY))));
}
if (self::COOKIES_ARRAY === $format) {
return $this->cookies;
}
$flattenedCookies = array();
foreach ($this->cookies as $path) {
foreach ($path as $cookies) {
foreach ($cookies as $cookie) {
$flattenedCookies[] = $cookie;
}
}
}
return $flattenedCookies;
}
public function clearCookie($name, $path ='/', $domain = null, $secure = false, $httpOnly = true)
{
$this->setCookie(new Cookie($name, null, 1, $path, $domain, $secure, $httpOnly));
}
public function makeDisposition($disposition, $filename, $filenameFallback ='')
{
if (!in_array($disposition, array(self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE))) {
throw new \InvalidArgumentException(sprintf('The disposition must be either "%s" or "%s".', self::DISPOSITION_ATTACHMENT, self::DISPOSITION_INLINE));
}
if (''== $filenameFallback) {
$filenameFallback = $filename;
}
if (!preg_match('/^[\x20-\x7e]*$/', $filenameFallback)) {
throw new \InvalidArgumentException('The filename fallback must only contain ASCII characters.');
}
if (false !== strpos($filenameFallback,'%')) {
throw new \InvalidArgumentException('The filename fallback cannot contain the "%" character.');
}
if (false !== strpos($filename,'/') || false !== strpos($filename,'\\') || false !== strpos($filenameFallback,'/') || false !== strpos($filenameFallback,'\\')) {
throw new \InvalidArgumentException('The filename and the fallback cannot contain the "/" and "\\" characters.');
}
$output = sprintf('%s; filename="%s"', $disposition, str_replace('"','\\"', $filenameFallback));
if ($filename !== $filenameFallback) {
$output .= sprintf("; filename*=utf-8''%s", rawurlencode($filename));
}
return $output;
}
protected function computeCacheControlValue()
{
if (!$this->cacheControl && !$this->has('ETag') && !$this->has('Last-Modified') && !$this->has('Expires')) {
return'no-cache, private';
}
if (!$this->cacheControl) {
return'private, must-revalidate';
}
$header = $this->getCacheControlHeader();
if (isset($this->cacheControl['public']) || isset($this->cacheControl['private'])) {
return $header;
}
if (!isset($this->cacheControl['s-maxage'])) {
return $header.', private';
}
return $header;
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ResponseListener implements EventSubscriberInterface
{
private $charset;
public function __construct($charset)
{
$this->charset = $charset;
}
public function onKernelResponse(FilterResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$response = $event->getResponse();
if (null === $response->getCharset()) {
$response->setCharset($this->charset);
}
$response->prepare($event->getRequest());
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::RESPONSE =>'onKernelResponse',
);
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
class RouterListener implements EventSubscriberInterface
{
private $matcher;
private $context;
private $logger;
private $requestStack;
public function __construct($matcher, RequestStack $requestStack, RequestContext $context = null, LoggerInterface $logger = null)
{
if (!$matcher instanceof UrlMatcherInterface && !$matcher instanceof RequestMatcherInterface) {
throw new \InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
}
if (null === $context && !$matcher instanceof RequestContextAwareInterface) {
throw new \InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
}
$this->matcher = $matcher;
$this->context = $context ?: $matcher->getContext();
$this->requestStack = $requestStack;
$this->logger = $logger;
}
private function setCurrentRequest(Request $request = null)
{
if (null !== $request) {
$this->context->fromRequest($request);
}
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$this->setCurrentRequest($this->requestStack->getParentRequest());
}
public function onKernelRequest(GetResponseEvent $event)
{
$request = $event->getRequest();
$this->setCurrentRequest($request);
if ($request->attributes->has('_controller')) {
return;
}
try {
if ($this->matcher instanceof RequestMatcherInterface) {
$parameters = $this->matcher->matchRequest($request);
} else {
$parameters = $this->matcher->match($request->getPathInfo());
}
if (null !== $this->logger) {
$this->logger->info('Matched route "{route}".', array('route'=> isset($parameters['_route']) ? $parameters['_route'] :'n/a','route_parameters'=> $parameters,'request_uri'=> $request->getUri(),'method'=> $request->getMethod(),
));
}
$request->attributes->add($parameters);
unset($parameters['_route'], $parameters['_controller']);
$request->attributes->set('_route_params', $parameters);
} catch (ResourceNotFoundException $e) {
$message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());
if ($referer = $request->headers->get('referer')) {
$message .= sprintf(' (from "%s")', $referer);
}
throw new NotFoundHttpException($message, $e);
} catch (MethodNotAllowedException $e) {
$message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getPathInfo(), implode(', ', $e->getAllowedMethods()));
throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array(array('onKernelRequest', 32)),
KernelEvents::FINISH_REQUEST => array(array('onKernelFinishRequest', 0)),
);
}
}
}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
interface BundleInterface extends ContainerAwareInterface
{
public function boot();
public function shutdown();
public function build(ContainerBuilder $container);
public function getContainerExtension();
public function getParent();
public function getName();
public function getNamespace();
public function getPath();
}
}
namespace Symfony\Component\DependencyInjection
{
trait ContainerAwareTrait
{
protected $container;
public function setContainer(ContainerInterface $container = null)
{
$this->container = $container;
}
}
}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
abstract class Bundle implements BundleInterface
{
use ContainerAwareTrait;
protected $name;
protected $extension;
protected $path;
private $namespace;
public function boot()
{
}
public function shutdown()
{
}
public function build(ContainerBuilder $container)
{
}
public function getContainerExtension()
{
if (null === $this->extension) {
$extension = $this->createContainerExtension();
if (null !== $extension) {
if (!$extension instanceof ExtensionInterface) {
throw new \LogicException(sprintf('Extension %s must implement Symfony\Component\DependencyInjection\Extension\ExtensionInterface.', get_class($extension)));
}
$basename = preg_replace('/Bundle$/','', $this->getName());
$expectedAlias = Container::underscore($basename);
if ($expectedAlias != $extension->getAlias()) {
throw new \LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name ("%s"). You can override "Bundle::getContainerExtension()" if you want to use "%s" or another alias.',
$expectedAlias, $extension->getAlias()
));
}
$this->extension = $extension;
} else {
$this->extension = false;
}
}
if ($this->extension) {
return $this->extension;
}
}
public function getNamespace()
{
if (null === $this->namespace) {
$this->parseClassName();
}
return $this->namespace;
}
public function getPath()
{
if (null === $this->path) {
$reflected = new \ReflectionObject($this);
$this->path = dirname($reflected->getFileName());
}
return $this->path;
}
public function getParent()
{
}
final public function getName()
{
if (null === $this->name) {
$this->parseClassName();
}
return $this->name;
}
public function registerCommands(Application $application)
{
if (!is_dir($dir = $this->getPath().'/Command')) {
return;
}
if (!class_exists('Symfony\Component\Finder\Finder')) {
throw new \RuntimeException('You need the symfony/finder component to register bundle commands.');
}
$finder = new Finder();
$finder->files()->name('*Command.php')->in($dir);
$prefix = $this->getNamespace().'\\Command';
foreach ($finder as $file) {
$ns = $prefix;
if ($relativePath = $file->getRelativePath()) {
$ns .='\\'.str_replace('/','\\', $relativePath);
}
$class = $ns.'\\'.$file->getBasename('.php');
if ($this->container) {
$alias ='console.command.'.strtolower(str_replace('\\','_', $class));
if ($this->container->has($alias)) {
continue;
}
}
$r = new \ReflectionClass($class);
if ($r->isSubclassOf('Symfony\\Component\\Console\\Command\\Command') && !$r->isAbstract() && !$r->getConstructor()->getNumberOfRequiredParameters()) {
$application->add($r->newInstance());
}
}
}
protected function getContainerExtensionClass()
{
$basename = preg_replace('/Bundle$/','', $this->getName());
return $this->getNamespace().'\\DependencyInjection\\'.$basename.'Extension';
}
protected function createContainerExtension()
{
if (class_exists($class = $this->getContainerExtensionClass())) {
return new $class();
}
}
private function parseClassName()
{
$pos = strrpos(static::class,'\\');
$this->namespace = false === $pos ?'': substr(static::class, 0, $pos);
$this->name = false === $pos ? static::class : substr(static::class, $pos + 1);
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ArgumentResolverInterface
{
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ControllerResolverInterface
{
public function getController(Request $request);
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
class ControllerResolver implements ArgumentResolverInterface, ControllerResolverInterface
{
private $logger;
private $supportsVariadic;
private $supportsScalarTypes;
public function __construct(LoggerInterface $logger = null)
{
$this->logger = $logger;
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsScalarTypes = method_exists('ReflectionParameter','getType');
}
public function getController(Request $request)
{
if (!$controller = $request->attributes->get('_controller')) {
if (null !== $this->logger) {
$this->logger->warning('Unable to look for the controller as the "_controller" parameter is missing.');
}
return false;
}
if (is_array($controller)) {
return $controller;
}
if (is_object($controller)) {
if (method_exists($controller,'__invoke')) {
return $controller;
}
throw new \InvalidArgumentException(sprintf('Controller "%s" for URI "%s" is not callable.', get_class($controller), $request->getPathInfo()));
}
if (false === strpos($controller,':')) {
if (method_exists($controller,'__invoke')) {
return $this->instantiateController($controller);
} elseif (function_exists($controller)) {
return $controller;
}
}
$callable = $this->createController($controller);
if (!is_callable($callable)) {
throw new \InvalidArgumentException(sprintf('The controller for URI "%s" is not callable. %s', $request->getPathInfo(), $this->getControllerError($callable)));
}
return $callable;
}
public function getArguments(Request $request, $controller)
{
@trigger_error(sprintf('%s is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
if (is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && !$controller instanceof \Closure) {
$r = new \ReflectionObject($controller);
$r = $r->getMethod('__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
return $this->doGetArguments($request, $controller, $r->getParameters());
}
protected function doGetArguments(Request $request, $controller, array $parameters)
{
@trigger_error(sprintf('%s is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
$attributes = $request->attributes->all();
$arguments = array();
foreach ($parameters as $param) {
if (array_key_exists($param->name, $attributes)) {
if ($this->supportsVariadic && $param->isVariadic() && is_array($attributes[$param->name])) {
$arguments = array_merge($arguments, array_values($attributes[$param->name]));
} else {
$arguments[] = $attributes[$param->name];
}
} elseif ($param->getClass() && $param->getClass()->isInstance($request)) {
$arguments[] = $request;
} elseif ($param->isDefaultValueAvailable()) {
$arguments[] = $param->getDefaultValue();
} elseif ($this->supportsScalarTypes && $param->hasType() && $param->allowsNull()) {
$arguments[] = null;
} else {
if (is_array($controller)) {
$repr = sprintf('%s::%s()', get_class($controller[0]), $controller[1]);
} elseif (is_object($controller)) {
$repr = get_class($controller);
} else {
$repr = $controller;
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument (because there is no default value or because there is a non optional argument after this one).', $repr, $param->name));
}
}
return $arguments;
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
throw new \InvalidArgumentException(sprintf('Unable to find controller "%s".', $controller));
}
list($class, $method) = explode('::', $controller, 2);
if (!class_exists($class)) {
throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
}
return array($this->instantiateController($class), $method);
}
protected function instantiateController($class)
{
return new $class();
}
private function getControllerError($callable)
{
if (is_string($callable)) {
if (false !== strpos($callable,'::')) {
$callable = explode('::', $callable);
}
if (class_exists($callable) && !method_exists($callable,'__invoke')) {
return sprintf('Class "%s" does not have a method "__invoke".', $callable);
}
if (!function_exists($callable)) {
return sprintf('Function "%s" does not exist.', $callable);
}
}
if (!is_array($callable)) {
return sprintf('Invalid type for controller given, expected string or array, got "%s".', gettype($callable));
}
if (2 !== count($callable)) {
return sprintf('Invalid format for controller, expected array(controller, method) or controller::method.');
}
list($controller, $method) = $callable;
if (is_string($controller) && !class_exists($controller)) {
return sprintf('Class "%s" does not exist.', $controller);
}
$className = is_object($controller) ? get_class($controller) : $controller;
if (method_exists($controller, $method)) {
return sprintf('Method "%s" on class "%s" should be public and non-abstract.', $method, $className);
}
$collection = get_class_methods($controller);
$alternatives = array();
foreach ($collection as $item) {
$lev = levenshtein($method, $item);
if ($lev <= strlen($method) / 3 || false !== strpos($item, $method)) {
$alternatives[] = $item;
}
}
asort($alternatives);
$message = sprintf('Expected method "%s" on class "%s"', $method, $className);
if (count($alternatives) > 0) {
$message .= sprintf(', did you mean "%s"?', implode('", "', $alternatives));
} else {
$message .= sprintf('. Available methods: "%s".', implode('", "', $collection));
}
return $message;
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;
final class ArgumentResolver implements ArgumentResolverInterface
{
private $argumentMetadataFactory;
private $argumentValueResolvers;
public function __construct(ArgumentMetadataFactoryInterface $argumentMetadataFactory = null, array $argumentValueResolvers = array())
{
$this->argumentMetadataFactory = $argumentMetadataFactory ?: new ArgumentMetadataFactory();
$this->argumentValueResolvers = $argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
}
public function getArguments(Request $request, $controller)
{
$arguments = array();
foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller) as $metadata) {
foreach ($this->argumentValueResolvers as $resolver) {
if (!$resolver->supports($request, $metadata)) {
continue;
}
$resolved = $resolver->resolve($request, $metadata);
if (!$resolved instanceof \Generator) {
throw new \InvalidArgumentException(sprintf('%s::resolve() must yield at least one value.', get_class($resolver)));
}
foreach ($resolved as $append) {
$arguments[] = $append;
}
continue 2;
}
$representative = $controller;
if (is_array($representative)) {
$representative = sprintf('%s::%s()', get_class($representative[0]), $representative[1]);
} elseif (is_object($representative)) {
$representative = get_class($representative);
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', $representative, $metadata->getName()));
}
return $arguments;
}
public static function getDefaultArgumentValueResolvers()
{
return array(
new RequestAttributeValueResolver(),
new RequestValueResolver(),
new DefaultValueResolver(),
new VariadicValueResolver(),
);
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
class ArgumentMetadata
{
private $name;
private $type;
private $isVariadic;
private $hasDefaultValue;
private $defaultValue;
private $isNullable;
public function __construct($name, $type, $isVariadic, $hasDefaultValue, $defaultValue, $isNullable = false)
{
$this->name = $name;
$this->type = $type;
$this->isVariadic = $isVariadic;
$this->hasDefaultValue = $hasDefaultValue;
$this->defaultValue = $defaultValue;
$this->isNullable = $isNullable || null === $type || ($hasDefaultValue && null === $defaultValue);
}
public function getName()
{
return $this->name;
}
public function getType()
{
return $this->type;
}
public function isVariadic()
{
return $this->isVariadic;
}
public function hasDefaultValue()
{
return $this->hasDefaultValue;
}
public function isNullable()
{
return $this->isNullable;
}
public function getDefaultValue()
{
if (!$this->hasDefaultValue) {
throw new \LogicException(sprintf('Argument $%s does not have a default value. Use %s::hasDefaultValue() to avoid this exception.', $this->name, __CLASS__));
}
return $this->defaultValue;
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
interface ArgumentMetadataFactoryInterface
{
public function createArgumentMetadata($controller);
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
private $supportsVariadic;
private $supportsParameterType;
public function __construct()
{
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsParameterType = method_exists('ReflectionParameter','getType');
}
public function createArgumentMetadata($controller)
{
$arguments = array();
if (is_array($controller)) {
$reflection = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && !$controller instanceof \Closure) {
$reflection = (new \ReflectionObject($controller))->getMethod('__invoke');
} else {
$reflection = new \ReflectionFunction($controller);
}
foreach ($reflection->getParameters() as $param) {
$arguments[] = new ArgumentMetadata($param->getName(), $this->getType($param), $this->isVariadic($param), $this->hasDefaultValue($param), $this->getDefaultValue($param), $param->allowsNull());
}
return $arguments;
}
private function isVariadic(\ReflectionParameter $parameter)
{
return $this->supportsVariadic && $parameter->isVariadic();
}
private function hasDefaultValue(\ReflectionParameter $parameter)
{
return $parameter->isDefaultValueAvailable();
}
private function getDefaultValue(\ReflectionParameter $parameter)
{
return $this->hasDefaultValue($parameter) ? $parameter->getDefaultValue() : null;
}
private function getType(\ReflectionParameter $parameter)
{
if ($this->supportsParameterType) {
if (!$type = $parameter->getType()) {
return;
}
$typeName = $type instanceof \ReflectionNamedType ? $type->getName() : $type->__toString();
if ('array'=== $typeName && !$type->isBuiltin()) {
return;
}
return $typeName;
}
if (preg_match('/^(?:[^ ]++ ){4}([a-zA-Z_\x7F-\xFF][^ ]++)/', $parameter, $info)) {
return $info[1];
}
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;
class KernelEvent extends Event
{
private $kernel;
private $request;
private $requestType;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType)
{
$this->kernel = $kernel;
$this->request = $request;
$this->requestType = $requestType;
}
public function getKernel()
{
return $this->kernel;
}
public function getRequest()
{
return $this->request;
}
public function getRequestType()
{
return $this->requestType;
}
public function isMasterRequest()
{
return HttpKernelInterface::MASTER_REQUEST === $this->requestType;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class FilterControllerEvent extends KernelEvent
{
private $controller;
public function __construct(HttpKernelInterface $kernel, callable $controller, Request $request, $requestType)
{
parent::__construct($kernel, $request, $requestType);
$this->setController($controller);
}
public function getController()
{
return $this->controller;
}
public function setController(callable $controller)
{
$this->controller = $controller;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class FilterResponseEvent extends KernelEvent
{
private $response;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, Response $response)
{
parent::__construct($kernel, $request, $requestType);
$this->setResponse($response);
}
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Response;
class GetResponseEvent extends KernelEvent
{
private $response;
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
$this->stopPropagation();
}
public function hasResponse()
{
return null !== $this->response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForControllerResultEvent extends GetResponseEvent
{
private $controllerResult;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, $controllerResult)
{
parent::__construct($kernel, $request, $requestType);
$this->controllerResult = $controllerResult;
}
public function getControllerResult()
{
return $this->controllerResult;
}
public function setControllerResult($controllerResult)
{
$this->controllerResult = $controllerResult;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForExceptionEvent extends GetResponseEvent
{
private $exception;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, \Exception $e)
{
parent::__construct($kernel, $request, $requestType);
$this->setException($e);
}
public function getException()
{
return $this->exception;
}
public function setException(\Exception $exception)
{
$this->exception = $exception;
}
}
}
namespace Symfony\Component\HttpKernel
{
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
class HttpKernel implements HttpKernelInterface, TerminableInterface
{
protected $dispatcher;
protected $resolver;
protected $requestStack;
private $argumentResolver;
public function __construct(EventDispatcherInterface $dispatcher, ControllerResolverInterface $resolver, RequestStack $requestStack = null, ArgumentResolverInterface $argumentResolver = null)
{
$this->dispatcher = $dispatcher;
$this->resolver = $resolver;
$this->requestStack = $requestStack ?: new RequestStack();
$this->argumentResolver = $argumentResolver;
if (null === $this->argumentResolver) {
@trigger_error(sprintf('As of 3.1 an %s is used to resolve arguments. In 4.0 the $argumentResolver becomes the %s if no other is provided instead of using the $resolver argument.', ArgumentResolverInterface::class, ArgumentResolver::class), E_USER_DEPRECATED);
$this->argumentResolver = $resolver;
}
}
public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
{
$request->headers->set('X-Php-Ob-Level', ob_get_level());
try {
return $this->handleRaw($request, $type);
} catch (\Exception $e) {
if ($e instanceof ConflictingHeadersException) {
$e = new BadRequestHttpException('The request headers contain conflicting information regarding the origin of this request.', $e);
}
if (false === $catch) {
$this->finishRequest($request, $type);
throw $e;
}
return $this->handleException($e, $request, $type);
}
}
public function terminate(Request $request, Response $response)
{
$this->dispatcher->dispatch(KernelEvents::TERMINATE, new PostResponseEvent($this, $request, $response));
}
public function terminateWithException(\Exception $exception)
{
if (!$request = $this->requestStack->getMasterRequest()) {
throw new \LogicException('Request stack is empty', 0, $exception);
}
$response = $this->handleException($exception, $request, self::MASTER_REQUEST);
$response->sendHeaders();
$response->sendContent();
$this->terminate($request, $response);
}
private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
{
$this->requestStack->push($request);
$event = new GetResponseEvent($this, $request, $type);
$this->dispatcher->dispatch(KernelEvents::REQUEST, $event);
if ($event->hasResponse()) {
return $this->filterResponse($event->getResponse(), $request, $type);
}
if (false === $controller = $this->resolver->getController($request)) {
throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". The route is wrongly configured.', $request->getPathInfo()));
}
$event = new FilterControllerEvent($this, $controller, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
$controller = $event->getController();
$arguments = $this->argumentResolver->getArguments($request, $controller);
$event = new FilterControllerArgumentsEvent($this, $controller, $arguments, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER_ARGUMENTS, $event);
$controller = $event->getController();
$arguments = $event->getArguments();
$response = call_user_func_array($controller, $arguments);
if (!$response instanceof Response) {
$event = new GetResponseForControllerResultEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::VIEW, $event);
if ($event->hasResponse()) {
$response = $event->getResponse();
}
if (!$response instanceof Response) {
$msg = sprintf('The controller must return a response (%s given).', $this->varToString($response));
if (null === $response) {
$msg .=' Did you forget to add a return statement somewhere in your controller?';
}
throw new \LogicException($msg);
}
}
return $this->filterResponse($response, $request, $type);
}
private function filterResponse(Response $response, Request $request, $type)
{
$event = new FilterResponseEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::RESPONSE, $event);
$this->finishRequest($request, $type);
return $event->getResponse();
}
private function finishRequest(Request $request, $type)
{
$this->dispatcher->dispatch(KernelEvents::FINISH_REQUEST, new FinishRequestEvent($this, $request, $type));
$this->requestStack->pop();
}
private function handleException(\Exception $e, $request, $type)
{
$event = new GetResponseForExceptionEvent($this, $request, $type, $e);
$this->dispatcher->dispatch(KernelEvents::EXCEPTION, $event);
$e = $event->getException();
if (!$event->hasResponse()) {
$this->finishRequest($request, $type);
throw $e;
}
$response = $event->getResponse();
if ($response->headers->has('X-Status-Code')) {
$response->setStatusCode($response->headers->get('X-Status-Code'));
$response->headers->remove('X-Status-Code');
} elseif (!$response->isClientError() && !$response->isServerError() && !$response->isRedirect()) {
if ($e instanceof HttpExceptionInterface) {
$response->setStatusCode($e->getStatusCode());
$response->headers->add($e->getHeaders());
} else {
$response->setStatusCode(500);
}
}
try {
return $this->filterResponse($response, $request, $type);
} catch (\Exception $e) {
return $response;
}
}
private function varToString($var)
{
if (is_object($var)) {
return sprintf('Object(%s)', get_class($var));
}
if (is_array($var)) {
$a = array();
foreach ($var as $k => $v) {
$a[] = sprintf('%s => %s', $k, $this->varToString($v));
}
return sprintf('Array(%s)', implode(', ', $a));
}
if (is_resource($var)) {
return sprintf('Resource(%s)', get_resource_type($var));
}
if (null === $var) {
return'null';
}
if (false === $var) {
return'false';
}
if (true === $var) {
return'true';
}
return (string) $var;
}
}
}
namespace Symfony\Component\HttpKernel
{
final class KernelEvents
{
const REQUEST ='kernel.request';
const EXCEPTION ='kernel.exception';
const VIEW ='kernel.view';
const CONTROLLER ='kernel.controller';
const CONTROLLER_ARGUMENTS ='kernel.controller_arguments';
const RESPONSE ='kernel.response';
const TERMINATE ='kernel.terminate';
const FINISH_REQUEST ='kernel.finish_request';
}
}
namespace Symfony\Component\HttpKernel\Config
{
use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;
class FileLocator extends BaseFileLocator
{
private $kernel;
private $path;
public function __construct(KernelInterface $kernel, $path = null, array $paths = array())
{
$this->kernel = $kernel;
if (null !== $path) {
$this->path = $path;
$paths[] = $path;
}
parent::__construct($paths);
}
public function locate($file, $currentPath = null, $first = true)
{
if (isset($file[0]) &&'@'=== $file[0]) {
return $this->kernel->locateResource($file, $this->path, $first);
}
return parent::locate($file, $currentPath, $first);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Symfony\Component\HttpKernel\KernelInterface;
class ControllerNameParser
{
protected $kernel;
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($controller)
{
$parts = explode(':', $controller);
if (3 !== count($parts) || in_array('', $parts, true)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "a:b:c" controller string.', $controller));
}
$originalController = $controller;
list($bundle, $controller, $action) = $parts;
$controller = str_replace('/','\\', $controller);
$bundles = array();
try {
$allBundles = $this->kernel->getBundle($bundle, false);
} catch (\InvalidArgumentException $e) {
$message = sprintf('The "%s" (from the _controller value "%s") does not exist or is not enabled in your kernel!',
$bundle,
$originalController
);
if ($alternative = $this->findAlternative($bundle)) {
$message .= sprintf(' Did you mean "%s:%s:%s"?', $alternative, $controller, $action);
}
throw new \InvalidArgumentException($message, 0, $e);
}
foreach ($allBundles as $b) {
$try = $b->getNamespace().'\\Controller\\'.$controller.'Controller';
if (class_exists($try)) {
return $try.'::'.$action.'Action';
}
$bundles[] = $b->getName();
$msg = sprintf('The _controller value "%s:%s:%s" maps to a "%s" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', $bundle, $controller, $action, $try);
}
if (count($bundles) > 1) {
$msg = sprintf('Unable to find controller "%s:%s" in bundles %s.', $bundle, $controller, implode(', ', $bundles));
}
throw new \InvalidArgumentException($msg);
}
public function build($controller)
{
if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "class::method" string.', $controller));
}
$className = $match[1];
$controllerName = $match[2];
$actionName = $match[3];
foreach ($this->kernel->getBundles() as $name => $bundle) {
if (0 !== strpos($className, $bundle->getNamespace())) {
continue;
}
return sprintf('%s:%s:%s', $name, $controllerName, $actionName);
}
throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller));
}
private function findAlternative($nonExistentBundleName)
{
$bundleNames = array_map(function ($b) {
return $b->getName();
}, $this->kernel->getBundles());
$alternative = null;
$shortest = null;
foreach ($bundleNames as $bundleName) {
if (false !== strpos($bundleName, $nonExistentBundleName)) {
return $bundleName;
}
$lev = levenshtein($nonExistentBundleName, $bundleName);
if ($lev <= strlen($nonExistentBundleName) / 3 && ($alternative === null || $lev < $shortest)) {
$alternative = $bundleName;
$shortest = $lev;
}
}
return $alternative;
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as BaseControllerResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
class ControllerResolver extends BaseControllerResolver
{
protected $container;
protected $parser;
public function __construct(ContainerInterface $container, ControllerNameParser $parser, LoggerInterface $logger = null)
{
$this->container = $container;
$this->parser = $parser;
parent::__construct($logger);
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
$count = substr_count($controller,':');
if (2 == $count) {
$controller = $this->parser->parse($controller);
} elseif (1 == $count) {
list($service, $method) = explode(':', $controller, 2);
return array($this->container->get($service), $method);
} elseif ($this->container->has($controller) && method_exists($service = $this->container->get($controller),'__invoke')) {
return $service;
} else {
throw new \LogicException(sprintf('Unable to parse the controller name "%s".', $controller));
}
}
return parent::createController($controller);
}
protected function instantiateController($class)
{
if ($this->container->has($class)) {
return $this->container->get($class);
}
$controller = parent::instantiateController($class);
if ($controller instanceof ContainerAwareInterface) {
$controller->setContainer($this->container);
}
return $controller;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface AccessMapInterface
{
public function getPatterns(Request $request);
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
use Symfony\Component\HttpFoundation\Request;
class AccessMap implements AccessMapInterface
{
private $map = array();
public function add(RequestMatcherInterface $requestMatcher, array $attributes = array(), $channel = null)
{
$this->map[] = array($requestMatcher, $attributes, $channel);
}
public function getPatterns(Request $request)
{
foreach ($this->map as $elements) {
if (null === $elements[0] || $elements[0]->matches($request)) {
return array($elements[1], $elements[2]);
}
}
return array(null, null);
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class Firewall implements EventSubscriberInterface
{
private $map;
private $dispatcher;
private $exceptionListeners;
public function __construct(FirewallMapInterface $map, EventDispatcherInterface $dispatcher)
{
$this->map = $map;
$this->dispatcher = $dispatcher;
$this->exceptionListeners = new \SplObjectStorage();
}
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
list($listeners, $exceptionListener) = $this->map->getListeners($event->getRequest());
if (null !== $exceptionListener) {
$this->exceptionListeners[$event->getRequest()] = $exceptionListener;
$exceptionListener->register($this->dispatcher);
}
foreach ($listeners as $listener) {
$listener->handle($event);
if ($event->hasResponse()) {
break;
}
}
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$request = $event->getRequest();
if (isset($this->exceptionListeners[$request])) {
$this->exceptionListeners[$request]->unregister($this->dispatcher);
unset($this->exceptionListeners[$request]);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 8),
KernelEvents::FINISH_REQUEST =>'onKernelFinishRequest',
);
}
}
}
namespace Symfony\Component\Security\Core\User
{
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
interface UserProviderInterface
{
public function loadUserByUsername($username);
public function refreshUser(UserInterface $user);
public function supportsClass($class);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
interface AuthenticationManagerInterface
{
public function authenticate(TokenInterface $token);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
private $providers;
private $eraseCredentials;
private $eventDispatcher;
public function __construct(array $providers, $eraseCredentials = true)
{
if (!$providers) {
throw new \InvalidArgumentException('You must at least add one authentication provider.');
}
foreach ($providers as $provider) {
if (!$provider instanceof AuthenticationProviderInterface) {
throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', get_class($provider)));
}
}
$this->providers = $providers;
$this->eraseCredentials = (bool) $eraseCredentials;
}
public function setEventDispatcher(EventDispatcherInterface $dispatcher)
{
$this->eventDispatcher = $dispatcher;
}
public function authenticate(TokenInterface $token)
{
$lastException = null;
$result = null;
foreach ($this->providers as $provider) {
if (!$provider->supports($token)) {
continue;
}
try {
$result = $provider->authenticate($token);
if (null !== $result) {
break;
}
} catch (AccountStatusException $e) {
$e->setToken($token);
throw $e;
} catch (AuthenticationException $e) {
$lastException = $e;
}
}
if (null !== $result) {
if (true === $this->eraseCredentials) {
$result->eraseCredentials();
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_SUCCESS, new AuthenticationEvent($result));
}
return $result;
}
if (null === $lastException) {
$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', get_class($token)));
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_FAILURE, new AuthenticationFailureEvent($token, $lastException));
}
$lastException->setToken($token);
throw $lastException;
}
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface TokenStorageInterface
{
public function getToken();
public function setToken(TokenInterface $token = null);
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class TokenStorage implements TokenStorageInterface
{
private $token;
public function getToken()
{
return $this->token;
}
public function setToken(TokenInterface $token = null)
{
$this->token = $token;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface AccessDecisionManagerInterface
{
public function decide(TokenInterface $token, array $attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AccessDecisionManager implements AccessDecisionManagerInterface
{
const STRATEGY_AFFIRMATIVE ='affirmative';
const STRATEGY_CONSENSUS ='consensus';
const STRATEGY_UNANIMOUS ='unanimous';
private $voters;
private $strategy;
private $allowIfAllAbstainDecisions;
private $allowIfEqualGrantedDeniedDecisions;
public function __construct(array $voters = array(), $strategy = self::STRATEGY_AFFIRMATIVE, $allowIfAllAbstainDecisions = false, $allowIfEqualGrantedDeniedDecisions = true)
{
$strategyMethod ='decide'.ucfirst($strategy);
if (!is_callable(array($this, $strategyMethod))) {
throw new \InvalidArgumentException(sprintf('The strategy "%s" is not supported.', $strategy));
}
$this->voters = $voters;
$this->strategy = $strategyMethod;
$this->allowIfAllAbstainDecisions = (bool) $allowIfAllAbstainDecisions;
$this->allowIfEqualGrantedDeniedDecisions = (bool) $allowIfEqualGrantedDeniedDecisions;
}
public function setVoters(array $voters)
{
$this->voters = $voters;
}
public function decide(TokenInterface $token, array $attributes, $object = null)
{
return $this->{$this->strategy}($token, $attributes, $object);
}
private function decideAffirmative(TokenInterface $token, array $attributes, $object = null)
{
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
return true;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
default:
break;
}
}
if ($deny > 0) {
return false;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideConsensus(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
}
}
if ($grant > $deny) {
return true;
}
if ($deny > $grant) {
return false;
}
if ($grant > 0) {
return $this->allowIfEqualGrantedDeniedDecisions;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideUnanimous(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
foreach ($attributes as $attribute) {
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, array($attribute));
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
return false;
default:
break;
}
}
}
if ($grant > 0) {
return true;
}
return $this->allowIfAllAbstainDecisions;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
interface AuthorizationCheckerInterface
{
public function isGranted($attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
class AuthorizationChecker implements AuthorizationCheckerInterface
{
private $tokenStorage;
private $accessDecisionManager;
private $authenticationManager;
private $alwaysAuthenticate;
public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager, AccessDecisionManagerInterface $accessDecisionManager, $alwaysAuthenticate = false)
{
$this->tokenStorage = $tokenStorage;
$this->authenticationManager = $authenticationManager;
$this->accessDecisionManager = $accessDecisionManager;
$this->alwaysAuthenticate = $alwaysAuthenticate;
}
final public function isGranted($attributes, $object = null)
{
if (null === ($token = $this->tokenStorage->getToken())) {
throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
}
if ($this->alwaysAuthenticate || !$token->isAuthenticated()) {
$this->tokenStorage->setToken($token = $this->authenticationManager->authenticate($token));
}
if (!is_array($attributes)) {
$attributes = array($attributes);
}
return $this->accessDecisionManager->decide($token, $attributes, $object);
}
}
}
namespace Symfony\Component\Security\Core\Authorization\Voter
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface VoterInterface
{
const ACCESS_GRANTED = 1;
const ACCESS_ABSTAIN = 0;
const ACCESS_DENIED = -1;
public function vote(TokenInterface $token, $subject, array $attributes);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
final class FirewallConfig
{
private $name;
private $userChecker;
private $requestMatcher;
private $securityEnabled;
private $stateless;
private $provider;
private $context;
private $entryPoint;
private $accessDeniedHandler;
private $accessDeniedUrl;
private $listeners;
public function __construct($name, $userChecker, $requestMatcher = null, $securityEnabled = true, $stateless = false, $provider = null, $context = null, $entryPoint = null, $accessDeniedHandler = null, $accessDeniedUrl = null, $listeners = array())
{
$this->name = $name;
$this->userChecker = $userChecker;
$this->requestMatcher = $requestMatcher;
$this->securityEnabled = $securityEnabled;
$this->stateless = $stateless;
$this->provider = $provider;
$this->context = $context;
$this->entryPoint = $entryPoint;
$this->accessDeniedHandler = $accessDeniedHandler;
$this->accessDeniedUrl = $accessDeniedUrl;
$this->listeners = $listeners;
}
public function getName()
{
return $this->name;
}
public function getRequestMatcher()
{
return $this->requestMatcher;
}
public function isSecurityEnabled()
{
return $this->securityEnabled;
}
public function allowsAnonymous()
{
return in_array('anonymous', $this->listeners, true);
}
public function isStateless()
{
return $this->stateless;
}
public function getProvider()
{
return $this->provider;
}
public function getContext()
{
return $this->context;
}
public function getEntryPoint()
{
return $this->entryPoint;
}
public function getUserChecker()
{
return $this->userChecker;
}
public function getAccessDeniedHandler()
{
return $this->accessDeniedHandler;
}
public function getAccessDeniedUrl()
{
return $this->accessDeniedUrl;
}
public function getListeners()
{
return $this->listeners;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface FirewallMapInterface
{
public function getListeners(Request $request);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
class FirewallMap implements FirewallMapInterface
{
protected $container;
protected $map;
private $contexts;
public function __construct(ContainerInterface $container, array $map)
{
$this->container = $container;
$this->map = $map;
$this->contexts = new \SplObjectStorage();
}
public function getListeners(Request $request)
{
$context = $this->getFirewallContext($request);
if (null === $context) {
return array(array(), null);
}
return $context->getContext();
}
public function getFirewallConfig(Request $request)
{
$context = $this->getFirewallContext($request);
if (null === $context) {
return;
}
return $context->getConfig();
}
private function getFirewallContext(Request $request)
{
if ($this->contexts->contains($request)) {
return $this->contexts[$request];
}
foreach ($this->map as $contextId => $requestMatcher) {
if (null === $requestMatcher || $requestMatcher->matches($request)) {
return $this->contexts[$request] = $this->container->get($contextId);
}
}
}
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
class FirewallContext
{
private $listeners;
private $exceptionListener;
private $config;
public function __construct(array $listeners, ExceptionListener $exceptionListener = null, FirewallConfig $config = null)
{
$this->listeners = $listeners;
$this->exceptionListener = $exceptionListener;
$this->config = $config;
}
public function getConfig()
{
return $this->config;
}
public function getContext()
{
return array($this->listeners, $this->exceptionListener);
}
}
}
namespace Symfony\Component\HttpFoundation
{
interface RequestMatcherInterface
{
public function matches(Request $request);
}
}
namespace Symfony\Component\HttpFoundation
{
class RequestMatcher implements RequestMatcherInterface
{
private $path;
private $host;
private $methods = array();
private $ips = array();
private $attributes = array();
private $schemes = array();
public function __construct($path = null, $host = null, $methods = null, $ips = null, array $attributes = array(), $schemes = null)
{
$this->matchPath($path);
$this->matchHost($host);
$this->matchMethod($methods);
$this->matchIps($ips);
$this->matchScheme($schemes);
foreach ($attributes as $k => $v) {
$this->matchAttribute($k, $v);
}
}
public function matchScheme($scheme)
{
$this->schemes = null !== $scheme ? array_map('strtolower', (array) $scheme) : array();
}
public function matchHost($regexp)
{
$this->host = $regexp;
}
public function matchPath($regexp)
{
$this->path = $regexp;
}
public function matchIp($ip)
{
$this->matchIps($ip);
}
public function matchIps($ips)
{
$this->ips = null !== $ips ? (array) $ips : array();
}
public function matchMethod($method)
{
$this->methods = null !== $method ? array_map('strtoupper', (array) $method) : array();
}
public function matchAttribute($key, $regexp)
{
$this->attributes[$key] = $regexp;
}
public function matches(Request $request)
{
if ($this->schemes && !in_array($request->getScheme(), $this->schemes, true)) {
return false;
}
if ($this->methods && !in_array($request->getMethod(), $this->methods, true)) {
return false;
}
foreach ($this->attributes as $key => $pattern) {
if (!preg_match('{'.$pattern.'}', $request->attributes->get($key))) {
return false;
}
}
if (null !== $this->path && !preg_match('{'.$this->path.'}', rawurldecode($request->getPathInfo()))) {
return false;
}
if (null !== $this->host && !preg_match('{'.$this->host.'}i', $request->getHost())) {
return false;
}
if (IpUtils::checkIp($request->getClientIp(), $this->ips)) {
return true;
}
return count($this->ips) === 0;
}
}
}
namespace
{
class Twig_Environment
{
const VERSION ='1.28.2';
const VERSION_ID = 12802;
const MAJOR_VERSION = 1;
const MINOR_VERSION = 28;
const RELEASE_VERSION = 2;
const EXTRA_VERSION ='';
protected $charset;
protected $loader;
protected $debug;
protected $autoReload;
protected $cache;
protected $lexer;
protected $parser;
protected $compiler;
protected $baseTemplateClass;
protected $extensions;
protected $parsers;
protected $visitors;
protected $filters;
protected $tests;
protected $functions;
protected $globals;
protected $runtimeInitialized = false;
protected $extensionInitialized = false;
protected $loadedTemplates;
protected $strictVariables;
protected $unaryOperators;
protected $binaryOperators;
protected $templateClassPrefix ='__TwigTemplate_';
protected $functionCallbacks = array();
protected $filterCallbacks = array();
protected $staging;
private $originalCache;
private $bcWriteCacheFile = false;
private $bcGetCacheFilename = false;
private $lastModifiedExtension = 0;
private $extensionsByClass = array();
private $runtimeLoaders = array();
private $runtimes = array();
private $optionsHash;
public function __construct(Twig_LoaderInterface $loader = null, $options = array())
{
if (null !== $loader) {
$this->setLoader($loader);
} else {
@trigger_error('Not passing a Twig_LoaderInterface as the first constructor argument of Twig_Environment is deprecated since version 1.21.', E_USER_DEPRECATED);
}
$options = array_merge(array('debug'=> false,'charset'=>'UTF-8','base_template_class'=>'Twig_Template','strict_variables'=> false,'autoescape'=>'html','cache'=> false,'auto_reload'=> null,'optimizations'=> -1,
), $options);
$this->debug = (bool) $options['debug'];
$this->charset = strtoupper($options['charset']);
$this->baseTemplateClass = $options['base_template_class'];
$this->autoReload = null === $options['auto_reload'] ? $this->debug : (bool) $options['auto_reload'];
$this->strictVariables = (bool) $options['strict_variables'];
$this->setCache($options['cache']);
$this->addExtension(new Twig_Extension_Core());
$this->addExtension(new Twig_Extension_Escaper($options['autoescape']));
$this->addExtension(new Twig_Extension_Optimizer($options['optimizations']));
$this->staging = new Twig_Extension_Staging();
if (is_string($this->originalCache)) {
$r = new ReflectionMethod($this,'writeCacheFile');
if ($r->getDeclaringClass()->getName() !== __CLASS__) {
@trigger_error('The Twig_Environment::writeCacheFile method is deprecated since version 1.22 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->bcWriteCacheFile = true;
}
$r = new ReflectionMethod($this,'getCacheFilename');
if ($r->getDeclaringClass()->getName() !== __CLASS__) {
@trigger_error('The Twig_Environment::getCacheFilename method is deprecated since version 1.22 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->bcGetCacheFilename = true;
}
}
}
public function getBaseTemplateClass()
{
return $this->baseTemplateClass;
}
public function setBaseTemplateClass($class)
{
$this->baseTemplateClass = $class;
$this->updateOptionsHash();
}
public function enableDebug()
{
$this->debug = true;
$this->updateOptionsHash();
}
public function disableDebug()
{
$this->debug = false;
$this->updateOptionsHash();
}
public function isDebug()
{
return $this->debug;
}
public function enableAutoReload()
{
$this->autoReload = true;
}
public function disableAutoReload()
{
$this->autoReload = false;
}
public function isAutoReload()
{
return $this->autoReload;
}
public function enableStrictVariables()
{
$this->strictVariables = true;
$this->updateOptionsHash();
}
public function disableStrictVariables()
{
$this->strictVariables = false;
$this->updateOptionsHash();
}
public function isStrictVariables()
{
return $this->strictVariables;
}
public function getCache($original = true)
{
return $original ? $this->originalCache : $this->cache;
}
public function setCache($cache)
{
if (is_string($cache)) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Filesystem($cache);
} elseif (false === $cache) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Null();
} elseif (null === $cache) {
@trigger_error('Using "null" as the cache strategy is deprecated since version 1.23 and will be removed in Twig 2.0.', E_USER_DEPRECATED);
$this->originalCache = false;
$this->cache = new Twig_Cache_Null();
} elseif ($cache instanceof Twig_CacheInterface) {
$this->originalCache = $this->cache = $cache;
} else {
throw new LogicException(sprintf('Cache can only be a string, false, or a Twig_CacheInterface implementation.'));
}
}
public function getCacheFilename($name)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
$key = $this->cache->generateKey($name, $this->getTemplateClass($name));
return !$key ? false : $key;
}
public function getTemplateClass($name, $index = null)
{
$key = $this->getLoader()->getCacheKey($name).$this->optionsHash;
return $this->templateClassPrefix.hash('sha256', $key).(null === $index ?'':'_'.$index);
}
public function getTemplateClassPrefix()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
return $this->templateClassPrefix;
}
public function render($name, array $context = array())
{
return $this->loadTemplate($name)->render($context);
}
public function display($name, array $context = array())
{
$this->loadTemplate($name)->display($context);
}
public function load($name)
{
if ($name instanceof Twig_TemplateWrapper) {
return $name;
}
if ($name instanceof Twig_Template) {
return new Twig_TemplateWrapper($this, $name);
}
return new Twig_TemplateWrapper($this, $this->loadTemplate($name));
}
public function loadTemplate($name, $index = null)
{
$cls = $this->getTemplateClass($name, $index);
if (isset($this->loadedTemplates[$cls])) {
return $this->loadedTemplates[$cls];
}
if (!class_exists($cls, false)) {
if ($this->bcGetCacheFilename) {
$key = $this->getCacheFilename($name);
} else {
$key = $this->cache->generateKey($name, $cls);
}
if (!$this->isAutoReload() || $this->isTemplateFresh($name, $this->cache->getTimestamp($key))) {
$this->cache->load($key);
}
if (!class_exists($cls, false)) {
$loader = $this->getLoader();
if (!$loader instanceof Twig_SourceContextLoaderInterface) {
$source = new Twig_Source($loader->getSource($name), $name);
} else {
$source = $loader->getSourceContext($name);
}
$content = $this->compileSource($source);
if ($this->bcWriteCacheFile) {
$this->writeCacheFile($key, $content);
} else {
$this->cache->write($key, $content);
$this->cache->load($key);
}
if (!class_exists($cls, false)) {
eval('?>'.$content);
}
}
}
if (!$this->runtimeInitialized) {
$this->initRuntime();
}
return $this->loadedTemplates[$cls] = new $cls($this);
}
public function createTemplate($template)
{
$name = sprintf('__string_template__%s', hash('sha256', uniqid(mt_rand(), true), false));
$loader = new Twig_Loader_Chain(array(
new Twig_Loader_Array(array($name => $template)),
$current = $this->getLoader(),
));
$this->setLoader($loader);
try {
$template = $this->loadTemplate($name);
} catch (Exception $e) {
$this->setLoader($current);
throw $e;
} catch (Throwable $e) {
$this->setLoader($current);
throw $e;
}
$this->setLoader($current);
return $template;
}
public function isTemplateFresh($name, $time)
{
if (0 === $this->lastModifiedExtension) {
foreach ($this->extensions as $extension) {
$r = new ReflectionObject($extension);
if (file_exists($r->getFileName()) && ($extensionTime = filemtime($r->getFileName())) > $this->lastModifiedExtension) {
$this->lastModifiedExtension = $extensionTime;
}
}
}
return $this->lastModifiedExtension <= $time && $this->getLoader()->isFresh($name, $time);
}
public function resolveTemplate($names)
{
if (!is_array($names)) {
$names = array($names);
}
foreach ($names as $name) {
if ($name instanceof Twig_Template) {
return $name;
}
try {
return $this->loadTemplate($name);
} catch (Twig_Error_Loader $e) {
}
}
if (1 === count($names)) {
throw $e;
}
throw new Twig_Error_Loader(sprintf('Unable to find one of the following templates: "%s".', implode('", "', $names)));
}
public function clearTemplateCache()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.18.3 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
$this->loadedTemplates = array();
}
public function clearCacheFiles()
{
@trigger_error(sprintf('The %s method is deprecated since version 1.22 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
if (is_string($this->originalCache)) {
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->originalCache), RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
if ($file->isFile()) {
@unlink($file->getPathname());
}
}
}
}
public function getLexer()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->lexer) {
$this->lexer = new Twig_Lexer($this);
}
return $this->lexer;
}
public function setLexer(Twig_LexerInterface $lexer)
{
$this->lexer = $lexer;
}
public function tokenize($source, $name = null)
{
if (!$source instanceof Twig_Source) {
@trigger_error(sprintf('Passing a string as the $source argument of %s() is deprecated since version 1.27. Pass a Twig_Source instance instead.', __METHOD__), E_USER_DEPRECATED);
$source = new Twig_Source($source, $name);
}
if (null === $this->lexer) {
$this->lexer = new Twig_Lexer($this);
}
return $this->lexer->tokenize($source);
}
public function getParser()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->parser) {
$this->parser = new Twig_Parser($this);
}
return $this->parser;
}
public function setParser(Twig_ParserInterface $parser)
{
$this->parser = $parser;
}
public function parse(Twig_TokenStream $stream)
{
if (null === $this->parser) {
$this->parser = new Twig_Parser($this);
}
return $this->parser->parse($stream);
}
public function getCompiler()
{
@trigger_error(sprintf('The %s() method is deprecated since version 1.25 and will be removed in 2.0.', __FUNCTION__), E_USER_DEPRECATED);
if (null === $this->compiler) {
$this->compiler = new Twig_Compiler($this);
}
return $this->compiler;
}
public function setCompiler(Twig_CompilerInterface $compiler)
{
$this->compiler = $compiler;
}
public function compile(Twig_NodeInterface $node)
{
if (null === $this->compiler) {
$this->compiler = new Twig_Compiler($this);
}
return $this->compiler->compile($node)->getSource();
}
public function compileSource($source, $name = null)
{
if (!$source instanceof Twig_Source) {
@trigger_error(sprintf('Passing a string as the $source argument of %s() is deprecated since version 1.27. Pass a Twig_Source instance instead.', __METHOD__), E_USER_DEPRECATED);
$source = new Twig_Source($source, $name);
}
try {
return $this->compile($this->parse($this->tokenize($source)));
} catch (Twig_Error $e) {
$e->setTemplateName($source->getName());
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Syntax(sprintf('An exception has been thrown during the compilation of a template ("%s").', $e->getMessage()), -1, $source->getName(), $e);
}
}
public function setLoader(Twig_LoaderInterface $loader)
{
if (!$loader instanceof Twig_SourceContextLoaderInterface && 0 !== strpos(get_class($loader),'Mock_Twig_LoaderInterface')) {
@trigger_error(sprintf('Twig loader "%s" should implement Twig_SourceContextLoaderInterface since version 1.27.', get_class($loader)), E_USER_DEPRECATED);
}
$this->loader = $loader;
}
public function getLoader()
{
if (null === $this->loader) {
throw new LogicException('You must set a loader first.');
}
return $this->loader;
}
public function setCharset($charset)
{
$this->charset = strtoupper($charset);
}
public function getCharset()
{
return $this->charset;
}
public function initRuntime()
{
$this->runtimeInitialized = true;
foreach ($this->getExtensions() as $name => $extension) {
if (!$extension instanceof Twig_Extension_InitRuntimeInterface) {
$m = new ReflectionMethod($extension,'initRuntime');
if ('Twig_Extension'!== $m->getDeclaringClass()->getName()) {
@trigger_error(sprintf('Defining the initRuntime() method in the "%s" extension is deprecated since version 1.23. Use the `needs_environment` option to get the Twig_Environment instance in filters, functions, or tests; or explicitly implement Twig_Extension_InitRuntimeInterface if needed (not recommended).', $name), E_USER_DEPRECATED);
}
}
$extension->initRuntime($this);
}
}
public function hasExtension($class)
{
$class = ltrim($class,'\\');
if (isset($this->extensions[$class])) {
if ($class !== get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
return true;
}
return isset($this->extensionsByClass[ltrim($class,'\\')]);
}
public function addRuntimeLoader(Twig_RuntimeLoaderInterface $loader)
{
$this->runtimeLoaders[] = $loader;
}
public function getExtension($class)
{
$class = ltrim($class,'\\');
if (isset($this->extensions[$class])) {
if ($class !== get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
return $this->extensions[$class];
}
if (!isset($this->extensionsByClass[$class])) {
throw new Twig_Error_Runtime(sprintf('The "%s" extension is not enabled.', $class));
}
return $this->extensionsByClass[$class];
}
public function getRuntime($class)
{
if (isset($this->runtimes[$class])) {
return $this->runtimes[$class];
}
foreach ($this->runtimeLoaders as $loader) {
if (null !== $runtime = $loader->load($class)) {
return $this->runtimes[$class] = $runtime;
}
}
throw new Twig_Error_Runtime(sprintf('Unable to load the "%s" runtime.', $class));
}
public function addExtension(Twig_ExtensionInterface $extension)
{
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to register extension "%s" as extensions have already been initialized.', $extension->getName()));
}
$class = get_class($extension);
if ($class !== $extension->getName()) {
if (isset($this->extensions[$extension->getName()])) {
unset($this->extensions[$extension->getName()], $this->extensionsByClass[$class]);
@trigger_error(sprintf('The possibility to register the same extension twice ("%s") is deprecated since version 1.23 and will be removed in Twig 2.0. Use proper PHP inheritance instead.', $extension->getName()), E_USER_DEPRECATED);
}
}
$this->lastModifiedExtension = 0;
$this->extensionsByClass[$class] = $extension;
$this->extensions[$extension->getName()] = $extension;
$this->updateOptionsHash();
}
public function removeExtension($name)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.12 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to remove extension "%s" as extensions have already been initialized.', $name));
}
$class = ltrim($name,'\\');
if (isset($this->extensions[$class])) {
if ($class !== get_class($this->extensions[$class])) {
@trigger_error(sprintf('Referencing the "%s" extension by its name (defined by getName()) is deprecated since 1.26 and will be removed in Twig 2.0. Use the Fully Qualified Extension Class Name instead.', $class), E_USER_DEPRECATED);
}
unset($this->extensions[$class]);
}
unset($this->extensions[$class]);
$this->updateOptionsHash();
}
public function setExtensions(array $extensions)
{
foreach ($extensions as $extension) {
$this->addExtension($extension);
}
}
public function getExtensions()
{
return $this->extensions;
}
public function addTokenParser(Twig_TokenParserInterface $parser)
{
if ($this->extensionInitialized) {
throw new LogicException('Unable to add a token parser as extensions have already been initialized.');
}
$this->staging->addTokenParser($parser);
}
public function getTokenParsers()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->parsers;
}
public function getTags()
{
$tags = array();
foreach ($this->getTokenParsers()->getParsers() as $parser) {
if ($parser instanceof Twig_TokenParserInterface) {
$tags[$parser->getTag()] = $parser;
}
}
return $tags;
}
public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
{
if ($this->extensionInitialized) {
throw new LogicException('Unable to add a node visitor as extensions have already been initialized.');
}
$this->staging->addNodeVisitor($visitor);
}
public function getNodeVisitors()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->visitors;
}
public function addFilter($name, $filter = null)
{
if (!$name instanceof Twig_SimpleFilter && !($filter instanceof Twig_SimpleFilter || $filter instanceof Twig_FilterInterface)) {
throw new LogicException('A filter must be an instance of Twig_FilterInterface or Twig_SimpleFilter.');
}
if ($name instanceof Twig_SimpleFilter) {
$filter = $name;
$name = $filter->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleFilter" instead when defining filter "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add filter "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFilter($name, $filter);
}
public function getFilter($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->filters[$name])) {
return $this->filters[$name];
}
foreach ($this->filters as $pattern => $filter) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$filter->setArguments($matches);
return $filter;
}
}
}
foreach ($this->filterCallbacks as $callback) {
if (false !== $filter = call_user_func($callback, $name)) {
return $filter;
}
}
return false;
}
public function registerUndefinedFilterCallback($callable)
{
$this->filterCallbacks[] = $callable;
}
public function getFilters()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->filters;
}
public function addTest($name, $test = null)
{
if (!$name instanceof Twig_SimpleTest && !($test instanceof Twig_SimpleTest || $test instanceof Twig_TestInterface)) {
throw new LogicException('A test must be an instance of Twig_TestInterface or Twig_SimpleTest.');
}
if ($name instanceof Twig_SimpleTest) {
$test = $name;
$name = $test->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleTest" instead when defining test "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add test "%s" as extensions have already been initialized.', $name));
}
$this->staging->addTest($name, $test);
}
public function getTests()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->tests;
}
public function getTest($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->tests[$name])) {
return $this->tests[$name];
}
return false;
}
public function addFunction($name, $function = null)
{
if (!$name instanceof Twig_SimpleFunction && !($function instanceof Twig_SimpleFunction || $function instanceof Twig_FunctionInterface)) {
throw new LogicException('A function must be an instance of Twig_FunctionInterface or Twig_SimpleFunction.');
}
if ($name instanceof Twig_SimpleFunction) {
$function = $name;
$name = $function->getName();
} else {
@trigger_error(sprintf('Passing a name as a first argument to the %s method is deprecated since version 1.21. Pass an instance of "Twig_SimpleFunction" instead when defining function "%s".', __METHOD__, $name), E_USER_DEPRECATED);
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add function "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFunction($name, $function);
}
public function getFunction($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->functions[$name])) {
return $this->functions[$name];
}
foreach ($this->functions as $pattern => $function) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$function->setArguments($matches);
return $function;
}
}
}
foreach ($this->functionCallbacks as $callback) {
if (false !== $function = call_user_func($callback, $name)) {
return $function;
}
}
return false;
}
public function registerUndefinedFunctionCallback($callable)
{
$this->functionCallbacks[] = $callable;
}
public function getFunctions()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->functions;
}
public function addGlobal($name, $value)
{
if ($this->extensionInitialized || $this->runtimeInitialized) {
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
if (!array_key_exists($name, $this->globals)) {
@trigger_error(sprintf('Registering global variable "%s" at runtime or when the extensions have already been initialized is deprecated since version 1.21.', $name), E_USER_DEPRECATED);
}
}
if ($this->extensionInitialized || $this->runtimeInitialized) {
$this->globals[$name] = $value;
} else {
$this->staging->addGlobal($name, $value);
}
}
public function getGlobals()
{
if (!$this->runtimeInitialized && !$this->extensionInitialized) {
return $this->initGlobals();
}
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
return $this->globals;
}
public function mergeGlobals(array $context)
{
foreach ($this->getGlobals() as $key => $value) {
if (!array_key_exists($key, $context)) {
$context[$key] = $value;
}
}
return $context;
}
public function getUnaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->unaryOperators;
}
public function getBinaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->binaryOperators;
}
public function computeAlternatives($name, $items)
{
@trigger_error(sprintf('The %s method is deprecated since version 1.23 and will be removed in Twig 2.0.', __METHOD__), E_USER_DEPRECATED);
return Twig_Error_Syntax::computeAlternatives($name, $items);
}
protected function initGlobals()
{
$globals = array();
foreach ($this->extensions as $name => $extension) {
if (!$extension instanceof Twig_Extension_GlobalsInterface) {
$m = new ReflectionMethod($extension,'getGlobals');
if ('Twig_Extension'!== $m->getDeclaringClass()->getName()) {
@trigger_error(sprintf('Defining the getGlobals() method in the "%s" extension without explicitly implementing Twig_Extension_GlobalsInterface is deprecated since version 1.23.', $name), E_USER_DEPRECATED);
}
}
$extGlob = $extension->getGlobals();
if (!is_array($extGlob)) {
throw new UnexpectedValueException(sprintf('"%s::getGlobals()" must return an array of globals.', get_class($extension)));
}
$globals[] = $extGlob;
}
$globals[] = $this->staging->getGlobals();
return call_user_func_array('array_merge', $globals);
}
protected function initExtensions()
{
if ($this->extensionInitialized) {
return;
}
$this->extensionInitialized = true;
$this->parsers = new Twig_TokenParserBroker(array(), array(), false);
$this->filters = array();
$this->functions = array();
$this->tests = array();
$this->visitors = array();
$this->unaryOperators = array();
$this->binaryOperators = array();
foreach ($this->extensions as $extension) {
$this->initExtension($extension);
}
$this->initExtension($this->staging);
}
protected function initExtension(Twig_ExtensionInterface $extension)
{
foreach ($extension->getFilters() as $name => $filter) {
if ($filter instanceof Twig_SimpleFilter) {
$name = $filter->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for filter "%s" is deprecated since version 1.21. Use Twig_SimpleFilter instead.', get_class($filter), $name), E_USER_DEPRECATED);
}
$this->filters[$name] = $filter;
}
foreach ($extension->getFunctions() as $name => $function) {
if ($function instanceof Twig_SimpleFunction) {
$name = $function->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for function "%s" is deprecated since version 1.21. Use Twig_SimpleFunction instead.', get_class($function), $name), E_USER_DEPRECATED);
}
$this->functions[$name] = $function;
}
foreach ($extension->getTests() as $name => $test) {
if ($test instanceof Twig_SimpleTest) {
$name = $test->getName();
} else {
@trigger_error(sprintf('Using an instance of "%s" for test "%s" is deprecated since version 1.21. Use Twig_SimpleTest instead.', get_class($test), $name), E_USER_DEPRECATED);
}
$this->tests[$name] = $test;
}
foreach ($extension->getTokenParsers() as $parser) {
if ($parser instanceof Twig_TokenParserInterface) {
$this->parsers->addTokenParser($parser);
} elseif ($parser instanceof Twig_TokenParserBrokerInterface) {
@trigger_error('Registering a Twig_TokenParserBrokerInterface instance is deprecated since version 1.21.', E_USER_DEPRECATED);
$this->parsers->addTokenParserBroker($parser);
} else {
throw new LogicException('getTokenParsers() must return an array of Twig_TokenParserInterface or Twig_TokenParserBrokerInterface instances.');
}
}
foreach ($extension->getNodeVisitors() as $visitor) {
$this->visitors[] = $visitor;
}
if ($operators = $extension->getOperators()) {
if (2 !== count($operators)) {
throw new InvalidArgumentException(sprintf('"%s::getOperators()" does not return a valid operators array.', get_class($extension)));
}
$this->unaryOperators = array_merge($this->unaryOperators, $operators[0]);
$this->binaryOperators = array_merge($this->binaryOperators, $operators[1]);
}
}
protected function writeCacheFile($file, $content)
{
$this->cache->write($file, $content);
}
private function updateOptionsHash()
{
$hashParts = array_merge(
array_keys($this->extensions),
array(
(int) function_exists('twig_template_get_attributes'),
PHP_MAJOR_VERSION,
PHP_MINOR_VERSION,
self::VERSION,
(int) $this->debug,
$this->baseTemplateClass,
(int) $this->strictVariables,
)
);
$this->optionsHash = implode(':', $hashParts);
}
}
}
namespace
{
interface Twig_ExtensionInterface
{
public function initRuntime(Twig_Environment $environment);
public function getTokenParsers();
public function getNodeVisitors();
public function getFilters();
public function getTests();
public function getFunctions();
public function getOperators();
public function getGlobals();
public function getName();
}
}
namespace
{
abstract class Twig_Extension implements Twig_ExtensionInterface
{
public function initRuntime(Twig_Environment $environment)
{
}
public function getTokenParsers()
{
return array();
}
public function getNodeVisitors()
{
return array();
}
public function getFilters()
{
return array();
}
public function getTests()
{
return array();
}
public function getFunctions()
{
return array();
}
public function getOperators()
{
return array();
}
public function getGlobals()
{
return array();
}
public function getName()
{
return get_class($this);
}
}
}
namespace
{
if (!defined('ENT_SUBSTITUTE')) {
define('ENT_SUBSTITUTE', 0);
}
class Twig_Extension_Core extends Twig_Extension
{
protected $dateFormats = array('F j, Y H:i','%d days');
protected $numberFormat = array(0,'.',',');
protected $timezone = null;
protected $escapers = array();
public function setEscaper($strategy, $callable)
{
$this->escapers[$strategy] = $callable;
}
public function getEscapers()
{
return $this->escapers;
}
public function setDateFormat($format = null, $dateIntervalFormat = null)
{
if (null !== $format) {
$this->dateFormats[0] = $format;
}
if (null !== $dateIntervalFormat) {
$this->dateFormats[1] = $dateIntervalFormat;
}
}
public function getDateFormat()
{
return $this->dateFormats;
}
public function setTimezone($timezone)
{
$this->timezone = $timezone instanceof DateTimeZone ? $timezone : new DateTimeZone($timezone);
}
public function getTimezone()
{
if (null === $this->timezone) {
$this->timezone = new DateTimeZone(date_default_timezone_get());
}
return $this->timezone;
}
public function setNumberFormat($decimal, $decimalPoint, $thousandSep)
{
$this->numberFormat = array($decimal, $decimalPoint, $thousandSep);
}
public function getNumberFormat()
{
return $this->numberFormat;
}
public function getTokenParsers()
{
return array(
new Twig_TokenParser_For(),
new Twig_TokenParser_If(),
new Twig_TokenParser_Extends(),
new Twig_TokenParser_Include(),
new Twig_TokenParser_Block(),
new Twig_TokenParser_Use(),
new Twig_TokenParser_Filter(),
new Twig_TokenParser_Macro(),
new Twig_TokenParser_Import(),
new Twig_TokenParser_From(),
new Twig_TokenParser_Set(),
new Twig_TokenParser_Spaceless(),
new Twig_TokenParser_Flush(),
new Twig_TokenParser_Do(),
new Twig_TokenParser_Embed(),
new Twig_TokenParser_With(),
);
}
public function getFilters()
{
$filters = array(
new Twig_SimpleFilter('date','twig_date_format_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('date_modify','twig_date_modify_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('format','sprintf'),
new Twig_SimpleFilter('replace','twig_replace_filter'),
new Twig_SimpleFilter('number_format','twig_number_format_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('abs','abs'),
new Twig_SimpleFilter('round','twig_round'),
new Twig_SimpleFilter('url_encode','twig_urlencode_filter'),
new Twig_SimpleFilter('json_encode','twig_jsonencode_filter'),
new Twig_SimpleFilter('convert_encoding','twig_convert_encoding'),
new Twig_SimpleFilter('title','twig_title_string_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('capitalize','twig_capitalize_string_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('upper','strtoupper'),
new Twig_SimpleFilter('lower','strtolower'),
new Twig_SimpleFilter('striptags','strip_tags'),
new Twig_SimpleFilter('trim','trim'),
new Twig_SimpleFilter('nl2br','nl2br', array('pre_escape'=>'html','is_safe'=> array('html'))),
new Twig_SimpleFilter('join','twig_join_filter'),
new Twig_SimpleFilter('split','twig_split_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('sort','twig_sort_filter'),
new Twig_SimpleFilter('merge','twig_array_merge'),
new Twig_SimpleFilter('batch','twig_array_batch'),
new Twig_SimpleFilter('reverse','twig_reverse_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('length','twig_length_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('slice','twig_slice', array('needs_environment'=> true)),
new Twig_SimpleFilter('first','twig_first', array('needs_environment'=> true)),
new Twig_SimpleFilter('last','twig_last', array('needs_environment'=> true)),
new Twig_SimpleFilter('default','_twig_default_filter', array('node_class'=>'Twig_Node_Expression_Filter_Default')),
new Twig_SimpleFilter('keys','twig_get_array_keys_filter'),
new Twig_SimpleFilter('escape','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
new Twig_SimpleFilter('e','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
);
if (function_exists('mb_get_info')) {
$filters[] = new Twig_SimpleFilter('upper','twig_upper_filter', array('needs_environment'=> true));
$filters[] = new Twig_SimpleFilter('lower','twig_lower_filter', array('needs_environment'=> true));
}
return $filters;
}
public function getFunctions()
{
return array(
new Twig_SimpleFunction('max','max'),
new Twig_SimpleFunction('min','min'),
new Twig_SimpleFunction('range','range'),
new Twig_SimpleFunction('constant','twig_constant'),
new Twig_SimpleFunction('cycle','twig_cycle'),
new Twig_SimpleFunction('random','twig_random', array('needs_environment'=> true)),
new Twig_SimpleFunction('date','twig_date_converter', array('needs_environment'=> true)),
new Twig_SimpleFunction('include','twig_include', array('needs_environment'=> true,'needs_context'=> true,'is_safe'=> array('all'))),
new Twig_SimpleFunction('source','twig_source', array('needs_environment'=> true,'is_safe'=> array('all'))),
);
}
public function getTests()
{
return array(
new Twig_SimpleTest('even', null, array('node_class'=>'Twig_Node_Expression_Test_Even')),
new Twig_SimpleTest('odd', null, array('node_class'=>'Twig_Node_Expression_Test_Odd')),
new Twig_SimpleTest('defined', null, array('node_class'=>'Twig_Node_Expression_Test_Defined')),
new Twig_SimpleTest('sameas', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas','deprecated'=>'1.21','alternative'=>'same as')),
new Twig_SimpleTest('same as', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas')),
new Twig_SimpleTest('none', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_SimpleTest('null', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_SimpleTest('divisibleby', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby','deprecated'=>'1.21','alternative'=>'divisible by')),
new Twig_SimpleTest('divisible by', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby')),
new Twig_SimpleTest('constant', null, array('node_class'=>'Twig_Node_Expression_Test_Constant')),
new Twig_SimpleTest('empty','twig_test_empty'),
new Twig_SimpleTest('iterable','twig_test_iterable'),
);
}
public function getOperators()
{
return array(
array('not'=> array('precedence'=> 50,'class'=>'Twig_Node_Expression_Unary_Not'),'-'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Neg'),'+'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Pos'),
),
array('or'=> array('precedence'=> 10,'class'=>'Twig_Node_Expression_Binary_Or','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'and'=> array('precedence'=> 15,'class'=>'Twig_Node_Expression_Binary_And','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-or'=> array('precedence'=> 16,'class'=>'Twig_Node_Expression_Binary_BitwiseOr','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-xor'=> array('precedence'=> 17,'class'=>'Twig_Node_Expression_Binary_BitwiseXor','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-and'=> array('precedence'=> 18,'class'=>'Twig_Node_Expression_Binary_BitwiseAnd','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'=='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Equal','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'!='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Less','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Greater','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_GreaterEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_LessEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'not in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotIn','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_In','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'matches'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Matches','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'starts with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_StartsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'ends with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_EndsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'..'=> array('precedence'=> 25,'class'=>'Twig_Node_Expression_Binary_Range','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'+'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Add','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'-'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Sub','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'~'=> array('precedence'=> 40,'class'=>'Twig_Node_Expression_Binary_Concat','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'*'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mul','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'/'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Div','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'//'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_FloorDiv','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'%'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mod','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is not'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'**'=> array('precedence'=> 200,'class'=>'Twig_Node_Expression_Binary_Power','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),'??'=> array('precedence'=> 300,'class'=>'Twig_Node_Expression_NullCoalesce','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),
),
);
}
public function getName()
{
return'core';
}
}
function twig_cycle($values, $position)
{
if (!is_array($values) && !$values instanceof ArrayAccess) {
return $values;
}
return $values[$position % count($values)];
}
function twig_random(Twig_Environment $env, $values = null)
{
if (null === $values) {
return mt_rand();
}
if (is_int($values) || is_float($values)) {
return $values < 0 ? mt_rand($values, 0) : mt_rand(0, $values);
}
if ($values instanceof Traversable) {
$values = iterator_to_array($values);
} elseif (is_string($values)) {
if (''=== $values) {
return'';
}
if (null !== $charset = $env->getCharset()) {
if ('UTF-8'!== $charset) {
$values = twig_convert_encoding($values,'UTF-8', $charset);
}
$values = preg_split('/(?<!^)(?!$)/u', $values);
if ('UTF-8'!== $charset) {
foreach ($values as $i => $value) {
$values[$i] = twig_convert_encoding($value, $charset,'UTF-8');
}
}
} else {
return $values[mt_rand(0, strlen($values) - 1)];
}
}
if (!is_array($values)) {
return $values;
}
if (0 === count($values)) {
throw new Twig_Error_Runtime('The random function cannot pick from an empty array.');
}
return $values[array_rand($values, 1)];
}
function twig_date_format_filter(Twig_Environment $env, $date, $format = null, $timezone = null)
{
if (null === $format) {
$formats = $env->getExtension('Twig_Extension_Core')->getDateFormat();
$format = $date instanceof DateInterval ? $formats[1] : $formats[0];
}
if ($date instanceof DateInterval) {
return $date->format($format);
}
return twig_date_converter($env, $date, $timezone)->format($format);
}
function twig_date_modify_filter(Twig_Environment $env, $date, $modifier)
{
$date = twig_date_converter($env, $date, false);
$resultDate = $date->modify($modifier);
return null === $resultDate ? $date : $resultDate;
}
function twig_date_converter(Twig_Environment $env, $date = null, $timezone = null)
{
if (false !== $timezone) {
if (null === $timezone) {
$timezone = $env->getExtension('Twig_Extension_Core')->getTimezone();
} elseif (!$timezone instanceof DateTimeZone) {
$timezone = new DateTimeZone($timezone);
}
}
if ($date instanceof DateTimeImmutable) {
return false !== $timezone ? $date->setTimezone($timezone) : $date;
}
if ($date instanceof DateTime || $date instanceof DateTimeInterface) {
$date = clone $date;
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
if (null === $date ||'now'=== $date) {
return new DateTime($date, false !== $timezone ? $timezone : $env->getExtension('Twig_Extension_Core')->getTimezone());
}
$asString = (string) $date;
if (ctype_digit($asString) || (!empty($asString) &&'-'=== $asString[0] && ctype_digit(substr($asString, 1)))) {
$date = new DateTime('@'.$date);
} else {
$date = new DateTime($date, $env->getExtension('Twig_Extension_Core')->getTimezone());
}
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
function twig_replace_filter($str, $from, $to = null)
{
if ($from instanceof Traversable) {
$from = iterator_to_array($from);
} elseif (is_string($from) && is_string($to)) {
@trigger_error('Using "replace" with character by character replacement is deprecated since version 1.22 and will be removed in Twig 2.0', E_USER_DEPRECATED);
return strtr($str, $from, $to);
} elseif (!is_array($from)) {
throw new Twig_Error_Runtime(sprintf('The "replace" filter expects an array or "Traversable" as replace values, got "%s".', is_object($from) ? get_class($from) : gettype($from)));
}
return strtr($str, $from);
}
function twig_round($value, $precision = 0, $method ='common')
{
if ('common'== $method) {
return round($value, $precision);
}
if ('ceil'!= $method &&'floor'!= $method) {
throw new Twig_Error_Runtime('The round filter only supports the "common", "ceil", and "floor" methods.');
}
return $method($value * pow(10, $precision)) / pow(10, $precision);
}
function twig_number_format_filter(Twig_Environment $env, $number, $decimal = null, $decimalPoint = null, $thousandSep = null)
{
$defaults = $env->getExtension('Twig_Extension_Core')->getNumberFormat();
if (null === $decimal) {
$decimal = $defaults[0];
}
if (null === $decimalPoint) {
$decimalPoint = $defaults[1];
}
if (null === $thousandSep) {
$thousandSep = $defaults[2];
}
return number_format((float) $number, $decimal, $decimalPoint, $thousandSep);
}
function twig_urlencode_filter($url)
{
if (is_array($url)) {
if (defined('PHP_QUERY_RFC3986')) {
return http_build_query($url,'','&', PHP_QUERY_RFC3986);
}
return http_build_query($url,'','&');
}
return rawurlencode($url);
}
if (PHP_VERSION_ID < 50300) {
function twig_jsonencode_filter($value, $options = 0)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
} elseif (is_array($value)) {
array_walk_recursive($value,'_twig_markup2string');
}
return json_encode($value);
}
} else {
function twig_jsonencode_filter($value, $options = 0)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
} elseif (is_array($value)) {
array_walk_recursive($value,'_twig_markup2string');
}
return json_encode($value, $options);
}
}
function _twig_markup2string(&$value)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
}
}
function twig_array_merge($arr1, $arr2)
{
if ($arr1 instanceof Traversable) {
$arr1 = iterator_to_array($arr1);
} elseif (!is_array($arr1)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as first argument.', gettype($arr1)));
}
if ($arr2 instanceof Traversable) {
$arr2 = iterator_to_array($arr2);
} elseif (!is_array($arr2)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as second argument.', gettype($arr2)));
}
return array_merge($arr1, $arr2);
}
function twig_slice(Twig_Environment $env, $item, $start, $length = null, $preserveKeys = false)
{
if ($item instanceof Traversable) {
if ($item instanceof IteratorAggregate) {
$item = $item->getIterator();
}
if ($start >= 0 && $length >= 0 && $item instanceof Iterator) {
try {
return iterator_to_array(new LimitIterator($item, $start, $length === null ? -1 : $length), $preserveKeys);
} catch (OutOfBoundsException $exception) {
return array();
}
}
$item = iterator_to_array($item, $preserveKeys);
}
if (is_array($item)) {
return array_slice($item, $start, $length, $preserveKeys);
}
$item = (string) $item;
if (function_exists('mb_get_info') && null !== $charset = $env->getCharset()) {
return (string) mb_substr($item, $start, null === $length ? mb_strlen($item, $charset) - $start : $length, $charset);
}
return (string) (null === $length ? substr($item, $start) : substr($item, $start, $length));
}
function twig_first(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, 0, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_last(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, -1, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_join_filter($value, $glue ='')
{
if ($value instanceof Traversable) {
$value = iterator_to_array($value, false);
}
return implode($glue, (array) $value);
}
function twig_split_filter(Twig_Environment $env, $value, $delimiter, $limit = null)
{
if (!empty($delimiter)) {
return null === $limit ? explode($delimiter, $value) : explode($delimiter, $value, $limit);
}
if (!function_exists('mb_get_info') || null === $charset = $env->getCharset()) {
return str_split($value, null === $limit ? 1 : $limit);
}
if ($limit <= 1) {
return preg_split('/(?<!^)(?!$)/u', $value);
}
$length = mb_strlen($value, $charset);
if ($length < $limit) {
return array($value);
}
$r = array();
for ($i = 0; $i < $length; $i += $limit) {
$r[] = mb_substr($value, $i, $limit, $charset);
}
return $r;
}
function _twig_default_filter($value, $default ='')
{
if (twig_test_empty($value)) {
return $default;
}
return $value;
}
function twig_get_array_keys_filter($array)
{
if ($array instanceof Traversable) {
return array_keys(iterator_to_array($array));
}
if (!is_array($array)) {
return array();
}
return array_keys($array);
}
function twig_reverse_filter(Twig_Environment $env, $item, $preserveKeys = false)
{
if ($item instanceof Traversable) {
return array_reverse(iterator_to_array($item), $preserveKeys);
}
if (is_array($item)) {
return array_reverse($item, $preserveKeys);
}
if (null !== $charset = $env->getCharset()) {
$string = (string) $item;
if ('UTF-8'!== $charset) {
$item = twig_convert_encoding($string,'UTF-8', $charset);
}
preg_match_all('/./us', $item, $matches);
$string = implode('', array_reverse($matches[0]));
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
}
return strrev((string) $item);
}
function twig_sort_filter($array)
{
if ($array instanceof Traversable) {
$array = iterator_to_array($array);
} elseif (!is_array($array)) {
throw new Twig_Error_Runtime(sprintf('The sort filter only works with arrays or "Traversable", got "%s".', gettype($array)));
}
asort($array);
return $array;
}
function twig_in_filter($value, $compare)
{
if (is_array($compare)) {
return in_array($value, $compare, is_object($value) || is_resource($value));
} elseif (is_string($compare) && (is_string($value) || is_int($value) || is_float($value))) {
return''=== $value || false !== strpos($compare, (string) $value);
} elseif ($compare instanceof Traversable) {
return in_array($value, iterator_to_array($compare, false), is_object($value) || is_resource($value));
}
return false;
}
function twig_escape_filter(Twig_Environment $env, $string, $strategy ='html', $charset = null, $autoescape = false)
{
if ($autoescape && $string instanceof Twig_Markup) {
return $string;
}
if (!is_string($string)) {
if (is_object($string) && method_exists($string,'__toString')) {
$string = (string) $string;
} elseif (in_array($strategy, array('html','js','css','html_attr','url'))) {
return $string;
}
}
if (null === $charset) {
$charset = $env->getCharset();
}
switch ($strategy) {
case'html':
static $htmlspecialcharsCharsets;
if (null === $htmlspecialcharsCharsets) {
if (defined('HHVM_VERSION')) {
$htmlspecialcharsCharsets = array('utf-8'=> true,'UTF-8'=> true);
} else {
$htmlspecialcharsCharsets = array('ISO-8859-1'=> true,'ISO8859-1'=> true,'ISO-8859-15'=> true,'ISO8859-15'=> true,'utf-8'=> true,'UTF-8'=> true,'CP866'=> true,'IBM866'=> true,'866'=> true,'CP1251'=> true,'WINDOWS-1251'=> true,'WIN-1251'=> true,'1251'=> true,'CP1252'=> true,'WINDOWS-1252'=> true,'1252'=> true,'KOI8-R'=> true,'KOI8-RU'=> true,'KOI8R'=> true,'BIG5'=> true,'950'=> true,'GB2312'=> true,'936'=> true,'BIG5-HKSCS'=> true,'SHIFT_JIS'=> true,'SJIS'=> true,'932'=> true,'EUC-JP'=> true,'EUCJP'=> true,'ISO8859-5'=> true,'ISO-8859-5'=> true,'MACROMAN'=> true,
);
}
}
if (isset($htmlspecialcharsCharsets[$charset])) {
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
if (isset($htmlspecialcharsCharsets[strtoupper($charset)])) {
$htmlspecialcharsCharsets[$charset] = true;
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
$string = twig_convert_encoding($string,'UTF-8', $charset);
$string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8');
return twig_convert_encoding($string, $charset,'UTF-8');
case'js':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\._]#Su','_twig_escape_js_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'css':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9]#Su','_twig_escape_css_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'html_attr':
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\.\-_]#Su','_twig_escape_html_attr_callback', $string);
if ('UTF-8'!== $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'url':
if (PHP_VERSION_ID < 50300) {
return str_replace('%7E','~', rawurlencode($string));
}
return rawurlencode($string);
default:
static $escapers;
if (null === $escapers) {
$escapers = $env->getExtension('Twig_Extension_Core')->getEscapers();
}
if (isset($escapers[$strategy])) {
return call_user_func($escapers[$strategy], $env, $string, $charset);
}
$validStrategies = implode(', ', array_merge(array('html','js','url','css','html_attr'), array_keys($escapers)));
throw new Twig_Error_Runtime(sprintf('Invalid escaping strategy "%s" (valid ones: %s).', $strategy, $validStrategies));
}
}
function twig_escape_filter_is_safe(Twig_Node $filterArgs)
{
foreach ($filterArgs as $arg) {
if ($arg instanceof Twig_Node_Expression_Constant) {
return array($arg->getAttribute('value'));
}
return array();
}
return array('html');
}
if (function_exists('mb_convert_encoding')) {
function twig_convert_encoding($string, $to, $from)
{
return mb_convert_encoding($string, $to, $from);
}
} elseif (function_exists('iconv')) {
function twig_convert_encoding($string, $to, $from)
{
return iconv($from, $to, $string);
}
} else {
function twig_convert_encoding($string, $to, $from)
{
throw new Twig_Error_Runtime('No suitable convert encoding function (use UTF-8 as your encoding or install the iconv or mbstring extension).');
}
}
function _twig_escape_js_callback($matches)
{
$char = $matches[0];
if (!isset($char[1])) {
return'\\x'.strtoupper(substr('00'.bin2hex($char), -2));
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\u'.strtoupper(substr('0000'.bin2hex($char), -4));
}
function _twig_escape_css_callback($matches)
{
$char = $matches[0];
if (!isset($char[1])) {
$hex = ltrim(strtoupper(bin2hex($char)),'0');
if (0 === strlen($hex)) {
$hex ='0';
}
return'\\'.$hex.' ';
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\'.ltrim(strtoupper(bin2hex($char)),'0').' ';
}
function _twig_escape_html_attr_callback($matches)
{
static $entityMap = array(
34 =>'quot',
38 =>'amp',
60 =>'lt',
62 =>'gt',
);
$chr = $matches[0];
$ord = ord($chr);
if (($ord <= 0x1f && $chr !="\t"&& $chr !="\n"&& $chr !="\r") || ($ord >= 0x7f && $ord <= 0x9f)) {
return'&#xFFFD;';
}
if (strlen($chr) == 1) {
$hex = strtoupper(substr('00'.bin2hex($chr), -2));
} else {
$chr = twig_convert_encoding($chr,'UTF-16BE','UTF-8');
$hex = strtoupper(substr('0000'.bin2hex($chr), -4));
}
$int = hexdec($hex);
if (array_key_exists($int, $entityMap)) {
return sprintf('&%s;', $entityMap[$int]);
}
return sprintf('&#x%s;', $hex);
}
if (function_exists('mb_get_info')) {
function twig_length_filter(Twig_Environment $env, $thing)
{
return is_scalar($thing) ? mb_strlen($thing, $env->getCharset()) : count($thing);
}
function twig_upper_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtoupper($string, $charset);
}
return strtoupper($string);
}
function twig_lower_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtolower($string, $charset);
}
return strtolower($string);
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_convert_case($string, MB_CASE_TITLE, $charset);
}
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_strtoupper(mb_substr($string, 0, 1, $charset), $charset).mb_strtolower(mb_substr($string, 1, mb_strlen($string, $charset), $charset), $charset);
}
return ucfirst(strtolower($string));
}
}
else {
function twig_length_filter(Twig_Environment $env, $thing)
{
return is_scalar($thing) ? strlen($thing) : count($thing);
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
return ucfirst(strtolower($string));
}
}
function twig_ensure_traversable($seq)
{
if ($seq instanceof Traversable || is_array($seq)) {
return $seq;
}
return array();
}
function twig_test_empty($value)
{
if ($value instanceof Countable) {
return 0 == count($value);
}
return''=== $value || false === $value || null === $value || array() === $value;
}
function twig_test_iterable($value)
{
return $value instanceof Traversable || is_array($value);
}
function twig_include(Twig_Environment $env, $context, $template, $variables = array(), $withContext = true, $ignoreMissing = false, $sandboxed = false)
{
$alreadySandboxed = false;
$sandbox = null;
if ($withContext) {
$variables = array_merge($context, $variables);
}
if ($isSandboxed = $sandboxed && $env->hasExtension('Twig_Extension_Sandbox')) {
$sandbox = $env->getExtension('Twig_Extension_Sandbox');
if (!$alreadySandboxed = $sandbox->isSandboxed()) {
$sandbox->enableSandbox();
}
}
$result = null;
try {
$result = $env->resolveTemplate($template)->render($variables);
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
}
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
return $result;
}
function twig_source(Twig_Environment $env, $name, $ignoreMissing = false)
{
$loader = $env->getLoader();
try {
if (!$loader instanceof Twig_SourceContextLoaderInterface) {
return $loader->getSource($name);
} else {
return $loader->getSourceContext($name)->getCode();
}
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
throw $e;
}
}
}
function twig_constant($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return constant($constant);
}
function twig_constant_is_defined($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return defined($constant);
}
function twig_array_batch($items, $size, $fill = null)
{
if ($items instanceof Traversable) {
$items = iterator_to_array($items, false);
}
$size = ceil($size);
$result = array_chunk($items, $size, true);
if (null !== $fill && !empty($result)) {
$last = count($result) - 1;
if ($fillCount = $size - count($result[$last])) {
$result[$last] = array_merge(
$result[$last],
array_fill(0, $fillCount, $fill)
);
}
}
return $result;
}
}
namespace
{
class Twig_Extension_Escaper extends Twig_Extension
{
protected $defaultStrategy;
public function __construct($defaultStrategy ='html')
{
$this->setDefaultStrategy($defaultStrategy);
}
public function getTokenParsers()
{
return array(new Twig_TokenParser_AutoEscape());
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Escaper());
}
public function getFilters()
{
return array(
new Twig_SimpleFilter('raw','twig_raw_filter', array('is_safe'=> array('all'))),
);
}
public function setDefaultStrategy($defaultStrategy)
{
if (true === $defaultStrategy) {
@trigger_error('Using "true" as the default strategy is deprecated since version 1.21. Use "html" instead.', E_USER_DEPRECATED);
$defaultStrategy ='html';
}
if ('filename'=== $defaultStrategy) {
@trigger_error('Using "filename" as the default strategy is deprecated since version 1.27. Use "name" instead.', E_USER_DEPRECATED);
$defaultStrategy ='name';
}
if ('name'=== $defaultStrategy) {
$defaultStrategy = array('Twig_FileExtensionEscapingStrategy','guess');
}
$this->defaultStrategy = $defaultStrategy;
}
public function getDefaultStrategy($name)
{
if (!is_string($this->defaultStrategy) && false !== $this->defaultStrategy) {
return call_user_func($this->defaultStrategy, $name);
}
return $this->defaultStrategy;
}
public function getName()
{
return'escaper';
}
}
function twig_raw_filter($string)
{
return $string;
}
}
namespace
{
class Twig_Extension_Optimizer extends Twig_Extension
{
protected $optimizers;
public function __construct($optimizers = -1)
{
$this->optimizers = $optimizers;
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Optimizer($this->optimizers));
}
public function getName()
{
return'optimizer';
}
}
}
namespace
{
interface Twig_LoaderInterface
{
public function getSource($name);
public function getCacheKey($name);
public function isFresh($name, $time);
}
}
namespace
{
class Twig_Markup implements Countable
{
protected $content;
protected $charset;
public function __construct($content, $charset)
{
$this->content = (string) $content;
$this->charset = $charset;
}
public function __toString()
{
return $this->content;
}
public function count()
{
return function_exists('mb_get_info') ? mb_strlen($this->content, $this->charset) : strlen($this->content);
}
}
}
namespace
{
interface Twig_TemplateInterface
{
const ANY_CALL ='any';
const ARRAY_CALL ='array';
const METHOD_CALL ='method';
public function render(array $context);
public function display(array $context, array $blocks = array());
public function getEnvironment();
}
}
namespace
{
abstract class Twig_Template implements Twig_TemplateInterface
{
protected static $cache = array();
protected $parent;
protected $parents = array();
protected $env;
protected $blocks = array();
protected $traits = array();
public function __construct(Twig_Environment $env)
{
$this->env = $env;
}
abstract public function getTemplateName();
public function getDebugInfo()
{
return array();
}
public function getSource()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);
return'';
}
public function getSourceContext()
{
return new Twig_Source('', $this->getTemplateName());
}
public function getEnvironment()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 1.20 and will be removed in 2.0.', E_USER_DEPRECATED);
return $this->env;
}
public function getParent(array $context)
{
if (null !== $this->parent) {
return $this->parent;
}
try {
$parent = $this->doGetParent($context);
if (false === $parent) {
return false;
}
if ($parent instanceof self) {
return $this->parents[$parent->getTemplateName()] = $parent;
}
if (!isset($this->parents[$parent])) {
$this->parents[$parent] = $this->loadTemplate($parent);
}
} catch (Twig_Error_Loader $e) {
$e->setTemplateName(null);
$e->guess();
throw $e;
}
return $this->parents[$parent];
}
protected function doGetParent(array $context)
{
return false;
}
public function isTraitable()
{
return true;
}
public function displayParentBlock($name, array $context, array $blocks = array())
{
$name = (string) $name;
if (isset($this->traits[$name])) {
$this->traits[$name][0]->displayBlock($name, $context, $blocks, false);
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, $blocks, false);
} else {
throw new Twig_Error_Runtime(sprintf('The template has no parent and no traits defining the "%s" block.', $name), -1, $this->getTemplateName());
}
}
public function displayBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
$name = (string) $name;
if ($useBlocks && isset($blocks[$name])) {
$template = $blocks[$name][0];
$block = $blocks[$name][1];
} elseif (isset($this->blocks[$name])) {
$template = $this->blocks[$name][0];
$block = $this->blocks[$name][1];
} else {
$template = null;
$block = null;
}
if (null !== $template) {
if (!$template instanceof self) {
throw new LogicException('A block must be a method on a Twig_Template instance.');
}
try {
$template->$block($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getTemplateName()) {
$e->setTemplateName($template->getTemplateName());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $template->getTemplateName(), $e);
}
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, array_merge($this->blocks, $blocks), false);
}
}
public function renderParentBlock($name, array $context, array $blocks = array())
{
ob_start();
$this->displayParentBlock($name, $context, $blocks);
return ob_get_clean();
}
public function renderBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
ob_start();
$this->displayBlock($name, $context, $blocks, $useBlocks);
return ob_get_clean();
}
public function hasBlock($name, array $context = null, array $blocks = array())
{
if (null === $context) {
@trigger_error('The '.__METHOD__.' method is internal and should never be called; calling it directly is deprecated since version 1.28 and won\'t be possible anymore in 2.0.', E_USER_DEPRECATED);
return isset($this->blocks[(string) $name]);
}
if (isset($blocks[$name])) {
return $blocks[$name][0] instanceof self;
}
if (isset($this->blocks[$name])) {
return true;
}
if (false !== $parent = $this->getParent($context)) {
return $parent->hasBlock($name, $context);
}
return false;
}
public function getBlockNames(array $context = null, array $blocks = array())
{
if (null === $context) {
@trigger_error('The '.__METHOD__.' method is internal and should never be called; calling it directly is deprecated since version 1.28 and won\'t be possible anymore in 2.0.', E_USER_DEPRECATED);
return array_keys($this->blocks);
}
$names = array_merge(array_keys($blocks), array_keys($this->blocks));
if (false !== $parent = $this->getParent($context)) {
$names = array_merge($names, $parent->getBlockNames($context));
}
return array_unique($names);
}
protected function loadTemplate($template, $templateName = null, $line = null, $index = null)
{
try {
if (is_array($template)) {
return $this->env->resolveTemplate($template);
}
if ($template instanceof self) {
return $template;
}
if ($template instanceof Twig_TemplateWrapper) {
return $template;
}
return $this->env->loadTemplate($template, $index);
} catch (Twig_Error $e) {
if (!$e->getTemplateName()) {
$e->setTemplateName($templateName ? $templateName : $this->getTemplateName());
}
if ($e->getTemplateLine()) {
throw $e;
}
if (!$line) {
$e->guess();
} else {
$e->setTemplateLine($line);
}
throw $e;
}
}
public function getBlocks()
{
return $this->blocks;
}
public function display(array $context, array $blocks = array())
{
$this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
}
public function render(array $context)
{
$level = ob_get_level();
ob_start();
try {
$this->display($context);
} catch (Exception $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
} catch (Throwable $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
}
return ob_get_clean();
}
protected function displayWithErrorHandling(array $context, array $blocks = array())
{
try {
$this->doDisplay($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getTemplateName()) {
$e->setTemplateName($this->getTemplateName());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $this->getTemplateName(), $e);
}
}
abstract protected function doDisplay(array $context, array $blocks = array());
final protected function getContext($context, $item, $ignoreStrictCheck = false)
{
if (!array_key_exists($item, $context)) {
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Variable "%s" does not exist.', $item), -1, $this->getTemplateName());
}
return $context[$item];
}
protected function getAttribute($object, $item, array $arguments = array(), $type = self::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
{
if (self::METHOD_CALL !== $type) {
$arrayItem = is_bool($item) || is_float($item) ? (int) $item : $item;
if ((is_array($object) && (isset($object[$arrayItem]) || array_key_exists($arrayItem, $object)))
|| ($object instanceof ArrayAccess && isset($object[$arrayItem]))
) {
if ($isDefinedTest) {
return true;
}
return $object[$arrayItem];
}
if (self::ARRAY_CALL === $type || !is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
if ($object instanceof ArrayAccess) {
$message = sprintf('Key "%s" in object with ArrayAccess of class "%s" does not exist.', $arrayItem, get_class($object));
} elseif (is_object($object)) {
$message = sprintf('Impossible to access a key "%s" on an object of class "%s" that does not implement ArrayAccess interface.', $item, get_class($object));
} elseif (is_array($object)) {
if (empty($object)) {
$message = sprintf('Key "%s" does not exist as the array is empty.', $arrayItem);
} else {
$message = sprintf('Key "%s" for array with keys "%s" does not exist.', $arrayItem, implode(', ', array_keys($object)));
}
} elseif (self::ARRAY_CALL === $type) {
if (null === $object) {
$message = sprintf('Impossible to access a key ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access a key ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
} elseif (null === $object) {
$message = sprintf('Impossible to access an attribute ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access an attribute ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $this->getTemplateName());
}
}
if (!is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
if (null === $object) {
$message = sprintf('Impossible to invoke a method ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to invoke a method ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $this->getTemplateName());
}
if (self::METHOD_CALL !== $type && !$object instanceof self) { if (isset($object->$item) || array_key_exists((string) $item, $object)) {
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('Twig_Extension_Sandbox')) {
$this->env->getExtension('Twig_Extension_Sandbox')->checkPropertyAllowed($object, $item);
}
return $object->$item;
}
}
$class = get_class($object);
if (!isset(self::$cache[$class])) {
if ($object instanceof self) {
$ref = new ReflectionClass($class);
$methods = array();
foreach ($ref->getMethods(ReflectionMethod::IS_PUBLIC) as $refMethod) {
if ('getenvironment'!== strtolower($refMethod->name)) {
$methods[] = $refMethod->name;
}
}
} else {
$methods = get_class_methods($object);
}
sort($methods);
$cache = array();
foreach ($methods as $method) {
$cache[$method] = $method;
$cache[$lcName = strtolower($method)] = $method;
if ('g'=== $lcName[0] && 0 === strpos($lcName,'get')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
} elseif ('i'=== $lcName[0] && 0 === strpos($lcName,'is')) {
$name = substr($method, 2);
$lcName = substr($lcName, 2);
} else {
continue;
}
if (!isset($cache[$name])) {
$cache[$name] = $method;
}
if (!isset($cache[$lcName])) {
$cache[$lcName] = $method;
}
}
self::$cache[$class] = $cache;
}
$call = false;
if (isset(self::$cache[$class][$item])) {
$method = self::$cache[$class][$item];
} elseif (isset(self::$cache[$class][$lcItem = strtolower($item)])) {
$method = self::$cache[$class][$lcItem];
} elseif (isset(self::$cache[$class]['__call'])) {
$method = $item;
$call = true;
} else {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Neither the property "%1$s" nor one of the methods "%1$s()", "get%1$s()"/"is%1$s()" or "__call()" exist and have public access in class "%2$s".', $item, $class), -1, $this->getTemplateName());
}
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('Twig_Extension_Sandbox')) {
$this->env->getExtension('Twig_Extension_Sandbox')->checkMethodAllowed($object, $method);
}
try {
if (!$arguments) {
$ret = $object->$method();
} else {
$ret = call_user_func_array(array($object, $method), $arguments);
}
} catch (BadMethodCallException $e) {
if ($call && ($ignoreStrictCheck || !$this->env->isStrictVariables())) {
return;
}
throw $e;
}
if ($object instanceof Twig_TemplateInterface) {
$self = $object->getTemplateName() === $this->getTemplateName();
$message = sprintf('Calling "%s" on template "%s" from template "%s" is deprecated since version 1.28 and won\'t be supported anymore in 2.0.', $method, $object->getTemplateName(), $this->getTemplateName());
if ('renderBlock'=== $method ||'displayBlock'=== $method) {
$message .= sprintf(' Use block("%s"%s) instead).', $arguments[0], $self ?'':', template');
} elseif ('hasBlock'=== $method) {
$message .= sprintf(' Use "block("%s"%s) is defined" instead).', $arguments[0], $self ?'':', template');
} elseif ('render'=== $method ||'display'=== $method) {
$message .= sprintf(' Use include("%s") instead).', $object->getTemplateName());
}
@trigger_error($message, E_USER_DEPRECATED);
return $ret ===''?'': new Twig_Markup($ret, $this->env->getCharset());
}
return $ret;
}
}
}
namespace Monolog\Formatter
{
interface FormatterInterface
{
public function format(array $record);
public function formatBatch(array $records);
}
}
namespace Monolog\Formatter
{
use Exception;
class NormalizerFormatter implements FormatterInterface
{
const SIMPLE_DATE ="Y-m-d H:i:s";
protected $dateFormat;
public function __construct($dateFormat = null)
{
$this->dateFormat = $dateFormat ?: static::SIMPLE_DATE;
if (!function_exists('json_encode')) {
throw new \RuntimeException('PHP\'s json extension is required to use Monolog\'s NormalizerFormatter');
}
}
public function format(array $record)
{
return $this->normalize($record);
}
public function formatBatch(array $records)
{
foreach ($records as $key => $record) {
$records[$key] = $this->format($record);
}
return $records;
}
protected function normalize($data)
{
if (null === $data || is_scalar($data)) {
if (is_float($data)) {
if (is_infinite($data)) {
return ($data > 0 ?'':'-') .'INF';
}
if (is_nan($data)) {
return'NaN';
}
}
return $data;
}
if (is_array($data)) {
$normalized = array();
$count = 1;
foreach ($data as $key => $value) {
if ($count++ >= 1000) {
$normalized['...'] ='Over 1000 items ('.count($data).' total), aborting normalization';
break;
}
$normalized[$key] = $this->normalize($value);
}
return $normalized;
}
if ($data instanceof \DateTime) {
return $data->format($this->dateFormat);
}
if (is_object($data)) {
if ($data instanceof Exception || (PHP_VERSION_ID > 70000 && $data instanceof \Throwable)) {
return $this->normalizeException($data);
}
if (method_exists($data,'__toString') && !$data instanceof \JsonSerializable) {
$value = $data->__toString();
} else {
$value = $this->toJson($data, true);
}
return sprintf("[object] (%s: %s)", get_class($data), $value);
}
if (is_resource($data)) {
return sprintf('[resource] (%s)', get_resource_type($data));
}
return'[unknown('.gettype($data).')]';
}
protected function normalizeException($e)
{
if (!$e instanceof Exception && !$e instanceof \Throwable) {
throw new \InvalidArgumentException('Exception/Throwable expected, got '.gettype($e).' / '.get_class($e));
}
$data = array('class'=> get_class($e),'message'=> $e->getMessage(),'code'=> $e->getCode(),'file'=> $e->getFile().':'.$e->getLine(),
);
if ($e instanceof \SoapFault) {
if (isset($e->faultcode)) {
$data['faultcode'] = $e->faultcode;
}
if (isset($e->faultactor)) {
$data['faultactor'] = $e->faultactor;
}
if (isset($e->detail)) {
$data['detail'] = $e->detail;
}
}
$trace = $e->getTrace();
foreach ($trace as $frame) {
if (isset($frame['file'])) {
$data['trace'][] = $frame['file'].':'.$frame['line'];
} elseif (isset($frame['function']) && $frame['function'] ==='{closure}') {
$data['trace'][] = $frame['function'];
} else {
$data['trace'][] = $this->toJson($this->normalize($frame), true);
}
}
if ($previous = $e->getPrevious()) {
$data['previous'] = $this->normalizeException($previous);
}
return $data;
}
protected function toJson($data, $ignoreErrors = false)
{
if ($ignoreErrors) {
return @$this->jsonEncode($data);
}
$json = $this->jsonEncode($data);
if ($json === false) {
$json = $this->handleJsonError(json_last_error(), $data);
}
return $json;
}
private function jsonEncode($data)
{
if (version_compare(PHP_VERSION,'5.4.0','>=')) {
return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
return json_encode($data);
}
private function handleJsonError($code, $data)
{
if ($code !== JSON_ERROR_UTF8) {
$this->throwEncodeError($code, $data);
}
if (is_string($data)) {
$this->detectAndCleanUtf8($data);
} elseif (is_array($data)) {
array_walk_recursive($data, array($this,'detectAndCleanUtf8'));
} else {
$this->throwEncodeError($code, $data);
}
$json = $this->jsonEncode($data);
if ($json === false) {
$this->throwEncodeError(json_last_error(), $data);
}
return $json;
}
private function throwEncodeError($code, $data)
{
switch ($code) {
case JSON_ERROR_DEPTH:
$msg ='Maximum stack depth exceeded';
break;
case JSON_ERROR_STATE_MISMATCH:
$msg ='Underflow or the modes mismatch';
break;
case JSON_ERROR_CTRL_CHAR:
$msg ='Unexpected control character found';
break;
case JSON_ERROR_UTF8:
$msg ='Malformed UTF-8 characters, possibly incorrectly encoded';
break;
default:
$msg ='Unknown error';
}
throw new \RuntimeException('JSON encoding failed: '.$msg.'. Encoding: '.var_export($data, true));
}
public function detectAndCleanUtf8(&$data)
{
if (is_string($data) && !preg_match('//u', $data)) {
$data = preg_replace_callback('/[\x80-\xFF]+/',
function ($m) { return utf8_encode($m[0]); },
$data
);
$data = str_replace(
array('¤','¦','¨','´','¸','¼','½','¾'),
array('€','Š','š','Ž','ž','Œ','œ','Ÿ'),
$data
);
}
}
}
}
namespace Monolog\Formatter
{
class LineFormatter extends NormalizerFormatter
{
const SIMPLE_FORMAT ="[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n";
protected $format;
protected $allowInlineLineBreaks;
protected $ignoreEmptyContextAndExtra;
protected $includeStacktraces;
public function __construct($format = null, $dateFormat = null, $allowInlineLineBreaks = false, $ignoreEmptyContextAndExtra = false)
{
$this->format = $format ?: static::SIMPLE_FORMAT;
$this->allowInlineLineBreaks = $allowInlineLineBreaks;
$this->ignoreEmptyContextAndExtra = $ignoreEmptyContextAndExtra;
parent::__construct($dateFormat);
}
public function includeStacktraces($include = true)
{
$this->includeStacktraces = $include;
if ($this->includeStacktraces) {
$this->allowInlineLineBreaks = true;
}
}
public function allowInlineLineBreaks($allow = true)
{
$this->allowInlineLineBreaks = $allow;
}
public function ignoreEmptyContextAndExtra($ignore = true)
{
$this->ignoreEmptyContextAndExtra = $ignore;
}
public function format(array $record)
{
$vars = parent::format($record);
$output = $this->format;
foreach ($vars['extra'] as $var => $val) {
if (false !== strpos($output,'%extra.'.$var.'%')) {
$output = str_replace('%extra.'.$var.'%', $this->stringify($val), $output);
unset($vars['extra'][$var]);
}
}
foreach ($vars['context'] as $var => $val) {
if (false !== strpos($output,'%context.'.$var.'%')) {
$output = str_replace('%context.'.$var.'%', $this->stringify($val), $output);
unset($vars['context'][$var]);
}
}
if ($this->ignoreEmptyContextAndExtra) {
if (empty($vars['context'])) {
unset($vars['context']);
$output = str_replace('%context%','', $output);
}
if (empty($vars['extra'])) {
unset($vars['extra']);
$output = str_replace('%extra%','', $output);
}
}
foreach ($vars as $var => $val) {
if (false !== strpos($output,'%'.$var.'%')) {
$output = str_replace('%'.$var.'%', $this->stringify($val), $output);
}
}
if (false !== strpos($output,'%')) {
$output = preg_replace('/%(?:extra|context)\..+?%/','', $output);
}
return $output;
}
public function formatBatch(array $records)
{
$message ='';
foreach ($records as $record) {
$message .= $this->format($record);
}
return $message;
}
public function stringify($value)
{
return $this->replaceNewlines($this->convertToString($value));
}
protected function normalizeException($e)
{
if (!$e instanceof \Exception && !$e instanceof \Throwable) {
throw new \InvalidArgumentException('Exception/Throwable expected, got '.gettype($e).' / '.get_class($e));
}
$previousText ='';
if ($previous = $e->getPrevious()) {
do {
$previousText .=', '.get_class($previous).'(code: '.$previous->getCode().'): '.$previous->getMessage().' at '.$previous->getFile().':'.$previous->getLine();
} while ($previous = $previous->getPrevious());
}
$str ='[object] ('.get_class($e).'(code: '.$e->getCode().'): '.$e->getMessage().' at '.$e->getFile().':'.$e->getLine().$previousText.')';
if ($this->includeStacktraces) {
$str .="\n[stacktrace]\n".$e->getTraceAsString();
}
return $str;
}
protected function convertToString($data)
{
if (null === $data || is_bool($data)) {
return var_export($data, true);
}
if (is_scalar($data)) {
return (string) $data;
}
if (version_compare(PHP_VERSION,'5.4.0','>=')) {
return $this->toJson($data, true);
}
return str_replace('\\/','/', @json_encode($data));
}
protected function replaceNewlines($str)
{
if ($this->allowInlineLineBreaks) {
return $str;
}
return str_replace(array("\r\n","\r","\n"),' ', $str);
}
}
}
namespace Monolog\Handler
{
use Monolog\Formatter\FormatterInterface;
interface HandlerInterface
{
public function isHandling(array $record);
public function handle(array $record);
public function handleBatch(array $records);
public function pushProcessor($callback);
public function popProcessor();
public function setFormatter(FormatterInterface $formatter);
public function getFormatter();
}
}
namespace Monolog\Handler
{
use Monolog\Logger;
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LineFormatter;
abstract class AbstractHandler implements HandlerInterface
{
protected $level = Logger::DEBUG;
protected $bubble = true;
protected $formatter;
protected $processors = array();
public function __construct($level = Logger::DEBUG, $bubble = true)
{
$this->setLevel($level);
$this->bubble = $bubble;
}
public function isHandling(array $record)
{
return $record['level'] >= $this->level;
}
public function handleBatch(array $records)
{
foreach ($records as $record) {
$this->handle($record);
}
}
public function close()
{
}
public function pushProcessor($callback)
{
if (!is_callable($callback)) {
throw new \InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export($callback, true).' given');
}
array_unshift($this->processors, $callback);
return $this;
}
public function popProcessor()
{
if (!$this->processors) {
throw new \LogicException('You tried to pop from an empty processor stack.');
}
return array_shift($this->processors);
}
public function setFormatter(FormatterInterface $formatter)
{
$this->formatter = $formatter;
return $this;
}
public function getFormatter()
{
if (!$this->formatter) {
$this->formatter = $this->getDefaultFormatter();
}
return $this->formatter;
}
public function setLevel($level)
{
$this->level = Logger::toMonologLevel($level);
return $this;
}
public function getLevel()
{
return $this->level;
}
public function setBubble($bubble)
{
$this->bubble = $bubble;
return $this;
}
public function getBubble()
{
return $this->bubble;
}
public function __destruct()
{
try {
$this->close();
} catch (\Exception $e) {
} catch (\Throwable $e) {
}
}
protected function getDefaultFormatter()
{
return new LineFormatter();
}
}
}
namespace Monolog\Handler
{
abstract class AbstractProcessingHandler extends AbstractHandler
{
public function handle(array $record)
{
if (!$this->isHandling($record)) {
return false;
}
$record = $this->processRecord($record);
$record['formatted'] = $this->getFormatter()->format($record);
$this->write($record);
return false === $this->bubble;
}
abstract protected function write(array $record);
protected function processRecord(array $record)
{
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
return $record;
}
}
}
namespace Monolog\Handler
{
use Monolog\Logger;
class StreamHandler extends AbstractProcessingHandler
{
protected $stream;
protected $url;
private $errorMessage;
protected $filePermission;
protected $useLocking;
private $dirCreated;
public function __construct($stream, $level = Logger::DEBUG, $bubble = true, $filePermission = null, $useLocking = false)
{
parent::__construct($level, $bubble);
if (is_resource($stream)) {
$this->stream = $stream;
} elseif (is_string($stream)) {
$this->url = $stream;
} else {
throw new \InvalidArgumentException('A stream must either be a resource or a string.');
}
$this->filePermission = $filePermission;
$this->useLocking = $useLocking;
}
public function close()
{
if ($this->url && is_resource($this->stream)) {
fclose($this->stream);
}
$this->stream = null;
}
public function getStream()
{
return $this->stream;
}
public function getUrl()
{
return $this->url;
}
protected function write(array $record)
{
if (!is_resource($this->stream)) {
if (null === $this->url ||''=== $this->url) {
throw new \LogicException('Missing stream url, the stream can not be opened. This may be caused by a premature call to close().');
}
$this->createDir();
$this->errorMessage = null;
set_error_handler(array($this,'customErrorHandler'));
$this->stream = fopen($this->url,'a');
if ($this->filePermission !== null) {
@chmod($this->url, $this->filePermission);
}
restore_error_handler();
if (!is_resource($this->stream)) {
$this->stream = null;
throw new \UnexpectedValueException(sprintf('The stream or file "%s" could not be opened: '.$this->errorMessage, $this->url));
}
}
if ($this->useLocking) {
flock($this->stream, LOCK_EX);
}
$this->streamWrite($this->stream, $record);
if ($this->useLocking) {
flock($this->stream, LOCK_UN);
}
}
protected function streamWrite($stream, array $record)
{
fwrite($stream, (string) $record['formatted']);
}
private function customErrorHandler($code, $msg)
{
$this->errorMessage = preg_replace('{^(fopen|mkdir)\(.*?\): }','', $msg);
}
private function getDirFromStream($stream)
{
$pos = strpos($stream,'://');
if ($pos === false) {
return dirname($stream);
}
if ('file://'=== substr($stream, 0, 7)) {
return dirname(substr($stream, 7));
}
return;
}
private function createDir()
{
if ($this->dirCreated) {
return;
}
$dir = $this->getDirFromStream($this->url);
if (null !== $dir && !is_dir($dir)) {
$this->errorMessage = null;
set_error_handler(array($this,'customErrorHandler'));
$status = mkdir($dir, 0777, true);
restore_error_handler();
if (false === $status) {
throw new \UnexpectedValueException(sprintf('There is no existing directory at "%s" and its not buildable: '.$this->errorMessage, $dir));
}
}
$this->dirCreated = true;
}
}
}
namespace Monolog\Handler
{
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossed\ActivationStrategyInterface;
use Monolog\Logger;
class FingersCrossedHandler extends AbstractHandler
{
protected $handler;
protected $activationStrategy;
protected $buffering = true;
protected $bufferSize;
protected $buffer = array();
protected $stopBuffering;
protected $passthruLevel;
public function __construct($handler, $activationStrategy = null, $bufferSize = 0, $bubble = true, $stopBuffering = true, $passthruLevel = null)
{
if (null === $activationStrategy) {
$activationStrategy = new ErrorLevelActivationStrategy(Logger::WARNING);
}
if (!$activationStrategy instanceof ActivationStrategyInterface) {
$activationStrategy = new ErrorLevelActivationStrategy($activationStrategy);
}
$this->handler = $handler;
$this->activationStrategy = $activationStrategy;
$this->bufferSize = $bufferSize;
$this->bubble = $bubble;
$this->stopBuffering = $stopBuffering;
if ($passthruLevel !== null) {
$this->passthruLevel = Logger::toMonologLevel($passthruLevel);
}
if (!$this->handler instanceof HandlerInterface && !is_callable($this->handler)) {
throw new \RuntimeException("The given handler (".json_encode($this->handler).") is not a callable nor a Monolog\Handler\HandlerInterface object");
}
}
public function isHandling(array $record)
{
return true;
}
public function activate()
{
if ($this->stopBuffering) {
$this->buffering = false;
}
if (!$this->handler instanceof HandlerInterface) {
$record = end($this->buffer) ?: null;
$this->handler = call_user_func($this->handler, $record, $this);
if (!$this->handler instanceof HandlerInterface) {
throw new \RuntimeException("The factory callable should return a HandlerInterface");
}
}
$this->handler->handleBatch($this->buffer);
$this->buffer = array();
}
public function handle(array $record)
{
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
if ($this->buffering) {
$this->buffer[] = $record;
if ($this->bufferSize > 0 && count($this->buffer) > $this->bufferSize) {
array_shift($this->buffer);
}
if ($this->activationStrategy->isHandlerActivated($record)) {
$this->activate();
}
} else {
$this->handler->handle($record);
}
return false === $this->bubble;
}
public function close()
{
if (null !== $this->passthruLevel) {
$level = $this->passthruLevel;
$this->buffer = array_filter($this->buffer, function ($record) use ($level) {
return $record['level'] >= $level;
});
if (count($this->buffer) > 0) {
$this->handler->handleBatch($this->buffer);
$this->buffer = array();
}
}
}
public function reset()
{
$this->buffering = true;
}
public function clear()
{
$this->buffer = array();
$this->reset();
}
}
}
namespace Monolog\Handler
{
use Monolog\Logger;
class FilterHandler extends AbstractHandler
{
protected $handler;
protected $acceptedLevels;
protected $bubble;
public function __construct($handler, $minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY, $bubble = true)
{
$this->handler = $handler;
$this->bubble = $bubble;
$this->setAcceptedLevels($minLevelOrList, $maxLevel);
if (!$this->handler instanceof HandlerInterface && !is_callable($this->handler)) {
throw new \RuntimeException("The given handler (".json_encode($this->handler).") is not a callable nor a Monolog\Handler\HandlerInterface object");
}
}
public function getAcceptedLevels()
{
return array_flip($this->acceptedLevels);
}
public function setAcceptedLevels($minLevelOrList = Logger::DEBUG, $maxLevel = Logger::EMERGENCY)
{
if (is_array($minLevelOrList)) {
$acceptedLevels = array_map('Monolog\Logger::toMonologLevel', $minLevelOrList);
} else {
$minLevelOrList = Logger::toMonologLevel($minLevelOrList);
$maxLevel = Logger::toMonologLevel($maxLevel);
$acceptedLevels = array_values(array_filter(Logger::getLevels(), function ($level) use ($minLevelOrList, $maxLevel) {
return $level >= $minLevelOrList && $level <= $maxLevel;
}));
}
$this->acceptedLevels = array_flip($acceptedLevels);
}
public function isHandling(array $record)
{
return isset($this->acceptedLevels[$record['level']]);
}
public function handle(array $record)
{
if (!$this->isHandling($record)) {
return false;
}
if (!$this->handler instanceof HandlerInterface) {
$this->handler = call_user_func($this->handler, $record, $this);
if (!$this->handler instanceof HandlerInterface) {
throw new \RuntimeException("The factory callable should return a HandlerInterface");
}
}
if ($this->processors) {
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
}
$this->handler->handle($record);
return false === $this->bubble;
}
public function handleBatch(array $records)
{
$filtered = array();
foreach ($records as $record) {
if ($this->isHandling($record)) {
$filtered[] = $record;
}
}
$this->handler->handleBatch($filtered);
}
}
}
namespace Monolog\Handler
{
class TestHandler extends AbstractProcessingHandler
{
protected $records = array();
protected $recordsByLevel = array();
public function getRecords()
{
return $this->records;
}
public function clear()
{
$this->records = array();
$this->recordsByLevel = array();
}
public function hasRecords($level)
{
return isset($this->recordsByLevel[$level]);
}
public function hasRecord($record, $level)
{
if (is_array($record)) {
$record = $record['message'];
}
return $this->hasRecordThatPasses(function ($rec) use ($record) {
return $rec['message'] === $record;
}, $level);
}
public function hasRecordThatContains($message, $level)
{
return $this->hasRecordThatPasses(function ($rec) use ($message) {
return strpos($rec['message'], $message) !== false;
}, $level);
}
public function hasRecordThatMatches($regex, $level)
{
return $this->hasRecordThatPasses(function ($rec) use ($regex) {
return preg_match($regex, $rec['message']) > 0;
}, $level);
}
public function hasRecordThatPasses($predicate, $level)
{
if (!is_callable($predicate)) {
throw new \InvalidArgumentException("Expected a callable for hasRecordThatSucceeds");
}
if (!isset($this->recordsByLevel[$level])) {
return false;
}
foreach ($this->recordsByLevel[$level] as $i => $rec) {
if (call_user_func($predicate, $rec, $i)) {
return true;
}
}
return false;
}
protected function write(array $record)
{
$this->recordsByLevel[$record['level']][] = $record;
$this->records[] = $record;
}
public function __call($method, $args)
{
if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', $method, $matches) > 0) {
$genericMethod = $matches[1] . ('Records'!== $matches[3] ?'Record':'') . $matches[3];
$level = constant('Monolog\Logger::'. strtoupper($matches[2]));
if (method_exists($this, $genericMethod)) {
$args[] = $level;
return call_user_func_array(array($this, $genericMethod), $args);
}
}
throw new \BadMethodCallException('Call to undefined method '. get_class($this) .'::'. $method .'()');
}
}
}
namespace Monolog
{
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Psr\Log\InvalidArgumentException;
class Logger implements LoggerInterface
{
const DEBUG = 100;
const INFO = 200;
const NOTICE = 250;
const WARNING = 300;
const ERROR = 400;
const CRITICAL = 500;
const ALERT = 550;
const EMERGENCY = 600;
const API = 1;
protected static $levels = array(
self::DEBUG =>'DEBUG',
self::INFO =>'INFO',
self::NOTICE =>'NOTICE',
self::WARNING =>'WARNING',
self::ERROR =>'ERROR',
self::CRITICAL =>'CRITICAL',
self::ALERT =>'ALERT',
self::EMERGENCY =>'EMERGENCY',
);
protected static $timezone;
protected $name;
protected $handlers;
protected $processors;
protected $microsecondTimestamps = true;
public function __construct($name, array $handlers = array(), array $processors = array())
{
$this->name = $name;
$this->handlers = $handlers;
$this->processors = $processors;
}
public function getName()
{
return $this->name;
}
public function withName($name)
{
$new = clone $this;
$new->name = $name;
return $new;
}
public function pushHandler(HandlerInterface $handler)
{
array_unshift($this->handlers, $handler);
return $this;
}
public function popHandler()
{
if (!$this->handlers) {
throw new \LogicException('You tried to pop from an empty handler stack.');
}
return array_shift($this->handlers);
}
public function setHandlers(array $handlers)
{
$this->handlers = array();
foreach (array_reverse($handlers) as $handler) {
$this->pushHandler($handler);
}
return $this;
}
public function getHandlers()
{
return $this->handlers;
}
public function pushProcessor($callback)
{
if (!is_callable($callback)) {
throw new \InvalidArgumentException('Processors must be valid callables (callback or object with an __invoke method), '.var_export($callback, true).' given');
}
array_unshift($this->processors, $callback);
return $this;
}
public function popProcessor()
{
if (!$this->processors) {
throw new \LogicException('You tried to pop from an empty processor stack.');
}
return array_shift($this->processors);
}
public function getProcessors()
{
return $this->processors;
}
public function useMicrosecondTimestamps($micro)
{
$this->microsecondTimestamps = (bool) $micro;
}
public function addRecord($level, $message, array $context = array())
{
if (!$this->handlers) {
$this->pushHandler(new StreamHandler('php://stderr', static::DEBUG));
}
$levelName = static::getLevelName($level);
$handlerKey = null;
reset($this->handlers);
while ($handler = current($this->handlers)) {
if ($handler->isHandling(array('level'=> $level))) {
$handlerKey = key($this->handlers);
break;
}
next($this->handlers);
}
if (null === $handlerKey) {
return false;
}
if (!static::$timezone) {
static::$timezone = new \DateTimeZone(date_default_timezone_get() ?:'UTC');
}
if ($this->microsecondTimestamps && PHP_VERSION_ID < 70100) {
$ts = \DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)), static::$timezone);
} else {
$ts = new \DateTime(null, static::$timezone);
}
$ts->setTimezone(static::$timezone);
$record = array('message'=> (string) $message,'context'=> $context,'level'=> $level,'level_name'=> $levelName,'channel'=> $this->name,'datetime'=> $ts,'extra'=> array(),
);
foreach ($this->processors as $processor) {
$record = call_user_func($processor, $record);
}
while ($handler = current($this->handlers)) {
if (true === $handler->handle($record)) {
break;
}
next($this->handlers);
}
return true;
}
public function addDebug($message, array $context = array())
{
return $this->addRecord(static::DEBUG, $message, $context);
}
public function addInfo($message, array $context = array())
{
return $this->addRecord(static::INFO, $message, $context);
}
public function addNotice($message, array $context = array())
{
return $this->addRecord(static::NOTICE, $message, $context);
}
public function addWarning($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function addError($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function addCritical($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function addAlert($message, array $context = array())
{
return $this->addRecord(static::ALERT, $message, $context);
}
public function addEmergency($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public static function getLevels()
{
return array_flip(static::$levels);
}
public static function getLevelName($level)
{
if (!isset(static::$levels[$level])) {
throw new InvalidArgumentException('Level "'.$level.'" is not defined, use one of: '.implode(', ', array_keys(static::$levels)));
}
return static::$levels[$level];
}
public static function toMonologLevel($level)
{
if (is_string($level) && defined(__CLASS__.'::'.strtoupper($level))) {
return constant(__CLASS__.'::'.strtoupper($level));
}
return $level;
}
public function isHandling($level)
{
$record = array('level'=> $level,
);
foreach ($this->handlers as $handler) {
if ($handler->isHandling($record)) {
return true;
}
}
return false;
}
public function log($level, $message, array $context = array())
{
$level = static::toMonologLevel($level);
return $this->addRecord($level, $message, $context);
}
public function debug($message, array $context = array())
{
return $this->addRecord(static::DEBUG, $message, $context);
}
public function info($message, array $context = array())
{
return $this->addRecord(static::INFO, $message, $context);
}
public function notice($message, array $context = array())
{
return $this->addRecord(static::NOTICE, $message, $context);
}
public function warn($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function warning($message, array $context = array())
{
return $this->addRecord(static::WARNING, $message, $context);
}
public function err($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function error($message, array $context = array())
{
return $this->addRecord(static::ERROR, $message, $context);
}
public function crit($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function critical($message, array $context = array())
{
return $this->addRecord(static::CRITICAL, $message, $context);
}
public function alert($message, array $context = array())
{
return $this->addRecord(static::ALERT, $message, $context);
}
public function emerg($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public function emergency($message, array $context = array())
{
return $this->addRecord(static::EMERGENCY, $message, $context);
}
public static function setTimezone(\DateTimeZone $tz)
{
self::$timezone = $tz;
}
}
}
namespace Symfony\Component\HttpKernel\Log
{
interface DebugLoggerInterface
{
public function getLogs();
public function countErrors();
}
}
namespace Symfony\Bridge\Monolog
{
use Monolog\Logger as BaseLogger;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
class Logger extends BaseLogger implements DebugLoggerInterface
{
public function getLogs()
{
if ($logger = $this->getDebugLogger()) {
return $logger->getLogs();
}
return array();
}
public function countErrors()
{
if ($logger = $this->getDebugLogger()) {
return $logger->countErrors();
}
return 0;
}
private function getDebugLogger()
{
foreach ($this->processors as $processor) {
if ($processor instanceof DebugLoggerInterface) {
return $processor;
}
}
foreach ($this->handlers as $handler) {
if ($handler instanceof DebugLoggerInterface) {
return $handler;
}
}
}
}
}
namespace Monolog\Handler\FingersCrossed
{
interface ActivationStrategyInterface
{
public function isHandlerActivated(array $record);
}
}
namespace Monolog\Handler\FingersCrossed
{
use Monolog\Logger;
class ErrorLevelActivationStrategy implements ActivationStrategyInterface
{
private $actionLevel;
public function __construct($actionLevel)
{
$this->actionLevel = Logger::toMonologLevel($actionLevel);
}
public function isHandlerActivated(array $record)
{
return $record['level'] >= $this->actionLevel;
}
}
}
namespace Doctrine\Common\Lexer
{
abstract class AbstractLexer
{
private $input;
private $tokens = array();
private $position = 0;
private $peek = 0;
public $lookahead;
public $token;
public function setInput($input)
{
$this->input = $input;
$this->tokens = array();
$this->reset();
$this->scan($input);
}
public function reset()
{
$this->lookahead = null;
$this->token = null;
$this->peek = 0;
$this->position = 0;
}
public function resetPeek()
{
$this->peek = 0;
}
public function resetPosition($position = 0)
{
$this->position = $position;
}
public function getInputUntilPosition($position)
{
return substr($this->input, 0, $position);
}
public function isNextToken($token)
{
return null !== $this->lookahead && $this->lookahead['type'] === $token;
}
public function isNextTokenAny(array $tokens)
{
return null !== $this->lookahead && in_array($this->lookahead['type'], $tokens, true);
}
public function moveNext()
{
$this->peek = 0;
$this->token = $this->lookahead;
$this->lookahead = (isset($this->tokens[$this->position]))
? $this->tokens[$this->position++] : null;
return $this->lookahead !== null;
}
public function skipUntil($type)
{
while ($this->lookahead !== null && $this->lookahead['type'] !== $type) {
$this->moveNext();
}
}
public function isA($value, $token)
{
return $this->getType($value) === $token;
}
public function peek()
{
if (isset($this->tokens[$this->position + $this->peek])) {
return $this->tokens[$this->position + $this->peek++];
} else {
return null;
}
}
public function glimpse()
{
$peek = $this->peek();
$this->peek = 0;
return $peek;
}
protected function scan($input)
{
static $regex;
if ( ! isset($regex)) {
$regex = sprintf('/(%s)|%s/%s',
implode(')|(', $this->getCatchablePatterns()),
implode('|', $this->getNonCatchablePatterns()),
$this->getModifiers()
);
}
$flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE;
$matches = preg_split($regex, $input, -1, $flags);
foreach ($matches as $match) {
$type = $this->getType($match[0]);
$this->tokens[] = array('value'=> $match[0],'type'=> $type,'position'=> $match[1],
);
}
}
public function getLiteral($token)
{
$className = get_class($this);
$reflClass = new \ReflectionClass($className);
$constants = $reflClass->getConstants();
foreach ($constants as $name => $value) {
if ($value === $token) {
return $className .'::'. $name;
}
}
return $token;
}
protected function getModifiers()
{
return'i';
}
abstract protected function getCatchablePatterns();
abstract protected function getNonCatchablePatterns();
abstract protected function getType(&$value);
}
}
namespace Doctrine\Common\Annotations
{
use Doctrine\Common\Lexer\AbstractLexer;
final class DocLexer extends AbstractLexer
{
const T_NONE = 1;
const T_INTEGER = 2;
const T_STRING = 3;
const T_FLOAT = 4;
const T_IDENTIFIER = 100;
const T_AT = 101;
const T_CLOSE_CURLY_BRACES = 102;
const T_CLOSE_PARENTHESIS = 103;
const T_COMMA = 104;
const T_EQUALS = 105;
const T_FALSE = 106;
const T_NAMESPACE_SEPARATOR = 107;
const T_OPEN_CURLY_BRACES = 108;
const T_OPEN_PARENTHESIS = 109;
const T_TRUE = 110;
const T_NULL = 111;
const T_COLON = 112;
protected $noCase = array('@'=> self::T_AT,','=> self::T_COMMA,'('=> self::T_OPEN_PARENTHESIS,')'=> self::T_CLOSE_PARENTHESIS,'{'=> self::T_OPEN_CURLY_BRACES,'}'=> self::T_CLOSE_CURLY_BRACES,'='=> self::T_EQUALS,':'=> self::T_COLON,'\\'=> self::T_NAMESPACE_SEPARATOR
);
protected $withCase = array('true'=> self::T_TRUE,'false'=> self::T_FALSE,'null'=> self::T_NULL
);
protected function getCatchablePatterns()
{
return array('[a-z_\\\][a-z0-9_\:\\\]*[a-z_][a-z0-9_]*','(?:[+-]?[0-9]+(?:[\.][0-9]+)*)(?:[eE][+-]?[0-9]+)?','"(?:""|[^"])*+"',
);
}
protected function getNonCatchablePatterns()
{
return array('\s+','\*+','(.)');
}
protected function getType(&$value)
{
$type = self::T_NONE;
if ($value[0] ==='"') {
$value = str_replace('""','"', substr($value, 1, strlen($value) - 2));
return self::T_STRING;
}
if (isset($this->noCase[$value])) {
return $this->noCase[$value];
}
if ($value[0] ==='_'|| $value[0] ==='\\'|| ctype_alpha($value[0])) {
return self::T_IDENTIFIER;
}
$lowerValue = strtolower($value);
if (isset($this->withCase[$lowerValue])) {
return $this->withCase[$lowerValue];
}
if (is_numeric($value)) {
return (strpos($value,'.') !== false || stripos($value,'e') !== false)
? self::T_FLOAT : self::T_INTEGER;
}
return $type;
}
}
}
namespace Doctrine\Common\Annotations
{
interface Reader
{
function getClassAnnotations(\ReflectionClass $class);
function getClassAnnotation(\ReflectionClass $class, $annotationName);
function getMethodAnnotations(\ReflectionMethod $method);
function getMethodAnnotation(\ReflectionMethod $method, $annotationName);
function getPropertyAnnotations(\ReflectionProperty $property);
function getPropertyAnnotation(\ReflectionProperty $property, $annotationName);
}
}
namespace Doctrine\Common\Annotations
{
class FileCacheReader implements Reader
{
private $reader;
private $dir;
private $debug;
private $loadedAnnotations = array();
private $classNameHashes = array();
private $umask;
public function __construct(Reader $reader, $cacheDir, $debug = false, $umask = 0002)
{
if ( ! is_int($umask)) {
throw new \InvalidArgumentException(sprintf('The parameter umask must be an integer, was: %s',
gettype($umask)
));
}
$this->reader = $reader;
$this->umask = $umask;
if (!is_dir($cacheDir) && !@mkdir($cacheDir, 0777 & (~$this->umask), true)) {
throw new \InvalidArgumentException(sprintf('The directory "%s" does not exist and could not be created.', $cacheDir));
}
$this->dir = rtrim($cacheDir,'\\/');
$this->debug = $debug;
}
public function getClassAnnotations(\ReflectionClass $class)
{
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name];
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getClassAnnotations($class);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getClassAnnotations($class);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
public function getPropertyAnnotations(\ReflectionProperty $property)
{
$class = $property->getDeclaringClass();
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name].'$'.$property->getName();
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getPropertyAnnotations($property);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getPropertyAnnotations($property);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
public function getMethodAnnotations(\ReflectionMethod $method)
{
$class = $method->getDeclaringClass();
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name].'#'.$method->getName();
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getMethodAnnotations($method);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getMethodAnnotations($method);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
private function saveCacheFile($path, $data)
{
if (!is_writable($this->dir)) {
throw new \InvalidArgumentException(sprintf('The directory "%s" is not writable. Both, the webserver and the console user need access. You can manage access rights for multiple users with "chmod +a". If your system does not support this, check out the acl package.', $this->dir));
}
$tempfile = tempnam($this->dir, uniqid('', true));
if (false === $tempfile) {
throw new \RuntimeException(sprintf('Unable to create tempfile in directory: %s', $this->dir));
}
$written = file_put_contents($tempfile,'<?php return unserialize('.var_export(serialize($data), true).');');
if (false === $written) {
throw new \RuntimeException(sprintf('Unable to write cached file to: %s', $tempfile));
}
@chmod($tempfile, 0666 & (~$this->umask));
if (false === rename($tempfile, $path)) {
@unlink($tempfile);
throw new \RuntimeException(sprintf('Unable to rename %s to %s', $tempfile, $path));
}
}
public function getClassAnnotation(\ReflectionClass $class, $annotationName)
{
$annotations = $this->getClassAnnotations($class);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function getMethodAnnotation(\ReflectionMethod $method, $annotationName)
{
$annotations = $this->getMethodAnnotations($method);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function getPropertyAnnotation(\ReflectionProperty $property, $annotationName)
{
$annotations = $this->getPropertyAnnotations($property);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function clearLoadedAnnotations()
{
$this->loadedAnnotations = array();
}
}
}
namespace Doctrine\Common\Annotations
{
use SplFileObject;
final class PhpParser
{
public function parseClass(\ReflectionClass $class)
{
if (method_exists($class,'getUseStatements')) {
return $class->getUseStatements();
}
if (false === $filename = $class->getFilename()) {
return array();
}
$content = $this->getFileContent($filename, $class->getStartLine());
if (null === $content) {
return array();
}
$namespace = preg_quote($class->getNamespaceName());
$content = preg_replace('/^.*?(\bnamespace\s+'. $namespace .'\s*[;{].*)$/s','\\1', $content);
$tokenizer = new TokenParser('<?php '. $content);
$statements = $tokenizer->parseUseStatements($class->getNamespaceName());
return $statements;
}
private function getFileContent($filename, $lineNumber)
{
if ( ! is_file($filename)) {
return null;
}
$content ='';
$lineCnt = 0;
$file = new SplFileObject($filename);
while (!$file->eof()) {
if ($lineCnt++ == $lineNumber) {
break;
}
$content .= $file->fgets();
}
return $content;
}
}
}
namespace Doctrine\Common
{
use Doctrine\Common\Lexer\AbstractLexer;
abstract class Lexer extends AbstractLexer
{
}
}
namespace Doctrine\Common\Persistence
{
interface ConnectionRegistry
{
public function getDefaultConnectionName();
public function getConnection($name = null);
public function getConnections();
public function getConnectionNames();
}
}
namespace Doctrine\Common\Persistence
{
interface Proxy
{
const MARKER ='__CG__';
const MARKER_LENGTH = 6;
public function __load();
public function __isInitialized();
}
}
namespace Doctrine\Common\Util
{
use Doctrine\Common\Persistence\Proxy;
class ClassUtils
{
public static function getRealClass($class)
{
if (false === $pos = strrpos($class,'\\'.Proxy::MARKER.'\\')) {
return $class;
}
return substr($class, $pos + Proxy::MARKER_LENGTH + 2);
}
public static function getClass($object)
{
return self::getRealClass(get_class($object));
}
public static function getParentClass($className)
{
return get_parent_class( self::getRealClass( $className ) );
}
public static function newReflectionClass($class)
{
return new \ReflectionClass( self::getRealClass( $class ) );
}
public static function newReflectionObject($object)
{
return self::newReflectionClass( self::getClass( $object ) );
}
public static function generateProxyClassName($className, $proxyNamespace)
{
return rtrim($proxyNamespace,'\\') .'\\'.Proxy::MARKER.'\\'. ltrim($className,'\\');
}
}
}
namespace Doctrine\Common\Persistence
{
interface ManagerRegistry extends ConnectionRegistry
{
public function getDefaultManagerName();
public function getManager($name = null);
public function getManagers();
public function resetManager($name = null);
public function getAliasNamespace($alias);
public function getManagerNames();
public function getRepository($persistentObject, $persistentManagerName = null);
public function getManagerForClass($class);
}
}
namespace Symfony\Bridge\Doctrine
{
use Doctrine\Common\Persistence\ManagerRegistry as ManagerRegistryInterface;
use Doctrine\ORM\EntityManager;
interface RegistryInterface extends ManagerRegistryInterface
{
public function getDefaultEntityManagerName();
public function getEntityManager($name = null);
public function getEntityManagers();
public function resetEntityManager($name = null);
public function getEntityNamespace($alias);
public function getEntityManagerNames();
public function getEntityManagerForClass($class);
}
}
namespace Doctrine\Common\Persistence
{
abstract class AbstractManagerRegistry implements ManagerRegistry
{
private $name;
private $connections;
private $managers;
private $defaultConnection;
private $defaultManager;
private $proxyInterfaceName;
public function __construct($name, array $connections, array $managers, $defaultConnection, $defaultManager, $proxyInterfaceName)
{
$this->name = $name;
$this->connections = $connections;
$this->managers = $managers;
$this->defaultConnection = $defaultConnection;
$this->defaultManager = $defaultManager;
$this->proxyInterfaceName = $proxyInterfaceName;
}
abstract protected function getService($name);
abstract protected function resetService($name);
public function getName()
{
return $this->name;
}
public function getConnection($name = null)
{
if (null === $name) {
$name = $this->defaultConnection;
}
if (!isset($this->connections[$name])) {
throw new \InvalidArgumentException(sprintf('Doctrine %s Connection named "%s" does not exist.', $this->name, $name));
}
return $this->getService($this->connections[$name]);
}
public function getConnectionNames()
{
return $this->connections;
}
public function getConnections()
{
$connections = [];
foreach ($this->connections as $name => $id) {
$connections[$name] = $this->getService($id);
}
return $connections;
}
public function getDefaultConnectionName()
{
return $this->defaultConnection;
}
public function getDefaultManagerName()
{
return $this->defaultManager;
}
public function getManager($name = null)
{
if (null === $name) {
$name = $this->defaultManager;
}
if (!isset($this->managers[$name])) {
throw new \InvalidArgumentException(sprintf('Doctrine %s Manager named "%s" does not exist.', $this->name, $name));
}
return $this->getService($this->managers[$name]);
}
public function getManagerForClass($class)
{
if (strpos($class,':') !== false) {
list($namespaceAlias, $simpleClassName) = explode(':', $class, 2);
$class = $this->getAliasNamespace($namespaceAlias) .'\\'. $simpleClassName;
}
$proxyClass = new \ReflectionClass($class);
if ($proxyClass->implementsInterface($this->proxyInterfaceName)) {
if (! $parentClass = $proxyClass->getParentClass()) {
return null;
}
$class = $parentClass->getName();
}
foreach ($this->managers as $id) {
$manager = $this->getService($id);
if (!$manager->getMetadataFactory()->isTransient($class)) {
return $manager;
}
}
}
public function getManagerNames()
{
return $this->managers;
}
public function getManagers()
{
$dms = [];
foreach ($this->managers as $name => $id) {
$dms[$name] = $this->getService($id);
}
return $dms;
}
public function getRepository($persistentObjectName, $persistentManagerName = null)
{
return $this->getManager($persistentManagerName)->getRepository($persistentObjectName);
}
public function resetManager($name = null)
{
if (null === $name) {
$name = $this->defaultManager;
}
if (!isset($this->managers[$name])) {
throw new \InvalidArgumentException(sprintf('Doctrine %s Manager named "%s" does not exist.', $this->name, $name));
}
$this->resetService($this->managers[$name]);
return $this->getManager($name);
}
}
}
namespace Symfony\Bridge\Doctrine
{
use ProxyManager\Proxy\LazyLoadingInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Doctrine\Common\Persistence\AbstractManagerRegistry;
abstract class ManagerRegistry extends AbstractManagerRegistry implements ContainerAwareInterface
{
use ContainerAwareTrait;
protected function getService($name)
{
return $this->container->get($name);
}
protected function resetService($name)
{
if (!$this->container->initialized($name)) {
return;
}
$manager = $this->container->get($name);
if (!$manager instanceof LazyLoadingInterface) {
@trigger_error(sprintf('Resetting a non-lazy manager service is deprecated since Symfony 3.2 and will throw an exception in version 4.0. Set the "%s" service as lazy and require "symfony/proxy-manager-bridge" in your composer.json file instead.', $name));
$this->container->set($name, null);
return;
}
$manager->setProxyInitializer(\Closure::bind(
function (&$wrappedInstance, LazyLoadingInterface $manager) use ($name) {
if (isset($this->aliases[$name = strtolower($name)])) {
$name = $this->aliases[$name];
}
$method = !isset($this->methodMap[$name]) ?'get'.strtr($name, $this->underscoreMap).'Service': $this->methodMap[$name];
$wrappedInstance = $this->{$method}(false);
$manager->setProxyInitializer(null);
return true;
},
$this->container,
Container::class
));
}
}
}
namespace Doctrine\Bundle\DoctrineBundle
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\EntityManager;
class Registry extends ManagerRegistry implements RegistryInterface
{
public function __construct(ContainerInterface $container, array $connections, array $entityManagers, $defaultConnection, $defaultEntityManager)
{
$this->setContainer($container);
parent::__construct('ORM', $connections, $entityManagers, $defaultConnection, $defaultEntityManager,'Doctrine\ORM\Proxy\Proxy');
}
public function getDefaultEntityManagerName()
{
trigger_error('getDefaultEntityManagerName is deprecated since Symfony 2.1. Use getDefaultManagerName instead', E_USER_DEPRECATED);
return $this->getDefaultManagerName();
}
public function getEntityManager($name = null)
{
trigger_error('getEntityManager is deprecated since Symfony 2.1. Use getManager instead', E_USER_DEPRECATED);
return $this->getManager($name);
}
public function getEntityManagers()
{
trigger_error('getEntityManagers is deprecated since Symfony 2.1. Use getManagers instead', E_USER_DEPRECATED);
return $this->getManagers();
}
public function resetEntityManager($name = null)
{
trigger_error('resetEntityManager is deprecated since Symfony 2.1. Use resetManager instead', E_USER_DEPRECATED);
$this->resetManager($name);
}
public function getEntityNamespace($alias)
{
trigger_error('getEntityNamespace is deprecated since Symfony 2.1. Use getAliasNamespace instead', E_USER_DEPRECATED);
return $this->getAliasNamespace($alias);
}
public function getAliasNamespace($alias)
{
foreach (array_keys($this->getManagers()) as $name) {
try {
return $this->getManager($name)->getConfiguration()->getEntityNamespace($alias);
} catch (ORMException $e) {
}
}
throw ORMException::unknownEntityNamespace($alias);
}
public function getEntityManagerNames()
{
trigger_error('getEntityManagerNames is deprecated since Symfony 2.1. Use getManagerNames instead', E_USER_DEPRECATED);
return $this->getManagerNames();
}
public function getEntityManagerForClass($class)
{
trigger_error('getEntityManagerForClass is deprecated since Symfony 2.1. Use getManagerForClass instead', E_USER_DEPRECATED);
return $this->getManagerForClass($class);
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Doctrine\Common\Annotations\Reader;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Doctrine\Common\Util\ClassUtils;
class ControllerListener implements EventSubscriberInterface
{
protected $reader;
public function __construct(Reader $reader)
{
$this->reader = $reader;
}
public function onKernelController(FilterControllerEvent $event)
{
if (!is_array($controller = $event->getController())) {
return;
}
$className = class_exists('Doctrine\Common\Util\ClassUtils') ? ClassUtils::getClass($controller[0]) : get_class($controller[0]);
$object = new \ReflectionClass($className);
$method = $object->getMethod($controller[1]);
$classConfigurations = $this->getConfigurations($this->reader->getClassAnnotations($object));
$methodConfigurations = $this->getConfigurations($this->reader->getMethodAnnotations($method));
$configurations = array();
foreach (array_merge(array_keys($classConfigurations), array_keys($methodConfigurations)) as $key) {
if (!array_key_exists($key, $classConfigurations)) {
$configurations[$key] = $methodConfigurations[$key];
} elseif (!array_key_exists($key, $methodConfigurations)) {
$configurations[$key] = $classConfigurations[$key];
} else {
if (is_array($classConfigurations[$key])) {
if (!is_array($methodConfigurations[$key])) {
throw new \UnexpectedValueException('Configurations should both be an array or both not be an array');
}
$configurations[$key] = array_merge($classConfigurations[$key], $methodConfigurations[$key]);
} else {
$configurations[$key] = $methodConfigurations[$key];
}
}
}
$request = $event->getRequest();
foreach ($configurations as $key => $attributes) {
$request->attributes->set($key, $attributes);
}
}
protected function getConfigurations(array $annotations)
{
$configurations = array();
foreach ($annotations as $configuration) {
if ($configuration instanceof ConfigurationInterface) {
if ($configuration->allowArray()) {
$configurations['_'.$configuration->getAliasName()][] = $configuration;
} elseif (!isset($configurations['_'.$configuration->getAliasName()])) {
$configurations['_'.$configuration->getAliasName()] = $configuration;
} else {
throw new \LogicException(sprintf('Multiple "%s" annotations are not allowed.', $configuration->getAliasName()));
}
}
}
return $configurations;
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::CONTROLLER =>'onKernelController',
);
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ParamConverterListener implements EventSubscriberInterface
{
protected $manager;
protected $autoConvert;
public function __construct(ParamConverterManager $manager, $autoConvert = true)
{
$this->manager = $manager;
$this->autoConvert = $autoConvert;
}
public function onKernelController(FilterControllerEvent $event)
{
$controller = $event->getController();
$request = $event->getRequest();
$configurations = array();
if ($configuration = $request->attributes->get('_converters')) {
foreach (is_array($configuration) ? $configuration : array($configuration) as $configuration) {
$configurations[$configuration->getName()] = $configuration;
}
}
if (is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && is_callable($controller,'__invoke')) {
$r = new \ReflectionMethod($controller,'__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
if ($this->autoConvert) {
$configurations = $this->autoConfigure($r, $request, $configurations);
}
$this->manager->apply($request, $configurations);
}
private function autoConfigure(\ReflectionFunctionAbstract $r, Request $request, $configurations)
{
foreach ($r->getParameters() as $param) {
if (!$param->getClass() || $param->getClass()->isInstance($request)) {
continue;
}
$name = $param->getName();
if (!isset($configurations[$name])) {
$configuration = new ParamConverter(array());
$configuration->setName($name);
$configuration->setClass($param->getClass()->getName());
$configurations[$name] = $configuration;
} elseif (null === $configurations[$name]->getClass()) {
$configurations[$name]->setClass($param->getClass()->getName());
}
$configurations[$name]->setIsOptional($param->isOptional());
}
return $configurations;
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::CONTROLLER =>'onKernelController',
);
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
interface ParamConverterInterface
{
public function apply(Request $request, ParamConverter $configuration);
public function supports(ParamConverter $configuration);
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use DateTime;
class DateTimeParamConverter implements ParamConverterInterface
{
public function apply(Request $request, ParamConverter $configuration)
{
$param = $configuration->getName();
if (!$request->attributes->has($param)) {
return false;
}
$options = $configuration->getOptions();
$value = $request->attributes->get($param);
if (!$value && $configuration->isOptional()) {
return false;
}
if (isset($options['format'])) {
$date = DateTime::createFromFormat($options['format'], $value);
if (!$date) {
throw new NotFoundHttpException('Invalid date given.');
}
} else {
if (false === strtotime($value)) {
throw new NotFoundHttpException('Invalid date given.');
}
$date = new DateTime($value);
}
$request->attributes->set($param, $date);
return true;
}
public function supports(ParamConverter $configuration)
{
if (null === $configuration->getClass()) {
return false;
}
return'DateTime'=== $configuration->getClass();
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\NoResultException;
class DoctrineParamConverter implements ParamConverterInterface
{
protected $registry;
public function __construct(ManagerRegistry $registry = null)
{
$this->registry = $registry;
}
public function apply(Request $request, ParamConverter $configuration)
{
$name = $configuration->getName();
$class = $configuration->getClass();
$options = $this->getOptions($configuration);
if (null === $request->attributes->get($name, false)) {
$configuration->setIsOptional(true);
}
if (false === $object = $this->find($class, $request, $options, $name)) {
if (false === $object = $this->findOneBy($class, $request, $options)) {
if ($configuration->isOptional()) {
$object = null;
} else {
throw new \LogicException('Unable to guess how to get a Doctrine instance from the request information.');
}
}
}
if (null === $object && false === $configuration->isOptional()) {
throw new NotFoundHttpException(sprintf('%s object not found.', $class));
}
$request->attributes->set($name, $object);
return true;
}
protected function find($class, Request $request, $options, $name)
{
if ($options['mapping'] || $options['exclude']) {
return false;
}
$id = $this->getIdentifier($request, $options, $name);
if (false === $id || null === $id) {
return false;
}
if (isset($options['repository_method'])) {
$method = $options['repository_method'];
} else {
$method ='find';
}
try {
return $this->getManager($options['entity_manager'], $class)->getRepository($class)->$method($id);
} catch (NoResultException $e) {
return;
}
}
protected function getIdentifier(Request $request, $options, $name)
{
if (isset($options['id'])) {
if (!is_array($options['id'])) {
$name = $options['id'];
} elseif (is_array($options['id'])) {
$id = array();
foreach ($options['id'] as $field) {
$id[$field] = $request->attributes->get($field);
}
return $id;
}
}
if ($request->attributes->has($name)) {
return $request->attributes->get($name);
}
if ($request->attributes->has('id') && !isset($options['id'])) {
return $request->attributes->get('id');
}
return false;
}
protected function findOneBy($class, Request $request, $options)
{
if (!$options['mapping']) {
$keys = $request->attributes->keys();
$options['mapping'] = $keys ? array_combine($keys, $keys) : array();
}
foreach ($options['exclude'] as $exclude) {
unset($options['mapping'][$exclude]);
}
if (!$options['mapping']) {
return false;
}
if (isset($options['id']) && null === $request->attributes->get($options['id'])) {
return false;
}
$criteria = array();
$em = $this->getManager($options['entity_manager'], $class);
$metadata = $em->getClassMetadata($class);
$mapMethodSignature = isset($options['repository_method'])
&& isset($options['map_method_signature'])
&& $options['map_method_signature'] === true;
foreach ($options['mapping'] as $attribute => $field) {
if ($metadata->hasField($field)
|| ($metadata->hasAssociation($field) && $metadata->isSingleValuedAssociation($field))
|| $mapMethodSignature) {
$criteria[$field] = $request->attributes->get($attribute);
}
}
if ($options['strip_null']) {
$criteria = array_filter($criteria, function ($value) { return !is_null($value); });
}
if (!$criteria) {
return false;
}
if (isset($options['repository_method'])) {
$repositoryMethod = $options['repository_method'];
} else {
$repositoryMethod ='findOneBy';
}
try {
if ($mapMethodSignature) {
return $this->findDataByMapMethodSignature($em, $class, $repositoryMethod, $criteria);
}
return $em->getRepository($class)->$repositoryMethod($criteria);
} catch (NoResultException $e) {
return;
}
}
private function findDataByMapMethodSignature($em, $class, $repositoryMethod, $criteria)
{
$arguments = array();
$repository = $em->getRepository($class);
$ref = new \ReflectionMethod($repository, $repositoryMethod);
foreach ($ref->getParameters() as $parameter) {
if (array_key_exists($parameter->name, $criteria)) {
$arguments[] = $criteria[$parameter->name];
} elseif ($parameter->isDefaultValueAvailable()) {
$arguments[] = $parameter->getDefaultValue();
} else {
throw new \InvalidArgumentException(sprintf('Repository method "%s::%s" requires that you provide a value for the "$%s" argument.', get_class($repository), $repositoryMethod, $parameter->name));
}
}
return $ref->invokeArgs($repository, $arguments);
}
public function supports(ParamConverter $configuration)
{
if (null === $this->registry || !count($this->registry->getManagers())) {
return false;
}
if (null === $configuration->getClass()) {
return false;
}
$options = $this->getOptions($configuration);
$em = $this->getManager($options['entity_manager'], $configuration->getClass());
if (null === $em) {
return false;
}
return !$em->getMetadataFactory()->isTransient($configuration->getClass());
}
protected function getOptions(ParamConverter $configuration)
{
return array_replace(array('entity_manager'=> null,'exclude'=> array(),'mapping'=> array(),'strip_null'=> false,
), $configuration->getOptions());
}
private function getManager($name, $class)
{
if (null === $name) {
return $this->registry->getManagerForClass($class);
}
return $this->registry->getManager($name);
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter
{
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
class ParamConverterManager
{
protected $converters = array();
protected $namedConverters = array();
public function apply(Request $request, $configurations)
{
if (is_object($configurations)) {
$configurations = array($configurations);
}
foreach ($configurations as $configuration) {
$this->applyConverter($request, $configuration);
}
}
protected function applyConverter(Request $request, ConfigurationInterface $configuration)
{
$value = $request->attributes->get($configuration->getName());
$className = $configuration->getClass();
if (is_object($value) && $value instanceof $className) {
return;
}
if ($converterName = $configuration->getConverter()) {
if (!isset($this->namedConverters[$converterName])) {
throw new \RuntimeException(sprintf("No converter named '%s' found for conversion of parameter '%s'.",
$converterName, $configuration->getName()
));
}
$converter = $this->namedConverters[$converterName];
if (!$converter->supports($configuration)) {
throw new \RuntimeException(sprintf("Converter '%s' does not support conversion of parameter '%s'.",
$converterName, $configuration->getName()
));
}
$converter->apply($request, $configuration);
return;
}
foreach ($this->all() as $converter) {
if ($converter->supports($configuration)) {
if ($converter->apply($request, $configuration)) {
return;
}
}
}
}
public function add(ParamConverterInterface $converter, $priority = 0, $name = null)
{
if ($priority !== null) {
if (!isset($this->converters[$priority])) {
$this->converters[$priority] = array();
}
$this->converters[$priority][] = $converter;
}
if (null !== $name) {
$this->namedConverters[$name] = $converter;
}
}
public function all()
{
krsort($this->converters);
$converters = array();
foreach ($this->converters as $all) {
$converters = array_merge($converters, $all);
}
return $converters;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class TemplateListener implements EventSubscriberInterface
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function onKernelController(FilterControllerEvent $event)
{
$request = $event->getRequest();
$template = $request->attributes->get('_template');
if (null === $template) {
return;
}
if (!$template instanceof Template) {
throw new \InvalidArgumentException('Request attribute "_template" is reserved for @Template annotations.');
}
$template->setOwner($controller = $event->getController());
if (null === $template->getTemplate()) {
$guesser = $this->container->get('sensio_framework_extra.view.guesser');
$template->setTemplate($guesser->guessTemplateName($controller, $request, $template->getEngine()));
}
}
public function onKernelView(GetResponseForControllerResultEvent $event)
{
$request = $event->getRequest();
$template = $request->attributes->get('_template');
if (null === $template) {
return;
}
$parameters = $event->getControllerResult();
$owner = $template->getOwner();
list($controller, $action) = $owner;
if (null === $parameters) {
$parameters = $this->resolveDefaultParameters($request, $template, $controller, $action);
}
$templating = $this->container->get('templating');
if ($template->isStreamable()) {
$callback = function () use ($templating, $template, $parameters) {
return $templating->stream($template->getTemplate(), $parameters);
};
$event->setResponse(new StreamedResponse($callback));
}
$template->setOwner(array());
$event->setResponse($templating->renderResponse($template->getTemplate(), $parameters));
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::CONTROLLER => array('onKernelController', -128),
KernelEvents::VIEW =>'onKernelView',
);
}
private function resolveDefaultParameters(Request $request, Template $template, $controller, $action)
{
$parameters = array();
$arguments = $template->getVars();
if (0 === count($arguments)) {
$r = new \ReflectionObject($controller);
$arguments = array();
foreach ($r->getMethod($action)->getParameters() as $param) {
$arguments[] = $param->getName();
}
}
foreach ($arguments as $argument) {
$parameters[$argument] = $request->attributes->get($argument);
}
return $parameters;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
class HttpCacheListener implements EventSubscriberInterface
{
private $lastModifiedDates;
private $etags;
private $expressionLanguage;
public function __construct()
{
$this->lastModifiedDates = new \SplObjectStorage();
$this->etags = new \SplObjectStorage();
}
public function onKernelController(FilterControllerEvent $event)
{
$request = $event->getRequest();
if (!$configuration = $request->attributes->get('_cache')) {
return;
}
$response = new Response();
$lastModifiedDate ='';
if ($configuration->getLastModified()) {
$lastModifiedDate = $this->getExpressionLanguage()->evaluate($configuration->getLastModified(), $request->attributes->all());
$response->setLastModified($lastModifiedDate);
}
$etag ='';
if ($configuration->getETag()) {
$etag = hash('sha256', $this->getExpressionLanguage()->evaluate($configuration->getETag(), $request->attributes->all()));
$response->setETag($etag);
}
if ($response->isNotModified($request)) {
$event->setController(function () use ($response) {
return $response;
});
} else {
if ($etag) {
$this->etags[$request] = $etag;
}
if ($lastModifiedDate) {
$this->lastModifiedDates[$request] = $lastModifiedDate;
}
}
}
public function onKernelResponse(FilterResponseEvent $event)
{
$request = $event->getRequest();
if (!$configuration = $request->attributes->get('_cache')) {
return;
}
$response = $event->getResponse();
if (!in_array($response->getStatusCode(), array(200, 203, 300, 301, 302, 304, 404, 410))) {
return;
}
if (null !== $age = $configuration->getSMaxAge()) {
if (!is_numeric($age)) {
$now = microtime(true);
$age = ceil(strtotime($configuration->getSMaxAge(), $now) - $now);
}
$response->setSharedMaxAge($age);
}
if (null !== $age = $configuration->getMaxAge()) {
if (!is_numeric($age)) {
$now = microtime(true);
$age = ceil(strtotime($configuration->getMaxAge(), $now) - $now);
}
$response->setMaxAge($age);
}
if (null !== $configuration->getExpires()) {
$date = \DateTime::createFromFormat('U', strtotime($configuration->getExpires()), new \DateTimeZone('UTC'));
$response->setExpires($date);
}
if (null !== $configuration->getVary()) {
$response->setVary($configuration->getVary());
}
if ($configuration->isPublic()) {
$response->setPublic();
}
if ($configuration->isPrivate()) {
$response->setPrivate();
}
if (isset($this->lastModifiedDates[$request])) {
$response->setLastModified($this->lastModifiedDates[$request]);
unset($this->lastModifiedDates[$request]);
}
if (isset($this->etags[$request])) {
$response->setETag($this->etags[$request]);
unset($this->etags[$request]);
}
$event->setResponse($response);
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::CONTROLLER =>'onKernelController',
KernelEvents::RESPONSE =>'onKernelResponse',
);
}
private function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage();
}
return $this->expressionLanguage;
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\EventListener
{
use Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolverInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;
class SecurityListener implements EventSubscriberInterface
{
private $tokenStorage;
private $authChecker;
private $language;
private $trustResolver;
private $roleHierarchy;
public function __construct(SecurityContextInterface $securityContext = null, ExpressionLanguage $language = null, AuthenticationTrustResolverInterface $trustResolver = null, RoleHierarchyInterface $roleHierarchy = null, TokenStorageInterface $tokenStorage = null, AuthorizationCheckerInterface $authChecker = null)
{
$this->tokenStorage = $tokenStorage ?: $securityContext;
$this->authChecker = $authChecker ?: $securityContext;
$this->language = $language;
$this->trustResolver = $trustResolver;
$this->roleHierarchy = $roleHierarchy;
}
public function onKernelController(FilterControllerEvent $event)
{
$request = $event->getRequest();
if (!$configuration = $request->attributes->get('_security')) {
return;
}
if (null === $this->tokenStorage || null === $this->trustResolver) {
throw new \LogicException('To use the @Security tag, you need to install the Symfony Security bundle.');
}
if (null === $this->tokenStorage->getToken()) {
throw new \LogicException('To use the @Security tag, your controller needs to be behind a firewall.');
}
if (null === $this->language) {
throw new \LogicException('To use the @Security tag, you need to use the Security component 2.4 or newer and to install the ExpressionLanguage component.');
}
if (!$this->language->evaluate($configuration->getExpression(), $this->getVariables($request))) {
throw new AccessDeniedException(sprintf('Expression "%s" denied access.', $configuration->getExpression()));
}
}
private function getVariables(Request $request)
{
$token = $this->tokenStorage->getToken();
if (null !== $this->roleHierarchy) {
$roles = $this->roleHierarchy->getReachableRoles($token->getRoles());
} else {
$roles = $token->getRoles();
}
$variables = array('token'=> $token,'user'=> $token->getUser(),'object'=> $request,'request'=> $request,'roles'=> array_map(function ($role) { return $role->getRole(); }, $roles),'trust_resolver'=> $this->trustResolver,'auth_checker'=> $this->authChecker,
);
return array_merge($request->attributes->all(), $variables);
}
public static function getSubscribedEvents()
{
return array(KernelEvents::CONTROLLER =>'onKernelController');
}
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Configuration
{
interface ConfigurationInterface
{
public function getAliasName();
public function allowArray();
}
}
namespace Sensio\Bundle\FrameworkExtraBundle\Configuration
{
abstract class ConfigurationAnnotation implements ConfigurationInterface
{
public function __construct(array $values)
{
foreach ($values as $k => $v) {
if (!method_exists($this, $name ='set'.$k)) {
throw new \RuntimeException(sprintf('Unknown key "%s" for annotation "@%s".', $k, get_class($this)));
}
$this->$name($v);
}
}
}
}
namespace Assetic
{
interface ValueSupplierInterface
{
public function getValues();
}
}
namespace Symfony\Bundle\AsseticBundle
{
use Assetic\ValueSupplierInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
class DefaultValueSupplier implements ValueSupplierInterface
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function getValues()
{
$request = $this->getCurrentRequest();
if (!$request) {
return array();
}
return array('locale'=> $request->getLocale(),'env'=> $this->container->getParameter('kernel.environment'),
);
}
private function getCurrentRequest()
{
$request = null;
$requestStack = $this->container->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE);
if ($requestStack) {
$request = $requestStack->getCurrentRequest();
} elseif ($this->container->isScopeActive('request')) {
$request = $this->container->get('request');
}
return $request;
}
}
}
namespace Assetic\Factory
{
use Assetic\Asset\AssetCollection;
use Assetic\Asset\AssetCollectionInterface;
use Assetic\Asset\AssetInterface;
use Assetic\Asset\AssetReference;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Assetic\Asset\HttpAsset;
use Assetic\AssetManager;
use Assetic\Factory\Worker\WorkerInterface;
use Assetic\Filter\DependencyExtractorInterface;
use Assetic\FilterManager;
class AssetFactory
{
private $root;
private $debug;
private $output;
private $workers;
private $am;
private $fm;
public function __construct($root, $debug = false)
{
$this->root = rtrim($root,'/');
$this->debug = $debug;
$this->output ='assetic/*';
$this->workers = array();
}
public function setDebug($debug)
{
$this->debug = $debug;
}
public function isDebug()
{
return $this->debug;
}
public function setDefaultOutput($output)
{
$this->output = $output;
}
public function addWorker(WorkerInterface $worker)
{
$this->workers[] = $worker;
}
public function getAssetManager()
{
return $this->am;
}
public function setAssetManager(AssetManager $am)
{
$this->am = $am;
}
public function getFilterManager()
{
return $this->fm;
}
public function setFilterManager(FilterManager $fm)
{
$this->fm = $fm;
}
public function createAsset($inputs = array(), $filters = array(), array $options = array())
{
if (!is_array($inputs)) {
$inputs = array($inputs);
}
if (!is_array($filters)) {
$filters = array($filters);
}
if (!isset($options['output'])) {
$options['output'] = $this->output;
}
if (!isset($options['vars'])) {
$options['vars'] = array();
}
if (!isset($options['debug'])) {
$options['debug'] = $this->debug;
}
if (!isset($options['root'])) {
$options['root'] = array($this->root);
} else {
if (!is_array($options['root'])) {
$options['root'] = array($options['root']);
}
$options['root'][] = $this->root;
}
if (!isset($options['name'])) {
$options['name'] = $this->generateAssetName($inputs, $filters, $options);
}
$asset = $this->createAssetCollection(array(), $options);
$extensions = array();
foreach ($inputs as $input) {
if (is_array($input)) {
$asset->add(call_user_func_array(array($this,'createAsset'), $input));
} else {
$asset->add($this->parseInput($input, $options));
$extensions[pathinfo($input, PATHINFO_EXTENSION)] = true;
}
}
foreach ($filters as $filter) {
if ('?'!= $filter[0]) {
$asset->ensureFilter($this->getFilter($filter));
} elseif (!$options['debug']) {
$asset->ensureFilter($this->getFilter(substr($filter, 1)));
}
}
if (!empty($options['vars'])) {
$toAdd = array();
foreach ($options['vars'] as $var) {
if (false !== strpos($options['output'],'{'.$var.'}')) {
continue;
}
$toAdd[] ='{'.$var.'}';
}
if ($toAdd) {
$options['output'] = str_replace('*','*.'.implode('.', $toAdd), $options['output']);
}
}
if (1 == count($extensions) && !pathinfo($options['output'], PATHINFO_EXTENSION) && $extension = key($extensions)) {
$options['output'] .='.'.$extension;
}
$asset->setTargetPath(str_replace('*', $options['name'], $options['output']));
return $this->applyWorkers($asset);
}
public function generateAssetName($inputs, $filters, $options = array())
{
foreach (array_diff(array_keys($options), array('output','debug','root')) as $key) {
unset($options[$key]);
}
ksort($options);
return substr(sha1(serialize($inputs).serialize($filters).serialize($options)), 0, 7);
}
public function getLastModified(AssetInterface $asset)
{
$mtime = 0;
foreach ($asset instanceof AssetCollectionInterface ? $asset : array($asset) as $leaf) {
$mtime = max($mtime, $leaf->getLastModified());
if (!$filters = $leaf->getFilters()) {
continue;
}
$prevFilters = array();
foreach ($filters as $filter) {
$prevFilters[] = $filter;
if (!$filter instanceof DependencyExtractorInterface) {
continue;
}
$clone = clone $leaf;
$clone->clearFilters();
foreach (array_slice($prevFilters, 0, -1) as $prevFilter) {
$clone->ensureFilter($prevFilter);
}
$clone->load();
foreach ($filter->getChildren($this, $clone->getContent(), $clone->getSourceDirectory()) as $child) {
$mtime = max($mtime, $this->getLastModified($child));
}
}
}
return $mtime;
}
protected function parseInput($input, array $options = array())
{
if ('@'== $input[0]) {
return $this->createAssetReference(substr($input, 1));
}
if (false !== strpos($input,'://') || 0 === strpos($input,'//')) {
return $this->createHttpAsset($input, $options['vars']);
}
if (self::isAbsolutePath($input)) {
if ($root = self::findRootDir($input, $options['root'])) {
$path = ltrim(substr($input, strlen($root)),'/');
} else {
$path = null;
}
} else {
$root = $this->root;
$path = $input;
$input = $this->root.'/'.$path;
}
if (false !== strpos($input,'*')) {
return $this->createGlobAsset($input, $root, $options['vars']);
}
return $this->createFileAsset($input, $root, $path, $options['vars']);
}
protected function createAssetCollection(array $assets = array(), array $options = array())
{
return new AssetCollection($assets, array(), null, isset($options['vars']) ? $options['vars'] : array());
}
protected function createAssetReference($name)
{
if (!$this->am) {
throw new \LogicException('There is no asset manager.');
}
return new AssetReference($this->am, $name);
}
protected function createHttpAsset($sourceUrl, $vars)
{
return new HttpAsset($sourceUrl, array(), false, $vars);
}
protected function createGlobAsset($glob, $root = null, $vars)
{
return new GlobAsset($glob, array(), $root, $vars);
}
protected function createFileAsset($source, $root = null, $path = null, $vars)
{
return new FileAsset($source, array(), $root, $path, $vars);
}
protected function getFilter($name)
{
if (!$this->fm) {
throw new \LogicException('There is no filter manager.');
}
return $this->fm->get($name);
}
private function applyWorkers(AssetCollectionInterface $asset)
{
foreach ($asset as $leaf) {
foreach ($this->workers as $worker) {
$retval = $worker->process($leaf, $this);
if ($retval instanceof AssetInterface && $leaf !== $retval) {
$asset->replaceLeaf($leaf, $retval);
}
}
}
foreach ($this->workers as $worker) {
$retval = $worker->process($asset, $this);
if ($retval instanceof AssetInterface) {
$asset = $retval;
}
}
return $asset instanceof AssetCollectionInterface ? $asset : $this->createAssetCollection(array($asset));
}
private static function isAbsolutePath($path)
{
return'/'== $path[0] ||'\\'== $path[0] || (3 < strlen($path) && ctype_alpha($path[0]) && $path[1] ==':'&& ('\\'== $path[2] ||'/'== $path[2]));
}
private static function findRootDir($path, array $roots)
{
foreach ($roots as $root) {
if (0 === strpos($path, $root)) {
return $root;
}
}
}
}
}
namespace Symfony\Bundle\AsseticBundle\Factory
{
use Assetic\Factory\AssetFactory as BaseAssetFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpKernel\KernelInterface;
class AssetFactory extends BaseAssetFactory
{
private $kernel;
private $container;
private $parameterBag;
public function __construct(KernelInterface $kernel, ContainerInterface $container, ParameterBagInterface $parameterBag, $baseDir, $debug = false)
{
$this->kernel = $kernel;
$this->container = $container;
$this->parameterBag = $parameterBag;
parent::__construct($baseDir, $debug);
}
protected function parseInput($input, array $options = array())
{
$input = $this->parameterBag->resolveValue($input);
if ('@'== $input[0] && false !== strpos($input,'/')) {
$bundle = substr($input, 1);
if (false !== $pos = strpos($bundle,'/')) {
$bundle = substr($bundle, 0, $pos);
}
$options['root'] = array($this->kernel->getBundle($bundle)->getPath());
if (false !== $pos = strpos($input,'*')) {
list($before, $after) = explode('*', $input, 2);
$input = $this->kernel->locateResource($before).'*'.$after;
} else {
$input = $this->kernel->locateResource($input);
}
}
return parent::parseInput($input, $options);
}
protected function createAssetReference($name)
{
if (!$this->getAssetManager()) {
$this->setAssetManager($this->container->get('assetic.asset_manager'));
}
return parent::createAssetReference($name);
}
protected function getFilter($name)
{
if (!$this->getFilterManager()) {
$this->setFilterManager($this->container->get('assetic.filter_manager'));
}
return parent::getFilter($name);
}
}
}