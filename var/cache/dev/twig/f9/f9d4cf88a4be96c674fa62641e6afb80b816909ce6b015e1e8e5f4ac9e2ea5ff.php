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
        $__internal_b0ef9da4ca63fd5f459840e37801f60976269b618d2133421128e8eed7e143be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ef9da4ca63fd5f459840e37801f60976269b618d2133421128e8eed7e143be->enter($__internal_b0ef9da4ca63fd5f459840e37801f60976269b618d2133421128e8eed7e143be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_281ccd40b2f4d137d568e1ed267da435cda7308da276ab9745580e76917c81c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ccd40b2f4d137d568e1ed267da435cda7308da276ab9745580e76917c81c3->enter($__internal_281ccd40b2f4d137d568e1ed267da435cda7308da276ab9745580e76917c81c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b0ef9da4ca63fd5f459840e37801f60976269b618d2133421128e8eed7e143be->leave($__internal_b0ef9da4ca63fd5f459840e37801f60976269b618d2133421128e8eed7e143be_prof);

        
        $__internal_281ccd40b2f4d137d568e1ed267da435cda7308da276ab9745580e76917c81c3->leave($__internal_281ccd40b2f4d137d568e1ed267da435cda7308da276ab9745580e76917c81c3_prof);

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
