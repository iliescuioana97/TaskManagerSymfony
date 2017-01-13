<?php

/* AppBundle:User:login.html.twig */
class __TwigTemplate_cfae6531750647122d3124e6222b33cbeba5d673cb6ff901c462f194a53258b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "AppBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14913cea2a40dd206b7560ad61623e8c78c486a33039d1492d3d97f5b5126de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14913cea2a40dd206b7560ad61623e8c78c486a33039d1492d3d97f5b5126de7->enter($__internal_14913cea2a40dd206b7560ad61623e8c78c486a33039d1492d3d97f5b5126de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_1e7315db0bc57acfd8cb0463fac9a48d9f2c89f81694a7dfccb050b8ac69429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7315db0bc57acfd8cb0463fac9a48d9f2c89f81694a7dfccb050b8ac69429c->enter($__internal_1e7315db0bc57acfd8cb0463fac9a48d9f2c89f81694a7dfccb050b8ac69429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14913cea2a40dd206b7560ad61623e8c78c486a33039d1492d3d97f5b5126de7->leave($__internal_14913cea2a40dd206b7560ad61623e8c78c486a33039d1492d3d97f5b5126de7_prof);

        
        $__internal_1e7315db0bc57acfd8cb0463fac9a48d9f2c89f81694a7dfccb050b8ac69429c->leave($__internal_1e7315db0bc57acfd8cb0463fac9a48d9f2c89f81694a7dfccb050b8ac69429c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1276ed1459a1a57af2cb53bf7b70405bec9b04d3ac5edf5f37eb06c462615b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1276ed1459a1a57af2cb53bf7b70405bec9b04d3ac5edf5f37eb06c462615b24->enter($__internal_1276ed1459a1a57af2cb53bf7b70405bec9b04d3ac5edf5f37eb06c462615b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bd77a56063da129cbb6ebbf02b35317c6da9c4829d8f273d6dc4010145eb305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd77a56063da129cbb6ebbf02b35317c6da9c4829d8f273d6dc4010145eb305->enter($__internal_2bd77a56063da129cbb6ebbf02b35317c6da9c4829d8f273d6dc4010145eb305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-md-offset-4\">
            <div class=\"sign-in-container\">
                <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 14
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 17
        echo "
                    <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    <p>Text</p>
                    <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_2bd77a56063da129cbb6ebbf02b35317c6da9c4829d8f273d6dc4010145eb305->leave($__internal_2bd77a56063da129cbb6ebbf02b35317c6da9c4829d8f273d6dc4010145eb305_prof);

        
        $__internal_1276ed1459a1a57af2cb53bf7b70405bec9b04d3ac5edf5f37eb06c462615b24->leave($__internal_1276ed1459a1a57af2cb53bf7b70405bec9b04d3ac5edf5f37eb06c462615b24_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  94 => 25,  87 => 21,  82 => 19,  78 => 18,  75 => 17,  69 => 15,  67 => 14,  63 => 13,  57 => 9,  51 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-md-offset-4\">
            <div class=\"sign-in-container\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}

                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                    <p>Text</p>
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
            </div>
        </div>
    </div>
{% endblock fos_user_content %}", "AppBundle:User:login.html.twig", "/home/ioana/Projects/task-manager-symfony/var/cache/dev/../../../src/AppBundle/Resources/views/User/login.html.twig");
    }
}
