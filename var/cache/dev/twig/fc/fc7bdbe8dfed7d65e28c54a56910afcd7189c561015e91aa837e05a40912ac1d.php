<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_47f474cc6eaf1cf3786e6f82c1be7588657974856640961ba367c01dc770dc33 extends Twig_Template
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
        $__internal_d8b152d1546eb3cf79897c3c5f5bbd0d1421d21a1f66402a222db7481759c1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b152d1546eb3cf79897c3c5f5bbd0d1421d21a1f66402a222db7481759c1fa->enter($__internal_d8b152d1546eb3cf79897c3c5f5bbd0d1421d21a1f66402a222db7481759c1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6f822eb6447d9131c0d2b8b547b10313a0fbf5d184919fa7c025fb21a8b01a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f822eb6447d9131c0d2b8b547b10313a0fbf5d184919fa7c025fb21a8b01a96->enter($__internal_6f822eb6447d9131c0d2b8b547b10313a0fbf5d184919fa7c025fb21a8b01a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d8b152d1546eb3cf79897c3c5f5bbd0d1421d21a1f66402a222db7481759c1fa->leave($__internal_d8b152d1546eb3cf79897c3c5f5bbd0d1421d21a1f66402a222db7481759c1fa_prof);

        
        $__internal_6f822eb6447d9131c0d2b8b547b10313a0fbf5d184919fa7c025fb21a8b01a96->leave($__internal_6f822eb6447d9131c0d2b8b547b10313a0fbf5d184919fa7c025fb21a8b01a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
