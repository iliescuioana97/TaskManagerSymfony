<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_fe0532331f49e2de944c6e94c784061f07055aaf782dba6877b4f162d352ccd6 extends Twig_Template
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
        $__internal_d6aee8f500dfeaef4f8a0fa139dc081c0ad016a4785ada05762cde8be3ef3ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6aee8f500dfeaef4f8a0fa139dc081c0ad016a4785ada05762cde8be3ef3ca4->enter($__internal_d6aee8f500dfeaef4f8a0fa139dc081c0ad016a4785ada05762cde8be3ef3ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_3040376fbde1bf26c4f3087d4696d53f9bcfd7cb5b5a4b041d140ee481fc8c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3040376fbde1bf26c4f3087d4696d53f9bcfd7cb5b5a4b041d140ee481fc8c34->enter($__internal_3040376fbde1bf26c4f3087d4696d53f9bcfd7cb5b5a4b041d140ee481fc8c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d6aee8f500dfeaef4f8a0fa139dc081c0ad016a4785ada05762cde8be3ef3ca4->leave($__internal_d6aee8f500dfeaef4f8a0fa139dc081c0ad016a4785ada05762cde8be3ef3ca4_prof);

        
        $__internal_3040376fbde1bf26c4f3087d4696d53f9bcfd7cb5b5a4b041d140ee481fc8c34->leave($__internal_3040376fbde1bf26c4f3087d4696d53f9bcfd7cb5b5a4b041d140ee481fc8c34_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7bab7082d1772eb5a2dba20ba25d1f69f8988087ff8cea06374bf6a09c234d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bab7082d1772eb5a2dba20ba25d1f69f8988087ff8cea06374bf6a09c234d4c->enter($__internal_7bab7082d1772eb5a2dba20ba25d1f69f8988087ff8cea06374bf6a09c234d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_220c7baddad9f8a4db62a817910fd6a8d121bdc273765c20e800e0126b665d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220c7baddad9f8a4db62a817910fd6a8d121bdc273765c20e800e0126b665d8a->enter($__internal_220c7baddad9f8a4db62a817910fd6a8d121bdc273765c20e800e0126b665d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_220c7baddad9f8a4db62a817910fd6a8d121bdc273765c20e800e0126b665d8a->leave($__internal_220c7baddad9f8a4db62a817910fd6a8d121bdc273765c20e800e0126b665d8a_prof);

        
        $__internal_7bab7082d1772eb5a2dba20ba25d1f69f8988087ff8cea06374bf6a09c234d4c->leave($__internal_7bab7082d1772eb5a2dba20ba25d1f69f8988087ff8cea06374bf6a09c234d4c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_edba8ca79f78342d2ddf3fab24fda7f6446bdf4e1386aca247c217b46c1b1305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edba8ca79f78342d2ddf3fab24fda7f6446bdf4e1386aca247c217b46c1b1305->enter($__internal_edba8ca79f78342d2ddf3fab24fda7f6446bdf4e1386aca247c217b46c1b1305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_808cd7ebfe0b3c80c48861c2bd831effd8a0a19fef06d5f7083c9bb6bff0c717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808cd7ebfe0b3c80c48861c2bd831effd8a0a19fef06d5f7083c9bb6bff0c717->enter($__internal_808cd7ebfe0b3c80c48861c2bd831effd8a0a19fef06d5f7083c9bb6bff0c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_808cd7ebfe0b3c80c48861c2bd831effd8a0a19fef06d5f7083c9bb6bff0c717->leave($__internal_808cd7ebfe0b3c80c48861c2bd831effd8a0a19fef06d5f7083c9bb6bff0c717_prof);

        
        $__internal_edba8ca79f78342d2ddf3fab24fda7f6446bdf4e1386aca247c217b46c1b1305->leave($__internal_edba8ca79f78342d2ddf3fab24fda7f6446bdf4e1386aca247c217b46c1b1305_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1208df0f2922bf3255b485a1b19e196f58dcd9d06ad96b3171c512a161017bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1208df0f2922bf3255b485a1b19e196f58dcd9d06ad96b3171c512a161017bfc->enter($__internal_1208df0f2922bf3255b485a1b19e196f58dcd9d06ad96b3171c512a161017bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_39250c0f201e8e23b5becf2ce9ab3d20898f0f9df87051e633f5fd1787c8f1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39250c0f201e8e23b5becf2ce9ab3d20898f0f9df87051e633f5fd1787c8f1c7->enter($__internal_39250c0f201e8e23b5becf2ce9ab3d20898f0f9df87051e633f5fd1787c8f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39250c0f201e8e23b5becf2ce9ab3d20898f0f9df87051e633f5fd1787c8f1c7->leave($__internal_39250c0f201e8e23b5becf2ce9ab3d20898f0f9df87051e633f5fd1787c8f1c7_prof);

        
        $__internal_1208df0f2922bf3255b485a1b19e196f58dcd9d06ad96b3171c512a161017bfc->leave($__internal_1208df0f2922bf3255b485a1b19e196f58dcd9d06ad96b3171c512a161017bfc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
