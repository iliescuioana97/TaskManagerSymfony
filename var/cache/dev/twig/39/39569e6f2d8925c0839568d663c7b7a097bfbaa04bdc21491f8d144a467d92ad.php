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
        $__internal_9997fdd00aeec243688d89d82369027827858d73744153ab5f90c16c456d2702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9997fdd00aeec243688d89d82369027827858d73744153ab5f90c16c456d2702->enter($__internal_9997fdd00aeec243688d89d82369027827858d73744153ab5f90c16c456d2702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_9b01153a4b42fd1483ae935ae88fcf3b8402c6a0915acb5972850cb7016eeedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b01153a4b42fd1483ae935ae88fcf3b8402c6a0915acb5972850cb7016eeedd->enter($__internal_9b01153a4b42fd1483ae935ae88fcf3b8402c6a0915acb5972850cb7016eeedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9997fdd00aeec243688d89d82369027827858d73744153ab5f90c16c456d2702->leave($__internal_9997fdd00aeec243688d89d82369027827858d73744153ab5f90c16c456d2702_prof);

        
        $__internal_9b01153a4b42fd1483ae935ae88fcf3b8402c6a0915acb5972850cb7016eeedd->leave($__internal_9b01153a4b42fd1483ae935ae88fcf3b8402c6a0915acb5972850cb7016eeedd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b7c52d9f9022fa2b795da2e203a780b3b6838d7d320875552d25cb793c06812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7c52d9f9022fa2b795da2e203a780b3b6838d7d320875552d25cb793c06812->enter($__internal_1b7c52d9f9022fa2b795da2e203a780b3b6838d7d320875552d25cb793c06812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f928479e2685c9a5f77dc20d23d5ac84b32ab7d5b8a5c994e4f3d013c15fdaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f928479e2685c9a5f77dc20d23d5ac84b32ab7d5b8a5c994e4f3d013c15fdaad->enter($__internal_f928479e2685c9a5f77dc20d23d5ac84b32ab7d5b8a5c994e4f3d013c15fdaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f928479e2685c9a5f77dc20d23d5ac84b32ab7d5b8a5c994e4f3d013c15fdaad->leave($__internal_f928479e2685c9a5f77dc20d23d5ac84b32ab7d5b8a5c994e4f3d013c15fdaad_prof);

        
        $__internal_1b7c52d9f9022fa2b795da2e203a780b3b6838d7d320875552d25cb793c06812->leave($__internal_1b7c52d9f9022fa2b795da2e203a780b3b6838d7d320875552d25cb793c06812_prof);

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
