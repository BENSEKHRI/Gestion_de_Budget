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

/* budget/EditSaisieBudgetaire.html.twig */
class __TwigTemplate_e9d19eb4253d29df1c72849bc17108a9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "budget/EditSaisieBudgetaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Work Flow";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                    <h5 class=\"text-center text-uppercase text-primary\">Modification d'une ligne budgétaire</h5>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["faitForm"] ?? null), 'form_start');
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "date", [], "any", false, false, false, 39), "M/Y"), "html", null, true);
        echo "</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["mois"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "date1", [], "any", false, false, false, 40), "M/Y"), "html", null, true);
        echo "</th>
                                <th scope=\"col\" colspan=\"2\" class=\"table-danger text-center\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["mois"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "date2", [], "any", false, false, false, 41), "M/Y"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "geographie", [], "any", false, false, false, 60), 'widget');
        echo "</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "canal", [], "any", false, false, false, 61), 'widget');
        echo "</td>
                                <td rowspan=\"2\" class=\"table-secondary\"> ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "produit", [], "any", false, false, false, 62), 'widget');
        echo "</td>
                                <th scope=\"row\" class=\"table-danger\">Price</th>
                                <td class=\"table-info\"> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actual", [], "any", false, false, false, 64), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budget", [], "any", false, false, false, 65), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actual1", [], "any", false, false, false, 66), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budget1", [], "any", false, false, false, 67), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actual2", [], "any", false, false, false, 68), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budget2", [], "any", false, false, false, 69), 'widget');
        echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"table-danger\">Volume</th>
                                <td class=\"table-info\"> ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actualVol", [], "any", false, false, false, 73), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budgetVol", [], "any", false, false, false, 74), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actualVol1", [], "any", false, false, false, 75), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budgetVol1", [], "any", false, false, false, 76), 'widget');
        echo "</td>
                                <td class=\"table-info\"> ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "actualVol2", [], "any", false, false, false, 77), 'widget');
        echo "</td>
                                <td class=\"table-warning\"> ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["faitForm"] ?? null), "budgetVol2", [], "any", false, false, false, 78), 'widget');
        echo "</td>
                            </tr>
                        </tbody>
                        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["faitForm"] ?? null), 'form_end');
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
    }

    public function getTemplateName()
    {
        return "budget/EditSaisieBudgetaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 81,  192 => 78,  188 => 77,  184 => 76,  180 => 75,  176 => 74,  172 => 73,  165 => 69,  161 => 68,  157 => 67,  153 => 66,  149 => 65,  145 => 64,  140 => 62,  136 => 61,  132 => 60,  110 => 41,  106 => 40,  102 => 39,  96 => 36,  89 => 32,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "budget/EditSaisieBudgetaire.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/budget/EditSaisieBudgetaire.html.twig");
    }
}
