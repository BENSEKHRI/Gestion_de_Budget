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

/* budget/saisieBudgetaire.html.twig */
class __TwigTemplate_6f3fee5e7cae12120c5793fdad8dcf7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/saisieBudgetaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/saisieBudgetaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "budget/saisieBudgetaire.html.twig", 1);
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
<div class=\"container-fluid\">
    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <div class=\"mb-3\">
                    <h3 class=\"text-center text-uppercase\">Saisie Budgétaire</h3>
                </div>

                <div class=\"table-responsive col-4 mx-auto\">
                    <table class=\"table table-bordered\">
                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Géographie</th>
                                <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "geographie", [], "any", false, false, false, 32), 'widget');
        echo "</td>
                                ";
        // line 33
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33))) {
            // line 34
            echo "                                    <td class =\"align-middle\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>
                                ";
        } else {
            // line 36
            echo "                                    <td class =\"align-middle\" rowspan=\"2\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>
                                ";
        }
        // line 38
        echo "
                            </tr>
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Canal</th>
                                <td>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "canal", [], "any", false, false, false, 42), 'widget');
        echo "</td>
                                ";
        // line 43
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
            // line 44
            echo "                                    <td><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_nouvelle_ligne");
            echo "\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-plus\"></i></a></td>
                                ";
        }
        // line 46
        echo "                            </tr>
                            
                        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
                    </table>
                </div>

                <div class=\"table-responsive align-middle text-center\">
                    ";
        // line 53
        if ( !twig_test_empty((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr class=\"table text-center align-middle\">
                                    <th scope=\"col\" colspan=\"2\"rowspan=\"2\"></th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "date", [], "any", false, false, false, 58), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 59, $this->source); })()), 0, [], "array", false, false, false, 59), "date1", [], "any", false, false, false, 59), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 60, $this->source); })()), 0, [], "array", false, false, false, 60), "date2", [], "any", false, false, false, 60), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"1\"rowspan=\"2\">ACTION</th>
                                </tr>

                                <tr class= \"table\">
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                </tr>
                            </thead>
                            <tbody class=\"text-center align-middle\">
                                ";
            // line 78
            echo "
                                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fait"]) {
                // line 80
                echo "                                    ";
                if ( !twig_test_empty((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 80, $this->source); })()))) {
                    // line 81
                    echo "                                    <tr>
                                        <th scope=\"row\" rowspan=\"3\" class=\"table-danger\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fait"], "produit", [], "any", false, false, false, 82), "getNomProduit", [], "method", false, false, false, 82)), "html", null, true);
                    echo "</th>
                                        <th scope=\"row\" class=\"table-danger\">Price </th>
                                        <td class=\"table-info\">";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 84), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 85), "html", null, true);
                    echo " </td>
                                        ";
                    // line 86
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 86) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 86));
                    // line 87
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 87, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        <td class=\"table-info\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 89), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 90), "html", null, true);
                    echo " </td>
                                        ";
                    // line 91
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 91) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 91));
                    // line 92
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 92, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td class=\"table-info\">";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 94), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 95), "html", null, true);
                    echo " </td>
                                        ";
                    // line 96
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 96) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 96));
                    // line 97
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 97, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td rowspan=\"3\"> 
                                            <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_modifier_ligne", ["id" => twig_get_attribute($this->env, $this->source, $context["fait"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-sm-square btn-outline-primary\"><i class=\"fa fa-solid fa-wrench\"></i></a> 
                                            <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_supprimer_ligne", ["id" => twig_get_attribute($this->env, $this->source, $context["fait"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                    echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette ligne ?');\" class=\"btn btn-sm btn-sm-square btn-outline-danger\"><i class=\"fa fa-solid fa-minus\"></i></a>                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Volume</th>
                                        <td class=\"table-info\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 107), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 108), "html", null, true);
                    echo " </td>
                                        ";
                    // line 109
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 109) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 109));
                    // line 110
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 110, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        <td class=\"table-info\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 112), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 113), "html", null, true);
                    echo " </td>
                                        ";
                    // line 114
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 114) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 114));
                    // line 115
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 115, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td class=\"table-info\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 117), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 118), "html", null, true);
                    echo " </td>
                                        ";
                    // line 119
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 119) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 119));
                    // line 120
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 120, $this->source); })()), "html", null, true);
                    echo " </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Revenue </th>
                                        ";
                    // line 125
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 125) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 125));
                    // line 126
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 126, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 127
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 127) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 127));
                    // line 128
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 128, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 129
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 129, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 129, $this->source); })()));
                    // line 130
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 130, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        ";
                    // line 132
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 132) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 132));
                    // line 133
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 133, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 134
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 134) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 134));
                    // line 135
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 135, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 136
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 136, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 136, $this->source); })()));
                    // line 137
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 137, $this->source); })()), "html", null, true);
                    echo " </td>

                                        ";
                    // line 139
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 139) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 139));
                    // line 140
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 140, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 141
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 141) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 141));
                    // line 142
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 142, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 143
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 143, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 143, $this->source); })()));
                    // line 144
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 144, $this->source); })()), "html", null, true);
                    echo " </td>
                                    </tr>
                                ";
                } else {
                    // line 147
                    echo "                                    Il n'y a aucune ligne dans votre grille budgétaire. 
                                ";
                }
                // line 149
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 153
            echo "                        <p>Il n'y a aucune ligne budgétaire pour ce tri.</p> 
                    ";
        }
        // line 155
        echo "                </div>
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
        return "budget/saisieBudgetaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 155,  415 => 153,  410 => 150,  404 => 149,  400 => 147,  393 => 144,  391 => 143,  386 => 142,  384 => 141,  379 => 140,  377 => 139,  371 => 137,  369 => 136,  364 => 135,  362 => 134,  357 => 133,  355 => 132,  349 => 130,  347 => 129,  342 => 128,  340 => 127,  335 => 126,  333 => 125,  324 => 120,  322 => 119,  318 => 118,  314 => 117,  308 => 115,  306 => 114,  302 => 113,  298 => 112,  292 => 110,  290 => 109,  286 => 108,  282 => 107,  273 => 101,  269 => 100,  262 => 97,  260 => 96,  256 => 95,  252 => 94,  246 => 92,  244 => 91,  240 => 90,  236 => 89,  230 => 87,  228 => 86,  224 => 85,  220 => 84,  215 => 82,  212 => 81,  209 => 80,  205 => 79,  202 => 78,  182 => 60,  178 => 59,  174 => 58,  168 => 54,  166 => 53,  158 => 48,  154 => 46,  148 => 44,  146 => 43,  142 => 42,  136 => 38,  132 => 36,  128 => 34,  126 => 33,  122 => 32,  116 => 29,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
<div class=\"container-fluid\">
    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <div class=\"mb-3\">
                    <h3 class=\"text-center text-uppercase\">Saisie Budgétaire</h3>
                </div>

                <div class=\"table-responsive col-4 mx-auto\">
                    <table class=\"table table-bordered\">
                        {{form_start(form)}}
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Géographie</th>
                                <td>{{ form_widget(form.geographie) }}</td>
                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                    <td class =\"align-middle\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>
                                {% else %}
                                    <td class =\"align-middle\" rowspan=\"2\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>
                                {% endif %}

                            </tr>
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Canal</th>
                                <td>{{ form_widget(form.canal) }}</td>
                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                    <td><a href=\"{{ path('app_budget_nouvelle_ligne')}}\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-plus\"></i></a></td>
                                {% endif %}
                            </tr>
                            
                        {{form_end(form)}}
                    </table>
                </div>

                <div class=\"table-responsive align-middle text-center\">
                    {% if not (faits is empty) %}
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr class=\"table text-center align-middle\">
                                    <th scope=\"col\" colspan=\"2\"rowspan=\"2\"></th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">{{ mois[0].date|date('M/Y') }}</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">{{ mois[0].date1|date('M/Y') }}</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">{{ mois[0].date2|date('M/Y') }}</th>
                                    <th scope=\"col\" colspan=\"1\"rowspan=\"2\">ACTION</th>
                                </tr>

                                <tr class= \"table\">
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                    <th scope=\"col\" class=\"table-danger\">Actual</th>
                                    <th scope=\"col\" class=\"table-danger\">Budget</th>
                                    <th scope=\"col\" class=\"table-danger\">Variance</th>
                                </tr>
                            </thead>
                            <tbody class=\"text-center align-middle\">
                                {# On boucle sur les lignes des faits #}

                                {% for fait in faits %}
                                    {% if not (faits is empty) %}
                                    <tr>
                                        <th scope=\"row\" rowspan=\"3\" class=\"table-danger\">{{ fait.produit.getNomProduit()|capitalize }}</th>
                                        <th scope=\"row\" class=\"table-danger\">Price </th>
                                        <td class=\"table-info\">{{ fait.actual }} </td>
                                        <td class=\"table-warning\">{{ fait.budget }} </td>
                                        {% set variance = fait.actual-fait.budget %}
                                        <td class=\"table-success\">{{ variance }} </td>
                                        
                                        <td class=\"table-info\">{{ fait.actual1 }} </td>
                                        <td class=\"table-warning\">{{ fait.budget1 }} </td>
                                        {% set variance = fait.actual1-fait.budget1 %}
                                        <td class=\"table-success\">{{ variance }} </td>

                                        <td class=\"table-info\">{{ fait.actual2 }} </td>
                                        <td class=\"table-warning\">{{ fait.budget2 }} </td>
                                        {% set variance = fait.actual2-fait.budget2 %}
                                        <td class=\"table-success\">{{ variance }} </td>

                                        <td rowspan=\"3\"> 
                                            <a href=\"{{ path('app_budget_modifier_ligne', {'id':fait.id}) }}\" class=\"btn btn-sm btn-sm-square btn-outline-primary\"><i class=\"fa fa-solid fa-wrench\"></i></a> 
                                            <a href=\"{{ path('app_budget_supprimer_ligne', {'id':fait.id}) }}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette ligne ?');\" class=\"btn btn-sm btn-sm-square btn-outline-danger\"><i class=\"fa fa-solid fa-minus\"></i></a>                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Volume</th>
                                        <td class=\"table-info\">{{ fait.actualVol }} </td>
                                        <td class=\"table-warning\">{{ fait.budgetVol }} </td>
                                        {% set variance = fait.actualVol-fait.budgetVol %}
                                        <td class=\"table-success\">{{ variance }} </td>
                                        
                                        <td class=\"table-info\">{{ fait.actualVol1 }} </td>
                                        <td class=\"table-warning\">{{ fait.budgetVol1 }} </td>
                                        {% set variance = fait.actualVol1-fait.budgetVol1 %}
                                        <td class=\"table-success\">{{ variance }} </td>

                                        <td class=\"table-info\">{{ fait.actualVol2 }} </td>
                                        <td class=\"table-warning\">{{ fait.budgetVol2 }} </td>
                                        {% set variance = fait.actualVol2-fait.budgetVol2 %}
                                        <td class=\"table-success\">{{ variance }} </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Revenue </th>
                                        {% set revenue1 = fait.actual*fait.actualVol %}
                                        <td class=\"table-success\">{{ revenue1 }} </td>
                                        {% set revenue2 = fait.budget*fait.budgetVol %}
                                        <td class=\"table-success\">{{ revenue2 }} </td>
                                        {% set revenue = revenue1-revenue2 %}
                                        <td class=\"table-success\">{{ revenue }} </td>
                                        
                                        {% set revenue1 = fait.actual1*fait.actualVol1 %}
                                        <td class=\"table-success\">{{ revenue1 }} </td>
                                        {% set revenue2 = fait.budget1*fait.budgetVol1 %}
                                        <td class=\"table-success\">{{ revenue2 }} </td>
                                        {% set revenue = revenue1-revenue2 %}
                                        <td class=\"table-success\">{{ revenue }} </td>

                                        {% set revenue1 = fait.actual2*fait.actualVol2 %}
                                        <td class=\"table-success\">{{ revenue1 }} </td>
                                        {% set revenue2 = fait.budget2*fait.budgetVol2 %}
                                        <td class=\"table-success\">{{ revenue2 }} </td>
                                        {% set revenue = revenue1-revenue2 %}
                                        <td class=\"table-success\">{{ revenue }} </td>
                                    </tr>
                                {% else %}
                                    Il n'y a aucune ligne dans votre grille budgétaire. 
                                {% endif %}
                                {% endfor %}
                            </tbody>
                        </table>
                    {% else %}
                        <p>Il n'y a aucune ligne budgétaire pour ce tri.</p> 
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
</body>
{% endblock %}
", "budget/saisieBudgetaire.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/budget/saisieBudgetaire.html.twig");
    }
}
