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
        $__internal_11cc91f4c6501be0aecd1f26320b6a54fb19b71d99ba734ba2a3463a00769e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cc91f4c6501be0aecd1f26320b6a54fb19b71d99ba734ba2a3463a00769e0a->enter($__internal_11cc91f4c6501be0aecd1f26320b6a54fb19b71d99ba734ba2a3463a00769e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_12a4b55fba78c2380d73c80314dc2e6504ca6342fa702b90f50f8d200b66ee38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a4b55fba78c2380d73c80314dc2e6504ca6342fa702b90f50f8d200b66ee38->enter($__internal_12a4b55fba78c2380d73c80314dc2e6504ca6342fa702b90f50f8d200b66ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_11cc91f4c6501be0aecd1f26320b6a54fb19b71d99ba734ba2a3463a00769e0a->leave($__internal_11cc91f4c6501be0aecd1f26320b6a54fb19b71d99ba734ba2a3463a00769e0a_prof);

        
        $__internal_12a4b55fba78c2380d73c80314dc2e6504ca6342fa702b90f50f8d200b66ee38->leave($__internal_12a4b55fba78c2380d73c80314dc2e6504ca6342fa702b90f50f8d200b66ee38_prof);

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
