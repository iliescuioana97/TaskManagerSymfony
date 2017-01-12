<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f317915d9396aed6f41fd2ec6753d1b691c67d2bfec9e55d247e8f50289da84d extends Twig_Template
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
        $__internal_e6a0c78c0ba41cdd40d38813ec47dcb54e8a55b34ef1ae6ce700711b3fb99bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a0c78c0ba41cdd40d38813ec47dcb54e8a55b34ef1ae6ce700711b3fb99bd9->enter($__internal_e6a0c78c0ba41cdd40d38813ec47dcb54e8a55b34ef1ae6ce700711b3fb99bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_81da6eacc3f35202a407b45607c8a15b51de5d4ef0b722579760f80b70eb485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81da6eacc3f35202a407b45607c8a15b51de5d4ef0b722579760f80b70eb485e->enter($__internal_81da6eacc3f35202a407b45607c8a15b51de5d4ef0b722579760f80b70eb485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e6a0c78c0ba41cdd40d38813ec47dcb54e8a55b34ef1ae6ce700711b3fb99bd9->leave($__internal_e6a0c78c0ba41cdd40d38813ec47dcb54e8a55b34ef1ae6ce700711b3fb99bd9_prof);

        
        $__internal_81da6eacc3f35202a407b45607c8a15b51de5d4ef0b722579760f80b70eb485e->leave($__internal_81da6eacc3f35202a407b45607c8a15b51de5d4ef0b722579760f80b70eb485e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
