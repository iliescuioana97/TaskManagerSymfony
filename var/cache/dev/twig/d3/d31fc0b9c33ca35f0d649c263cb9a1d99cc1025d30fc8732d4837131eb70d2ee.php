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
        $__internal_255117276335a4db310da5d5785eb549d161394f9b90740d7316abbf92de68fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255117276335a4db310da5d5785eb549d161394f9b90740d7316abbf92de68fe->enter($__internal_255117276335a4db310da5d5785eb549d161394f9b90740d7316abbf92de68fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1c1fd3a4d8936ceb6fb1ec667bd81257b8bcd1eefd0def1ef740424255fe0bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1fd3a4d8936ceb6fb1ec667bd81257b8bcd1eefd0def1ef740424255fe0bf5->enter($__internal_1c1fd3a4d8936ceb6fb1ec667bd81257b8bcd1eefd0def1ef740424255fe0bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_255117276335a4db310da5d5785eb549d161394f9b90740d7316abbf92de68fe->leave($__internal_255117276335a4db310da5d5785eb549d161394f9b90740d7316abbf92de68fe_prof);

        
        $__internal_1c1fd3a4d8936ceb6fb1ec667bd81257b8bcd1eefd0def1ef740424255fe0bf5->leave($__internal_1c1fd3a4d8936ceb6fb1ec667bd81257b8bcd1eefd0def1ef740424255fe0bf5_prof);

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
