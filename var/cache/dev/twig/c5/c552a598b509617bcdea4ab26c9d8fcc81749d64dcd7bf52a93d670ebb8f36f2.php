<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_ef1e159a2132496fc7d64e2534c506c2bb105f5e502abbd10730cfaae28c54d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_18fc67d0355610b3456c6552e317067165e439c3decf461a559b882f1d824141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fc67d0355610b3456c6552e317067165e439c3decf461a559b882f1d824141->enter($__internal_18fc67d0355610b3456c6552e317067165e439c3decf461a559b882f1d824141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_73d957efd37f3217ce439e809e8fbdd915f76efb871417424f042a980726eebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d957efd37f3217ce439e809e8fbdd915f76efb871417424f042a980726eebc->enter($__internal_73d957efd37f3217ce439e809e8fbdd915f76efb871417424f042a980726eebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18fc67d0355610b3456c6552e317067165e439c3decf461a559b882f1d824141->leave($__internal_18fc67d0355610b3456c6552e317067165e439c3decf461a559b882f1d824141_prof);

        
        $__internal_73d957efd37f3217ce439e809e8fbdd915f76efb871417424f042a980726eebc->leave($__internal_73d957efd37f3217ce439e809e8fbdd915f76efb871417424f042a980726eebc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dddfac27175a08a1f085c45fe01dd7db008a49647be2e030c519070dbc69199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dddfac27175a08a1f085c45fe01dd7db008a49647be2e030c519070dbc69199->enter($__internal_3dddfac27175a08a1f085c45fe01dd7db008a49647be2e030c519070dbc69199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e4c77919c9ab9eee2389c8cfdd48f28121bd7cf59a04ae81afa1773d6a4bea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4c77919c9ab9eee2389c8cfdd48f28121bd7cf59a04ae81afa1773d6a4bea9->enter($__internal_0e4c77919c9ab9eee2389c8cfdd48f28121bd7cf59a04ae81afa1773d6a4bea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0e4c77919c9ab9eee2389c8cfdd48f28121bd7cf59a04ae81afa1773d6a4bea9->leave($__internal_0e4c77919c9ab9eee2389c8cfdd48f28121bd7cf59a04ae81afa1773d6a4bea9_prof);

        
        $__internal_3dddfac27175a08a1f085c45fe01dd7db008a49647be2e030c519070dbc69199->leave($__internal_3dddfac27175a08a1f085c45fe01dd7db008a49647be2e030c519070dbc69199_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
