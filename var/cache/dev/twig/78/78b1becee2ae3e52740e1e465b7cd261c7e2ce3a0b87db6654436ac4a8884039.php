<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3dcf92d0fe701aa416051e58aa9ff9598564065a89c9fd4ffc12b06603fb1402 extends Twig_Template
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
        $__internal_966596d92d33402760cb8b13f2125fbaacc29ba216318afdb3614ed770782dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966596d92d33402760cb8b13f2125fbaacc29ba216318afdb3614ed770782dfb->enter($__internal_966596d92d33402760cb8b13f2125fbaacc29ba216318afdb3614ed770782dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d3b6d88da415665d830ad55260c2d0b699ad12d09e3c158d177bde853b7ca3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b6d88da415665d830ad55260c2d0b699ad12d09e3c158d177bde853b7ca3e8->enter($__internal_d3b6d88da415665d830ad55260c2d0b699ad12d09e3c158d177bde853b7ca3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_966596d92d33402760cb8b13f2125fbaacc29ba216318afdb3614ed770782dfb->leave($__internal_966596d92d33402760cb8b13f2125fbaacc29ba216318afdb3614ed770782dfb_prof);

        
        $__internal_d3b6d88da415665d830ad55260c2d0b699ad12d09e3c158d177bde853b7ca3e8->leave($__internal_d3b6d88da415665d830ad55260c2d0b699ad12d09e3c158d177bde853b7ca3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
