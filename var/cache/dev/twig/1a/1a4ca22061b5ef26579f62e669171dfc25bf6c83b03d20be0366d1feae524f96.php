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
        $__internal_8bc7580bf910ab9553a72b25bf49e994860b48a4dc44b7920af19ae80fe299d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc7580bf910ab9553a72b25bf49e994860b48a4dc44b7920af19ae80fe299d4->enter($__internal_8bc7580bf910ab9553a72b25bf49e994860b48a4dc44b7920af19ae80fe299d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $__internal_4c88f652d0606147a83d62e49a85353ddd4fc08077fb27ea24eaab0bb6c9bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c88f652d0606147a83d62e49a85353ddd4fc08077fb27ea24eaab0bb6c9bf7b->enter($__internal_4c88f652d0606147a83d62e49a85353ddd4fc08077fb27ea24eaab0bb6c9bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc7580bf910ab9553a72b25bf49e994860b48a4dc44b7920af19ae80fe299d4->leave($__internal_8bc7580bf910ab9553a72b25bf49e994860b48a4dc44b7920af19ae80fe299d4_prof);

        
        $__internal_4c88f652d0606147a83d62e49a85353ddd4fc08077fb27ea24eaab0bb6c9bf7b->leave($__internal_4c88f652d0606147a83d62e49a85353ddd4fc08077fb27ea24eaab0bb6c9bf7b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_366f0b1cb9068c27f17dd1bf234c98d72c32e67688d045eb544f045998936c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366f0b1cb9068c27f17dd1bf234c98d72c32e67688d045eb544f045998936c72->enter($__internal_366f0b1cb9068c27f17dd1bf234c98d72c32e67688d045eb544f045998936c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f4257201d69107b60b4cf409086db63d40e8d7ea9879cc7fcfedd0024ed8865f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4257201d69107b60b4cf409086db63d40e8d7ea9879cc7fcfedd0024ed8865f->enter($__internal_f4257201d69107b60b4cf409086db63d40e8d7ea9879cc7fcfedd0024ed8865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
    
    <style>
        #usernameId {
            color:#f00;
        }
    </style>
";
        
        $__internal_f4257201d69107b60b4cf409086db63d40e8d7ea9879cc7fcfedd0024ed8865f->leave($__internal_f4257201d69107b60b4cf409086db63d40e8d7ea9879cc7fcfedd0024ed8865f_prof);

        
        $__internal_366f0b1cb9068c27f17dd1bf234c98d72c32e67688d045eb544f045998936c72->leave($__internal_366f0b1cb9068c27f17dd1bf234c98d72c32e67688d045eb544f045998936c72_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_938ee53d4b3d9590d26ed127df0486811075aeac2b59b04642cdaddaed8124c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938ee53d4b3d9590d26ed127df0486811075aeac2b59b04642cdaddaed8124c9->enter($__internal_938ee53d4b3d9590d26ed127df0486811075aeac2b59b04642cdaddaed8124c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ed1e0441b753b297885bfdc954ed7f8b41dd3476d859df7e667b0463d3de3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed1e0441b753b297885bfdc954ed7f8b41dd3476d859df7e667b0463d3de3bc->enter($__internal_6ed1e0441b753b297885bfdc954ed7f8b41dd3476d859df7e667b0463d3de3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 17
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 19
        echo "
    <div >
        <div >
                <form style=\"margin-left:500px; margin-top: 160px;\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 23
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 24
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 26
        echo "                    
                    <div style=\"display:block; margin-bottom: 30px; margin-top: 30px;\">
                    <label id=\"usernameId\" for=\"username\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username:", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    
                    <div style=\"display:block; margin-bottom: 30px; margin-top: 30px;\">
                    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password:", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                    
                    <div style=\"display:block; margin-bottom: 20px; margin-top: 30px; margin-left: 70px;\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                    
                    <input style=\"margin-left: 105px;\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>

            </div>
    </div>
";
        
        $__internal_6ed1e0441b753b297885bfdc954ed7f8b41dd3476d859df7e667b0463d3de3bc->leave($__internal_6ed1e0441b753b297885bfdc954ed7f8b41dd3476d859df7e667b0463d3de3bc_prof);

        
        $__internal_938ee53d4b3d9590d26ed127df0486811075aeac2b59b04642cdaddaed8124c9->leave($__internal_938ee53d4b3d9590d26ed127df0486811075aeac2b59b04642cdaddaed8124c9_prof);

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
        return array (  134 => 42,  128 => 39,  119 => 33,  112 => 29,  108 => 28,  104 => 26,  98 => 24,  96 => 23,  92 => 22,  87 => 19,  81 => 17,  78 => 16,  69 => 15,  50 => 6,  41 => 5,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\" />
    
    <style>
        #usernameId {
            color:#f00;
        }
    </style>
{% endblock %}

{% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div >
        <div >
                <form style=\"margin-left:500px; margin-top: 160px;\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                    
                    <div style=\"display:block; margin-bottom: 30px; margin-top: 30px;\">
                    <label id=\"usernameId\" for=\"username\">{{ 'Username:'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                    </div>
                    
                    <div style=\"display:block; margin-bottom: 30px; margin-top: 30px;\">
                    <label for=\"password\">{{ 'Password:'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                    
                    <div style=\"display:block; margin-bottom: 20px; margin-top: 30px; margin-left: 70px;\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>
                    </div>
                    
                    <input style=\"margin-left: 105px;\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Submit'|trans }}\" />
                </form>

            </div>
    </div>
{% endblock fos_user_content %}
", "AppBundle:User:login.html.twig", "/home/ioana/Projects/task-manager-symfony/var/cache/dev/../../../src/AppBundle/Resources/views/User/login.html.twig");
    }
}
