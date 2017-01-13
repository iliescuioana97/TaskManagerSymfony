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
        $__internal_9c4e682ff911a59838880398a30cb8259bb1c2c5b45494d977ad2e69872a7760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4e682ff911a59838880398a30cb8259bb1c2c5b45494d977ad2e69872a7760->enter($__internal_9c4e682ff911a59838880398a30cb8259bb1c2c5b45494d977ad2e69872a7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c1c6cf3d2cac9bfa9b5b2e117fe4a4c0aeadc9e1c515d7c767e7fc1fcb6d7586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c6cf3d2cac9bfa9b5b2e117fe4a4c0aeadc9e1c515d7c767e7fc1fcb6d7586->enter($__internal_c1c6cf3d2cac9bfa9b5b2e117fe4a4c0aeadc9e1c515d7c767e7fc1fcb6d7586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9c4e682ff911a59838880398a30cb8259bb1c2c5b45494d977ad2e69872a7760->leave($__internal_9c4e682ff911a59838880398a30cb8259bb1c2c5b45494d977ad2e69872a7760_prof);

        
        $__internal_c1c6cf3d2cac9bfa9b5b2e117fe4a4c0aeadc9e1c515d7c767e7fc1fcb6d7586->leave($__internal_c1c6cf3d2cac9bfa9b5b2e117fe4a4c0aeadc9e1c515d7c767e7fc1fcb6d7586_prof);

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
