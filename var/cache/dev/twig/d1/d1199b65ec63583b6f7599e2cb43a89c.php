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
class __TwigTemplate_d540a2e2f60f89c228fc86ec4a6c29c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Se connecter à votre compte BudgIX";
        
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
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "                                <div class=\"mb-3 text-center\">
                                    Vous êtes connecté(e) en tant que ";
            // line 36
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36)), "html", null, true);
            echo " <br> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
                                </div>
                            ";
        }
        // line 39
        echo "                        <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <h3 class=\"text-primary\"><i class=\"fa fa-solid fa-chart-pie me-2\"></i>BudgIX</h3>
                                <h4>Connexion</h4>
                            </div>

                            ";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                                <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageData", [], "any", false, false, false, 46), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 48
        echo "
                            
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" id=\"floatingInput\" name=\"email\"  autocomplete=\"email\" required autofocus placeholder=\"name@example.com\">
                                <label for=\"floatingInput\">E-mail</label>
                            </div>
                            <div class=\"form-floating mb-4\">
                                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" name=\"password\" autocomplete=\"current-password\" required placeholder=\"Password\">
                                <label for=\"floatingPassword\">Mot de passe</label>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"td-flex align-items-center justify-content-between mb-4 text-center\">
                                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">S'identifier</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Sign In End -->

        ";
        // line 79
        echo "
        </form>
    </div>
</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  181 => 79,  169 => 60,  163 => 57,  154 => 51,  149 => 48,  143 => 46,  141 => 45,  133 => 39,  123 => 36,  120 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Se connecter à votre compte BudgIX{% endblock %}

{% block body %}


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
                            {% if app.user %}
                                <div class=\"mb-3 text-center\">
                                    Vous êtes connecté(e) en tant que {{ app.user.prenom|capitalize}} {{ app.user.nom|upper }} <br> <a href=\"{{ path('app_logout') }}\">Me déconnecter</a>
                                </div>
                            {% endif %}
                        <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <h3 class=\"text-primary\"><i class=\"fa fa-solid fa-chart-pie me-2\"></i>BudgIX</h3>
                                <h4>Connexion</h4>
                            </div>

                            {% if error %}
                                <div class=\"alert alert-danger text-center\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" value=\"{{ last_username }}\" class=\"form-control\" id=\"floatingInput\" name=\"email\"  autocomplete=\"email\" required autofocus placeholder=\"name@example.com\">
                                <label for=\"floatingInput\">E-mail</label>
                            </div>
                            <div class=\"form-floating mb-4\">
                                <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" name=\"password\" autocomplete=\"current-password\" required placeholder=\"Password\">
                                <label for=\"floatingPassword\">Mot de passe</label>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            </div>
                            <div class=\"td-flex align-items-center justify-content-between mb-4 text-center\">
                                <a href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié ?</a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">S'identifier</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Sign In End -->

        {#
            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
            See https://symfony.com/doc/current/security/remember_me.html

            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>
        #}

        </form>
    </div>
</body>

{% endblock %}


", "security/login.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/security/login.html.twig");
    }
}
