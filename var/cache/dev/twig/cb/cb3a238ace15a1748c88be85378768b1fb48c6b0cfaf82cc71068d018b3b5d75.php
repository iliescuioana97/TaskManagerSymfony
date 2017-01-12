<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cab3a340ad35a6e9a8169a956fa72690814a58e4feac1af13baa75843f05054c extends Twig_Template
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
        $__internal_e5cd190d1c175be0f89df0b0f9476d7e48ee4c3a21799f5e0387aeb4204bf32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cd190d1c175be0f89df0b0f9476d7e48ee4c3a21799f5e0387aeb4204bf32e->enter($__internal_e5cd190d1c175be0f89df0b0f9476d7e48ee4c3a21799f5e0387aeb4204bf32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_591b1246adf540aec1cf8078d24a4359d599faceb9d772e4fce0160b5581dbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591b1246adf540aec1cf8078d24a4359d599faceb9d772e4fce0160b5581dbb3->enter($__internal_591b1246adf540aec1cf8078d24a4359d599faceb9d772e4fce0160b5581dbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e5cd190d1c175be0f89df0b0f9476d7e48ee4c3a21799f5e0387aeb4204bf32e->leave($__internal_e5cd190d1c175be0f89df0b0f9476d7e48ee4c3a21799f5e0387aeb4204bf32e_prof);

        
        $__internal_591b1246adf540aec1cf8078d24a4359d599faceb9d772e4fce0160b5581dbb3->leave($__internal_591b1246adf540aec1cf8078d24a4359d599faceb9d772e4fce0160b5581dbb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
