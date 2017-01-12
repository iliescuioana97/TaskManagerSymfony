<?php

/* @App/Task/index.html.twig */
class __TwigTemplate_b99aac84dc82acd3cd4bd4aa76b40ac1c542bea900faacc84f180e014dd16505 extends Twig_Template
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
        // line 1
        echo "fsdfsdfs
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variabila"] ?? null), "html", null, true);
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Task/index.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/Task/index.html.twig");
    }
}
