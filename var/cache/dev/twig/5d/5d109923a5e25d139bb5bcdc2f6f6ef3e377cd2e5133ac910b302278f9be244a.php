<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_06a8a5aaa4ea4e58956f050eac9a49e0cd2ecb6258ca15f5a4f3535cea552400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c915dc90293654bb6b7ce45eba63133a1bf509df5dd7f8d5765d00c4fa9cab70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c915dc90293654bb6b7ce45eba63133a1bf509df5dd7f8d5765d00c4fa9cab70->enter($__internal_c915dc90293654bb6b7ce45eba63133a1bf509df5dd7f8d5765d00c4fa9cab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_828cc348610dae4adc88b4d4652987ab8420b78539137830195a463f9d9261e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828cc348610dae4adc88b4d4652987ab8420b78539137830195a463f9d9261e2->enter($__internal_828cc348610dae4adc88b4d4652987ab8420b78539137830195a463f9d9261e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c915dc90293654bb6b7ce45eba63133a1bf509df5dd7f8d5765d00c4fa9cab70->leave($__internal_c915dc90293654bb6b7ce45eba63133a1bf509df5dd7f8d5765d00c4fa9cab70_prof);

        
        $__internal_828cc348610dae4adc88b4d4652987ab8420b78539137830195a463f9d9261e2->leave($__internal_828cc348610dae4adc88b4d4652987ab8420b78539137830195a463f9d9261e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b659814cbc00fb758ddc8282f5b5db5eab0aebb4ad50adb05770990c2d499161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b659814cbc00fb758ddc8282f5b5db5eab0aebb4ad50adb05770990c2d499161->enter($__internal_b659814cbc00fb758ddc8282f5b5db5eab0aebb4ad50adb05770990c2d499161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a5512c3b51bc75541fb5c8a15424735adc3ad66cb40683dd2fe22e97dc69081a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5512c3b51bc75541fb5c8a15424735adc3ad66cb40683dd2fe22e97dc69081a->enter($__internal_a5512c3b51bc75541fb5c8a15424735adc3ad66cb40683dd2fe22e97dc69081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a5512c3b51bc75541fb5c8a15424735adc3ad66cb40683dd2fe22e97dc69081a->leave($__internal_a5512c3b51bc75541fb5c8a15424735adc3ad66cb40683dd2fe22e97dc69081a_prof);

        
        $__internal_b659814cbc00fb758ddc8282f5b5db5eab0aebb4ad50adb05770990c2d499161->leave($__internal_b659814cbc00fb758ddc8282f5b5db5eab0aebb4ad50adb05770990c2d499161_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
