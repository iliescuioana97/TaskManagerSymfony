<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f59f4f04a52b32da77714ef4d31f535bac549259a266ad2778474c5f56793781 extends Twig_Template
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
        $__internal_918765a76eef609435a9782677679c8eaea691ab1c2e7a81dfbf43b978755b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918765a76eef609435a9782677679c8eaea691ab1c2e7a81dfbf43b978755b85->enter($__internal_918765a76eef609435a9782677679c8eaea691ab1c2e7a81dfbf43b978755b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6b64d1d0d3bee90e40c0e28d9f47202449284bf3745893cafc05eaba35e7bd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b64d1d0d3bee90e40c0e28d9f47202449284bf3745893cafc05eaba35e7bd30->enter($__internal_6b64d1d0d3bee90e40c0e28d9f47202449284bf3745893cafc05eaba35e7bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_918765a76eef609435a9782677679c8eaea691ab1c2e7a81dfbf43b978755b85->leave($__internal_918765a76eef609435a9782677679c8eaea691ab1c2e7a81dfbf43b978755b85_prof);

        
        $__internal_6b64d1d0d3bee90e40c0e28d9f47202449284bf3745893cafc05eaba35e7bd30->leave($__internal_6b64d1d0d3bee90e40c0e28d9f47202449284bf3745893cafc05eaba35e7bd30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
