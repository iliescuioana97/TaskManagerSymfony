<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e5ce4cde9626c54cd8b6b1afded84dfe4191286f283f7167e6b8ea8051525474 extends Twig_Template
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
        $__internal_e283251e0faed79f95c880d37526955d76a58e96d4eaeb74f934cc31d2dcb17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e283251e0faed79f95c880d37526955d76a58e96d4eaeb74f934cc31d2dcb17c->enter($__internal_e283251e0faed79f95c880d37526955d76a58e96d4eaeb74f934cc31d2dcb17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_4ae10c938c2ba0a31154c5aca4aba1ec150cf15c3e30d30366c8863ac4662132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae10c938c2ba0a31154c5aca4aba1ec150cf15c3e30d30366c8863ac4662132->enter($__internal_4ae10c938c2ba0a31154c5aca4aba1ec150cf15c3e30d30366c8863ac4662132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e283251e0faed79f95c880d37526955d76a58e96d4eaeb74f934cc31d2dcb17c->leave($__internal_e283251e0faed79f95c880d37526955d76a58e96d4eaeb74f934cc31d2dcb17c_prof);

        
        $__internal_4ae10c938c2ba0a31154c5aca4aba1ec150cf15c3e30d30366c8863ac4662132->leave($__internal_4ae10c938c2ba0a31154c5aca4aba1ec150cf15c3e30d30366c8863ac4662132_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
