<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cb54116226c8ee0611fc03d36abaed6bb849c4e3c891dbf27a03240a04000b7c extends Twig_Template
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
        $__internal_c40580e5f9413535ec3b494a3f390508a4847be740f9bbbc69ec0ad8111d23ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40580e5f9413535ec3b494a3f390508a4847be740f9bbbc69ec0ad8111d23ba->enter($__internal_c40580e5f9413535ec3b494a3f390508a4847be740f9bbbc69ec0ad8111d23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9a26f6127fc969f3e582046dddf60bd6a9b863387a05106b8dbe12ae3c7abcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a26f6127fc969f3e582046dddf60bd6a9b863387a05106b8dbe12ae3c7abcf5->enter($__internal_9a26f6127fc969f3e582046dddf60bd6a9b863387a05106b8dbe12ae3c7abcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c40580e5f9413535ec3b494a3f390508a4847be740f9bbbc69ec0ad8111d23ba->leave($__internal_c40580e5f9413535ec3b494a3f390508a4847be740f9bbbc69ec0ad8111d23ba_prof);

        
        $__internal_9a26f6127fc969f3e582046dddf60bd6a9b863387a05106b8dbe12ae3c7abcf5->leave($__internal_9a26f6127fc969f3e582046dddf60bd6a9b863387a05106b8dbe12ae3c7abcf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
