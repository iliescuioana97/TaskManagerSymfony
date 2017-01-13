<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8eb65845860bc8830d648d18fd8d74bbb2396ff085b9adcd3ab855f437b3cdd extends Twig_Template
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
        $__internal_14a5e7da0f95c9e1babe4b8fc16d991ce3b89174057d481aa2259097ebdb74d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a5e7da0f95c9e1babe4b8fc16d991ce3b89174057d481aa2259097ebdb74d1->enter($__internal_14a5e7da0f95c9e1babe4b8fc16d991ce3b89174057d481aa2259097ebdb74d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f7bd076e7ef4cf469c8e374a4f80a5da5f7af4c5273282c077ab631c3084e75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bd076e7ef4cf469c8e374a4f80a5da5f7af4c5273282c077ab631c3084e75c->enter($__internal_f7bd076e7ef4cf469c8e374a4f80a5da5f7af4c5273282c077ab631c3084e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14a5e7da0f95c9e1babe4b8fc16d991ce3b89174057d481aa2259097ebdb74d1->leave($__internal_14a5e7da0f95c9e1babe4b8fc16d991ce3b89174057d481aa2259097ebdb74d1_prof);

        
        $__internal_f7bd076e7ef4cf469c8e374a4f80a5da5f7af4c5273282c077ab631c3084e75c->leave($__internal_f7bd076e7ef4cf469c8e374a4f80a5da5f7af4c5273282c077ab631c3084e75c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
