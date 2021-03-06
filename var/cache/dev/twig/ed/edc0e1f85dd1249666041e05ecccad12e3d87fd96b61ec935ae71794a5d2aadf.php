<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_afaec2b3e8f370cb3a28a0f82f5edfeed3b8130b8f66a84c463ece3293611df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e4de8a197f45a40205ce4de28faf5479af81c570d025c2e442c687b782a4a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4de8a197f45a40205ce4de28faf5479af81c570d025c2e442c687b782a4a1f->enter($__internal_2e4de8a197f45a40205ce4de28faf5479af81c570d025c2e442c687b782a4a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1c09579f02e1d8abe000020b61dccabf58f4cec392a7791c73ffaaecf9799a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c09579f02e1d8abe000020b61dccabf58f4cec392a7791c73ffaaecf9799a69->enter($__internal_1c09579f02e1d8abe000020b61dccabf58f4cec392a7791c73ffaaecf9799a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4de8a197f45a40205ce4de28faf5479af81c570d025c2e442c687b782a4a1f->leave($__internal_2e4de8a197f45a40205ce4de28faf5479af81c570d025c2e442c687b782a4a1f_prof);

        
        $__internal_1c09579f02e1d8abe000020b61dccabf58f4cec392a7791c73ffaaecf9799a69->leave($__internal_1c09579f02e1d8abe000020b61dccabf58f4cec392a7791c73ffaaecf9799a69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ac0862f73e6fb7dc42f310728329ffc6fe90c31559169ebe9bf74eafc841f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac0862f73e6fb7dc42f310728329ffc6fe90c31559169ebe9bf74eafc841f64->enter($__internal_5ac0862f73e6fb7dc42f310728329ffc6fe90c31559169ebe9bf74eafc841f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89b95f8bd83d3da21063e0abb7378d501acf3291ee47a71cedec2325f2313d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b95f8bd83d3da21063e0abb7378d501acf3291ee47a71cedec2325f2313d9a->enter($__internal_89b95f8bd83d3da21063e0abb7378d501acf3291ee47a71cedec2325f2313d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_89b95f8bd83d3da21063e0abb7378d501acf3291ee47a71cedec2325f2313d9a->leave($__internal_89b95f8bd83d3da21063e0abb7378d501acf3291ee47a71cedec2325f2313d9a_prof);

        
        $__internal_5ac0862f73e6fb7dc42f310728329ffc6fe90c31559169ebe9bf74eafc841f64->leave($__internal_5ac0862f73e6fb7dc42f310728329ffc6fe90c31559169ebe9bf74eafc841f64_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd626fe21ce9d83927806d49f500bfcfc5c757267074b9f51e2ed68c73ba48e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd626fe21ce9d83927806d49f500bfcfc5c757267074b9f51e2ed68c73ba48e8->enter($__internal_fd626fe21ce9d83927806d49f500bfcfc5c757267074b9f51e2ed68c73ba48e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dba33d1aa1fc3192e70a174312979eb8a802fc471a5aec77f3a28ea94d9347d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dba33d1aa1fc3192e70a174312979eb8a802fc471a5aec77f3a28ea94d9347d->enter($__internal_5dba33d1aa1fc3192e70a174312979eb8a802fc471a5aec77f3a28ea94d9347d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5dba33d1aa1fc3192e70a174312979eb8a802fc471a5aec77f3a28ea94d9347d->leave($__internal_5dba33d1aa1fc3192e70a174312979eb8a802fc471a5aec77f3a28ea94d9347d_prof);

        
        $__internal_fd626fe21ce9d83927806d49f500bfcfc5c757267074b9f51e2ed68c73ba48e8->leave($__internal_fd626fe21ce9d83927806d49f500bfcfc5c757267074b9f51e2ed68c73ba48e8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ab3a7cd2dc9f1ca62af20898a2e9c888e8b53b67d65ed73e665c196b15ef9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ab3a7cd2dc9f1ca62af20898a2e9c888e8b53b67d65ed73e665c196b15ef9b->enter($__internal_f6ab3a7cd2dc9f1ca62af20898a2e9c888e8b53b67d65ed73e665c196b15ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c187063966773e56dcc0d6f214e5b841c1c6c91e4c8abbc1d3de8e3594948e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c187063966773e56dcc0d6f214e5b841c1c6c91e4c8abbc1d3de8e3594948e90->enter($__internal_c187063966773e56dcc0d6f214e5b841c1c6c91e4c8abbc1d3de8e3594948e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c187063966773e56dcc0d6f214e5b841c1c6c91e4c8abbc1d3de8e3594948e90->leave($__internal_c187063966773e56dcc0d6f214e5b841c1c6c91e4c8abbc1d3de8e3594948e90_prof);

        
        $__internal_f6ab3a7cd2dc9f1ca62af20898a2e9c888e8b53b67d65ed73e665c196b15ef9b->leave($__internal_f6ab3a7cd2dc9f1ca62af20898a2e9c888e8b53b67d65ed73e665c196b15ef9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
