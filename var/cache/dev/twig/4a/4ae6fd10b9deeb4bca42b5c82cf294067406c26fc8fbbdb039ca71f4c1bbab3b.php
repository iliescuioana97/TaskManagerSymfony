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
        $__internal_d45d4664e2c98c57d4f079a93fe5b1125fde889d96098bf4dc1801b4271db0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45d4664e2c98c57d4f079a93fe5b1125fde889d96098bf4dc1801b4271db0b7->enter($__internal_d45d4664e2c98c57d4f079a93fe5b1125fde889d96098bf4dc1801b4271db0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5fdf8aa4d0944d363e3255f2f563f815ee58d82cf3256796ac28263b72df0d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf8aa4d0944d363e3255f2f563f815ee58d82cf3256796ac28263b72df0d54->enter($__internal_5fdf8aa4d0944d363e3255f2f563f815ee58d82cf3256796ac28263b72df0d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d45d4664e2c98c57d4f079a93fe5b1125fde889d96098bf4dc1801b4271db0b7->leave($__internal_d45d4664e2c98c57d4f079a93fe5b1125fde889d96098bf4dc1801b4271db0b7_prof);

        
        $__internal_5fdf8aa4d0944d363e3255f2f563f815ee58d82cf3256796ac28263b72df0d54->leave($__internal_5fdf8aa4d0944d363e3255f2f563f815ee58d82cf3256796ac28263b72df0d54_prof);

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
