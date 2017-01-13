<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5fed5c89402dbef73840e4eaab01009d5b89c930c5a0c1e864f8f2fc6f47bb52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_bc200b0f7f19ec4d52f398e514a485cdbb10e3aa703fd73cd0368c6660832ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc200b0f7f19ec4d52f398e514a485cdbb10e3aa703fd73cd0368c6660832ad9->enter($__internal_bc200b0f7f19ec4d52f398e514a485cdbb10e3aa703fd73cd0368c6660832ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_13da534f60e51dd7db8f29d0098b9ddcaec9693d3af9f18cbca5ea071602be04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13da534f60e51dd7db8f29d0098b9ddcaec9693d3af9f18cbca5ea071602be04->enter($__internal_13da534f60e51dd7db8f29d0098b9ddcaec9693d3af9f18cbca5ea071602be04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc200b0f7f19ec4d52f398e514a485cdbb10e3aa703fd73cd0368c6660832ad9->leave($__internal_bc200b0f7f19ec4d52f398e514a485cdbb10e3aa703fd73cd0368c6660832ad9_prof);

        
        $__internal_13da534f60e51dd7db8f29d0098b9ddcaec9693d3af9f18cbca5ea071602be04->leave($__internal_13da534f60e51dd7db8f29d0098b9ddcaec9693d3af9f18cbca5ea071602be04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd406e2793937f4955ff01f28fc04a09792fe8cfe3fa790bf2eae3461ef90088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd406e2793937f4955ff01f28fc04a09792fe8cfe3fa790bf2eae3461ef90088->enter($__internal_dd406e2793937f4955ff01f28fc04a09792fe8cfe3fa790bf2eae3461ef90088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8f7975cdfb329e3630b13f9c5d8c957d3862bc8f52f087c5eb42a1327da2317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f7975cdfb329e3630b13f9c5d8c957d3862bc8f52f087c5eb42a1327da2317->enter($__internal_f8f7975cdfb329e3630b13f9c5d8c957d3862bc8f52f087c5eb42a1327da2317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f8f7975cdfb329e3630b13f9c5d8c957d3862bc8f52f087c5eb42a1327da2317->leave($__internal_f8f7975cdfb329e3630b13f9c5d8c957d3862bc8f52f087c5eb42a1327da2317_prof);

        
        $__internal_dd406e2793937f4955ff01f28fc04a09792fe8cfe3fa790bf2eae3461ef90088->leave($__internal_dd406e2793937f4955ff01f28fc04a09792fe8cfe3fa790bf2eae3461ef90088_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
