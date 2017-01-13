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
        $__internal_083b13de9f4bb6f2ff79226d95137ce3e2878528a7079c656f94c30716ca02e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083b13de9f4bb6f2ff79226d95137ce3e2878528a7079c656f94c30716ca02e5->enter($__internal_083b13de9f4bb6f2ff79226d95137ce3e2878528a7079c656f94c30716ca02e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_d5460fcaf115cb474f7f6a1f88f2eae8366789aa79d152d1de5c1371811623c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5460fcaf115cb474f7f6a1f88f2eae8366789aa79d152d1de5c1371811623c9->enter($__internal_d5460fcaf115cb474f7f6a1f88f2eae8366789aa79d152d1de5c1371811623c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083b13de9f4bb6f2ff79226d95137ce3e2878528a7079c656f94c30716ca02e5->leave($__internal_083b13de9f4bb6f2ff79226d95137ce3e2878528a7079c656f94c30716ca02e5_prof);

        
        $__internal_d5460fcaf115cb474f7f6a1f88f2eae8366789aa79d152d1de5c1371811623c9->leave($__internal_d5460fcaf115cb474f7f6a1f88f2eae8366789aa79d152d1de5c1371811623c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e115ee19e22cf7d369183b7fdfe93daaf2bc8d8f365590153fe50f716e43330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e115ee19e22cf7d369183b7fdfe93daaf2bc8d8f365590153fe50f716e43330->enter($__internal_7e115ee19e22cf7d369183b7fdfe93daaf2bc8d8f365590153fe50f716e43330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77f668613cdd0f2a732fe2dd3264106e61f55ce790e3d880b7df6a9c6ae1fb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f668613cdd0f2a732fe2dd3264106e61f55ce790e3d880b7df6a9c6ae1fb75->enter($__internal_77f668613cdd0f2a732fe2dd3264106e61f55ce790e3d880b7df6a9c6ae1fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_77f668613cdd0f2a732fe2dd3264106e61f55ce790e3d880b7df6a9c6ae1fb75->leave($__internal_77f668613cdd0f2a732fe2dd3264106e61f55ce790e3d880b7df6a9c6ae1fb75_prof);

        
        $__internal_7e115ee19e22cf7d369183b7fdfe93daaf2bc8d8f365590153fe50f716e43330->leave($__internal_7e115ee19e22cf7d369183b7fdfe93daaf2bc8d8f365590153fe50f716e43330_prof);

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
