<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_71904bd48f890b43211fd428960caeb30288a22fbe9febde8d73bcb426d07a5b extends Twig_Template
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
        $__internal_f9dc9e011f05f0ba5574b839f93cd436e3e60f6c649695830de0a1f6f7fada22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dc9e011f05f0ba5574b839f93cd436e3e60f6c649695830de0a1f6f7fada22->enter($__internal_f9dc9e011f05f0ba5574b839f93cd436e3e60f6c649695830de0a1f6f7fada22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_cde4d9e827a27b65690f6a9427e7ce81e87d31f13f38b0ba91fd43aebfa5f2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde4d9e827a27b65690f6a9427e7ce81e87d31f13f38b0ba91fd43aebfa5f2ed->enter($__internal_cde4d9e827a27b65690f6a9427e7ce81e87d31f13f38b0ba91fd43aebfa5f2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_f9dc9e011f05f0ba5574b839f93cd436e3e60f6c649695830de0a1f6f7fada22->leave($__internal_f9dc9e011f05f0ba5574b839f93cd436e3e60f6c649695830de0a1f6f7fada22_prof);

        
        $__internal_cde4d9e827a27b65690f6a9427e7ce81e87d31f13f38b0ba91fd43aebfa5f2ed->leave($__internal_cde4d9e827a27b65690f6a9427e7ce81e87d31f13f38b0ba91fd43aebfa5f2ed_prof);

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
