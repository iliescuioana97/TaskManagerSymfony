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
        $__internal_1bc26223cfc3346c97bc3afed8080ac5d755e53afd58de3a1d76389804e0071c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc26223cfc3346c97bc3afed8080ac5d755e53afd58de3a1d76389804e0071c->enter($__internal_1bc26223cfc3346c97bc3afed8080ac5d755e53afd58de3a1d76389804e0071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_43f2e8f3fde46aefd020da1964892c404c92074e5b81c5f010d794815e5afc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f2e8f3fde46aefd020da1964892c404c92074e5b81c5f010d794815e5afc5c->enter($__internal_43f2e8f3fde46aefd020da1964892c404c92074e5b81c5f010d794815e5afc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1bc26223cfc3346c97bc3afed8080ac5d755e53afd58de3a1d76389804e0071c->leave($__internal_1bc26223cfc3346c97bc3afed8080ac5d755e53afd58de3a1d76389804e0071c_prof);

        
        $__internal_43f2e8f3fde46aefd020da1964892c404c92074e5b81c5f010d794815e5afc5c->leave($__internal_43f2e8f3fde46aefd020da1964892c404c92074e5b81c5f010d794815e5afc5c_prof);

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
