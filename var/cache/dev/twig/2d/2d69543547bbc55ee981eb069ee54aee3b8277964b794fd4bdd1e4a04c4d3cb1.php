<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_571cbc60c0393f2a7af9a0199a05fc9097967f4ae558e5357c84c808ea14c1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ce9f0c0a51ed95950b9290ca47d48245321d82316434fd997406e7e8fc55bbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9f0c0a51ed95950b9290ca47d48245321d82316434fd997406e7e8fc55bbf1->enter($__internal_ce9f0c0a51ed95950b9290ca47d48245321d82316434fd997406e7e8fc55bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_3bca0563941b52be77c81c856dda712e6c6133652c9a23c3bf398f86a0a7c5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bca0563941b52be77c81c856dda712e6c6133652c9a23c3bf398f86a0a7c5bf->enter($__internal_3bca0563941b52be77c81c856dda712e6c6133652c9a23c3bf398f86a0a7c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9f0c0a51ed95950b9290ca47d48245321d82316434fd997406e7e8fc55bbf1->leave($__internal_ce9f0c0a51ed95950b9290ca47d48245321d82316434fd997406e7e8fc55bbf1_prof);

        
        $__internal_3bca0563941b52be77c81c856dda712e6c6133652c9a23c3bf398f86a0a7c5bf->leave($__internal_3bca0563941b52be77c81c856dda712e6c6133652c9a23c3bf398f86a0a7c5bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_162941ebf0130b132e51ab13535bc3e9b52d8764271c645783bf4c7cf3bab3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162941ebf0130b132e51ab13535bc3e9b52d8764271c645783bf4c7cf3bab3b7->enter($__internal_162941ebf0130b132e51ab13535bc3e9b52d8764271c645783bf4c7cf3bab3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2dd846485b1abdf01d7006e9f9aa3f9ca7bdec8693feeed023b73a843eb747b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd846485b1abdf01d7006e9f9aa3f9ca7bdec8693feeed023b73a843eb747b5->enter($__internal_2dd846485b1abdf01d7006e9f9aa3f9ca7bdec8693feeed023b73a843eb747b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2dd846485b1abdf01d7006e9f9aa3f9ca7bdec8693feeed023b73a843eb747b5->leave($__internal_2dd846485b1abdf01d7006e9f9aa3f9ca7bdec8693feeed023b73a843eb747b5_prof);

        
        $__internal_162941ebf0130b132e51ab13535bc3e9b52d8764271c645783bf4c7cf3bab3b7->leave($__internal_162941ebf0130b132e51ab13535bc3e9b52d8764271c645783bf4c7cf3bab3b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
