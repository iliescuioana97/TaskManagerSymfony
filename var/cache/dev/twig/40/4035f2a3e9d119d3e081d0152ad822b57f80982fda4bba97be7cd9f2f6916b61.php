<?php

/* task/edit.html.twig */
class __TwigTemplate_0f8971b48208f4e051a8d2d78a0918fd489627e5a8ca98f7108c5fa422df6731 extends Twig_Template
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
        $__internal_fba3a3740ba1ea3effa4c1c1fa9562d4f644d4cac5e80e01b78f8fc0f371bf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba3a3740ba1ea3effa4c1c1fa9562d4f644d4cac5e80e01b78f8fc0f371bf3a->enter($__internal_fba3a3740ba1ea3effa4c1c1fa9562d4f644d4cac5e80e01b78f8fc0f371bf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_ae219c6db4b7c354113154d4330266dffa70f832dd67dc540a4d3ed27b906ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae219c6db4b7c354113154d4330266dffa70f832dd67dc540a4d3ed27b906ae3->enter($__internal_ae219c6db4b7c354113154d4330266dffa70f832dd67dc540a4d3ed27b906ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fba3a3740ba1ea3effa4c1c1fa9562d4f644d4cac5e80e01b78f8fc0f371bf3a->leave($__internal_fba3a3740ba1ea3effa4c1c1fa9562d4f644d4cac5e80e01b78f8fc0f371bf3a_prof);

        
        $__internal_ae219c6db4b7c354113154d4330266dffa70f832dd67dc540a4d3ed27b906ae3->leave($__internal_ae219c6db4b7c354113154d4330266dffa70f832dd67dc540a4d3ed27b906ae3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dc831aa7517f0d860ee36b241a0cd9b7012fb950198b5a4743dce7f14843de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc831aa7517f0d860ee36b241a0cd9b7012fb950198b5a4743dce7f14843de5->enter($__internal_9dc831aa7517f0d860ee36b241a0cd9b7012fb950198b5a4743dce7f14843de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_957087fdfeae9c979c1d6c09b2b259adc4f22cc7c2b774937234e679bbf6d435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957087fdfeae9c979c1d6c09b2b259adc4f22cc7c2b774937234e679bbf6d435->enter($__internal_957087fdfeae9c979c1d6c09b2b259adc4f22cc7c2b774937234e679bbf6d435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_957087fdfeae9c979c1d6c09b2b259adc4f22cc7c2b774937234e679bbf6d435->leave($__internal_957087fdfeae9c979c1d6c09b2b259adc4f22cc7c2b774937234e679bbf6d435_prof);

        
        $__internal_9dc831aa7517f0d860ee36b241a0cd9b7012fb950198b5a4743dce7f14843de5->leave($__internal_9dc831aa7517f0d860ee36b241a0cd9b7012fb950198b5a4743dce7f14843de5_prof);

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
