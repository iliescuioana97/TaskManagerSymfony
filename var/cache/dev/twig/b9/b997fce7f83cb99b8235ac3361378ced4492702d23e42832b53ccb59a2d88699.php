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
        $__internal_7e9669e6fa76980ae6077123c35817e34ba1705982850d7748afe6a8fe0f8f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9669e6fa76980ae6077123c35817e34ba1705982850d7748afe6a8fe0f8f84->enter($__internal_7e9669e6fa76980ae6077123c35817e34ba1705982850d7748afe6a8fe0f8f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9f30c595bc4e2f2e8a2f4a00ccb8275cbd7f84941fa3802cf668c0d0f0be19c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f30c595bc4e2f2e8a2f4a00ccb8275cbd7f84941fa3802cf668c0d0f0be19c7->enter($__internal_9f30c595bc4e2f2e8a2f4a00ccb8275cbd7f84941fa3802cf668c0d0f0be19c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7e9669e6fa76980ae6077123c35817e34ba1705982850d7748afe6a8fe0f8f84->leave($__internal_7e9669e6fa76980ae6077123c35817e34ba1705982850d7748afe6a8fe0f8f84_prof);

        
        $__internal_9f30c595bc4e2f2e8a2f4a00ccb8275cbd7f84941fa3802cf668c0d0f0be19c7->leave($__internal_9f30c595bc4e2f2e8a2f4a00ccb8275cbd7f84941fa3802cf668c0d0f0be19c7_prof);

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
