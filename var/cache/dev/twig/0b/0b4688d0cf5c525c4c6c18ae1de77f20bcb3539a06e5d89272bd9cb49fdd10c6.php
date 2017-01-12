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
        $__internal_5dc4c1c566a9e59939f1d04140970f6f5c0e7fa577f50405870f3538cbd8a633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc4c1c566a9e59939f1d04140970f6f5c0e7fa577f50405870f3538cbd8a633->enter($__internal_5dc4c1c566a9e59939f1d04140970f6f5c0e7fa577f50405870f3538cbd8a633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/new.html.twig"));

        $__internal_d0468a311789eb37659613f9ce010133deb022a297020b2a67b02ceaaff3e556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0468a311789eb37659613f9ce010133deb022a297020b2a67b02ceaaff3e556->enter($__internal_d0468a311789eb37659613f9ce010133deb022a297020b2a67b02ceaaff3e556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/new.html.twig"));

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
        
        $__internal_5dc4c1c566a9e59939f1d04140970f6f5c0e7fa577f50405870f3538cbd8a633->leave($__internal_5dc4c1c566a9e59939f1d04140970f6f5c0e7fa577f50405870f3538cbd8a633_prof);

        
        $__internal_d0468a311789eb37659613f9ce010133deb022a297020b2a67b02ceaaff3e556->leave($__internal_d0468a311789eb37659613f9ce010133deb022a297020b2a67b02ceaaff3e556_prof);

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
