<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_60507e55da21dcb1817e187edb4444f6ec51913dba39ae15b1a5c0cc506dd579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ee2a95a0bdb860a364a014abf6f821dfa8d4c1e43780b0b3b78a75e250d4561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee2a95a0bdb860a364a014abf6f821dfa8d4c1e43780b0b3b78a75e250d4561->enter($__internal_4ee2a95a0bdb860a364a014abf6f821dfa8d4c1e43780b0b3b78a75e250d4561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4b86408849d95b8a0dba97bee982391b4e2887a33d1fc4866cbfbbef51da8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b86408849d95b8a0dba97bee982391b4e2887a33d1fc4866cbfbbef51da8de->enter($__internal_d4b86408849d95b8a0dba97bee982391b4e2887a33d1fc4866cbfbbef51da8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4ee2a95a0bdb860a364a014abf6f821dfa8d4c1e43780b0b3b78a75e250d4561->leave($__internal_4ee2a95a0bdb860a364a014abf6f821dfa8d4c1e43780b0b3b78a75e250d4561_prof);

        
        $__internal_d4b86408849d95b8a0dba97bee982391b4e2887a33d1fc4866cbfbbef51da8de->leave($__internal_d4b86408849d95b8a0dba97bee982391b4e2887a33d1fc4866cbfbbef51da8de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
