<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f3b63d8f2e7891c633303307034311480e45d9f1e00f2a708c8b8a81e5bfc67f extends Twig_Template
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
        $__internal_cb3071418ce6ba2dad152d30a3109c1d27e0228ab59a6e508d9cacd14c1875e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3071418ce6ba2dad152d30a3109c1d27e0228ab59a6e508d9cacd14c1875e8->enter($__internal_cb3071418ce6ba2dad152d30a3109c1d27e0228ab59a6e508d9cacd14c1875e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_199f0e8abde4d59f6310867d646526e720d0998c77a6df9ca4607284f0315bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199f0e8abde4d59f6310867d646526e720d0998c77a6df9ca4607284f0315bcc->enter($__internal_199f0e8abde4d59f6310867d646526e720d0998c77a6df9ca4607284f0315bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cb3071418ce6ba2dad152d30a3109c1d27e0228ab59a6e508d9cacd14c1875e8->leave($__internal_cb3071418ce6ba2dad152d30a3109c1d27e0228ab59a6e508d9cacd14c1875e8_prof);

        
        $__internal_199f0e8abde4d59f6310867d646526e720d0998c77a6df9ca4607284f0315bcc->leave($__internal_199f0e8abde4d59f6310867d646526e720d0998c77a6df9ca4607284f0315bcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
