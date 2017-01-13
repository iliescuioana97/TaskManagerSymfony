<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a0aef2431437afeaf4930c4a991885e78739443682ccfe14e8865f25901b7eea extends Twig_Template
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
        $__internal_45930395e9d1b462fe96fd44fd823b4f75169e31a846f486c38e0e98a226d64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45930395e9d1b462fe96fd44fd823b4f75169e31a846f486c38e0e98a226d64f->enter($__internal_45930395e9d1b462fe96fd44fd823b4f75169e31a846f486c38e0e98a226d64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e150a0d6404b25a042e06dd6f449be9a6ebda8a881c0d589aa7be5a1b0319bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e150a0d6404b25a042e06dd6f449be9a6ebda8a881c0d589aa7be5a1b0319bfa->enter($__internal_e150a0d6404b25a042e06dd6f449be9a6ebda8a881c0d589aa7be5a1b0319bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_45930395e9d1b462fe96fd44fd823b4f75169e31a846f486c38e0e98a226d64f->leave($__internal_45930395e9d1b462fe96fd44fd823b4f75169e31a846f486c38e0e98a226d64f_prof);

        
        $__internal_e150a0d6404b25a042e06dd6f449be9a6ebda8a881c0d589aa7be5a1b0319bfa->leave($__internal_e150a0d6404b25a042e06dd6f449be9a6ebda8a881c0d589aa7be5a1b0319bfa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
