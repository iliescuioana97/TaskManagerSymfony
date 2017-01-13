<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_29fcb6f9dc1bcbf6a5fa831f72e7db7775f2cfe71ce28f9b5cd15f5b75e8d7da extends Twig_Template
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
        $__internal_432ca6367a9f92050cac635b3d9e31bb4d8e0925d5a82f7d094a876337c2d3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432ca6367a9f92050cac635b3d9e31bb4d8e0925d5a82f7d094a876337c2d3d8->enter($__internal_432ca6367a9f92050cac635b3d9e31bb4d8e0925d5a82f7d094a876337c2d3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_42bcc79c6c4a1f001ef027b54bfb43c4b03f81b498897b17d8a1d17a3cb18ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bcc79c6c4a1f001ef027b54bfb43c4b03f81b498897b17d8a1d17a3cb18ef9->enter($__internal_42bcc79c6c4a1f001ef027b54bfb43c4b03f81b498897b17d8a1d17a3cb18ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_432ca6367a9f92050cac635b3d9e31bb4d8e0925d5a82f7d094a876337c2d3d8->leave($__internal_432ca6367a9f92050cac635b3d9e31bb4d8e0925d5a82f7d094a876337c2d3d8_prof);

        
        $__internal_42bcc79c6c4a1f001ef027b54bfb43c4b03f81b498897b17d8a1d17a3cb18ef9->leave($__internal_42bcc79c6c4a1f001ef027b54bfb43c4b03f81b498897b17d8a1d17a3cb18ef9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
