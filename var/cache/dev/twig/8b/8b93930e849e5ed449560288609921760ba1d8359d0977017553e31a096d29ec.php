<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_68fd367601b5e9e23f899fed4d521c17e8a09a92aa11480844ad50216863957c extends Twig_Template
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
        $__internal_5aac74252acbf2e9a0e4110d3fb272157589b9453fdf47e337665335cebed089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aac74252acbf2e9a0e4110d3fb272157589b9453fdf47e337665335cebed089->enter($__internal_5aac74252acbf2e9a0e4110d3fb272157589b9453fdf47e337665335cebed089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_416372b520197857eb745fc8eb48b4380d68beb33f1a91c942a704aef198c0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416372b520197857eb745fc8eb48b4380d68beb33f1a91c942a704aef198c0ea->enter($__internal_416372b520197857eb745fc8eb48b4380d68beb33f1a91c942a704aef198c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5aac74252acbf2e9a0e4110d3fb272157589b9453fdf47e337665335cebed089->leave($__internal_5aac74252acbf2e9a0e4110d3fb272157589b9453fdf47e337665335cebed089_prof);

        
        $__internal_416372b520197857eb745fc8eb48b4380d68beb33f1a91c942a704aef198c0ea->leave($__internal_416372b520197857eb745fc8eb48b4380d68beb33f1a91c942a704aef198c0ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
