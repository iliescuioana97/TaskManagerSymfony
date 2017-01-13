<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_62e8caef8989eb494c981539155ef75606ad4e74259271b23cfab58c59bba709 extends Twig_Template
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
        $__internal_e2d1454580050585e2ee3dcbb28a8899e97cd9bce856d01af0f4a3d4d946caad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d1454580050585e2ee3dcbb28a8899e97cd9bce856d01af0f4a3d4d946caad->enter($__internal_e2d1454580050585e2ee3dcbb28a8899e97cd9bce856d01af0f4a3d4d946caad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_738f5481d9c4d8a8c3f6afbbf62bb5ea2fe0d0b2f9ae15b64e2533391fb41a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738f5481d9c4d8a8c3f6afbbf62bb5ea2fe0d0b2f9ae15b64e2533391fb41a91->enter($__internal_738f5481d9c4d8a8c3f6afbbf62bb5ea2fe0d0b2f9ae15b64e2533391fb41a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e2d1454580050585e2ee3dcbb28a8899e97cd9bce856d01af0f4a3d4d946caad->leave($__internal_e2d1454580050585e2ee3dcbb28a8899e97cd9bce856d01af0f4a3d4d946caad_prof);

        
        $__internal_738f5481d9c4d8a8c3f6afbbf62bb5ea2fe0d0b2f9ae15b64e2533391fb41a91->leave($__internal_738f5481d9c4d8a8c3f6afbbf62bb5ea2fe0d0b2f9ae15b64e2533391fb41a91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
