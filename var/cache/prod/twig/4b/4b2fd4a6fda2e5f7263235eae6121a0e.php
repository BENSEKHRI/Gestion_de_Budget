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

/* security/login.html.twig */
class __TwigTemplate_1d740df62b9d2b08249ff3225ec3070c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se connecter à votre compte BudgIX";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<head>
    
    <title>Se connecter à votre compte BudgIX</title>
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"/img/favicon.ico\" rel=\"icon\">

</head>

<body>
    <div class=\"container-fluid position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <form method=\"post\" class=\"container-fluid\">
            <!-- Sign In Start -->
            
            <div class=\"container-fluid\">
                <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 97vh;\">
                    <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                                <div class=\"mb-3 text-center\">
                                    Vous êtes connecté(e) en tant que ";
            // line 37
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37)), "html", null, true);
            echo " <br> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
                                </div>
                            ";
        }
        // line 40
        echo "                        <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <h3 class=\"text-primary\"><i class=\"fa fa-solid fa-chart-pie me-2\"></i>BudgIX</h3>
                                <h4>Connexion</h4>
                            </div>

                            ";
        // line 46
        if (($context["error"] ?? null)) {
            // line 47
            echo "                                <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 49
        echo "
                            
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" id=\"floatingInput\" name=\"email\"  autocomplete=\"email\" required autofocus placeholder=\"name@example.com\">
                                <label for=\"floatingInput\">E-mail</label>
                            </div>
                            <div class=\"form-floating mb-4\">
                                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" name=\"password\" autocomplete=\"current-password\" required placeholder=\"Password\">
                                <label for=\"floatingPassword\">Mot de passe</label>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"td-flex align-items-center justify-content-between mb-4 text-center\">
                                <a href=\"#\">Mot de passe oublié ?</a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">S'identifier</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Sign In End -->

        ";
        // line 80
        echo "
        </form>
    </div>
</body>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 80,  134 => 58,  125 => 52,  120 => 49,  114 => 47,  112 => 46,  104 => 40,  94 => 37,  91 => 36,  89 => 35,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/security/login.html.twig");
    }
}
