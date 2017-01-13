<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a0c39d2254ba242cc1550b2b02c1f29a9ebf483297e12843c7dee78c9eb30477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5cb5efed25b03f059baeae407b577ac284ecfba4165a82376982b728ecb7c2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb5efed25b03f059baeae407b577ac284ecfba4165a82376982b728ecb7c2b6->enter($__internal_5cb5efed25b03f059baeae407b577ac284ecfba4165a82376982b728ecb7c2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ebcf3633e31fd648124f17896b9ebf0d771e43d4eb1c3eea04c4cde21dd61f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebcf3633e31fd648124f17896b9ebf0d771e43d4eb1c3eea04c4cde21dd61f2->enter($__internal_3ebcf3633e31fd648124f17896b9ebf0d771e43d4eb1c3eea04c4cde21dd61f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb5efed25b03f059baeae407b577ac284ecfba4165a82376982b728ecb7c2b6->leave($__internal_5cb5efed25b03f059baeae407b577ac284ecfba4165a82376982b728ecb7c2b6_prof);

        
        $__internal_3ebcf3633e31fd648124f17896b9ebf0d771e43d4eb1c3eea04c4cde21dd61f2->leave($__internal_3ebcf3633e31fd648124f17896b9ebf0d771e43d4eb1c3eea04c4cde21dd61f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5c12d9e5bff1081d7280b95c28afad83f99cbbc2f82ab582233d89c8b6329e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c12d9e5bff1081d7280b95c28afad83f99cbbc2f82ab582233d89c8b6329e0->enter($__internal_c5c12d9e5bff1081d7280b95c28afad83f99cbbc2f82ab582233d89c8b6329e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bbb99ad96548859589a211e596cb509fcd0d5e4489f0beff9c8a6fd3cdd0f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbb99ad96548859589a211e596cb509fcd0d5e4489f0beff9c8a6fd3cdd0f70->enter($__internal_2bbb99ad96548859589a211e596cb509fcd0d5e4489f0beff9c8a6fd3cdd0f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2bbb99ad96548859589a211e596cb509fcd0d5e4489f0beff9c8a6fd3cdd0f70->leave($__internal_2bbb99ad96548859589a211e596cb509fcd0d5e4489f0beff9c8a6fd3cdd0f70_prof);

        
        $__internal_c5c12d9e5bff1081d7280b95c28afad83f99cbbc2f82ab582233d89c8b6329e0->leave($__internal_c5c12d9e5bff1081d7280b95c28afad83f99cbbc2f82ab582233d89c8b6329e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f4f4f7a02dd643f813421d28a81524ce9465eee60e8a2f0cba7a3defee06425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4f4f7a02dd643f813421d28a81524ce9465eee60e8a2f0cba7a3defee06425->enter($__internal_8f4f4f7a02dd643f813421d28a81524ce9465eee60e8a2f0cba7a3defee06425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77cca295ca3725abb26b6dcd6064f418266f0165c916e53a6072b930692c1f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cca295ca3725abb26b6dcd6064f418266f0165c916e53a6072b930692c1f15->enter($__internal_77cca295ca3725abb26b6dcd6064f418266f0165c916e53a6072b930692c1f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_77cca295ca3725abb26b6dcd6064f418266f0165c916e53a6072b930692c1f15->leave($__internal_77cca295ca3725abb26b6dcd6064f418266f0165c916e53a6072b930692c1f15_prof);

        
        $__internal_8f4f4f7a02dd643f813421d28a81524ce9465eee60e8a2f0cba7a3defee06425->leave($__internal_8f4f4f7a02dd643f813421d28a81524ce9465eee60e8a2f0cba7a3defee06425_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bdc3373b24ab559715abd67066a2390e0812ebd9424f87d6d2ddae4bcfb1dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bdc3373b24ab559715abd67066a2390e0812ebd9424f87d6d2ddae4bcfb1dbd->enter($__internal_5bdc3373b24ab559715abd67066a2390e0812ebd9424f87d6d2ddae4bcfb1dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_907aa7b881c37733102fef568c5222b598b1671dd6650583c7066242597da53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907aa7b881c37733102fef568c5222b598b1671dd6650583c7066242597da53f->enter($__internal_907aa7b881c37733102fef568c5222b598b1671dd6650583c7066242597da53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_907aa7b881c37733102fef568c5222b598b1671dd6650583c7066242597da53f->leave($__internal_907aa7b881c37733102fef568c5222b598b1671dd6650583c7066242597da53f_prof);

        
        $__internal_5bdc3373b24ab559715abd67066a2390e0812ebd9424f87d6d2ddae4bcfb1dbd->leave($__internal_5bdc3373b24ab559715abd67066a2390e0812ebd9424f87d6d2ddae4bcfb1dbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
