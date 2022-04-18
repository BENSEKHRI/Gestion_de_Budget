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

/* admin/users.html.twig */
class __TwigTemplate_b9bd2887961434e85bcf7b5d59a1e5e6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<head>
    <title>Liste des utilisateurs</title>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
    <!-- Favicon -->
    <link href=\"/img/favicon.ico\" rel=\"icon\">

</head>


<body>
<!-- Table Start -->
";
        // line 22
        echo twig_include($this->env, $context, "_navbar.html.twig");
        echo "
    <div class=\"container-fluid pt-0 px-3\">
        <div class=\"row g-4\">
            <div class=\"col-12\">
                <div class=\"bg-light rounded h-100 p-4\">
                    <h3 class=\"mb-4 text-center text-uppercase\">Liste des utilisateurs</h3>
                    <div class=\"table-responsive\">
                        <table class=\"table align-middle\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Prénom</th>
                                    <th scope=\"col\">NOM</th>
                                    <th scope=\"col\">E-mail</th>
                                    <th scope=\"col\">Téléphone</th>
                                    <th scope=\"col\">Rôles</th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 42
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "                                    ";
            if (($context["user"] != twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43))) {
                // line 44
                echo "                                        ";
                if ( !twig_test_empty(($context["users"] ?? null))) {
                    // line 45
                    echo "                                        <tr>
                                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 46)), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 47)), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                                            <td>
                                                ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 52
                        echo "                                                    |
                                                    ";
                        // line 53
                        if (($context["role"] == "ROLE_ADMIN")) {
                            // line 54
                            echo "                                                        Administrateur                                                
                                                    ";
                        } elseif ((                        // line 55
$context["role"] == "ROLE_USER")) {
                            // line 56
                            echo "                                                        Utilisateur                                                
                                                    ";
                        }
                        // line 58
                        echo "                                                    
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                                                |
                                            </td>
                                            <td> 
                                                <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_modifier_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\" class=\"btn btn-outline-info rounded-pill\"><i class=\"fa fa-solid fa-wrench\"></i></a> 
                                                <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supprimer_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" class=\"btn btn-outline-danger rounded-pill\"><i class=\"fa fa-solid fa-minus\"></i></a>                                             
                                            </td>

                                        </tr>
                                        ";
                } else {
                    // line 69
                    echo "                                        <tr>
                                            <th scope=\"row\">3</th>
                                            <td> Il n'y a pas d'utilisateur inscrits pour le moment. </td>
                                        </tr>
                                        ";
                }
                // line 74
                echo "                                    ";
            }
            // line 75
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                            </tbody>
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
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  181 => 75,  178 => 74,  171 => 69,  163 => 64,  159 => 63,  154 => 60,  147 => 58,  143 => 56,  141 => 55,  138 => 54,  136 => 53,  133 => 52,  129 => 51,  124 => 49,  120 => 48,  116 => 47,  112 => 46,  109 => 45,  106 => 44,  103 => 43,  98 => 42,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/users.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/admin/users.html.twig");
    }
}
