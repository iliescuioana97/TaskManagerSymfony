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
        $__internal_27368ebc158a9240f0a432c39ffd5ce6a2362b9cd03730d322d0e1ea58d3333d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27368ebc158a9240f0a432c39ffd5ce6a2362b9cd03730d322d0e1ea58d3333d->enter($__internal_27368ebc158a9240f0a432c39ffd5ce6a2362b9cd03730d322d0e1ea58d3333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_55d88913c61e5bb1d6e8f073d97ad60a0c1d61a5598e280a66f488c7543ded5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d88913c61e5bb1d6e8f073d97ad60a0c1d61a5598e280a66f488c7543ded5d->enter($__internal_55d88913c61e5bb1d6e8f073d97ad60a0c1d61a5598e280a66f488c7543ded5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_27368ebc158a9240f0a432c39ffd5ce6a2362b9cd03730d322d0e1ea58d3333d->leave($__internal_27368ebc158a9240f0a432c39ffd5ce6a2362b9cd03730d322d0e1ea58d3333d_prof);

        
        $__internal_55d88913c61e5bb1d6e8f073d97ad60a0c1d61a5598e280a66f488c7543ded5d->leave($__internal_55d88913c61e5bb1d6e8f073d97ad60a0c1d61a5598e280a66f488c7543ded5d_prof);

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
