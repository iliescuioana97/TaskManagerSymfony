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
        $__internal_34ba0d07cc3a4ba948951fb5a5561aefa8e24c4b548532917e9bdfce13758652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ba0d07cc3a4ba948951fb5a5561aefa8e24c4b548532917e9bdfce13758652->enter($__internal_34ba0d07cc3a4ba948951fb5a5561aefa8e24c4b548532917e9bdfce13758652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b712109249f9dcc5af87676870d3b0b36b7c5e45c3b428dbf40cfa79102b7665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b712109249f9dcc5af87676870d3b0b36b7c5e45c3b428dbf40cfa79102b7665->enter($__internal_b712109249f9dcc5af87676870d3b0b36b7c5e45c3b428dbf40cfa79102b7665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34ba0d07cc3a4ba948951fb5a5561aefa8e24c4b548532917e9bdfce13758652->leave($__internal_34ba0d07cc3a4ba948951fb5a5561aefa8e24c4b548532917e9bdfce13758652_prof);

        
        $__internal_b712109249f9dcc5af87676870d3b0b36b7c5e45c3b428dbf40cfa79102b7665->leave($__internal_b712109249f9dcc5af87676870d3b0b36b7c5e45c3b428dbf40cfa79102b7665_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16d519e4d8b27418a7a82fcf33d741817217cfba75679fa4391bb90799fd6c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d519e4d8b27418a7a82fcf33d741817217cfba75679fa4391bb90799fd6c82->enter($__internal_16d519e4d8b27418a7a82fcf33d741817217cfba75679fa4391bb90799fd6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8983a5dda4daca1857519c50030b60670f5fb83c7f0b6495a16bc6366d229809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8983a5dda4daca1857519c50030b60670f5fb83c7f0b6495a16bc6366d229809->enter($__internal_8983a5dda4daca1857519c50030b60670f5fb83c7f0b6495a16bc6366d229809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8983a5dda4daca1857519c50030b60670f5fb83c7f0b6495a16bc6366d229809->leave($__internal_8983a5dda4daca1857519c50030b60670f5fb83c7f0b6495a16bc6366d229809_prof);

        
        $__internal_16d519e4d8b27418a7a82fcf33d741817217cfba75679fa4391bb90799fd6c82->leave($__internal_16d519e4d8b27418a7a82fcf33d741817217cfba75679fa4391bb90799fd6c82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0b585e67dfea93f10841d56c4fd34b4ac5230a64753dd10350a0d57d7bf731a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b585e67dfea93f10841d56c4fd34b4ac5230a64753dd10350a0d57d7bf731a->enter($__internal_a0b585e67dfea93f10841d56c4fd34b4ac5230a64753dd10350a0d57d7bf731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c142ce50280d5a2e06887acbdfa3611fc9e79314a90027cdc236135b8e814789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c142ce50280d5a2e06887acbdfa3611fc9e79314a90027cdc236135b8e814789->enter($__internal_c142ce50280d5a2e06887acbdfa3611fc9e79314a90027cdc236135b8e814789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c142ce50280d5a2e06887acbdfa3611fc9e79314a90027cdc236135b8e814789->leave($__internal_c142ce50280d5a2e06887acbdfa3611fc9e79314a90027cdc236135b8e814789_prof);

        
        $__internal_a0b585e67dfea93f10841d56c4fd34b4ac5230a64753dd10350a0d57d7bf731a->leave($__internal_a0b585e67dfea93f10841d56c4fd34b4ac5230a64753dd10350a0d57d7bf731a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68b64990c924be42a6b5e57a1b888aba2d4da3a82f2a44df5fde12dafab69c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b64990c924be42a6b5e57a1b888aba2d4da3a82f2a44df5fde12dafab69c49->enter($__internal_68b64990c924be42a6b5e57a1b888aba2d4da3a82f2a44df5fde12dafab69c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9de691d627ca44108b76ae3409dc634297a9d3f196096a209717d897f5084aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9de691d627ca44108b76ae3409dc634297a9d3f196096a209717d897f5084aa->enter($__internal_c9de691d627ca44108b76ae3409dc634297a9d3f196096a209717d897f5084aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9de691d627ca44108b76ae3409dc634297a9d3f196096a209717d897f5084aa->leave($__internal_c9de691d627ca44108b76ae3409dc634297a9d3f196096a209717d897f5084aa_prof);

        
        $__internal_68b64990c924be42a6b5e57a1b888aba2d4da3a82f2a44df5fde12dafab69c49->leave($__internal_68b64990c924be42a6b5e57a1b888aba2d4da3a82f2a44df5fde12dafab69c49_prof);

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
