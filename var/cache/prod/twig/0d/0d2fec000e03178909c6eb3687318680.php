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

/* admin/changePassword.html.twig */
class __TwigTemplate_b19356759e982b64ebd0eed1e3d2edaa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/changePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le mot de passe";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<body>
    <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class=\"container-fluid\">
            <div class=\"row h-100 align-items-center justify-content-center\" style=\"min-height: 100vh;\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4\">
                    <div class=\"bg-light rounded p-4 p-sm-5 my-4 mx-3\">

                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["userForm"] ?? null), 'form_start');
        echo "


                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                            <h5>Modification du mot de passe</h5>
                        </div>
                        <div class=\"form-floating mb-3\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "prenom", [], "any", false, false, false, 30), 'row');
        echo "
                        </div>
                        <div class=\"form-floating mb-3\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "nom", [], "any", false, false, false, 33), 'row');
        echo "
                        </div>
                        <div class=\"form-floating mb-3\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "email", [], "any", false, false, false, 36), 'row');
        echo "
                        </div>
                        <div class=\"form-floating mb-3\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "telephone", [], "any", false, false, false, 39), 'row');
        echo "
                        </div>
                        <div class=\"form-check form-switch mb-4\">
                            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["userForm"] ?? null), "roles", [], "any", false, false, false, 42), 'row');
        echo "</label>
                            
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary py-3 w-100 mb-4\">Valider</button>
                    
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["userForm"] ?? null), 'form_end');
        echo "
                    

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

</body>

";
    }

    public function getTemplateName()
    {
        return "admin/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  111 => 42,  105 => 39,  99 => 36,  93 => 33,  87 => 30,  77 => 23,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/changePassword.html.twig", "/home/lounis/GP/Gestion_de_budget/templates/admin/changePassword.html.twig");
    }
}
