<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_42948e7b0e813a86b72257bfabceeb8c03e6c5fb8e01e1b5ae88fca919c3f975 extends Twig_Template
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
        $__internal_40cfb1d590816e271f59509e47667188be42f72e998290f0543c2cc8d40ec2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cfb1d590816e271f59509e47667188be42f72e998290f0543c2cc8d40ec2ae->enter($__internal_40cfb1d590816e271f59509e47667188be42f72e998290f0543c2cc8d40ec2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e00c196c503eddfeeb85b3767fd3be26b6bb2aae3c5a558cf7dcbcaaead180fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00c196c503eddfeeb85b3767fd3be26b6bb2aae3c5a558cf7dcbcaaead180fc->enter($__internal_e00c196c503eddfeeb85b3767fd3be26b6bb2aae3c5a558cf7dcbcaaead180fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_40cfb1d590816e271f59509e47667188be42f72e998290f0543c2cc8d40ec2ae->leave($__internal_40cfb1d590816e271f59509e47667188be42f72e998290f0543c2cc8d40ec2ae_prof);

        
        $__internal_e00c196c503eddfeeb85b3767fd3be26b6bb2aae3c5a558cf7dcbcaaead180fc->leave($__internal_e00c196c503eddfeeb85b3767fd3be26b6bb2aae3c5a558cf7dcbcaaead180fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
