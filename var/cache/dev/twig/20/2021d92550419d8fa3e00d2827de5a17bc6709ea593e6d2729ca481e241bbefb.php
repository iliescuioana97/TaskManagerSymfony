<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2e269aeb0dae55b2c40bc4e0af3cad250462bac5e02834dcdca8436a2eaedf3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_0c0d8e27ee8cb764c9dbebc6605c466ddee3767186f808e588e0366045be1c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0d8e27ee8cb764c9dbebc6605c466ddee3767186f808e588e0366045be1c64->enter($__internal_0c0d8e27ee8cb764c9dbebc6605c466ddee3767186f808e588e0366045be1c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_a9672ae31298d7a8b9dd4a2a656d3ff9902dfb240223ff563f69c09e0c09d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9672ae31298d7a8b9dd4a2a656d3ff9902dfb240223ff563f69c09e0c09d856->enter($__internal_a9672ae31298d7a8b9dd4a2a656d3ff9902dfb240223ff563f69c09e0c09d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0d8e27ee8cb764c9dbebc6605c466ddee3767186f808e588e0366045be1c64->leave($__internal_0c0d8e27ee8cb764c9dbebc6605c466ddee3767186f808e588e0366045be1c64_prof);

        
        $__internal_a9672ae31298d7a8b9dd4a2a656d3ff9902dfb240223ff563f69c09e0c09d856->leave($__internal_a9672ae31298d7a8b9dd4a2a656d3ff9902dfb240223ff563f69c09e0c09d856_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_134e30886e5f6c5b687912be42bdee38b740b62730c595b7bcc984f3e134917b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134e30886e5f6c5b687912be42bdee38b740b62730c595b7bcc984f3e134917b->enter($__internal_134e30886e5f6c5b687912be42bdee38b740b62730c595b7bcc984f3e134917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7caa40fa88d549a8495ace3d04be2c916d9d804cb07ebe7ebd98ded6d9f2f57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caa40fa88d549a8495ace3d04be2c916d9d804cb07ebe7ebd98ded6d9f2f57a->enter($__internal_7caa40fa88d549a8495ace3d04be2c916d9d804cb07ebe7ebd98ded6d9f2f57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7caa40fa88d549a8495ace3d04be2c916d9d804cb07ebe7ebd98ded6d9f2f57a->leave($__internal_7caa40fa88d549a8495ace3d04be2c916d9d804cb07ebe7ebd98ded6d9f2f57a_prof);

        
        $__internal_134e30886e5f6c5b687912be42bdee38b740b62730c595b7bcc984f3e134917b->leave($__internal_134e30886e5f6c5b687912be42bdee38b740b62730c595b7bcc984f3e134917b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
