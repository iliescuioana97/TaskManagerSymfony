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
        $__internal_879f22078d51a213efbda6bed3b986d7a31e36a9242a333263a813f4999bab84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879f22078d51a213efbda6bed3b986d7a31e36a9242a333263a813f4999bab84->enter($__internal_879f22078d51a213efbda6bed3b986d7a31e36a9242a333263a813f4999bab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_7e642a7af40eb9b2cf3070aec03b7e4a4c906548d13bf13af9d760c906aa461b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e642a7af40eb9b2cf3070aec03b7e4a4c906548d13bf13af9d760c906aa461b->enter($__internal_7e642a7af40eb9b2cf3070aec03b7e4a4c906548d13bf13af9d760c906aa461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879f22078d51a213efbda6bed3b986d7a31e36a9242a333263a813f4999bab84->leave($__internal_879f22078d51a213efbda6bed3b986d7a31e36a9242a333263a813f4999bab84_prof);

        
        $__internal_7e642a7af40eb9b2cf3070aec03b7e4a4c906548d13bf13af9d760c906aa461b->leave($__internal_7e642a7af40eb9b2cf3070aec03b7e4a4c906548d13bf13af9d760c906aa461b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2a2a463b7959558c7b3ab1611434629b07a1d0f4fd7c7a2b3f9fe62ba03cad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a2a463b7959558c7b3ab1611434629b07a1d0f4fd7c7a2b3f9fe62ba03cad0->enter($__internal_c2a2a463b7959558c7b3ab1611434629b07a1d0f4fd7c7a2b3f9fe62ba03cad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70b8e2985c9269cc34ef88082e20c77bcb25840c8040f8ac13e90f5cbbad8e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b8e2985c9269cc34ef88082e20c77bcb25840c8040f8ac13e90f5cbbad8e8a->enter($__internal_70b8e2985c9269cc34ef88082e20c77bcb25840c8040f8ac13e90f5cbbad8e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_70b8e2985c9269cc34ef88082e20c77bcb25840c8040f8ac13e90f5cbbad8e8a->leave($__internal_70b8e2985c9269cc34ef88082e20c77bcb25840c8040f8ac13e90f5cbbad8e8a_prof);

        
        $__internal_c2a2a463b7959558c7b3ab1611434629b07a1d0f4fd7c7a2b3f9fe62ba03cad0->leave($__internal_c2a2a463b7959558c7b3ab1611434629b07a1d0f4fd7c7a2b3f9fe62ba03cad0_prof);

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
