<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_42948e7b0e813a86b72257bfabceeb8c03e6c5fb8e01e1b5ae88fca919c3f975 extends Twig_Template
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
        $__internal_94418e36b26f842f6278def68fb0f342a5ef6ec6b3db1caae3a8489b47015ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94418e36b26f842f6278def68fb0f342a5ef6ec6b3db1caae3a8489b47015ed6->enter($__internal_94418e36b26f842f6278def68fb0f342a5ef6ec6b3db1caae3a8489b47015ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_20d846e5a86aefb60df68166e869ffddc1e1dc05ddd8ec4f43c384b4c6a89cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d846e5a86aefb60df68166e869ffddc1e1dc05ddd8ec4f43c384b4c6a89cc4->enter($__internal_20d846e5a86aefb60df68166e869ffddc1e1dc05ddd8ec4f43c384b4c6a89cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_94418e36b26f842f6278def68fb0f342a5ef6ec6b3db1caae3a8489b47015ed6->leave($__internal_94418e36b26f842f6278def68fb0f342a5ef6ec6b3db1caae3a8489b47015ed6_prof);

        
        $__internal_20d846e5a86aefb60df68166e869ffddc1e1dc05ddd8ec4f43c384b4c6a89cc4->leave($__internal_20d846e5a86aefb60df68166e869ffddc1e1dc05ddd8ec4f43c384b4c6a89cc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
