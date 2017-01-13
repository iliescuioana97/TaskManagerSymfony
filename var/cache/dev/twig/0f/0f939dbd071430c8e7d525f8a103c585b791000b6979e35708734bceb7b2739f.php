<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d16e6dd4a1a444ccd2a311257927a174f6576abc66b818ad00dece7f71caf608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_055197ece01ab692f4fa3a0207f50ca61a5e2d360987c68520531a2e9cf40569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055197ece01ab692f4fa3a0207f50ca61a5e2d360987c68520531a2e9cf40569->enter($__internal_055197ece01ab692f4fa3a0207f50ca61a5e2d360987c68520531a2e9cf40569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a86441de7940532baf05b6dbe6c67b7f2f3e972007e6d802c20751bc77ae4c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86441de7940532baf05b6dbe6c67b7f2f3e972007e6d802c20751bc77ae4c92->enter($__internal_a86441de7940532baf05b6dbe6c67b7f2f3e972007e6d802c20751bc77ae4c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055197ece01ab692f4fa3a0207f50ca61a5e2d360987c68520531a2e9cf40569->leave($__internal_055197ece01ab692f4fa3a0207f50ca61a5e2d360987c68520531a2e9cf40569_prof);

        
        $__internal_a86441de7940532baf05b6dbe6c67b7f2f3e972007e6d802c20751bc77ae4c92->leave($__internal_a86441de7940532baf05b6dbe6c67b7f2f3e972007e6d802c20751bc77ae4c92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_951adb1d162a602a918dce4ac5773dc8f991dc805b0365b7268cb6b21c30bb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951adb1d162a602a918dce4ac5773dc8f991dc805b0365b7268cb6b21c30bb54->enter($__internal_951adb1d162a602a918dce4ac5773dc8f991dc805b0365b7268cb6b21c30bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2de92206699e51b3f342f0d4a04a9c347d1c1f301ad95cac854f3e6dc53679fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de92206699e51b3f342f0d4a04a9c347d1c1f301ad95cac854f3e6dc53679fa->enter($__internal_2de92206699e51b3f342f0d4a04a9c347d1c1f301ad95cac854f3e6dc53679fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2de92206699e51b3f342f0d4a04a9c347d1c1f301ad95cac854f3e6dc53679fa->leave($__internal_2de92206699e51b3f342f0d4a04a9c347d1c1f301ad95cac854f3e6dc53679fa_prof);

        
        $__internal_951adb1d162a602a918dce4ac5773dc8f991dc805b0365b7268cb6b21c30bb54->leave($__internal_951adb1d162a602a918dce4ac5773dc8f991dc805b0365b7268cb6b21c30bb54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
