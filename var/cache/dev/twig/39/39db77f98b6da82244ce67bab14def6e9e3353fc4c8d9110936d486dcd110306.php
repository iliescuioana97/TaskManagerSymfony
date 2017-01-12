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
        $__internal_dcfd0ef6923aaf93be093ba098fc67205824bd339624f0b1dbe962200dc98926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfd0ef6923aaf93be093ba098fc67205824bd339624f0b1dbe962200dc98926->enter($__internal_dcfd0ef6923aaf93be093ba098fc67205824bd339624f0b1dbe962200dc98926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6914a0a5b90c7022681bf5c7c64d11110edb651874258a7b626a91ada3634900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6914a0a5b90c7022681bf5c7c64d11110edb651874258a7b626a91ada3634900->enter($__internal_6914a0a5b90c7022681bf5c7c64d11110edb651874258a7b626a91ada3634900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dcfd0ef6923aaf93be093ba098fc67205824bd339624f0b1dbe962200dc98926->leave($__internal_dcfd0ef6923aaf93be093ba098fc67205824bd339624f0b1dbe962200dc98926_prof);

        
        $__internal_6914a0a5b90c7022681bf5c7c64d11110edb651874258a7b626a91ada3634900->leave($__internal_6914a0a5b90c7022681bf5c7c64d11110edb651874258a7b626a91ada3634900_prof);

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
