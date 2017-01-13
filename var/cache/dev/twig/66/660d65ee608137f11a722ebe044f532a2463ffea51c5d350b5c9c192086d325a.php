<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b26e84472cf1efc627be8246667a4db727f1c19ca3eac585854f724e2a112d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_900586799cd0034f33bfafb591cfb11a43016f112b5257804d3981fd5bb9c5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900586799cd0034f33bfafb591cfb11a43016f112b5257804d3981fd5bb9c5f8->enter($__internal_900586799cd0034f33bfafb591cfb11a43016f112b5257804d3981fd5bb9c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_fbbb3315f0ebf9c6ab0d2fae5cf2a3bdd287501f20d2d9e0ce0f179db4b0654e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbb3315f0ebf9c6ab0d2fae5cf2a3bdd287501f20d2d9e0ce0f179db4b0654e->enter($__internal_fbbb3315f0ebf9c6ab0d2fae5cf2a3bdd287501f20d2d9e0ce0f179db4b0654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900586799cd0034f33bfafb591cfb11a43016f112b5257804d3981fd5bb9c5f8->leave($__internal_900586799cd0034f33bfafb591cfb11a43016f112b5257804d3981fd5bb9c5f8_prof);

        
        $__internal_fbbb3315f0ebf9c6ab0d2fae5cf2a3bdd287501f20d2d9e0ce0f179db4b0654e->leave($__internal_fbbb3315f0ebf9c6ab0d2fae5cf2a3bdd287501f20d2d9e0ce0f179db4b0654e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31b74daaacb37d1d78472484ae616b9125dfbaaf61d9ab8054fc0c83122b47a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b74daaacb37d1d78472484ae616b9125dfbaaf61d9ab8054fc0c83122b47a5->enter($__internal_31b74daaacb37d1d78472484ae616b9125dfbaaf61d9ab8054fc0c83122b47a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f91bd40a43589bd68e8227d2552c9f0e590b6483b92d1f6418ed9cd5ccceab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f91bd40a43589bd68e8227d2552c9f0e590b6483b92d1f6418ed9cd5ccceab8->enter($__internal_6f91bd40a43589bd68e8227d2552c9f0e590b6483b92d1f6418ed9cd5ccceab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6f91bd40a43589bd68e8227d2552c9f0e590b6483b92d1f6418ed9cd5ccceab8->leave($__internal_6f91bd40a43589bd68e8227d2552c9f0e590b6483b92d1f6418ed9cd5ccceab8_prof);

        
        $__internal_31b74daaacb37d1d78472484ae616b9125dfbaaf61d9ab8054fc0c83122b47a5->leave($__internal_31b74daaacb37d1d78472484ae616b9125dfbaaf61d9ab8054fc0c83122b47a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
