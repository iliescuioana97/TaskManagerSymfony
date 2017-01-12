<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1f1d368221b32b3321b5c84777abcb928c4dc0bbc3ac9343c697f9ff35830af8 extends Twig_Template
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
        $__internal_dd2456f86a1b727c1e2ba9942606550e03e44c65e7677c9f6e08563bf4b6cb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2456f86a1b727c1e2ba9942606550e03e44c65e7677c9f6e08563bf4b6cb29->enter($__internal_dd2456f86a1b727c1e2ba9942606550e03e44c65e7677c9f6e08563bf4b6cb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2917315d2c427ee4f2a11c9db1603e783af8b173d7c2ace38cde0c9e524b468a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2917315d2c427ee4f2a11c9db1603e783af8b173d7c2ace38cde0c9e524b468a->enter($__internal_2917315d2c427ee4f2a11c9db1603e783af8b173d7c2ace38cde0c9e524b468a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dd2456f86a1b727c1e2ba9942606550e03e44c65e7677c9f6e08563bf4b6cb29->leave($__internal_dd2456f86a1b727c1e2ba9942606550e03e44c65e7677c9f6e08563bf4b6cb29_prof);

        
        $__internal_2917315d2c427ee4f2a11c9db1603e783af8b173d7c2ace38cde0c9e524b468a->leave($__internal_2917315d2c427ee4f2a11c9db1603e783af8b173d7c2ace38cde0c9e524b468a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
