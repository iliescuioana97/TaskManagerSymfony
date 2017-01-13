<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ed2a3fe5587b457342c08d3e9e13f1f56380bbe4a429d92a235695c521edd9b9 extends Twig_Template
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
        $__internal_a10a4bf0105debb7989fa41489877c6a46115a2a6b5e95642c9ab31abe196e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10a4bf0105debb7989fa41489877c6a46115a2a6b5e95642c9ab31abe196e68->enter($__internal_a10a4bf0105debb7989fa41489877c6a46115a2a6b5e95642c9ab31abe196e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f391b95ae60b22ac3d06cdbde7d6253e697069f8a418d2dc4f5cda3be7bef584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f391b95ae60b22ac3d06cdbde7d6253e697069f8a418d2dc4f5cda3be7bef584->enter($__internal_f391b95ae60b22ac3d06cdbde7d6253e697069f8a418d2dc4f5cda3be7bef584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a10a4bf0105debb7989fa41489877c6a46115a2a6b5e95642c9ab31abe196e68->leave($__internal_a10a4bf0105debb7989fa41489877c6a46115a2a6b5e95642c9ab31abe196e68_prof);

        
        $__internal_f391b95ae60b22ac3d06cdbde7d6253e697069f8a418d2dc4f5cda3be7bef584->leave($__internal_f391b95ae60b22ac3d06cdbde7d6253e697069f8a418d2dc4f5cda3be7bef584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
