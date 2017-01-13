<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_70abae97f9c5b89625f51200af04e47c73cc2b8869aa018a8c91182a411eccff extends Twig_Template
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
        $__internal_a6eb75b6dc1eb973fd4ac1b138c4c840047f42733b7987ec72bdbc055018882b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6eb75b6dc1eb973fd4ac1b138c4c840047f42733b7987ec72bdbc055018882b->enter($__internal_a6eb75b6dc1eb973fd4ac1b138c4c840047f42733b7987ec72bdbc055018882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_300ff299fa57f83ac0a3c9c222ee33f0c124f8a361a42a54c83e1a65429abaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300ff299fa57f83ac0a3c9c222ee33f0c124f8a361a42a54c83e1a65429abaaf->enter($__internal_300ff299fa57f83ac0a3c9c222ee33f0c124f8a361a42a54c83e1a65429abaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a6eb75b6dc1eb973fd4ac1b138c4c840047f42733b7987ec72bdbc055018882b->leave($__internal_a6eb75b6dc1eb973fd4ac1b138c4c840047f42733b7987ec72bdbc055018882b_prof);

        
        $__internal_300ff299fa57f83ac0a3c9c222ee33f0c124f8a361a42a54c83e1a65429abaaf->leave($__internal_300ff299fa57f83ac0a3c9c222ee33f0c124f8a361a42a54c83e1a65429abaaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
