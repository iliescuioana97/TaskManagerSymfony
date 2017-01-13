<?php

/* @App/User/login.html.twig */
class __TwigTemplate_5bfd6b322f427d1058e4124a805dd2d32915e7931f9da97926b03d137f5a1a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@App/User/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d7f21a3afea594abc13ecb3f8387bd24791031e260be7fe826323675548abd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7f21a3afea594abc13ecb3f8387bd24791031e260be7fe826323675548abd8->enter($__internal_8d7f21a3afea594abc13ecb3f8387bd24791031e260be7fe826323675548abd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/login.html.twig"));

        $__internal_fc7c6f6705a45d87123304476857e894708ed56abfd1e39de74088d870164888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7c6f6705a45d87123304476857e894708ed56abfd1e39de74088d870164888->enter($__internal_fc7c6f6705a45d87123304476857e894708ed56abfd1e39de74088d870164888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7f21a3afea594abc13ecb3f8387bd24791031e260be7fe826323675548abd8->leave($__internal_8d7f21a3afea594abc13ecb3f8387bd24791031e260be7fe826323675548abd8_prof);

        
        $__internal_fc7c6f6705a45d87123304476857e894708ed56abfd1e39de74088d870164888->leave($__internal_fc7c6f6705a45d87123304476857e894708ed56abfd1e39de74088d870164888_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_521db6fb3a8c9f8cd179d8bd439908f782651dbad74f500b4f28d60ecf252c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521db6fb3a8c9f8cd179d8bd439908f782651dbad74f500b4f28d60ecf252c37->enter($__internal_521db6fb3a8c9f8cd179d8bd439908f782651dbad74f500b4f28d60ecf252c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2d2ce35019971949c01119a3e80d04f42da319bcf5be51c2af6899cd3dde459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d2ce35019971949c01119a3e80d04f42da319bcf5be51c2af6899cd3dde459->enter($__internal_b2d2ce35019971949c01119a3e80d04f42da319bcf5be51c2af6899cd3dde459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        // line 9
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b2d2ce35019971949c01119a3e80d04f42da319bcf5be51c2af6899cd3dde459->leave($__internal_b2d2ce35019971949c01119a3e80d04f42da319bcf5be51c2af6899cd3dde459_prof);

        
        $__internal_521db6fb3a8c9f8cd179d8bd439908f782651dbad74f500b4f28d60ecf252c37->leave($__internal_521db6fb3a8c9f8cd179d8bd439908f782651dbad74f500b4f28d60ecf252c37_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_658416d7cf536217b13bf6e7e930065c8c2b10c808ed9348a84eaaf46b29e19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658416d7cf536217b13bf6e7e930065c8c2b10c808ed9348a84eaaf46b29e19c->enter($__internal_658416d7cf536217b13bf6e7e930065c8c2b10c808ed9348a84eaaf46b29e19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7cfb1aff3c420b780cff47a9db1e5b5d992caf5aafae30cd870ff6271e3cb653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfb1aff3c420b780cff47a9db1e5b5d992caf5aafae30cd870ff6271e3cb653->enter($__internal_7cfb1aff3c420b780cff47a9db1e5b5d992caf5aafae30cd870ff6271e3cb653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 14
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-md-offset-4\">
            <div class=\"sign-in-container\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 21
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 22
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 24
        echo "                    <label id=\"usernameId\" for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username:", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    <label for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password:", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_7cfb1aff3c420b780cff47a9db1e5b5d992caf5aafae30cd870ff6271e3cb653->leave($__internal_7cfb1aff3c420b780cff47a9db1e5b5d992caf5aafae30cd870ff6271e3cb653_prof);

        
        $__internal_658416d7cf536217b13bf6e7e930065c8c2b10c808ed9348a84eaaf46b29e19c->leave($__internal_658416d7cf536217b13bf6e7e930065c8c2b10c808ed9348a84eaaf46b29e19c_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  124 => 30,  117 => 26,  113 => 25,  108 => 24,  102 => 22,  100 => 21,  96 => 20,  90 => 16,  84 => 14,  81 => 13,  72 => 12,  59 => 9,  55 => 7,  50 => 6,  41 => 5,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\" />
{#<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />#}
<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\" />
{% endblock %}

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
                    <label id=\"usernameId\" for=\"username\">{{ 'Username:'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                    <label for=\"password\">{{ 'Password:'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Submit'|trans }}\" />
                </form>

            </div>
        </div>
    </div>
{% endblock fos_user_content %}
", "@App/User/login.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/User/login.html.twig");
    }
}
