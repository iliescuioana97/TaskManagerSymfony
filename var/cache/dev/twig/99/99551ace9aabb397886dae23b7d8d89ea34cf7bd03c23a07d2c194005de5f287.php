<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f3b63d8f2e7891c633303307034311480e45d9f1e00f2a708c8b8a81e5bfc67f extends Twig_Template
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
        $__internal_e8f0e8a44f97d773bdd93e2dbc763562d28b504e92818320f48d9179ac6e25df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f0e8a44f97d773bdd93e2dbc763562d28b504e92818320f48d9179ac6e25df->enter($__internal_e8f0e8a44f97d773bdd93e2dbc763562d28b504e92818320f48d9179ac6e25df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_51a53850d7503a7a54be91ba5d36652a87f08a6fe1748aa6ff3a58b1bd553a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a53850d7503a7a54be91ba5d36652a87f08a6fe1748aa6ff3a58b1bd553a74->enter($__internal_51a53850d7503a7a54be91ba5d36652a87f08a6fe1748aa6ff3a58b1bd553a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e8f0e8a44f97d773bdd93e2dbc763562d28b504e92818320f48d9179ac6e25df->leave($__internal_e8f0e8a44f97d773bdd93e2dbc763562d28b504e92818320f48d9179ac6e25df_prof);

        
        $__internal_51a53850d7503a7a54be91ba5d36652a87f08a6fe1748aa6ff3a58b1bd553a74->leave($__internal_51a53850d7503a7a54be91ba5d36652a87f08a6fe1748aa6ff3a58b1bd553a74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
