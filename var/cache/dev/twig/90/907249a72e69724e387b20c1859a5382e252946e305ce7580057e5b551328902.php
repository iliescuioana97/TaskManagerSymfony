<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f317915d9396aed6f41fd2ec6753d1b691c67d2bfec9e55d247e8f50289da84d extends Twig_Template
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
        $__internal_67845a74f23e2f1b5df402f7902228947a957fcfc75310099a0b06d68c9e95a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67845a74f23e2f1b5df402f7902228947a957fcfc75310099a0b06d68c9e95a7->enter($__internal_67845a74f23e2f1b5df402f7902228947a957fcfc75310099a0b06d68c9e95a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_92398a4c546034530f7eb6709ac8bccf0fc679b0260b31245a46ff362aafea2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92398a4c546034530f7eb6709ac8bccf0fc679b0260b31245a46ff362aafea2f->enter($__internal_92398a4c546034530f7eb6709ac8bccf0fc679b0260b31245a46ff362aafea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_67845a74f23e2f1b5df402f7902228947a957fcfc75310099a0b06d68c9e95a7->leave($__internal_67845a74f23e2f1b5df402f7902228947a957fcfc75310099a0b06d68c9e95a7_prof);

        
        $__internal_92398a4c546034530f7eb6709ac8bccf0fc679b0260b31245a46ff362aafea2f->leave($__internal_92398a4c546034530f7eb6709ac8bccf0fc679b0260b31245a46ff362aafea2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
