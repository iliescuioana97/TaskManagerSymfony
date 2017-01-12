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
        $__internal_b57769b24bd5ba99e8bb1e78645ef8cba8988cfadebc31d71546b764a807dd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57769b24bd5ba99e8bb1e78645ef8cba8988cfadebc31d71546b764a807dd3a->enter($__internal_b57769b24bd5ba99e8bb1e78645ef8cba8988cfadebc31d71546b764a807dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f4472a6635aba74bdd6931ca57bd98ae150319911bf421d2a5c32316967072aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4472a6635aba74bdd6931ca57bd98ae150319911bf421d2a5c32316967072aa->enter($__internal_f4472a6635aba74bdd6931ca57bd98ae150319911bf421d2a5c32316967072aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b57769b24bd5ba99e8bb1e78645ef8cba8988cfadebc31d71546b764a807dd3a->leave($__internal_b57769b24bd5ba99e8bb1e78645ef8cba8988cfadebc31d71546b764a807dd3a_prof);

        
        $__internal_f4472a6635aba74bdd6931ca57bd98ae150319911bf421d2a5c32316967072aa->leave($__internal_f4472a6635aba74bdd6931ca57bd98ae150319911bf421d2a5c32316967072aa_prof);

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
