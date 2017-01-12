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
        $__internal_ae3edd1a9ddda2bcaea20bcac3cd818500f3733c52306fd13168e5a68f8c7f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3edd1a9ddda2bcaea20bcac3cd818500f3733c52306fd13168e5a68f8c7f5b->enter($__internal_ae3edd1a9ddda2bcaea20bcac3cd818500f3733c52306fd13168e5a68f8c7f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_fd1c5baac9dd23ad13edd94a74074f57c48010ebbe00783f4ea66a693c8e0152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1c5baac9dd23ad13edd94a74074f57c48010ebbe00783f4ea66a693c8e0152->enter($__internal_fd1c5baac9dd23ad13edd94a74074f57c48010ebbe00783f4ea66a693c8e0152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_ae3edd1a9ddda2bcaea20bcac3cd818500f3733c52306fd13168e5a68f8c7f5b->leave($__internal_ae3edd1a9ddda2bcaea20bcac3cd818500f3733c52306fd13168e5a68f8c7f5b_prof);

        
        $__internal_fd1c5baac9dd23ad13edd94a74074f57c48010ebbe00783f4ea66a693c8e0152->leave($__internal_fd1c5baac9dd23ad13edd94a74074f57c48010ebbe00783f4ea66a693c8e0152_prof);

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
