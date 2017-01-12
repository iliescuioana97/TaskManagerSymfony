<?php

/* task/new.html.twig */
class __TwigTemplate_f930e33f91a51fe416919cd8d69a3aa98ed2d4120f8ca774404503ad598b95a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9165d4462069b9a9699ec034c76fb67640fa34e76311191ebe2443097012f678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9165d4462069b9a9699ec034c76fb67640fa34e76311191ebe2443097012f678->enter($__internal_9165d4462069b9a9699ec034c76fb67640fa34e76311191ebe2443097012f678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_ae3ba68a6e3964d4384bbfd9b5b271fc7d329abba65c94e48d81dcbb1f991948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3ba68a6e3964d4384bbfd9b5b271fc7d329abba65c94e48d81dcbb1f991948->enter($__internal_ae3ba68a6e3964d4384bbfd9b5b271fc7d329abba65c94e48d81dcbb1f991948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9165d4462069b9a9699ec034c76fb67640fa34e76311191ebe2443097012f678->leave($__internal_9165d4462069b9a9699ec034c76fb67640fa34e76311191ebe2443097012f678_prof);

        
        $__internal_ae3ba68a6e3964d4384bbfd9b5b271fc7d329abba65c94e48d81dcbb1f991948->leave($__internal_ae3ba68a6e3964d4384bbfd9b5b271fc7d329abba65c94e48d81dcbb1f991948_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f94c42d7b1d188f3cb413efe837743405419131a51b38fc68456be4b615a46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f94c42d7b1d188f3cb413efe837743405419131a51b38fc68456be4b615a46b->enter($__internal_2f94c42d7b1d188f3cb413efe837743405419131a51b38fc68456be4b615a46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fabe823853b9bf14d2152b0a803179acd6634e8bc74b597022275ace7b47faca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabe823853b9bf14d2152b0a803179acd6634e8bc74b597022275ace7b47faca->enter($__internal_fabe823853b9bf14d2152b0a803179acd6634e8bc74b597022275ace7b47faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7bdffa0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7bdffa0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7bdffa0_new_1.css");
            // line 6
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

    ";
        } else {
            // asset "7bdffa0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7bdffa0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7bdffa0.css");
            // line 6
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

    ";
        }
        unset($context["asset_url"]);
        
        $__internal_fabe823853b9bf14d2152b0a803179acd6634e8bc74b597022275ace7b47faca->leave($__internal_fabe823853b9bf14d2152b0a803179acd6634e8bc74b597022275ace7b47faca_prof);

        
        $__internal_2f94c42d7b1d188f3cb413efe837743405419131a51b38fc68456be4b615a46b->leave($__internal_2f94c42d7b1d188f3cb413efe837743405419131a51b38fc68456be4b615a46b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_065ff5e6fe46f0c1c66550e8392839bcda25678693803dfadc3566c5e602b827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065ff5e6fe46f0c1c66550e8392839bcda25678693803dfadc3566c5e602b827->enter($__internal_065ff5e6fe46f0c1c66550e8392839bcda25678693803dfadc3566c5e602b827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55f361126da9c9cc1956d3cfda8c838f7123c0747c23dda0ba61b50feb5300fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f361126da9c9cc1956d3cfda8c838f7123c0747c23dda0ba61b50feb5300fd->enter($__internal_55f361126da9c9cc1956d3cfda8c838f7123c0747c23dda0ba61b50feb5300fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div id=\"addtaskform\">
        <h1>Add new task</h1>

        <div class=\"formcomp\"> ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Name"));
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriere", array()), 'row', array("label" => "Description"));
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "deadline", array()), 'row', array("label" => "Data"));
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autor", array()), 'row', array("label" => "Autor"));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "executor", array()), 'row', array("label" => "Executor"));
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prioritate", array()), 'row', array("label" => "Prioritate"));
        echo "
        </div>

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" />
    </div>
";
        
        $__internal_55f361126da9c9cc1956d3cfda8c838f7123c0747c23dda0ba61b50feb5300fd->leave($__internal_55f361126da9c9cc1956d3cfda8c838f7123c0747c23dda0ba61b50feb5300fd_prof);

        
        $__internal_065ff5e6fe46f0c1c66550e8392839bcda25678693803dfadc3566c5e602b827->leave($__internal_065ff5e6fe46f0c1c66550e8392839bcda25678693803dfadc3566c5e602b827_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 25,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  97 => 13,  88 => 12,  73 => 7,  70 => 6,  62 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    {% stylesheets '@AppBundle/Resources/public/css/new.css'filter='cssrewrite' %}

    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />

    {% endstylesheets %}
{% endblock %}

{% block body %}
    <div id=\"addtaskform\">
        <h1>Add new task</h1>

        <div class=\"formcomp\"> {{ form_start(form) }}
            {{ form_row(form.name, {'label': 'Name'}) }}
            {{ form_row(form.descriere, {'label': 'Description'}) }}
            {{ form_row(form.deadline, {'label': 'Data'}) }}
            {{ form_row(form.autor, {'label': 'Autor'}) }}
            {{ form_row(form.executor, {'label': 'Executor'}) }}
            {{ form_row(form.prioritate, {'label': 'Prioritate'}) }}
        </div>

        {{ form_end(form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" />
    </div>
{% endblock %}
", "task/new.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/new.html.twig");
    }
}
