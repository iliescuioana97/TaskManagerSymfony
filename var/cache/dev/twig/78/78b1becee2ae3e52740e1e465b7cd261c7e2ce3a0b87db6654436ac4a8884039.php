<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3dcf92d0fe701aa416051e58aa9ff9598564065a89c9fd4ffc12b06603fb1402 extends Twig_Template
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
        $__internal_2a9894dafffb9d379fff3ff7849814236c5897c2a367dea61e8101505394b638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9894dafffb9d379fff3ff7849814236c5897c2a367dea61e8101505394b638->enter($__internal_2a9894dafffb9d379fff3ff7849814236c5897c2a367dea61e8101505394b638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b519e801183df36acb64c1e3fd83ee481bac556684e90f286e3dbe304eea6b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b519e801183df36acb64c1e3fd83ee481bac556684e90f286e3dbe304eea6b34->enter($__internal_b519e801183df36acb64c1e3fd83ee481bac556684e90f286e3dbe304eea6b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a9894dafffb9d379fff3ff7849814236c5897c2a367dea61e8101505394b638->leave($__internal_2a9894dafffb9d379fff3ff7849814236c5897c2a367dea61e8101505394b638_prof);

        
        $__internal_b519e801183df36acb64c1e3fd83ee481bac556684e90f286e3dbe304eea6b34->leave($__internal_b519e801183df36acb64c1e3fd83ee481bac556684e90f286e3dbe304eea6b34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
