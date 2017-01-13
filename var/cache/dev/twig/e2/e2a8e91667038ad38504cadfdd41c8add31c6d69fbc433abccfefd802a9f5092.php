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
        $__internal_1bc4a38c5ba3f21c9baeb190200611ee6a9f22195ff3f85cbeb43811446df587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc4a38c5ba3f21c9baeb190200611ee6a9f22195ff3f85cbeb43811446df587->enter($__internal_1bc4a38c5ba3f21c9baeb190200611ee6a9f22195ff3f85cbeb43811446df587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_50102dfcafc37685dd541986b159490cae4cf16094ccc315f86d6940f4f955fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50102dfcafc37685dd541986b159490cae4cf16094ccc315f86d6940f4f955fb->enter($__internal_50102dfcafc37685dd541986b159490cae4cf16094ccc315f86d6940f4f955fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1bc4a38c5ba3f21c9baeb190200611ee6a9f22195ff3f85cbeb43811446df587->leave($__internal_1bc4a38c5ba3f21c9baeb190200611ee6a9f22195ff3f85cbeb43811446df587_prof);

        
        $__internal_50102dfcafc37685dd541986b159490cae4cf16094ccc315f86d6940f4f955fb->leave($__internal_50102dfcafc37685dd541986b159490cae4cf16094ccc315f86d6940f4f955fb_prof);

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
