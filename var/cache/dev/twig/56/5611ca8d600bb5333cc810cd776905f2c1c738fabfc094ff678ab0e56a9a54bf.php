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
        $__internal_3ecf4fdf7b8e03c175bbf9b6f5632db8d4b4a576c64a33b13135894bb195932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecf4fdf7b8e03c175bbf9b6f5632db8d4b4a576c64a33b13135894bb195932e->enter($__internal_3ecf4fdf7b8e03c175bbf9b6f5632db8d4b4a576c64a33b13135894bb195932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ff612df611f20fa6994fdc68d732917e8af64026ab7185e166ee0c035919595e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff612df611f20fa6994fdc68d732917e8af64026ab7185e166ee0c035919595e->enter($__internal_ff612df611f20fa6994fdc68d732917e8af64026ab7185e166ee0c035919595e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3ecf4fdf7b8e03c175bbf9b6f5632db8d4b4a576c64a33b13135894bb195932e->leave($__internal_3ecf4fdf7b8e03c175bbf9b6f5632db8d4b4a576c64a33b13135894bb195932e_prof);

        
        $__internal_ff612df611f20fa6994fdc68d732917e8af64026ab7185e166ee0c035919595e->leave($__internal_ff612df611f20fa6994fdc68d732917e8af64026ab7185e166ee0c035919595e_prof);

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
