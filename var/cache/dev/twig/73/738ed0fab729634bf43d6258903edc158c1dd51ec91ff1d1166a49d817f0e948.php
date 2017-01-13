<?php

/* task/show.html.twig */
class __TwigTemplate_d548ab47ecb32a8a1a4aff1e3824a1070811cef6254659797a4988e86050500a extends Twig_Template
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
        $__internal_a7ab9c3920fcdb35940577218202c5773660a8e50dce876ca4379fe155f6c889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ab9c3920fcdb35940577218202c5773660a8e50dce876ca4379fe155f6c889->enter($__internal_a7ab9c3920fcdb35940577218202c5773660a8e50dce876ca4379fe155f6c889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $__internal_00e4c29a18a09426ec44840f1d2c7377066436c12dd5d566c8eb8426d1ad7ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e4c29a18a09426ec44840f1d2c7377066436c12dd5d566c8eb8426d1ad7ba9->enter($__internal_00e4c29a18a09426ec44840f1d2c7377066436c12dd5d566c8eb8426d1ad7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7ab9c3920fcdb35940577218202c5773660a8e50dce876ca4379fe155f6c889->leave($__internal_a7ab9c3920fcdb35940577218202c5773660a8e50dce876ca4379fe155f6c889_prof);

        
        $__internal_00e4c29a18a09426ec44840f1d2c7377066436c12dd5d566c8eb8426d1ad7ba9->leave($__internal_00e4c29a18a09426ec44840f1d2c7377066436c12dd5d566c8eb8426d1ad7ba9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20623e3e36a57f1581dbd2b9fd066b081842ec925be1f693ceb4acce25385dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20623e3e36a57f1581dbd2b9fd066b081842ec925be1f693ceb4acce25385dfa->enter($__internal_20623e3e36a57f1581dbd2b9fd066b081842ec925be1f693ceb4acce25385dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b09531e69499fd163f5e259fd6147fd68f3fa560df380041efe72c128703f2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09531e69499fd163f5e259fd6147fd68f3fa560df380041efe72c128703f2ff->enter($__internal_b09531e69499fd163f5e259fd6147fd68f3fa560df380041efe72c128703f2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b09531e69499fd163f5e259fd6147fd68f3fa560df380041efe72c128703f2ff->leave($__internal_b09531e69499fd163f5e259fd6147fd68f3fa560df380041efe72c128703f2ff_prof);

        
        $__internal_20623e3e36a57f1581dbd2b9fd066b081842ec925be1f693ceb4acce25385dfa->leave($__internal_20623e3e36a57f1581dbd2b9fd066b081842ec925be1f693ceb4acce25385dfa_prof);

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
