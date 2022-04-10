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
class __TwigTemplate_fa52db3ca24ca0288cd48ddff193c199 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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

        echo "Liste des utilisateurs";
        
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "                                    ";
            if (($context["user"] != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43))) {
                // line 44
                echo "                                        ";
                if ( !twig_test_empty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()))) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  217 => 76,  211 => 75,  208 => 74,  201 => 69,  193 => 64,  189 => 63,  184 => 60,  177 => 58,  173 => 56,  171 => 55,  168 => 54,  166 => 53,  163 => 52,  159 => 51,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  128 => 42,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}


<head>
    <title>Liste des utilisateurs</title>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
    <!-- Favicon -->
    <link href=\"/img/favicon.ico\" rel=\"icon\">

</head>


<body>
<!-- Table Start -->
{{ include('_navbar.html.twig') }}
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
                                {# On boucle sur les utilisateurs #}
                                {% for user in users %}
                                    {% if user != app.user %}
                                        {% if not (users is empty) %}
                                        <tr>
                                            <td>{{ user.prenom|capitalize}}</td>
                                            <td>{{ user.nom|upper }}</td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.telephone }}</td>
                                            <td>
                                                {% for role in user.roles %}
                                                    |
                                                    {% if role == \"ROLE_ADMIN\" %}
                                                        Administrateur                                                
                                                    {% elseif role == \"ROLE_USER\" %}
                                                        Utilisateur                                                
                                                    {% endif %}
                                                    
                                                {% endfor %}
                                                |
                                            </td>
                                            <td> 
                                                <a href=\"{{ path('app_admin_modifier_utilisateur', {'id':user.id}) }}\" class=\"btn btn-outline-info rounded-pill\"><i class=\"fa fa-solid fa-wrench\"></i></a> 
                                                <a href=\"{{ path('app_admin_supprimer_utilisateur', {'id':user.id}) }}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\" class=\"btn btn-outline-danger rounded-pill\"><i class=\"fa fa-solid fa-minus\"></i></a>                                             
                                            </td>

                                        </tr>
                                        {% else %}
                                        <tr>
                                            <th scope=\"row\">3</th>
                                            <td> Il n'y a pas d'utilisateur inscrits pour le moment. </td>
                                        </tr>
                                        {% endif %}
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
", "admin/users.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/admin/users.html.twig");
    }
}
