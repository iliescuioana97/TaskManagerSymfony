<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_e54cdc0d32fcb55abae4dd334d84ed7a3ccfd0bcd21bc4b390d9dbed36384d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_3e5fb88ed410b345b5d15d56b5b2a905a25164a4e5d7eecc1efe8b6b7faec829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5fb88ed410b345b5d15d56b5b2a905a25164a4e5d7eecc1efe8b6b7faec829->enter($__internal_3e5fb88ed410b345b5d15d56b5b2a905a25164a4e5d7eecc1efe8b6b7faec829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_9606e5b89d3826a7ce5bfb5ce3cd32f188efa0a614d3bcf5039a256cfa452f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9606e5b89d3826a7ce5bfb5ce3cd32f188efa0a614d3bcf5039a256cfa452f9e->enter($__internal_9606e5b89d3826a7ce5bfb5ce3cd32f188efa0a614d3bcf5039a256cfa452f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5fb88ed410b345b5d15d56b5b2a905a25164a4e5d7eecc1efe8b6b7faec829->leave($__internal_3e5fb88ed410b345b5d15d56b5b2a905a25164a4e5d7eecc1efe8b6b7faec829_prof);

        
        $__internal_9606e5b89d3826a7ce5bfb5ce3cd32f188efa0a614d3bcf5039a256cfa452f9e->leave($__internal_9606e5b89d3826a7ce5bfb5ce3cd32f188efa0a614d3bcf5039a256cfa452f9e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_645f992896ada74927adfab6102a53488925a64eb36bef95d61e0a94c5dbc0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645f992896ada74927adfab6102a53488925a64eb36bef95d61e0a94c5dbc0c2->enter($__internal_645f992896ada74927adfab6102a53488925a64eb36bef95d61e0a94c5dbc0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f09c39bdcdbfd1f3acbaf551ab8c87754f3c90f374abac1236b1f5df34c0631f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09c39bdcdbfd1f3acbaf551ab8c87754f3c90f374abac1236b1f5df34c0631f->enter($__internal_f09c39bdcdbfd1f3acbaf551ab8c87754f3c90f374abac1236b1f5df34c0631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f09c39bdcdbfd1f3acbaf551ab8c87754f3c90f374abac1236b1f5df34c0631f->leave($__internal_f09c39bdcdbfd1f3acbaf551ab8c87754f3c90f374abac1236b1f5df34c0631f_prof);

        
        $__internal_645f992896ada74927adfab6102a53488925a64eb36bef95d61e0a94c5dbc0c2->leave($__internal_645f992896ada74927adfab6102a53488925a64eb36bef95d61e0a94c5dbc0c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
