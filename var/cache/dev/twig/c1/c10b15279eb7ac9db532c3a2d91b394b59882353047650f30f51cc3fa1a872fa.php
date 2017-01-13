<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_77f90ebbc7ac3e13861c949cc2e371e6ec68c9d6a38ed761467f9c967fe59c54 extends Twig_Template
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
        $__internal_7cce4b3afdaf6da135c5513cc3dc4d2bdc52c9b8c029305963bd330371bd4784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cce4b3afdaf6da135c5513cc3dc4d2bdc52c9b8c029305963bd330371bd4784->enter($__internal_7cce4b3afdaf6da135c5513cc3dc4d2bdc52c9b8c029305963bd330371bd4784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0571263e66d1ede3bfb41db7c8e702c9a386d8ab81178f0766f4a20dadc3e237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0571263e66d1ede3bfb41db7c8e702c9a386d8ab81178f0766f4a20dadc3e237->enter($__internal_0571263e66d1ede3bfb41db7c8e702c9a386d8ab81178f0766f4a20dadc3e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7cce4b3afdaf6da135c5513cc3dc4d2bdc52c9b8c029305963bd330371bd4784->leave($__internal_7cce4b3afdaf6da135c5513cc3dc4d2bdc52c9b8c029305963bd330371bd4784_prof);

        
        $__internal_0571263e66d1ede3bfb41db7c8e702c9a386d8ab81178f0766f4a20dadc3e237->leave($__internal_0571263e66d1ede3bfb41db7c8e702c9a386d8ab81178f0766f4a20dadc3e237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
