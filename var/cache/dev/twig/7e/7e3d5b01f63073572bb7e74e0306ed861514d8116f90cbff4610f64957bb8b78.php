<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dbe968e0be5b1aea6fd68eaa04f514e8c304b55b8212ba100792f2ace16d0a6e extends Twig_Template
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
        $__internal_58acb448923c6c13b0816cf4efab3f8997028701e53072f9a555da9fa902e0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58acb448923c6c13b0816cf4efab3f8997028701e53072f9a555da9fa902e0bf->enter($__internal_58acb448923c6c13b0816cf4efab3f8997028701e53072f9a555da9fa902e0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5ed5addc40f30cb5a030be63c2f25a683f2cb828f0ae27fa25cc851c69176570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed5addc40f30cb5a030be63c2f25a683f2cb828f0ae27fa25cc851c69176570->enter($__internal_5ed5addc40f30cb5a030be63c2f25a683f2cb828f0ae27fa25cc851c69176570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_58acb448923c6c13b0816cf4efab3f8997028701e53072f9a555da9fa902e0bf->leave($__internal_58acb448923c6c13b0816cf4efab3f8997028701e53072f9a555da9fa902e0bf_prof);

        
        $__internal_5ed5addc40f30cb5a030be63c2f25a683f2cb828f0ae27fa25cc851c69176570->leave($__internal_5ed5addc40f30cb5a030be63c2f25a683f2cb828f0ae27fa25cc851c69176570_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
