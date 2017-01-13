<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5b031680d61358d6d49e7c9f91451289018e26c8286be54e2d9738fc243718b9 extends Twig_Template
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
        $__internal_f6a194c18e27eac991428950c584a95191d6cbd71d562fe59a389ec82c1e5d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a194c18e27eac991428950c584a95191d6cbd71d562fe59a389ec82c1e5d21->enter($__internal_f6a194c18e27eac991428950c584a95191d6cbd71d562fe59a389ec82c1e5d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_649a654eff49d9b2ec5f6d5cb1c6198f4003e28c038798d817f12e3735e8cbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649a654eff49d9b2ec5f6d5cb1c6198f4003e28c038798d817f12e3735e8cbdb->enter($__internal_649a654eff49d9b2ec5f6d5cb1c6198f4003e28c038798d817f12e3735e8cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f6a194c18e27eac991428950c584a95191d6cbd71d562fe59a389ec82c1e5d21->leave($__internal_f6a194c18e27eac991428950c584a95191d6cbd71d562fe59a389ec82c1e5d21_prof);

        
        $__internal_649a654eff49d9b2ec5f6d5cb1c6198f4003e28c038798d817f12e3735e8cbdb->leave($__internal_649a654eff49d9b2ec5f6d5cb1c6198f4003e28c038798d817f12e3735e8cbdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
