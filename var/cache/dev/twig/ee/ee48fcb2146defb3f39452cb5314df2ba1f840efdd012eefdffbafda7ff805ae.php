<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_922151d2b6505459c3f477388a2bdffb6a6d4a03299f33450759f1a03b1d79a0 extends Twig_Template
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
        $__internal_85e47d81f65c4bf160acbc925c401be11f127a687594122d660198cee5998fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e47d81f65c4bf160acbc925c401be11f127a687594122d660198cee5998fc4->enter($__internal_85e47d81f65c4bf160acbc925c401be11f127a687594122d660198cee5998fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8a9766188fd7ccd29f7682f4eed2d0182ed2d4bda82bbda313afebf7a58f8067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9766188fd7ccd29f7682f4eed2d0182ed2d4bda82bbda313afebf7a58f8067->enter($__internal_8a9766188fd7ccd29f7682f4eed2d0182ed2d4bda82bbda313afebf7a58f8067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_85e47d81f65c4bf160acbc925c401be11f127a687594122d660198cee5998fc4->leave($__internal_85e47d81f65c4bf160acbc925c401be11f127a687594122d660198cee5998fc4_prof);

        
        $__internal_8a9766188fd7ccd29f7682f4eed2d0182ed2d4bda82bbda313afebf7a58f8067->leave($__internal_8a9766188fd7ccd29f7682f4eed2d0182ed2d4bda82bbda313afebf7a58f8067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
