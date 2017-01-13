<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_196ace27fd07baab0eef2b8d57dfb627e83cc1f2c8e33385d892ec874a4cd75f extends Twig_Template
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
        $__internal_fc45b2d8a1877c404d737bc3a5e94336bf9cefc87dd2782c1712139d6e3e64b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc45b2d8a1877c404d737bc3a5e94336bf9cefc87dd2782c1712139d6e3e64b8->enter($__internal_fc45b2d8a1877c404d737bc3a5e94336bf9cefc87dd2782c1712139d6e3e64b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_00eb3e78d3cdb5dbaff59469abd6ab65151db1d05a47c5bd8b1534c98b59979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00eb3e78d3cdb5dbaff59469abd6ab65151db1d05a47c5bd8b1534c98b59979a->enter($__internal_00eb3e78d3cdb5dbaff59469abd6ab65151db1d05a47c5bd8b1534c98b59979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fc45b2d8a1877c404d737bc3a5e94336bf9cefc87dd2782c1712139d6e3e64b8->leave($__internal_fc45b2d8a1877c404d737bc3a5e94336bf9cefc87dd2782c1712139d6e3e64b8_prof);

        
        $__internal_00eb3e78d3cdb5dbaff59469abd6ab65151db1d05a47c5bd8b1534c98b59979a->leave($__internal_00eb3e78d3cdb5dbaff59469abd6ab65151db1d05a47c5bd8b1534c98b59979a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
