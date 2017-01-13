<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_ef1e159a2132496fc7d64e2534c506c2bb105f5e502abbd10730cfaae28c54d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_14d9f70b9b7832eb487e2ddfcf69ad0890da089cf7bcb3be2c8482a90297ec44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d9f70b9b7832eb487e2ddfcf69ad0890da089cf7bcb3be2c8482a90297ec44->enter($__internal_14d9f70b9b7832eb487e2ddfcf69ad0890da089cf7bcb3be2c8482a90297ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_999e81cea5bc3a7912f0c402981b68856403fe784c6e4dd6c3f3a92364aa0945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999e81cea5bc3a7912f0c402981b68856403fe784c6e4dd6c3f3a92364aa0945->enter($__internal_999e81cea5bc3a7912f0c402981b68856403fe784c6e4dd6c3f3a92364aa0945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d9f70b9b7832eb487e2ddfcf69ad0890da089cf7bcb3be2c8482a90297ec44->leave($__internal_14d9f70b9b7832eb487e2ddfcf69ad0890da089cf7bcb3be2c8482a90297ec44_prof);

        
        $__internal_999e81cea5bc3a7912f0c402981b68856403fe784c6e4dd6c3f3a92364aa0945->leave($__internal_999e81cea5bc3a7912f0c402981b68856403fe784c6e4dd6c3f3a92364aa0945_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_800861178eca1e07d616df3cbbb080a91d5b962021568a3300a34495c28b7cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800861178eca1e07d616df3cbbb080a91d5b962021568a3300a34495c28b7cc4->enter($__internal_800861178eca1e07d616df3cbbb080a91d5b962021568a3300a34495c28b7cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ebf90dcce1b6e1f11440da59ea8c4cc0b2c67438ff2ccceeaf4be04ad4bb0869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf90dcce1b6e1f11440da59ea8c4cc0b2c67438ff2ccceeaf4be04ad4bb0869->enter($__internal_ebf90dcce1b6e1f11440da59ea8c4cc0b2c67438ff2ccceeaf4be04ad4bb0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ebf90dcce1b6e1f11440da59ea8c4cc0b2c67438ff2ccceeaf4be04ad4bb0869->leave($__internal_ebf90dcce1b6e1f11440da59ea8c4cc0b2c67438ff2ccceeaf4be04ad4bb0869_prof);

        
        $__internal_800861178eca1e07d616df3cbbb080a91d5b962021568a3300a34495c28b7cc4->leave($__internal_800861178eca1e07d616df3cbbb080a91d5b962021568a3300a34495c28b7cc4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
