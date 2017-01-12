<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_faa7d53ddedf697274178568a2636ea3fe185f56daf30b2471c6b66f54d8825a extends Twig_Template
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
        $__internal_c585e9910dfd9cbd403cf76eff031fb0d39dd11adcfe4e4edbc1a26b140c451a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c585e9910dfd9cbd403cf76eff031fb0d39dd11adcfe4e4edbc1a26b140c451a->enter($__internal_c585e9910dfd9cbd403cf76eff031fb0d39dd11adcfe4e4edbc1a26b140c451a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4105de06f134bcca81e52a78304ada78df35c6c5b2f79667c869e2013dea4d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4105de06f134bcca81e52a78304ada78df35c6c5b2f79667c869e2013dea4d34->enter($__internal_4105de06f134bcca81e52a78304ada78df35c6c5b2f79667c869e2013dea4d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c585e9910dfd9cbd403cf76eff031fb0d39dd11adcfe4e4edbc1a26b140c451a->leave($__internal_c585e9910dfd9cbd403cf76eff031fb0d39dd11adcfe4e4edbc1a26b140c451a_prof);

        
        $__internal_4105de06f134bcca81e52a78304ada78df35c6c5b2f79667c869e2013dea4d34->leave($__internal_4105de06f134bcca81e52a78304ada78df35c6c5b2f79667c869e2013dea4d34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
