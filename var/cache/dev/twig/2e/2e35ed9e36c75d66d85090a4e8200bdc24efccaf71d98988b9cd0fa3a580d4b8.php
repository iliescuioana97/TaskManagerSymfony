<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d029a9888f685d4e33044ada95e1b1cc783422ac6f7fe49bfcd2555702a8552 extends Twig_Template
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
        $__internal_1da12ddeb7006ce8778cd26b238fa1219c53630ebd3ffcdfdc90a8ecab121f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da12ddeb7006ce8778cd26b238fa1219c53630ebd3ffcdfdc90a8ecab121f42->enter($__internal_1da12ddeb7006ce8778cd26b238fa1219c53630ebd3ffcdfdc90a8ecab121f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1ec4853228c1a7fdee5ddfddf8d1608b36b4db0e0d2a957654ee16b132c1c925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec4853228c1a7fdee5ddfddf8d1608b36b4db0e0d2a957654ee16b132c1c925->enter($__internal_1ec4853228c1a7fdee5ddfddf8d1608b36b4db0e0d2a957654ee16b132c1c925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1da12ddeb7006ce8778cd26b238fa1219c53630ebd3ffcdfdc90a8ecab121f42->leave($__internal_1da12ddeb7006ce8778cd26b238fa1219c53630ebd3ffcdfdc90a8ecab121f42_prof);

        
        $__internal_1ec4853228c1a7fdee5ddfddf8d1608b36b4db0e0d2a957654ee16b132c1c925->leave($__internal_1ec4853228c1a7fdee5ddfddf8d1608b36b4db0e0d2a957654ee16b132c1c925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
