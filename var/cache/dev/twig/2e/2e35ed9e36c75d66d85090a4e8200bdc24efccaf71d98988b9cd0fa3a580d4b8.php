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
        $__internal_4792ac6465f0f1bd3de36870dd339b767bf616c42139fb887532003bb14cd68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4792ac6465f0f1bd3de36870dd339b767bf616c42139fb887532003bb14cd68e->enter($__internal_4792ac6465f0f1bd3de36870dd339b767bf616c42139fb887532003bb14cd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b6a4129cf128c8ca347e128c650fa87de2280253586bb3e5fab87e5272d74b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a4129cf128c8ca347e128c650fa87de2280253586bb3e5fab87e5272d74b7e->enter($__internal_b6a4129cf128c8ca347e128c650fa87de2280253586bb3e5fab87e5272d74b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4792ac6465f0f1bd3de36870dd339b767bf616c42139fb887532003bb14cd68e->leave($__internal_4792ac6465f0f1bd3de36870dd339b767bf616c42139fb887532003bb14cd68e_prof);

        
        $__internal_b6a4129cf128c8ca347e128c650fa87de2280253586bb3e5fab87e5272d74b7e->leave($__internal_b6a4129cf128c8ca347e128c650fa87de2280253586bb3e5fab87e5272d74b7e_prof);

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
