<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_26df2c96ac473e24b1c1d4c8aba32043d678bb278e77585d826aa49809fce25a extends Twig_Template
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
        $__internal_a358a22a1946891c15d88e62781b1ac2085445e678d718a3cf2cc94949c61523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358a22a1946891c15d88e62781b1ac2085445e678d718a3cf2cc94949c61523->enter($__internal_a358a22a1946891c15d88e62781b1ac2085445e678d718a3cf2cc94949c61523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6ec7ba1e757ab6c4f28c2bab89146169ddbb27caa6bcb7a473e079456b75470d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec7ba1e757ab6c4f28c2bab89146169ddbb27caa6bcb7a473e079456b75470d->enter($__internal_6ec7ba1e757ab6c4f28c2bab89146169ddbb27caa6bcb7a473e079456b75470d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a358a22a1946891c15d88e62781b1ac2085445e678d718a3cf2cc94949c61523->leave($__internal_a358a22a1946891c15d88e62781b1ac2085445e678d718a3cf2cc94949c61523_prof);

        
        $__internal_6ec7ba1e757ab6c4f28c2bab89146169ddbb27caa6bcb7a473e079456b75470d->leave($__internal_6ec7ba1e757ab6c4f28c2bab89146169ddbb27caa6bcb7a473e079456b75470d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
