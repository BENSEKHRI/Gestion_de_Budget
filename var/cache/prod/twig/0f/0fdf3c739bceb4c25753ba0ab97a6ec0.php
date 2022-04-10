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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_2135f8269ce3a0a8344c7353b0991cf3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page non trouvée";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <!-- 404 Start -->
    <div class=\"container-fluid\">
            <div class=\"row my-5 bg-light rounded align-items-center justify-content-center \">
                <div class=\"col-md-6 text-center p-4\">
                    <i class=\"bi bi-exclamation-triangle display-1 text-primary\"></i>
                    <h1 class=\"display-1 fw-bold\">404</h1>
                    <h1 class=\"mb-4\">Page non trouvée</h1>
                    <p class=\"mb-4\">Nous sommes désolés, la page que vous avez recherchée n'existe pas sur notre site !
                        Vous pouvez peut-être aller sur notre page d'accueil ou essayer d'utiliser une recherche ?</p>
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\">Retourner à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
