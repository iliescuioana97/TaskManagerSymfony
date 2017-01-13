<?php

/* base.html.twig */
class __TwigTemplate_e4bdd2a03091d83677a435a6b5b9ddb5e191ec81c5a92a71704ddfd86369102c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_094ad719ca5cd333ef0eb876a1552ab6c9124aec016c1797edcd789e93beb696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094ad719ca5cd333ef0eb876a1552ab6c9124aec016c1797edcd789e93beb696->enter($__internal_094ad719ca5cd333ef0eb876a1552ab6c9124aec016c1797edcd789e93beb696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bf8dc8e98ff1286d4a9a8eb77b6c26ba6c28db1e09db535264290201e534a360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8dc8e98ff1286d4a9a8eb77b6c26ba6c28db1e09db535264290201e534a360->enter($__internal_bf8dc8e98ff1286d4a9a8eb77b6c26ba6c28db1e09db535264290201e534a360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
<body>
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</body>
</html>
";
        
        $__internal_094ad719ca5cd333ef0eb876a1552ab6c9124aec016c1797edcd789e93beb696->leave($__internal_094ad719ca5cd333ef0eb876a1552ab6c9124aec016c1797edcd789e93beb696_prof);

        
        $__internal_bf8dc8e98ff1286d4a9a8eb77b6c26ba6c28db1e09db535264290201e534a360->leave($__internal_bf8dc8e98ff1286d4a9a8eb77b6c26ba6c28db1e09db535264290201e534a360_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_135b1eabdef9d25e491dac861aced3092b43b27b4d240c383d65803acde74f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135b1eabdef9d25e491dac861aced3092b43b27b4d240c383d65803acde74f75->enter($__internal_135b1eabdef9d25e491dac861aced3092b43b27b4d240c383d65803acde74f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a74c1678ce755fbfe573c2c7f6ed74e4967e16f2a5178f8567a508c3fc53282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a74c1678ce755fbfe573c2c7f6ed74e4967e16f2a5178f8567a508c3fc53282->enter($__internal_8a74c1678ce755fbfe573c2c7f6ed74e4967e16f2a5178f8567a508c3fc53282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a74c1678ce755fbfe573c2c7f6ed74e4967e16f2a5178f8567a508c3fc53282->leave($__internal_8a74c1678ce755fbfe573c2c7f6ed74e4967e16f2a5178f8567a508c3fc53282_prof);

        
        $__internal_135b1eabdef9d25e491dac861aced3092b43b27b4d240c383d65803acde74f75->leave($__internal_135b1eabdef9d25e491dac861aced3092b43b27b4d240c383d65803acde74f75_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cef7c7400ddb6f49be56c8212f5045430e72e1b42ea4f8acedf48f5eeec8d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cef7c7400ddb6f49be56c8212f5045430e72e1b42ea4f8acedf48f5eeec8d2d->enter($__internal_3cef7c7400ddb6f49be56c8212f5045430e72e1b42ea4f8acedf48f5eeec8d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc81761a3fda45efaafdcfe8342338b1c7abfa733fc2818bcc86a1200dffad30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc81761a3fda45efaafdcfe8342338b1c7abfa733fc2818bcc86a1200dffad30->enter($__internal_cc81761a3fda45efaafdcfe8342338b1c7abfa733fc2818bcc86a1200dffad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        
        $__internal_cc81761a3fda45efaafdcfe8342338b1c7abfa733fc2818bcc86a1200dffad30->leave($__internal_cc81761a3fda45efaafdcfe8342338b1c7abfa733fc2818bcc86a1200dffad30_prof);

        
        $__internal_3cef7c7400ddb6f49be56c8212f5045430e72e1b42ea4f8acedf48f5eeec8d2d->leave($__internal_3cef7c7400ddb6f49be56c8212f5045430e72e1b42ea4f8acedf48f5eeec8d2d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3414b45fe7b4dc8c4cf3ace9014e8863487a5fcd687f0e48688452912869cafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3414b45fe7b4dc8c4cf3ace9014e8863487a5fcd687f0e48688452912869cafd->enter($__internal_3414b45fe7b4dc8c4cf3ace9014e8863487a5fcd687f0e48688452912869cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_438b30680251cfe28abe6b20ffa87ed6d9d1680ec70b35e404f0abfaa93fcf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438b30680251cfe28abe6b20ffa87ed6d9d1680ec70b35e404f0abfaa93fcf9c->enter($__internal_438b30680251cfe28abe6b20ffa87ed6d9d1680ec70b35e404f0abfaa93fcf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_438b30680251cfe28abe6b20ffa87ed6d9d1680ec70b35e404f0abfaa93fcf9c->leave($__internal_438b30680251cfe28abe6b20ffa87ed6d9d1680ec70b35e404f0abfaa93fcf9c_prof);

        
        $__internal_3414b45fe7b4dc8c4cf3ace9014e8863487a5fcd687f0e48688452912869cafd->leave($__internal_3414b45fe7b4dc8c4cf3ace9014e8863487a5fcd687f0e48688452912869cafd_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1115ba24199b079c84bb6ae4661d861dfbb9f4b7e5de5f96eac18874e57bb0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1115ba24199b079c84bb6ae4661d861dfbb9f4b7e5de5f96eac18874e57bb0e5->enter($__internal_1115ba24199b079c84bb6ae4661d861dfbb9f4b7e5de5f96eac18874e57bb0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a816abfb998270dc7d939174282ea7efba072400e3cdc6c88efeb476fbe7d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a816abfb998270dc7d939174282ea7efba072400e3cdc6c88efeb476fbe7d59->enter($__internal_0a816abfb998270dc7d939174282ea7efba072400e3cdc6c88efeb476fbe7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0a816abfb998270dc7d939174282ea7efba072400e3cdc6c88efeb476fbe7d59->leave($__internal_0a816abfb998270dc7d939174282ea7efba072400e3cdc6c88efeb476fbe7d59_prof);

        
        $__internal_1115ba24199b079c84bb6ae4661d861dfbb9f4b7e5de5f96eac18874e57bb0e5->leave($__internal_1115ba24199b079c84bb6ae4661d861dfbb9f4b7e5de5f96eac18874e57bb0e5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 16,  106 => 15,  94 => 11,  85 => 10,  67 => 5,  55 => 17,  53 => 16,  51 => 15,  48 => 14,  46 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    </head>
<body>
{% block stylesheets %}
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

{% endblock %}

{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/base.html.twig");
    }
}
