<?php

/* AppBundle:Task:index.html.twig */
class __TwigTemplate_e7fd826111fafcfe117221f8cab901f27bffc2b11bfeb17b40ad1c910d5aec32 extends Twig_Template
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
        $__internal_0159091151a8348a1364ba03e7076913e07714fcb28f51495d972ce1939aec85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0159091151a8348a1364ba03e7076913e07714fcb28f51495d972ce1939aec85->enter($__internal_0159091151a8348a1364ba03e7076913e07714fcb28f51495d972ce1939aec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:index.html.twig"));

        $__internal_885e41109093d062db5f004508b53c786b5e11adbfb183d09fda8d747eaaf1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885e41109093d062db5f004508b53c786b5e11adbfb183d09fda8d747eaaf1e1->enter($__internal_885e41109093d062db5f004508b53c786b5e11adbfb183d09fda8d747eaaf1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:index.html.twig"));

        // line 1
        echo "fsdfsdfs
";
        // line 2
        echo twig_escape_filter($this->env, ($context["variabila"] ?? $this->getContext($context, "variabila")), "html", null, true);
        
        $__internal_0159091151a8348a1364ba03e7076913e07714fcb28f51495d972ce1939aec85->leave($__internal_0159091151a8348a1364ba03e7076913e07714fcb28f51495d972ce1939aec85_prof);

        
        $__internal_885e41109093d062db5f004508b53c786b5e11adbfb183d09fda8d747eaaf1e1->leave($__internal_885e41109093d062db5f004508b53c786b5e11adbfb183d09fda8d747eaaf1e1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:index.html.twig";
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
{{variabila}}", "AppBundle:Task:index.html.twig", "/home/ioana/Projects/task-manager-symfony/src/AppBundle/Resources/views/Task/index.html.twig");
    }
}
