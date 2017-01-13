<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_88d35243d54c850e053ff7a6062b682c02d8326c5a2afa1004d9744b8c37f144 extends Twig_Template
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
        $__internal_d4c4f36471f45ea449d941088017ee3bbcd69423fe9c97a348ed0b187064d00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c4f36471f45ea449d941088017ee3bbcd69423fe9c97a348ed0b187064d00b->enter($__internal_d4c4f36471f45ea449d941088017ee3bbcd69423fe9c97a348ed0b187064d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_f7303435d82e7ee5f86494d15a46260ea7edb9dab47453076119d11eb3a6c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7303435d82e7ee5f86494d15a46260ea7edb9dab47453076119d11eb3a6c46c->enter($__internal_f7303435d82e7ee5f86494d15a46260ea7edb9dab47453076119d11eb3a6c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d4c4f36471f45ea449d941088017ee3bbcd69423fe9c97a348ed0b187064d00b->leave($__internal_d4c4f36471f45ea449d941088017ee3bbcd69423fe9c97a348ed0b187064d00b_prof);

        
        $__internal_f7303435d82e7ee5f86494d15a46260ea7edb9dab47453076119d11eb3a6c46c->leave($__internal_f7303435d82e7ee5f86494d15a46260ea7edb9dab47453076119d11eb3a6c46c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
