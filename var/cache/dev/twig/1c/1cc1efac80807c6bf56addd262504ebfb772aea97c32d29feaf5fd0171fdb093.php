<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_29fcb6f9dc1bcbf6a5fa831f72e7db7775f2cfe71ce28f9b5cd15f5b75e8d7da extends Twig_Template
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
        $__internal_57e209cc8f98df50513a4bcbd9f47c823e974c3896dfa266095c4a797d33329a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e209cc8f98df50513a4bcbd9f47c823e974c3896dfa266095c4a797d33329a->enter($__internal_57e209cc8f98df50513a4bcbd9f47c823e974c3896dfa266095c4a797d33329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_9a1360233c3029090d2165394b08158ee2b277797521d6a08295668538005cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1360233c3029090d2165394b08158ee2b277797521d6a08295668538005cd7->enter($__internal_9a1360233c3029090d2165394b08158ee2b277797521d6a08295668538005cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_57e209cc8f98df50513a4bcbd9f47c823e974c3896dfa266095c4a797d33329a->leave($__internal_57e209cc8f98df50513a4bcbd9f47c823e974c3896dfa266095c4a797d33329a_prof);

        
        $__internal_9a1360233c3029090d2165394b08158ee2b277797521d6a08295668538005cd7->leave($__internal_9a1360233c3029090d2165394b08158ee2b277797521d6a08295668538005cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
