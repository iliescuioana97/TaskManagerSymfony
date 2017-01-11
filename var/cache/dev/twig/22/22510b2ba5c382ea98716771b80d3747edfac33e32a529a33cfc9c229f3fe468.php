<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
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
        $__internal_9d355e2804c12d8a508067edc1e1419b04266c4b786867fdab91be0aabd19394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d355e2804c12d8a508067edc1e1419b04266c4b786867fdab91be0aabd19394->enter($__internal_9d355e2804c12d8a508067edc1e1419b04266c4b786867fdab91be0aabd19394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d45c266ace343830e3ed007e74a449341e21bdddacb7213633f40c65ba748700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45c266ace343830e3ed007e74a449341e21bdddacb7213633f40c65ba748700->enter($__internal_d45c266ace343830e3ed007e74a449341e21bdddacb7213633f40c65ba748700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d355e2804c12d8a508067edc1e1419b04266c4b786867fdab91be0aabd19394->leave($__internal_9d355e2804c12d8a508067edc1e1419b04266c4b786867fdab91be0aabd19394_prof);

        
        $__internal_d45c266ace343830e3ed007e74a449341e21bdddacb7213633f40c65ba748700->leave($__internal_d45c266ace343830e3ed007e74a449341e21bdddacb7213633f40c65ba748700_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64fdc3c35e022c179d67358e93d5579d12592ff1371383efe1804562878789a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fdc3c35e022c179d67358e93d5579d12592ff1371383efe1804562878789a0->enter($__internal_64fdc3c35e022c179d67358e93d5579d12592ff1371383efe1804562878789a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5cd08bac02b982fb72c96f4c0494fbb28d22770593cb2895ee2a60baac733f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cd08bac02b982fb72c96f4c0494fbb28d22770593cb2895ee2a60baac733f9->enter($__internal_a5cd08bac02b982fb72c96f4c0494fbb28d22770593cb2895ee2a60baac733f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a5cd08bac02b982fb72c96f4c0494fbb28d22770593cb2895ee2a60baac733f9->leave($__internal_a5cd08bac02b982fb72c96f4c0494fbb28d22770593cb2895ee2a60baac733f9_prof);

        
        $__internal_64fdc3c35e022c179d67358e93d5579d12592ff1371383efe1804562878789a0->leave($__internal_64fdc3c35e022c179d67358e93d5579d12592ff1371383efe1804562878789a0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92d44cc4a9e2a9bc83555c5dedf4acaf3e3b6eb5c3150080fab7ea5d28598324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d44cc4a9e2a9bc83555c5dedf4acaf3e3b6eb5c3150080fab7ea5d28598324->enter($__internal_92d44cc4a9e2a9bc83555c5dedf4acaf3e3b6eb5c3150080fab7ea5d28598324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac5d8bff631e9c3f4351f59033cb41f7b7ad322dd234dd6d8d9a3bb0dc791678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5d8bff631e9c3f4351f59033cb41f7b7ad322dd234dd6d8d9a3bb0dc791678->enter($__internal_ac5d8bff631e9c3f4351f59033cb41f7b7ad322dd234dd6d8d9a3bb0dc791678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac5d8bff631e9c3f4351f59033cb41f7b7ad322dd234dd6d8d9a3bb0dc791678->leave($__internal_ac5d8bff631e9c3f4351f59033cb41f7b7ad322dd234dd6d8d9a3bb0dc791678_prof);

        
        $__internal_92d44cc4a9e2a9bc83555c5dedf4acaf3e3b6eb5c3150080fab7ea5d28598324->leave($__internal_92d44cc4a9e2a9bc83555c5dedf4acaf3e3b6eb5c3150080fab7ea5d28598324_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3cdbed3c1687793afee7c8884c45b6419c1c822828a80897b3d6acd22f5a52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cdbed3c1687793afee7c8884c45b6419c1c822828a80897b3d6acd22f5a52c->enter($__internal_e3cdbed3c1687793afee7c8884c45b6419c1c822828a80897b3d6acd22f5a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2369212d5d6e97053e908705972cf98f1689bd3c9d5a0a90d6724a86359ba7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2369212d5d6e97053e908705972cf98f1689bd3c9d5a0a90d6724a86359ba7bf->enter($__internal_2369212d5d6e97053e908705972cf98f1689bd3c9d5a0a90d6724a86359ba7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2369212d5d6e97053e908705972cf98f1689bd3c9d5a0a90d6724a86359ba7bf->leave($__internal_2369212d5d6e97053e908705972cf98f1689bd3c9d5a0a90d6724a86359ba7bf_prof);

        
        $__internal_e3cdbed3c1687793afee7c8884c45b6419c1c822828a80897b3d6acd22f5a52c->leave($__internal_e3cdbed3c1687793afee7c8884c45b6419c1c822828a80897b3d6acd22f5a52c_prof);

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
