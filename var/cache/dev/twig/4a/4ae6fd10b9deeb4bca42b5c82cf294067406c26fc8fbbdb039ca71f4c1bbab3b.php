<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2acd9e52b9516ee2c589045da65c76df718183d362f97ba56cffcc5d4ece6b9b extends Twig_Template
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
        $__internal_789a7b23c4a1cde262159a21529967e7e1d1e016d0b62c178502f683fa05ac50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789a7b23c4a1cde262159a21529967e7e1d1e016d0b62c178502f683fa05ac50->enter($__internal_789a7b23c4a1cde262159a21529967e7e1d1e016d0b62c178502f683fa05ac50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3bb39cb07ddc9817777540b0cfb60a9f4cd6f579a846a38a235636d0e8627e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb39cb07ddc9817777540b0cfb60a9f4cd6f579a846a38a235636d0e8627e9b->enter($__internal_3bb39cb07ddc9817777540b0cfb60a9f4cd6f579a846a38a235636d0e8627e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_789a7b23c4a1cde262159a21529967e7e1d1e016d0b62c178502f683fa05ac50->leave($__internal_789a7b23c4a1cde262159a21529967e7e1d1e016d0b62c178502f683fa05ac50_prof);

        
        $__internal_3bb39cb07ddc9817777540b0cfb60a9f4cd6f579a846a38a235636d0e8627e9b->leave($__internal_3bb39cb07ddc9817777540b0cfb60a9f4cd6f579a846a38a235636d0e8627e9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
