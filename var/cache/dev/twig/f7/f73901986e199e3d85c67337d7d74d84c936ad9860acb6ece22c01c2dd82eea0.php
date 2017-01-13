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
        $__internal_854b24fcc259e4c22e500c0f244fbfb227fd362e3dee826f7224a84ccd849684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854b24fcc259e4c22e500c0f244fbfb227fd362e3dee826f7224a84ccd849684->enter($__internal_854b24fcc259e4c22e500c0f244fbfb227fd362e3dee826f7224a84ccd849684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_652a04d8423620f79de646dbe6cbe082f7c2f801564008adada684227a3d75c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652a04d8423620f79de646dbe6cbe082f7c2f801564008adada684227a3d75c3->enter($__internal_652a04d8423620f79de646dbe6cbe082f7c2f801564008adada684227a3d75c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_854b24fcc259e4c22e500c0f244fbfb227fd362e3dee826f7224a84ccd849684->leave($__internal_854b24fcc259e4c22e500c0f244fbfb227fd362e3dee826f7224a84ccd849684_prof);

        
        $__internal_652a04d8423620f79de646dbe6cbe082f7c2f801564008adada684227a3d75c3->leave($__internal_652a04d8423620f79de646dbe6cbe082f7c2f801564008adada684227a3d75c3_prof);

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
