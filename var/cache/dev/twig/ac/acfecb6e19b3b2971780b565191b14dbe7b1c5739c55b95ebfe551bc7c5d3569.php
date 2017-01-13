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
        $__internal_34743a62f162cd24123e4ebdaa8e75ad4dd40aca038b86b2c057fcbcbe701da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34743a62f162cd24123e4ebdaa8e75ad4dd40aca038b86b2c057fcbcbe701da5->enter($__internal_34743a62f162cd24123e4ebdaa8e75ad4dd40aca038b86b2c057fcbcbe701da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7345e477be88b023525e57d2a01b6824c96adc619c8b7f1e1c0a7f5d74437983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7345e477be88b023525e57d2a01b6824c96adc619c8b7f1e1c0a7f5d74437983->enter($__internal_7345e477be88b023525e57d2a01b6824c96adc619c8b7f1e1c0a7f5d74437983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_34743a62f162cd24123e4ebdaa8e75ad4dd40aca038b86b2c057fcbcbe701da5->leave($__internal_34743a62f162cd24123e4ebdaa8e75ad4dd40aca038b86b2c057fcbcbe701da5_prof);

        
        $__internal_7345e477be88b023525e57d2a01b6824c96adc619c8b7f1e1c0a7f5d74437983->leave($__internal_7345e477be88b023525e57d2a01b6824c96adc619c8b7f1e1c0a7f5d74437983_prof);

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
