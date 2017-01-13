<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6bea9b422cd1761d7dd0dc76b87aa1c906dd67228accc9240dcc86f8f0c7f94c extends Twig_Template
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
        $__internal_b126fb60fdbaa108aade6cfc74cb8fda9005c4f804643209867694ed94b25a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b126fb60fdbaa108aade6cfc74cb8fda9005c4f804643209867694ed94b25a30->enter($__internal_b126fb60fdbaa108aade6cfc74cb8fda9005c4f804643209867694ed94b25a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4c4dfc3a646fa348abd800f1c88d722de02804e13f540947a37399526f896038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4dfc3a646fa348abd800f1c88d722de02804e13f540947a37399526f896038->enter($__internal_4c4dfc3a646fa348abd800f1c88d722de02804e13f540947a37399526f896038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b126fb60fdbaa108aade6cfc74cb8fda9005c4f804643209867694ed94b25a30->leave($__internal_b126fb60fdbaa108aade6cfc74cb8fda9005c4f804643209867694ed94b25a30_prof);

        
        $__internal_4c4dfc3a646fa348abd800f1c88d722de02804e13f540947a37399526f896038->leave($__internal_4c4dfc3a646fa348abd800f1c88d722de02804e13f540947a37399526f896038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
