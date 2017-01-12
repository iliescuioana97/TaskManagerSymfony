<?php

/* Lucky/number.html.twig */
class __TwigTemplate_5529a81100da6225fa092010625f30e87ba3f9027851884f0bd5f1e994fd0951 extends Twig_Template
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
        // line 2
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "</h1>";
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
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Lucky/number.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/Lucky/number.html.twig");
    }
}
