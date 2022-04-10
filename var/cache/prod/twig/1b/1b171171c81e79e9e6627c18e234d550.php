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
class __TwigTemplate_85724ccf7c5f81807d8fe28a46f5aaa0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "budget/saisieBudgetaire.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                            <tr>
                                <th class=\"text-center align-middle text-dark\">Géographie</th>
                                <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "geographie", [], "any", false, false, false, 32), 'widget');
        echo "</td>
                                ";
        // line 33
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33))) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "canal", [], "any", false, false, false, 42), 'widget');
        echo "</td>
                                ";
        // line 43
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </table>
                </div>

                <div class=\"table-responsive align-middle text-center\">
                    ";
        // line 53
        if ( !twig_test_empty(($context["faits"] ?? null))) {
            // line 54
            echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr class=\"table text-center align-middle\">
                                    <th scope=\"col\" colspan=\"2\"rowspan=\"2\"></th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "date", [], "any", false, false, false, 58), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["mois"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "date1", [], "any", false, false, false, 59), "M/Y"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\" colspan=\"3\" class=\"table-danger text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["mois"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "date2", [], "any", false, false, false, 60), "M/Y"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["faits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fait"]) {
                // line 80
                echo "                                    ";
                if ( !twig_test_empty(($context["faits"] ?? null))) {
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["variance"] ?? null), "html", null, true);
                    echo " </td>
                                    </tr>

                                    <tr>
                                        <th scope=\"row\" class=\"table-danger\">Revenue </th>
                                        ";
                    // line 125
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual", [], "any", false, false, false, 125) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol", [], "any", false, false, false, 125));
                    // line 126
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue1"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 127
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget", [], "any", false, false, false, 127) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol", [], "any", false, false, false, 127));
                    // line 128
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue2"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 129
                    $context["revenue"] = (($context["revenue1"] ?? null) - ($context["revenue2"] ?? null));
                    // line 130
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue"] ?? null), "html", null, true);
                    echo " </td>
                                        
                                        ";
                    // line 132
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual1", [], "any", false, false, false, 132) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol1", [], "any", false, false, false, 132));
                    // line 133
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue1"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 134
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget1", [], "any", false, false, false, 134) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol1", [], "any", false, false, false, 134));
                    // line 135
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue2"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 136
                    $context["revenue"] = (($context["revenue1"] ?? null) - ($context["revenue2"] ?? null));
                    // line 137
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue"] ?? null), "html", null, true);
                    echo " </td>

                                        ";
                    // line 139
                    $context["revenue1"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "actual2", [], "any", false, false, false, 139) * twig_get_attribute($this->env, $this->source, $context["fait"], "actualVol2", [], "any", false, false, false, 139));
                    // line 140
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue1"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 141
                    $context["revenue2"] = (twig_get_attribute($this->env, $this->source, $context["fait"], "budget2", [], "any", false, false, false, 141) * twig_get_attribute($this->env, $this->source, $context["fait"], "budgetVol2", [], "any", false, false, false, 141));
                    // line 142
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue2"] ?? null), "html", null, true);
                    echo " </td>
                                        ";
                    // line 143
                    $context["revenue"] = (($context["revenue1"] ?? null) - ($context["revenue2"] ?? null));
                    // line 144
                    echo "                                        <td class=\"table-success\">";
                    echo twig_escape_filter($this->env, ($context["revenue"] ?? null), "html", null, true);
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
        return array (  389 => 155,  385 => 153,  380 => 150,  374 => 149,  370 => 147,  363 => 144,  361 => 143,  356 => 142,  354 => 141,  349 => 140,  347 => 139,  341 => 137,  339 => 136,  334 => 135,  332 => 134,  327 => 133,  325 => 132,  319 => 130,  317 => 129,  312 => 128,  310 => 127,  305 => 126,  303 => 125,  294 => 120,  292 => 119,  288 => 118,  284 => 117,  278 => 115,  276 => 114,  272 => 113,  268 => 112,  262 => 110,  260 => 109,  256 => 108,  252 => 107,  243 => 101,  239 => 100,  232 => 97,  230 => 96,  226 => 95,  222 => 94,  216 => 92,  214 => 91,  210 => 90,  206 => 89,  200 => 87,  198 => 86,  194 => 85,  190 => 84,  185 => 82,  182 => 81,  179 => 80,  175 => 79,  172 => 78,  152 => 60,  148 => 59,  144 => 58,  138 => 54,  136 => 53,  128 => 48,  124 => 46,  118 => 44,  116 => 43,  112 => 42,  106 => 38,  102 => 36,  98 => 34,  96 => 33,  92 => 32,  86 => 29,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "budget/saisieBudgetaire.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/budget/saisieBudgetaire.html.twig");
    }
}
