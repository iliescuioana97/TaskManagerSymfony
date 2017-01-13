<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_faa7d53ddedf697274178568a2636ea3fe185f56daf30b2471c6b66f54d8825a extends Twig_Template
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
        $__internal_d66fadae5ebdc20139f249a8a7a05c029d73af0160414bfb7daf5a92574987d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66fadae5ebdc20139f249a8a7a05c029d73af0160414bfb7daf5a92574987d2->enter($__internal_d66fadae5ebdc20139f249a8a7a05c029d73af0160414bfb7daf5a92574987d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_76e3c28678b75810ebfb55b2549a62ffc9f611a4f8e2bc0adb67c666107aa752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e3c28678b75810ebfb55b2549a62ffc9f611a4f8e2bc0adb67c666107aa752->enter($__internal_76e3c28678b75810ebfb55b2549a62ffc9f611a4f8e2bc0adb67c666107aa752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d66fadae5ebdc20139f249a8a7a05c029d73af0160414bfb7daf5a92574987d2->leave($__internal_d66fadae5ebdc20139f249a8a7a05c029d73af0160414bfb7daf5a92574987d2_prof);

        
        $__internal_76e3c28678b75810ebfb55b2549a62ffc9f611a4f8e2bc0adb67c666107aa752->leave($__internal_76e3c28678b75810ebfb55b2549a62ffc9f611a4f8e2bc0adb67c666107aa752_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
