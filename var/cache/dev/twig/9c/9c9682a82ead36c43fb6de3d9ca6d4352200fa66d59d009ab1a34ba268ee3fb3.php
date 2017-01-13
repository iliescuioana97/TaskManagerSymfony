<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8eb65845860bc8830d648d18fd8d74bbb2396ff085b9adcd3ab855f437b3cdd extends Twig_Template
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
        $__internal_d8331b3260ed1f99c901516c58b10b2fcb1fe70887a64c63321e4c1b6ee56314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8331b3260ed1f99c901516c58b10b2fcb1fe70887a64c63321e4c1b6ee56314->enter($__internal_d8331b3260ed1f99c901516c58b10b2fcb1fe70887a64c63321e4c1b6ee56314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_48334a283d7216e7134c02a59fbbc89742df0a8a19762fa0e4d1892501fc799d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48334a283d7216e7134c02a59fbbc89742df0a8a19762fa0e4d1892501fc799d->enter($__internal_48334a283d7216e7134c02a59fbbc89742df0a8a19762fa0e4d1892501fc799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d8331b3260ed1f99c901516c58b10b2fcb1fe70887a64c63321e4c1b6ee56314->leave($__internal_d8331b3260ed1f99c901516c58b10b2fcb1fe70887a64c63321e4c1b6ee56314_prof);

        
        $__internal_48334a283d7216e7134c02a59fbbc89742df0a8a19762fa0e4d1892501fc799d->leave($__internal_48334a283d7216e7134c02a59fbbc89742df0a8a19762fa0e4d1892501fc799d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
