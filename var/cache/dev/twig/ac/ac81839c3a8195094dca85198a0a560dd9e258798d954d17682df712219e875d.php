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
        $__internal_ecbd0b1030762b53c09ec19629e5ece5a7af41d7f8c27c6639b7b4d5ddbd635a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbd0b1030762b53c09ec19629e5ece5a7af41d7f8c27c6639b7b4d5ddbd635a->enter($__internal_ecbd0b1030762b53c09ec19629e5ece5a7af41d7f8c27c6639b7b4d5ddbd635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c629ac7ec76e93770cf2c7ddd7b140add650b1f5f928ca3425f8a5cc2076820c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c629ac7ec76e93770cf2c7ddd7b140add650b1f5f928ca3425f8a5cc2076820c->enter($__internal_c629ac7ec76e93770cf2c7ddd7b140add650b1f5f928ca3425f8a5cc2076820c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ecbd0b1030762b53c09ec19629e5ece5a7af41d7f8c27c6639b7b4d5ddbd635a->leave($__internal_ecbd0b1030762b53c09ec19629e5ece5a7af41d7f8c27c6639b7b4d5ddbd635a_prof);

        
        $__internal_c629ac7ec76e93770cf2c7ddd7b140add650b1f5f928ca3425f8a5cc2076820c->leave($__internal_c629ac7ec76e93770cf2c7ddd7b140add650b1f5f928ca3425f8a5cc2076820c_prof);

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
