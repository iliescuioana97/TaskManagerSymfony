<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d5b17cba9f0bd9ae9bf7b8618c290b049c365eece78811cd2687152c11455116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa80b8a389cebf6985ec5ab15ddf29649ef5beacf8cbca1b7e74a268b3d6fe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa80b8a389cebf6985ec5ab15ddf29649ef5beacf8cbca1b7e74a268b3d6fe16->enter($__internal_fa80b8a389cebf6985ec5ab15ddf29649ef5beacf8cbca1b7e74a268b3d6fe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_03bda8f160afd8f23c49f22908e5c830150d66915afc4af428828833690dfa2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bda8f160afd8f23c49f22908e5c830150d66915afc4af428828833690dfa2a->enter($__internal_03bda8f160afd8f23c49f22908e5c830150d66915afc4af428828833690dfa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa80b8a389cebf6985ec5ab15ddf29649ef5beacf8cbca1b7e74a268b3d6fe16->leave($__internal_fa80b8a389cebf6985ec5ab15ddf29649ef5beacf8cbca1b7e74a268b3d6fe16_prof);

        
        $__internal_03bda8f160afd8f23c49f22908e5c830150d66915afc4af428828833690dfa2a->leave($__internal_03bda8f160afd8f23c49f22908e5c830150d66915afc4af428828833690dfa2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae4b68a34228f1f768492d4224acaa9672d13ea73e80c395a17b30d3270dde06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4b68a34228f1f768492d4224acaa9672d13ea73e80c395a17b30d3270dde06->enter($__internal_ae4b68a34228f1f768492d4224acaa9672d13ea73e80c395a17b30d3270dde06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d22c72e7e6366e804e6768e202a32ecf2f68474243187932424e41eacfc3aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d22c72e7e6366e804e6768e202a32ecf2f68474243187932424e41eacfc3aca->enter($__internal_5d22c72e7e6366e804e6768e202a32ecf2f68474243187932424e41eacfc3aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d22c72e7e6366e804e6768e202a32ecf2f68474243187932424e41eacfc3aca->leave($__internal_5d22c72e7e6366e804e6768e202a32ecf2f68474243187932424e41eacfc3aca_prof);

        
        $__internal_ae4b68a34228f1f768492d4224acaa9672d13ea73e80c395a17b30d3270dde06->leave($__internal_ae4b68a34228f1f768492d4224acaa9672d13ea73e80c395a17b30d3270dde06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d30308238cd8e345dec0ce9c8e2a670b98ad096a0003cf5beb4bbdab98efab5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30308238cd8e345dec0ce9c8e2a670b98ad096a0003cf5beb4bbdab98efab5e->enter($__internal_d30308238cd8e345dec0ce9c8e2a670b98ad096a0003cf5beb4bbdab98efab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4df7ae7b368c59e432c2cf981f9f9c1bd3a022b5cfdf7a6dbcf08f4f3201e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4df7ae7b368c59e432c2cf981f9f9c1bd3a022b5cfdf7a6dbcf08f4f3201e71->enter($__internal_a4df7ae7b368c59e432c2cf981f9f9c1bd3a022b5cfdf7a6dbcf08f4f3201e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a4df7ae7b368c59e432c2cf981f9f9c1bd3a022b5cfdf7a6dbcf08f4f3201e71->leave($__internal_a4df7ae7b368c59e432c2cf981f9f9c1bd3a022b5cfdf7a6dbcf08f4f3201e71_prof);

        
        $__internal_d30308238cd8e345dec0ce9c8e2a670b98ad096a0003cf5beb4bbdab98efab5e->leave($__internal_d30308238cd8e345dec0ce9c8e2a670b98ad096a0003cf5beb4bbdab98efab5e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
