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
        $__internal_0e354a5babb2b2b18478f86bbdcbe4cd03a7ce9313d58f61959472a120ef709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e354a5babb2b2b18478f86bbdcbe4cd03a7ce9313d58f61959472a120ef709f->enter($__internal_0e354a5babb2b2b18478f86bbdcbe4cd03a7ce9313d58f61959472a120ef709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_abc55662e828cf3fef19142fd63e72542e2f19a7e73e67a285a5886879dfccfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc55662e828cf3fef19142fd63e72542e2f19a7e73e67a285a5886879dfccfa->enter($__internal_abc55662e828cf3fef19142fd63e72542e2f19a7e73e67a285a5886879dfccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0e354a5babb2b2b18478f86bbdcbe4cd03a7ce9313d58f61959472a120ef709f->leave($__internal_0e354a5babb2b2b18478f86bbdcbe4cd03a7ce9313d58f61959472a120ef709f_prof);

        
        $__internal_abc55662e828cf3fef19142fd63e72542e2f19a7e73e67a285a5886879dfccfa->leave($__internal_abc55662e828cf3fef19142fd63e72542e2f19a7e73e67a285a5886879dfccfa_prof);

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
