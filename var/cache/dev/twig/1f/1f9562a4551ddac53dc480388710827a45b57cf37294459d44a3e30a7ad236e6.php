<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8dc5183bbcfcfa850990877982fb4113960b6dd5455a897552b7e18f03f849a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_561a32e0e87d61333269f43f90e9b14124fea0783f246143e6efd1bdecf9810b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561a32e0e87d61333269f43f90e9b14124fea0783f246143e6efd1bdecf9810b->enter($__internal_561a32e0e87d61333269f43f90e9b14124fea0783f246143e6efd1bdecf9810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_1828fcb4ad3a145051d3e3ddb2b22259e1828a7696d0d334d84e6979fbc314c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1828fcb4ad3a145051d3e3ddb2b22259e1828a7696d0d334d84e6979fbc314c6->enter($__internal_1828fcb4ad3a145051d3e3ddb2b22259e1828a7696d0d334d84e6979fbc314c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_561a32e0e87d61333269f43f90e9b14124fea0783f246143e6efd1bdecf9810b->leave($__internal_561a32e0e87d61333269f43f90e9b14124fea0783f246143e6efd1bdecf9810b_prof);

        
        $__internal_1828fcb4ad3a145051d3e3ddb2b22259e1828a7696d0d334d84e6979fbc314c6->leave($__internal_1828fcb4ad3a145051d3e3ddb2b22259e1828a7696d0d334d84e6979fbc314c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
