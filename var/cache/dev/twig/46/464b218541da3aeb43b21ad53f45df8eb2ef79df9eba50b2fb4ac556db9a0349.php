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
        $__internal_968b7ff8f8ec30e3e2c65182efbdfc9a8691d6e0f76147aa0162c42341c31c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968b7ff8f8ec30e3e2c65182efbdfc9a8691d6e0f76147aa0162c42341c31c38->enter($__internal_968b7ff8f8ec30e3e2c65182efbdfc9a8691d6e0f76147aa0162c42341c31c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f48e9b8d2986dc0e8118804bc70ded26f4da01112a70a830c99fcef337806d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48e9b8d2986dc0e8118804bc70ded26f4da01112a70a830c99fcef337806d40->enter($__internal_f48e9b8d2986dc0e8118804bc70ded26f4da01112a70a830c99fcef337806d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_968b7ff8f8ec30e3e2c65182efbdfc9a8691d6e0f76147aa0162c42341c31c38->leave($__internal_968b7ff8f8ec30e3e2c65182efbdfc9a8691d6e0f76147aa0162c42341c31c38_prof);

        
        $__internal_f48e9b8d2986dc0e8118804bc70ded26f4da01112a70a830c99fcef337806d40->leave($__internal_f48e9b8d2986dc0e8118804bc70ded26f4da01112a70a830c99fcef337806d40_prof);

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
