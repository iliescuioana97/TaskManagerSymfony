<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_7b94b84caf35c0041cc995d63b012af0b68e9614a698164ca74a82eb136e4a91 extends Twig_Template
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
        $__internal_508bbc6fa1ea28d8f14f79a7fa572129b92d8fbdcded42114d7387678cc83469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508bbc6fa1ea28d8f14f79a7fa572129b92d8fbdcded42114d7387678cc83469->enter($__internal_508bbc6fa1ea28d8f14f79a7fa572129b92d8fbdcded42114d7387678cc83469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_31c63994ae0baff25b98c890bb9b195788a2255775da361b8da13dd0ae757c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c63994ae0baff25b98c890bb9b195788a2255775da361b8da13dd0ae757c56->enter($__internal_31c63994ae0baff25b98c890bb9b195788a2255775da361b8da13dd0ae757c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_508bbc6fa1ea28d8f14f79a7fa572129b92d8fbdcded42114d7387678cc83469->leave($__internal_508bbc6fa1ea28d8f14f79a7fa572129b92d8fbdcded42114d7387678cc83469_prof);

        
        $__internal_31c63994ae0baff25b98c890bb9b195788a2255775da361b8da13dd0ae757c56->leave($__internal_31c63994ae0baff25b98c890bb9b195788a2255775da361b8da13dd0ae757c56_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
