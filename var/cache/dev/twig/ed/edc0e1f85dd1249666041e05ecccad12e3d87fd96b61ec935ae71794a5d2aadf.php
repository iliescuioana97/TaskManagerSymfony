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
        $__internal_fd7020be9cd4cce0bc4b31e41ddd7cb76e2ffcbd870d90a98169017509d5d749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7020be9cd4cce0bc4b31e41ddd7cb76e2ffcbd870d90a98169017509d5d749->enter($__internal_fd7020be9cd4cce0bc4b31e41ddd7cb76e2ffcbd870d90a98169017509d5d749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e4bc1125fb826d13d7b0614881f54255969aadc5ab9cfa4d13de51e988f38ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bc1125fb826d13d7b0614881f54255969aadc5ab9cfa4d13de51e988f38ed1->enter($__internal_e4bc1125fb826d13d7b0614881f54255969aadc5ab9cfa4d13de51e988f38ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7020be9cd4cce0bc4b31e41ddd7cb76e2ffcbd870d90a98169017509d5d749->leave($__internal_fd7020be9cd4cce0bc4b31e41ddd7cb76e2ffcbd870d90a98169017509d5d749_prof);

        
        $__internal_e4bc1125fb826d13d7b0614881f54255969aadc5ab9cfa4d13de51e988f38ed1->leave($__internal_e4bc1125fb826d13d7b0614881f54255969aadc5ab9cfa4d13de51e988f38ed1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bc8676575a7d2992a3d4aa33718389f119b2c86b3911e5adcb329872b2e6a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc8676575a7d2992a3d4aa33718389f119b2c86b3911e5adcb329872b2e6a74->enter($__internal_3bc8676575a7d2992a3d4aa33718389f119b2c86b3911e5adcb329872b2e6a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17bd9e0892431d4da2e57a093e655dfc2def8a9c79dee39551b0b10b5280e80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bd9e0892431d4da2e57a093e655dfc2def8a9c79dee39551b0b10b5280e80a->enter($__internal_17bd9e0892431d4da2e57a093e655dfc2def8a9c79dee39551b0b10b5280e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_17bd9e0892431d4da2e57a093e655dfc2def8a9c79dee39551b0b10b5280e80a->leave($__internal_17bd9e0892431d4da2e57a093e655dfc2def8a9c79dee39551b0b10b5280e80a_prof);

        
        $__internal_3bc8676575a7d2992a3d4aa33718389f119b2c86b3911e5adcb329872b2e6a74->leave($__internal_3bc8676575a7d2992a3d4aa33718389f119b2c86b3911e5adcb329872b2e6a74_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3582ac3083015bfe3bf8f4d1733771ecb4d2eef4e5e5641f4bee872e37ef4280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3582ac3083015bfe3bf8f4d1733771ecb4d2eef4e5e5641f4bee872e37ef4280->enter($__internal_3582ac3083015bfe3bf8f4d1733771ecb4d2eef4e5e5641f4bee872e37ef4280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de1179a50a09e74d9c52cf6dd255b47b1aca2888508b7bb8271a3fcf7e1544cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1179a50a09e74d9c52cf6dd255b47b1aca2888508b7bb8271a3fcf7e1544cd->enter($__internal_de1179a50a09e74d9c52cf6dd255b47b1aca2888508b7bb8271a3fcf7e1544cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de1179a50a09e74d9c52cf6dd255b47b1aca2888508b7bb8271a3fcf7e1544cd->leave($__internal_de1179a50a09e74d9c52cf6dd255b47b1aca2888508b7bb8271a3fcf7e1544cd_prof);

        
        $__internal_3582ac3083015bfe3bf8f4d1733771ecb4d2eef4e5e5641f4bee872e37ef4280->leave($__internal_3582ac3083015bfe3bf8f4d1733771ecb4d2eef4e5e5641f4bee872e37ef4280_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_14edc53e3c039f7dd73844f4d87db312d6410e1fe2688ef52f7efd56486fd0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14edc53e3c039f7dd73844f4d87db312d6410e1fe2688ef52f7efd56486fd0dd->enter($__internal_14edc53e3c039f7dd73844f4d87db312d6410e1fe2688ef52f7efd56486fd0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab895275902478de6e5e0f8e70bf7e1ca7623d50c31173e85912fc819aee4211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab895275902478de6e5e0f8e70bf7e1ca7623d50c31173e85912fc819aee4211->enter($__internal_ab895275902478de6e5e0f8e70bf7e1ca7623d50c31173e85912fc819aee4211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab895275902478de6e5e0f8e70bf7e1ca7623d50c31173e85912fc819aee4211->leave($__internal_ab895275902478de6e5e0f8e70bf7e1ca7623d50c31173e85912fc819aee4211_prof);

        
        $__internal_14edc53e3c039f7dd73844f4d87db312d6410e1fe2688ef52f7efd56486fd0dd->leave($__internal_14edc53e3c039f7dd73844f4d87db312d6410e1fe2688ef52f7efd56486fd0dd_prof);

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
