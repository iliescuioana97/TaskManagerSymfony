<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_faa7d53ddedf697274178568a2636ea3fe185f56daf30b2471c6b66f54d8825a extends Twig_Template
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
        $__internal_4bce5c7ffdd2b5d3b9c8243feb40f8044c262d048f84419845a51563f2cb3c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bce5c7ffdd2b5d3b9c8243feb40f8044c262d048f84419845a51563f2cb3c40->enter($__internal_4bce5c7ffdd2b5d3b9c8243feb40f8044c262d048f84419845a51563f2cb3c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b25888f50328fbd462f544ed592a8ef247f1e1c4429a1781e8b1fcf5196a225e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25888f50328fbd462f544ed592a8ef247f1e1c4429a1781e8b1fcf5196a225e->enter($__internal_b25888f50328fbd462f544ed592a8ef247f1e1c4429a1781e8b1fcf5196a225e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4bce5c7ffdd2b5d3b9c8243feb40f8044c262d048f84419845a51563f2cb3c40->leave($__internal_4bce5c7ffdd2b5d3b9c8243feb40f8044c262d048f84419845a51563f2cb3c40_prof);

        
        $__internal_b25888f50328fbd462f544ed592a8ef247f1e1c4429a1781e8b1fcf5196a225e->leave($__internal_b25888f50328fbd462f544ed592a8ef247f1e1c4429a1781e8b1fcf5196a225e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
