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
        $__internal_0a04264924191e836679da1dc1598739d29745c00f9f25afb5247f79ea8c2898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a04264924191e836679da1dc1598739d29745c00f9f25afb5247f79ea8c2898->enter($__internal_0a04264924191e836679da1dc1598739d29745c00f9f25afb5247f79ea8c2898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_3fc70a5b976465d34d9ad22a32c4840e3b6ff0fd0d15e3143d5f244729a34609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc70a5b976465d34d9ad22a32c4840e3b6ff0fd0d15e3143d5f244729a34609->enter($__internal_3fc70a5b976465d34d9ad22a32c4840e3b6ff0fd0d15e3143d5f244729a34609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a04264924191e836679da1dc1598739d29745c00f9f25afb5247f79ea8c2898->leave($__internal_0a04264924191e836679da1dc1598739d29745c00f9f25afb5247f79ea8c2898_prof);

        
        $__internal_3fc70a5b976465d34d9ad22a32c4840e3b6ff0fd0d15e3143d5f244729a34609->leave($__internal_3fc70a5b976465d34d9ad22a32c4840e3b6ff0fd0d15e3143d5f244729a34609_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0dfff9c71cf2e0f93076e172c1148af749eef9da824fcb1006d62edcaf75fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dfff9c71cf2e0f93076e172c1148af749eef9da824fcb1006d62edcaf75fad->enter($__internal_b0dfff9c71cf2e0f93076e172c1148af749eef9da824fcb1006d62edcaf75fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff0c8fcc5c30fdda5a0ad2b4383bf621a849f85834c9c0c9ded2ff64a2d7f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0c8fcc5c30fdda5a0ad2b4383bf621a849f85834c9c0c9ded2ff64a2d7f847->enter($__internal_ff0c8fcc5c30fdda5a0ad2b4383bf621a849f85834c9c0c9ded2ff64a2d7f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_ff0c8fcc5c30fdda5a0ad2b4383bf621a849f85834c9c0c9ded2ff64a2d7f847->leave($__internal_ff0c8fcc5c30fdda5a0ad2b4383bf621a849f85834c9c0c9ded2ff64a2d7f847_prof);

        
        $__internal_b0dfff9c71cf2e0f93076e172c1148af749eef9da824fcb1006d62edcaf75fad->leave($__internal_b0dfff9c71cf2e0f93076e172c1148af749eef9da824fcb1006d62edcaf75fad_prof);

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
