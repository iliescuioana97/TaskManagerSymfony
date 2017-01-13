<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_89efdab25f52bd905e35f38d5388ab1c0f99a267bc65b5b500dce7aeff4e0fbf extends Twig_Template
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
        $__internal_d51f8fac25e9ed5e4aa9dbfd74ac08abb83a7b1ee7b76919ce7c9bd51d6fed09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51f8fac25e9ed5e4aa9dbfd74ac08abb83a7b1ee7b76919ce7c9bd51d6fed09->enter($__internal_d51f8fac25e9ed5e4aa9dbfd74ac08abb83a7b1ee7b76919ce7c9bd51d6fed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_1f14854eb83e0b3ffbb75a1d2a4001eb481c819cd2634b27b06fb79b9c6344be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f14854eb83e0b3ffbb75a1d2a4001eb481c819cd2634b27b06fb79b9c6344be->enter($__internal_1f14854eb83e0b3ffbb75a1d2a4001eb481c819cd2634b27b06fb79b9c6344be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_d51f8fac25e9ed5e4aa9dbfd74ac08abb83a7b1ee7b76919ce7c9bd51d6fed09->leave($__internal_d51f8fac25e9ed5e4aa9dbfd74ac08abb83a7b1ee7b76919ce7c9bd51d6fed09_prof);

        
        $__internal_1f14854eb83e0b3ffbb75a1d2a4001eb481c819cd2634b27b06fb79b9c6344be->leave($__internal_1f14854eb83e0b3ffbb75a1d2a4001eb481c819cd2634b27b06fb79b9c6344be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
