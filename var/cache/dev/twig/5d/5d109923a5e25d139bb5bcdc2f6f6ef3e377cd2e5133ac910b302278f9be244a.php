<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_06a8a5aaa4ea4e58956f050eac9a49e0cd2ecb6258ca15f5a4f3535cea552400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_bd7e1b8c1141081d07744a56dd1cda7b7f61694140031e8ef42c9eed1b622920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7e1b8c1141081d07744a56dd1cda7b7f61694140031e8ef42c9eed1b622920->enter($__internal_bd7e1b8c1141081d07744a56dd1cda7b7f61694140031e8ef42c9eed1b622920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_c3c455673c8ce26586049b9049ffa068f80d51bee536c5733e22138aad50691a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c455673c8ce26586049b9049ffa068f80d51bee536c5733e22138aad50691a->enter($__internal_c3c455673c8ce26586049b9049ffa068f80d51bee536c5733e22138aad50691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7e1b8c1141081d07744a56dd1cda7b7f61694140031e8ef42c9eed1b622920->leave($__internal_bd7e1b8c1141081d07744a56dd1cda7b7f61694140031e8ef42c9eed1b622920_prof);

        
        $__internal_c3c455673c8ce26586049b9049ffa068f80d51bee536c5733e22138aad50691a->leave($__internal_c3c455673c8ce26586049b9049ffa068f80d51bee536c5733e22138aad50691a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d005433b604277db64121d56524fa65a7dd89b6aeb75e5953b50f8931184a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d005433b604277db64121d56524fa65a7dd89b6aeb75e5953b50f8931184a2d->enter($__internal_3d005433b604277db64121d56524fa65a7dd89b6aeb75e5953b50f8931184a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e13b5893af773e698587b2d795b7392eb98e81561d62bc6c9f755113be87a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e13b5893af773e698587b2d795b7392eb98e81561d62bc6c9f755113be87a64->enter($__internal_9e13b5893af773e698587b2d795b7392eb98e81561d62bc6c9f755113be87a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9e13b5893af773e698587b2d795b7392eb98e81561d62bc6c9f755113be87a64->leave($__internal_9e13b5893af773e698587b2d795b7392eb98e81561d62bc6c9f755113be87a64_prof);

        
        $__internal_3d005433b604277db64121d56524fa65a7dd89b6aeb75e5953b50f8931184a2d->leave($__internal_3d005433b604277db64121d56524fa65a7dd89b6aeb75e5953b50f8931184a2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
