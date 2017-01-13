<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_725f78e020324a46091a07a423b0ce0568fb6199015a3a3cc021e1669d22e4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e64a4a6ba8b11c47d2c1a5a02d194ffa0da650eb25c256e5ebb0e3978a250dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e64a4a6ba8b11c47d2c1a5a02d194ffa0da650eb25c256e5ebb0e3978a250dc->enter($__internal_7e64a4a6ba8b11c47d2c1a5a02d194ffa0da650eb25c256e5ebb0e3978a250dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_86238064e0d9588c2a9414bfc63c51e7d386e3d25f1e16bfe75bf7e3244ad04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86238064e0d9588c2a9414bfc63c51e7d386e3d25f1e16bfe75bf7e3244ad04c->enter($__internal_86238064e0d9588c2a9414bfc63c51e7d386e3d25f1e16bfe75bf7e3244ad04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e64a4a6ba8b11c47d2c1a5a02d194ffa0da650eb25c256e5ebb0e3978a250dc->leave($__internal_7e64a4a6ba8b11c47d2c1a5a02d194ffa0da650eb25c256e5ebb0e3978a250dc_prof);

        
        $__internal_86238064e0d9588c2a9414bfc63c51e7d386e3d25f1e16bfe75bf7e3244ad04c->leave($__internal_86238064e0d9588c2a9414bfc63c51e7d386e3d25f1e16bfe75bf7e3244ad04c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f83d8349ceea577b232946c1e37118850160d050ff17de9f3ddf202db4d63ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f83d8349ceea577b232946c1e37118850160d050ff17de9f3ddf202db4d63ce->enter($__internal_0f83d8349ceea577b232946c1e37118850160d050ff17de9f3ddf202db4d63ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d2391b05cf5f11cc3a1021765fff06d797732d3f4f542be24886d984df45632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2391b05cf5f11cc3a1021765fff06d797732d3f4f542be24886d984df45632->enter($__internal_1d2391b05cf5f11cc3a1021765fff06d797732d3f4f542be24886d984df45632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_1d2391b05cf5f11cc3a1021765fff06d797732d3f4f542be24886d984df45632->leave($__internal_1d2391b05cf5f11cc3a1021765fff06d797732d3f4f542be24886d984df45632_prof);

        
        $__internal_0f83d8349ceea577b232946c1e37118850160d050ff17de9f3ddf202db4d63ce->leave($__internal_0f83d8349ceea577b232946c1e37118850160d050ff17de9f3ddf202db4d63ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
