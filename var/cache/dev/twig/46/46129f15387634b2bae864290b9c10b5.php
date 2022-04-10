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

/* budget/NewSaisieBudgetaire.html.twig */
class __TwigTemplate_e7989431141cd320f9cbbcb941958c2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/NewSaisieBudgetaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/NewSaisieBudgetaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "budget/NewSaisieBudgetaire.html.twig", 1);
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <div class=\"mb-3\">
                    <h3 class=\"text-center text-uppercase\">Saisie Budgétaire</h3>
                </div>
                <div class=\"mb-4\">
                    <h5 class=\"text-center text-uppercase text-primary\">Ajout d'une ligne budgétaire</h5>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
                        <thead>
                            <tr class=\"table align-middle\">
                                <th scope=\"col\" colspan=\"4\" class=\"text-center align-middle\">
                                     <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
        echo "\" class=\"btn btn-outline-dark rounded-pill\"><i class=\"fa fa-solid bi-arrow-left-circle\"></i></a>
                                    <button type=\"submit\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-check\"></i></button>
                                </th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39), "date", [], "any", false, false, false, 39), "M/Y"), "html", null, true);
        echo "</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "date1", [], "any", false, false, false, 40), "M/Y"), "html", null, true);
        echo "</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 41, $this->source); })()), 0, [], "array", false, false, false, 41), "date2", [], "any", false, false, false, 41), "M/Y"), "html", null, true);
        echo "</th>
                                
                            </tr>

                            <tr class= \"table text-center\">
                                <th scope=\"col\" class=\"table-danger\">Géographie</th>
                                <th scope=\"col\" class=\"table-danger\">Canal</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger\">Produit</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                            </tr>
                        </thead>
                        <tbody class=\"align-middle\">
                            
                            <tr>
                                <td rowspan=\"2\" class=\"table-secondary\"> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 60, $this->source); })()), "geographie", [], "any", false, false, false, 60), 'widget');
        echo "</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 61, $this->source); })()), "canal", [], "any", false, false, false, 61), 'widget');
        echo "</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 62, $this->source); })()), "produit", [], "any", false, false, false, 62), 'widget');
        echo "</td>
                                <th scope=\"row\" class=\"table-danger\">Price</th>
                                <td class=\"table-info\"> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 64, $this->source); })()), "actual", [], "any", false, false, false, 64), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 65, $this->source); })()), "budget", [], "any", false, false, false, 65), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 66, $this->source); })()), "actual1", [], "any", false, false, false, 66), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 67, $this->source); })()), "budget1", [], "any", false, false, false, 67), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 68, $this->source); })()), "actual2", [], "any", false, false, false, 68), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 69, $this->source); })()), "budget2", [], "any", false, false, false, 69), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"table-danger\">Volume</th>
                                <td class=\"table-info\"> ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 73, $this->source); })()), "actualVol", [], "any", false, false, false, 73), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 74, $this->source); })()), "budgetVol", [], "any", false, false, false, 74), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 75, $this->source); })()), "actualVol1", [], "any", false, false, false, 75), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 76, $this->source); })()), "budgetVol1", [], "any", false, false, false, 76), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 77, $this->source); })()), "actualVol2", [], "any", false, false, false, 77), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 78, $this->source); })()), "budgetVol2", [], "any", false, false, false, 78), 'widget');
        echo "</td>
                            </tr>
                        </tbody>
                        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["faitForm"]) || array_key_exists("faitForm", $context) ? $context["faitForm"] : (function () { throw new RuntimeError('Variable "faitForm" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
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
        return "budget/NewSaisieBudgetaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 81,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  202 => 73,  195 => 69,  191 => 68,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  170 => 62,  166 => 61,  162 => 60,  140 => 41,  136 => 40,  132 => 39,  126 => 36,  119 => 32,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"bg-light rounded h-100 p-4\">
                <div class=\"mb-3\">
                    <h3 class=\"text-center text-uppercase\">Saisie Budgétaire</h3>
                </div>
                <div class=\"mb-4\">
                    <h5 class=\"text-center text-uppercase text-primary\">Ajout d'une ligne budgétaire</h5>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        {{ form_start(faitForm) }}
                        <thead>
                            <tr class=\"table align-middle\">
                                <th scope=\"col\" colspan=\"4\" class=\"text-center align-middle\">
                                     <a href=\"{{ path('app_budget_saisie_budgetaire') }}\" class=\"btn btn-outline-dark rounded-pill\"><i class=\"fa fa-solid bi-arrow-left-circle\"></i></a>
                                    <button type=\"submit\" class=\"btn btn-outline-success rounded-pill\"><i class=\"fa fa-solid fa-check\"></i></button>
                                </th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">{{ mois[0].date|date('M/Y') }}</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">{{ mois[0].date1|date('M/Y') }}</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">{{ mois[0].date2|date('M/Y') }}</th>
                                
                            </tr>

                            <tr class= \"table text-center\">
                                <th scope=\"col\" class=\"table-danger\">Géographie</th>
                                <th scope=\"col\" class=\"table-danger\">Canal</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger\">Produit</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                                <th scope=\"col\" class=\"table-danger\">Actuel</th>
                                <th scope=\"col\" class=\"table-danger\">Budget</th>
                            </tr>
                        </thead>
                        <tbody class=\"align-middle\">
                            
                            <tr>
                                <td rowspan=\"2\" class=\"table-secondary\"> {{ form_widget(faitForm.geographie) }}</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> {{ form_widget(faitForm.canal) }}</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> {{ form_widget(faitForm.produit) }}</td>
                                <th scope=\"row\" class=\"table-danger\">Price</th>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actual) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budget) }}</td>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actual1) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budget1) }}</td>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actual2) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budget2) }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"table-danger\">Volume</th>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actualVol) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budgetVol) }}</td>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actualVol1) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budgetVol1) }}</td>
                                <td class=\"table-info\"> {{ form_widget(faitForm.actualVol2) }}</td>
                                <td class=\"table-warning\"> {{ form_widget(faitForm.budgetVol2) }}</td>
                            </tr>
                        </tbody>
                        {{ form_end(faitForm) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
</body>
{% endblock %}

", "budget/NewSaisieBudgetaire.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/budget/NewSaisieBudgetaire.html.twig");
    }
}
