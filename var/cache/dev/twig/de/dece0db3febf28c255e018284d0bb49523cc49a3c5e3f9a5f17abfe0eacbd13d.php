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
        $__internal_44baeadedc0b574eca1bcff64f80548e375f39b7da63f4f98714e994cd013a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44baeadedc0b574eca1bcff64f80548e375f39b7da63f4f98714e994cd013a4a->enter($__internal_44baeadedc0b574eca1bcff64f80548e375f39b7da63f4f98714e994cd013a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_05c1e7f4840e6fe683afdd6b2126721746231500664df81a38214ae7c4e398b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c1e7f4840e6fe683afdd6b2126721746231500664df81a38214ae7c4e398b8->enter($__internal_05c1e7f4840e6fe683afdd6b2126721746231500664df81a38214ae7c4e398b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_44baeadedc0b574eca1bcff64f80548e375f39b7da63f4f98714e994cd013a4a->leave($__internal_44baeadedc0b574eca1bcff64f80548e375f39b7da63f4f98714e994cd013a4a_prof);

        
        $__internal_05c1e7f4840e6fe683afdd6b2126721746231500664df81a38214ae7c4e398b8->leave($__internal_05c1e7f4840e6fe683afdd6b2126721746231500664df81a38214ae7c4e398b8_prof);

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
