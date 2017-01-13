<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f3a6e4cdd9ec39298958f729f769fda5bd475bbeef365c4cc1c26758040bace5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c80b791fe98789eec83b57d6403d9d1b2f0976d009edbc431c54de9e696ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c80b791fe98789eec83b57d6403d9d1b2f0976d009edbc431c54de9e696ed5->enter($__internal_11c80b791fe98789eec83b57d6403d9d1b2f0976d009edbc431c54de9e696ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_b7873ff2f5feec9604754265d73adf06323c62df0f98b2a583d6c638af256a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7873ff2f5feec9604754265d73adf06323c62df0f98b2a583d6c638af256a9f->enter($__internal_b7873ff2f5feec9604754265d73adf06323c62df0f98b2a583d6c638af256a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_11c80b791fe98789eec83b57d6403d9d1b2f0976d009edbc431c54de9e696ed5->leave($__internal_11c80b791fe98789eec83b57d6403d9d1b2f0976d009edbc431c54de9e696ed5_prof);

        
        $__internal_b7873ff2f5feec9604754265d73adf06323c62df0f98b2a583d6c638af256a9f->leave($__internal_b7873ff2f5feec9604754265d73adf06323c62df0f98b2a583d6c638af256a9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
