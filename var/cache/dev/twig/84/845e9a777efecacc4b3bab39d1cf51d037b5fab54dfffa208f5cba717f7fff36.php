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
        $__internal_7288c805e2e3bc27bb8460e3b4415a11320a462e8626e1916564b7d0e05170ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7288c805e2e3bc27bb8460e3b4415a11320a462e8626e1916564b7d0e05170ef->enter($__internal_7288c805e2e3bc27bb8460e3b4415a11320a462e8626e1916564b7d0e05170ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_426a197786ac0f59045de6d9940d8282e22fb814189865dd587c1c2d18d95d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426a197786ac0f59045de6d9940d8282e22fb814189865dd587c1c2d18d95d51->enter($__internal_426a197786ac0f59045de6d9940d8282e22fb814189865dd587c1c2d18d95d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7288c805e2e3bc27bb8460e3b4415a11320a462e8626e1916564b7d0e05170ef->leave($__internal_7288c805e2e3bc27bb8460e3b4415a11320a462e8626e1916564b7d0e05170ef_prof);

        
        $__internal_426a197786ac0f59045de6d9940d8282e22fb814189865dd587c1c2d18d95d51->leave($__internal_426a197786ac0f59045de6d9940d8282e22fb814189865dd587c1c2d18d95d51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffc66003ad241e66c377a2b17fb43a4b0d59cf248c22c7ea886458f3650501d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc66003ad241e66c377a2b17fb43a4b0d59cf248c22c7ea886458f3650501d2->enter($__internal_ffc66003ad241e66c377a2b17fb43a4b0d59cf248c22c7ea886458f3650501d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_defa31fca64b028bea29d7dc2ed7e3a360a9f654807f4f96ea67e17fd3ca8328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defa31fca64b028bea29d7dc2ed7e3a360a9f654807f4f96ea67e17fd3ca8328->enter($__internal_defa31fca64b028bea29d7dc2ed7e3a360a9f654807f4f96ea67e17fd3ca8328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_defa31fca64b028bea29d7dc2ed7e3a360a9f654807f4f96ea67e17fd3ca8328->leave($__internal_defa31fca64b028bea29d7dc2ed7e3a360a9f654807f4f96ea67e17fd3ca8328_prof);

        
        $__internal_ffc66003ad241e66c377a2b17fb43a4b0d59cf248c22c7ea886458f3650501d2->leave($__internal_ffc66003ad241e66c377a2b17fb43a4b0d59cf248c22c7ea886458f3650501d2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_326b05ee8b30adc5e8a447fe479090469749c85555e467d5df876227d8f80ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326b05ee8b30adc5e8a447fe479090469749c85555e467d5df876227d8f80ff2->enter($__internal_326b05ee8b30adc5e8a447fe479090469749c85555e467d5df876227d8f80ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b73b20c7a754b62e2e115388bc6a48efa204a3a8da16bfffbb8433c7fb491445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73b20c7a754b62e2e115388bc6a48efa204a3a8da16bfffbb8433c7fb491445->enter($__internal_b73b20c7a754b62e2e115388bc6a48efa204a3a8da16bfffbb8433c7fb491445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b73b20c7a754b62e2e115388bc6a48efa204a3a8da16bfffbb8433c7fb491445->leave($__internal_b73b20c7a754b62e2e115388bc6a48efa204a3a8da16bfffbb8433c7fb491445_prof);

        
        $__internal_326b05ee8b30adc5e8a447fe479090469749c85555e467d5df876227d8f80ff2->leave($__internal_326b05ee8b30adc5e8a447fe479090469749c85555e467d5df876227d8f80ff2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d3e768d153daf2aa58dac9d051dea6f74a58ec51d1a3aa566e99f8b2024666f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3e768d153daf2aa58dac9d051dea6f74a58ec51d1a3aa566e99f8b2024666f->enter($__internal_1d3e768d153daf2aa58dac9d051dea6f74a58ec51d1a3aa566e99f8b2024666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8bb88d6d8662697973aab4af5ce6b7fd4737c0f7709ede5c8266c52108c52f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb88d6d8662697973aab4af5ce6b7fd4737c0f7709ede5c8266c52108c52f0c->enter($__internal_8bb88d6d8662697973aab4af5ce6b7fd4737c0f7709ede5c8266c52108c52f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8bb88d6d8662697973aab4af5ce6b7fd4737c0f7709ede5c8266c52108c52f0c->leave($__internal_8bb88d6d8662697973aab4af5ce6b7fd4737c0f7709ede5c8266c52108c52f0c_prof);

        
        $__internal_1d3e768d153daf2aa58dac9d051dea6f74a58ec51d1a3aa566e99f8b2024666f->leave($__internal_1d3e768d153daf2aa58dac9d051dea6f74a58ec51d1a3aa566e99f8b2024666f_prof);

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
