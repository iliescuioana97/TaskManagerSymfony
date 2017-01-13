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
        $__internal_f8238e5b19aef79bd55b479b906e7a5369d292c9df09e50388c7d022688740ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8238e5b19aef79bd55b479b906e7a5369d292c9df09e50388c7d022688740ab->enter($__internal_f8238e5b19aef79bd55b479b906e7a5369d292c9df09e50388c7d022688740ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_8ee31f9da3220635c56c118d3c65031f25d825070564cf6db1bad69eaf6c27ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee31f9da3220635c56c118d3c65031f25d825070564cf6db1bad69eaf6c27ce->enter($__internal_8ee31f9da3220635c56c118d3c65031f25d825070564cf6db1bad69eaf6c27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8238e5b19aef79bd55b479b906e7a5369d292c9df09e50388c7d022688740ab->leave($__internal_f8238e5b19aef79bd55b479b906e7a5369d292c9df09e50388c7d022688740ab_prof);

        
        $__internal_8ee31f9da3220635c56c118d3c65031f25d825070564cf6db1bad69eaf6c27ce->leave($__internal_8ee31f9da3220635c56c118d3c65031f25d825070564cf6db1bad69eaf6c27ce_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89b532a85be7fe4c310e46615f7532531675c3de4bbe5e9b0fc08e51d244cd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b532a85be7fe4c310e46615f7532531675c3de4bbe5e9b0fc08e51d244cd26->enter($__internal_89b532a85be7fe4c310e46615f7532531675c3de4bbe5e9b0fc08e51d244cd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac137fbdf6ea8baecf5735a9993b45cf9bcafd55620e1548dbb96af97e0c14aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac137fbdf6ea8baecf5735a9993b45cf9bcafd55620e1548dbb96af97e0c14aa->enter($__internal_ac137fbdf6ea8baecf5735a9993b45cf9bcafd55620e1548dbb96af97e0c14aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ac137fbdf6ea8baecf5735a9993b45cf9bcafd55620e1548dbb96af97e0c14aa->leave($__internal_ac137fbdf6ea8baecf5735a9993b45cf9bcafd55620e1548dbb96af97e0c14aa_prof);

        
        $__internal_89b532a85be7fe4c310e46615f7532531675c3de4bbe5e9b0fc08e51d244cd26->leave($__internal_89b532a85be7fe4c310e46615f7532531675c3de4bbe5e9b0fc08e51d244cd26_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ea52cf429124faaf62ea5a1cd2544b59d6e80a54a3edfdfb1205513e6f838e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ea52cf429124faaf62ea5a1cd2544b59d6e80a54a3edfdfb1205513e6f838e->enter($__internal_d8ea52cf429124faaf62ea5a1cd2544b59d6e80a54a3edfdfb1205513e6f838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05db129fccf168f548a797bef4de4aa9a8905bbf04c544ae015b2fd64fe93a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05db129fccf168f548a797bef4de4aa9a8905bbf04c544ae015b2fd64fe93a59->enter($__internal_05db129fccf168f548a797bef4de4aa9a8905bbf04c544ae015b2fd64fe93a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05db129fccf168f548a797bef4de4aa9a8905bbf04c544ae015b2fd64fe93a59->leave($__internal_05db129fccf168f548a797bef4de4aa9a8905bbf04c544ae015b2fd64fe93a59_prof);

        
        $__internal_d8ea52cf429124faaf62ea5a1cd2544b59d6e80a54a3edfdfb1205513e6f838e->leave($__internal_d8ea52cf429124faaf62ea5a1cd2544b59d6e80a54a3edfdfb1205513e6f838e_prof);

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
