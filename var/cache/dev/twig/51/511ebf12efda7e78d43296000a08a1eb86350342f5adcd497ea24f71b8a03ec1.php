<?php

/* Lucky/number.html.twig */
class __TwigTemplate_25789ea80bfb7aa7ffc85571791a4f15fbba572cbadd04d6f0c3831f5e6610b5 extends Twig_Template
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
        $__internal_76866846dfce10fd741dfbb8becf0e1636ce000a47a4f59534e249700111e623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76866846dfce10fd741dfbb8becf0e1636ce000a47a4f59534e249700111e623->enter($__internal_76866846dfce10fd741dfbb8becf0e1636ce000a47a4f59534e249700111e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Lucky/number.html.twig"));

        $__internal_fe2f8fa2ddaa173a777de9ea9ffc04505e210c9b315ffc7fc51f42745f99f61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2f8fa2ddaa173a777de9ea9ffc04505e210c9b315ffc7fc51f42745f99f61b->enter($__internal_fe2f8fa2ddaa173a777de9ea9ffc04505e210c9b315ffc7fc51f42745f99f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Lucky/number.html.twig"));

        // line 2
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_76866846dfce10fd741dfbb8becf0e1636ce000a47a4f59534e249700111e623->leave($__internal_76866846dfce10fd741dfbb8becf0e1636ce000a47a4f59534e249700111e623_prof);

        
        $__internal_fe2f8fa2ddaa173a777de9ea9ffc04505e210c9b315ffc7fc51f42745f99f61b->leave($__internal_fe2f8fa2ddaa173a777de9ea9ffc04505e210c9b315ffc7fc51f42745f99f61b_prof);

    }

    public function getTemplateName()
    {
        return "Lucky/number.html.twig";
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
<h1>Your lucky number is {{ number }}</h1>", "Lucky/number.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/Lucky/number.html.twig");
    }
}
