<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_da7b8ba49ac5e0e50c391535bf675b4c22a200243857631c54d9a3082dd5b21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b31f19812a86db0ee22827fa5d7d28c4bff17eeb93737b5aa15480d258a873d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31f19812a86db0ee22827fa5d7d28c4bff17eeb93737b5aa15480d258a873d3->enter($__internal_b31f19812a86db0ee22827fa5d7d28c4bff17eeb93737b5aa15480d258a873d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_e952b7a93224f19a65141fc505231ab3803db07e7f679c142eb3c310c2dbf52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e952b7a93224f19a65141fc505231ab3803db07e7f679c142eb3c310c2dbf52f->enter($__internal_e952b7a93224f19a65141fc505231ab3803db07e7f679c142eb3c310c2dbf52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b31f19812a86db0ee22827fa5d7d28c4bff17eeb93737b5aa15480d258a873d3->leave($__internal_b31f19812a86db0ee22827fa5d7d28c4bff17eeb93737b5aa15480d258a873d3_prof);

        
        $__internal_e952b7a93224f19a65141fc505231ab3803db07e7f679c142eb3c310c2dbf52f->leave($__internal_e952b7a93224f19a65141fc505231ab3803db07e7f679c142eb3c310c2dbf52f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_49eb0762069957f485325252b8d568958b7ce848ae05a20fa4b8ea9b618cf00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49eb0762069957f485325252b8d568958b7ce848ae05a20fa4b8ea9b618cf00e->enter($__internal_49eb0762069957f485325252b8d568958b7ce848ae05a20fa4b8ea9b618cf00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1a4a5002977f88be2122c032935fb3da488aecc26f8051dda6184639c5b55c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4a5002977f88be2122c032935fb3da488aecc26f8051dda6184639c5b55c67->enter($__internal_1a4a5002977f88be2122c032935fb3da488aecc26f8051dda6184639c5b55c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1a4a5002977f88be2122c032935fb3da488aecc26f8051dda6184639c5b55c67->leave($__internal_1a4a5002977f88be2122c032935fb3da488aecc26f8051dda6184639c5b55c67_prof);

        
        $__internal_49eb0762069957f485325252b8d568958b7ce848ae05a20fa4b8ea9b618cf00e->leave($__internal_49eb0762069957f485325252b8d568958b7ce848ae05a20fa4b8ea9b618cf00e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_68bfdc1b66f7e301294f762e225f5fec31e9c65a9f0ddbb6420c2462e5a03a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bfdc1b66f7e301294f762e225f5fec31e9c65a9f0ddbb6420c2462e5a03a38->enter($__internal_68bfdc1b66f7e301294f762e225f5fec31e9c65a9f0ddbb6420c2462e5a03a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_796f691c7facd4b387cd0f5031a5a558e199de8984259c650040837bf4b32ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796f691c7facd4b387cd0f5031a5a558e199de8984259c650040837bf4b32ef0->enter($__internal_796f691c7facd4b387cd0f5031a5a558e199de8984259c650040837bf4b32ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_796f691c7facd4b387cd0f5031a5a558e199de8984259c650040837bf4b32ef0->leave($__internal_796f691c7facd4b387cd0f5031a5a558e199de8984259c650040837bf4b32ef0_prof);

        
        $__internal_68bfdc1b66f7e301294f762e225f5fec31e9c65a9f0ddbb6420c2462e5a03a38->leave($__internal_68bfdc1b66f7e301294f762e225f5fec31e9c65a9f0ddbb6420c2462e5a03a38_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b9d5f34968e16fd39e8cc7952fbbe7cc62a90412c40ba4d817ed608ccc1aed8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d5f34968e16fd39e8cc7952fbbe7cc62a90412c40ba4d817ed608ccc1aed8a->enter($__internal_b9d5f34968e16fd39e8cc7952fbbe7cc62a90412c40ba4d817ed608ccc1aed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_06a6e01f3c6f44b4b69607dec6624dcf203b96dfda00a8d099d58472e7dfec7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a6e01f3c6f44b4b69607dec6624dcf203b96dfda00a8d099d58472e7dfec7c->enter($__internal_06a6e01f3c6f44b4b69607dec6624dcf203b96dfda00a8d099d58472e7dfec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_06a6e01f3c6f44b4b69607dec6624dcf203b96dfda00a8d099d58472e7dfec7c->leave($__internal_06a6e01f3c6f44b4b69607dec6624dcf203b96dfda00a8d099d58472e7dfec7c_prof);

        
        $__internal_b9d5f34968e16fd39e8cc7952fbbe7cc62a90412c40ba4d817ed608ccc1aed8a->leave($__internal_b9d5f34968e16fd39e8cc7952fbbe7cc62a90412c40ba4d817ed608ccc1aed8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
