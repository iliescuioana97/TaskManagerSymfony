<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e742bc8c6daaad3efbf512de2de2021ab78b6d53efc5dce2c1cefa7553826def extends Twig_Template
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
        $__internal_6b5e953ef40f2195d7d5f81efef6ef48e220c2778faf4bfd95b356f22bd73136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5e953ef40f2195d7d5f81efef6ef48e220c2778faf4bfd95b356f22bd73136->enter($__internal_6b5e953ef40f2195d7d5f81efef6ef48e220c2778faf4bfd95b356f22bd73136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_104f67befb8c1a2d3d7d65b72a5709933179e3d91157d55d33174610b194953c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104f67befb8c1a2d3d7d65b72a5709933179e3d91157d55d33174610b194953c->enter($__internal_104f67befb8c1a2d3d7d65b72a5709933179e3d91157d55d33174610b194953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6b5e953ef40f2195d7d5f81efef6ef48e220c2778faf4bfd95b356f22bd73136->leave($__internal_6b5e953ef40f2195d7d5f81efef6ef48e220c2778faf4bfd95b356f22bd73136_prof);

        
        $__internal_104f67befb8c1a2d3d7d65b72a5709933179e3d91157d55d33174610b194953c->leave($__internal_104f67befb8c1a2d3d7d65b72a5709933179e3d91157d55d33174610b194953c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
