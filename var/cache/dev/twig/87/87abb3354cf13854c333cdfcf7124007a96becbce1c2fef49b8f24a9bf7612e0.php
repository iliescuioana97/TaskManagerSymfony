<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee3202196f8f9655b9cfd903f0818e44bbe4e255a69718c3b1795eb486dfb2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aa91580b303a28294452a27f950656f8502f1b52ca4e662b2dff7996933be2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa91580b303a28294452a27f950656f8502f1b52ca4e662b2dff7996933be2e->enter($__internal_3aa91580b303a28294452a27f950656f8502f1b52ca4e662b2dff7996933be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1ab8ebbe3afa19255378f9dd63bad6922bbbd6e6be07a3cc47d99b32d0f25ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab8ebbe3afa19255378f9dd63bad6922bbbd6e6be07a3cc47d99b32d0f25ec9->enter($__internal_1ab8ebbe3afa19255378f9dd63bad6922bbbd6e6be07a3cc47d99b32d0f25ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa91580b303a28294452a27f950656f8502f1b52ca4e662b2dff7996933be2e->leave($__internal_3aa91580b303a28294452a27f950656f8502f1b52ca4e662b2dff7996933be2e_prof);

        
        $__internal_1ab8ebbe3afa19255378f9dd63bad6922bbbd6e6be07a3cc47d99b32d0f25ec9->leave($__internal_1ab8ebbe3afa19255378f9dd63bad6922bbbd6e6be07a3cc47d99b32d0f25ec9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e2156e452a691611316f947df4191a6361896959895761b301122044f06f692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2156e452a691611316f947df4191a6361896959895761b301122044f06f692->enter($__internal_4e2156e452a691611316f947df4191a6361896959895761b301122044f06f692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b903df2875c28bc200702ae864554266cae6fd08f8a868cdf2da9d324a2f200b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b903df2875c28bc200702ae864554266cae6fd08f8a868cdf2da9d324a2f200b->enter($__internal_b903df2875c28bc200702ae864554266cae6fd08f8a868cdf2da9d324a2f200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b903df2875c28bc200702ae864554266cae6fd08f8a868cdf2da9d324a2f200b->leave($__internal_b903df2875c28bc200702ae864554266cae6fd08f8a868cdf2da9d324a2f200b_prof);

        
        $__internal_4e2156e452a691611316f947df4191a6361896959895761b301122044f06f692->leave($__internal_4e2156e452a691611316f947df4191a6361896959895761b301122044f06f692_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afff0ae57ea790bf9f766abe5d254cf2cbbed3d56ef54c8a62e7117a6f6f09ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afff0ae57ea790bf9f766abe5d254cf2cbbed3d56ef54c8a62e7117a6f6f09ab->enter($__internal_afff0ae57ea790bf9f766abe5d254cf2cbbed3d56ef54c8a62e7117a6f6f09ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b535a88579f43375417ca0cb94f03785e949d707769fa7e53f14d57f6bcf730d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b535a88579f43375417ca0cb94f03785e949d707769fa7e53f14d57f6bcf730d->enter($__internal_b535a88579f43375417ca0cb94f03785e949d707769fa7e53f14d57f6bcf730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b535a88579f43375417ca0cb94f03785e949d707769fa7e53f14d57f6bcf730d->leave($__internal_b535a88579f43375417ca0cb94f03785e949d707769fa7e53f14d57f6bcf730d_prof);

        
        $__internal_afff0ae57ea790bf9f766abe5d254cf2cbbed3d56ef54c8a62e7117a6f6f09ab->leave($__internal_afff0ae57ea790bf9f766abe5d254cf2cbbed3d56ef54c8a62e7117a6f6f09ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f248603de57258a947bb52f5799ecd7989afa15d30dbd774e542204f1ee5bfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f248603de57258a947bb52f5799ecd7989afa15d30dbd774e542204f1ee5bfc7->enter($__internal_f248603de57258a947bb52f5799ecd7989afa15d30dbd774e542204f1ee5bfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64c3ca0209b0021c9b18eb2738b5ef307e1293415908a6a3c6cd40e6e04cf123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c3ca0209b0021c9b18eb2738b5ef307e1293415908a6a3c6cd40e6e04cf123->enter($__internal_64c3ca0209b0021c9b18eb2738b5ef307e1293415908a6a3c6cd40e6e04cf123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64c3ca0209b0021c9b18eb2738b5ef307e1293415908a6a3c6cd40e6e04cf123->leave($__internal_64c3ca0209b0021c9b18eb2738b5ef307e1293415908a6a3c6cd40e6e04cf123_prof);

        
        $__internal_f248603de57258a947bb52f5799ecd7989afa15d30dbd774e542204f1ee5bfc7->leave($__internal_f248603de57258a947bb52f5799ecd7989afa15d30dbd774e542204f1ee5bfc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
