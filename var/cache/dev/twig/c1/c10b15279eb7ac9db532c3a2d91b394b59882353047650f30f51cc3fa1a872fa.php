<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_77f90ebbc7ac3e13861c949cc2e371e6ec68c9d6a38ed761467f9c967fe59c54 extends Twig_Template
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
        $__internal_8eddb88796d9d0bf2edd2a226d0bd183f9953fdb43e9d32d10e549b49c104307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eddb88796d9d0bf2edd2a226d0bd183f9953fdb43e9d32d10e549b49c104307->enter($__internal_8eddb88796d9d0bf2edd2a226d0bd183f9953fdb43e9d32d10e549b49c104307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2fe8e5f19cfa5d4af695e31aea4c68714b9e336f8fe795d1e9a5e8eb577daa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe8e5f19cfa5d4af695e31aea4c68714b9e336f8fe795d1e9a5e8eb577daa16->enter($__internal_2fe8e5f19cfa5d4af695e31aea4c68714b9e336f8fe795d1e9a5e8eb577daa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8eddb88796d9d0bf2edd2a226d0bd183f9953fdb43e9d32d10e549b49c104307->leave($__internal_8eddb88796d9d0bf2edd2a226d0bd183f9953fdb43e9d32d10e549b49c104307_prof);

        
        $__internal_2fe8e5f19cfa5d4af695e31aea4c68714b9e336f8fe795d1e9a5e8eb577daa16->leave($__internal_2fe8e5f19cfa5d4af695e31aea4c68714b9e336f8fe795d1e9a5e8eb577daa16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
