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
        $__internal_deac3ba48e0793d23187137103c371b3fab763bd02423827aaef4b1fcab9f1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deac3ba48e0793d23187137103c371b3fab763bd02423827aaef4b1fcab9f1cf->enter($__internal_deac3ba48e0793d23187137103c371b3fab763bd02423827aaef4b1fcab9f1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_359b616b4e293c4adb9ac0481b667d7c732ad33186d0ed774e6b946e6ae6ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b616b4e293c4adb9ac0481b667d7c732ad33186d0ed774e6b946e6ae6ebf7->enter($__internal_359b616b4e293c4adb9ac0481b667d7c732ad33186d0ed774e6b946e6ae6ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deac3ba48e0793d23187137103c371b3fab763bd02423827aaef4b1fcab9f1cf->leave($__internal_deac3ba48e0793d23187137103c371b3fab763bd02423827aaef4b1fcab9f1cf_prof);

        
        $__internal_359b616b4e293c4adb9ac0481b667d7c732ad33186d0ed774e6b946e6ae6ebf7->leave($__internal_359b616b4e293c4adb9ac0481b667d7c732ad33186d0ed774e6b946e6ae6ebf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e8ad9773ed102ce5f729e74af78e7b81356bd938b5691778c73a47c701cb576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8ad9773ed102ce5f729e74af78e7b81356bd938b5691778c73a47c701cb576->enter($__internal_2e8ad9773ed102ce5f729e74af78e7b81356bd938b5691778c73a47c701cb576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f9a2bffd3d03a1196f6e961f572125e8660567d806d78d67134f241c9b1685c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9a2bffd3d03a1196f6e961f572125e8660567d806d78d67134f241c9b1685c->enter($__internal_7f9a2bffd3d03a1196f6e961f572125e8660567d806d78d67134f241c9b1685c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7f9a2bffd3d03a1196f6e961f572125e8660567d806d78d67134f241c9b1685c->leave($__internal_7f9a2bffd3d03a1196f6e961f572125e8660567d806d78d67134f241c9b1685c_prof);

        
        $__internal_2e8ad9773ed102ce5f729e74af78e7b81356bd938b5691778c73a47c701cb576->leave($__internal_2e8ad9773ed102ce5f729e74af78e7b81356bd938b5691778c73a47c701cb576_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_75fd76ebe49884e5759c270dd6206796596c579a300a10999426ca90ad61f1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fd76ebe49884e5759c270dd6206796596c579a300a10999426ca90ad61f1a4->enter($__internal_75fd76ebe49884e5759c270dd6206796596c579a300a10999426ca90ad61f1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dd55cbac95bc39cb0b656696b3ea99b7f878c8d9f74fe8b69ef1495c390a48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd55cbac95bc39cb0b656696b3ea99b7f878c8d9f74fe8b69ef1495c390a48d->enter($__internal_0dd55cbac95bc39cb0b656696b3ea99b7f878c8d9f74fe8b69ef1495c390a48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dd55cbac95bc39cb0b656696b3ea99b7f878c8d9f74fe8b69ef1495c390a48d->leave($__internal_0dd55cbac95bc39cb0b656696b3ea99b7f878c8d9f74fe8b69ef1495c390a48d_prof);

        
        $__internal_75fd76ebe49884e5759c270dd6206796596c579a300a10999426ca90ad61f1a4->leave($__internal_75fd76ebe49884e5759c270dd6206796596c579a300a10999426ca90ad61f1a4_prof);

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
