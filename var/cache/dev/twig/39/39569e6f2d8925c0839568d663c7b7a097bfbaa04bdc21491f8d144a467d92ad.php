<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_458b43b1c1106bdbe6dc928580ae4bf08ebc52ac8521a57c361f2a8886ed4030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_12708f67419689a42edd3054542153b7d87228e079836292f38afc45129ef44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12708f67419689a42edd3054542153b7d87228e079836292f38afc45129ef44a->enter($__internal_12708f67419689a42edd3054542153b7d87228e079836292f38afc45129ef44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_f9b7430a466656bb9322cdb7f8919e6a64300c9940bc6bec5635a814b2f3d2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b7430a466656bb9322cdb7f8919e6a64300c9940bc6bec5635a814b2f3d2f2->enter($__internal_f9b7430a466656bb9322cdb7f8919e6a64300c9940bc6bec5635a814b2f3d2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12708f67419689a42edd3054542153b7d87228e079836292f38afc45129ef44a->leave($__internal_12708f67419689a42edd3054542153b7d87228e079836292f38afc45129ef44a_prof);

        
        $__internal_f9b7430a466656bb9322cdb7f8919e6a64300c9940bc6bec5635a814b2f3d2f2->leave($__internal_f9b7430a466656bb9322cdb7f8919e6a64300c9940bc6bec5635a814b2f3d2f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5998dbc6dc15a3cf8e0c2f76f5874d01afc42e013371717c90a87d09543bd702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5998dbc6dc15a3cf8e0c2f76f5874d01afc42e013371717c90a87d09543bd702->enter($__internal_5998dbc6dc15a3cf8e0c2f76f5874d01afc42e013371717c90a87d09543bd702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b1550416aeef709350f951720d263012cdfd48c99214b231a896776e5845349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1550416aeef709350f951720d263012cdfd48c99214b231a896776e5845349->enter($__internal_3b1550416aeef709350f951720d263012cdfd48c99214b231a896776e5845349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3b1550416aeef709350f951720d263012cdfd48c99214b231a896776e5845349->leave($__internal_3b1550416aeef709350f951720d263012cdfd48c99214b231a896776e5845349_prof);

        
        $__internal_5998dbc6dc15a3cf8e0c2f76f5874d01afc42e013371717c90a87d09543bd702->leave($__internal_5998dbc6dc15a3cf8e0c2f76f5874d01afc42e013371717c90a87d09543bd702_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
