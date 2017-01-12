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
        $__internal_1753d7fa4b30891ccc2ed6c2324f78d2b4ff47eeb72719a67ba4d4bdd488ab9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1753d7fa4b30891ccc2ed6c2324f78d2b4ff47eeb72719a67ba4d4bdd488ab9f->enter($__internal_1753d7fa4b30891ccc2ed6c2324f78d2b4ff47eeb72719a67ba4d4bdd488ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_923d39a95394735daf824089923733be17e83b1b59e4bd74624968ad7eb1847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923d39a95394735daf824089923733be17e83b1b59e4bd74624968ad7eb1847e->enter($__internal_923d39a95394735daf824089923733be17e83b1b59e4bd74624968ad7eb1847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1753d7fa4b30891ccc2ed6c2324f78d2b4ff47eeb72719a67ba4d4bdd488ab9f->leave($__internal_1753d7fa4b30891ccc2ed6c2324f78d2b4ff47eeb72719a67ba4d4bdd488ab9f_prof);

        
        $__internal_923d39a95394735daf824089923733be17e83b1b59e4bd74624968ad7eb1847e->leave($__internal_923d39a95394735daf824089923733be17e83b1b59e4bd74624968ad7eb1847e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f91ec860ee93f0d61d31cc81fd463b6e2dba65c67f2d5d7695c942336d73d57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91ec860ee93f0d61d31cc81fd463b6e2dba65c67f2d5d7695c942336d73d57d->enter($__internal_f91ec860ee93f0d61d31cc81fd463b6e2dba65c67f2d5d7695c942336d73d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8d8c15d59cd19a561c2add52d5b6a9e0c32ec35d6a4aa6c7a195a405cb0e5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d8c15d59cd19a561c2add52d5b6a9e0c32ec35d6a4aa6c7a195a405cb0e5ec->enter($__internal_b8d8c15d59cd19a561c2add52d5b6a9e0c32ec35d6a4aa6c7a195a405cb0e5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b8d8c15d59cd19a561c2add52d5b6a9e0c32ec35d6a4aa6c7a195a405cb0e5ec->leave($__internal_b8d8c15d59cd19a561c2add52d5b6a9e0c32ec35d6a4aa6c7a195a405cb0e5ec_prof);

        
        $__internal_f91ec860ee93f0d61d31cc81fd463b6e2dba65c67f2d5d7695c942336d73d57d->leave($__internal_f91ec860ee93f0d61d31cc81fd463b6e2dba65c67f2d5d7695c942336d73d57d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0994ee63ec121e10106866840d32ffa55f9a8a9943b5f967985acbfa14e916c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0994ee63ec121e10106866840d32ffa55f9a8a9943b5f967985acbfa14e916c1->enter($__internal_0994ee63ec121e10106866840d32ffa55f9a8a9943b5f967985acbfa14e916c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3612a573791ee80304dafb155d0aa6521a4cbacfac1b7974afbd63a7c1101a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3612a573791ee80304dafb155d0aa6521a4cbacfac1b7974afbd63a7c1101a31->enter($__internal_3612a573791ee80304dafb155d0aa6521a4cbacfac1b7974afbd63a7c1101a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3612a573791ee80304dafb155d0aa6521a4cbacfac1b7974afbd63a7c1101a31->leave($__internal_3612a573791ee80304dafb155d0aa6521a4cbacfac1b7974afbd63a7c1101a31_prof);

        
        $__internal_0994ee63ec121e10106866840d32ffa55f9a8a9943b5f967985acbfa14e916c1->leave($__internal_0994ee63ec121e10106866840d32ffa55f9a8a9943b5f967985acbfa14e916c1_prof);

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
