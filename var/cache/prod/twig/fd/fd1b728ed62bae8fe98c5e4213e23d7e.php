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

/* home/index.html.twig */
class __TwigTemplate_e23d9e77a1d47cd403cad6f74dbe337b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BudgIX";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<head>
    <title>BudgIX</title>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
    <!-- Favicon -->
    <link href=\"/img/favicon.ico\" rel=\"icon\">

</head>

<body>
    ";
        // line 20
        echo twig_include($this->env, $context, "_navbar.html.twig");
        echo "
    
    <style>
    .carousel {
        min-width: 100%;
        height: 420px;
   }
    </style>

    <div class=\"container-fluid pt-0 px-3\">
        <div class=\"row g-4\">
            <div class=\"col-12\">
                <div class=\"bg-light rounded h-100 p-4\">

                    <div class=\"mb-3\">
                        <h1 class=\"text-center text-primary\">BudgIX</h1>
                    </div>



                    <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide \" data-bs-ride=\"carousel\">
                    <div class=\"carousel-indicators\">
                        <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                    </div>
                    <div class=\"carousel-inner rounded \">
                        <div class=\"carousel-item active carousel\" data-bs-interval=\"4000\">
                        <img src=\"img/5.jpg\" class=\"d-block w-100\" alt=\"slide-1\">
                        </div>
                        <div class=\"carousel-item carousel\" data-bs-interval=\"4000\">
                        <img src=\"img/2.jpg\" class=\"d-block w-100\" alt=\"slide-2\">
                        </div>
                        <div class=\"carousel-item carousel\" data-bs-interval=\"4000\">
                        <img src=\"img/3.jpg\" class=\"d-block w-100\" alt=\"slide-3\">
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Footer Start -->
        <div class=\"container-fluid pt-3 px-3\">
            <div class=\"bg-light rounded-top p-2\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                        &copy; <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">BudgIX</a>, Tous droits réservés. 
                    </div>              
                    <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                        <p> Conçu par GooglePleX IT</p>     
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

</body>


";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 79,  74 => 20,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/home/index.html.twig");
    }
}
