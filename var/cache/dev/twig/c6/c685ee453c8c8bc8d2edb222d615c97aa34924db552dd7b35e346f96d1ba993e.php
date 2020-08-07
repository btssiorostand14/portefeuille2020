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
class __TwigTemplate_33a6b29b9358ca382bb51cc4f5cbfe1712ec7c8811f3e4650593245a2ca333f0 extends Template
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
\t\t<h1>Carnet de bord de ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 14, $this->source); })()), "etudiant", [], "array", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
";
        // line 16
        echo "<table border=1>
";
        // line 17
        $this->displayBlock('tableau', $context, $blocks);
        // line 28
        echo "</table>

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

        echo "Welcome!";
        
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

    // line 17
    public function block_tableau($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableau"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 17, $this->source); })()), "semaine", [], "array", false, false, false, 17), "html", null, true);
        echo "
";
        // line 18
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 18, $this->source); })()), "semaine", [], "array", false, false, false, 18), 0))) {
            // line 19
            echo "\t";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 19, $this->source); })()), "formCarnet", [], "array", false, false, false, 19);
        } else {
            // line 21
            echo "\t";
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["pData"]) || array_key_exists("pData", $context) ? $context["pData"] : (function () { throw new RuntimeError('Variable "pData" does not exist.', 21, $this->source); })()), "formSemaineCarnet", [], "array", false, false, false, 21);
        }
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
        echo "
\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "

";
        
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
        return array (  169 => 25,  165 => 24,  161 => 23,  157 => 21,  153 => 19,  151 => 18,  140 => 17,  128 => 12,  116 => 11,  104 => 8,  91 => 7,  80 => 28,  78 => 17,  75 => 16,  71 => 14,  68 => 13,  65 => 12,  63 => 11,  59 => 9,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" title=\"Portefeuille\" href=\"../style.css\" />
       
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
\t\t<h1>Carnet de bord de {{ pData[\"etudiant\"].nom}}</h1>
{# templates/ptfl/vue_carnet.html.twig #}
<table border=1>
{% block tableau %} {{ pData[\"semaine\"] }}
{% if pData[\"semaine\"]==0 %}
\t{% set form=pData[\"formCarnet\"] %}
{% else %}
\t{% set form=pData[\"formSemaineCarnet\"] %}
{% endif %}
{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

{% endblock %}
</table>

    </body>
</html>
", "ptfl/vue_carnet.html.twig", "/Applications/MAMP/htdocs/ptflsio2/templates/ptfl/vue_carnet.html.twig");
    }
}
