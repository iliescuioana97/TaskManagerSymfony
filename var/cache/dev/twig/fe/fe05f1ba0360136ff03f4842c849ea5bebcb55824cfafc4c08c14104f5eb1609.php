<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e5ce4cde9626c54cd8b6b1afded84dfe4191286f283f7167e6b8ea8051525474 extends Twig_Template
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
        $__internal_e1a2e0183f38f06fbda578487e8886bc261c21229bdcf948763e705499885fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a2e0183f38f06fbda578487e8886bc261c21229bdcf948763e705499885fde->enter($__internal_e1a2e0183f38f06fbda578487e8886bc261c21229bdcf948763e705499885fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2cdd491cebe97799e645b99f69d906f359154aee8f091ce2978ba0e3b5f29386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdd491cebe97799e645b99f69d906f359154aee8f091ce2978ba0e3b5f29386->enter($__internal_2cdd491cebe97799e645b99f69d906f359154aee8f091ce2978ba0e3b5f29386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e1a2e0183f38f06fbda578487e8886bc261c21229bdcf948763e705499885fde->leave($__internal_e1a2e0183f38f06fbda578487e8886bc261c21229bdcf948763e705499885fde_prof);

        
        $__internal_2cdd491cebe97799e645b99f69d906f359154aee8f091ce2978ba0e3b5f29386->leave($__internal_2cdd491cebe97799e645b99f69d906f359154aee8f091ce2978ba0e3b5f29386_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
