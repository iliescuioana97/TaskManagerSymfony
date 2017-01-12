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
        $__internal_feeed71677b6c5622c82ca791d6104d38f4b5344db8d4057bbe49a6366174984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeed71677b6c5622c82ca791d6104d38f4b5344db8d4057bbe49a6366174984->enter($__internal_feeed71677b6c5622c82ca791d6104d38f4b5344db8d4057bbe49a6366174984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_78f829acdca2c5cf20e9e7f941d09ca22247d8f7b477f787045a5ed7a3d5059c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f829acdca2c5cf20e9e7f941d09ca22247d8f7b477f787045a5ed7a3d5059c->enter($__internal_78f829acdca2c5cf20e9e7f941d09ca22247d8f7b477f787045a5ed7a3d5059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_feeed71677b6c5622c82ca791d6104d38f4b5344db8d4057bbe49a6366174984->leave($__internal_feeed71677b6c5622c82ca791d6104d38f4b5344db8d4057bbe49a6366174984_prof);

        
        $__internal_78f829acdca2c5cf20e9e7f941d09ca22247d8f7b477f787045a5ed7a3d5059c->leave($__internal_78f829acdca2c5cf20e9e7f941d09ca22247d8f7b477f787045a5ed7a3d5059c_prof);

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
