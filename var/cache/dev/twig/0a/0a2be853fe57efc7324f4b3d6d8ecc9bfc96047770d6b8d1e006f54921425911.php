<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
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
        $__internal_891aa90e0a918c405834b79208bd62b94158a0fedad491e52a9b66cf7877776f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891aa90e0a918c405834b79208bd62b94158a0fedad491e52a9b66cf7877776f->enter($__internal_891aa90e0a918c405834b79208bd62b94158a0fedad491e52a9b66cf7877776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_470a9816f71d45af85d260808d1b7f3ee17f044f0f6dca494a540ced45e63386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470a9816f71d45af85d260808d1b7f3ee17f044f0f6dca494a540ced45e63386->enter($__internal_470a9816f71d45af85d260808d1b7f3ee17f044f0f6dca494a540ced45e63386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891aa90e0a918c405834b79208bd62b94158a0fedad491e52a9b66cf7877776f->leave($__internal_891aa90e0a918c405834b79208bd62b94158a0fedad491e52a9b66cf7877776f_prof);

        
        $__internal_470a9816f71d45af85d260808d1b7f3ee17f044f0f6dca494a540ced45e63386->leave($__internal_470a9816f71d45af85d260808d1b7f3ee17f044f0f6dca494a540ced45e63386_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30e67d5c328bd13b43a59278de0b8378a682972d3080aa81aa9754210db78ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e67d5c328bd13b43a59278de0b8378a682972d3080aa81aa9754210db78ad1->enter($__internal_30e67d5c328bd13b43a59278de0b8378a682972d3080aa81aa9754210db78ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_38bc3fa404faa6ba4860915df2108cf2e3c51ba7251bc27f41ef59ec42cc87fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bc3fa404faa6ba4860915df2108cf2e3c51ba7251bc27f41ef59ec42cc87fb->enter($__internal_38bc3fa404faa6ba4860915df2108cf2e3c51ba7251bc27f41ef59ec42cc87fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38bc3fa404faa6ba4860915df2108cf2e3c51ba7251bc27f41ef59ec42cc87fb->leave($__internal_38bc3fa404faa6ba4860915df2108cf2e3c51ba7251bc27f41ef59ec42cc87fb_prof);

        
        $__internal_30e67d5c328bd13b43a59278de0b8378a682972d3080aa81aa9754210db78ad1->leave($__internal_30e67d5c328bd13b43a59278de0b8378a682972d3080aa81aa9754210db78ad1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc3dd788b0a84a1719e1fe509731d42a499759e86c97cd6b45b007ed53cabfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3dd788b0a84a1719e1fe509731d42a499759e86c97cd6b45b007ed53cabfc5->enter($__internal_cc3dd788b0a84a1719e1fe509731d42a499759e86c97cd6b45b007ed53cabfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86f4f04e13c92bb688634d69c8e9cac75c27a533f9dc04e94a8b5e052787dede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f4f04e13c92bb688634d69c8e9cac75c27a533f9dc04e94a8b5e052787dede->enter($__internal_86f4f04e13c92bb688634d69c8e9cac75c27a533f9dc04e94a8b5e052787dede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86f4f04e13c92bb688634d69c8e9cac75c27a533f9dc04e94a8b5e052787dede->leave($__internal_86f4f04e13c92bb688634d69c8e9cac75c27a533f9dc04e94a8b5e052787dede_prof);

        
        $__internal_cc3dd788b0a84a1719e1fe509731d42a499759e86c97cd6b45b007ed53cabfc5->leave($__internal_cc3dd788b0a84a1719e1fe509731d42a499759e86c97cd6b45b007ed53cabfc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_445edeaba48e9ade63711182865e71756dc1a0cfd955aca161d58a693f9aeadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445edeaba48e9ade63711182865e71756dc1a0cfd955aca161d58a693f9aeadb->enter($__internal_445edeaba48e9ade63711182865e71756dc1a0cfd955aca161d58a693f9aeadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_502ab9e573fdf1810af1b2912ab4c278df7965bd1871945861578a30de60ea3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502ab9e573fdf1810af1b2912ab4c278df7965bd1871945861578a30de60ea3e->enter($__internal_502ab9e573fdf1810af1b2912ab4c278df7965bd1871945861578a30de60ea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_502ab9e573fdf1810af1b2912ab4c278df7965bd1871945861578a30de60ea3e->leave($__internal_502ab9e573fdf1810af1b2912ab4c278df7965bd1871945861578a30de60ea3e_prof);

        
        $__internal_445edeaba48e9ade63711182865e71756dc1a0cfd955aca161d58a693f9aeadb->leave($__internal_445edeaba48e9ade63711182865e71756dc1a0cfd955aca161d58a693f9aeadb_prof);

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
