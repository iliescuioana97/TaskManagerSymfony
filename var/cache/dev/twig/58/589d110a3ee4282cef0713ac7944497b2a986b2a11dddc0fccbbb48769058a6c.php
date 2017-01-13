<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_061f1d76a5e686cd7809995cd4d3fc1f4c1294393e57d9d5a707b9026d69b108 extends Twig_Template
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
        $__internal_d975846931fa659c3af17b7364bae8d8db04c235525276c3e9726e762499dc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d975846931fa659c3af17b7364bae8d8db04c235525276c3e9726e762499dc2b->enter($__internal_d975846931fa659c3af17b7364bae8d8db04c235525276c3e9726e762499dc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b90f63b4ea7d1720511174c57ef39f7aac24fe7340249fa4ac3a5da9bd97e4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90f63b4ea7d1720511174c57ef39f7aac24fe7340249fa4ac3a5da9bd97e4b0->enter($__internal_b90f63b4ea7d1720511174c57ef39f7aac24fe7340249fa4ac3a5da9bd97e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d975846931fa659c3af17b7364bae8d8db04c235525276c3e9726e762499dc2b->leave($__internal_d975846931fa659c3af17b7364bae8d8db04c235525276c3e9726e762499dc2b_prof);

        
        $__internal_b90f63b4ea7d1720511174c57ef39f7aac24fe7340249fa4ac3a5da9bd97e4b0->leave($__internal_b90f63b4ea7d1720511174c57ef39f7aac24fe7340249fa4ac3a5da9bd97e4b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
