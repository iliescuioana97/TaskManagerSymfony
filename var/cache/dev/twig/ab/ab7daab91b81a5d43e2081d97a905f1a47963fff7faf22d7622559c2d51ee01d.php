<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_92fa631a79e458b498f1ab0d705b05b334cd3f566e69b7f79fa67afa3c5e321a extends Twig_Template
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
        $__internal_0e27161e822a05d0d34e3bcf31064fd5126fd1d110140cef6bbd41c27023bbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e27161e822a05d0d34e3bcf31064fd5126fd1d110140cef6bbd41c27023bbb4->enter($__internal_0e27161e822a05d0d34e3bcf31064fd5126fd1d110140cef6bbd41c27023bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f04374f8ae87921a7840188e684e59e51cd688c5cee7132a0b8eed5ce46c9c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04374f8ae87921a7840188e684e59e51cd688c5cee7132a0b8eed5ce46c9c15->enter($__internal_f04374f8ae87921a7840188e684e59e51cd688c5cee7132a0b8eed5ce46c9c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0e27161e822a05d0d34e3bcf31064fd5126fd1d110140cef6bbd41c27023bbb4->leave($__internal_0e27161e822a05d0d34e3bcf31064fd5126fd1d110140cef6bbd41c27023bbb4_prof);

        
        $__internal_f04374f8ae87921a7840188e684e59e51cd688c5cee7132a0b8eed5ce46c9c15->leave($__internal_f04374f8ae87921a7840188e684e59e51cd688c5cee7132a0b8eed5ce46c9c15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
