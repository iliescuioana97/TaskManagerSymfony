<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_061f1d76a5e686cd7809995cd4d3fc1f4c1294393e57d9d5a707b9026d69b108 extends Twig_Template
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
        $__internal_6ff333d3409ba33bc50e5209543bd646b18d257a42eceac1ada03f0bfc013e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff333d3409ba33bc50e5209543bd646b18d257a42eceac1ada03f0bfc013e80->enter($__internal_6ff333d3409ba33bc50e5209543bd646b18d257a42eceac1ada03f0bfc013e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b5d7898d815f43c3cd138f8655581792091952ddb882a7b362b3b101f9c8fe1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d7898d815f43c3cd138f8655581792091952ddb882a7b362b3b101f9c8fe1e->enter($__internal_b5d7898d815f43c3cd138f8655581792091952ddb882a7b362b3b101f9c8fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6ff333d3409ba33bc50e5209543bd646b18d257a42eceac1ada03f0bfc013e80->leave($__internal_6ff333d3409ba33bc50e5209543bd646b18d257a42eceac1ada03f0bfc013e80_prof);

        
        $__internal_b5d7898d815f43c3cd138f8655581792091952ddb882a7b362b3b101f9c8fe1e->leave($__internal_b5d7898d815f43c3cd138f8655581792091952ddb882a7b362b3b101f9c8fe1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
