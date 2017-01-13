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
        $__internal_a8b58a253188378971180242f3caf377c744ad7d0a225125a2d5a236d3a97a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b58a253188378971180242f3caf377c744ad7d0a225125a2d5a236d3a97a62->enter($__internal_a8b58a253188378971180242f3caf377c744ad7d0a225125a2d5a236d3a97a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_10290871febf3d283e2fd2fbdfb1900a9804b623401de2fc18934a88da3a3ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10290871febf3d283e2fd2fbdfb1900a9804b623401de2fc18934a88da3a3ed6->enter($__internal_10290871febf3d283e2fd2fbdfb1900a9804b623401de2fc18934a88da3a3ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b58a253188378971180242f3caf377c744ad7d0a225125a2d5a236d3a97a62->leave($__internal_a8b58a253188378971180242f3caf377c744ad7d0a225125a2d5a236d3a97a62_prof);

        
        $__internal_10290871febf3d283e2fd2fbdfb1900a9804b623401de2fc18934a88da3a3ed6->leave($__internal_10290871febf3d283e2fd2fbdfb1900a9804b623401de2fc18934a88da3a3ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a0126d4c3c4aa9a4bc0d6eec95ff801e5b386f84445d2f052c23832a78997e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0126d4c3c4aa9a4bc0d6eec95ff801e5b386f84445d2f052c23832a78997e7->enter($__internal_4a0126d4c3c4aa9a4bc0d6eec95ff801e5b386f84445d2f052c23832a78997e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e1cd5c9dc5216c38181f8175e5afd463537f2ea91854396ab30cb4457289019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1cd5c9dc5216c38181f8175e5afd463537f2ea91854396ab30cb4457289019->enter($__internal_2e1cd5c9dc5216c38181f8175e5afd463537f2ea91854396ab30cb4457289019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e1cd5c9dc5216c38181f8175e5afd463537f2ea91854396ab30cb4457289019->leave($__internal_2e1cd5c9dc5216c38181f8175e5afd463537f2ea91854396ab30cb4457289019_prof);

        
        $__internal_4a0126d4c3c4aa9a4bc0d6eec95ff801e5b386f84445d2f052c23832a78997e7->leave($__internal_4a0126d4c3c4aa9a4bc0d6eec95ff801e5b386f84445d2f052c23832a78997e7_prof);

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
