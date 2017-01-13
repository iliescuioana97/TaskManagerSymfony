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
        $__internal_1e15139e8fb990e904b6904883df445e355e1e329eaf6c65554f994dd45b0a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e15139e8fb990e904b6904883df445e355e1e329eaf6c65554f994dd45b0a53->enter($__internal_1e15139e8fb990e904b6904883df445e355e1e329eaf6c65554f994dd45b0a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_eaa2de49ff04186a97ab2659b144e42a83618c8af3e4f01f01fa838b75d5e00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa2de49ff04186a97ab2659b144e42a83618c8af3e4f01f01fa838b75d5e00c->enter($__internal_eaa2de49ff04186a97ab2659b144e42a83618c8af3e4f01f01fa838b75d5e00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e15139e8fb990e904b6904883df445e355e1e329eaf6c65554f994dd45b0a53->leave($__internal_1e15139e8fb990e904b6904883df445e355e1e329eaf6c65554f994dd45b0a53_prof);

        
        $__internal_eaa2de49ff04186a97ab2659b144e42a83618c8af3e4f01f01fa838b75d5e00c->leave($__internal_eaa2de49ff04186a97ab2659b144e42a83618c8af3e4f01f01fa838b75d5e00c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e910dfd82301990464231f1965cceccb3276d83fcb163d402ecf1571f4d3b4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e910dfd82301990464231f1965cceccb3276d83fcb163d402ecf1571f4d3b4da->enter($__internal_e910dfd82301990464231f1965cceccb3276d83fcb163d402ecf1571f4d3b4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a6b6938eb956d62dcb8821c18f8df8449a2b4ed06e15d4daf58f74720985e084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b6938eb956d62dcb8821c18f8df8449a2b4ed06e15d4daf58f74720985e084->enter($__internal_a6b6938eb956d62dcb8821c18f8df8449a2b4ed06e15d4daf58f74720985e084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a6b6938eb956d62dcb8821c18f8df8449a2b4ed06e15d4daf58f74720985e084->leave($__internal_a6b6938eb956d62dcb8821c18f8df8449a2b4ed06e15d4daf58f74720985e084_prof);

        
        $__internal_e910dfd82301990464231f1965cceccb3276d83fcb163d402ecf1571f4d3b4da->leave($__internal_e910dfd82301990464231f1965cceccb3276d83fcb163d402ecf1571f4d3b4da_prof);

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
