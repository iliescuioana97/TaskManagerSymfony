<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_77f90ebbc7ac3e13861c949cc2e371e6ec68c9d6a38ed761467f9c967fe59c54 extends Twig_Template
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
        $__internal_8d3e993933ee1037eb7b72038381276e975d781dd2ffee1b8194975df011e912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3e993933ee1037eb7b72038381276e975d781dd2ffee1b8194975df011e912->enter($__internal_8d3e993933ee1037eb7b72038381276e975d781dd2ffee1b8194975df011e912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_054aa4c9b7d2e58f84400089683814f3d98dfa0d735047b5bbf5e8857817a5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054aa4c9b7d2e58f84400089683814f3d98dfa0d735047b5bbf5e8857817a5ee->enter($__internal_054aa4c9b7d2e58f84400089683814f3d98dfa0d735047b5bbf5e8857817a5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8d3e993933ee1037eb7b72038381276e975d781dd2ffee1b8194975df011e912->leave($__internal_8d3e993933ee1037eb7b72038381276e975d781dd2ffee1b8194975df011e912_prof);

        
        $__internal_054aa4c9b7d2e58f84400089683814f3d98dfa0d735047b5bbf5e8857817a5ee->leave($__internal_054aa4c9b7d2e58f84400089683814f3d98dfa0d735047b5bbf5e8857817a5ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
