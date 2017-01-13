<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d5b17cba9f0bd9ae9bf7b8618c290b049c365eece78811cd2687152c11455116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a11379a755d777b65dba2c550f736e7d288197181c307928b4b1e591183ff5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11379a755d777b65dba2c550f736e7d288197181c307928b4b1e591183ff5c4->enter($__internal_a11379a755d777b65dba2c550f736e7d288197181c307928b4b1e591183ff5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7443fddc1b2531e7c54706c4eca431ae631069756b472e947b3966fd350c43fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7443fddc1b2531e7c54706c4eca431ae631069756b472e947b3966fd350c43fc->enter($__internal_7443fddc1b2531e7c54706c4eca431ae631069756b472e947b3966fd350c43fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11379a755d777b65dba2c550f736e7d288197181c307928b4b1e591183ff5c4->leave($__internal_a11379a755d777b65dba2c550f736e7d288197181c307928b4b1e591183ff5c4_prof);

        
        $__internal_7443fddc1b2531e7c54706c4eca431ae631069756b472e947b3966fd350c43fc->leave($__internal_7443fddc1b2531e7c54706c4eca431ae631069756b472e947b3966fd350c43fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd23ef07ffd60f57c9ced41da1213d59dbd597c5608d8b4beb602784001bfbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd23ef07ffd60f57c9ced41da1213d59dbd597c5608d8b4beb602784001bfbf5->enter($__internal_cd23ef07ffd60f57c9ced41da1213d59dbd597c5608d8b4beb602784001bfbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba01856d60b8e81e304d164c76a2cbd6404443f022fa852cefb2c0d69111deee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba01856d60b8e81e304d164c76a2cbd6404443f022fa852cefb2c0d69111deee->enter($__internal_ba01856d60b8e81e304d164c76a2cbd6404443f022fa852cefb2c0d69111deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba01856d60b8e81e304d164c76a2cbd6404443f022fa852cefb2c0d69111deee->leave($__internal_ba01856d60b8e81e304d164c76a2cbd6404443f022fa852cefb2c0d69111deee_prof);

        
        $__internal_cd23ef07ffd60f57c9ced41da1213d59dbd597c5608d8b4beb602784001bfbf5->leave($__internal_cd23ef07ffd60f57c9ced41da1213d59dbd597c5608d8b4beb602784001bfbf5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_edf088221f34db5bea661bb26d6dad711639ed91ca5a2c26be97cad0bb7befe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf088221f34db5bea661bb26d6dad711639ed91ca5a2c26be97cad0bb7befe1->enter($__internal_edf088221f34db5bea661bb26d6dad711639ed91ca5a2c26be97cad0bb7befe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_456416019f3535533fde89ec2790061a2353ed430a2a575d6f2dc188058318b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456416019f3535533fde89ec2790061a2353ed430a2a575d6f2dc188058318b4->enter($__internal_456416019f3535533fde89ec2790061a2353ed430a2a575d6f2dc188058318b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_456416019f3535533fde89ec2790061a2353ed430a2a575d6f2dc188058318b4->leave($__internal_456416019f3535533fde89ec2790061a2353ed430a2a575d6f2dc188058318b4_prof);

        
        $__internal_edf088221f34db5bea661bb26d6dad711639ed91ca5a2c26be97cad0bb7befe1->leave($__internal_edf088221f34db5bea661bb26d6dad711639ed91ca5a2c26be97cad0bb7befe1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
