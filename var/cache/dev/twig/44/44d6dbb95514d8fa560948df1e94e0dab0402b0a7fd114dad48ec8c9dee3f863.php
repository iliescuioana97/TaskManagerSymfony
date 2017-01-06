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
        $__internal_fadf726465ddfe6717e62c53eafb6dfdae8e0f1cd5b1339fbccb13b22369f83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadf726465ddfe6717e62c53eafb6dfdae8e0f1cd5b1339fbccb13b22369f83f->enter($__internal_fadf726465ddfe6717e62c53eafb6dfdae8e0f1cd5b1339fbccb13b22369f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81ec8a63726664175b8428f378cab36089130254f4a51d8c571affbcfcb677eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ec8a63726664175b8428f378cab36089130254f4a51d8c571affbcfcb677eb->enter($__internal_81ec8a63726664175b8428f378cab36089130254f4a51d8c571affbcfcb677eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fadf726465ddfe6717e62c53eafb6dfdae8e0f1cd5b1339fbccb13b22369f83f->leave($__internal_fadf726465ddfe6717e62c53eafb6dfdae8e0f1cd5b1339fbccb13b22369f83f_prof);

        
        $__internal_81ec8a63726664175b8428f378cab36089130254f4a51d8c571affbcfcb677eb->leave($__internal_81ec8a63726664175b8428f378cab36089130254f4a51d8c571affbcfcb677eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_570224649ce04bc3be997e065cc6d0cccb14239bba3318e2b64333ae94db08b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570224649ce04bc3be997e065cc6d0cccb14239bba3318e2b64333ae94db08b2->enter($__internal_570224649ce04bc3be997e065cc6d0cccb14239bba3318e2b64333ae94db08b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bae674081da2ab889246233072484facc317d7f578c5203732ac849444c1bcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae674081da2ab889246233072484facc317d7f578c5203732ac849444c1bcce->enter($__internal_bae674081da2ab889246233072484facc317d7f578c5203732ac849444c1bcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bae674081da2ab889246233072484facc317d7f578c5203732ac849444c1bcce->leave($__internal_bae674081da2ab889246233072484facc317d7f578c5203732ac849444c1bcce_prof);

        
        $__internal_570224649ce04bc3be997e065cc6d0cccb14239bba3318e2b64333ae94db08b2->leave($__internal_570224649ce04bc3be997e065cc6d0cccb14239bba3318e2b64333ae94db08b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fdcdce33af9851879368b401343f5f8f6ee8b9b8f19e0b4ea4ef719888142f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdcdce33af9851879368b401343f5f8f6ee8b9b8f19e0b4ea4ef719888142f4->enter($__internal_6fdcdce33af9851879368b401343f5f8f6ee8b9b8f19e0b4ea4ef719888142f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7e09fe6c6967f09f552f2d3b61730a142585159f3282bf90248746616728f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e09fe6c6967f09f552f2d3b61730a142585159f3282bf90248746616728f1f->enter($__internal_d7e09fe6c6967f09f552f2d3b61730a142585159f3282bf90248746616728f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7e09fe6c6967f09f552f2d3b61730a142585159f3282bf90248746616728f1f->leave($__internal_d7e09fe6c6967f09f552f2d3b61730a142585159f3282bf90248746616728f1f_prof);

        
        $__internal_6fdcdce33af9851879368b401343f5f8f6ee8b9b8f19e0b4ea4ef719888142f4->leave($__internal_6fdcdce33af9851879368b401343f5f8f6ee8b9b8f19e0b4ea4ef719888142f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dd634c8675031285c02373c4b039d7cbbfad843d6e5735e4cbfea926818ddfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd634c8675031285c02373c4b039d7cbbfad843d6e5735e4cbfea926818ddfa->enter($__internal_0dd634c8675031285c02373c4b039d7cbbfad843d6e5735e4cbfea926818ddfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98d6da991f4030d1181d4a4b8e065e42e3947ff43791f39ada613ae1c882701e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d6da991f4030d1181d4a4b8e065e42e3947ff43791f39ada613ae1c882701e->enter($__internal_98d6da991f4030d1181d4a4b8e065e42e3947ff43791f39ada613ae1c882701e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98d6da991f4030d1181d4a4b8e065e42e3947ff43791f39ada613ae1c882701e->leave($__internal_98d6da991f4030d1181d4a4b8e065e42e3947ff43791f39ada613ae1c882701e_prof);

        
        $__internal_0dd634c8675031285c02373c4b039d7cbbfad843d6e5735e4cbfea926818ddfa->leave($__internal_0dd634c8675031285c02373c4b039d7cbbfad843d6e5735e4cbfea926818ddfa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbe41f74e5a6c30392c7453d885093079627ffa21e2c20e28c46fb69c6f18844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe41f74e5a6c30392c7453d885093079627ffa21e2c20e28c46fb69c6f18844->enter($__internal_cbe41f74e5a6c30392c7453d885093079627ffa21e2c20e28c46fb69c6f18844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ce10398f61f7f46f31bb829eaa1908b3b13114e76a4b00122e78502331889ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce10398f61f7f46f31bb829eaa1908b3b13114e76a4b00122e78502331889ed->enter($__internal_2ce10398f61f7f46f31bb829eaa1908b3b13114e76a4b00122e78502331889ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ce10398f61f7f46f31bb829eaa1908b3b13114e76a4b00122e78502331889ed->leave($__internal_2ce10398f61f7f46f31bb829eaa1908b3b13114e76a4b00122e78502331889ed_prof);

        
        $__internal_cbe41f74e5a6c30392c7453d885093079627ffa21e2c20e28c46fb69c6f18844->leave($__internal_cbe41f74e5a6c30392c7453d885093079627ffa21e2c20e28c46fb69c6f18844_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ioana/Projects/task-manager-symfony/app/Resources/views/base.html.twig");
    }
}
