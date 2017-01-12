<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d5b17cba9f0bd9ae9bf7b8618c290b049c365eece78811cd2687152c11455116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7487d9fb5921666ba9c48f2d32de044f96e36f2d1821b68238f3f7582c7294ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7487d9fb5921666ba9c48f2d32de044f96e36f2d1821b68238f3f7582c7294ef->enter($__internal_7487d9fb5921666ba9c48f2d32de044f96e36f2d1821b68238f3f7582c7294ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ec2032e1b3a9551e5c02c117c7561b58470404a990f30cc3f03508078a0d7e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2032e1b3a9551e5c02c117c7561b58470404a990f30cc3f03508078a0d7e1f->enter($__internal_ec2032e1b3a9551e5c02c117c7561b58470404a990f30cc3f03508078a0d7e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7487d9fb5921666ba9c48f2d32de044f96e36f2d1821b68238f3f7582c7294ef->leave($__internal_7487d9fb5921666ba9c48f2d32de044f96e36f2d1821b68238f3f7582c7294ef_prof);

        
        $__internal_ec2032e1b3a9551e5c02c117c7561b58470404a990f30cc3f03508078a0d7e1f->leave($__internal_ec2032e1b3a9551e5c02c117c7561b58470404a990f30cc3f03508078a0d7e1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5256b5787c9a0e0eda013180ec238a2f70c81fd57e7647ff8d4eac9e3bf73b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5256b5787c9a0e0eda013180ec238a2f70c81fd57e7647ff8d4eac9e3bf73b63->enter($__internal_5256b5787c9a0e0eda013180ec238a2f70c81fd57e7647ff8d4eac9e3bf73b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e33d541f658d1ee7488f959f9146410b9f4681b8ad9659602f95a28075324eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33d541f658d1ee7488f959f9146410b9f4681b8ad9659602f95a28075324eb2->enter($__internal_e33d541f658d1ee7488f959f9146410b9f4681b8ad9659602f95a28075324eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e33d541f658d1ee7488f959f9146410b9f4681b8ad9659602f95a28075324eb2->leave($__internal_e33d541f658d1ee7488f959f9146410b9f4681b8ad9659602f95a28075324eb2_prof);

        
        $__internal_5256b5787c9a0e0eda013180ec238a2f70c81fd57e7647ff8d4eac9e3bf73b63->leave($__internal_5256b5787c9a0e0eda013180ec238a2f70c81fd57e7647ff8d4eac9e3bf73b63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6add3322b89856eefc65ff56bf4e28dec0e55da573397133658e1325cfc97c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6add3322b89856eefc65ff56bf4e28dec0e55da573397133658e1325cfc97c7d->enter($__internal_6add3322b89856eefc65ff56bf4e28dec0e55da573397133658e1325cfc97c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc266e0143067a8a4a054f118e9df1efd886ec0740d611808182b4958414190e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc266e0143067a8a4a054f118e9df1efd886ec0740d611808182b4958414190e->enter($__internal_cc266e0143067a8a4a054f118e9df1efd886ec0740d611808182b4958414190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cc266e0143067a8a4a054f118e9df1efd886ec0740d611808182b4958414190e->leave($__internal_cc266e0143067a8a4a054f118e9df1efd886ec0740d611808182b4958414190e_prof);

        
        $__internal_6add3322b89856eefc65ff56bf4e28dec0e55da573397133658e1325cfc97c7d->leave($__internal_6add3322b89856eefc65ff56bf4e28dec0e55da573397133658e1325cfc97c7d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
