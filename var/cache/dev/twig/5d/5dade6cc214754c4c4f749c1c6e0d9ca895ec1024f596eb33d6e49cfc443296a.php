<?php

/* AppBundle:Task:new.html.twig */
class __TwigTemplate_e8dad8310888948371cb517fa63cbf53905bbee5c961e87e5ed947f73b881d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea15bf081c505614fdbf48c79d7e0238fe5f44aa82767f7e898e1b57ec4cc927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea15bf081c505614fdbf48c79d7e0238fe5f44aa82767f7e898e1b57ec4cc927->enter($__internal_ea15bf081c505614fdbf48c79d7e0238fe5f44aa82767f7e898e1b57ec4cc927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:new.html.twig"));

        $__internal_620c80617582e537bad9d4df8b53e43ed304421fda09a5aebaed1d072d66cfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620c80617582e537bad9d4df8b53e43ed304421fda09a5aebaed1d072d66cfa6->enter($__internal_620c80617582e537bad9d4df8b53e43ed304421fda09a5aebaed1d072d66cfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:new.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo "<p style=\"color:red;\">
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "deadline", array()), 'label');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "deadline", array()), 'widget');
        echo "
</p>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_ea15bf081c505614fdbf48c79d7e0238fe5f44aa82767f7e898e1b57ec4cc927->leave($__internal_ea15bf081c505614fdbf48c79d7e0238fe5f44aa82767f7e898e1b57ec4cc927_prof);

        
        $__internal_620c80617582e537bad9d4df8b53e43ed304421fda09a5aebaed1d072d66cfa6->leave($__internal_620c80617582e537bad9d4df8b53e43ed304421fda09a5aebaed1d072d66cfa6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  36 => 8,  32 => 7,  29 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{{ form_start(form) }}
{#{{ form_widget(form) }}#}
{#{{ form_row(form.name) }}
#}
<p style=\"color:red;\">
    {{ form_label(form.deadline) }}
{{ form_widget(form.deadline) }}
</p>
{{ form_end(form) }}", "AppBundle:Task:new.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/Task/new.html.twig");
    }
}
