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
        $__internal_84f685e0235efa075b84a4b362e64296881a6f8a13b3d94f1e96e8cba06f805e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f685e0235efa075b84a4b362e64296881a6f8a13b3d94f1e96e8cba06f805e->enter($__internal_84f685e0235efa075b84a4b362e64296881a6f8a13b3d94f1e96e8cba06f805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d0df53326a18d27be275714ab6a727b634d09ed9f44dc0bee2e1c4e6ad148a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0df53326a18d27be275714ab6a727b634d09ed9f44dc0bee2e1c4e6ad148a47->enter($__internal_d0df53326a18d27be275714ab6a727b634d09ed9f44dc0bee2e1c4e6ad148a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_84f685e0235efa075b84a4b362e64296881a6f8a13b3d94f1e96e8cba06f805e->leave($__internal_84f685e0235efa075b84a4b362e64296881a6f8a13b3d94f1e96e8cba06f805e_prof);

        
        $__internal_d0df53326a18d27be275714ab6a727b634d09ed9f44dc0bee2e1c4e6ad148a47->leave($__internal_d0df53326a18d27be275714ab6a727b634d09ed9f44dc0bee2e1c4e6ad148a47_prof);

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
