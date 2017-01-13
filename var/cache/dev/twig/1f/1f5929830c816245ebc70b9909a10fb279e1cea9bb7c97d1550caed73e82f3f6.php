<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1082f0cb19beb316f4a9b28718360a8718a64e4045246eded758f17321d4b8a3 extends Twig_Template
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
        $__internal_36825a5b1e8827391a312e71b5942852cb9c08b7c9f683212df787aa29b29222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36825a5b1e8827391a312e71b5942852cb9c08b7c9f683212df787aa29b29222->enter($__internal_36825a5b1e8827391a312e71b5942852cb9c08b7c9f683212df787aa29b29222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3e8f41aa6c19a0b2768e65023936a9f5fa013602cd81419c774f9ee34b222467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8f41aa6c19a0b2768e65023936a9f5fa013602cd81419c774f9ee34b222467->enter($__internal_3e8f41aa6c19a0b2768e65023936a9f5fa013602cd81419c774f9ee34b222467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_36825a5b1e8827391a312e71b5942852cb9c08b7c9f683212df787aa29b29222->leave($__internal_36825a5b1e8827391a312e71b5942852cb9c08b7c9f683212df787aa29b29222_prof);

        
        $__internal_3e8f41aa6c19a0b2768e65023936a9f5fa013602cd81419c774f9ee34b222467->leave($__internal_3e8f41aa6c19a0b2768e65023936a9f5fa013602cd81419c774f9ee34b222467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
