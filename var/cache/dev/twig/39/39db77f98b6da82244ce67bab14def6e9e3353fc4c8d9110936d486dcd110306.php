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
        $__internal_133f6d569f378c5946c706a7f01df2058af852aabd7b774eb36ba8effc57dab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133f6d569f378c5946c706a7f01df2058af852aabd7b774eb36ba8effc57dab2->enter($__internal_133f6d569f378c5946c706a7f01df2058af852aabd7b774eb36ba8effc57dab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b3c33b67f4051b06896bb7cbee6a5c66f7dd25a0bbdf241f4e19bcf19608f050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c33b67f4051b06896bb7cbee6a5c66f7dd25a0bbdf241f4e19bcf19608f050->enter($__internal_b3c33b67f4051b06896bb7cbee6a5c66f7dd25a0bbdf241f4e19bcf19608f050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_133f6d569f378c5946c706a7f01df2058af852aabd7b774eb36ba8effc57dab2->leave($__internal_133f6d569f378c5946c706a7f01df2058af852aabd7b774eb36ba8effc57dab2_prof);

        
        $__internal_b3c33b67f4051b06896bb7cbee6a5c66f7dd25a0bbdf241f4e19bcf19608f050->leave($__internal_b3c33b67f4051b06896bb7cbee6a5c66f7dd25a0bbdf241f4e19bcf19608f050_prof);

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
