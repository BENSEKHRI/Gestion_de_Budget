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

/* budget/reporting.html.twig */
class __TwigTemplate_7181e73d0af6438ad1b0dbbace6afb8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/reporting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/reporting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "budget/reporting.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Work Flow";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<head>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
</head>


<body>
<!-- Table Start -->
";
        // line 18
        echo twig_include($this->env, $context, "_navbar.html.twig");
        echo "
<div class=\"container-fluid pt-0 px-3\">
    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <h3 class=\"mb-4 text-center text-uppercase\">Rapport général</h3>
                <div class=\"table-responsive col-8 mx-auto\">
                ";
        // line 26
        echo "                    <table class=\"table table-bordered table-hover text-center\">
                        <thead>
                            <tr>
                                <th class=\"col-4 table-success\">Géographie</th>
                                <th class=\"col-4 table-info\">Canal</th>
                                <th class=\"col-4 table-warning\">Produit</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 35, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["fait"]) {
            // line 36
            echo "                            ";
            if ( !twig_test_empty((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 36, $this->source); })()))) {
                // line 37
                echo "                            <tr>
                                <td class=\"col-4 table-success\">";
                // line 38
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fait"], "geographie", [], "any", false, false, false, 38), "getPays", [], "method", false, false, false, 38)), "html", null, true);
                echo "</td>
                                <td class=\"col-4 table-info\">";
                // line 39
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fait"], "canal", [], "any", false, false, false, 39), "getTypeCanal", [], "method", false, false, false, 39)), "html", null, true);
                echo "</td>
                                <td class=\"col-4 table-warning\">";
                // line 40
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fait"], "produit", [], "any", false, false, false, 40), "getNomProduit", [], "method", false, false, false, 40)), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            } else {
                // line 43
                echo "                                <p>Il n'y a aucune ligne dans votre grille budgétaire. </br></p>
                            ";
            }
            // line 45
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "budget/reporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  151 => 45,  147 => 43,  141 => 40,  137 => 39,  133 => 38,  130 => 37,  127 => 36,  123 => 35,  112 => 26,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Work Flow{% endblock %}

{% block body %}


<head>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
</head>


<body>
<!-- Table Start -->
{{ include('_navbar.html.twig') }}
<div class=\"container-fluid pt-0 px-3\">
    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <h3 class=\"mb-4 text-center text-uppercase\">Rapport général</h3>
                <div class=\"table-responsive col-8 mx-auto\">
                {# On boucle sur les lignes du fait #}
                    <table class=\"table table-bordered table-hover text-center\">
                        <thead>
                            <tr>
                                <th class=\"col-4 table-success\">Géographie</th>
                                <th class=\"col-4 table-info\">Canal</th>
                                <th class=\"col-4 table-warning\">Produit</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for fait in faits |sort %}
                            {% if not (faits is empty) %}
                            <tr>
                                <td class=\"col-4 table-success\">{{ fait.geographie.getPays()|capitalize}}</td>
                                <td class=\"col-4 table-info\">{{ fait.canal.getTypeCanal()|capitalize }}</td>
                                <td class=\"col-4 table-warning\">{{ fait.produit.getNomProduit()|capitalize }}</td>
                            </tr>
                            {% else %}
                                <p>Il n'y a aucune ligne dans votre grille budgétaire. </br></p>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
</body>
{% endblock %}
", "budget/reporting.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/budget/reporting.html.twig");
    }
}
