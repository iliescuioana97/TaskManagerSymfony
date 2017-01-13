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
        $__internal_6dc29d3201dabaa665fafdeb0eed88c6f71145f7a6925250206c0ea5aff73332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc29d3201dabaa665fafdeb0eed88c6f71145f7a6925250206c0ea5aff73332->enter($__internal_6dc29d3201dabaa665fafdeb0eed88c6f71145f7a6925250206c0ea5aff73332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3f87f3f6980c6a89e3de98432160ed477f33c4bc6cbd53f6cd219b941d61907e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f87f3f6980c6a89e3de98432160ed477f33c4bc6cbd53f6cd219b941d61907e->enter($__internal_3f87f3f6980c6a89e3de98432160ed477f33c4bc6cbd53f6cd219b941d61907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6dc29d3201dabaa665fafdeb0eed88c6f71145f7a6925250206c0ea5aff73332->leave($__internal_6dc29d3201dabaa665fafdeb0eed88c6f71145f7a6925250206c0ea5aff73332_prof);

        
        $__internal_3f87f3f6980c6a89e3de98432160ed477f33c4bc6cbd53f6cd219b941d61907e->leave($__internal_3f87f3f6980c6a89e3de98432160ed477f33c4bc6cbd53f6cd219b941d61907e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff206c23477e4da889b1ef3052ce00c98d9bc3d97d1e46f897148127b4d3110c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff206c23477e4da889b1ef3052ce00c98d9bc3d97d1e46f897148127b4d3110c->enter($__internal_ff206c23477e4da889b1ef3052ce00c98d9bc3d97d1e46f897148127b4d3110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9aab4a54a2cd38a038e298c797348877bcc5343aacea055a2e976a2da8b6da47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aab4a54a2cd38a038e298c797348877bcc5343aacea055a2e976a2da8b6da47->enter($__internal_9aab4a54a2cd38a038e298c797348877bcc5343aacea055a2e976a2da8b6da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9aab4a54a2cd38a038e298c797348877bcc5343aacea055a2e976a2da8b6da47->leave($__internal_9aab4a54a2cd38a038e298c797348877bcc5343aacea055a2e976a2da8b6da47_prof);

        
        $__internal_ff206c23477e4da889b1ef3052ce00c98d9bc3d97d1e46f897148127b4d3110c->leave($__internal_ff206c23477e4da889b1ef3052ce00c98d9bc3d97d1e46f897148127b4d3110c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3499dc6cd02524d6d8e7fe8ace371b265752cdf99675f59858ecdc3e3b686068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3499dc6cd02524d6d8e7fe8ace371b265752cdf99675f59858ecdc3e3b686068->enter($__internal_3499dc6cd02524d6d8e7fe8ace371b265752cdf99675f59858ecdc3e3b686068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3299cddfcfcf88741882718de71c7ed61aaf8dca3391f666d52c537e98e7954f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3299cddfcfcf88741882718de71c7ed61aaf8dca3391f666d52c537e98e7954f->enter($__internal_3299cddfcfcf88741882718de71c7ed61aaf8dca3391f666d52c537e98e7954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        
        $__internal_3299cddfcfcf88741882718de71c7ed61aaf8dca3391f666d52c537e98e7954f->leave($__internal_3299cddfcfcf88741882718de71c7ed61aaf8dca3391f666d52c537e98e7954f_prof);

        
        $__internal_3499dc6cd02524d6d8e7fe8ace371b265752cdf99675f59858ecdc3e3b686068->leave($__internal_3499dc6cd02524d6d8e7fe8ace371b265752cdf99675f59858ecdc3e3b686068_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_4780f1f8ae8bda5490d025643fbb494972f7cdb32c351a1b198fad9c1b3a40cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4780f1f8ae8bda5490d025643fbb494972f7cdb32c351a1b198fad9c1b3a40cf->enter($__internal_4780f1f8ae8bda5490d025643fbb494972f7cdb32c351a1b198fad9c1b3a40cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e730a3c7186b66889bf7320f640ab757238273145b0917559c448e49695cf65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e730a3c7186b66889bf7320f640ab757238273145b0917559c448e49695cf65a->enter($__internal_e730a3c7186b66889bf7320f640ab757238273145b0917559c448e49695cf65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e730a3c7186b66889bf7320f640ab757238273145b0917559c448e49695cf65a->leave($__internal_e730a3c7186b66889bf7320f640ab757238273145b0917559c448e49695cf65a_prof);

        
        $__internal_4780f1f8ae8bda5490d025643fbb494972f7cdb32c351a1b198fad9c1b3a40cf->leave($__internal_4780f1f8ae8bda5490d025643fbb494972f7cdb32c351a1b198fad9c1b3a40cf_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57f50d943a71dfafdfca4ad2d3b4512995971caca3c178d4c9de2b04f5ba4677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f50d943a71dfafdfca4ad2d3b4512995971caca3c178d4c9de2b04f5ba4677->enter($__internal_57f50d943a71dfafdfca4ad2d3b4512995971caca3c178d4c9de2b04f5ba4677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8d1a111b627a46f98736520efff833bb6b25cda6b3e7b018f1fe024fbdcba710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1a111b627a46f98736520efff833bb6b25cda6b3e7b018f1fe024fbdcba710->enter($__internal_8d1a111b627a46f98736520efff833bb6b25cda6b3e7b018f1fe024fbdcba710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d1a111b627a46f98736520efff833bb6b25cda6b3e7b018f1fe024fbdcba710->leave($__internal_8d1a111b627a46f98736520efff833bb6b25cda6b3e7b018f1fe024fbdcba710_prof);

        
        $__internal_57f50d943a71dfafdfca4ad2d3b4512995971caca3c178d4c9de2b04f5ba4677->leave($__internal_57f50d943a71dfafdfca4ad2d3b4512995971caca3c178d4c9de2b04f5ba4677_prof);

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
