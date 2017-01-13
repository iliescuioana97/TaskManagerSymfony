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
        $__internal_18374055d9290e7350894155965d66d7e1fba065d7c42cccf3668a940d823627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18374055d9290e7350894155965d66d7e1fba065d7c42cccf3668a940d823627->enter($__internal_18374055d9290e7350894155965d66d7e1fba065d7c42cccf3668a940d823627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_78db6e85f2865a30b4e96ae28c2c3f9bb30e06bc57a243dc7f5aaa28888bf89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78db6e85f2865a30b4e96ae28c2c3f9bb30e06bc57a243dc7f5aaa28888bf89e->enter($__internal_78db6e85f2865a30b4e96ae28c2c3f9bb30e06bc57a243dc7f5aaa28888bf89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18374055d9290e7350894155965d66d7e1fba065d7c42cccf3668a940d823627->leave($__internal_18374055d9290e7350894155965d66d7e1fba065d7c42cccf3668a940d823627_prof);

        
        $__internal_78db6e85f2865a30b4e96ae28c2c3f9bb30e06bc57a243dc7f5aaa28888bf89e->leave($__internal_78db6e85f2865a30b4e96ae28c2c3f9bb30e06bc57a243dc7f5aaa28888bf89e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_792615c13d6aa2d88534b9bcb2ce4daff5ba49fbaab1bd848d5ceaffca2c29ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792615c13d6aa2d88534b9bcb2ce4daff5ba49fbaab1bd848d5ceaffca2c29ca->enter($__internal_792615c13d6aa2d88534b9bcb2ce4daff5ba49fbaab1bd848d5ceaffca2c29ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ac9f4f22b7954ab12d8492b7c960e716f7dd4eb33a67403d9960db539f32a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac9f4f22b7954ab12d8492b7c960e716f7dd4eb33a67403d9960db539f32a65->enter($__internal_1ac9f4f22b7954ab12d8492b7c960e716f7dd4eb33a67403d9960db539f32a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1ac9f4f22b7954ab12d8492b7c960e716f7dd4eb33a67403d9960db539f32a65->leave($__internal_1ac9f4f22b7954ab12d8492b7c960e716f7dd4eb33a67403d9960db539f32a65_prof);

        
        $__internal_792615c13d6aa2d88534b9bcb2ce4daff5ba49fbaab1bd848d5ceaffca2c29ca->leave($__internal_792615c13d6aa2d88534b9bcb2ce4daff5ba49fbaab1bd848d5ceaffca2c29ca_prof);

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
