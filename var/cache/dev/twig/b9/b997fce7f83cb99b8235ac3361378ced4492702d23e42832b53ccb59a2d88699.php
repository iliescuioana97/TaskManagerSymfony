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
        $__internal_caea35aef3b89684a7fb943f62ef6eca4177f4ff7732b028c5c7b2a8452e0ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caea35aef3b89684a7fb943f62ef6eca4177f4ff7732b028c5c7b2a8452e0ba4->enter($__internal_caea35aef3b89684a7fb943f62ef6eca4177f4ff7732b028c5c7b2a8452e0ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_efb3f512300f92cdc44413ff8655a011228e043f72d40692dba2b2f2ab9f1544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb3f512300f92cdc44413ff8655a011228e043f72d40692dba2b2f2ab9f1544->enter($__internal_efb3f512300f92cdc44413ff8655a011228e043f72d40692dba2b2f2ab9f1544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_caea35aef3b89684a7fb943f62ef6eca4177f4ff7732b028c5c7b2a8452e0ba4->leave($__internal_caea35aef3b89684a7fb943f62ef6eca4177f4ff7732b028c5c7b2a8452e0ba4_prof);

        
        $__internal_efb3f512300f92cdc44413ff8655a011228e043f72d40692dba2b2f2ab9f1544->leave($__internal_efb3f512300f92cdc44413ff8655a011228e043f72d40692dba2b2f2ab9f1544_prof);

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
