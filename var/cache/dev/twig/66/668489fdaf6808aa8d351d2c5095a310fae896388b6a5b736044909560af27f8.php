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
        $__internal_6d157e4d1e360def4075c63d1f01e3e6d1074d137707ae8c9ce0dae475c3af75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d157e4d1e360def4075c63d1f01e3e6d1074d137707ae8c9ce0dae475c3af75->enter($__internal_6d157e4d1e360def4075c63d1f01e3e6d1074d137707ae8c9ce0dae475c3af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_017acc2cb3ef323206354bb4bc26bc2b8a7c22e5a79236b3bc90e3fc197e940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017acc2cb3ef323206354bb4bc26bc2b8a7c22e5a79236b3bc90e3fc197e940a->enter($__internal_017acc2cb3ef323206354bb4bc26bc2b8a7c22e5a79236b3bc90e3fc197e940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d157e4d1e360def4075c63d1f01e3e6d1074d137707ae8c9ce0dae475c3af75->leave($__internal_6d157e4d1e360def4075c63d1f01e3e6d1074d137707ae8c9ce0dae475c3af75_prof);

        
        $__internal_017acc2cb3ef323206354bb4bc26bc2b8a7c22e5a79236b3bc90e3fc197e940a->leave($__internal_017acc2cb3ef323206354bb4bc26bc2b8a7c22e5a79236b3bc90e3fc197e940a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a711ba0128f0cb5b11fa3855f36ffaf05589b991b64e9e421887a5c7c218430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a711ba0128f0cb5b11fa3855f36ffaf05589b991b64e9e421887a5c7c218430->enter($__internal_3a711ba0128f0cb5b11fa3855f36ffaf05589b991b64e9e421887a5c7c218430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_953815c1d8b33accae5222c7b4ef42e61fd23354f91a20db41b2436514b8d0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953815c1d8b33accae5222c7b4ef42e61fd23354f91a20db41b2436514b8d0e0->enter($__internal_953815c1d8b33accae5222c7b4ef42e61fd23354f91a20db41b2436514b8d0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_953815c1d8b33accae5222c7b4ef42e61fd23354f91a20db41b2436514b8d0e0->leave($__internal_953815c1d8b33accae5222c7b4ef42e61fd23354f91a20db41b2436514b8d0e0_prof);

        
        $__internal_3a711ba0128f0cb5b11fa3855f36ffaf05589b991b64e9e421887a5c7c218430->leave($__internal_3a711ba0128f0cb5b11fa3855f36ffaf05589b991b64e9e421887a5c7c218430_prof);

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
