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
        $__internal_d7599215ba3d8a0cdde7a6b6fb77d9969fffc6dc7c3cd1e86607c44463613982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7599215ba3d8a0cdde7a6b6fb77d9969fffc6dc7c3cd1e86607c44463613982->enter($__internal_d7599215ba3d8a0cdde7a6b6fb77d9969fffc6dc7c3cd1e86607c44463613982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3c9dfcffb197ca51750c0fe3f3c3735b450b29bfb03d9f9dcbba19c923502a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9dfcffb197ca51750c0fe3f3c3735b450b29bfb03d9f9dcbba19c923502a74->enter($__internal_3c9dfcffb197ca51750c0fe3f3c3735b450b29bfb03d9f9dcbba19c923502a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_d7599215ba3d8a0cdde7a6b6fb77d9969fffc6dc7c3cd1e86607c44463613982->leave($__internal_d7599215ba3d8a0cdde7a6b6fb77d9969fffc6dc7c3cd1e86607c44463613982_prof);

        
        $__internal_3c9dfcffb197ca51750c0fe3f3c3735b450b29bfb03d9f9dcbba19c923502a74->leave($__internal_3c9dfcffb197ca51750c0fe3f3c3735b450b29bfb03d9f9dcbba19c923502a74_prof);

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
