<?php

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_a441fc7fd629b68a156eb8ddf6ef006422dda13335b0bfe388c80c8e0c4b16ef extends Twig_Template
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
        $__internal_6d28ca1aca28e3d5077a2d7365edfc8dbc4b2214ae20b887a404612b4af54d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d28ca1aca28e3d5077a2d7365edfc8dbc4b2214ae20b887a404612b4af54d74->enter($__internal_6d28ca1aca28e3d5077a2d7365edfc8dbc4b2214ae20b887a404612b4af54d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        $__internal_242258e94f56e32067b60ed5dcc05171dcd3d1f1a86ae22c23247a562ef0eab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242258e94f56e32067b60ed5dcc05171dcd3d1f1a86ae22c23247a562ef0eab8->enter($__internal_242258e94f56e32067b60ed5dcc05171dcd3d1f1a86ae22c23247a562ef0eab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        // line 1
        echo "<div id=\"sidebar-search\">
    <form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["ip"] ?? $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    <option ";
            echo ((($context["m"] == ($context["method"] ?? $this->getContext($context, "method")))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["start"] ?? $this->getContext($context, "start")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["end"] ?? $this->getContext($context, "end")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 47
            echo "                    <option ";
            echo ((($context["l"] == ($context["limit"] ?? $this->getContext($context, "limit")))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
";
        
        $__internal_6d28ca1aca28e3d5077a2d7365edfc8dbc4b2214ae20b887a404612b4af54d74->leave($__internal_6d28ca1aca28e3d5077a2d7365edfc8dbc4b2214ae20b887a404612b4af54d74_prof);

        
        $__internal_242258e94f56e32067b60ed5dcc05171dcd3d1f1a86ae22c23247a562ef0eab8->leave($__internal_242258e94f56e32067b60ed5dcc05171dcd3d1f1a86ae22c23247a562ef0eab8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  111 => 47,  107 => 46,  98 => 40,  90 => 35,  82 => 30,  74 => 25,  66 => 20,  59 => 15,  48 => 13,  44 => 12,  34 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-search\">
    <form action=\"{{ path('_profiler_search') }}\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"{{ ip }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}
                    <option {{ m == method ? 'selected=\"selected\"' }}>{{ m }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" value=\"{{ status_code }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"{{ url }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"{{ token }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"{{ start }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"{{ end }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                {% for l in [10, 50, 100] %}
                    <option {{ l == limit ? 'selected=\"selected\"' }}>{{ l }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
", "@WebProfiler/Profiler/search.html.twig", "/home/ioana/Projects/task-manager-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/search.html.twig");
    }
}
