<?php

/* @App/Task/new.html.twig */
class __TwigTemplate_0eeced0e0d0010144f52bd1ac369bb34136ccb7c25fde7b8f638778385f4ec40 extends Twig_Template
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
        $__internal_904e75a790ed417a634fd765cb6854c9d846500622d19a631b0cbf9f53f06345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904e75a790ed417a634fd765cb6854c9d846500622d19a631b0cbf9f53f06345->enter($__internal_904e75a790ed417a634fd765cb6854c9d846500622d19a631b0cbf9f53f06345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/new.html.twig"));

        $__internal_49ddde48239babd241278c09d6856b9ac13bd7684e4294552a0f27d2edc0d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ddde48239babd241278c09d6856b9ac13bd7684e4294552a0f27d2edc0d12e->enter($__internal_49ddde48239babd241278c09d6856b9ac13bd7684e4294552a0f27d2edc0d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/new.html.twig"));

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
        
        $__internal_904e75a790ed417a634fd765cb6854c9d846500622d19a631b0cbf9f53f06345->leave($__internal_904e75a790ed417a634fd765cb6854c9d846500622d19a631b0cbf9f53f06345_prof);

        
        $__internal_49ddde48239babd241278c09d6856b9ac13bd7684e4294552a0f27d2edc0d12e->leave($__internal_49ddde48239babd241278c09d6856b9ac13bd7684e4294552a0f27d2edc0d12e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Task/new.html.twig";
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
{{ form_end(form) }}", "@App/Task/new.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/Task/new.html.twig");
    }
}
