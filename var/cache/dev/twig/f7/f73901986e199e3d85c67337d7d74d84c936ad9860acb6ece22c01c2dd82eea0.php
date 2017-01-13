<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9a29b43c3f064437de051fabdcf3e896c98428b9026a811b37ea842513eaf013 extends Twig_Template
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
        $__internal_83cf38a647c4a9e64f1693b454f3eb2de22da7fe4978507133f510d21277f185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cf38a647c4a9e64f1693b454f3eb2de22da7fe4978507133f510d21277f185->enter($__internal_83cf38a647c4a9e64f1693b454f3eb2de22da7fe4978507133f510d21277f185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e48f1a29a1915976f2f83d88f9963eb93daa7ba631802cce43b04da025d17468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48f1a29a1915976f2f83d88f9963eb93daa7ba631802cce43b04da025d17468->enter($__internal_e48f1a29a1915976f2f83d88f9963eb93daa7ba631802cce43b04da025d17468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_83cf38a647c4a9e64f1693b454f3eb2de22da7fe4978507133f510d21277f185->leave($__internal_83cf38a647c4a9e64f1693b454f3eb2de22da7fe4978507133f510d21277f185_prof);

        
        $__internal_e48f1a29a1915976f2f83d88f9963eb93daa7ba631802cce43b04da025d17468->leave($__internal_e48f1a29a1915976f2f83d88f9963eb93daa7ba631802cce43b04da025d17468_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
