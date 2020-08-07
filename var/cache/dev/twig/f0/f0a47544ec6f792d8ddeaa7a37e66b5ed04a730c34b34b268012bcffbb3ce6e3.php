<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ptfl/vue_referentiel.html.twig */
class __TwigTemplate_f309d42a80610461c42399d2b917545e9de2e8b283560f89c838a364fbab371f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'tableau' => [$this, 'block_tableau'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ptfl/vue_referentiel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "\t\t
\t\t<h1>Référentiel du BTS SIO 2019</h1>
";
        // line 14
        echo "<table border=1>
";
        // line 15
        $this->displayBlock('tableau', $context, $blocks);
        // line 32
        echo "</table>

    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        // line 16
        echo "\t";
        $context["i"] = 1;
        // line 17
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 17, $this->source); })()), "domaines", [], "array", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            echo " 
\t<tr><td><h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "nomenclature", [], "any", false, false, false, 18), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "libelle", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3></tr>
\t ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "activites", [], "array", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 20
                echo "\t ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "idDomaine", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "\t \t<tr><td><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nomenclature", [], "any", false, false, false, 21), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "libelle", [], "any", false, false, false, 21), "html", null, true);
                    echo "</b></tr>
\t 
\t \t";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 23, $this->source); })()), "competences", [], "array", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 24
                        echo "\t\t ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["c"], "idActivite", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 24)))) {
                            // line 25
                            echo "\t\t \t<tr><td> ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomenclature", [], "any", false, false, false, 25), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "libelle", [], "any", false, false, false, 25), "html", null, true);
                            echo "</tr>
\t\t ";
                        }
                        // line 27
                        echo "\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "\t ";
                }
                // line 29
                echo "\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ptfl/vue_referentiel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 30,  197 => 29,  194 => 28,  188 => 27,  180 => 25,  177 => 24,  173 => 23,  165 => 21,  162 => 20,  158 => 19,  152 => 18,  145 => 17,  142 => 16,  135 => 15,  123 => 10,  111 => 9,  99 => 6,  86 => 5,  75 => 32,  73 => 15,  70 => 14,  66 => 11,  63 => 10,  61 => 9,  57 => 7,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
\t\t
\t\t<h1>Référentiel du BTS SIO 2019</h1>
{# templates/ptfl/vue_referentiel.html.twig #}
<table border=1>
{% block tableau %}
\t{% set i=1 %}
\t{% for d in pData[\"domaines\"] %} 
\t<tr><td><h3>{{ d.nomenclature }} - {{ d.libelle }}</h3></tr>
\t {% for a in pData[\"activites\"]  %}
\t {% if a.idDomaine==d.id %}
\t \t<tr><td><b>{{a.nomenclature}} {{a.libelle}}</b></tr>
\t 
\t \t{% for c in  pData[\"competences\"]  %}
\t\t {% if c.idActivite==a.id %}
\t\t \t<tr><td> {{c.nomenclature}} {{c.libelle}}</tr>
\t\t {% endif %}
\t\t {% endfor %}
\t {% endif %}
\t {% endfor %}
\t{% endfor %}
{% endblock %}
</table>

    </body>
</html>
", "ptfl/vue_referentiel.html.twig", "/Applications/MAMP/htdocs/ptflsio2/templates/ptfl/vue_referentiel.html.twig");
    }
}
