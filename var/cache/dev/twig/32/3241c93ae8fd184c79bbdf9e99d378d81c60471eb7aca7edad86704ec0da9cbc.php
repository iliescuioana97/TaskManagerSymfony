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
        $__internal_0fd9f07e45fea18a27d9ff96950f863e9e92e50209f3a76623fc7619cc6bf8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd9f07e45fea18a27d9ff96950f863e9e92e50209f3a76623fc7619cc6bf8c3->enter($__internal_0fd9f07e45fea18a27d9ff96950f863e9e92e50209f3a76623fc7619cc6bf8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_5253f386c4f1a25031bb68e4417cca47c63f60c67067920c583d20033b68e74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5253f386c4f1a25031bb68e4417cca47c63f60c67067920c583d20033b68e74a->enter($__internal_5253f386c4f1a25031bb68e4417cca47c63f60c67067920c583d20033b68e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0fd9f07e45fea18a27d9ff96950f863e9e92e50209f3a76623fc7619cc6bf8c3->leave($__internal_0fd9f07e45fea18a27d9ff96950f863e9e92e50209f3a76623fc7619cc6bf8c3_prof);

        
        $__internal_5253f386c4f1a25031bb68e4417cca47c63f60c67067920c583d20033b68e74a->leave($__internal_5253f386c4f1a25031bb68e4417cca47c63f60c67067920c583d20033b68e74a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ddc616a4eba8607f149cb379c9bf805ea70f9f64f3270eed9e538f739df3e75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc616a4eba8607f149cb379c9bf805ea70f9f64f3270eed9e538f739df3e75b->enter($__internal_ddc616a4eba8607f149cb379c9bf805ea70f9f64f3270eed9e538f739df3e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2c8ea2b4cbc1e850b61647e716b6b7fb247c519bc6ecb2f78cb7627a2ad455c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8ea2b4cbc1e850b61647e716b6b7fb247c519bc6ecb2f78cb7627a2ad455c1->enter($__internal_2c8ea2b4cbc1e850b61647e716b6b7fb247c519bc6ecb2f78cb7627a2ad455c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2c8ea2b4cbc1e850b61647e716b6b7fb247c519bc6ecb2f78cb7627a2ad455c1->leave($__internal_2c8ea2b4cbc1e850b61647e716b6b7fb247c519bc6ecb2f78cb7627a2ad455c1_prof);

        
        $__internal_ddc616a4eba8607f149cb379c9bf805ea70f9f64f3270eed9e538f739df3e75b->leave($__internal_ddc616a4eba8607f149cb379c9bf805ea70f9f64f3270eed9e538f739df3e75b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b6d32454975d635c93154a0e23afcdc6b4fa612ce435f00842a1c5f588f32354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d32454975d635c93154a0e23afcdc6b4fa612ce435f00842a1c5f588f32354->enter($__internal_b6d32454975d635c93154a0e23afcdc6b4fa612ce435f00842a1c5f588f32354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2a886b7b440fde9d2513112093b3969677c165bf688abb96dcfed9d9196ceb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a886b7b440fde9d2513112093b3969677c165bf688abb96dcfed9d9196ceb5b->enter($__internal_2a886b7b440fde9d2513112093b3969677c165bf688abb96dcfed9d9196ceb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a886b7b440fde9d2513112093b3969677c165bf688abb96dcfed9d9196ceb5b->leave($__internal_2a886b7b440fde9d2513112093b3969677c165bf688abb96dcfed9d9196ceb5b_prof);

        
        $__internal_b6d32454975d635c93154a0e23afcdc6b4fa612ce435f00842a1c5f588f32354->leave($__internal_b6d32454975d635c93154a0e23afcdc6b4fa612ce435f00842a1c5f588f32354_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bc542cca628f49c4468ccd9e1c3ce66092ba0d3e2317f1d1f34b0c787ec70a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc542cca628f49c4468ccd9e1c3ce66092ba0d3e2317f1d1f34b0c787ec70a3e->enter($__internal_bc542cca628f49c4468ccd9e1c3ce66092ba0d3e2317f1d1f34b0c787ec70a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c017a24433acd4e414db3aa58772e053b1f1bee7b6414431fc7c9b3057b84bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c017a24433acd4e414db3aa58772e053b1f1bee7b6414431fc7c9b3057b84bd7->enter($__internal_c017a24433acd4e414db3aa58772e053b1f1bee7b6414431fc7c9b3057b84bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c017a24433acd4e414db3aa58772e053b1f1bee7b6414431fc7c9b3057b84bd7->leave($__internal_c017a24433acd4e414db3aa58772e053b1f1bee7b6414431fc7c9b3057b84bd7_prof);

        
        $__internal_bc542cca628f49c4468ccd9e1c3ce66092ba0d3e2317f1d1f34b0c787ec70a3e->leave($__internal_bc542cca628f49c4468ccd9e1c3ce66092ba0d3e2317f1d1f34b0c787ec70a3e_prof);

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
