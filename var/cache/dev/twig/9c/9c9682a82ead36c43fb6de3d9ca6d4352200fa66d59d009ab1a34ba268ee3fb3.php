<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8eb65845860bc8830d648d18fd8d74bbb2396ff085b9adcd3ab855f437b3cdd extends Twig_Template
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
        $__internal_76c20a953f7ca484010676146e2842ea2a1432a276a8e088c2a72d64a1b04c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c20a953f7ca484010676146e2842ea2a1432a276a8e088c2a72d64a1b04c70->enter($__internal_76c20a953f7ca484010676146e2842ea2a1432a276a8e088c2a72d64a1b04c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_958d45edb61911c760abf0d20a5fd2fdb270f792cfb5ab5cbe5d3694841206dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958d45edb61911c760abf0d20a5fd2fdb270f792cfb5ab5cbe5d3694841206dc->enter($__internal_958d45edb61911c760abf0d20a5fd2fdb270f792cfb5ab5cbe5d3694841206dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_76c20a953f7ca484010676146e2842ea2a1432a276a8e088c2a72d64a1b04c70->leave($__internal_76c20a953f7ca484010676146e2842ea2a1432a276a8e088c2a72d64a1b04c70_prof);

        
        $__internal_958d45edb61911c760abf0d20a5fd2fdb270f792cfb5ab5cbe5d3694841206dc->leave($__internal_958d45edb61911c760abf0d20a5fd2fdb270f792cfb5ab5cbe5d3694841206dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
