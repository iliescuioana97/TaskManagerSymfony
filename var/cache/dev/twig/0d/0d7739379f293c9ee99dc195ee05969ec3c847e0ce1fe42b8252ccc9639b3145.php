<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_e54cdc0d32fcb55abae4dd334d84ed7a3ccfd0bcd21bc4b390d9dbed36384d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_d93388c171d76a8419019e63d1ef0f2c08be178f3bffd81ca50b9cb2751a6c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93388c171d76a8419019e63d1ef0f2c08be178f3bffd81ca50b9cb2751a6c23->enter($__internal_d93388c171d76a8419019e63d1ef0f2c08be178f3bffd81ca50b9cb2751a6c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_989e1a1a42d96a64fcd6625469d2071cabfeb93d5105fb24c38bec11a9813b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989e1a1a42d96a64fcd6625469d2071cabfeb93d5105fb24c38bec11a9813b9d->enter($__internal_989e1a1a42d96a64fcd6625469d2071cabfeb93d5105fb24c38bec11a9813b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d93388c171d76a8419019e63d1ef0f2c08be178f3bffd81ca50b9cb2751a6c23->leave($__internal_d93388c171d76a8419019e63d1ef0f2c08be178f3bffd81ca50b9cb2751a6c23_prof);

        
        $__internal_989e1a1a42d96a64fcd6625469d2071cabfeb93d5105fb24c38bec11a9813b9d->leave($__internal_989e1a1a42d96a64fcd6625469d2071cabfeb93d5105fb24c38bec11a9813b9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d93276e03a719756b18c5059bdc87773ca58423448bfe0efe6609c644e2f8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d93276e03a719756b18c5059bdc87773ca58423448bfe0efe6609c644e2f8f3->enter($__internal_8d93276e03a719756b18c5059bdc87773ca58423448bfe0efe6609c644e2f8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe50c81a51fa0f8010f26da82bac7a46549c56abeed07d507e347408ec72f812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe50c81a51fa0f8010f26da82bac7a46549c56abeed07d507e347408ec72f812->enter($__internal_fe50c81a51fa0f8010f26da82bac7a46549c56abeed07d507e347408ec72f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fe50c81a51fa0f8010f26da82bac7a46549c56abeed07d507e347408ec72f812->leave($__internal_fe50c81a51fa0f8010f26da82bac7a46549c56abeed07d507e347408ec72f812_prof);

        
        $__internal_8d93276e03a719756b18c5059bdc87773ca58423448bfe0efe6609c644e2f8f3->leave($__internal_8d93276e03a719756b18c5059bdc87773ca58423448bfe0efe6609c644e2f8f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
