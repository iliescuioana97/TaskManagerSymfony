<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5edfc48af0178c76bb9e052b683a67b6644c961fc05075533df842051f9731db extends Twig_Template
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
        $__internal_b70cbc6f856277bc7e790b363c4fee3ca2ecfc095a00e0933f4cd162ea8b9fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70cbc6f856277bc7e790b363c4fee3ca2ecfc095a00e0933f4cd162ea8b9fab->enter($__internal_b70cbc6f856277bc7e790b363c4fee3ca2ecfc095a00e0933f4cd162ea8b9fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e01d41c7bdd5d9f6247dbe82442881a384298d29420f433f162becdbb5027347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01d41c7bdd5d9f6247dbe82442881a384298d29420f433f162becdbb5027347->enter($__internal_e01d41c7bdd5d9f6247dbe82442881a384298d29420f433f162becdbb5027347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b70cbc6f856277bc7e790b363c4fee3ca2ecfc095a00e0933f4cd162ea8b9fab->leave($__internal_b70cbc6f856277bc7e790b363c4fee3ca2ecfc095a00e0933f4cd162ea8b9fab_prof);

        
        $__internal_e01d41c7bdd5d9f6247dbe82442881a384298d29420f433f162becdbb5027347->leave($__internal_e01d41c7bdd5d9f6247dbe82442881a384298d29420f433f162becdbb5027347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
