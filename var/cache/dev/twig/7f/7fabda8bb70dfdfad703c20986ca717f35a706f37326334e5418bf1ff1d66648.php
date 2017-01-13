<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3a6e820ca3bb7d5d9716aa1937b7dda738bfec1ee860b86b3524fdca15b37fac extends Twig_Template
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
        $__internal_a22c51342ebda169877acb60ecc98cf41fc7959e49fa876b3d7cd57b25daaaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22c51342ebda169877acb60ecc98cf41fc7959e49fa876b3d7cd57b25daaaeb->enter($__internal_a22c51342ebda169877acb60ecc98cf41fc7959e49fa876b3d7cd57b25daaaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_aff16ab41a3390233b3c89d9e9647e0d5e7ae1922c4a14efea406db2a927106f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff16ab41a3390233b3c89d9e9647e0d5e7ae1922c4a14efea406db2a927106f->enter($__internal_aff16ab41a3390233b3c89d9e9647e0d5e7ae1922c4a14efea406db2a927106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a22c51342ebda169877acb60ecc98cf41fc7959e49fa876b3d7cd57b25daaaeb->leave($__internal_a22c51342ebda169877acb60ecc98cf41fc7959e49fa876b3d7cd57b25daaaeb_prof);

        
        $__internal_aff16ab41a3390233b3c89d9e9647e0d5e7ae1922c4a14efea406db2a927106f->leave($__internal_aff16ab41a3390233b3c89d9e9647e0d5e7ae1922c4a14efea406db2a927106f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
