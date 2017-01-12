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
        $__internal_ef7985c256dfb8072853c09115bd86f1dfe352f288cfbe7e6b57a63846fef780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7985c256dfb8072853c09115bd86f1dfe352f288cfbe7e6b57a63846fef780->enter($__internal_ef7985c256dfb8072853c09115bd86f1dfe352f288cfbe7e6b57a63846fef780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b432c1de36a5d3b1b3e7f002ded2eb4c183cd641ee9c0082134ba72dde677826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b432c1de36a5d3b1b3e7f002ded2eb4c183cd641ee9c0082134ba72dde677826->enter($__internal_b432c1de36a5d3b1b3e7f002ded2eb4c183cd641ee9c0082134ba72dde677826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ef7985c256dfb8072853c09115bd86f1dfe352f288cfbe7e6b57a63846fef780->leave($__internal_ef7985c256dfb8072853c09115bd86f1dfe352f288cfbe7e6b57a63846fef780_prof);

        
        $__internal_b432c1de36a5d3b1b3e7f002ded2eb4c183cd641ee9c0082134ba72dde677826->leave($__internal_b432c1de36a5d3b1b3e7f002ded2eb4c183cd641ee9c0082134ba72dde677826_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eff5fe9aee4aeb531729be6a3d6ac8dcbe23e5cbb138f01ef29e995e3a48cf9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff5fe9aee4aeb531729be6a3d6ac8dcbe23e5cbb138f01ef29e995e3a48cf9a->enter($__internal_eff5fe9aee4aeb531729be6a3d6ac8dcbe23e5cbb138f01ef29e995e3a48cf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c436c3f251465365d35348a70c751b75a9f1c7a06c2dde07c72da456c0cd8d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c436c3f251465365d35348a70c751b75a9f1c7a06c2dde07c72da456c0cd8d97->enter($__internal_c436c3f251465365d35348a70c751b75a9f1c7a06c2dde07c72da456c0cd8d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c436c3f251465365d35348a70c751b75a9f1c7a06c2dde07c72da456c0cd8d97->leave($__internal_c436c3f251465365d35348a70c751b75a9f1c7a06c2dde07c72da456c0cd8d97_prof);

        
        $__internal_eff5fe9aee4aeb531729be6a3d6ac8dcbe23e5cbb138f01ef29e995e3a48cf9a->leave($__internal_eff5fe9aee4aeb531729be6a3d6ac8dcbe23e5cbb138f01ef29e995e3a48cf9a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6921796c7f63812f0300a39baeece9b28f99471cd6f47166308d5e42d20c55ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6921796c7f63812f0300a39baeece9b28f99471cd6f47166308d5e42d20c55ed->enter($__internal_6921796c7f63812f0300a39baeece9b28f99471cd6f47166308d5e42d20c55ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a70fe66fdcced920107091f6487d597bc94d6512f112e9f6e52210128019245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a70fe66fdcced920107091f6487d597bc94d6512f112e9f6e52210128019245->enter($__internal_4a70fe66fdcced920107091f6487d597bc94d6512f112e9f6e52210128019245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        
        $__internal_4a70fe66fdcced920107091f6487d597bc94d6512f112e9f6e52210128019245->leave($__internal_4a70fe66fdcced920107091f6487d597bc94d6512f112e9f6e52210128019245_prof);

        
        $__internal_6921796c7f63812f0300a39baeece9b28f99471cd6f47166308d5e42d20c55ed->leave($__internal_6921796c7f63812f0300a39baeece9b28f99471cd6f47166308d5e42d20c55ed_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e7f63d3932349fe7c267db4999c11931559b965f11672546d054a251908f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e7f63d3932349fe7c267db4999c11931559b965f11672546d054a251908f38->enter($__internal_a5e7f63d3932349fe7c267db4999c11931559b965f11672546d054a251908f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaf946f7398f398e93469c4d762d5548f66d45a07610ff5975cb6e2d70838b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf946f7398f398e93469c4d762d5548f66d45a07610ff5975cb6e2d70838b01->enter($__internal_aaf946f7398f398e93469c4d762d5548f66d45a07610ff5975cb6e2d70838b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaf946f7398f398e93469c4d762d5548f66d45a07610ff5975cb6e2d70838b01->leave($__internal_aaf946f7398f398e93469c4d762d5548f66d45a07610ff5975cb6e2d70838b01_prof);

        
        $__internal_a5e7f63d3932349fe7c267db4999c11931559b965f11672546d054a251908f38->leave($__internal_a5e7f63d3932349fe7c267db4999c11931559b965f11672546d054a251908f38_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38090fb164e27d01733b45d5da5ae05139ef5f6878f67ef099a11e9a7d6eb78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38090fb164e27d01733b45d5da5ae05139ef5f6878f67ef099a11e9a7d6eb78f->enter($__internal_38090fb164e27d01733b45d5da5ae05139ef5f6878f67ef099a11e9a7d6eb78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ce86a531b5bc9dd1e870c221c5c8c28931aeede0321cfcdde883f5298f8a60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce86a531b5bc9dd1e870c221c5c8c28931aeede0321cfcdde883f5298f8a60e->enter($__internal_6ce86a531b5bc9dd1e870c221c5c8c28931aeede0321cfcdde883f5298f8a60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ce86a531b5bc9dd1e870c221c5c8c28931aeede0321cfcdde883f5298f8a60e->leave($__internal_6ce86a531b5bc9dd1e870c221c5c8c28931aeede0321cfcdde883f5298f8a60e_prof);

        
        $__internal_38090fb164e27d01733b45d5da5ae05139ef5f6878f67ef099a11e9a7d6eb78f->leave($__internal_38090fb164e27d01733b45d5da5ae05139ef5f6878f67ef099a11e9a7d6eb78f_prof);

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
