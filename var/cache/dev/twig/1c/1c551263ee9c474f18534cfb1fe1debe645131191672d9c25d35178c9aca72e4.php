<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c2fc06d1207c64f6cb6740d0481fbcd91b28eedf5321fee413e8e180d04021ad extends Twig_Template
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
        $__internal_cbd23049cbab87f928962de67bf38e22d24f3930115d36b21d86ae1841da072f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd23049cbab87f928962de67bf38e22d24f3930115d36b21d86ae1841da072f->enter($__internal_cbd23049cbab87f928962de67bf38e22d24f3930115d36b21d86ae1841da072f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9e82653354d435ddadf59598aa3283752d7776730e79d5b701a4f4733a738f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e82653354d435ddadf59598aa3283752d7776730e79d5b701a4f4733a738f0b->enter($__internal_9e82653354d435ddadf59598aa3283752d7776730e79d5b701a4f4733a738f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cbd23049cbab87f928962de67bf38e22d24f3930115d36b21d86ae1841da072f->leave($__internal_cbd23049cbab87f928962de67bf38e22d24f3930115d36b21d86ae1841da072f_prof);

        
        $__internal_9e82653354d435ddadf59598aa3283752d7776730e79d5b701a4f4733a738f0b->leave($__internal_9e82653354d435ddadf59598aa3283752d7776730e79d5b701a4f4733a738f0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
