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
class __TwigTemplate_df626f06d26594936482935737c20246 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mois/choixMois.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mois/choixMois.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mois/choixMois.html.twig", 1);
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

        echo "Work Flow";
        
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date", [], "any", false, false, false, 42), 'widget');
        echo "</th>
                            <td scope=\"col\" class=\"text-center\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date1", [], "any", false, false, false, 43), 'widget');
        echo "</th>
                            <td scope=\"col\" class=\"text-center\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date2", [], "any", false, false, false, 44), 'widget');
        echo "</th>
                        </tbody>
                    </table>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-outline-success rounded-pill text-center align-middle\"><i class=\"fa fa-solid fa-check\"></i> Valider</button>
                    </div>
                    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Table End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  149 => 50,  140 => 44,  136 => 43,  132 => 42,  118 => 31,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Work Flow{% endblock %}

{% block body %}


<head>

    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    
</head>


<body>
<!-- Table Start -->
{{ include('_navbar.html.twig') }}
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
                    {{ form_start(form) }}
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr class=\"table\">
                                <th scope=\"col\" class=\"text-center\">Premier mois</th>
                                <th scope=\"col\" class=\"text-center\">Deuxième mois</th>
                                <th scope=\"col\" class=\"text-center\">Troisième mois</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <td scope=\"col\" class=\"text-center\">{{ form_widget(form.date) }}</th>
                            <td scope=\"col\" class=\"text-center\">{{ form_widget(form.date1) }}</th>
                            <td scope=\"col\" class=\"text-center\">{{ form_widget(form.date2) }}</th>
                        </tbody>
                    </table>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-outline-success rounded-pill text-center align-middle\"><i class=\"fa fa-solid fa-check\"></i> Valider</button>
                    </div>
                    {{ form_end(form) }}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Table End -->
{% endblock %}
", "mois/choixMois.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/mois/choixMois.html.twig");
    }
}
