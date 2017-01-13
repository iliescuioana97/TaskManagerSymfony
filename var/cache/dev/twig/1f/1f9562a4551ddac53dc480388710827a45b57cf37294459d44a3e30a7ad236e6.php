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
        $__internal_403b58aad1632b368c6c60ffe2bd83b2498ecb461c57f9642f8cd29423b233df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403b58aad1632b368c6c60ffe2bd83b2498ecb461c57f9642f8cd29423b233df->enter($__internal_403b58aad1632b368c6c60ffe2bd83b2498ecb461c57f9642f8cd29423b233df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_c9dc98d756fe8ad9201a28a2127fe8c7da30ad4643c203ac6ee911fb3b5ca7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dc98d756fe8ad9201a28a2127fe8c7da30ad4643c203ac6ee911fb3b5ca7e8->enter($__internal_c9dc98d756fe8ad9201a28a2127fe8c7da30ad4643c203ac6ee911fb3b5ca7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_403b58aad1632b368c6c60ffe2bd83b2498ecb461c57f9642f8cd29423b233df->leave($__internal_403b58aad1632b368c6c60ffe2bd83b2498ecb461c57f9642f8cd29423b233df_prof);

        
        $__internal_c9dc98d756fe8ad9201a28a2127fe8c7da30ad4643c203ac6ee911fb3b5ca7e8->leave($__internal_c9dc98d756fe8ad9201a28a2127fe8c7da30ad4643c203ac6ee911fb3b5ca7e8_prof);

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
