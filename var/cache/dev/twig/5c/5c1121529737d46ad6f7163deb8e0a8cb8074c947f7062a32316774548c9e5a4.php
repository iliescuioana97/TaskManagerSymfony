<?php

/* task/edit.html.twig */
class __TwigTemplate_4bd65b259ab352a0461754b7c1dd18d92a99bc74cb3aebd2bb67bc2400c746c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e3a3dc47d461e9cebf306e1ffe6d5dfe4e75f73d82e4ce8b3237f62138a643f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3a3dc47d461e9cebf306e1ffe6d5dfe4e75f73d82e4ce8b3237f62138a643f->enter($__internal_9e3a3dc47d461e9cebf306e1ffe6d5dfe4e75f73d82e4ce8b3237f62138a643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_0d6299d37ea00713152d3b6e2c00659e80eac2f51d4965811f21c29cb10dcd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6299d37ea00713152d3b6e2c00659e80eac2f51d4965811f21c29cb10dcd27->enter($__internal_0d6299d37ea00713152d3b6e2c00659e80eac2f51d4965811f21c29cb10dcd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3a3dc47d461e9cebf306e1ffe6d5dfe4e75f73d82e4ce8b3237f62138a643f->leave($__internal_9e3a3dc47d461e9cebf306e1ffe6d5dfe4e75f73d82e4ce8b3237f62138a643f_prof);

        
        $__internal_0d6299d37ea00713152d3b6e2c00659e80eac2f51d4965811f21c29cb10dcd27->leave($__internal_0d6299d37ea00713152d3b6e2c00659e80eac2f51d4965811f21c29cb10dcd27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47111327f4c15689a925e1e6595a91b287f00e102cfa35d52ee210823c8bd5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47111327f4c15689a925e1e6595a91b287f00e102cfa35d52ee210823c8bd5dc->enter($__internal_47111327f4c15689a925e1e6595a91b287f00e102cfa35d52ee210823c8bd5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78857732c677d437b03bd4237ec79827089f862e1d68fd72494f2458bddcf6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78857732c677d437b03bd4237ec79827089f862e1d68fd72494f2458bddcf6c7->enter($__internal_78857732c677d437b03bd4237ec79827089f862e1d68fd72494f2458bddcf6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_78857732c677d437b03bd4237ec79827089f862e1d68fd72494f2458bddcf6c7->leave($__internal_78857732c677d437b03bd4237ec79827089f862e1d68fd72494f2458bddcf6c7_prof);

        
        $__internal_47111327f4c15689a925e1e6595a91b287f00e102cfa35d52ee210823c8bd5dc->leave($__internal_47111327f4c15689a925e1e6595a91b287f00e102cfa35d52ee210823c8bd5dc_prof);

    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Task edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "task/edit.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/edit.html.twig");
    }
}
