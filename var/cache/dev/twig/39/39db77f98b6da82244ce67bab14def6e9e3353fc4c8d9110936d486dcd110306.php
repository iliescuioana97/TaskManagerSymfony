<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a7b0c394add665d0ca360061f559aab3f2059ed387ddc0489e322a9a0550661e extends Twig_Template
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
        $__internal_374f8c803b93b72253cab4312b260dd90faf3c9da36f23350345947857d9d5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374f8c803b93b72253cab4312b260dd90faf3c9da36f23350345947857d9d5e6->enter($__internal_374f8c803b93b72253cab4312b260dd90faf3c9da36f23350345947857d9d5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_58318e7ff972d25a763519b7bebd6da3619d280737e2cbe05e5f862dee69b007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58318e7ff972d25a763519b7bebd6da3619d280737e2cbe05e5f862dee69b007->enter($__internal_58318e7ff972d25a763519b7bebd6da3619d280737e2cbe05e5f862dee69b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_374f8c803b93b72253cab4312b260dd90faf3c9da36f23350345947857d9d5e6->leave($__internal_374f8c803b93b72253cab4312b260dd90faf3c9da36f23350345947857d9d5e6_prof);

        
        $__internal_58318e7ff972d25a763519b7bebd6da3619d280737e2cbe05e5f862dee69b007->leave($__internal_58318e7ff972d25a763519b7bebd6da3619d280737e2cbe05e5f862dee69b007_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
