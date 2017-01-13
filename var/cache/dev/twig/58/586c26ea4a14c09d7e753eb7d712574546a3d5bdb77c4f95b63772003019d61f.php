<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cb54116226c8ee0611fc03d36abaed6bb849c4e3c891dbf27a03240a04000b7c extends Twig_Template
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
        $__internal_31193d5ea271357d5511fed2bec942c35b29fb26906ef7557b4dbdfd13cca881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31193d5ea271357d5511fed2bec942c35b29fb26906ef7557b4dbdfd13cca881->enter($__internal_31193d5ea271357d5511fed2bec942c35b29fb26906ef7557b4dbdfd13cca881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_875aa61ac2e12e9e3621cb2d18011ec03af446f10d5943eca59a152a71fe74a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875aa61ac2e12e9e3621cb2d18011ec03af446f10d5943eca59a152a71fe74a9->enter($__internal_875aa61ac2e12e9e3621cb2d18011ec03af446f10d5943eca59a152a71fe74a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_31193d5ea271357d5511fed2bec942c35b29fb26906ef7557b4dbdfd13cca881->leave($__internal_31193d5ea271357d5511fed2bec942c35b29fb26906ef7557b4dbdfd13cca881_prof);

        
        $__internal_875aa61ac2e12e9e3621cb2d18011ec03af446f10d5943eca59a152a71fe74a9->leave($__internal_875aa61ac2e12e9e3621cb2d18011ec03af446f10d5943eca59a152a71fe74a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
