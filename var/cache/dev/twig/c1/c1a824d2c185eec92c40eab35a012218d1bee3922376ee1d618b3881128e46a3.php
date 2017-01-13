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
        $__internal_fd11fbe042b0258cd53d6e83967eb3fd1a3d63c74f6d7359c18c1dc7a6d4f9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd11fbe042b0258cd53d6e83967eb3fd1a3d63c74f6d7359c18c1dc7a6d4f9da->enter($__internal_fd11fbe042b0258cd53d6e83967eb3fd1a3d63c74f6d7359c18c1dc7a6d4f9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_0e210dd0f59a5386a75dcb9e71362fe3ffe25f0542718442959824653d8568a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e210dd0f59a5386a75dcb9e71362fe3ffe25f0542718442959824653d8568a8->enter($__internal_0e210dd0f59a5386a75dcb9e71362fe3ffe25f0542718442959824653d8568a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd11fbe042b0258cd53d6e83967eb3fd1a3d63c74f6d7359c18c1dc7a6d4f9da->leave($__internal_fd11fbe042b0258cd53d6e83967eb3fd1a3d63c74f6d7359c18c1dc7a6d4f9da_prof);

        
        $__internal_0e210dd0f59a5386a75dcb9e71362fe3ffe25f0542718442959824653d8568a8->leave($__internal_0e210dd0f59a5386a75dcb9e71362fe3ffe25f0542718442959824653d8568a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c47e73ae521a704068fa8ffe18f3cf07e6be6a51877cfdccfcb03d9da88dc060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47e73ae521a704068fa8ffe18f3cf07e6be6a51877cfdccfcb03d9da88dc060->enter($__internal_c47e73ae521a704068fa8ffe18f3cf07e6be6a51877cfdccfcb03d9da88dc060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_369f4831828cea94228494206f6272887d8d957ea0a4ba846d3ec5eda37ab58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369f4831828cea94228494206f6272887d8d957ea0a4ba846d3ec5eda37ab58f->enter($__internal_369f4831828cea94228494206f6272887d8d957ea0a4ba846d3ec5eda37ab58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_369f4831828cea94228494206f6272887d8d957ea0a4ba846d3ec5eda37ab58f->leave($__internal_369f4831828cea94228494206f6272887d8d957ea0a4ba846d3ec5eda37ab58f_prof);

        
        $__internal_c47e73ae521a704068fa8ffe18f3cf07e6be6a51877cfdccfcb03d9da88dc060->leave($__internal_c47e73ae521a704068fa8ffe18f3cf07e6be6a51877cfdccfcb03d9da88dc060_prof);

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
