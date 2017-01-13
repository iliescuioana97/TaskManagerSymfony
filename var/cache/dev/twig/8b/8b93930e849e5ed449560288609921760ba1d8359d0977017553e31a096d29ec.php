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
        $__internal_b79741b6237e8894e0157d4dbc941a078a3a67ea8e005dbae774ac591b4ac2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79741b6237e8894e0157d4dbc941a078a3a67ea8e005dbae774ac591b4ac2e4->enter($__internal_b79741b6237e8894e0157d4dbc941a078a3a67ea8e005dbae774ac591b4ac2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_b81ad927b0b42a6aa9bab8f99664098ab790922d41b88809903ada3da95745d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81ad927b0b42a6aa9bab8f99664098ab790922d41b88809903ada3da95745d7->enter($__internal_b81ad927b0b42a6aa9bab8f99664098ab790922d41b88809903ada3da95745d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b79741b6237e8894e0157d4dbc941a078a3a67ea8e005dbae774ac591b4ac2e4->leave($__internal_b79741b6237e8894e0157d4dbc941a078a3a67ea8e005dbae774ac591b4ac2e4_prof);

        
        $__internal_b81ad927b0b42a6aa9bab8f99664098ab790922d41b88809903ada3da95745d7->leave($__internal_b81ad927b0b42a6aa9bab8f99664098ab790922d41b88809903ada3da95745d7_prof);

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
