<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cb54116226c8ee0611fc03d36abaed6bb849c4e3c891dbf27a03240a04000b7c extends Twig_Template
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
        $__internal_482f44a6e721e87e2688769a7dcf3c99720c1abda01361a1dcf230fd70452746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482f44a6e721e87e2688769a7dcf3c99720c1abda01361a1dcf230fd70452746->enter($__internal_482f44a6e721e87e2688769a7dcf3c99720c1abda01361a1dcf230fd70452746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e8241b24e028e2ba60d934317975f2405257a0812d20c95c05d2885e18cee9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8241b24e028e2ba60d934317975f2405257a0812d20c95c05d2885e18cee9d9->enter($__internal_e8241b24e028e2ba60d934317975f2405257a0812d20c95c05d2885e18cee9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_482f44a6e721e87e2688769a7dcf3c99720c1abda01361a1dcf230fd70452746->leave($__internal_482f44a6e721e87e2688769a7dcf3c99720c1abda01361a1dcf230fd70452746_prof);

        
        $__internal_e8241b24e028e2ba60d934317975f2405257a0812d20c95c05d2885e18cee9d9->leave($__internal_e8241b24e028e2ba60d934317975f2405257a0812d20c95c05d2885e18cee9d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
