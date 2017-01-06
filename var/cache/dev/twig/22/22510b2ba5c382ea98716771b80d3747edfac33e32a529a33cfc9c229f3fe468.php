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
        $__internal_0a197d7ac86238ae7d802a0c3df7021af421f4d3b341d6d9af9ba0ac520e7717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a197d7ac86238ae7d802a0c3df7021af421f4d3b341d6d9af9ba0ac520e7717->enter($__internal_0a197d7ac86238ae7d802a0c3df7021af421f4d3b341d6d9af9ba0ac520e7717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9832488b5f4cc1901956d945408bb5999f24e4396a39542ddea3c48ebad49894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9832488b5f4cc1901956d945408bb5999f24e4396a39542ddea3c48ebad49894->enter($__internal_9832488b5f4cc1901956d945408bb5999f24e4396a39542ddea3c48ebad49894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a197d7ac86238ae7d802a0c3df7021af421f4d3b341d6d9af9ba0ac520e7717->leave($__internal_0a197d7ac86238ae7d802a0c3df7021af421f4d3b341d6d9af9ba0ac520e7717_prof);

        
        $__internal_9832488b5f4cc1901956d945408bb5999f24e4396a39542ddea3c48ebad49894->leave($__internal_9832488b5f4cc1901956d945408bb5999f24e4396a39542ddea3c48ebad49894_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bc1f23ca0f3e345314b2d8765c82224454a70195a4cd05c0aa87f5324602b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc1f23ca0f3e345314b2d8765c82224454a70195a4cd05c0aa87f5324602b23->enter($__internal_7bc1f23ca0f3e345314b2d8765c82224454a70195a4cd05c0aa87f5324602b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84621f12cb425c78b1e224965b94b06ffef3482a3391e226e7b22306b5ed42b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84621f12cb425c78b1e224965b94b06ffef3482a3391e226e7b22306b5ed42b4->enter($__internal_84621f12cb425c78b1e224965b94b06ffef3482a3391e226e7b22306b5ed42b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_84621f12cb425c78b1e224965b94b06ffef3482a3391e226e7b22306b5ed42b4->leave($__internal_84621f12cb425c78b1e224965b94b06ffef3482a3391e226e7b22306b5ed42b4_prof);

        
        $__internal_7bc1f23ca0f3e345314b2d8765c82224454a70195a4cd05c0aa87f5324602b23->leave($__internal_7bc1f23ca0f3e345314b2d8765c82224454a70195a4cd05c0aa87f5324602b23_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65ebfd10abe2fcde240410639eea9f53949f77097006bafac18820d011d4f05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ebfd10abe2fcde240410639eea9f53949f77097006bafac18820d011d4f05f->enter($__internal_65ebfd10abe2fcde240410639eea9f53949f77097006bafac18820d011d4f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac9995a6873d12175ffa7777fe8c645432dfddf1b099a6b819c83481f7a93bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9995a6873d12175ffa7777fe8c645432dfddf1b099a6b819c83481f7a93bfc->enter($__internal_ac9995a6873d12175ffa7777fe8c645432dfddf1b099a6b819c83481f7a93bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac9995a6873d12175ffa7777fe8c645432dfddf1b099a6b819c83481f7a93bfc->leave($__internal_ac9995a6873d12175ffa7777fe8c645432dfddf1b099a6b819c83481f7a93bfc_prof);

        
        $__internal_65ebfd10abe2fcde240410639eea9f53949f77097006bafac18820d011d4f05f->leave($__internal_65ebfd10abe2fcde240410639eea9f53949f77097006bafac18820d011d4f05f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b3aaa4f3a8a53771a311c52c7cb20aabc4fe879bc93555abb15731166096f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3aaa4f3a8a53771a311c52c7cb20aabc4fe879bc93555abb15731166096f10->enter($__internal_7b3aaa4f3a8a53771a311c52c7cb20aabc4fe879bc93555abb15731166096f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f160fa01fcf86ce3252fd0fe53146121f90966b0af3224a590ae3f258ba76cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f160fa01fcf86ce3252fd0fe53146121f90966b0af3224a590ae3f258ba76cf1->enter($__internal_f160fa01fcf86ce3252fd0fe53146121f90966b0af3224a590ae3f258ba76cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f160fa01fcf86ce3252fd0fe53146121f90966b0af3224a590ae3f258ba76cf1->leave($__internal_f160fa01fcf86ce3252fd0fe53146121f90966b0af3224a590ae3f258ba76cf1_prof);

        
        $__internal_7b3aaa4f3a8a53771a311c52c7cb20aabc4fe879bc93555abb15731166096f10->leave($__internal_7b3aaa4f3a8a53771a311c52c7cb20aabc4fe879bc93555abb15731166096f10_prof);

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
