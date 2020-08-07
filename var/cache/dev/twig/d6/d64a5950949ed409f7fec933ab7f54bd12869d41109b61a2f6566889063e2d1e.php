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

/* ptfl/vue_carnet.html.twig */
class __TwigTemplate_eb271e4ae1f97d8e720c83516f4bde82db1bc562264848e190f90d9c82b027de extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ptfl/vue_carnet.html.twig"));

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
\t\t<h1>Carnet de bord stage ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 14, $this->source); })()), "annee", [], "array", false, false, false, 14), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 14, $this->source); })()), "etudiant", [], "array", false, false, false, 14), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 14, $this->source); })()), "etudiant", [], "array", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
";
        // line 16
        echo "
<table><tr bgcolor=\"AABBCC\">
\t<td><a href=\"../";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 18, $this->source); })()), "etudiant", [], "array", false, false, false, 18), "num", [], "any", false, false, false, 18), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 18, $this->source); })()), "annee", [], "array", false, false, false, 18), "html", null, true);
        echo ",0\">Infos Stage</a>
\t<td><a href=\"../";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "etudiant", [], "array", false, false, false, 19), "num", [], "any", false, false, false, 19), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "annee", [], "array", false, false, false, 19), "html", null, true);
        echo ",1\">Semaine 1</a>
\t<td><a href=\"../";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 20, $this->source); })()), "etudiant", [], "array", false, false, false, 20), "num", [], "any", false, false, false, 20), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 20, $this->source); })()), "annee", [], "array", false, false, false, 20), "html", null, true);
        echo ",2\">Semaine 2</a>
\t<td><a href=\"../";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 21, $this->source); })()), "etudiant", [], "array", false, false, false, 21), "num", [], "any", false, false, false, 21), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 21, $this->source); })()), "annee", [], "array", false, false, false, 21), "html", null, true);
        echo ",3\">Semaine 3</a>
\t<td><a href=\"../";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 22, $this->source); })()), "etudiant", [], "array", false, false, false, 22), "num", [], "any", false, false, false, 22), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 22, $this->source); })()), "annee", [], "array", false, false, false, 22), "html", null, true);
        echo ",4\">Semaine 4</a>
\t<td><a href=\"../";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 23, $this->source); })()), "etudiant", [], "array", false, false, false, 23), "num", [], "any", false, false, false, 23), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 23, $this->source); })()), "annee", [], "array", false, false, false, 23), "html", null, true);
        echo ",5\">Semaine 5</a>
";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 24, $this->source); })()), "annee", [], "array", false, false, false, 24), 2))) {
            // line 25
            echo "\t<td><a href=\"../";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 25, $this->source); })()), "etudiant", [], "array", false, false, false, 25), "num", [], "any", false, false, false, 25), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 25, $this->source); })()), "annee", [], "array", false, false, false, 25), "html", null, true);
            echo ",6\">Semaine 6</a>
\t<td><a href=\"../";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 26, $this->source); })()), "etudiant", [], "array", false, false, false, 26), "num", [], "any", false, false, false, 26), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 26, $this->source); })()), "annee", [], "array", false, false, false, 26), "html", null, true);
            echo ",7\">Semaine 7</a>
";
        }
        // line 28
        echo "</table>
";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 29, $this->source); })()), "semaine", [], "array", false, false, false, 29), 0))) {
            // line 30
            echo "\t";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 30, $this->source); })()), "formCarnet", [], "array", false, false, false, 30);
        } else {
            // line 32
            echo "\t";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 32, $this->source); })()), "formSemaineCarnet", [], "array", false, false, false, 32);
        }
        // line 34
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'widget');
        echo "
\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

";
        // line 38
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 38, $this->source); })()), "semaine", [], "array", false, false, false, 38), 0))) {
            // line 39
            echo "\t<br/>
\t<table border=1>
\t\t<tr><th>Jour<th>Durée<th>Description<th>Domaine
\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 42, $this->source); })()), "lesTaches", [], "array", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 43
                echo "\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "jour", [], "any", false, false, false, 43), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "duree", [], "any", false, false, false, 43), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 43), "html", null, true);
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "iddomaine", [], "any", false, false, false, 43), "html", null, true);
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t</table>
";
        }
        // line 47
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
        return "ptfl/vue_carnet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 12,  227 => 11,  215 => 8,  202 => 7,  191 => 47,  187 => 45,  172 => 43,  168 => 42,  163 => 39,  161 => 38,  156 => 36,  152 => 35,  147 => 34,  143 => 32,  139 => 30,  137 => 29,  134 => 28,  127 => 26,  120 => 25,  118 => 24,  112 => 23,  106 => 22,  100 => 21,  94 => 20,  88 => 19,  82 => 18,  78 => 16,  70 => 14,  67 => 13,  64 => 12,  62 => 11,  58 => 9,  56 => 8,  52 => 7,  44 => 1,);
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
\t\t<h1>Carnet de bord stage {{ pData['annee']}} de {{ pData['etudiant'].prenom }} {{ pData['etudiant'].nom}}</h1>
{# templates/ptfl/vue_carnet.html.twig #}

<table><tr bgcolor=\"AABBCC\">
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},0\">Infos Stage</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},1\">Semaine 1</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},2\">Semaine 2</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},3\">Semaine 3</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},4\">Semaine 4</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},5\">Semaine 5</a>
{% if pData['annee']==2 %}
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},6\">Semaine 6</a>
\t<td><a href=\"../{{ pData['etudiant'].num}}/{{pData['annee']}},7\">Semaine 7</a>
{% endif %}
</table>
{% if pData[\"semaine\"]==0 %}
\t{% set form=pData[\"formCarnet\"] %}
{% else %}
\t{% set form=pData[\"formSemaineCarnet\"] %}
{% endif %}
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

{% if pData[\"semaine\"]>0 %}
\t<br/>
\t<table border=1>
\t\t<tr><th>Jour<th>Durée<th>Description<th>Domaine
\t{% for tache in pData[\"lesTaches\"] %}
\t\t<tr><td>{{ tache.jour }}<td>{{ tache.duree }}<td>{{ tache.description }}<td>{{ tache.iddomaine }}
\t{% endfor %}
\t</table>
{% endif %}


    </body>
</html>
", "ptfl/vue_carnet.html.twig", "/Applications/MAMP/htdocs/ptflsio2/templates/ptfl/vue_carnet.html.twig");
    }
}
