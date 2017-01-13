<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d029a9888f685d4e33044ada95e1b1cc783422ac6f7fe49bfcd2555702a8552 extends Twig_Template
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
        $__internal_6b56054a4573f6b270b63c49362a42eda906a879db2e6a89b297df651de5afeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b56054a4573f6b270b63c49362a42eda906a879db2e6a89b297df651de5afeb->enter($__internal_6b56054a4573f6b270b63c49362a42eda906a879db2e6a89b297df651de5afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c9ab2a50b2631a973f06dcf2fee0e7e5d2cd0d7132369dc78480a07afc6afa4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ab2a50b2631a973f06dcf2fee0e7e5d2cd0d7132369dc78480a07afc6afa4d->enter($__internal_c9ab2a50b2631a973f06dcf2fee0e7e5d2cd0d7132369dc78480a07afc6afa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6b56054a4573f6b270b63c49362a42eda906a879db2e6a89b297df651de5afeb->leave($__internal_6b56054a4573f6b270b63c49362a42eda906a879db2e6a89b297df651de5afeb_prof);

        
        $__internal_c9ab2a50b2631a973f06dcf2fee0e7e5d2cd0d7132369dc78480a07afc6afa4d->leave($__internal_c9ab2a50b2631a973f06dcf2fee0e7e5d2cd0d7132369dc78480a07afc6afa4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
