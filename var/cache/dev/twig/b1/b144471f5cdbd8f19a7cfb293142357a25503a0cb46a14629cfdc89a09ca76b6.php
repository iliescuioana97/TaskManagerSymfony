<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4ea65e68b5169940fc83065440d1cebd8922215269a7b7c426010707c2a407c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecef6b23d62253511a870f9245b1434d9e059cb512ba54c220edfbf62cdc403a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecef6b23d62253511a870f9245b1434d9e059cb512ba54c220edfbf62cdc403a->enter($__internal_ecef6b23d62253511a870f9245b1434d9e059cb512ba54c220edfbf62cdc403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_cb3bea089e34d0f4499b20bb250f80c3ead3876b45049cf5a1853f02c73a6bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3bea089e34d0f4499b20bb250f80c3ead3876b45049cf5a1853f02c73a6bed->enter($__internal_cb3bea089e34d0f4499b20bb250f80c3ead3876b45049cf5a1853f02c73a6bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecef6b23d62253511a870f9245b1434d9e059cb512ba54c220edfbf62cdc403a->leave($__internal_ecef6b23d62253511a870f9245b1434d9e059cb512ba54c220edfbf62cdc403a_prof);

        
        $__internal_cb3bea089e34d0f4499b20bb250f80c3ead3876b45049cf5a1853f02c73a6bed->leave($__internal_cb3bea089e34d0f4499b20bb250f80c3ead3876b45049cf5a1853f02c73a6bed_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_70ea87795e0e1bed12b84ae70205b9f42d9329542a613af338573de2c499af87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ea87795e0e1bed12b84ae70205b9f42d9329542a613af338573de2c499af87->enter($__internal_70ea87795e0e1bed12b84ae70205b9f42d9329542a613af338573de2c499af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b6935b1718aec1236a837f1c1be4e01463948f0d83e6b465be427e411d19050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6935b1718aec1236a837f1c1be4e01463948f0d83e6b465be427e411d19050d->enter($__internal_b6935b1718aec1236a837f1c1be4e01463948f0d83e6b465be427e411d19050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b6935b1718aec1236a837f1c1be4e01463948f0d83e6b465be427e411d19050d->leave($__internal_b6935b1718aec1236a837f1c1be4e01463948f0d83e6b465be427e411d19050d_prof);

        
        $__internal_70ea87795e0e1bed12b84ae70205b9f42d9329542a613af338573de2c499af87->leave($__internal_70ea87795e0e1bed12b84ae70205b9f42d9329542a613af338573de2c499af87_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73f95edb9eaf518505a40bd24f127aea7fd5b9d358eabc06976247a089151fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f95edb9eaf518505a40bd24f127aea7fd5b9d358eabc06976247a089151fc5->enter($__internal_73f95edb9eaf518505a40bd24f127aea7fd5b9d358eabc06976247a089151fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a13e8caa9342d4659302a5e331fd8bfdf7009f4c9668a1310e295adaa39b32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a13e8caa9342d4659302a5e331fd8bfdf7009f4c9668a1310e295adaa39b32b->enter($__internal_1a13e8caa9342d4659302a5e331fd8bfdf7009f4c9668a1310e295adaa39b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1a13e8caa9342d4659302a5e331fd8bfdf7009f4c9668a1310e295adaa39b32b->leave($__internal_1a13e8caa9342d4659302a5e331fd8bfdf7009f4c9668a1310e295adaa39b32b_prof);

        
        $__internal_73f95edb9eaf518505a40bd24f127aea7fd5b9d358eabc06976247a089151fc5->leave($__internal_73f95edb9eaf518505a40bd24f127aea7fd5b9d358eabc06976247a089151fc5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
