<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c728348b27a5cdff81a436a3ae8622cb500002c365adc0777b89bf05019216aa extends Twig_Template
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
        $__internal_795241cd2567f155358ad7103f02d3444958c3d1c81ba2a70003627701e6cedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795241cd2567f155358ad7103f02d3444958c3d1c81ba2a70003627701e6cedc->enter($__internal_795241cd2567f155358ad7103f02d3444958c3d1c81ba2a70003627701e6cedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_25182bc3972cb3db4eacfc38820f12a4692d7aa70beee6543e5d525ae95c3e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25182bc3972cb3db4eacfc38820f12a4692d7aa70beee6543e5d525ae95c3e78->enter($__internal_25182bc3972cb3db4eacfc38820f12a4692d7aa70beee6543e5d525ae95c3e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_795241cd2567f155358ad7103f02d3444958c3d1c81ba2a70003627701e6cedc->leave($__internal_795241cd2567f155358ad7103f02d3444958c3d1c81ba2a70003627701e6cedc_prof);

        
        $__internal_25182bc3972cb3db4eacfc38820f12a4692d7aa70beee6543e5d525ae95c3e78->leave($__internal_25182bc3972cb3db4eacfc38820f12a4692d7aa70beee6543e5d525ae95c3e78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
