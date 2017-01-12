<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6005975f0680e4033b2f4ed3e1cf8e7a3ba4a0a5662b1124d0ff0ba152eb9394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c79583a507c4a164f51f324ec826d1f5410377da49afd58a00f8e95d14cb686c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79583a507c4a164f51f324ec826d1f5410377da49afd58a00f8e95d14cb686c->enter($__internal_c79583a507c4a164f51f324ec826d1f5410377da49afd58a00f8e95d14cb686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_68012a3dc74053ac6930a0dfd6721d19bc1ce212e27baa7c5829afa2b28af01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68012a3dc74053ac6930a0dfd6721d19bc1ce212e27baa7c5829afa2b28af01a->enter($__internal_68012a3dc74053ac6930a0dfd6721d19bc1ce212e27baa7c5829afa2b28af01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c79583a507c4a164f51f324ec826d1f5410377da49afd58a00f8e95d14cb686c->leave($__internal_c79583a507c4a164f51f324ec826d1f5410377da49afd58a00f8e95d14cb686c_prof);

        
        $__internal_68012a3dc74053ac6930a0dfd6721d19bc1ce212e27baa7c5829afa2b28af01a->leave($__internal_68012a3dc74053ac6930a0dfd6721d19bc1ce212e27baa7c5829afa2b28af01a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f59a44ee244690c0e7d7a7f026f7f3fc858940770cba5721394d92b609c96e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59a44ee244690c0e7d7a7f026f7f3fc858940770cba5721394d92b609c96e91->enter($__internal_f59a44ee244690c0e7d7a7f026f7f3fc858940770cba5721394d92b609c96e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4012752f31f2be069b019f60212caac85d3db92ca5514033b1c7de063a9d408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4012752f31f2be069b019f60212caac85d3db92ca5514033b1c7de063a9d408->enter($__internal_e4012752f31f2be069b019f60212caac85d3db92ca5514033b1c7de063a9d408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e4012752f31f2be069b019f60212caac85d3db92ca5514033b1c7de063a9d408->leave($__internal_e4012752f31f2be069b019f60212caac85d3db92ca5514033b1c7de063a9d408_prof);

        
        $__internal_f59a44ee244690c0e7d7a7f026f7f3fc858940770cba5721394d92b609c96e91->leave($__internal_f59a44ee244690c0e7d7a7f026f7f3fc858940770cba5721394d92b609c96e91_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
