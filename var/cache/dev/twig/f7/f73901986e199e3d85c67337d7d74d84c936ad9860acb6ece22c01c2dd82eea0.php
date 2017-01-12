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
        $__internal_67a200044f48bdc6d6cf444bb5eb859775cdf9a6671721b0e6fb927eef6f87e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a200044f48bdc6d6cf444bb5eb859775cdf9a6671721b0e6fb927eef6f87e6->enter($__internal_67a200044f48bdc6d6cf444bb5eb859775cdf9a6671721b0e6fb927eef6f87e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3a34e31a8a48b480a6e5b084ec0e4a0878a61253b23cb385596a971056d0702e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a34e31a8a48b480a6e5b084ec0e4a0878a61253b23cb385596a971056d0702e->enter($__internal_3a34e31a8a48b480a6e5b084ec0e4a0878a61253b23cb385596a971056d0702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_67a200044f48bdc6d6cf444bb5eb859775cdf9a6671721b0e6fb927eef6f87e6->leave($__internal_67a200044f48bdc6d6cf444bb5eb859775cdf9a6671721b0e6fb927eef6f87e6_prof);

        
        $__internal_3a34e31a8a48b480a6e5b084ec0e4a0878a61253b23cb385596a971056d0702e->leave($__internal_3a34e31a8a48b480a6e5b084ec0e4a0878a61253b23cb385596a971056d0702e_prof);

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
