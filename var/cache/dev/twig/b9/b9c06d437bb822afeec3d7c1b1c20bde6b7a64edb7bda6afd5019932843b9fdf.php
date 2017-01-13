<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e74c0da5fb9433aa158fc9f6bcf769799eaa0e3631627741e389ec21d8e6bc4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd9343ea41b1342a754eaa978132f95bb47898e1fed3d15f73f39a090701ea8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9343ea41b1342a754eaa978132f95bb47898e1fed3d15f73f39a090701ea8b->enter($__internal_dd9343ea41b1342a754eaa978132f95bb47898e1fed3d15f73f39a090701ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0c1d1c7421b7f89a2be03dd37584fc908283130e6986283a5e3669d5361c2467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1d1c7421b7f89a2be03dd37584fc908283130e6986283a5e3669d5361c2467->enter($__internal_0c1d1c7421b7f89a2be03dd37584fc908283130e6986283a5e3669d5361c2467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9343ea41b1342a754eaa978132f95bb47898e1fed3d15f73f39a090701ea8b->leave($__internal_dd9343ea41b1342a754eaa978132f95bb47898e1fed3d15f73f39a090701ea8b_prof);

        
        $__internal_0c1d1c7421b7f89a2be03dd37584fc908283130e6986283a5e3669d5361c2467->leave($__internal_0c1d1c7421b7f89a2be03dd37584fc908283130e6986283a5e3669d5361c2467_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11ccc8fbfbe19c45702ecdb1229c5eccd2144298be12c7aa7cc7d468badaefe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ccc8fbfbe19c45702ecdb1229c5eccd2144298be12c7aa7cc7d468badaefe4->enter($__internal_11ccc8fbfbe19c45702ecdb1229c5eccd2144298be12c7aa7cc7d468badaefe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb9b19824cd786d25a25df2226d5208d9fc65418479d5d26a61628e56e431e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9b19824cd786d25a25df2226d5208d9fc65418479d5d26a61628e56e431e16->enter($__internal_eb9b19824cd786d25a25df2226d5208d9fc65418479d5d26a61628e56e431e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eb9b19824cd786d25a25df2226d5208d9fc65418479d5d26a61628e56e431e16->leave($__internal_eb9b19824cd786d25a25df2226d5208d9fc65418479d5d26a61628e56e431e16_prof);

        
        $__internal_11ccc8fbfbe19c45702ecdb1229c5eccd2144298be12c7aa7cc7d468badaefe4->leave($__internal_11ccc8fbfbe19c45702ecdb1229c5eccd2144298be12c7aa7cc7d468badaefe4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_59883a7024689ac358ed222b338306bc4234303b6f937169c7676cbefd4820af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59883a7024689ac358ed222b338306bc4234303b6f937169c7676cbefd4820af->enter($__internal_59883a7024689ac358ed222b338306bc4234303b6f937169c7676cbefd4820af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b4051c390423c181a6712a2c9d40a458a5fa4b38a4e0f565a4318b1b1a3c22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4051c390423c181a6712a2c9d40a458a5fa4b38a4e0f565a4318b1b1a3c22d->enter($__internal_0b4051c390423c181a6712a2c9d40a458a5fa4b38a4e0f565a4318b1b1a3c22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0b4051c390423c181a6712a2c9d40a458a5fa4b38a4e0f565a4318b1b1a3c22d->leave($__internal_0b4051c390423c181a6712a2c9d40a458a5fa4b38a4e0f565a4318b1b1a3c22d_prof);

        
        $__internal_59883a7024689ac358ed222b338306bc4234303b6f937169c7676cbefd4820af->leave($__internal_59883a7024689ac358ed222b338306bc4234303b6f937169c7676cbefd4820af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
