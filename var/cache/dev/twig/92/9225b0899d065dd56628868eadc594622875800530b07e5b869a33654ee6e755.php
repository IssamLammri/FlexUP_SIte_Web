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

/* enquiry/show.html.twig */
class __TwigTemplate_85e1122e63bc731ac36e726e2724d53620d0c5c10760132919baf74cc6e546d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enquiry/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enquiry/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enquiry/show.html.twig", 1);
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

        echo "Enquiry";
        
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
        echo "    <h1>Enquiry</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdOrder</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 12, $this->source); })()), "idOrder", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NameClient</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 16, $this->source); })()), "nameClient", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NameService</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 20, $this->source); })()), "nameService", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NameZone</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 24, $this->source); })()), "nameZone", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OrderDate</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 28, $this->source); })()), "orderDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 28, $this->source); })()), "orderDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Delivery</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 32, $this->source); })()), "delivery", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Urgency</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 36, $this->source); })()), "urgency", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 40, $this->source); })()), "experience", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unit</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 44, $this->source); })()), "unit", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Currency</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 48, $this->source); })()), "currency", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 52, $this->source); })()), "quantity", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IsGroup</th>
                <td>";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 60, $this->source); })()), "isGroup", [], "any", false, false, false, 60)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>NameGroup</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 64, $this->source); })()), "nameGroup", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enquiry_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enquiry_edit", ["idOrder" => twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new RuntimeError('Variable "enquiry" does not exist.', 71, $this->source); })()), "idOrder", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 73
        echo twig_include($this->env, $context, "enquiry/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "enquiry/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 73,  196 => 71,  191 => 69,  183 => 64,  176 => 60,  169 => 56,  162 => 52,  155 => 48,  148 => 44,  141 => 40,  134 => 36,  127 => 32,  120 => 28,  113 => 24,  106 => 20,  99 => 16,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enquiry{% endblock %}

{% block body %}
    <h1>Enquiry</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdOrder</th>
                <td>{{ enquiry.idOrder }}</td>
            </tr>
            <tr>
                <th>NameClient</th>
                <td>{{ enquiry.nameClient }}</td>
            </tr>
            <tr>
                <th>NameService</th>
                <td>{{ enquiry.nameService }}</td>
            </tr>
            <tr>
                <th>NameZone</th>
                <td>{{ enquiry.nameZone }}</td>
            </tr>
            <tr>
                <th>OrderDate</th>
                <td>{{ enquiry.orderDate ? enquiry.orderDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Delivery</th>
                <td>{{ enquiry.delivery }}</td>
            </tr>
            <tr>
                <th>Urgency</th>
                <td>{{ enquiry.urgency }}</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>{{ enquiry.experience }}</td>
            </tr>
            <tr>
                <th>Unit</th>
                <td>{{ enquiry.unit }}</td>
            </tr>
            <tr>
                <th>Currency</th>
                <td>{{ enquiry.currency }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ enquiry.quantity }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ enquiry.price }}</td>
            </tr>
            <tr>
                <th>IsGroup</th>
                <td>{{ enquiry.isGroup ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>NameGroup</th>
                <td>{{ enquiry.nameGroup }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('enquiry_index') }}\">back to list</a>

    <a href=\"{{ path('enquiry_edit', {'idOrder': enquiry.idOrder}) }}\">edit</a>

    {{ include('enquiry/_delete_form.html.twig') }}
{% endblock %}
", "enquiry/show.html.twig", "E:\\UNIV le Havre\\Stage\\Site_Web\\Site_Web\\Site_Off\\FlexUP_SIte_Web\\templates\\enquiry\\show.html.twig");
    }
}
