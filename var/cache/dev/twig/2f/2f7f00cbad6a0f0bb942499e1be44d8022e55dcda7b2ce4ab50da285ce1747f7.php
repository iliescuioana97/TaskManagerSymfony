<?php

/* task/new.html.twig */
class __TwigTemplate_33879fb5aa3ebd0b924c1061a0514794bdc6f5f715390c8fca48983ebb56fd82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
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
        $__internal_53259065cdc76ea0e837dbf60b27899ab4fb90e483e8485a6a6d5ff21761079c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53259065cdc76ea0e837dbf60b27899ab4fb90e483e8485a6a6d5ff21761079c->enter($__internal_53259065cdc76ea0e837dbf60b27899ab4fb90e483e8485a6a6d5ff21761079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_bc07736e41fbe7257bf2a4623b36d3d4fbb2aee40f06883629363d0f96812b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc07736e41fbe7257bf2a4623b36d3d4fbb2aee40f06883629363d0f96812b46->enter($__internal_bc07736e41fbe7257bf2a4623b36d3d4fbb2aee40f06883629363d0f96812b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53259065cdc76ea0e837dbf60b27899ab4fb90e483e8485a6a6d5ff21761079c->leave($__internal_53259065cdc76ea0e837dbf60b27899ab4fb90e483e8485a6a6d5ff21761079c_prof);

        
        $__internal_bc07736e41fbe7257bf2a4623b36d3d4fbb2aee40f06883629363d0f96812b46->leave($__internal_bc07736e41fbe7257bf2a4623b36d3d4fbb2aee40f06883629363d0f96812b46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b9ae980ce2bf09a1b2881ecd521ad4cac8cee14e49f4e7cd290fd3bece04d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b9ae980ce2bf09a1b2881ecd521ad4cac8cee14e49f4e7cd290fd3bece04d7->enter($__internal_41b9ae980ce2bf09a1b2881ecd521ad4cac8cee14e49f4e7cd290fd3bece04d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ecb4e8e42c938969660686bcdd55bd210be1610b5d4ae4147cdf14a794eba88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecb4e8e42c938969660686bcdd55bd210be1610b5d4ae4147cdf14a794eba88->enter($__internal_8ecb4e8e42c938969660686bcdd55bd210be1610b5d4ae4147cdf14a794eba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8ecb4e8e42c938969660686bcdd55bd210be1610b5d4ae4147cdf14a794eba88->leave($__internal_8ecb4e8e42c938969660686bcdd55bd210be1610b5d4ae4147cdf14a794eba88_prof);

        
        $__internal_41b9ae980ce2bf09a1b2881ecd521ad4cac8cee14e49f4e7cd290fd3bece04d7->leave($__internal_41b9ae980ce2bf09a1b2881ecd521ad4cac8cee14e49f4e7cd290fd3bece04d7_prof);

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
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Task creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "task/new.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/task/new.html.twig");
    }
}
