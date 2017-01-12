<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_51a17ca38f718c0644ac9a2c586bf0e8035c097a78d92817e84a7d2a86b030f7 extends Twig_Template
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
        $__internal_b9e8aaa0a066c5a042dd4fdddae7ff0c322727a6d0bcd088fe645b04cc2cd730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e8aaa0a066c5a042dd4fdddae7ff0c322727a6d0bcd088fe645b04cc2cd730->enter($__internal_b9e8aaa0a066c5a042dd4fdddae7ff0c322727a6d0bcd088fe645b04cc2cd730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ba91cf6562f3cf9e59440b5522ef860671790178f7c08841a7eb7b2796de00cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba91cf6562f3cf9e59440b5522ef860671790178f7c08841a7eb7b2796de00cb->enter($__internal_ba91cf6562f3cf9e59440b5522ef860671790178f7c08841a7eb7b2796de00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b9e8aaa0a066c5a042dd4fdddae7ff0c322727a6d0bcd088fe645b04cc2cd730->leave($__internal_b9e8aaa0a066c5a042dd4fdddae7ff0c322727a6d0bcd088fe645b04cc2cd730_prof);

        
        $__internal_ba91cf6562f3cf9e59440b5522ef860671790178f7c08841a7eb7b2796de00cb->leave($__internal_ba91cf6562f3cf9e59440b5522ef860671790178f7c08841a7eb7b2796de00cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
