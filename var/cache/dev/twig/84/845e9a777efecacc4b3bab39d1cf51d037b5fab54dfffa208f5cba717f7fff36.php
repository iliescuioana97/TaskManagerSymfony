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
        $__internal_7528debf4f15ebde30d1c4bcd9070805ef9d1e68781c8371d0def0be61c47dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7528debf4f15ebde30d1c4bcd9070805ef9d1e68781c8371d0def0be61c47dd7->enter($__internal_7528debf4f15ebde30d1c4bcd9070805ef9d1e68781c8371d0def0be61c47dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_933ed7831873cf35de9b3779ab32ae1fcc3f448db73a4cae4d73fc53c6097c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933ed7831873cf35de9b3779ab32ae1fcc3f448db73a4cae4d73fc53c6097c16->enter($__internal_933ed7831873cf35de9b3779ab32ae1fcc3f448db73a4cae4d73fc53c6097c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7528debf4f15ebde30d1c4bcd9070805ef9d1e68781c8371d0def0be61c47dd7->leave($__internal_7528debf4f15ebde30d1c4bcd9070805ef9d1e68781c8371d0def0be61c47dd7_prof);

        
        $__internal_933ed7831873cf35de9b3779ab32ae1fcc3f448db73a4cae4d73fc53c6097c16->leave($__internal_933ed7831873cf35de9b3779ab32ae1fcc3f448db73a4cae4d73fc53c6097c16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65bc5ea03a5b717e137780544d2ddc8d96e1b7b84c414ef585e5bec9021ad52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc5ea03a5b717e137780544d2ddc8d96e1b7b84c414ef585e5bec9021ad52d->enter($__internal_65bc5ea03a5b717e137780544d2ddc8d96e1b7b84c414ef585e5bec9021ad52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73dbc3725047683048ae2339c30ed2cd3f62426d046fd30b4b0b8b542cebbaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dbc3725047683048ae2339c30ed2cd3f62426d046fd30b4b0b8b542cebbaea->enter($__internal_73dbc3725047683048ae2339c30ed2cd3f62426d046fd30b4b0b8b542cebbaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73dbc3725047683048ae2339c30ed2cd3f62426d046fd30b4b0b8b542cebbaea->leave($__internal_73dbc3725047683048ae2339c30ed2cd3f62426d046fd30b4b0b8b542cebbaea_prof);

        
        $__internal_65bc5ea03a5b717e137780544d2ddc8d96e1b7b84c414ef585e5bec9021ad52d->leave($__internal_65bc5ea03a5b717e137780544d2ddc8d96e1b7b84c414ef585e5bec9021ad52d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c62e96f3a280338fc25ba06d41b8f161b27d914e940d8221a3dc2a1fff4c76c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62e96f3a280338fc25ba06d41b8f161b27d914e940d8221a3dc2a1fff4c76c4->enter($__internal_c62e96f3a280338fc25ba06d41b8f161b27d914e940d8221a3dc2a1fff4c76c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f9b4051fd60a9b47b0654bd4f6ef1b68eae2c5986eeee90317bf8c0bb8f3b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9b4051fd60a9b47b0654bd4f6ef1b68eae2c5986eeee90317bf8c0bb8f3b91->enter($__internal_6f9b4051fd60a9b47b0654bd4f6ef1b68eae2c5986eeee90317bf8c0bb8f3b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6f9b4051fd60a9b47b0654bd4f6ef1b68eae2c5986eeee90317bf8c0bb8f3b91->leave($__internal_6f9b4051fd60a9b47b0654bd4f6ef1b68eae2c5986eeee90317bf8c0bb8f3b91_prof);

        
        $__internal_c62e96f3a280338fc25ba06d41b8f161b27d914e940d8221a3dc2a1fff4c76c4->leave($__internal_c62e96f3a280338fc25ba06d41b8f161b27d914e940d8221a3dc2a1fff4c76c4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_114abb77144c0c7a0bd838f5a1fbca4a64d9f660bcecec3821584c85e2162c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114abb77144c0c7a0bd838f5a1fbca4a64d9f660bcecec3821584c85e2162c9e->enter($__internal_114abb77144c0c7a0bd838f5a1fbca4a64d9f660bcecec3821584c85e2162c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_787141f911fbdfc482eca14ea98f8b6a7f6606f13ec2b83492047d3871ed4634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787141f911fbdfc482eca14ea98f8b6a7f6606f13ec2b83492047d3871ed4634->enter($__internal_787141f911fbdfc482eca14ea98f8b6a7f6606f13ec2b83492047d3871ed4634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_787141f911fbdfc482eca14ea98f8b6a7f6606f13ec2b83492047d3871ed4634->leave($__internal_787141f911fbdfc482eca14ea98f8b6a7f6606f13ec2b83492047d3871ed4634_prof);

        
        $__internal_114abb77144c0c7a0bd838f5a1fbca4a64d9f660bcecec3821584c85e2162c9e->leave($__internal_114abb77144c0c7a0bd838f5a1fbca4a64d9f660bcecec3821584c85e2162c9e_prof);

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
