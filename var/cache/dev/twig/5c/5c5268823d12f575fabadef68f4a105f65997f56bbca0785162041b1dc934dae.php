<?php

/* @App/Task/index.html.twig */
class __TwigTemplate_a21438dc6fc7f0b354d8f8873d15bef7a517ada58104381cf43218f238ff0d32 extends Twig_Template
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
        $__internal_c774a22cbc1fec027e4291740d4442b547cb9c081aecbd05273b72c41eba9f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c774a22cbc1fec027e4291740d4442b547cb9c081aecbd05273b72c41eba9f45->enter($__internal_c774a22cbc1fec027e4291740d4442b547cb9c081aecbd05273b72c41eba9f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        $__internal_96b147f4b3d19270167787259d1ad1d0007166cc0e80c1837a369bfe2b6b78c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b147f4b3d19270167787259d1ad1d0007166cc0e80c1837a369bfe2b6b78c6->enter($__internal_96b147f4b3d19270167787259d1ad1d0007166cc0e80c1837a369bfe2b6b78c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        // line 1
        echo "fsdfsdfs
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variabila"] ?? $this->getContext($context, "variabila")), "html", null, true);
        
        $__internal_c774a22cbc1fec027e4291740d4442b547cb9c081aecbd05273b72c41eba9f45->leave($__internal_c774a22cbc1fec027e4291740d4442b547cb9c081aecbd05273b72c41eba9f45_prof);

        
        $__internal_96b147f4b3d19270167787259d1ad1d0007166cc0e80c1837a369bfe2b6b78c6->leave($__internal_96b147f4b3d19270167787259d1ad1d0007166cc0e80c1837a369bfe2b6b78c6_prof);

    }

    public function getTemplateName()
    {
        return "@App/Task/index.html.twig";
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
        return new Twig_Source("fsdfsdfs
{{variabila}}", "@App/Task/index.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/Task/index.html.twig");
    }
}
