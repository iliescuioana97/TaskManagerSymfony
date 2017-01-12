<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c728348b27a5cdff81a436a3ae8622cb500002c365adc0777b89bf05019216aa extends Twig_Template
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
        $__internal_d2f0e76e781bd94573c49c5c9b13c1263ebd880d36890002b31b8b90742b9f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f0e76e781bd94573c49c5c9b13c1263ebd880d36890002b31b8b90742b9f9c->enter($__internal_d2f0e76e781bd94573c49c5c9b13c1263ebd880d36890002b31b8b90742b9f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d740424194005038cf459f500586208c98a9c941b0620a4adcf4aac2e7dd8e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d740424194005038cf459f500586208c98a9c941b0620a4adcf4aac2e7dd8e1d->enter($__internal_d740424194005038cf459f500586208c98a9c941b0620a4adcf4aac2e7dd8e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d2f0e76e781bd94573c49c5c9b13c1263ebd880d36890002b31b8b90742b9f9c->leave($__internal_d2f0e76e781bd94573c49c5c9b13c1263ebd880d36890002b31b8b90742b9f9c_prof);

        
        $__internal_d740424194005038cf459f500586208c98a9c941b0620a4adcf4aac2e7dd8e1d->leave($__internal_d740424194005038cf459f500586208c98a9c941b0620a4adcf4aac2e7dd8e1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
