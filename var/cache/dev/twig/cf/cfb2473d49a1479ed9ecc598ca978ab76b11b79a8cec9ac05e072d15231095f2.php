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
        $__internal_1b67cc6fe06f57da7aad8d402d1bcd76c71ade9fd96c013b157312052fbde237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b67cc6fe06f57da7aad8d402d1bcd76c71ade9fd96c013b157312052fbde237->enter($__internal_1b67cc6fe06f57da7aad8d402d1bcd76c71ade9fd96c013b157312052fbde237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_edbb4d00193d3d087b207e9b38ada1033d02627682c19cb5d5199e2611946e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbb4d00193d3d087b207e9b38ada1033d02627682c19cb5d5199e2611946e5b->enter($__internal_edbb4d00193d3d087b207e9b38ada1033d02627682c19cb5d5199e2611946e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b67cc6fe06f57da7aad8d402d1bcd76c71ade9fd96c013b157312052fbde237->leave($__internal_1b67cc6fe06f57da7aad8d402d1bcd76c71ade9fd96c013b157312052fbde237_prof);

        
        $__internal_edbb4d00193d3d087b207e9b38ada1033d02627682c19cb5d5199e2611946e5b->leave($__internal_edbb4d00193d3d087b207e9b38ada1033d02627682c19cb5d5199e2611946e5b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea4eadb6c74d298183ea8027342c2e100e6ecd3c2c99420362f28d1f835aa76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4eadb6c74d298183ea8027342c2e100e6ecd3c2c99420362f28d1f835aa76b->enter($__internal_ea4eadb6c74d298183ea8027342c2e100e6ecd3c2c99420362f28d1f835aa76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c439afca5167c2a862a5c158587faed564036dc64fd2ab7112270dad57c906c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c439afca5167c2a862a5c158587faed564036dc64fd2ab7112270dad57c906c->enter($__internal_4c439afca5167c2a862a5c158587faed564036dc64fd2ab7112270dad57c906c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4c439afca5167c2a862a5c158587faed564036dc64fd2ab7112270dad57c906c->leave($__internal_4c439afca5167c2a862a5c158587faed564036dc64fd2ab7112270dad57c906c_prof);

        
        $__internal_ea4eadb6c74d298183ea8027342c2e100e6ecd3c2c99420362f28d1f835aa76b->leave($__internal_ea4eadb6c74d298183ea8027342c2e100e6ecd3c2c99420362f28d1f835aa76b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_18dc26ae9725c128185e8629f81b20e80c87700aba2b3105fb2cf16ad000f823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dc26ae9725c128185e8629f81b20e80c87700aba2b3105fb2cf16ad000f823->enter($__internal_18dc26ae9725c128185e8629f81b20e80c87700aba2b3105fb2cf16ad000f823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69f5b9abfe2a9dbbd28049330f7fe95ee713d33da6f6926dbb0fa8f71bd395b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f5b9abfe2a9dbbd28049330f7fe95ee713d33da6f6926dbb0fa8f71bd395b7->enter($__internal_69f5b9abfe2a9dbbd28049330f7fe95ee713d33da6f6926dbb0fa8f71bd395b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div id=\"addtaskform\">
        <h1 id=\"addnewtasktitle\">Add new task</h1>

        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"formcomp\"> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Name:"));
        echo " </div>
            <div class=\"formcomp\"> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descriere", array()), 'row', array("label" => "Description:"));
        echo " </div>
            <div class=\"formcomp\"> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "deadline", array()), 'row', array("label" => "Data:"));
        echo " </div>
            <div class=\"formcomp\"> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autor", array()), 'row', array("label" => "Author:"));
        echo " </div>
            <div class=\"formcomp\"> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "executor", array()), 'row', array("label" => "Executor:"));
        echo " </div>
            <div class=\"formcomp\"> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prioritate", array()), 'row', array("label" => "Priority:"));
        echo " </div>
        <input class=\"btn btn-primary\" id=\"createbutton\" type=\"submit\" value=\"Create\" />

        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_69f5b9abfe2a9dbbd28049330f7fe95ee713d33da6f6926dbb0fa8f71bd395b7->leave($__internal_69f5b9abfe2a9dbbd28049330f7fe95ee713d33da6f6926dbb0fa8f71bd395b7_prof);

        
        $__internal_18dc26ae9725c128185e8629f81b20e80c87700aba2b3105fb2cf16ad000f823->leave($__internal_18dc26ae9725c128185e8629f81b20e80c87700aba2b3105fb2cf16ad000f823_prof);

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
        <h1 id=\"addnewtasktitle\">Add new task</h1>

        {{ form_start(form) }}
            <div class=\"formcomp\"> {{ form_row(form.name, {'label': 'Name:'}) }} </div>
            <div class=\"formcomp\"> {{ form_row(form.descriere, {'label': 'Description:'}) }} </div>
            <div class=\"formcomp\"> {{ form_row(form.deadline, {'label': 'Data:'}) }} </div>
            <div class=\"formcomp\"> {{ form_row(form.autor, {'label': 'Author:'}) }} </div>
            <div class=\"formcomp\"> {{ form_row(form.executor, {'label': 'Executor:'}) }} </div>
            <div class=\"formcomp\"> {{ form_row(form.prioritate, {'label': 'Priority:'}) }} </div>
        <input class=\"btn btn-primary\" id=\"createbutton\" type=\"submit\" value=\"Create\" />

        {{ form_end(form) }}
    </div>
{% endblock %}
", "task/new.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/new.html.twig");
    }
}
