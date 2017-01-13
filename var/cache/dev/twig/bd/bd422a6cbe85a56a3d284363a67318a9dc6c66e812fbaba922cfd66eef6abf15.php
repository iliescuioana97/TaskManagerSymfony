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
        $__internal_f4393ec8b9f29def01149c847691246a3a0a2455efec5ee74fae0d9a7dac5fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4393ec8b9f29def01149c847691246a3a0a2455efec5ee74fae0d9a7dac5fbb->enter($__internal_f4393ec8b9f29def01149c847691246a3a0a2455efec5ee74fae0d9a7dac5fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6a5521e13a878ca47bb79d015756ded35f91ba3c3461275d9b44d46fb49a106d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5521e13a878ca47bb79d015756ded35f91ba3c3461275d9b44d46fb49a106d->enter($__internal_6a5521e13a878ca47bb79d015756ded35f91ba3c3461275d9b44d46fb49a106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f4393ec8b9f29def01149c847691246a3a0a2455efec5ee74fae0d9a7dac5fbb->leave($__internal_f4393ec8b9f29def01149c847691246a3a0a2455efec5ee74fae0d9a7dac5fbb_prof);

        
        $__internal_6a5521e13a878ca47bb79d015756ded35f91ba3c3461275d9b44d46fb49a106d->leave($__internal_6a5521e13a878ca47bb79d015756ded35f91ba3c3461275d9b44d46fb49a106d_prof);

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
