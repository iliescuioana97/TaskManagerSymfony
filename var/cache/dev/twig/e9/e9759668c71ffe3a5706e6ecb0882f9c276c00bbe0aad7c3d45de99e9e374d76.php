<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_85769d9d2d4b04ecade15de84f747ab9b8aba2abf67fd91fc36d9561070f4d15 extends Twig_Template
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
        $__internal_dd72b351973f056e5a94eb033a45c704dcc4769de86c100ceaacbbf91f88bf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd72b351973f056e5a94eb033a45c704dcc4769de86c100ceaacbbf91f88bf5d->enter($__internal_dd72b351973f056e5a94eb033a45c704dcc4769de86c100ceaacbbf91f88bf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1905f6f6e53f47643587811dbed6442ecb1ba1fbbc02b0a70e50da91ab05eaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1905f6f6e53f47643587811dbed6442ecb1ba1fbbc02b0a70e50da91ab05eaf0->enter($__internal_1905f6f6e53f47643587811dbed6442ecb1ba1fbbc02b0a70e50da91ab05eaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dd72b351973f056e5a94eb033a45c704dcc4769de86c100ceaacbbf91f88bf5d->leave($__internal_dd72b351973f056e5a94eb033a45c704dcc4769de86c100ceaacbbf91f88bf5d_prof);

        
        $__internal_1905f6f6e53f47643587811dbed6442ecb1ba1fbbc02b0a70e50da91ab05eaf0->leave($__internal_1905f6f6e53f47643587811dbed6442ecb1ba1fbbc02b0a70e50da91ab05eaf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
