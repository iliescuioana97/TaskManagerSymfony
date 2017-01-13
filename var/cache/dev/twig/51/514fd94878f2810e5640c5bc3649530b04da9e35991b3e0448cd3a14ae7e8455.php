<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d5a4a67eb0298487a0a98025b2e4070a740da3985fe385d7cd82fdb77368935c extends Twig_Template
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
        $__internal_42e19228632dcc4024f14a5cefb4ebbf89518678fa947c50773f3b378bcd8a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e19228632dcc4024f14a5cefb4ebbf89518678fa947c50773f3b378bcd8a68->enter($__internal_42e19228632dcc4024f14a5cefb4ebbf89518678fa947c50773f3b378bcd8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_db18ac94dbc8efc1f1a04ed7d124cb3b3d474094e00172ca9966997ca6830c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db18ac94dbc8efc1f1a04ed7d124cb3b3d474094e00172ca9966997ca6830c25->enter($__internal_db18ac94dbc8efc1f1a04ed7d124cb3b3d474094e00172ca9966997ca6830c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_42e19228632dcc4024f14a5cefb4ebbf89518678fa947c50773f3b378bcd8a68->leave($__internal_42e19228632dcc4024f14a5cefb4ebbf89518678fa947c50773f3b378bcd8a68_prof);

        
        $__internal_db18ac94dbc8efc1f1a04ed7d124cb3b3d474094e00172ca9966997ca6830c25->leave($__internal_db18ac94dbc8efc1f1a04ed7d124cb3b3d474094e00172ca9966997ca6830c25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
