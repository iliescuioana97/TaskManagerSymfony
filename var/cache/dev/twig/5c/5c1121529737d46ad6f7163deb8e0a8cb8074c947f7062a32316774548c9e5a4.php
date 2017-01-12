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
        $__internal_155d7bbeb6f25292941435f0a495914f388f9dbe7b3ce3d29b980469665c955f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155d7bbeb6f25292941435f0a495914f388f9dbe7b3ce3d29b980469665c955f->enter($__internal_155d7bbeb6f25292941435f0a495914f388f9dbe7b3ce3d29b980469665c955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_b4fe0eb0ce07e1b33b98514b2d7bfda4c36c1b1e78414ee4a5d37d017fb6f1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fe0eb0ce07e1b33b98514b2d7bfda4c36c1b1e78414ee4a5d37d017fb6f1df->enter($__internal_b4fe0eb0ce07e1b33b98514b2d7bfda4c36c1b1e78414ee4a5d37d017fb6f1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_155d7bbeb6f25292941435f0a495914f388f9dbe7b3ce3d29b980469665c955f->leave($__internal_155d7bbeb6f25292941435f0a495914f388f9dbe7b3ce3d29b980469665c955f_prof);

        
        $__internal_b4fe0eb0ce07e1b33b98514b2d7bfda4c36c1b1e78414ee4a5d37d017fb6f1df->leave($__internal_b4fe0eb0ce07e1b33b98514b2d7bfda4c36c1b1e78414ee4a5d37d017fb6f1df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1cbadd4dee45dbc2247fa2a16db0872a875502fb1b302dd49b3e3548a7adb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1cbadd4dee45dbc2247fa2a16db0872a875502fb1b302dd49b3e3548a7adb5->enter($__internal_8f1cbadd4dee45dbc2247fa2a16db0872a875502fb1b302dd49b3e3548a7adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_391f9d949e395a5a99874a07a469b91bb3ca13c5ec4c75ec5d4071e8f56c0e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391f9d949e395a5a99874a07a469b91bb3ca13c5ec4c75ec5d4071e8f56c0e08->enter($__internal_391f9d949e395a5a99874a07a469b91bb3ca13c5ec4c75ec5d4071e8f56c0e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_391f9d949e395a5a99874a07a469b91bb3ca13c5ec4c75ec5d4071e8f56c0e08->leave($__internal_391f9d949e395a5a99874a07a469b91bb3ca13c5ec4c75ec5d4071e8f56c0e08_prof);

        
        $__internal_8f1cbadd4dee45dbc2247fa2a16db0872a875502fb1b302dd49b3e3548a7adb5->leave($__internal_8f1cbadd4dee45dbc2247fa2a16db0872a875502fb1b302dd49b3e3548a7adb5_prof);

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
