<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0ea30d78723dad0a88a57692ddbaad092b4e7354fec891032a7f477b45d7d9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c27116c55cee093d5524aa6f626c52b59d5113489ebc558fb860c96d869343b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27116c55cee093d5524aa6f626c52b59d5113489ebc558fb860c96d869343b2->enter($__internal_c27116c55cee093d5524aa6f626c52b59d5113489ebc558fb860c96d869343b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_cfe0d76afb65f72dff8e5847308330bfe3020ad19b424cdf9623ad32c9f76e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe0d76afb65f72dff8e5847308330bfe3020ad19b424cdf9623ad32c9f76e0f->enter($__internal_cfe0d76afb65f72dff8e5847308330bfe3020ad19b424cdf9623ad32c9f76e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27116c55cee093d5524aa6f626c52b59d5113489ebc558fb860c96d869343b2->leave($__internal_c27116c55cee093d5524aa6f626c52b59d5113489ebc558fb860c96d869343b2_prof);

        
        $__internal_cfe0d76afb65f72dff8e5847308330bfe3020ad19b424cdf9623ad32c9f76e0f->leave($__internal_cfe0d76afb65f72dff8e5847308330bfe3020ad19b424cdf9623ad32c9f76e0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c430a0eae6fe1e171c76a4d9ebb69658530493dab1effec941bef5ef50d66b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c430a0eae6fe1e171c76a4d9ebb69658530493dab1effec941bef5ef50d66b3f->enter($__internal_c430a0eae6fe1e171c76a4d9ebb69658530493dab1effec941bef5ef50d66b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1a654fff2c85c4e786ab08dd3fb5eda24e6eb96f547c106c404ca838b90ef375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a654fff2c85c4e786ab08dd3fb5eda24e6eb96f547c106c404ca838b90ef375->enter($__internal_1a654fff2c85c4e786ab08dd3fb5eda24e6eb96f547c106c404ca838b90ef375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_1a654fff2c85c4e786ab08dd3fb5eda24e6eb96f547c106c404ca838b90ef375->leave($__internal_1a654fff2c85c4e786ab08dd3fb5eda24e6eb96f547c106c404ca838b90ef375_prof);

        
        $__internal_c430a0eae6fe1e171c76a4d9ebb69658530493dab1effec941bef5ef50d66b3f->leave($__internal_c430a0eae6fe1e171c76a4d9ebb69658530493dab1effec941bef5ef50d66b3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
