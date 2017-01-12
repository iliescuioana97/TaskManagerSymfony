<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c65a5d956aa70ffa6e6215ae099546ec9e498b723a4ea563becbe40dd4a410d1 extends Twig_Template
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
        $__internal_629ddc5edf622f44255e64242f51e13fc8cc4e8e8149e5c142c7fb4feb5967b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629ddc5edf622f44255e64242f51e13fc8cc4e8e8149e5c142c7fb4feb5967b4->enter($__internal_629ddc5edf622f44255e64242f51e13fc8cc4e8e8149e5c142c7fb4feb5967b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c741c892d9f1aa74858750826fede6d880c80fb47d44d82cbd95430454fc5877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c741c892d9f1aa74858750826fede6d880c80fb47d44d82cbd95430454fc5877->enter($__internal_c741c892d9f1aa74858750826fede6d880c80fb47d44d82cbd95430454fc5877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_629ddc5edf622f44255e64242f51e13fc8cc4e8e8149e5c142c7fb4feb5967b4->leave($__internal_629ddc5edf622f44255e64242f51e13fc8cc4e8e8149e5c142c7fb4feb5967b4_prof);

        
        $__internal_c741c892d9f1aa74858750826fede6d880c80fb47d44d82cbd95430454fc5877->leave($__internal_c741c892d9f1aa74858750826fede6d880c80fb47d44d82cbd95430454fc5877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
