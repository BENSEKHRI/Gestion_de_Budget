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

/* @Twig/Exception/error401.html.twig */
class __TwigTemplate_dece010553a73163483006e93f81d9d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titile' => [$this, 'block_titile'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error401.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titile($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Utilisateur non authentifié";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- 404 Start -->
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row vh-100 bg-light rounded align-items-center justify-content-center mx-0\">
            <div class=\"col-md-6 text-center p-4\">
                <i class=\"bi bi-exclamation-triangle display-1 text-primary\"></i>
                <h1 class=\"display-1 fw-bold\">401</h1>
                <h1 class=\"mb-4\">Utilisateur non authentifié</h1>
                <p class=\"mb-4\">Nous sommes désolés, Une authentification est nécessaire pour accéder à la ressource.</p>
                <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Retourner à la page de connexion</a>
            </div>
        </div>
    </div>
    <!-- 404 End -->
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error401.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error401.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/bundles/TwigBundle/Exception/error401.html.twig");
    }
}
