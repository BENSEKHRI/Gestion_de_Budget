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
                                <td class =\"align-middle\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>

                            </tr>
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Canal</th>
                                <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "canal", [], "any", false, false, false, 38), 'widget');
        echo "</td>
                                <td><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_nouvelle_ligne");
        echo "\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-plus\"></i></a></td>
                            </tr>
                            
                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
                    </table>
                </div>

                <div class=\"table-responsive align-middle text-center\">
                    ";
        // line 47
        if ( !twig_test_empty((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 47, $this->source); })()))) {
            // line 48
            echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr class=\"table text-center align-middle\">
                                    <th scope=\"col\" colspan=\"2\"rowspan=\"2\"></th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 52, $this->source); })()), 0, [], "array", false, false, false, 52), "date", [], "any", false, false, false, 52), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 53, $this->source); })()), 0, [], "array", false, false, false, 53), "date1", [], "any", false, false, false, 53), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "date2", [], "any", false, false, false, 54), "M/Y"), "html", null, true);
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
            // line 72
            echo "
                                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fait"]) {
                // line 74
                echo "                                    ";
                if ( !twig_test_empty((isset($context["faits"]) || array_key_exists("faits", $context) ? $context["faits"] : (function () { throw new RuntimeError('Variable "faits" does not exist.', 74, $this->source); })()))) {
                    // line 75
                    echo "                                    <tr>
                                        <th scope=\"row\" rowspan=\"3\" class=\"table-danger\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fait"], "produit", [], "any", false, false, false, 76), "getNomProduit", [], "method", false, false, false, 76)), "html", null, true);
                    echo "</th>
                                        <th scope=\"row\" class=\"table-danger\">Price </th>
                                        <td class=\"table-info\">";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 78), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 79), "html", null, true);
                    echo " </td>
                                        ";
                    // line 80
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 80) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 80));
                    // line 81
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        <td class=\"table-info\">";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 83), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 84), "html", null, true);
                    echo " </td>
                                        ";
                    // line 85
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 85) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 85));
                    // line 86
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 86, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td class=\"table-info\">";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 88), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 89), "html", null, true);
                    echo " </td>
                                        ";
                    // line 90
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 90) - twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 90));
                    // line 91
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 91, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td rowspan=\"3\"> 
                                            <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_modifier_ligne", ["id" => twig_get_attribute($this->env, $this->source, $context["fait"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-sm-square btn-outline-primary\"><i class=\"fa fa-solid fa-wrench\"></i></a> 
                                            <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_supprimer_ligne", ["id" => twig_get_attribute($this->env, $this->source, $context["fait"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                    echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette ligne ?');\" class=\"btn btn-sm btn-sm-square btn-outline-danger\"><i class=\"fa fa-solid fa-minus\"></i></a>                                             
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Volume</th>
                                        <td class=\"table-info\">";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 101), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 102), "html", null, true);
                    echo " </td>
                                        ";
                    // line 103
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 103) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 103));
                    // line 104
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 104, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        <td class=\"table-info\">";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 106), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 107), "html", null, true);
                    echo " </td>
                                        ";
                    // line 108
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 108) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 108));
                    // line 109
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 109, $this->source); })()), "html", null, true);
                    echo " </td>

                                        <td class=\"table-info\">";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 111), "html", null, true);
                    echo " </td>
                                        <td class=\"table-warning\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 112), "html", null, true);
                    echo " </td>
                                        ";
                    // line 113
                    $context["variance"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 113) - twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 113));
                    // line 114
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["variance"]) || array_key_exists("variance", $context) ? $context["variance"] : (function () { throw new RuntimeError('Variable "variance" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo " </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Revenue </th>
                                        ";
                    // line 119
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 119) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 119));
                    // line 120
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 120, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 121
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 121) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 121));
                    // line 122
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 122, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 123
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 123, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 123, $this->source); })()));
                    // line 124
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 124, $this->source); })()), "html", null, true);
                    echo " </td>
                                        
                                        ";
                    // line 126
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 126) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 126));
                    // line 127
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 127, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 128
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 128) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 128));
                    // line 129
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 129, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 130
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 130, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 130, $this->source); })()));
                    // line 131
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 131, $this->source); })()), "html", null, true);
                    echo " </td>

                                        ";
                    // line 133
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 133) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 133));
                    // line 134
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 134, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 135
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 135) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 135));
                    // line 136
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 136, $this->source); })()), "html", null, true);
                    echo " </td>
                                        ";
                    // line 137
                    $context["revenue"] = ((isset($context["revenue1"]) || array_key_exists("revenue1", $context) ? $context["revenue1"] : (function () { throw new RuntimeError('Variable "revenue1" does not exist.', 137, $this->source); })()) - (isset($context["revenue2"]) || array_key_exists("revenue2", $context) ? $context["revenue2"] : (function () { throw new RuntimeError('Variable "revenue2" does not exist.', 137, $this->source); })()));
                    // line 138
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 138, $this->source); })()), "html", null, true);
                    echo " </td>
                                    </tr>
                                ";
                } else {
                    // line 141
                    echo "                                    Il n'y a aucune ligne dans votre grille budgétaire. 
                                ";
                }
                // line 143
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 147
            echo "                        <p>Il n'y a aucune ligne budgétaire pour ce tri.</p> 
                    ";
        }
        // line 149
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
        return array (  402 => 149,  398 => 147,  393 => 144,  387 => 143,  383 => 141,  376 => 138,  374 => 137,  369 => 136,  367 => 135,  362 => 134,  360 => 133,  354 => 131,  352 => 130,  347 => 129,  345 => 128,  340 => 127,  338 => 126,  332 => 124,  330 => 123,  325 => 122,  323 => 121,  318 => 120,  316 => 119,  307 => 114,  305 => 113,  301 => 112,  297 => 111,  291 => 109,  289 => 108,  285 => 107,  281 => 106,  275 => 104,  273 => 103,  269 => 102,  265 => 101,  256 => 95,  252 => 94,  245 => 91,  243 => 90,  239 => 89,  235 => 88,  229 => 86,  227 => 85,  223 => 84,  219 => 83,  213 => 81,  211 => 80,  207 => 79,  203 => 78,  198 => 76,  195 => 75,  192 => 74,  188 => 73,  185 => 72,  165 => 54,  161 => 53,  157 => 52,  151 => 48,  149 => 47,  141 => 42,  135 => 39,  131 => 38,  122 => 32,  116 => 29,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                <td class =\"align-middle\"><button type=\"submit\" class=\"btn btn-outline-warning rounded-pill\"><i class=\"bi bi-search\"></i></button></td>

                            </tr>
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Canal</th>
                                <td>{{ form_widget(form.canal) }}</td>
                                <td><a href=\"{{ path('app_budget_nouvelle_ligne')}}\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-plus\"></i></a></td>
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
