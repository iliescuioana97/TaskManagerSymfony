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
        $__internal_5f7145d4787eed8fcbdc1dcc6e88b10498961af460357ffd6b6b18b7f064f17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7145d4787eed8fcbdc1dcc6e88b10498961af460357ffd6b6b18b7f064f17d->enter($__internal_5f7145d4787eed8fcbdc1dcc6e88b10498961af460357ffd6b6b18b7f064f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d37d260bbfadab8e16231ce08f59aa853338798b78f330e7a9a86ca3c564f5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37d260bbfadab8e16231ce08f59aa853338798b78f330e7a9a86ca3c564f5d1->enter($__internal_d37d260bbfadab8e16231ce08f59aa853338798b78f330e7a9a86ca3c564f5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5f7145d4787eed8fcbdc1dcc6e88b10498961af460357ffd6b6b18b7f064f17d->leave($__internal_5f7145d4787eed8fcbdc1dcc6e88b10498961af460357ffd6b6b18b7f064f17d_prof);

        
        $__internal_d37d260bbfadab8e16231ce08f59aa853338798b78f330e7a9a86ca3c564f5d1->leave($__internal_d37d260bbfadab8e16231ce08f59aa853338798b78f330e7a9a86ca3c564f5d1_prof);

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
