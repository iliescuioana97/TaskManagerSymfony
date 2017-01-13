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
        $__internal_fbe1a32dc8495070fc8e44a95d5491322ad6317f47f842a1f8062418deebd97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe1a32dc8495070fc8e44a95d5491322ad6317f47f842a1f8062418deebd97b->enter($__internal_fbe1a32dc8495070fc8e44a95d5491322ad6317f47f842a1f8062418deebd97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $__internal_8ce7760c87a727aa9ac8a4622092cf05d5b88e6ae550a977386f1b5c9525d2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce7760c87a727aa9ac8a4622092cf05d5b88e6ae550a977386f1b5c9525d2d6->enter($__internal_8ce7760c87a727aa9ac8a4622092cf05d5b88e6ae550a977386f1b5c9525d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe1a32dc8495070fc8e44a95d5491322ad6317f47f842a1f8062418deebd97b->leave($__internal_fbe1a32dc8495070fc8e44a95d5491322ad6317f47f842a1f8062418deebd97b_prof);

        
        $__internal_8ce7760c87a727aa9ac8a4622092cf05d5b88e6ae550a977386f1b5c9525d2d6->leave($__internal_8ce7760c87a727aa9ac8a4622092cf05d5b88e6ae550a977386f1b5c9525d2d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7001fea204fecbb3e4e30f1bb637c19ee1ee2784e1be9d41ffa68739f7c27bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7001fea204fecbb3e4e30f1bb637c19ee1ee2784e1be9d41ffa68739f7c27bb5->enter($__internal_7001fea204fecbb3e4e30f1bb637c19ee1ee2784e1be9d41ffa68739f7c27bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de2edc839b86bc14d167bb216201a43bf892a735f09d581cfba0c08db70ed8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2edc839b86bc14d167bb216201a43bf892a735f09d581cfba0c08db70ed8bc->enter($__internal_de2edc839b86bc14d167bb216201a43bf892a735f09d581cfba0c08db70ed8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de2edc839b86bc14d167bb216201a43bf892a735f09d581cfba0c08db70ed8bc->leave($__internal_de2edc839b86bc14d167bb216201a43bf892a735f09d581cfba0c08db70ed8bc_prof);

        
        $__internal_7001fea204fecbb3e4e30f1bb637c19ee1ee2784e1be9d41ffa68739f7c27bb5->leave($__internal_7001fea204fecbb3e4e30f1bb637c19ee1ee2784e1be9d41ffa68739f7c27bb5_prof);

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
