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

/* _navbar.html.twig */
class __TwigTemplate_4aa1a2797874dfa6150a82c9b170be26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "_navbar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class=\"sidebar pe-4 pb-3\">
        <nav class=\"navbar bg-light navbar-light\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"navbar-brand mx-4 mb-3\">
                <h3 class=\"text-primary\"><i class=\"fa fa-solid fa-chart-pie me-2\"></i>BudgIX</h3>
            </a>
            <div class=\"d-flex align-items-center ms-4 mb-4 \">
                <div class=\"position-relative\">
                    <i class=\"fa fa-user me-2\"></i>
                    <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                </div>
                <div class=\"ms-3\">
                    <h6 class=\"mb-0\">";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26)), "html", null, true);
        echo "</h6>
                    ";
        // line 27
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "roles", [], "any", false, false, false, 27))) {
            // line 28
            echo "                        <span>Administrateur</span>
                    ";
        } else {
            // line 30
            echo "                        <span>Utilisateur</span>
                    ";
        }
        // line 32
        echo "                </div>
            </div>
            <div class=\"navbar-nav w-100\">

                ";
        // line 36
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["app"] ?? null), "request", [], "any", false, false, false, 37), "attributes", [], "any", false, false, false, 37), "get", [0 => "_route_params"], "method", false, false, false, 37));
        // line 38
        echo "

                ";
        // line 40
        if ((($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home"))) {
            // line 41
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Tableau de bord</a>
                ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\" class=\"nav-item nav-link\"><i class=\"fa fa-tachometer-alt me-2\"></i>Tableau de bord</a>
                ";
        }
        // line 45
        echo "                
                ";
        // line 46
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "roles", [], "any", false, false, false, 46))) {
            // line 47
            echo "                    ";
            if (((($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire")) || (($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_choix_mois", ["id" => 1])))) {
                // line 48
                echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-table me-2\"></i>Saisie Budgétaire</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                
                                ";
                // line 52
                if ((($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire"))) {
                    // line 53
                    echo "                                    <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_choix_mois", ["id" => 1]);
                    echo "\" class=\"dropdown-item text-center\">Choix des mois</a>
                                    <a href=\"";
                    // line 54
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                    echo "\" class=\"dropdown-item active\">Grille budgétaire</a>
                                ";
                } elseif ((                // line 55
($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_choix_mois", ["id" => 1]))) {
                    // line 56
                    echo "                                    <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_choix_mois", ["id" => 1]);
                    echo "\" class=\"dropdown-item active\">Choix des mois</a>
                                    <a href=\"";
                    // line 57
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                    echo "\" class=\"dropdown-item text-center\">Grille budgétaire</a>
                                ";
                }
                // line 59
                echo "                            </div>
                        </div>
                    ";
            } else {
                // line 62
                echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-table me-2\"></i>Saisie Budgétaire</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_choix_mois", ["id" => 1]);
                echo "\" class=\"dropdown-item\">Choix des mois</a>
                                <a href=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"dropdown-item\">Grille budgétaire</a>
                            </div>
                        </div>
                    ";
            }
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                    ";
            if ((($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire"))) {
                // line 72
                echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-table me-2\"></i>Saisie Budgétaire</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"";
                // line 75
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"dropdown-item active\">Grille budgétaire</a>
                            </div>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-table me-2\"></i>Saisie Budgétaire</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"";
                // line 82
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_saisie_budgetaire");
                echo "\" class=\"dropdown-item\">Grille budgétaire</a>
                            </div>
                        </div>
                    ";
            }
            // line 86
            echo "                ";
        }
        // line 87
        echo "                
                ";
        // line 88
        if ((($context["currentPath"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_reporting"))) {
            // line 89
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_reporting");
            echo "\" class=\"nav-item nav-link active\"><i class=\"far fa-file-alt me-2\"></i>Rapport général</a>
                ";
        } else {
            // line 91
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_reporting");
            echo "\" class=\"nav-item nav-link\"><i class=\"far fa-file-alt me-2\"></i>Rapport général</a>
                ";
        }
        // line 93
        echo "            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class=\"content\">
        <!-- Navbar Start -->
        <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
            <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
            </a>
            <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                <i class=\"fa fa-bars\"></i>
            </a>

            <div class=\"navbar-nav align-items-center ms-auto\">
                ";
        // line 111
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 111), "roles", [], "any", false, false, false, 111))) {
            // line 112
            echo "
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-solid fa-users\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Utilisateurs</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Ajouter un utilisateur</h6>
                            </a>
                            <a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_utilisateurs");
            echo "\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Liste des utilisateurs</h6>
                            </a>
                        </div>
                    </div>

                ";
        }
        // line 129
        echo "                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <i class=\"fa fa-solid fa-user\"></i>
                        <span class=\"d-none d-lg-inline-flex\">";
        // line 132
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 132), "prenom", [], "any", false, false, false, 132)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 132), "nom", [], "any", false, false, false, 132)), "html", null, true);
        echo "</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_compte");
        echo "\" class=\"dropdown-item\">Compte</a>
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-solid fa-gear\"></i>Mot de passe</a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

";
    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 138,  300 => 135,  292 => 132,  287 => 129,  277 => 122,  271 => 119,  262 => 112,  260 => 111,  240 => 93,  234 => 91,  228 => 89,  226 => 88,  223 => 87,  220 => 86,  213 => 82,  208 => 80,  205 => 79,  198 => 75,  193 => 73,  190 => 72,  187 => 71,  184 => 70,  177 => 66,  173 => 65,  168 => 63,  165 => 62,  160 => 59,  155 => 57,  150 => 56,  148 => 55,  144 => 54,  139 => 53,  137 => 52,  131 => 49,  128 => 48,  125 => 47,  123 => 46,  120 => 45,  114 => 43,  108 => 41,  106 => 40,  102 => 38,  100 => 37,  99 => 36,  93 => 32,  89 => 30,  85 => 28,  83 => 27,  77 => 26,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_navbar.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/_navbar.html.twig");
    }
}
