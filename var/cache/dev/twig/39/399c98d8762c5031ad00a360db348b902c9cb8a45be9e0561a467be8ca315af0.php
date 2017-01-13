<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82187edda690e2421d83d7f1bff67941cbbc44d7495fd6bfc34462f32aa50e08 extends Twig_Template
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
        $__internal_ed4a6e7dbce28ded6e618e2fd85a9a9ef78395c8f77102170de97b795f20fe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4a6e7dbce28ded6e618e2fd85a9a9ef78395c8f77102170de97b795f20fe09->enter($__internal_ed4a6e7dbce28ded6e618e2fd85a9a9ef78395c8f77102170de97b795f20fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_25a5691703b9ba4f5e33f795bfdb1a2a8768054dafcd338df5e5375b4a350d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a5691703b9ba4f5e33f795bfdb1a2a8768054dafcd338df5e5375b4a350d19->enter($__internal_25a5691703b9ba4f5e33f795bfdb1a2a8768054dafcd338df5e5375b4a350d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ed4a6e7dbce28ded6e618e2fd85a9a9ef78395c8f77102170de97b795f20fe09->leave($__internal_ed4a6e7dbce28ded6e618e2fd85a9a9ef78395c8f77102170de97b795f20fe09_prof);

        
        $__internal_25a5691703b9ba4f5e33f795bfdb1a2a8768054dafcd338df5e5375b4a350d19->leave($__internal_25a5691703b9ba4f5e33f795bfdb1a2a8768054dafcd338df5e5375b4a350d19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
