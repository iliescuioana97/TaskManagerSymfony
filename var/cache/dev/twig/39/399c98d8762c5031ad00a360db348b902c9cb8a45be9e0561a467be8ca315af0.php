<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82187edda690e2421d83d7f1bff67941cbbc44d7495fd6bfc34462f32aa50e08 extends Twig_Template
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
        $__internal_681d226ba537fe046f57abf60d2abbac7f950dcaca4508702bee870324715e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681d226ba537fe046f57abf60d2abbac7f950dcaca4508702bee870324715e3b->enter($__internal_681d226ba537fe046f57abf60d2abbac7f950dcaca4508702bee870324715e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2d75070ab582b65fed88a156334ce9a78d62cb1f53c2e2e4e3730762dc563adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d75070ab582b65fed88a156334ce9a78d62cb1f53c2e2e4e3730762dc563adf->enter($__internal_2d75070ab582b65fed88a156334ce9a78d62cb1f53c2e2e4e3730762dc563adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_681d226ba537fe046f57abf60d2abbac7f950dcaca4508702bee870324715e3b->leave($__internal_681d226ba537fe046f57abf60d2abbac7f950dcaca4508702bee870324715e3b_prof);

        
        $__internal_2d75070ab582b65fed88a156334ce9a78d62cb1f53c2e2e4e3730762dc563adf->leave($__internal_2d75070ab582b65fed88a156334ce9a78d62cb1f53c2e2e4e3730762dc563adf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
