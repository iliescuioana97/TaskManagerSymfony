<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4ce429402a49b8ce0a116b4c1bb1f8fe579cbdd8dddf9b849c43c841427e005a extends Twig_Template
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
        $__internal_aafd836c402f8865e524196a9ea98be1574881e55750d8137d83e93efc7b066e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafd836c402f8865e524196a9ea98be1574881e55750d8137d83e93efc7b066e->enter($__internal_aafd836c402f8865e524196a9ea98be1574881e55750d8137d83e93efc7b066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_71ce73f5f8c426eb98f920ebec550d472bbb164718614155290dfd640e4489ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ce73f5f8c426eb98f920ebec550d472bbb164718614155290dfd640e4489ee->enter($__internal_71ce73f5f8c426eb98f920ebec550d472bbb164718614155290dfd640e4489ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_aafd836c402f8865e524196a9ea98be1574881e55750d8137d83e93efc7b066e->leave($__internal_aafd836c402f8865e524196a9ea98be1574881e55750d8137d83e93efc7b066e_prof);

        
        $__internal_71ce73f5f8c426eb98f920ebec550d472bbb164718614155290dfd640e4489ee->leave($__internal_71ce73f5f8c426eb98f920ebec550d472bbb164718614155290dfd640e4489ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
