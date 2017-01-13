<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1f1d368221b32b3321b5c84777abcb928c4dc0bbc3ac9343c697f9ff35830af8 extends Twig_Template
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
        $__internal_be63ca83cd4f6e62a406c68114cc3c99962abc0d2adffe224f6c276b83d71849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be63ca83cd4f6e62a406c68114cc3c99962abc0d2adffe224f6c276b83d71849->enter($__internal_be63ca83cd4f6e62a406c68114cc3c99962abc0d2adffe224f6c276b83d71849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_044630d2eb43e130b73eccb70a9ca89ed1c6ac577809d4b060110acaea4fb5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044630d2eb43e130b73eccb70a9ca89ed1c6ac577809d4b060110acaea4fb5e6->enter($__internal_044630d2eb43e130b73eccb70a9ca89ed1c6ac577809d4b060110acaea4fb5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_be63ca83cd4f6e62a406c68114cc3c99962abc0d2adffe224f6c276b83d71849->leave($__internal_be63ca83cd4f6e62a406c68114cc3c99962abc0d2adffe224f6c276b83d71849_prof);

        
        $__internal_044630d2eb43e130b73eccb70a9ca89ed1c6ac577809d4b060110acaea4fb5e6->leave($__internal_044630d2eb43e130b73eccb70a9ca89ed1c6ac577809d4b060110acaea4fb5e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
