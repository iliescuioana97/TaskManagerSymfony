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
        $__internal_02aaae156fcf62243ee52e9915954fb9100883c836043e8603547d4abb8e6b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02aaae156fcf62243ee52e9915954fb9100883c836043e8603547d4abb8e6b4b->enter($__internal_02aaae156fcf62243ee52e9915954fb9100883c836043e8603547d4abb8e6b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c44c3d42e45a6bd536d3c46d4b43bfff083bc0061936ae6b080b5a66ee9be421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44c3d42e45a6bd536d3c46d4b43bfff083bc0061936ae6b080b5a66ee9be421->enter($__internal_c44c3d42e45a6bd536d3c46d4b43bfff083bc0061936ae6b080b5a66ee9be421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_02aaae156fcf62243ee52e9915954fb9100883c836043e8603547d4abb8e6b4b->leave($__internal_02aaae156fcf62243ee52e9915954fb9100883c836043e8603547d4abb8e6b4b_prof);

        
        $__internal_c44c3d42e45a6bd536d3c46d4b43bfff083bc0061936ae6b080b5a66ee9be421->leave($__internal_c44c3d42e45a6bd536d3c46d4b43bfff083bc0061936ae6b080b5a66ee9be421_prof);

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
