<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1ce6fe592b8f3d61a980df01d68570f46c3fb9e5bb792f4d466013982bc07ee8 extends Twig_Template
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
        $__internal_874d2a630e183416983a64b71985294fe0e1c0cd119cdf33e8a6357f062119fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874d2a630e183416983a64b71985294fe0e1c0cd119cdf33e8a6357f062119fd->enter($__internal_874d2a630e183416983a64b71985294fe0e1c0cd119cdf33e8a6357f062119fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b80fa4bd0d0028c179a7d3f696d6f2ddcc75912602a5c47c29f0f6c9b52f12f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80fa4bd0d0028c179a7d3f696d6f2ddcc75912602a5c47c29f0f6c9b52f12f6->enter($__internal_b80fa4bd0d0028c179a7d3f696d6f2ddcc75912602a5c47c29f0f6c9b52f12f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_874d2a630e183416983a64b71985294fe0e1c0cd119cdf33e8a6357f062119fd->leave($__internal_874d2a630e183416983a64b71985294fe0e1c0cd119cdf33e8a6357f062119fd_prof);

        
        $__internal_b80fa4bd0d0028c179a7d3f696d6f2ddcc75912602a5c47c29f0f6c9b52f12f6->leave($__internal_b80fa4bd0d0028c179a7d3f696d6f2ddcc75912602a5c47c29f0f6c9b52f12f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
