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
        $__internal_9e8bc42c40b8d7b48c7f30b448760c786659c13631d71c74c5eb68775be87770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8bc42c40b8d7b48c7f30b448760c786659c13631d71c74c5eb68775be87770->enter($__internal_9e8bc42c40b8d7b48c7f30b448760c786659c13631d71c74c5eb68775be87770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_0ecdb1af679ec688e18e33fc3d9fb10cccd16e26d1f2e156e23110ec4c255f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecdb1af679ec688e18e33fc3d9fb10cccd16e26d1f2e156e23110ec4c255f26->enter($__internal_0ecdb1af679ec688e18e33fc3d9fb10cccd16e26d1f2e156e23110ec4c255f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9e8bc42c40b8d7b48c7f30b448760c786659c13631d71c74c5eb68775be87770->leave($__internal_9e8bc42c40b8d7b48c7f30b448760c786659c13631d71c74c5eb68775be87770_prof);

        
        $__internal_0ecdb1af679ec688e18e33fc3d9fb10cccd16e26d1f2e156e23110ec4c255f26->leave($__internal_0ecdb1af679ec688e18e33fc3d9fb10cccd16e26d1f2e156e23110ec4c255f26_prof);

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
