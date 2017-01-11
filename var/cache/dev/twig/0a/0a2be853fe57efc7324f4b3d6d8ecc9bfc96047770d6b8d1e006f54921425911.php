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
        $__internal_140b02da702364d88fd610a9705afbed64c3fe4aadf2bd374216f80c1547c812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140b02da702364d88fd610a9705afbed64c3fe4aadf2bd374216f80c1547c812->enter($__internal_140b02da702364d88fd610a9705afbed64c3fe4aadf2bd374216f80c1547c812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9368f78572ecef1aa5571caa250d0893843c4dda7f96b1b70677806762da5169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9368f78572ecef1aa5571caa250d0893843c4dda7f96b1b70677806762da5169->enter($__internal_9368f78572ecef1aa5571caa250d0893843c4dda7f96b1b70677806762da5169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140b02da702364d88fd610a9705afbed64c3fe4aadf2bd374216f80c1547c812->leave($__internal_140b02da702364d88fd610a9705afbed64c3fe4aadf2bd374216f80c1547c812_prof);

        
        $__internal_9368f78572ecef1aa5571caa250d0893843c4dda7f96b1b70677806762da5169->leave($__internal_9368f78572ecef1aa5571caa250d0893843c4dda7f96b1b70677806762da5169_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed40dacd8b60a5e3def20604f94314705e1f689756876fa2fa69e871a2feb7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed40dacd8b60a5e3def20604f94314705e1f689756876fa2fa69e871a2feb7ee->enter($__internal_ed40dacd8b60a5e3def20604f94314705e1f689756876fa2fa69e871a2feb7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_35d2e8e60be812649064381e205847dd80d539e4731aad6095884d2f41fb2592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d2e8e60be812649064381e205847dd80d539e4731aad6095884d2f41fb2592->enter($__internal_35d2e8e60be812649064381e205847dd80d539e4731aad6095884d2f41fb2592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35d2e8e60be812649064381e205847dd80d539e4731aad6095884d2f41fb2592->leave($__internal_35d2e8e60be812649064381e205847dd80d539e4731aad6095884d2f41fb2592_prof);

        
        $__internal_ed40dacd8b60a5e3def20604f94314705e1f689756876fa2fa69e871a2feb7ee->leave($__internal_ed40dacd8b60a5e3def20604f94314705e1f689756876fa2fa69e871a2feb7ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cae65f4f68d9072990b93d6109c962f65fa50c0c447124684570b861bfa416a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae65f4f68d9072990b93d6109c962f65fa50c0c447124684570b861bfa416a2->enter($__internal_cae65f4f68d9072990b93d6109c962f65fa50c0c447124684570b861bfa416a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b6bc990d2c4da55ef202da9e949d188790f800b221c2d61d3d8557fc2bfbb850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bc990d2c4da55ef202da9e949d188790f800b221c2d61d3d8557fc2bfbb850->enter($__internal_b6bc990d2c4da55ef202da9e949d188790f800b221c2d61d3d8557fc2bfbb850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6bc990d2c4da55ef202da9e949d188790f800b221c2d61d3d8557fc2bfbb850->leave($__internal_b6bc990d2c4da55ef202da9e949d188790f800b221c2d61d3d8557fc2bfbb850_prof);

        
        $__internal_cae65f4f68d9072990b93d6109c962f65fa50c0c447124684570b861bfa416a2->leave($__internal_cae65f4f68d9072990b93d6109c962f65fa50c0c447124684570b861bfa416a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cded6209488e104fc3a8fa489a602a5d9e79757c3e540876f515ae3436cc9310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cded6209488e104fc3a8fa489a602a5d9e79757c3e540876f515ae3436cc9310->enter($__internal_cded6209488e104fc3a8fa489a602a5d9e79757c3e540876f515ae3436cc9310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_018e75f5a9a803649457e6fc9333f5344221ce2e70b391fc293d91f5369cdeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018e75f5a9a803649457e6fc9333f5344221ce2e70b391fc293d91f5369cdeef->enter($__internal_018e75f5a9a803649457e6fc9333f5344221ce2e70b391fc293d91f5369cdeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_018e75f5a9a803649457e6fc9333f5344221ce2e70b391fc293d91f5369cdeef->leave($__internal_018e75f5a9a803649457e6fc9333f5344221ce2e70b391fc293d91f5369cdeef_prof);

        
        $__internal_cded6209488e104fc3a8fa489a602a5d9e79757c3e540876f515ae3436cc9310->leave($__internal_cded6209488e104fc3a8fa489a602a5d9e79757c3e540876f515ae3436cc9310_prof);

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
