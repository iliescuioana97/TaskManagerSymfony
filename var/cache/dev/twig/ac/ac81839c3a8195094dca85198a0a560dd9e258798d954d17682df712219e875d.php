<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_920219cdcb279dcdc528347fdf44661d8136dab2047d883036436e41ef3ce85e extends Twig_Template
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
        $__internal_ce35f6de0bf7e4e2d4b8087f99cdd8a86c9774cd43cdae59611b1c892276c8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce35f6de0bf7e4e2d4b8087f99cdd8a86c9774cd43cdae59611b1c892276c8aa->enter($__internal_ce35f6de0bf7e4e2d4b8087f99cdd8a86c9774cd43cdae59611b1c892276c8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3332b85f26292a91f7e600213f9d9d3866ad7022a4da01bb09b551f27f857323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3332b85f26292a91f7e600213f9d9d3866ad7022a4da01bb09b551f27f857323->enter($__internal_3332b85f26292a91f7e600213f9d9d3866ad7022a4da01bb09b551f27f857323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ce35f6de0bf7e4e2d4b8087f99cdd8a86c9774cd43cdae59611b1c892276c8aa->leave($__internal_ce35f6de0bf7e4e2d4b8087f99cdd8a86c9774cd43cdae59611b1c892276c8aa_prof);

        
        $__internal_3332b85f26292a91f7e600213f9d9d3866ad7022a4da01bb09b551f27f857323->leave($__internal_3332b85f26292a91f7e600213f9d9d3866ad7022a4da01bb09b551f27f857323_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
