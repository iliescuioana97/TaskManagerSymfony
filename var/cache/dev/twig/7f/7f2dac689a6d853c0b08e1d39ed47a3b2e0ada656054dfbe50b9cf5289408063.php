<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_2ac297b3d1eb4034afed1719561bb3c7c7aa459c097daa51280cd484b05f355d extends Twig_Template
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
        $__internal_c500dfceaa156ebbfe72e779f563eda3b75a1ccbb41bea4d576d7f163d71ecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c500dfceaa156ebbfe72e779f563eda3b75a1ccbb41bea4d576d7f163d71ecf5->enter($__internal_c500dfceaa156ebbfe72e779f563eda3b75a1ccbb41bea4d576d7f163d71ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_108469b208b909909e9360b1ece100345286725828a651b9fb9e9f3aeff455e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108469b208b909909e9360b1ece100345286725828a651b9fb9e9f3aeff455e8->enter($__internal_108469b208b909909e9360b1ece100345286725828a651b9fb9e9f3aeff455e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c500dfceaa156ebbfe72e779f563eda3b75a1ccbb41bea4d576d7f163d71ecf5->leave($__internal_c500dfceaa156ebbfe72e779f563eda3b75a1ccbb41bea4d576d7f163d71ecf5_prof);

        
        $__internal_108469b208b909909e9360b1ece100345286725828a651b9fb9e9f3aeff455e8->leave($__internal_108469b208b909909e9360b1ece100345286725828a651b9fb9e9f3aeff455e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
