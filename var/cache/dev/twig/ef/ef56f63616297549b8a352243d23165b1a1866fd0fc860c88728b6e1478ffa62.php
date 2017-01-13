<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2190167e5bd801fd6afe4709b374d6c3a43dc6169dd837ea56ae907b058df54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7d0b403f3c099c3246fb86bb796b9d73ebe432d3b0c88402f980939e960d425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d0b403f3c099c3246fb86bb796b9d73ebe432d3b0c88402f980939e960d425->enter($__internal_b7d0b403f3c099c3246fb86bb796b9d73ebe432d3b0c88402f980939e960d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97d4ab9427c4f6c485e94786b1042854d39dd242a7f5518ce9c7a09cbf767c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d4ab9427c4f6c485e94786b1042854d39dd242a7f5518ce9c7a09cbf767c60->enter($__internal_97d4ab9427c4f6c485e94786b1042854d39dd242a7f5518ce9c7a09cbf767c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d0b403f3c099c3246fb86bb796b9d73ebe432d3b0c88402f980939e960d425->leave($__internal_b7d0b403f3c099c3246fb86bb796b9d73ebe432d3b0c88402f980939e960d425_prof);

        
        $__internal_97d4ab9427c4f6c485e94786b1042854d39dd242a7f5518ce9c7a09cbf767c60->leave($__internal_97d4ab9427c4f6c485e94786b1042854d39dd242a7f5518ce9c7a09cbf767c60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b17c18c6b875c910cb14c924c87d6d8e9b8697fa6a3ffcd1533a668212eeb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b17c18c6b875c910cb14c924c87d6d8e9b8697fa6a3ffcd1533a668212eeb3e->enter($__internal_2b17c18c6b875c910cb14c924c87d6d8e9b8697fa6a3ffcd1533a668212eeb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d15fe6cbc2c310d6d0908b9ebf32797007ac42abbbb773e2aee0cc9961e309bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15fe6cbc2c310d6d0908b9ebf32797007ac42abbbb773e2aee0cc9961e309bb->enter($__internal_d15fe6cbc2c310d6d0908b9ebf32797007ac42abbbb773e2aee0cc9961e309bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d15fe6cbc2c310d6d0908b9ebf32797007ac42abbbb773e2aee0cc9961e309bb->leave($__internal_d15fe6cbc2c310d6d0908b9ebf32797007ac42abbbb773e2aee0cc9961e309bb_prof);

        
        $__internal_2b17c18c6b875c910cb14c924c87d6d8e9b8697fa6a3ffcd1533a668212eeb3e->leave($__internal_2b17c18c6b875c910cb14c924c87d6d8e9b8697fa6a3ffcd1533a668212eeb3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
