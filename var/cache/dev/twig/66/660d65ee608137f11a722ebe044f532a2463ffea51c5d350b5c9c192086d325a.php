<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b26e84472cf1efc627be8246667a4db727f1c19ca3eac585854f724e2a112d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_889ddc4e1f84e031aca29b5e707e2061922ee69ed7b4942063c6b9b032a68751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889ddc4e1f84e031aca29b5e707e2061922ee69ed7b4942063c6b9b032a68751->enter($__internal_889ddc4e1f84e031aca29b5e707e2061922ee69ed7b4942063c6b9b032a68751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c16efaf06a56f9048cadb6793750b4faf5a8456f5271bdb4f3ba58cfd80bb30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16efaf06a56f9048cadb6793750b4faf5a8456f5271bdb4f3ba58cfd80bb30d->enter($__internal_c16efaf06a56f9048cadb6793750b4faf5a8456f5271bdb4f3ba58cfd80bb30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889ddc4e1f84e031aca29b5e707e2061922ee69ed7b4942063c6b9b032a68751->leave($__internal_889ddc4e1f84e031aca29b5e707e2061922ee69ed7b4942063c6b9b032a68751_prof);

        
        $__internal_c16efaf06a56f9048cadb6793750b4faf5a8456f5271bdb4f3ba58cfd80bb30d->leave($__internal_c16efaf06a56f9048cadb6793750b4faf5a8456f5271bdb4f3ba58cfd80bb30d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9fcb734191b4b6b53c47db16e6cee77f78d5d27569912a7efbdb2ccdb11cc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fcb734191b4b6b53c47db16e6cee77f78d5d27569912a7efbdb2ccdb11cc36->enter($__internal_e9fcb734191b4b6b53c47db16e6cee77f78d5d27569912a7efbdb2ccdb11cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0a7b70f8dde431b4ef301f49e712b8266db9122b6da472c9ce4b18d6a97d7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a7b70f8dde431b4ef301f49e712b8266db9122b6da472c9ce4b18d6a97d7be->enter($__internal_d0a7b70f8dde431b4ef301f49e712b8266db9122b6da472c9ce4b18d6a97d7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d0a7b70f8dde431b4ef301f49e712b8266db9122b6da472c9ce4b18d6a97d7be->leave($__internal_d0a7b70f8dde431b4ef301f49e712b8266db9122b6da472c9ce4b18d6a97d7be_prof);

        
        $__internal_e9fcb734191b4b6b53c47db16e6cee77f78d5d27569912a7efbdb2ccdb11cc36->leave($__internal_e9fcb734191b4b6b53c47db16e6cee77f78d5d27569912a7efbdb2ccdb11cc36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
