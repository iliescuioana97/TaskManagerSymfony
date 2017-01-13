<?php

/* task/taskmenu1.html.twig */
class __TwigTemplate_a525b4850e7b154561e619d0ab44e2b54ec835b504683f986079341c2815d82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/taskmenu1.html.twig", 1);
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
        $__internal_de73b3a1d8802028387e41c3f07908997aa00951a8c0ffa02db59ead5fdad35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de73b3a1d8802028387e41c3f07908997aa00951a8c0ffa02db59ead5fdad35d->enter($__internal_de73b3a1d8802028387e41c3f07908997aa00951a8c0ffa02db59ead5fdad35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/taskmenu1.html.twig"));

        $__internal_bf6ecb495ca52d9d59ca1300648032c39733d50fda72cffe158f13d5267cc459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6ecb495ca52d9d59ca1300648032c39733d50fda72cffe158f13d5267cc459->enter($__internal_bf6ecb495ca52d9d59ca1300648032c39733d50fda72cffe158f13d5267cc459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/taskmenu1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de73b3a1d8802028387e41c3f07908997aa00951a8c0ffa02db59ead5fdad35d->leave($__internal_de73b3a1d8802028387e41c3f07908997aa00951a8c0ffa02db59ead5fdad35d_prof);

        
        $__internal_bf6ecb495ca52d9d59ca1300648032c39733d50fda72cffe158f13d5267cc459->leave($__internal_bf6ecb495ca52d9d59ca1300648032c39733d50fda72cffe158f13d5267cc459_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff50ca3c2e6e2541039c24337f3d9746bc949b7d15ae3159d608e08781d54f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff50ca3c2e6e2541039c24337f3d9746bc949b7d15ae3159d608e08781d54f04->enter($__internal_ff50ca3c2e6e2541039c24337f3d9746bc949b7d15ae3159d608e08781d54f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f7009783f9f1979fd4ed3fb6740b606c7a11d205db295958b71aadf2c7dffbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7009783f9f1979fd4ed3fb6740b606c7a11d205db295958b71aadf2c7dffbf->enter($__internal_0f7009783f9f1979fd4ed3fb6740b606c7a11d205db295958b71aadf2c7dffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e77daa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e77daa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e77daa_taskmenu1_1.css");
            // line 6
            echo "     
    <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

    ";
        } else {
            // asset "3e77daa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3e77daa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3e77daa.css");
            // line 6
            echo "     
    <link rel=\"stylesheet\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />

    ";
        }
        unset($context["asset_url"]);
        
        $__internal_0f7009783f9f1979fd4ed3fb6740b606c7a11d205db295958b71aadf2c7dffbf->leave($__internal_0f7009783f9f1979fd4ed3fb6740b606c7a11d205db295958b71aadf2c7dffbf_prof);

        
        $__internal_ff50ca3c2e6e2541039c24337f3d9746bc949b7d15ae3159d608e08781d54f04->leave($__internal_ff50ca3c2e6e2541039c24337f3d9746bc949b7d15ae3159d608e08781d54f04_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fdfdbb7013b7b43a89fe31de6617113ccc6c6e5c1801e98577dd52590b98bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdfdbb7013b7b43a89fe31de6617113ccc6c6e5c1801e98577dd52590b98bb2->enter($__internal_6fdfdbb7013b7b43a89fe31de6617113ccc6c6e5c1801e98577dd52590b98bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9bdd2cf866a09762d02c8f35f427855d6b5bc325aea58e6c442a6037e1983f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bdd2cf866a09762d02c8f35f427855d6b5bc325aea58e6c442a6037e1983f9->enter($__internal_f9bdd2cf866a09762d02c8f35f427855d6b5bc325aea58e6c442a6037e1983f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div id=\"taskmenu\">
    <h1 class=\"taskMenuTitle\">Task menu</h1>

    <table>
        <thead>
            <tr>
                <th class=\"column\">No.</th>
                <th class=\"column\">Name</th>
                <th class=\"column\">Descriere</th>
                <th class=\"column\">Deadline</th>
                <th class=\"column\">Autor</th>
                <th class=\"column\">Executor</th>
                <th class=\"column\">Prioritate</th>
                <th class=\"column\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 31
            echo "                <tr>
                    <td class=\"column\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td class=\"column\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</td>
                    <td class=\"column\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "descriere", array()), "html", null, true);
            echo "</td>
                    <td class=\"column\">";
            // line 35
            if ($this->getAttribute($context["task"], "deadline", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "deadline", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                    <td class=\"column\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "autor", array()), "html", null, true);
            echo "</td>
                    <td class=\"column\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "executor", array()), "html", null, true);
            echo "</td>
                    <td class=\"column\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "prioritate", array()), "html", null, true);
            echo "</td>
                    <td>
                       
                                <a id=\"btn-show\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            
                                <a id=\"btn-edit\" class=\"btn btn-link\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
   
            <a id=\"createNewTask\" class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\">Create a new task</a>
            <a id=\"logOut\" class=\"btn btn-danger\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\">Log out</a>
</div>
";
        
        $__internal_f9bdd2cf866a09762d02c8f35f427855d6b5bc325aea58e6c442a6037e1983f9->leave($__internal_f9bdd2cf866a09762d02c8f35f427855d6b5bc325aea58e6c442a6037e1983f9_prof);

        
        $__internal_6fdfdbb7013b7b43a89fe31de6617113ccc6c6e5c1801e98577dd52590b98bb2->leave($__internal_6fdfdbb7013b7b43a89fe31de6617113ccc6c6e5c1801e98577dd52590b98bb2_prof);

    }

    public function getTemplateName()
    {
        return "task/taskmenu1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  177 => 50,  172 => 47,  162 => 43,  157 => 41,  151 => 38,  147 => 37,  143 => 36,  137 => 35,  133 => 34,  129 => 33,  123 => 32,  120 => 31,  116 => 30,  97 => 13,  88 => 12,  73 => 7,  70 => 6,  62 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% stylesheets '@AppBundle/Resources/public/css/taskmenu1.css'filter='cssrewrite' %}
     
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />

    {% endstylesheets %}
{% endblock %}

{% block body %}
<div id=\"taskmenu\">
    <h1 class=\"taskMenuTitle\">Task menu</h1>

    <table>
        <thead>
            <tr>
                <th class=\"column\">No.</th>
                <th class=\"column\">Name</th>
                <th class=\"column\">Descriere</th>
                <th class=\"column\">Deadline</th>
                <th class=\"column\">Autor</th>
                <th class=\"column\">Executor</th>
                <th class=\"column\">Prioritate</th>
                <th class=\"column\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for task in tasks %}
                <tr>
                    <td class=\"column\"><a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.id }}</a></td>
                    <td class=\"column\">{{ task.name }}</td>
                    <td class=\"column\">{{ task.descriere }}</td>
                    <td class=\"column\">{% if task.deadline %}{{ task.deadline|date('Y-m-d') }}{% endif %}</td>
                    <td class=\"column\">{{ task.autor }}</td>
                    <td class=\"column\">{{ task.executor }}</td>
                    <td class=\"column\">{{ task.prioritate }}</td>
                    <td>
                       
                                <a id=\"btn-show\" href=\"{{ path('task_show', { 'id': task.id }) }}\">show</a>
                            
                                <a id=\"btn-edit\" class=\"btn btn-link\" href=\"{{ path('task_edit', { 'id': task.id }) }}\">edit</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
   
            <a id=\"createNewTask\" class=\"btn btn-primary\" href=\"{{ path('task_new') }}\">Create a new task</a>
            <a id=\"logOut\" class=\"btn btn-danger\" href=\"{{ path('task_new') }}\">Log out</a>
</div>
{% endblock %}
", "task/taskmenu1.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/taskmenu1.html.twig");
    }
}
