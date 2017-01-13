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
        $__internal_e259e397699671d06e683f0004dbec36e5888c6ce32c751090a4cbfde57042d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e259e397699671d06e683f0004dbec36e5888c6ce32c751090a4cbfde57042d4->enter($__internal_e259e397699671d06e683f0004dbec36e5888c6ce32c751090a4cbfde57042d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a11739abe8dd98be09ab0e2a2cba42a26153e3b669dbc68d85e19c81b8bdb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a11739abe8dd98be09ab0e2a2cba42a26153e3b669dbc68d85e19c81b8bdb9d->enter($__internal_8a11739abe8dd98be09ab0e2a2cba42a26153e3b669dbc68d85e19c81b8bdb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e259e397699671d06e683f0004dbec36e5888c6ce32c751090a4cbfde57042d4->leave($__internal_e259e397699671d06e683f0004dbec36e5888c6ce32c751090a4cbfde57042d4_prof);

        
        $__internal_8a11739abe8dd98be09ab0e2a2cba42a26153e3b669dbc68d85e19c81b8bdb9d->leave($__internal_8a11739abe8dd98be09ab0e2a2cba42a26153e3b669dbc68d85e19c81b8bdb9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3a0f6d2c83d63232d0659a0764b041ad5d9a70a152d42a5da97ea464bc05296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a0f6d2c83d63232d0659a0764b041ad5d9a70a152d42a5da97ea464bc05296->enter($__internal_b3a0f6d2c83d63232d0659a0764b041ad5d9a70a152d42a5da97ea464bc05296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f9b66121cc3dd0740fc28c703cfdc378ebfd49857da7212556862d3f78ba77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9b66121cc3dd0740fc28c703cfdc378ebfd49857da7212556862d3f78ba77c->enter($__internal_8f9b66121cc3dd0740fc28c703cfdc378ebfd49857da7212556862d3f78ba77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f9b66121cc3dd0740fc28c703cfdc378ebfd49857da7212556862d3f78ba77c->leave($__internal_8f9b66121cc3dd0740fc28c703cfdc378ebfd49857da7212556862d3f78ba77c_prof);

        
        $__internal_b3a0f6d2c83d63232d0659a0764b041ad5d9a70a152d42a5da97ea464bc05296->leave($__internal_b3a0f6d2c83d63232d0659a0764b041ad5d9a70a152d42a5da97ea464bc05296_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3a2608de8c9d31e7667336a34eb35a96b808beeb8a545267bad32c09d72e3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a2608de8c9d31e7667336a34eb35a96b808beeb8a545267bad32c09d72e3ed->enter($__internal_c3a2608de8c9d31e7667336a34eb35a96b808beeb8a545267bad32c09d72e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20f389f6147c3f6021c4474245ded5349311afb10392827d3a6090569c400b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f389f6147c3f6021c4474245ded5349311afb10392827d3a6090569c400b93->enter($__internal_20f389f6147c3f6021c4474245ded5349311afb10392827d3a6090569c400b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20f389f6147c3f6021c4474245ded5349311afb10392827d3a6090569c400b93->leave($__internal_20f389f6147c3f6021c4474245ded5349311afb10392827d3a6090569c400b93_prof);

        
        $__internal_c3a2608de8c9d31e7667336a34eb35a96b808beeb8a545267bad32c09d72e3ed->leave($__internal_c3a2608de8c9d31e7667336a34eb35a96b808beeb8a545267bad32c09d72e3ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c01f47996f15d578f6086cbd824b1bdff67f068a0cbab3e8f7d417515954ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c01f47996f15d578f6086cbd824b1bdff67f068a0cbab3e8f7d417515954ca5->enter($__internal_9c01f47996f15d578f6086cbd824b1bdff67f068a0cbab3e8f7d417515954ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1edc568a30d4a2fce04abfc276a096a4e52a2590362e973bbc3cdc45b22c82ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edc568a30d4a2fce04abfc276a096a4e52a2590362e973bbc3cdc45b22c82ae->enter($__internal_1edc568a30d4a2fce04abfc276a096a4e52a2590362e973bbc3cdc45b22c82ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1edc568a30d4a2fce04abfc276a096a4e52a2590362e973bbc3cdc45b22c82ae->leave($__internal_1edc568a30d4a2fce04abfc276a096a4e52a2590362e973bbc3cdc45b22c82ae_prof);

        
        $__internal_9c01f47996f15d578f6086cbd824b1bdff67f068a0cbab3e8f7d417515954ca5->leave($__internal_9c01f47996f15d578f6086cbd824b1bdff67f068a0cbab3e8f7d417515954ca5_prof);

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
