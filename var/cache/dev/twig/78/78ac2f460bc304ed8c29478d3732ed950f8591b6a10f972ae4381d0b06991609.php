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
        $__internal_751d5c8a40814c720ce5a9ce84b8e7440ff342a212dc3628f2a9b739441ff94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751d5c8a40814c720ce5a9ce84b8e7440ff342a212dc3628f2a9b739441ff94d->enter($__internal_751d5c8a40814c720ce5a9ce84b8e7440ff342a212dc3628f2a9b739441ff94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9593edc4ef5c2a24be0aea5105e2e5cad1b36258aeeef39fb118df9c8cc3957f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9593edc4ef5c2a24be0aea5105e2e5cad1b36258aeeef39fb118df9c8cc3957f->enter($__internal_9593edc4ef5c2a24be0aea5105e2e5cad1b36258aeeef39fb118df9c8cc3957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_751d5c8a40814c720ce5a9ce84b8e7440ff342a212dc3628f2a9b739441ff94d->leave($__internal_751d5c8a40814c720ce5a9ce84b8e7440ff342a212dc3628f2a9b739441ff94d_prof);

        
        $__internal_9593edc4ef5c2a24be0aea5105e2e5cad1b36258aeeef39fb118df9c8cc3957f->leave($__internal_9593edc4ef5c2a24be0aea5105e2e5cad1b36258aeeef39fb118df9c8cc3957f_prof);

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
