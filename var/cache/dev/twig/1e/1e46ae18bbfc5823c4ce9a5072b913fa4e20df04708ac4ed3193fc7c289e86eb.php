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
        $__internal_392165c12a6cb1946fc7613f6ace3980685e9caf8bb7d51db59509e45f90bea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392165c12a6cb1946fc7613f6ace3980685e9caf8bb7d51db59509e45f90bea2->enter($__internal_392165c12a6cb1946fc7613f6ace3980685e9caf8bb7d51db59509e45f90bea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_55313115ae37bb39963c67ae2cff2348c59e673509cd0c5586287e7826ea96b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55313115ae37bb39963c67ae2cff2348c59e673509cd0c5586287e7826ea96b4->enter($__internal_55313115ae37bb39963c67ae2cff2348c59e673509cd0c5586287e7826ea96b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_392165c12a6cb1946fc7613f6ace3980685e9caf8bb7d51db59509e45f90bea2->leave($__internal_392165c12a6cb1946fc7613f6ace3980685e9caf8bb7d51db59509e45f90bea2_prof);

        
        $__internal_55313115ae37bb39963c67ae2cff2348c59e673509cd0c5586287e7826ea96b4->leave($__internal_55313115ae37bb39963c67ae2cff2348c59e673509cd0c5586287e7826ea96b4_prof);

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
