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
        $__internal_5a5769f9ba4d316d084d1535c7283e19767ab10bfea913b999962353e83b4bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5769f9ba4d316d084d1535c7283e19767ab10bfea913b999962353e83b4bf7->enter($__internal_5a5769f9ba4d316d084d1535c7283e19767ab10bfea913b999962353e83b4bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_191f7b44ee5b5543ef22843dd464c5618cfbe9cf795de5714cbd3e0ea4aefb3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191f7b44ee5b5543ef22843dd464c5618cfbe9cf795de5714cbd3e0ea4aefb3d->enter($__internal_191f7b44ee5b5543ef22843dd464c5618cfbe9cf795de5714cbd3e0ea4aefb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_5a5769f9ba4d316d084d1535c7283e19767ab10bfea913b999962353e83b4bf7->leave($__internal_5a5769f9ba4d316d084d1535c7283e19767ab10bfea913b999962353e83b4bf7_prof);

        
        $__internal_191f7b44ee5b5543ef22843dd464c5618cfbe9cf795de5714cbd3e0ea4aefb3d->leave($__internal_191f7b44ee5b5543ef22843dd464c5618cfbe9cf795de5714cbd3e0ea4aefb3d_prof);

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
