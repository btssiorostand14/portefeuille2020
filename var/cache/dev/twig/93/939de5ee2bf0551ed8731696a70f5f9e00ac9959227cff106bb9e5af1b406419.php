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

/* ptfl/vue_accueil.html.twig */
class __TwigTemplate_e1c966abe63229e9da491e5d0198c705fbfabc72943295479337233d3bb4dec5 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ptfl/vue_accueil.html.twig"));

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
\t\t<h1>Etudiants par promotion</h1></br>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 14, $this->source); })()), "promos", [], "array", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 15
            echo "\t<table border=\"1\"><tr><th colspan=4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "annee", [], "any", false, false, false, 15), "html", null, true);
            echo "
\t<tr><th>Etudiant.e<th>Carnet de bord stage 1<th>Carnet de bord stage 2<th>Situations
\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 17, $this->source); })()), "etudiants", [], "array", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 18
                echo "\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "numGroupe", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["p"], "num", [], "any", false, false, false, 18)))) {
                    // line 19
                    echo "\t\t\t<tr><td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", [], "any", false, false, false, 19), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 19), "html", null, true);
                    echo "
\t\t\t<td><a href=\"carnetbord/";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "num", [], "any", false, false, false, 20), "html", null, true);
                    echo "/1,0\">consulter</a>
\t\t\t<td><a href=\"carnetbord/";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "num", [], "any", false, false, false, 21), "html", null, true);
                    echo "/1/0\">consulter</a>
\t\t\t<td>";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 22, $this->source); })()), "situations", [], "array", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 23
                        echo "\t\t\t\t\t";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["s"], "numetudiant", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, $context["e"], "num", [], "any", false, false, false, 23)))) {
                            // line 24
                            echo "\t\t\t\t\t\t<a href=\"situation/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "num", [], "any", false, false, false, 24), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "ref", [], "any", false, false, false, 24), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "libcourt", [], "any", false, false, false, 24), "html", null, true);
                            echo "</a><br/>
\t\t\t\t\t";
                        }
                        // line 26
                        echo "\t\t\t    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t";
                }
                // line 28
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t</table><br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
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

    public function getTemplateName()
    {
        return "ptfl/vue_accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 10,  177 => 9,  165 => 6,  152 => 5,  142 => 31,  135 => 29,  129 => 28,  126 => 27,  120 => 26,  110 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  88 => 19,  85 => 18,  81 => 17,  73 => 15,  69 => 14,  65 => 11,  62 => 10,  60 => 9,  56 => 7,  54 => 6,  50 => 5,  44 => 1,);
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
\t\t<h1>Etudiants par promotion</h1></br>
{# templates/ptfl/vue_accueil.html.twig #}
{% for p in pData[\"promos\"] %}
\t<table border=\"1\"><tr><th colspan=4>{{p.nom}} {{p.annee}}
\t<tr><th>Etudiant.e<th>Carnet de bord stage 1<th>Carnet de bord stage 2<th>Situations
\t{% for e in pData[\"etudiants\"]%}
\t\t{% if e.numGroupe==p.num %}
\t\t\t<tr><td>{{e.prenom }} {{e.nom}}
\t\t\t<td><a href=\"carnetbord/{{e.num}}/1,0\">consulter</a>
\t\t\t<td><a href=\"carnetbord/{{e.num}}/1/0\">consulter</a>
\t\t\t<td>{% for s in pData[\"situations\"] %}
\t\t\t\t\t{% if s.numetudiant==e.num %}
\t\t\t\t\t\t<a href=\"situation/{{e.num}}/{{s.ref}}\">{{s.libcourt}}</a><br/>
\t\t\t\t\t{% endif %}
\t\t\t    {% endfor %}
\t\t{% endif %}
\t{% endfor %}
\t</table><br/>
{% endfor %}

    </body>
</html>
", "ptfl/vue_accueil.html.twig", "/Applications/MAMP/htdocs/ptflsio2/templates/ptfl/vue_accueil.html.twig");
    }
}
