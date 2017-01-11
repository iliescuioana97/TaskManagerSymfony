<?php

/* task/index.html.twig */
class __TwigTemplate_07c15c016ae8f8b3d7be1b1ec2da0ca5f159a63fe10e0e4a64979ecc4c96fd8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_ce37d3e0391137d4b7d61ffbed53ef4e8e1f4e27927c3dbd0cb04d7b842f47b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce37d3e0391137d4b7d61ffbed53ef4e8e1f4e27927c3dbd0cb04d7b842f47b8->enter($__internal_ce37d3e0391137d4b7d61ffbed53ef4e8e1f4e27927c3dbd0cb04d7b842f47b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_68dad1432bd937812e9958bcdd75870c2689c3d957ca0c75d6b21c5bbd02c326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dad1432bd937812e9958bcdd75870c2689c3d957ca0c75d6b21c5bbd02c326->enter($__internal_68dad1432bd937812e9958bcdd75870c2689c3d957ca0c75d6b21c5bbd02c326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce37d3e0391137d4b7d61ffbed53ef4e8e1f4e27927c3dbd0cb04d7b842f47b8->leave($__internal_ce37d3e0391137d4b7d61ffbed53ef4e8e1f4e27927c3dbd0cb04d7b842f47b8_prof);

        
        $__internal_68dad1432bd937812e9958bcdd75870c2689c3d957ca0c75d6b21c5bbd02c326->leave($__internal_68dad1432bd937812e9958bcdd75870c2689c3d957ca0c75d6b21c5bbd02c326_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9248be3618b65f5d4ff0fff15b70e127c5db677e54a65ab94d062f297959f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9248be3618b65f5d4ff0fff15b70e127c5db677e54a65ab94d062f297959f07->enter($__internal_d9248be3618b65f5d4ff0fff15b70e127c5db677e54a65ab94d062f297959f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ebdb7abe0e266a298d0a2563afe0ee68d3ace78c419ba9d85fac0c909b981db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebdb7abe0e266a298d0a2563afe0ee68d3ace78c419ba9d85fac0c909b981db->enter($__internal_1ebdb7abe0e266a298d0a2563afe0ee68d3ace78c419ba9d85fac0c909b981db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tasks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Descriere</th>
                <th>Deadline</th>
                <th>Autor</th>
                <th>Executor</th>
                <th>Prioritate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["task"], "deadline", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "deadline", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "autor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "executor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "prioritate", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\">Create a new task</a>
        </li>
    </ul>
";
        
        $__internal_1ebdb7abe0e266a298d0a2563afe0ee68d3ace78c419ba9d85fac0c909b981db->leave($__internal_1ebdb7abe0e266a298d0a2563afe0ee68d3ace78c419ba9d85fac0c909b981db_prof);

        
        $__internal_d9248be3618b65f5d4ff0fff15b70e127c5db677e54a65ab94d062f297959f07->leave($__internal_d9248be3618b65f5d4ff0fff15b70e127c5db677e54a65ab94d062f297959f07_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  115 => 35,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tasks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Descriere</th>
                <th>Deadline</th>
                <th>Autor</th>
                <th>Executor</th>
                <th>Prioritate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
            <tr>
                <td><a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.id }}</a></td>
                <td>{{ task.name }}</td>
                <td>{{ task.descriere }}</td>
                <td>{% if task.deadline %}{{ task.deadline|date('Y-m-d') }}{% endif %}</td>
                <td>{{ task.autor }}</td>
                <td>{{ task.executor }}</td>
                <td>{{ task.prioritate }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('task_show', { 'id': task.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('task_new') }}\">Create a new task</a>
        </li>
    </ul>
{% endblock %}
", "task/index.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/index.html.twig");
    }
}
