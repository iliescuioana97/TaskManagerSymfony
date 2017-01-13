<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_85f4fd61e6faa14c86f6a34701a12218b1dc69fb3fc2cc3070a8054bea5691f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5818b96f3a478a606c15297628af0fadbb3ec88f3cd98652a1b5b355714deff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5818b96f3a478a606c15297628af0fadbb3ec88f3cd98652a1b5b355714deff4->enter($__internal_5818b96f3a478a606c15297628af0fadbb3ec88f3cd98652a1b5b355714deff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_ac94fbea3f69666b1fe3abd3e7397e0d4ed17c40df370012fdac4f838406b465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac94fbea3f69666b1fe3abd3e7397e0d4ed17c40df370012fdac4f838406b465->enter($__internal_ac94fbea3f69666b1fe3abd3e7397e0d4ed17c40df370012fdac4f838406b465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5818b96f3a478a606c15297628af0fadbb3ec88f3cd98652a1b5b355714deff4->leave($__internal_5818b96f3a478a606c15297628af0fadbb3ec88f3cd98652a1b5b355714deff4_prof);

        
        $__internal_ac94fbea3f69666b1fe3abd3e7397e0d4ed17c40df370012fdac4f838406b465->leave($__internal_ac94fbea3f69666b1fe3abd3e7397e0d4ed17c40df370012fdac4f838406b465_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a76bbcde9d2a06a690682fab7464d579e0d17b0785308545a21af7b9171698f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a76bbcde9d2a06a690682fab7464d579e0d17b0785308545a21af7b9171698f->enter($__internal_6a76bbcde9d2a06a690682fab7464d579e0d17b0785308545a21af7b9171698f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8e10c70447174083e8017062284f438690497cc7ac9dabfd327e30fea0bf123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e10c70447174083e8017062284f438690497cc7ac9dabfd327e30fea0bf123->enter($__internal_a8e10c70447174083e8017062284f438690497cc7ac9dabfd327e30fea0bf123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_a8e10c70447174083e8017062284f438690497cc7ac9dabfd327e30fea0bf123->leave($__internal_a8e10c70447174083e8017062284f438690497cc7ac9dabfd327e30fea0bf123_prof);

        
        $__internal_6a76bbcde9d2a06a690682fab7464d579e0d17b0785308545a21af7b9171698f->leave($__internal_6a76bbcde9d2a06a690682fab7464d579e0d17b0785308545a21af7b9171698f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
