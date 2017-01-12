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
        $__internal_d2ec7895d3cd6a676d36a20660c09c35e3e7681f0de96d2399f0eee153eb359c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ec7895d3cd6a676d36a20660c09c35e3e7681f0de96d2399f0eee153eb359c->enter($__internal_d2ec7895d3cd6a676d36a20660c09c35e3e7681f0de96d2399f0eee153eb359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a43c94149bf835b04b0806821a4c0422ef6112358c071cf6ee9543e3575b7168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43c94149bf835b04b0806821a4c0422ef6112358c071cf6ee9543e3575b7168->enter($__internal_a43c94149bf835b04b0806821a4c0422ef6112358c071cf6ee9543e3575b7168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d2ec7895d3cd6a676d36a20660c09c35e3e7681f0de96d2399f0eee153eb359c->leave($__internal_d2ec7895d3cd6a676d36a20660c09c35e3e7681f0de96d2399f0eee153eb359c_prof);

        
        $__internal_a43c94149bf835b04b0806821a4c0422ef6112358c071cf6ee9543e3575b7168->leave($__internal_a43c94149bf835b04b0806821a4c0422ef6112358c071cf6ee9543e3575b7168_prof);

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
