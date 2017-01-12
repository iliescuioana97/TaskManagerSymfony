<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d5a4a67eb0298487a0a98025b2e4070a740da3985fe385d7cd82fdb77368935c extends Twig_Template
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
        $__internal_604e022d2f77ad176abc3eb078f46ecbd50356e24501c00a4bfa345fa0448e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604e022d2f77ad176abc3eb078f46ecbd50356e24501c00a4bfa345fa0448e59->enter($__internal_604e022d2f77ad176abc3eb078f46ecbd50356e24501c00a4bfa345fa0448e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5bd27a36d5bab50493befff75e2e81577b3d062dd4b9187012113e798cfe8973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd27a36d5bab50493befff75e2e81577b3d062dd4b9187012113e798cfe8973->enter($__internal_5bd27a36d5bab50493befff75e2e81577b3d062dd4b9187012113e798cfe8973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_604e022d2f77ad176abc3eb078f46ecbd50356e24501c00a4bfa345fa0448e59->leave($__internal_604e022d2f77ad176abc3eb078f46ecbd50356e24501c00a4bfa345fa0448e59_prof);

        
        $__internal_5bd27a36d5bab50493befff75e2e81577b3d062dd4b9187012113e798cfe8973->leave($__internal_5bd27a36d5bab50493befff75e2e81577b3d062dd4b9187012113e798cfe8973_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
