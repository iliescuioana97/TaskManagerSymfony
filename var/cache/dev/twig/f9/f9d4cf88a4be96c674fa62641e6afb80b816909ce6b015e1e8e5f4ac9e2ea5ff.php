<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_31a8901ddd1da12d438a47b7486eb009c1b101366aa7bd32f61150560289c24d extends Twig_Template
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
        $__internal_ae86c6f4211de675d2b8dfe875117364cc7b6f3a6097721afe8938e1b155ce92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae86c6f4211de675d2b8dfe875117364cc7b6f3a6097721afe8938e1b155ce92->enter($__internal_ae86c6f4211de675d2b8dfe875117364cc7b6f3a6097721afe8938e1b155ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f93127274e66b09d589206296c71d56616305655d6669dbd9c266aceb3b1dab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93127274e66b09d589206296c71d56616305655d6669dbd9c266aceb3b1dab7->enter($__internal_f93127274e66b09d589206296c71d56616305655d6669dbd9c266aceb3b1dab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ae86c6f4211de675d2b8dfe875117364cc7b6f3a6097721afe8938e1b155ce92->leave($__internal_ae86c6f4211de675d2b8dfe875117364cc7b6f3a6097721afe8938e1b155ce92_prof);

        
        $__internal_f93127274e66b09d589206296c71d56616305655d6669dbd9c266aceb3b1dab7->leave($__internal_f93127274e66b09d589206296c71d56616305655d6669dbd9c266aceb3b1dab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
