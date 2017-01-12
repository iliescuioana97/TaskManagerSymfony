<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_92fa631a79e458b498f1ab0d705b05b334cd3f566e69b7f79fa67afa3c5e321a extends Twig_Template
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
        $__internal_4ebc155e5eba9703f0fcf7ff7dd9b285d8d35a2ba07a8e65e9274deb0210cf88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebc155e5eba9703f0fcf7ff7dd9b285d8d35a2ba07a8e65e9274deb0210cf88->enter($__internal_4ebc155e5eba9703f0fcf7ff7dd9b285d8d35a2ba07a8e65e9274deb0210cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6e232d406ee57dbd2d888a2415006ea9974e29ea29372d66fbd9752b6b80e9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e232d406ee57dbd2d888a2415006ea9974e29ea29372d66fbd9752b6b80e9ae->enter($__internal_6e232d406ee57dbd2d888a2415006ea9974e29ea29372d66fbd9752b6b80e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4ebc155e5eba9703f0fcf7ff7dd9b285d8d35a2ba07a8e65e9274deb0210cf88->leave($__internal_4ebc155e5eba9703f0fcf7ff7dd9b285d8d35a2ba07a8e65e9274deb0210cf88_prof);

        
        $__internal_6e232d406ee57dbd2d888a2415006ea9974e29ea29372d66fbd9752b6b80e9ae->leave($__internal_6e232d406ee57dbd2d888a2415006ea9974e29ea29372d66fbd9752b6b80e9ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
