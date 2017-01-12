<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_922151d2b6505459c3f477388a2bdffb6a6d4a03299f33450759f1a03b1d79a0 extends Twig_Template
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
        $__internal_9136e6171fd0d6773a22fea50a33f41aa7bbd66ea55c8806677a5a0520c8b003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9136e6171fd0d6773a22fea50a33f41aa7bbd66ea55c8806677a5a0520c8b003->enter($__internal_9136e6171fd0d6773a22fea50a33f41aa7bbd66ea55c8806677a5a0520c8b003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f072f511f83d4810bcd0ec4cb66bb275803c5656ae70590290a3986ff1259f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f072f511f83d4810bcd0ec4cb66bb275803c5656ae70590290a3986ff1259f39->enter($__internal_f072f511f83d4810bcd0ec4cb66bb275803c5656ae70590290a3986ff1259f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9136e6171fd0d6773a22fea50a33f41aa7bbd66ea55c8806677a5a0520c8b003->leave($__internal_9136e6171fd0d6773a22fea50a33f41aa7bbd66ea55c8806677a5a0520c8b003_prof);

        
        $__internal_f072f511f83d4810bcd0ec4cb66bb275803c5656ae70590290a3986ff1259f39->leave($__internal_f072f511f83d4810bcd0ec4cb66bb275803c5656ae70590290a3986ff1259f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
