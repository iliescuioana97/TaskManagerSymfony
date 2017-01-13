<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a444b7252710065b088acbe133bcab9cb546151e79468a5b37c333e98a8af727 extends Twig_Template
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
        $__internal_9b3a8355e4fd04de695e72c2170190ccbc0f52101018e9b1642f008fe53d31db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3a8355e4fd04de695e72c2170190ccbc0f52101018e9b1642f008fe53d31db->enter($__internal_9b3a8355e4fd04de695e72c2170190ccbc0f52101018e9b1642f008fe53d31db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_24629b4a43f13e338df7c7449b17319b40dcea01f877d9b3a8e40204de75aa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24629b4a43f13e338df7c7449b17319b40dcea01f877d9b3a8e40204de75aa86->enter($__internal_24629b4a43f13e338df7c7449b17319b40dcea01f877d9b3a8e40204de75aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9b3a8355e4fd04de695e72c2170190ccbc0f52101018e9b1642f008fe53d31db->leave($__internal_9b3a8355e4fd04de695e72c2170190ccbc0f52101018e9b1642f008fe53d31db_prof);

        
        $__internal_24629b4a43f13e338df7c7449b17319b40dcea01f877d9b3a8e40204de75aa86->leave($__internal_24629b4a43f13e338df7c7449b17319b40dcea01f877d9b3a8e40204de75aa86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
