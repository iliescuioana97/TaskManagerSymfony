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
        $__internal_ee717de9a27ff49f83db575a3e00fd60ee52ff211a44b61c8cff5ed2e2b9dd77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee717de9a27ff49f83db575a3e00fd60ee52ff211a44b61c8cff5ed2e2b9dd77->enter($__internal_ee717de9a27ff49f83db575a3e00fd60ee52ff211a44b61c8cff5ed2e2b9dd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        $__internal_cffd887efd79c314d2832fd5a4f6ae0666b41642f859b00a6a51163653231031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffd887efd79c314d2832fd5a4f6ae0666b41642f859b00a6a51163653231031->enter($__internal_cffd887efd79c314d2832fd5a4f6ae0666b41642f859b00a6a51163653231031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        // line 1
        echo "fsdfsdfs
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variabila"] ?? $this->getContext($context, "variabila")), "html", null, true);
        
        $__internal_ee717de9a27ff49f83db575a3e00fd60ee52ff211a44b61c8cff5ed2e2b9dd77->leave($__internal_ee717de9a27ff49f83db575a3e00fd60ee52ff211a44b61c8cff5ed2e2b9dd77_prof);

        
        $__internal_cffd887efd79c314d2832fd5a4f6ae0666b41642f859b00a6a51163653231031->leave($__internal_cffd887efd79c314d2832fd5a4f6ae0666b41642f859b00a6a51163653231031_prof);

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
