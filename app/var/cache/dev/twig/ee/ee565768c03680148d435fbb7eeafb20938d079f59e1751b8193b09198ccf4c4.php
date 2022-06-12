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

/* default/table_group_btn_ready_product.html.twig */
class __TwigTemplate_0555ce166a1cecc4a146974103b4abaa09f177a2b3ca4ca1bbf22f68397a0a3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_ready_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_ready_product.html.twig"));

        // line 1
        echo "<div class='btn-group btn-group-sm dropleft mt-1'>

\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 4
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "ready", [], "any", false, false, false, 4), 100))) {
            // line 5
            echo "            <i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>
        ";
        } else {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/fire.gif"), "html", null, true);
            echo "\"  width=\"20\">
        ";
        }
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "ready", [], "any", false, false, false, 9), "html", null, true);
        echo " %
    </button>
    <ul class=\"dropdown-menu\">
        <li class='dropdown-item'>
        \tГруппа: ";
        // line 13
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "productGroup", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "productGroup", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true))) : (print ("-")));
        echo "
        </li>
        <li class='dropdown-item'>
            Тип: ";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "productType", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "productType", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true))) : (print ("-")));
        echo "
        </li>
        <li class='dropdown-item'>
            Вид: ";
        // line 19
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "productKind", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "productKind", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true))) : (print ("-")));
        echo "
        </li>
        <li class='dropdown-item'>
            Категория: ";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "productCategory", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "productCategory", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true))) : (print ("-")));
        echo "
        </li>
        <li class='dropdown-item'>
            Статья калькуляции: ";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "calculation", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "calculation", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true))) : (print ("-")));
        echo "
        </li>

        <li class='dropdown-item'>
            Группа аналит. учета: ";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "analyticGroup", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "analyticGroup", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true))) : (print ("-")));
        echo "
        </li>
        <li class='dropdown-item'>
            Группа фин. учета: ";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "financeGroup", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "financeGroup", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true))) : (print ("-")));
        echo "
        </li>
    </ul>

</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/table_group_btn_ready_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  99 => 29,  92 => 25,  86 => 22,  80 => 19,  74 => 16,  68 => 13,  60 => 9,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='btn-group btn-group-sm dropleft mt-1'>

\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        {% if product.ready == 100 %}
            <i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>
        {% else %}
            <img src=\"{{ asset('dist/img/fire.gif') }}\"  width=\"20\">
        {% endif %}
        {{ product.ready }} %
    </button>
    <ul class=\"dropdown-menu\">
        <li class='dropdown-item'>
        \tГруппа: {{ product.productGroup?product.productGroup.name:'-' }}
        </li>
        <li class='dropdown-item'>
            Тип: {{ product.productType?product.productType.name:'-' }}
        </li>
        <li class='dropdown-item'>
            Вид: {{ product.productKind?product.productKind.name:'-' }}
        </li>
        <li class='dropdown-item'>
            Категория: {{ product.productCategory?product.productCategory.name:'-' }}
        </li>
        <li class='dropdown-item'>
            Статья калькуляции: {{ product.calculation?product.calculation.name:'-' }}
        </li>

        <li class='dropdown-item'>
            Группа аналит. учета: {{ product.analyticGroup?product.analyticGroup.name:'-' }}
        </li>
        <li class='dropdown-item'>
            Группа фин. учета: {{ product.financeGroup?product.financeGroup.name:'-' }}
        </li>
    </ul>

</div>

", "default/table_group_btn_ready_product.html.twig", "/var/www/project/templates/default/table_group_btn_ready_product.html.twig");
    }
}
