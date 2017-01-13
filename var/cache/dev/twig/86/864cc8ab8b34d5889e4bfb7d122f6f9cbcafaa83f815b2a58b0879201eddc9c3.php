<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0ea30d78723dad0a88a57692ddbaad092b4e7354fec891032a7f477b45d7d9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_381918b55b102a46173f14aa6deb29593145c430c9e39ea035abb8257b04a6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381918b55b102a46173f14aa6deb29593145c430c9e39ea035abb8257b04a6a1->enter($__internal_381918b55b102a46173f14aa6deb29593145c430c9e39ea035abb8257b04a6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_a41b6983d3c75d9371438c8ff127dcff9fd837f9ac34012fc370f76bc38743f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41b6983d3c75d9371438c8ff127dcff9fd837f9ac34012fc370f76bc38743f0->enter($__internal_a41b6983d3c75d9371438c8ff127dcff9fd837f9ac34012fc370f76bc38743f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381918b55b102a46173f14aa6deb29593145c430c9e39ea035abb8257b04a6a1->leave($__internal_381918b55b102a46173f14aa6deb29593145c430c9e39ea035abb8257b04a6a1_prof);

        
        $__internal_a41b6983d3c75d9371438c8ff127dcff9fd837f9ac34012fc370f76bc38743f0->leave($__internal_a41b6983d3c75d9371438c8ff127dcff9fd837f9ac34012fc370f76bc38743f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67d042d64bd70f1a3b2d2170481c52c4fca26336a0d5713d2c418bec3ded9cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d042d64bd70f1a3b2d2170481c52c4fca26336a0d5713d2c418bec3ded9cdb->enter($__internal_67d042d64bd70f1a3b2d2170481c52c4fca26336a0d5713d2c418bec3ded9cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee1b8053dd71c295732597a12516ea52308387a3bf647edec6d274442f793237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1b8053dd71c295732597a12516ea52308387a3bf647edec6d274442f793237->enter($__internal_ee1b8053dd71c295732597a12516ea52308387a3bf647edec6d274442f793237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ee1b8053dd71c295732597a12516ea52308387a3bf647edec6d274442f793237->leave($__internal_ee1b8053dd71c295732597a12516ea52308387a3bf647edec6d274442f793237_prof);

        
        $__internal_67d042d64bd70f1a3b2d2170481c52c4fca26336a0d5713d2c418bec3ded9cdb->leave($__internal_67d042d64bd70f1a3b2d2170481c52c4fca26336a0d5713d2c418bec3ded9cdb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
