<?php

/* task/show.html.twig */
class __TwigTemplate_e2d276dbf6ad71fa9cccba5a7e4a5e49575e609fb78eddc3768feb9d87349b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/show.html.twig", 1);
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
        $__internal_e8c8de680f28a3c8b3269514cb9769f543f9fd7d0c16147f292fad68599949e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c8de680f28a3c8b3269514cb9769f543f9fd7d0c16147f292fad68599949e2->enter($__internal_e8c8de680f28a3c8b3269514cb9769f543f9fd7d0c16147f292fad68599949e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $__internal_21dad74d7f60922c0255f1ef28ec7a952b26d8c77a968ceddc8f857a2593184d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dad74d7f60922c0255f1ef28ec7a952b26d8c77a968ceddc8f857a2593184d->enter($__internal_21dad74d7f60922c0255f1ef28ec7a952b26d8c77a968ceddc8f857a2593184d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c8de680f28a3c8b3269514cb9769f543f9fd7d0c16147f292fad68599949e2->leave($__internal_e8c8de680f28a3c8b3269514cb9769f543f9fd7d0c16147f292fad68599949e2_prof);

        
        $__internal_21dad74d7f60922c0255f1ef28ec7a952b26d8c77a968ceddc8f857a2593184d->leave($__internal_21dad74d7f60922c0255f1ef28ec7a952b26d8c77a968ceddc8f857a2593184d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99272e90c3508745c242448a2a3ccdff371e5ec76ef8d5c42ce3e5d1315325db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99272e90c3508745c242448a2a3ccdff371e5ec76ef8d5c42ce3e5d1315325db->enter($__internal_99272e90c3508745c242448a2a3ccdff371e5ec76ef8d5c42ce3e5d1315325db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdc2a2d13edd448dae0379710c82ca85b0c86db8b80737496f04709a4cb381e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc2a2d13edd448dae0379710c82ca85b0c86db8b80737496f04709a4cb381e9->enter($__internal_fdc2a2d13edd448dae0379710c82ca85b0c86db8b80737496f04709a4cb381e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriere</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "descriere", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deadline</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "deadline", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "deadline", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "autor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Executor</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "executor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prioritate</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "prioritate", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fdc2a2d13edd448dae0379710c82ca85b0c86db8b80737496f04709a4cb381e9->leave($__internal_fdc2a2d13edd448dae0379710c82ca85b0c86db8b80737496f04709a4cb381e9_prof);

        
        $__internal_99272e90c3508745c242448a2a3ccdff371e5ec76ef8d5c42ce3e5d1315325db->leave($__internal_99272e90c3508745c242448a2a3ccdff371e5ec76ef8d5c42ce3e5d1315325db_prof);

    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Task</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ task.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ task.name }}</td>
            </tr>
            <tr>
                <th>Descriere</th>
                <td>{{ task.descriere }}</td>
            </tr>
            <tr>
                <th>Deadline</th>
                <td>{% if task.deadline %}{{ task.deadline|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>{{ task.autor }}</td>
            </tr>
            <tr>
                <th>Executor</th>
                <td>{{ task.executor }}</td>
            </tr>
            <tr>
                <th>Prioritate</th>
                <td>{{ task.prioritate }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "task/show.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/show.html.twig");
    }
}
