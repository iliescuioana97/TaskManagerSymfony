<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fa63a91f20580700ae98b2fd2c8ea0e91a0cd74ca54f6d4c40b3103a83e2ca30 extends Twig_Template
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
        $__internal_4b78b9c22664d2fd4217471cd17cf51453edf89c99589050579bdd4669aae961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b78b9c22664d2fd4217471cd17cf51453edf89c99589050579bdd4669aae961->enter($__internal_4b78b9c22664d2fd4217471cd17cf51453edf89c99589050579bdd4669aae961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_25ddea11c2d87599c0b2637ad7c3e5c62fedae30d7948fb718a7a8414034e51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ddea11c2d87599c0b2637ad7c3e5c62fedae30d7948fb718a7a8414034e51f->enter($__internal_25ddea11c2d87599c0b2637ad7c3e5c62fedae30d7948fb718a7a8414034e51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4b78b9c22664d2fd4217471cd17cf51453edf89c99589050579bdd4669aae961->leave($__internal_4b78b9c22664d2fd4217471cd17cf51453edf89c99589050579bdd4669aae961_prof);

        
        $__internal_25ddea11c2d87599c0b2637ad7c3e5c62fedae30d7948fb718a7a8414034e51f->leave($__internal_25ddea11c2d87599c0b2637ad7c3e5c62fedae30d7948fb718a7a8414034e51f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
