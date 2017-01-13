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
        $__internal_242de64b8d286ff7bb010568088a605c3b1147d2e31b15f4ba7d6a18e9a93d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242de64b8d286ff7bb010568088a605c3b1147d2e31b15f4ba7d6a18e9a93d79->enter($__internal_242de64b8d286ff7bb010568088a605c3b1147d2e31b15f4ba7d6a18e9a93d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_75cde255a858abda8269fb110695025c118f4c8402801d45da9b12cce89bb7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cde255a858abda8269fb110695025c118f4c8402801d45da9b12cce89bb7e0->enter($__internal_75cde255a858abda8269fb110695025c118f4c8402801d45da9b12cce89bb7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_242de64b8d286ff7bb010568088a605c3b1147d2e31b15f4ba7d6a18e9a93d79->leave($__internal_242de64b8d286ff7bb010568088a605c3b1147d2e31b15f4ba7d6a18e9a93d79_prof);

        
        $__internal_75cde255a858abda8269fb110695025c118f4c8402801d45da9b12cce89bb7e0->leave($__internal_75cde255a858abda8269fb110695025c118f4c8402801d45da9b12cce89bb7e0_prof);

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
