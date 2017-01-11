<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d35d76099f194140cb55444642098f5061d0219c897258a1f22c27400ff0523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d35d76099f194140cb55444642098f5061d0219c897258a1f22c27400ff0523->enter($__internal_2d35d76099f194140cb55444642098f5061d0219c897258a1f22c27400ff0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e287d67189e4f3e8a194a60fa03b9585d838f07c9af9178c43ff7c0f794a8bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e287d67189e4f3e8a194a60fa03b9585d838f07c9af9178c43ff7c0f794a8bdf->enter($__internal_e287d67189e4f3e8a194a60fa03b9585d838f07c9af9178c43ff7c0f794a8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d35d76099f194140cb55444642098f5061d0219c897258a1f22c27400ff0523->leave($__internal_2d35d76099f194140cb55444642098f5061d0219c897258a1f22c27400ff0523_prof);

        
        $__internal_e287d67189e4f3e8a194a60fa03b9585d838f07c9af9178c43ff7c0f794a8bdf->leave($__internal_e287d67189e4f3e8a194a60fa03b9585d838f07c9af9178c43ff7c0f794a8bdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc4d08ea968f29b78ab4235e1104b15066462d2e1966f098f1ad5d721b0d2f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4d08ea968f29b78ab4235e1104b15066462d2e1966f098f1ad5d721b0d2f83->enter($__internal_bc4d08ea968f29b78ab4235e1104b15066462d2e1966f098f1ad5d721b0d2f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_003ace9f7b4ee151b7920524bcbdf64fef0cca9d7c842bae8f515d7afb84ea93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003ace9f7b4ee151b7920524bcbdf64fef0cca9d7c842bae8f515d7afb84ea93->enter($__internal_003ace9f7b4ee151b7920524bcbdf64fef0cca9d7c842bae8f515d7afb84ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_003ace9f7b4ee151b7920524bcbdf64fef0cca9d7c842bae8f515d7afb84ea93->leave($__internal_003ace9f7b4ee151b7920524bcbdf64fef0cca9d7c842bae8f515d7afb84ea93_prof);

        
        $__internal_bc4d08ea968f29b78ab4235e1104b15066462d2e1966f098f1ad5d721b0d2f83->leave($__internal_bc4d08ea968f29b78ab4235e1104b15066462d2e1966f098f1ad5d721b0d2f83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1af486ab23784d673f06b71dea28c8164dbc20e37ac73d7f16dd5a1cbf0c9eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af486ab23784d673f06b71dea28c8164dbc20e37ac73d7f16dd5a1cbf0c9eaa->enter($__internal_1af486ab23784d673f06b71dea28c8164dbc20e37ac73d7f16dd5a1cbf0c9eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b4c9f762ffb388ce863580820bb6719c5043e51eeb7a32f808f9dfb8a58b317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4c9f762ffb388ce863580820bb6719c5043e51eeb7a32f808f9dfb8a58b317->enter($__internal_2b4c9f762ffb388ce863580820bb6719c5043e51eeb7a32f808f9dfb8a58b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b4c9f762ffb388ce863580820bb6719c5043e51eeb7a32f808f9dfb8a58b317->leave($__internal_2b4c9f762ffb388ce863580820bb6719c5043e51eeb7a32f808f9dfb8a58b317_prof);

        
        $__internal_1af486ab23784d673f06b71dea28c8164dbc20e37ac73d7f16dd5a1cbf0c9eaa->leave($__internal_1af486ab23784d673f06b71dea28c8164dbc20e37ac73d7f16dd5a1cbf0c9eaa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd960941927f97d149d265b45a6be9ac8a3afbe46326daf3447ee627fc41068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd960941927f97d149d265b45a6be9ac8a3afbe46326daf3447ee627fc41068->enter($__internal_4dd960941927f97d149d265b45a6be9ac8a3afbe46326daf3447ee627fc41068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b59d9005df0abe868f5eec01187a8de39541147781dcd7156609011a3b32cd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59d9005df0abe868f5eec01187a8de39541147781dcd7156609011a3b32cd16->enter($__internal_b59d9005df0abe868f5eec01187a8de39541147781dcd7156609011a3b32cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b59d9005df0abe868f5eec01187a8de39541147781dcd7156609011a3b32cd16->leave($__internal_b59d9005df0abe868f5eec01187a8de39541147781dcd7156609011a3b32cd16_prof);

        
        $__internal_4dd960941927f97d149d265b45a6be9ac8a3afbe46326daf3447ee627fc41068->leave($__internal_4dd960941927f97d149d265b45a6be9ac8a3afbe46326daf3447ee627fc41068_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
