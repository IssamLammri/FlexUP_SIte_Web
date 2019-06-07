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

/* Issam/issam.html.twig */
class __TwigTemplate_370eb1dfbf747c40415cfc149c2cb0280a5955ab4fef3bf4542a2953679fc9fa extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Issam/issam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Issam/issam.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Issam/issam.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page Issam";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <h1> Admin </h1>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_index");
        echo "\"> Users </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groups_index");
        echo "\"> Groups </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addresses_index");
        echo "\"> Address </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_index");
        echo "\"> Service </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\"> Category </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zone_index");
        echo "\"> Zone de travaille </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enquiry_index");
        echo "\"> Enquiry </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket_index");
        echo "\"> basket </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offered_prices_index");
        echo "\"> Offers_Price </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offers_index");
        echo "\"> Offers </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_refused_index");
        echo "\"> Order refused </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participants_index");
        echo "\"> Participant </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participants_groups_index");
        echo "\"> Participant groups </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_identify_document_index");
        echo "\"> Type identify Document </a>

        <a class=\"btn btn-outline-dark\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_identify_index");
        echo "\"> Users identify  </a>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_zone_index");
        echo "\"> Group Zone  </a>




    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Issam/issam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 32,  153 => 31,  148 => 29,  143 => 27,  138 => 25,  133 => 23,  128 => 21,  123 => 19,  118 => 17,  113 => 15,  109 => 14,  105 => 13,  101 => 12,  97 => 11,  93 => 10,  89 => 9,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}

{% block title 'Page Issam' %}

{% block body %}

    <div class=\"container\">
        <h1> Admin </h1>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('users_index') }}\"> Users </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('groups_index') }}\"> Groups </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('addresses_index') }}\"> Address </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('service_index') }}\"> Service </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('category_index') }}\"> Category </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('zone_index') }}\"> Zone de travaille </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('enquiry_index') }}\"> Enquiry </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('basket_index') }}\"> basket </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('offered_prices_index') }}\"> Offers_Price </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('offers_index') }}\"> Offers </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('orders_refused_index') }}\"> Order refused </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('participants_index') }}\"> Participant </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('participants_groups_index') }}\"> Participant groups </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('type_identify_document_index') }}\"> Type identify Document </a>

        <a class=\"btn btn-outline-dark\" href=\"{{ path('user_identify_index') }}\"> Users identify  </a>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('group_zone_index') }}\"> Group Zone  </a>




    </div>
{% endblock %}", "Issam/issam.html.twig", "E:\\UNIV le Havre\\Stage\\Site_Web\\Site_Web\\FlexUP_SIte_Web\\templates\\Issam\\issam.html.twig");
    }
}
