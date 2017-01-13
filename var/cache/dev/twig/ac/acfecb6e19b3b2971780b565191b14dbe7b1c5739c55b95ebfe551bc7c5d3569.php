<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e742bc8c6daaad3efbf512de2de2021ab78b6d53efc5dce2c1cefa7553826def extends Twig_Template
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
        $__internal_22d663b024072aed4a45b3d61f5c33f7c848b0ee901145a6cf31800e79d0537c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d663b024072aed4a45b3d61f5c33f7c848b0ee901145a6cf31800e79d0537c->enter($__internal_22d663b024072aed4a45b3d61f5c33f7c848b0ee901145a6cf31800e79d0537c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_13e0aaededdea929bbc17e286c6df2d16718b45720c9d5b8b643a6df573caa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e0aaededdea929bbc17e286c6df2d16718b45720c9d5b8b643a6df573caa15->enter($__internal_13e0aaededdea929bbc17e286c6df2d16718b45720c9d5b8b643a6df573caa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_22d663b024072aed4a45b3d61f5c33f7c848b0ee901145a6cf31800e79d0537c->leave($__internal_22d663b024072aed4a45b3d61f5c33f7c848b0ee901145a6cf31800e79d0537c_prof);

        
        $__internal_13e0aaededdea929bbc17e286c6df2d16718b45720c9d5b8b643a6df573caa15->leave($__internal_13e0aaededdea929bbc17e286c6df2d16718b45720c9d5b8b643a6df573caa15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
