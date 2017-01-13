<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_662f216be6ad57e0d66ccb6449d14df09449d6f619c4ce8a7906a63872e2a91f extends Twig_Template
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
        $__internal_2025a039b31df10a26399b9d5fd43c030c94640a86be2f4f74d44d67ef441d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2025a039b31df10a26399b9d5fd43c030c94640a86be2f4f74d44d67ef441d5a->enter($__internal_2025a039b31df10a26399b9d5fd43c030c94640a86be2f4f74d44d67ef441d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f8d22e1fb57e4c99535cae82d7dda2048d19201a9eadf290dd9269f82e0f3162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d22e1fb57e4c99535cae82d7dda2048d19201a9eadf290dd9269f82e0f3162->enter($__internal_f8d22e1fb57e4c99535cae82d7dda2048d19201a9eadf290dd9269f82e0f3162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2025a039b31df10a26399b9d5fd43c030c94640a86be2f4f74d44d67ef441d5a->leave($__internal_2025a039b31df10a26399b9d5fd43c030c94640a86be2f4f74d44d67ef441d5a_prof);

        
        $__internal_f8d22e1fb57e4c99535cae82d7dda2048d19201a9eadf290dd9269f82e0f3162->leave($__internal_f8d22e1fb57e4c99535cae82d7dda2048d19201a9eadf290dd9269f82e0f3162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
