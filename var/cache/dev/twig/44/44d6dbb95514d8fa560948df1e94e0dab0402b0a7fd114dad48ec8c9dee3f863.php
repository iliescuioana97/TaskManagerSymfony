<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
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
        $__internal_f082e44caca23bfdd01a8524ce561e5513d80218721cf53f811c167eb5e19586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f082e44caca23bfdd01a8524ce561e5513d80218721cf53f811c167eb5e19586->enter($__internal_f082e44caca23bfdd01a8524ce561e5513d80218721cf53f811c167eb5e19586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22d03c589e874d698392c2cdde163b15d90bfb776bd48562d35eb88b4cf65144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d03c589e874d698392c2cdde163b15d90bfb776bd48562d35eb88b4cf65144->enter($__internal_22d03c589e874d698392c2cdde163b15d90bfb776bd48562d35eb88b4cf65144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
        
        $__internal_f082e44caca23bfdd01a8524ce561e5513d80218721cf53f811c167eb5e19586->leave($__internal_f082e44caca23bfdd01a8524ce561e5513d80218721cf53f811c167eb5e19586_prof);

        
        $__internal_22d03c589e874d698392c2cdde163b15d90bfb776bd48562d35eb88b4cf65144->leave($__internal_22d03c589e874d698392c2cdde163b15d90bfb776bd48562d35eb88b4cf65144_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b92552dd1bbcc667111c1d431ee77e10eb044799075f3776d1b323ddf48e217b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92552dd1bbcc667111c1d431ee77e10eb044799075f3776d1b323ddf48e217b->enter($__internal_b92552dd1bbcc667111c1d431ee77e10eb044799075f3776d1b323ddf48e217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48ded6e70cb893f09d007a6ae1fa4dedbd06bef7ccee0977476a152206df4cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ded6e70cb893f09d007a6ae1fa4dedbd06bef7ccee0977476a152206df4cc8->enter($__internal_48ded6e70cb893f09d007a6ae1fa4dedbd06bef7ccee0977476a152206df4cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48ded6e70cb893f09d007a6ae1fa4dedbd06bef7ccee0977476a152206df4cc8->leave($__internal_48ded6e70cb893f09d007a6ae1fa4dedbd06bef7ccee0977476a152206df4cc8_prof);

        
        $__internal_b92552dd1bbcc667111c1d431ee77e10eb044799075f3776d1b323ddf48e217b->leave($__internal_b92552dd1bbcc667111c1d431ee77e10eb044799075f3776d1b323ddf48e217b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fd7094ebed51d27b6284aab0da56cf6e3eb870f3c618bbe090b99909cb4069c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd7094ebed51d27b6284aab0da56cf6e3eb870f3c618bbe090b99909cb4069c->enter($__internal_7fd7094ebed51d27b6284aab0da56cf6e3eb870f3c618bbe090b99909cb4069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ee8cf515904ebe06e5e884d802d79c5e88b32dfe8670f79391c1fb83a42e6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee8cf515904ebe06e5e884d802d79c5e88b32dfe8670f79391c1fb83a42e6fe->enter($__internal_5ee8cf515904ebe06e5e884d802d79c5e88b32dfe8670f79391c1fb83a42e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ee8cf515904ebe06e5e884d802d79c5e88b32dfe8670f79391c1fb83a42e6fe->leave($__internal_5ee8cf515904ebe06e5e884d802d79c5e88b32dfe8670f79391c1fb83a42e6fe_prof);

        
        $__internal_7fd7094ebed51d27b6284aab0da56cf6e3eb870f3c618bbe090b99909cb4069c->leave($__internal_7fd7094ebed51d27b6284aab0da56cf6e3eb870f3c618bbe090b99909cb4069c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cca11a4ba08baf86f666d71501098510cf18486046fda96f578a77eb044c2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cca11a4ba08baf86f666d71501098510cf18486046fda96f578a77eb044c2c1->enter($__internal_5cca11a4ba08baf86f666d71501098510cf18486046fda96f578a77eb044c2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d26d512c03257e84cab71c909632da717f1edb83ec63900911f4bbb95674dab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26d512c03257e84cab71c909632da717f1edb83ec63900911f4bbb95674dab0->enter($__internal_d26d512c03257e84cab71c909632da717f1edb83ec63900911f4bbb95674dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d26d512c03257e84cab71c909632da717f1edb83ec63900911f4bbb95674dab0->leave($__internal_d26d512c03257e84cab71c909632da717f1edb83ec63900911f4bbb95674dab0_prof);

        
        $__internal_5cca11a4ba08baf86f666d71501098510cf18486046fda96f578a77eb044c2c1->leave($__internal_5cca11a4ba08baf86f666d71501098510cf18486046fda96f578a77eb044c2c1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d634637899e0add3dbe3ad1c507515d4a3111026c49c387e476ba58d65833bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d634637899e0add3dbe3ad1c507515d4a3111026c49c387e476ba58d65833bf4->enter($__internal_d634637899e0add3dbe3ad1c507515d4a3111026c49c387e476ba58d65833bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ba2b19f17106ebb919062e7656614d27668e59d4b8863b506bc0022028d56cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba2b19f17106ebb919062e7656614d27668e59d4b8863b506bc0022028d56cb->enter($__internal_3ba2b19f17106ebb919062e7656614d27668e59d4b8863b506bc0022028d56cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ba2b19f17106ebb919062e7656614d27668e59d4b8863b506bc0022028d56cb->leave($__internal_3ba2b19f17106ebb919062e7656614d27668e59d4b8863b506bc0022028d56cb_prof);

        
        $__internal_d634637899e0add3dbe3ad1c507515d4a3111026c49c387e476ba58d65833bf4->leave($__internal_d634637899e0add3dbe3ad1c507515d4a3111026c49c387e476ba58d65833bf4_prof);

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
        return array (  118 => 13,  101 => 12,  84 => 6,  66 => 5,  54 => 14,  52 => 13,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/base.html.twig");
    }
}
