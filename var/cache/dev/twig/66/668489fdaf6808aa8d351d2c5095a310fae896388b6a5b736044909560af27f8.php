<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d067bfff5367e71215405de7792ce16556b6fbeb161bd38efb2c2f4b1a39e36b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_15367a0885c8743ee6df31eda8c83404270a107802f5b82a3b243950342bf0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15367a0885c8743ee6df31eda8c83404270a107802f5b82a3b243950342bf0db->enter($__internal_15367a0885c8743ee6df31eda8c83404270a107802f5b82a3b243950342bf0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_a8366f2f76a4a3df8ab2122e3c042e0c64987bcec68021c12fdccfb85bdb04b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8366f2f76a4a3df8ab2122e3c042e0c64987bcec68021c12fdccfb85bdb04b7->enter($__internal_a8366f2f76a4a3df8ab2122e3c042e0c64987bcec68021c12fdccfb85bdb04b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15367a0885c8743ee6df31eda8c83404270a107802f5b82a3b243950342bf0db->leave($__internal_15367a0885c8743ee6df31eda8c83404270a107802f5b82a3b243950342bf0db_prof);

        
        $__internal_a8366f2f76a4a3df8ab2122e3c042e0c64987bcec68021c12fdccfb85bdb04b7->leave($__internal_a8366f2f76a4a3df8ab2122e3c042e0c64987bcec68021c12fdccfb85bdb04b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c5a785978f1736331a2775751763c4fbe0ab0940529c744341385ca9dac189b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5a785978f1736331a2775751763c4fbe0ab0940529c744341385ca9dac189b->enter($__internal_2c5a785978f1736331a2775751763c4fbe0ab0940529c744341385ca9dac189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5b04bc30c480674bc639be03df3548a05a59e167bc87f77c733a95fa9af5023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b04bc30c480674bc639be03df3548a05a59e167bc87f77c733a95fa9af5023->enter($__internal_e5b04bc30c480674bc639be03df3548a05a59e167bc87f77c733a95fa9af5023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e5b04bc30c480674bc639be03df3548a05a59e167bc87f77c733a95fa9af5023->leave($__internal_e5b04bc30c480674bc639be03df3548a05a59e167bc87f77c733a95fa9af5023_prof);

        
        $__internal_2c5a785978f1736331a2775751763c4fbe0ab0940529c744341385ca9dac189b->leave($__internal_2c5a785978f1736331a2775751763c4fbe0ab0940529c744341385ca9dac189b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
