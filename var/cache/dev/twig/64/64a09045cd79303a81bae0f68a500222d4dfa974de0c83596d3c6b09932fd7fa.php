<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1574920fcf4371ffef60a61b8b268551440f412dbfbc8873eb8d8faa566e7208 extends Twig_Template
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
        $__internal_914682a4b9d07f3e04f3e2fd99151b8b250dec8b1bd1a308784a725217907f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914682a4b9d07f3e04f3e2fd99151b8b250dec8b1bd1a308784a725217907f71->enter($__internal_914682a4b9d07f3e04f3e2fd99151b8b250dec8b1bd1a308784a725217907f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7ea8d706fe040d40e66d6154cc5aaca255256b35d00524db06c420bd02bd3455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea8d706fe040d40e66d6154cc5aaca255256b35d00524db06c420bd02bd3455->enter($__internal_7ea8d706fe040d40e66d6154cc5aaca255256b35d00524db06c420bd02bd3455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_914682a4b9d07f3e04f3e2fd99151b8b250dec8b1bd1a308784a725217907f71->leave($__internal_914682a4b9d07f3e04f3e2fd99151b8b250dec8b1bd1a308784a725217907f71_prof);

        
        $__internal_7ea8d706fe040d40e66d6154cc5aaca255256b35d00524db06c420bd02bd3455->leave($__internal_7ea8d706fe040d40e66d6154cc5aaca255256b35d00524db06c420bd02bd3455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
