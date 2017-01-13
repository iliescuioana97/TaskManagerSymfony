<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cab3a340ad35a6e9a8169a956fa72690814a58e4feac1af13baa75843f05054c extends Twig_Template
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
        $__internal_72aebc499a92cf9d19697fe34625b231086f597a2a01269daeb0f83c9822f006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72aebc499a92cf9d19697fe34625b231086f597a2a01269daeb0f83c9822f006->enter($__internal_72aebc499a92cf9d19697fe34625b231086f597a2a01269daeb0f83c9822f006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_dd8a4c5c455736b80c01fe9e2d4f8102fbf29580f6e5f53c9fdd270e372ee6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8a4c5c455736b80c01fe9e2d4f8102fbf29580f6e5f53c9fdd270e372ee6af->enter($__internal_dd8a4c5c455736b80c01fe9e2d4f8102fbf29580f6e5f53c9fdd270e372ee6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_72aebc499a92cf9d19697fe34625b231086f597a2a01269daeb0f83c9822f006->leave($__internal_72aebc499a92cf9d19697fe34625b231086f597a2a01269daeb0f83c9822f006_prof);

        
        $__internal_dd8a4c5c455736b80c01fe9e2d4f8102fbf29580f6e5f53c9fdd270e372ee6af->leave($__internal_dd8a4c5c455736b80c01fe9e2d4f8102fbf29580f6e5f53c9fdd270e372ee6af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
