<?php

/* lucky/number.html.twig */
class __TwigTemplate_4a0337dc0ccda6b8d7db755a821e3d8776a9ecae9c87fab500226106ca034439 extends Twig_Template
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
        $__internal_5373fb62ebb9d10facbfc1be68eb7d50373bf74163446bac527909d2f45fa524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5373fb62ebb9d10facbfc1be68eb7d50373bf74163446bac527909d2f45fa524->enter($__internal_5373fb62ebb9d10facbfc1be68eb7d50373bf74163446bac527909d2f45fa524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_16648eb18dbd7aba2bca61a17a64dc187dec2162d4a02640689acb27d99c706d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16648eb18dbd7aba2bca61a17a64dc187dec2162d4a02640689acb27d99c706d->enter($__internal_16648eb18dbd7aba2bca61a17a64dc187dec2162d4a02640689acb27d99c706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_5373fb62ebb9d10facbfc1be68eb7d50373bf74163446bac527909d2f45fa524->leave($__internal_5373fb62ebb9d10facbfc1be68eb7d50373bf74163446bac527909d2f45fa524_prof);

        
        $__internal_16648eb18dbd7aba2bca61a17a64dc187dec2162d4a02640689acb27d99c706d->leave($__internal_16648eb18dbd7aba2bca61a17a64dc187dec2162d4a02640689acb27d99c706d_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}
<h1>Your lucky number is {{ number }}</h1>", "lucky/number.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/lucky/number.html.twig");
    }
}
