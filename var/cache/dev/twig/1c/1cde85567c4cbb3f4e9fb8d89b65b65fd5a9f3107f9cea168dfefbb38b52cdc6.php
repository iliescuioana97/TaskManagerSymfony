<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a444b7252710065b088acbe133bcab9cb546151e79468a5b37c333e98a8af727 extends Twig_Template
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
        $__internal_56d7b74defc3d2e208b3d7625833d33e2fb5701c96906c94a423cc2a3d68c293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d7b74defc3d2e208b3d7625833d33e2fb5701c96906c94a423cc2a3d68c293->enter($__internal_56d7b74defc3d2e208b3d7625833d33e2fb5701c96906c94a423cc2a3d68c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_39b6a5ee2e4dc9f7f94cbfc63a8ac89f5657c3be9a0c6d5d4846b37983c4e6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b6a5ee2e4dc9f7f94cbfc63a8ac89f5657c3be9a0c6d5d4846b37983c4e6b1->enter($__internal_39b6a5ee2e4dc9f7f94cbfc63a8ac89f5657c3be9a0c6d5d4846b37983c4e6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_56d7b74defc3d2e208b3d7625833d33e2fb5701c96906c94a423cc2a3d68c293->leave($__internal_56d7b74defc3d2e208b3d7625833d33e2fb5701c96906c94a423cc2a3d68c293_prof);

        
        $__internal_39b6a5ee2e4dc9f7f94cbfc63a8ac89f5657c3be9a0c6d5d4846b37983c4e6b1->leave($__internal_39b6a5ee2e4dc9f7f94cbfc63a8ac89f5657c3be9a0c6d5d4846b37983c4e6b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
