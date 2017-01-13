<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_70abae97f9c5b89625f51200af04e47c73cc2b8869aa018a8c91182a411eccff extends Twig_Template
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
        $__internal_ba605d1254cddd79940621977b2cc41e2fe60d82ee38b40f4f19a5cfea65f9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba605d1254cddd79940621977b2cc41e2fe60d82ee38b40f4f19a5cfea65f9b7->enter($__internal_ba605d1254cddd79940621977b2cc41e2fe60d82ee38b40f4f19a5cfea65f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d98c0de1e051f5833968b2f94147e2df9387161603c9807b504b2461573db6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98c0de1e051f5833968b2f94147e2df9387161603c9807b504b2461573db6ab->enter($__internal_d98c0de1e051f5833968b2f94147e2df9387161603c9807b504b2461573db6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ba605d1254cddd79940621977b2cc41e2fe60d82ee38b40f4f19a5cfea65f9b7->leave($__internal_ba605d1254cddd79940621977b2cc41e2fe60d82ee38b40f4f19a5cfea65f9b7_prof);

        
        $__internal_d98c0de1e051f5833968b2f94147e2df9387161603c9807b504b2461573db6ab->leave($__internal_d98c0de1e051f5833968b2f94147e2df9387161603c9807b504b2461573db6ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
