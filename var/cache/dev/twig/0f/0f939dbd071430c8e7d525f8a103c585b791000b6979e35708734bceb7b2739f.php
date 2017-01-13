<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d16e6dd4a1a444ccd2a311257927a174f6576abc66b818ad00dece7f71caf608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a414137de0667d35876fe59ac7e51888a34b080b29385347329a219936ef33b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a414137de0667d35876fe59ac7e51888a34b080b29385347329a219936ef33b4->enter($__internal_a414137de0667d35876fe59ac7e51888a34b080b29385347329a219936ef33b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ce6ea38f804227c4ae184c3bfb846fe616a1071e979f68f3d94169ad671d2394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6ea38f804227c4ae184c3bfb846fe616a1071e979f68f3d94169ad671d2394->enter($__internal_ce6ea38f804227c4ae184c3bfb846fe616a1071e979f68f3d94169ad671d2394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a414137de0667d35876fe59ac7e51888a34b080b29385347329a219936ef33b4->leave($__internal_a414137de0667d35876fe59ac7e51888a34b080b29385347329a219936ef33b4_prof);

        
        $__internal_ce6ea38f804227c4ae184c3bfb846fe616a1071e979f68f3d94169ad671d2394->leave($__internal_ce6ea38f804227c4ae184c3bfb846fe616a1071e979f68f3d94169ad671d2394_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_150428de1e3e548871c06d4e273b41fbad7be6d9e39327022003f0c44e961fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150428de1e3e548871c06d4e273b41fbad7be6d9e39327022003f0c44e961fb3->enter($__internal_150428de1e3e548871c06d4e273b41fbad7be6d9e39327022003f0c44e961fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffa6736d7148cb021ecc84a1bded9c90df603f871dd2e6b11abd2e74b5128ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa6736d7148cb021ecc84a1bded9c90df603f871dd2e6b11abd2e74b5128ff0->enter($__internal_ffa6736d7148cb021ecc84a1bded9c90df603f871dd2e6b11abd2e74b5128ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ffa6736d7148cb021ecc84a1bded9c90df603f871dd2e6b11abd2e74b5128ff0->leave($__internal_ffa6736d7148cb021ecc84a1bded9c90df603f871dd2e6b11abd2e74b5128ff0_prof);

        
        $__internal_150428de1e3e548871c06d4e273b41fbad7be6d9e39327022003f0c44e961fb3->leave($__internal_150428de1e3e548871c06d4e273b41fbad7be6d9e39327022003f0c44e961fb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
