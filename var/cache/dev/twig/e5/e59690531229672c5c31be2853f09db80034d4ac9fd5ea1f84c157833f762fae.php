<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_4724dabc530cada728df336ab86d1ecfa96d76768ec80b9bdfa2529620e5772d extends Twig_Template
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
        $__internal_63cebd579fd1d26c27b39be2821c2e8356240c3787c778896f564b57997bf64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cebd579fd1d26c27b39be2821c2e8356240c3787c778896f564b57997bf64e->enter($__internal_63cebd579fd1d26c27b39be2821c2e8356240c3787c778896f564b57997bf64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2234bedb7c5b9f9f70afe2efaf12452ff934d1a467c1ead84c1060c7e4b1ef72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2234bedb7c5b9f9f70afe2efaf12452ff934d1a467c1ead84c1060c7e4b1ef72->enter($__internal_2234bedb7c5b9f9f70afe2efaf12452ff934d1a467c1ead84c1060c7e4b1ef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_63cebd579fd1d26c27b39be2821c2e8356240c3787c778896f564b57997bf64e->leave($__internal_63cebd579fd1d26c27b39be2821c2e8356240c3787c778896f564b57997bf64e_prof);

        
        $__internal_2234bedb7c5b9f9f70afe2efaf12452ff934d1a467c1ead84c1060c7e4b1ef72->leave($__internal_2234bedb7c5b9f9f70afe2efaf12452ff934d1a467c1ead84c1060c7e4b1ef72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
