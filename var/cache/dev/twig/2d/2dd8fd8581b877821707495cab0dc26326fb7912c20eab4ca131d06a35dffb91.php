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
        $__internal_5cff3fdbe471df496059042b074718a4d6675f06a4e6daf9a373c79967d57e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cff3fdbe471df496059042b074718a4d6675f06a4e6daf9a373c79967d57e40->enter($__internal_5cff3fdbe471df496059042b074718a4d6675f06a4e6daf9a373c79967d57e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_d3aee49963e78f3d7602f6b85128ef4d11960754c1b47c75bf4e7bb5465d09dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3aee49963e78f3d7602f6b85128ef4d11960754c1b47c75bf4e7bb5465d09dc->enter($__internal_d3aee49963e78f3d7602f6b85128ef4d11960754c1b47c75bf4e7bb5465d09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5cff3fdbe471df496059042b074718a4d6675f06a4e6daf9a373c79967d57e40->leave($__internal_5cff3fdbe471df496059042b074718a4d6675f06a4e6daf9a373c79967d57e40_prof);

        
        $__internal_d3aee49963e78f3d7602f6b85128ef4d11960754c1b47c75bf4e7bb5465d09dc->leave($__internal_d3aee49963e78f3d7602f6b85128ef4d11960754c1b47c75bf4e7bb5465d09dc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_76138d1ab2f258f4de2c472a4f031d5c6181e73209b2c4e0ed69b1b93886a9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76138d1ab2f258f4de2c472a4f031d5c6181e73209b2c4e0ed69b1b93886a9ee->enter($__internal_76138d1ab2f258f4de2c472a4f031d5c6181e73209b2c4e0ed69b1b93886a9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2661807e30c8c47f02a2c5ca63606b7795689dfc5df7e422b1dd588809acc15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2661807e30c8c47f02a2c5ca63606b7795689dfc5df7e422b1dd588809acc15a->enter($__internal_2661807e30c8c47f02a2c5ca63606b7795689dfc5df7e422b1dd588809acc15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2661807e30c8c47f02a2c5ca63606b7795689dfc5df7e422b1dd588809acc15a->leave($__internal_2661807e30c8c47f02a2c5ca63606b7795689dfc5df7e422b1dd588809acc15a_prof);

        
        $__internal_76138d1ab2f258f4de2c472a4f031d5c6181e73209b2c4e0ed69b1b93886a9ee->leave($__internal_76138d1ab2f258f4de2c472a4f031d5c6181e73209b2c4e0ed69b1b93886a9ee_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c36049ebc3ff5096b9ea07277574355063f3133d23d4e0d33ed2d67ed4ef02e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36049ebc3ff5096b9ea07277574355063f3133d23d4e0d33ed2d67ed4ef02e6->enter($__internal_c36049ebc3ff5096b9ea07277574355063f3133d23d4e0d33ed2d67ed4ef02e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_abd516b843291119dd6c13f25a4989dfee96ad051b3adbc6f6de2378e0fe17ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd516b843291119dd6c13f25a4989dfee96ad051b3adbc6f6de2378e0fe17ac->enter($__internal_abd516b843291119dd6c13f25a4989dfee96ad051b3adbc6f6de2378e0fe17ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abd516b843291119dd6c13f25a4989dfee96ad051b3adbc6f6de2378e0fe17ac->leave($__internal_abd516b843291119dd6c13f25a4989dfee96ad051b3adbc6f6de2378e0fe17ac_prof);

        
        $__internal_c36049ebc3ff5096b9ea07277574355063f3133d23d4e0d33ed2d67ed4ef02e6->leave($__internal_c36049ebc3ff5096b9ea07277574355063f3133d23d4e0d33ed2d67ed4ef02e6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_abb4e74c7fc5966abd332e9c1aa9c724811f5a7b0df807bd447d86263ebe279b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb4e74c7fc5966abd332e9c1aa9c724811f5a7b0df807bd447d86263ebe279b->enter($__internal_abb4e74c7fc5966abd332e9c1aa9c724811f5a7b0df807bd447d86263ebe279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4145dba8b3274302155854bc7675b597487d8da455e60ca316f03ad81650355f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4145dba8b3274302155854bc7675b597487d8da455e60ca316f03ad81650355f->enter($__internal_4145dba8b3274302155854bc7675b597487d8da455e60ca316f03ad81650355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4145dba8b3274302155854bc7675b597487d8da455e60ca316f03ad81650355f->leave($__internal_4145dba8b3274302155854bc7675b597487d8da455e60ca316f03ad81650355f_prof);

        
        $__internal_abb4e74c7fc5966abd332e9c1aa9c724811f5a7b0df807bd447d86263ebe279b->leave($__internal_abb4e74c7fc5966abd332e9c1aa9c724811f5a7b0df807bd447d86263ebe279b_prof);

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
