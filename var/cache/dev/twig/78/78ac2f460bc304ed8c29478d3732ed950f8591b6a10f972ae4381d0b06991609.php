<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4ce429402a49b8ce0a116b4c1bb1f8fe579cbdd8dddf9b849c43c841427e005a extends Twig_Template
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
        $__internal_657982779f05ecbe9300c212014d53d97321c9ca39e7dd8ddb1b417ac056c8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657982779f05ecbe9300c212014d53d97321c9ca39e7dd8ddb1b417ac056c8a6->enter($__internal_657982779f05ecbe9300c212014d53d97321c9ca39e7dd8ddb1b417ac056c8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_04cf142f14a5ff161d06ecc956492e422fb627be3478e6d15b9d4531fd900564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cf142f14a5ff161d06ecc956492e422fb627be3478e6d15b9d4531fd900564->enter($__internal_04cf142f14a5ff161d06ecc956492e422fb627be3478e6d15b9d4531fd900564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_657982779f05ecbe9300c212014d53d97321c9ca39e7dd8ddb1b417ac056c8a6->leave($__internal_657982779f05ecbe9300c212014d53d97321c9ca39e7dd8ddb1b417ac056c8a6_prof);

        
        $__internal_04cf142f14a5ff161d06ecc956492e422fb627be3478e6d15b9d4531fd900564->leave($__internal_04cf142f14a5ff161d06ecc956492e422fb627be3478e6d15b9d4531fd900564_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
