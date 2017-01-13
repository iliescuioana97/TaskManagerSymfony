<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1082f0cb19beb316f4a9b28718360a8718a64e4045246eded758f17321d4b8a3 extends Twig_Template
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
        $__internal_67929829354d1d5da16fbee1539506090af7d975be292581e64e9658c063a8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67929829354d1d5da16fbee1539506090af7d975be292581e64e9658c063a8ef->enter($__internal_67929829354d1d5da16fbee1539506090af7d975be292581e64e9658c063a8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3c5df958518f07a1f8c1fa3b2791a32fb1260e766c094ca9001678ea42d8e9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5df958518f07a1f8c1fa3b2791a32fb1260e766c094ca9001678ea42d8e9b5->enter($__internal_3c5df958518f07a1f8c1fa3b2791a32fb1260e766c094ca9001678ea42d8e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_67929829354d1d5da16fbee1539506090af7d975be292581e64e9658c063a8ef->leave($__internal_67929829354d1d5da16fbee1539506090af7d975be292581e64e9658c063a8ef_prof);

        
        $__internal_3c5df958518f07a1f8c1fa3b2791a32fb1260e766c094ca9001678ea42d8e9b5->leave($__internal_3c5df958518f07a1f8c1fa3b2791a32fb1260e766c094ca9001678ea42d8e9b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
