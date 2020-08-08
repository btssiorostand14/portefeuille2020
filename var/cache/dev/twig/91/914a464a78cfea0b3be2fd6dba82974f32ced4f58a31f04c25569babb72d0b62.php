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

/* ptfl/vue_situation.html.twig */
class __TwigTemplate_50f753071ed40c1f98679f733015aea9d87ebb119e0cab345d916c6402f05c27 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ptfl/vue_situation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" title=\"Portefeuille\" href=\"../style.css\" />
       
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "\t\t
\t\t<h1>Situation :</h1>
\t\t<h2> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 15, $this->source); })()), "situation", [], "array", false, false, false, 15), "libcourt", [], "any", false, false, false, 15), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 15, $this->source); })()), "etudiant", [], "array", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 15, $this->source); })()), "etudiant", [], "array", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
";
        // line 17
        echo "<table><tr bgcolor=\"AABBCC\">
\t<td><a href=\"../";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 18, $this->source); })()), "etudiant", [], "array", false, false, false, 18), "num", [], "any", false, false, false, 18), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 18, $this->source); })()), "situation", [], "array", false, false, false, 18), "ref", [], "any", false, false, false, 18), "html", null, true);
        echo ",0\">Description</a>
\t<td><a href=\"../";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "etudiant", [], "array", false, false, false, 19), "num", [], "any", false, false, false, 19), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "situation", [], "array", false, false, false, 19), "ref", [], "any", false, false, false, 19), "html", null, true);
        echo ",1\">Activités</a>
\t<td><a href=\"../";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 20, $this->source); })()), "etudiant", [], "array", false, false, false, 20), "num", [], "any", false, false, false, 20), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 20, $this->source); })()), "situation", [], "array", false, false, false, 20), "ref", [], "any", false, false, false, 20), "html", null, true);
        echo ",2\">Reformulations</a>
\t<td><a href=\"../";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 21, $this->source); })()), "etudiant", [], "array", false, false, false, 21), "num", [], "any", false, false, false, 21), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 21, $this->source); })()), "situation", [], "array", false, false, false, 21), "ref", [], "any", false, false, false, 21), "html", null, true);
        echo ",3\">Productions</a>
\t<td><a href=\"../";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 22, $this->source); })()), "etudiant", [], "array", false, false, false, 22), "num", [], "any", false, false, false, 22), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 22, $this->source); })()), "situation", [], "array", false, false, false, 22), "ref", [], "any", false, false, false, 22), "html", null, true);
        echo ",4\">Commentaires</a>
  
</table>
\t";
        // line 25
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 25, $this->source); })()), "onglet", [], "array", false, false, false, 25), 0))) {
            // line 26
            echo "\t\t";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 26, $this->source); })()), "form", [], "array", false, false, false, 26);
            // line 27
            echo "\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
            echo "
\t\t";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'widget');
            echo "
\t\t";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
            echo "
\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 30, $this->source); })()), "onglet", [], "array", false, false, false, 30), 1))) {
            // line 31
            echo "\t\t<table><th>Code<th>Domaine<th>Nomenclature<th>libelle
\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 32, $this->source); })()), "activites", [], "array", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 33
                echo "\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "iddomaine", [], "any", false, false, false, 33), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nomenclature", [], "any", false, false, false, 33), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "libelle", [], "any", false, false, false, 33), "html", null, true);
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</table>
\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 36, $this->source); })()), "onglet", [], "array", false, false, false, 36), 2))) {
            // line 37
            echo "\t\t<table><th>CodeActivite<th>Situation<th>Reformulation
\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 38, $this->source); })()), "activites", [], "array", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 39
                echo "\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "idactivite", [], "any", false, false, false, 39), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "refsituation", [], "any", false, false, false, 39), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "commentaire", [], "any", false, false, false, 39), "html", null, true);
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</table>
\t";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 42, $this->source); })()), "onglet", [], "array", false, false, false, 42), 3))) {
            // line 43
            echo "\t\t<table><th>Code<th>Situation<th>Désignation<th>Lien
\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 44, $this->source); })()), "productions", [], "array", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 45
                echo "\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "numero", [], "any", false, false, false, 45), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "refsituation", [], "any", false, false, false, 45), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "designation", [], "any", false, false, false, 45), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "adresse", [], "any", false, false, false, 45), "html", null, true);
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t</table>
\t";
        } else {
            // line 49
            echo "\t\t<table><th>Code<th>Situation<th>Prof<th>Commentaire<th>Date
\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 50, $this->source); })()), "commentaires", [], "array", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 51
                echo "\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "numero", [], "any", false, false, false, 51), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "refsituation", [], "any", false, false, false, 51), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "numprofesseur", [], "any", false, false, false, 51), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "commentaire", [], "any", false, false, false, 51), "html", null, true);
                echo "<td>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t</table>
\t";
        }
        // line 55
        echo "

    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet de bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ptfl/vue_situation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 12,  274 => 11,  262 => 8,  249 => 7,  238 => 55,  234 => 53,  219 => 51,  215 => 50,  212 => 49,  208 => 47,  193 => 45,  189 => 44,  186 => 43,  184 => 42,  181 => 41,  168 => 39,  164 => 38,  161 => 37,  159 => 36,  156 => 35,  141 => 33,  137 => 32,  134 => 31,  132 => 30,  128 => 29,  124 => 28,  119 => 27,  116 => 26,  114 => 25,  106 => 22,  100 => 21,  94 => 20,  88 => 19,  82 => 18,  79 => 17,  71 => 15,  67 => 13,  64 => 12,  62 => 11,  58 => 9,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" title=\"Portefeuille\" href=\"../style.css\" />
       
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Carnet de bord{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
\t\t
\t\t<h1>Situation :</h1>
\t\t<h2> {{ pData[\"situation\"].libcourt }} de {{ pData[\"etudiant\"].prenom }} {{ pData[\"etudiant\"].nom}}</h2>
{# templates/ptfl/vue_situation.html.twig #}
<table><tr bgcolor=\"AABBCC\">
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['situation'].ref}},0\">Description</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['situation'].ref}},1\">Activités</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['situation'].ref}},2\">Reformulations</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['situation'].ref}},3\">Productions</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['situation'].ref}},4\">Commentaires</a>
  
</table>
\t{% if pData[\"onglet\"]==0 %}
\t\t{% set form = pData[\"form\"] %}
\t\t{{ form_start(form) }}
\t\t{{ form_widget(form) }}
\t\t{{ form_end(form) }}
\t{% elseif pData[\"onglet\"]==1 %}
\t\t<table><th>Code<th>Domaine<th>Nomenclature<th>libelle
\t\t\t{% for a in pData[\"activites\"]%}
\t\t\t\t<tr><td>{{a.id}}<td>{{a.iddomaine}}<td>{{a.nomenclature}}<td>{{a.libelle}}
\t\t\t{% endfor %}
\t\t</table>
\t{% elseif pData[\"onglet\"]==2 %}
\t\t<table><th>CodeActivite<th>Situation<th>Reformulation
\t\t\t{% for a in pData[\"activites\"]%}
\t\t\t\t<tr><td>{{a.idactivite}}<td>{{a.refsituation}}<td>{{a.commentaire}}
\t\t\t{% endfor %}
\t\t</table>
\t{% elseif pData[\"onglet\"]==3 %}
\t\t<table><th>Code<th>Situation<th>Désignation<th>Lien
\t\t\t{% for p in pData[\"productions\"]%}
\t\t\t\t<tr><td>{{p.numero}}<td>{{p.refsituation}}<td>{{p.designation}}<td>{{p.adresse}}
\t\t\t{% endfor %}
\t\t</table>
\t{% else %}
\t\t<table><th>Code<th>Situation<th>Prof<th>Commentaire<th>Date
\t\t\t{% for c in pData[\"commentaires\"]%}
\t\t\t\t<tr><td>{{c.numero}}<td>{{c.refsituation}}<td>{{c.numprofesseur}}<td>{{c.commentaire}}<td>
\t\t\t{% endfor %}
\t\t</table>
\t{% endif %}


    </body>
</html>
", "ptfl/vue_situation.html.twig", "/Applications/MAMP/htdocs/ptflsio2/templates/ptfl/vue_situation.html.twig");
    }
}
