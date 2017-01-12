<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f3a6e4cdd9ec39298958f729f769fda5bd475bbeef365c4cc1c26758040bace5 extends Twig_Template
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
        $__internal_73959fd58087ce9e87a9716fb2eeff0af88fcbaad0fe04174eb76bdb6bb9c82c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73959fd58087ce9e87a9716fb2eeff0af88fcbaad0fe04174eb76bdb6bb9c82c->enter($__internal_73959fd58087ce9e87a9716fb2eeff0af88fcbaad0fe04174eb76bdb6bb9c82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_4bf7ffcf4099be6c7a37ee904d2a367d68fc0dad3ac25149ddb05914b6fea779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf7ffcf4099be6c7a37ee904d2a367d68fc0dad3ac25149ddb05914b6fea779->enter($__internal_4bf7ffcf4099be6c7a37ee904d2a367d68fc0dad3ac25149ddb05914b6fea779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_73959fd58087ce9e87a9716fb2eeff0af88fcbaad0fe04174eb76bdb6bb9c82c->leave($__internal_73959fd58087ce9e87a9716fb2eeff0af88fcbaad0fe04174eb76bdb6bb9c82c_prof);

        
        $__internal_4bf7ffcf4099be6c7a37ee904d2a367d68fc0dad3ac25149ddb05914b6fea779->leave($__internal_4bf7ffcf4099be6c7a37ee904d2a367d68fc0dad3ac25149ddb05914b6fea779_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
