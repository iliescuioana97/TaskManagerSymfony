<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ce7f1e2e6d8589e5638399e10f8789ed8a81edadb4b7413d28b0c36012327320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e2c0507cb9fcc1c82739ab911f7c0bad80762cd2b49be922b9c8da3a3407afb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c0507cb9fcc1c82739ab911f7c0bad80762cd2b49be922b9c8da3a3407afb0->enter($__internal_e2c0507cb9fcc1c82739ab911f7c0bad80762cd2b49be922b9c8da3a3407afb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_da3f0f16c669c1b9cc8eb252fcfea2c501b68553c720a7de8157be17936b6a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3f0f16c669c1b9cc8eb252fcfea2c501b68553c720a7de8157be17936b6a94->enter($__internal_da3f0f16c669c1b9cc8eb252fcfea2c501b68553c720a7de8157be17936b6a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c0507cb9fcc1c82739ab911f7c0bad80762cd2b49be922b9c8da3a3407afb0->leave($__internal_e2c0507cb9fcc1c82739ab911f7c0bad80762cd2b49be922b9c8da3a3407afb0_prof);

        
        $__internal_da3f0f16c669c1b9cc8eb252fcfea2c501b68553c720a7de8157be17936b6a94->leave($__internal_da3f0f16c669c1b9cc8eb252fcfea2c501b68553c720a7de8157be17936b6a94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c94fa0edea776121d4acc301ccd36659cbf68484c8822e135700169ea913c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c94fa0edea776121d4acc301ccd36659cbf68484c8822e135700169ea913c75->enter($__internal_6c94fa0edea776121d4acc301ccd36659cbf68484c8822e135700169ea913c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9dce525081aba0ef2c670d97b3c38244e3e05caf0b0b8874295c972c01396e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dce525081aba0ef2c670d97b3c38244e3e05caf0b0b8874295c972c01396e2b->enter($__internal_9dce525081aba0ef2c670d97b3c38244e3e05caf0b0b8874295c972c01396e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9dce525081aba0ef2c670d97b3c38244e3e05caf0b0b8874295c972c01396e2b->leave($__internal_9dce525081aba0ef2c670d97b3c38244e3e05caf0b0b8874295c972c01396e2b_prof);

        
        $__internal_6c94fa0edea776121d4acc301ccd36659cbf68484c8822e135700169ea913c75->leave($__internal_6c94fa0edea776121d4acc301ccd36659cbf68484c8822e135700169ea913c75_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
