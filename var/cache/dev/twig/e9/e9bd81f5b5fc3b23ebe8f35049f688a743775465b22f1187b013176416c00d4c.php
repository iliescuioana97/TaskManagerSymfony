<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5fed5c89402dbef73840e4eaab01009d5b89c930c5a0c1e864f8f2fc6f47bb52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_c94ae7d57bb8bf34a2de1a1d7b78ca9ea918ba43ea61d4dcd1883e1de9de7632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94ae7d57bb8bf34a2de1a1d7b78ca9ea918ba43ea61d4dcd1883e1de9de7632->enter($__internal_c94ae7d57bb8bf34a2de1a1d7b78ca9ea918ba43ea61d4dcd1883e1de9de7632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3d42bcacbc9cc245e239ccb676438ae8bdb6acdd4ce2454ab38570c2d33066b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d42bcacbc9cc245e239ccb676438ae8bdb6acdd4ce2454ab38570c2d33066b2->enter($__internal_3d42bcacbc9cc245e239ccb676438ae8bdb6acdd4ce2454ab38570c2d33066b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c94ae7d57bb8bf34a2de1a1d7b78ca9ea918ba43ea61d4dcd1883e1de9de7632->leave($__internal_c94ae7d57bb8bf34a2de1a1d7b78ca9ea918ba43ea61d4dcd1883e1de9de7632_prof);

        
        $__internal_3d42bcacbc9cc245e239ccb676438ae8bdb6acdd4ce2454ab38570c2d33066b2->leave($__internal_3d42bcacbc9cc245e239ccb676438ae8bdb6acdd4ce2454ab38570c2d33066b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_459313a7fdefa4e9c2b1b125826369fd7001747661f7e7919c874b22c02fb2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459313a7fdefa4e9c2b1b125826369fd7001747661f7e7919c874b22c02fb2a0->enter($__internal_459313a7fdefa4e9c2b1b125826369fd7001747661f7e7919c874b22c02fb2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ef7f4a37a98ef7439a41f361af02d8e42121380a7ed2c7b9b765161301ca60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef7f4a37a98ef7439a41f361af02d8e42121380a7ed2c7b9b765161301ca60c->enter($__internal_2ef7f4a37a98ef7439a41f361af02d8e42121380a7ed2c7b9b765161301ca60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2ef7f4a37a98ef7439a41f361af02d8e42121380a7ed2c7b9b765161301ca60c->leave($__internal_2ef7f4a37a98ef7439a41f361af02d8e42121380a7ed2c7b9b765161301ca60c_prof);

        
        $__internal_459313a7fdefa4e9c2b1b125826369fd7001747661f7e7919c874b22c02fb2a0->leave($__internal_459313a7fdefa4e9c2b1b125826369fd7001747661f7e7919c874b22c02fb2a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
