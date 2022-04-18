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

/* mois/choixMois.html.twig */
class __TwigTemplate_f003d9c12b88f2827ad5958261080982 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mois/choixMois.html.twig", 1);
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
                    <h3 class=\"text-center text-uppercase\">Choix des mois</h3>
                </div>
                <div class=\"mb-4\">
                    <h5 class=\"text-center text-uppercase text-primary\">Modification des mois pour la saisie budgétaire</h5>
                </div>

                <div class=\"table-responsive\">
                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr class=\"table\">
                                <th scope=\"col\" class=\"text-center\">Premier mois</th>
                                <th scope=\"col\" class=\"text-center\">Deuxième mois</th>
                                <th scope=\"col\" class=\"text-center\">Troisième mois</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <td scope=\"col\" class=\"text-center\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 42), 'widget');
        echo "</th>
                            <td scope=\"col\" class=\"text-center\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date1", [], "any", false, false, false, 43), 'widget');
        echo "</th>
                            <td scope=\"col\" class=\"text-center\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date2", [], "any", false, false, false, 44), 'widget');
        echo "</th>
                        </tbody>
                    </table>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-outline-success rounded-pill text-center align-middle\"><i class=\"fa fa-solid fa-check\"></i> Valider</button>
                    </div>
                    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Table End -->
";
    }

    public function getTemplateName()
    {
        return "mois/choixMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  110 => 44,  106 => 43,  102 => 42,  88 => 31,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mois/choixMois.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/mois/choixMois.html.twig");
    }
}
