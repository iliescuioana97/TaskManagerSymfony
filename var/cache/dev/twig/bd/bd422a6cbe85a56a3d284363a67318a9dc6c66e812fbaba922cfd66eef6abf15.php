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
        $__internal_d3a59e0f23e8bc874bc0c69de855783e4a136b8c15e0fa73822cac7c3f24f4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a59e0f23e8bc874bc0c69de855783e4a136b8c15e0fa73822cac7c3f24f4bd->enter($__internal_d3a59e0f23e8bc874bc0c69de855783e4a136b8c15e0fa73822cac7c3f24f4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c30e802f9c77e781d2cda41405b471d660b3489da10f3d94f5a19a824fa9bd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30e802f9c77e781d2cda41405b471d660b3489da10f3d94f5a19a824fa9bd5e->enter($__internal_c30e802f9c77e781d2cda41405b471d660b3489da10f3d94f5a19a824fa9bd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d3a59e0f23e8bc874bc0c69de855783e4a136b8c15e0fa73822cac7c3f24f4bd->leave($__internal_d3a59e0f23e8bc874bc0c69de855783e4a136b8c15e0fa73822cac7c3f24f4bd_prof);

        
        $__internal_c30e802f9c77e781d2cda41405b471d660b3489da10f3d94f5a19a824fa9bd5e->leave($__internal_c30e802f9c77e781d2cda41405b471d660b3489da10f3d94f5a19a824fa9bd5e_prof);

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
