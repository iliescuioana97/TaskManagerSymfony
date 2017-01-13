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
        $__internal_ed28083d3bcdfdaa096af50860ec7939bd97f6b28192f146e80b7d1802a340a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed28083d3bcdfdaa096af50860ec7939bd97f6b28192f146e80b7d1802a340a7->enter($__internal_ed28083d3bcdfdaa096af50860ec7939bd97f6b28192f146e80b7d1802a340a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_cac05ede0eb4aecd7b1538ca2d0fbce19e57b6e96b991366e79b4e0c99ffbe61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac05ede0eb4aecd7b1538ca2d0fbce19e57b6e96b991366e79b4e0c99ffbe61->enter($__internal_cac05ede0eb4aecd7b1538ca2d0fbce19e57b6e96b991366e79b4e0c99ffbe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed28083d3bcdfdaa096af50860ec7939bd97f6b28192f146e80b7d1802a340a7->leave($__internal_ed28083d3bcdfdaa096af50860ec7939bd97f6b28192f146e80b7d1802a340a7_prof);

        
        $__internal_cac05ede0eb4aecd7b1538ca2d0fbce19e57b6e96b991366e79b4e0c99ffbe61->leave($__internal_cac05ede0eb4aecd7b1538ca2d0fbce19e57b6e96b991366e79b4e0c99ffbe61_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84844f1f6084679d9cb7ea51dcfaa81e97caaa79652c0f6aa4915c737d691c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84844f1f6084679d9cb7ea51dcfaa81e97caaa79652c0f6aa4915c737d691c18->enter($__internal_84844f1f6084679d9cb7ea51dcfaa81e97caaa79652c0f6aa4915c737d691c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f02a35da9ec6c0863000f37a120e965689c743484a0ee562d2cff7f385fbfb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a35da9ec6c0863000f37a120e965689c743484a0ee562d2cff7f385fbfb2c->enter($__internal_f02a35da9ec6c0863000f37a120e965689c743484a0ee562d2cff7f385fbfb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f02a35da9ec6c0863000f37a120e965689c743484a0ee562d2cff7f385fbfb2c->leave($__internal_f02a35da9ec6c0863000f37a120e965689c743484a0ee562d2cff7f385fbfb2c_prof);

        
        $__internal_84844f1f6084679d9cb7ea51dcfaa81e97caaa79652c0f6aa4915c737d691c18->leave($__internal_84844f1f6084679d9cb7ea51dcfaa81e97caaa79652c0f6aa4915c737d691c18_prof);

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
