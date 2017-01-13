<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_62e8caef8989eb494c981539155ef75606ad4e74259271b23cfab58c59bba709 extends Twig_Template
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
        $__internal_2f94f6c2c939c6f06706581dfb8409206d9fcfd64b1d6ed423152f8a5245ca06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f94f6c2c939c6f06706581dfb8409206d9fcfd64b1d6ed423152f8a5245ca06->enter($__internal_2f94f6c2c939c6f06706581dfb8409206d9fcfd64b1d6ed423152f8a5245ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_62c3617cb935c7589893209fb49d5f3eb8717f331faca7ac5a89c16c5a58e2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c3617cb935c7589893209fb49d5f3eb8717f331faca7ac5a89c16c5a58e2f9->enter($__internal_62c3617cb935c7589893209fb49d5f3eb8717f331faca7ac5a89c16c5a58e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f94f6c2c939c6f06706581dfb8409206d9fcfd64b1d6ed423152f8a5245ca06->leave($__internal_2f94f6c2c939c6f06706581dfb8409206d9fcfd64b1d6ed423152f8a5245ca06_prof);

        
        $__internal_62c3617cb935c7589893209fb49d5f3eb8717f331faca7ac5a89c16c5a58e2f9->leave($__internal_62c3617cb935c7589893209fb49d5f3eb8717f331faca7ac5a89c16c5a58e2f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
