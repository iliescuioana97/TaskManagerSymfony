<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_92fa631a79e458b498f1ab0d705b05b334cd3f566e69b7f79fa67afa3c5e321a extends Twig_Template
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
        $__internal_30ab703f2509499d6d746f2bfdd9a0382e7a64e7fe21e040c0705013bd460d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ab703f2509499d6d746f2bfdd9a0382e7a64e7fe21e040c0705013bd460d90->enter($__internal_30ab703f2509499d6d746f2bfdd9a0382e7a64e7fe21e040c0705013bd460d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_70128b6b22ae5c57546ca2c7c931a22efa23c9caf2e6654e962153cbf99f4757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70128b6b22ae5c57546ca2c7c931a22efa23c9caf2e6654e962153cbf99f4757->enter($__internal_70128b6b22ae5c57546ca2c7c931a22efa23c9caf2e6654e962153cbf99f4757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_30ab703f2509499d6d746f2bfdd9a0382e7a64e7fe21e040c0705013bd460d90->leave($__internal_30ab703f2509499d6d746f2bfdd9a0382e7a64e7fe21e040c0705013bd460d90_prof);

        
        $__internal_70128b6b22ae5c57546ca2c7c931a22efa23c9caf2e6654e962153cbf99f4757->leave($__internal_70128b6b22ae5c57546ca2c7c931a22efa23c9caf2e6654e962153cbf99f4757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
