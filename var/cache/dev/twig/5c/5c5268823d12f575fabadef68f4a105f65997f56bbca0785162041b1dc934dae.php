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
        $__internal_b4860be9e8b7675bbb237573f6379b6d155f1033267eaad9f1de6d5f309ad6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4860be9e8b7675bbb237573f6379b6d155f1033267eaad9f1de6d5f309ad6b5->enter($__internal_b4860be9e8b7675bbb237573f6379b6d155f1033267eaad9f1de6d5f309ad6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        $__internal_41acfea0c9b1172e0faf768ff3f2305db42e600ab84502492d4c2b577a7c87a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41acfea0c9b1172e0faf768ff3f2305db42e600ab84502492d4c2b577a7c87a0->enter($__internal_41acfea0c9b1172e0faf768ff3f2305db42e600ab84502492d4c2b577a7c87a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Task/index.html.twig"));

        // line 1
        echo "fsdfsdfs
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variabila"] ?? $this->getContext($context, "variabila")), "html", null, true);
        
        $__internal_b4860be9e8b7675bbb237573f6379b6d155f1033267eaad9f1de6d5f309ad6b5->leave($__internal_b4860be9e8b7675bbb237573f6379b6d155f1033267eaad9f1de6d5f309ad6b5_prof);

        
        $__internal_41acfea0c9b1172e0faf768ff3f2305db42e600ab84502492d4c2b577a7c87a0->leave($__internal_41acfea0c9b1172e0faf768ff3f2305db42e600ab84502492d4c2b577a7c87a0_prof);

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
