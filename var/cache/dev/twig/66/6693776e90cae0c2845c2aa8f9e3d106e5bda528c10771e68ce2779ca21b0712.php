<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b357c6f4c7eec73f9f689c20884a1414a83afa0f188bc4998605db447d2f2155 extends Twig_Template
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
        $__internal_9eb36494b39ebc7f16575657f1fb20365d0b28b08225a7ff72aa4a774498c35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb36494b39ebc7f16575657f1fb20365d0b28b08225a7ff72aa4a774498c35a->enter($__internal_9eb36494b39ebc7f16575657f1fb20365d0b28b08225a7ff72aa4a774498c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f674b85d836a2c455de1fec22271967f79a727846952ef4042abe18bb2eaa295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f674b85d836a2c455de1fec22271967f79a727846952ef4042abe18bb2eaa295->enter($__internal_f674b85d836a2c455de1fec22271967f79a727846952ef4042abe18bb2eaa295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9eb36494b39ebc7f16575657f1fb20365d0b28b08225a7ff72aa4a774498c35a->leave($__internal_9eb36494b39ebc7f16575657f1fb20365d0b28b08225a7ff72aa4a774498c35a_prof);

        
        $__internal_f674b85d836a2c455de1fec22271967f79a727846952ef4042abe18bb2eaa295->leave($__internal_f674b85d836a2c455de1fec22271967f79a727846952ef4042abe18bb2eaa295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
