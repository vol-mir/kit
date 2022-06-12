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

/* product/show.html.twig */
class __TwigTemplate_cef55c5f5f3d909c31b54334940b6df9aafd355ccd2287b168df7f9ce42f06fc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.product"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "designation", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Номенклатура</a>
                        </li>
                        ";
        // line 15
        if ((isset($context["detailing"]) || array_key_exists("detailing", $context) ? $context["detailing"] : (function () { throw new RuntimeError('Variable "detailing" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Деталировка</a>
                        </li>
                        ";
        }
        // line 20
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "structures", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20), 0))) {
            // line 21
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab3-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab3\" role=\"tab\" aria-controls=\"custom-tabs-four-tab3\" aria-selected=\"false\">Входимость</a>
                        </li>
                        ";
        }
        // line 25
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "specifications", [], "any", false, false, false, 25), "count", [], "any", false, false, false, 25), 0))) {
            // line 26
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab4-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab4\" role=\"tab\" aria-controls=\"custom-tabs-four-tab4\" aria-selected=\"false\">Спецификации</a>
                        </li>
                        ";
        }
        // line 30
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "normDocuments", [], "any", false, false, false, 30), "count", [], "any", false, false, false, 30), 0))) {
            // line 31
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab5-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab5\" role=\"tab\" aria-controls=\"custom-tabs-four-tab5\" aria-selected=\"false\">Документы установки норм расхода</a>
                        </li>
                        ";
        }
        // line 35
        echo "                        ";
        if ((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab6-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab6\" role=\"tab\" aria-controls=\"custom-tabs-four-tab6\" aria-selected=\"false\">Нормы расхода</a>
                        </li>
                        ";
        }
        // line 40
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "trackDocuments", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40), 0))) {
            // line 41
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab7-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab7\" role=\"tab\" aria-controls=\"custom-tabs-four-tab7\" aria-selected=\"false\">Маршруты</a>
                        </li>
                        ";
        }
        // line 45
        echo "                        ";
        if ((isset($context["actualTracks"]) || array_key_exists("actualTracks", $context) ? $context["actualTracks"] : (function () { throw new RuntimeError('Variable "actualTracks" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab8-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab8\" role=\"tab\" aria-controls=\"custom-tabs-four-tab8\" aria-selected=\"false\">Актуальные маршруты</a>
                        </li>
                        ";
        }
        // line 50
        echo "                        ";
        if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab9-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab9\" role=\"tab\" aria-controls=\"custom-tabs-four-tab9\" aria-selected=\"false\">Комментарии</a>
                        </li>
                        ";
        }
        // line 55
        echo "                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        <div class=\"card-body\">
                            <dl>
                                ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62)) {
            // line 63
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 66
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 66, $this->source); })()), "designation", [], "any", false, false, false, 66)) {
            // line 67
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "designation", [], "any", false, false, false, 68), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 70
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "weight", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.weight"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "weight", [], "any", false, false, false, 72), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 74
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 74, $this->source); })()), "unit", [], "any", false, false, false, 74)) {
            // line 75
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "unit", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 78
        echo "
                                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "productGroup", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                    <dt>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_group"), "html", null, true);
            echo "
                                        <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "productGroup", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 86
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })()), "productType", [], "any", false, false, false, 86)) {
            // line 87
            echo "                                    <dt>
                                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_type"), "html", null, true);
            echo "
                                        <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "productType", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 93
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "productKind", [], "any", false, false, false, 93)) {
            // line 94
            echo "                                    <dt>
                                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_kind"), "html", null, true);
            echo "
                                        <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 98, $this->source); })()), "productKind", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 100
        echo "                                 ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 100, $this->source); })()), "productCategory", [], "any", false, false, false, 100)) {
            // line 101
            echo "                                    <dt>
                                        ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_category"), "html", null, true);
            echo "
                                        <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 105, $this->source); })()), "productCategory", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 107
        echo "                                ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "kdMaterials", [], "any", false, false, false, 107), "count", [], "any", false, false, false, 107), 0))) {
            // line 108
            echo "                                    <dt>
                                        ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.materials"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>
                                        <ul>
                                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 113, $this->source); })()), "kdMaterials", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["kdMaterial"]) {
                // line 114
                echo "                                                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdMaterial"], "fullName", [], "any", false, false, false, 114), "html", null, true);
                echo "</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kdMaterial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                        </ul>
                                    </dd>
                                ";
        }
        // line 119
        echo "
                                <dt>";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.id_erp"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "idErp", [], "any", false, false, false, 121), "html", null, true);
        echo "</dd>

                                ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 123, $this->source); })()), "calculation", [], "any", false, false, false, 123)) {
            // line 124
            echo "                                    <dt>
                                        ";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.calculation"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 127, $this->source); })()), "calculation", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 129
        echo "
                                ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 130, $this->source); })()), "analyticGroup", [], "any", false, false, false, 130)) {
            // line 131
            echo "                                    <dt>
                                        ";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.analytic_group"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 134, $this->source); })()), "analyticGroup", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 136
        echo "
                                ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 137, $this->source); })()), "financeGroup", [], "any", false, false, false, 137)) {
            // line 138
            echo "                                    <dt>
                                        ";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.finance_group"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 141, $this->source); })()), "financeGroup", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 143
        echo "
                            </dl>

                            ";
        // line 147
        echo "                            <ul class=\"products-list product-list-in-card\">
                                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productRenditions"]) || array_key_exists("productRenditions", $context) ? $context["productRenditions"] : (function () { throw new RuntimeError('Variable "productRenditions" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["productRendition"]) {
            // line 149
            echo "                                <li class=\"item\">
                                    <div>
                                        <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_xml", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151), "rendition_id" => twig_get_attribute($this->env, $this->source, $context["productRendition"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\" class=\"product-title\">Выгрузить спецификацию - Вариант исполнения: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productRendition"], "name", [], "any", false, false, false, 151), "html", null, true);
            echo "</a>
                                    </div>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productRendition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                            </ul>
                            ";
        // line 157
        echo "                        </div>
                    </div>

                    ";
        // line 160
        if ((isset($context["detailing"]) || array_key_exists("detailing", $context) ? $context["detailing"] : (function () { throw new RuntimeError('Variable "detailing" does not exist.', 160, $this->source); })())) {
            // line 161
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            <div class=\"card-body\">
                            ";
            // line 163
            if ((isset($context["detailing"]) || array_key_exists("detailing", $context) ? $context["detailing"] : (function () { throw new RuntimeError('Variable "detailing" does not exist.', 163, $this->source); })())) {
                // line 164
                echo "                            <table id=\"table\" class=\"table table-bordered table-striped table-hover table-sm\"></table>
                            ";
            } else {
                // line 166
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Спецификация не задана
                                </div>
                            ";
            }
            // line 170
            echo "                            </div>
                        </div>
                    ";
        }
        // line 173
        echo "
                    ";
        // line 174
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 174, $this->source); })()), "structures", [], "any", false, false, false, 174), "count", [], "any", false, false, false, 174), 0))) {
            // line 175
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab3\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab3-tab\">
                            <div class=\"card-body\">
                            ";
            // line 177
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 177, $this->source); })()), "structures", [], "any", false, false, false, 177), "count", [], "any", false, false, false, 177), 0))) {
                // line 178
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 191, $this->source); })()), "structures", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
                    // line 192
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 194), "dateSpecification", [], "any", false, false, false, 194), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 196
                    $context["style"] = "primary";
                    // line 197
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 197), "status", [], "any", false, false, false, 197), 1))) {
                        // line 198
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 199
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 199), "status", [], "any", false, false, false, 199), 3))) {
                        // line 200
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 201
                        echo "                                                ";
                    } else {
                        // line 202
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 203
                        echo "                                                ";
                    }
                    // line 204
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 204, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 204, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 204), "status", [], "any", false, false, false, 204), [], "array", false, false, false, 204)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 206), "product", [], "any", false, false, false, 206), "designation", [], "any", false, false, false, 206), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 207
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 207), "product", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 207), "product", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 208
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 208), "rendition", [], "any", false, false, false, 208), "name", [], "any", false, false, false, 208), "html", null, true);
                    echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 211
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 211), "id", [], "any", false, false, false, 211)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 230
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не входит в состав изделия/узла
                                </div>
                            ";
            }
            // line 234
            echo "                            </div>
                            ";
            // line 237
            echo "                        </div>
                    ";
        }
        // line 239
        echo "
                    ";
        // line 240
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 240, $this->source); })()), "specifications", [], "any", false, false, false, 240), "count", [], "any", false, false, false, 240), 0))) {
            // line 241
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab4\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab4-tab\">
                            <div class=\"card-body\">
                            ";
            // line 243
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 243, $this->source); })()), "specifications", [], "any", false, false, false, 243), "count", [], "any", false, false, false, 243), 0))) {
                // line 244
                echo "                                <table id=\"specifications\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 257, $this->source); })()), "specifications", [], "any", false, false, false, 257));
                foreach ($context['_seq'] as $context["_key"] => $context["specification"]) {
                    // line 258
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 259
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specification"], "id", [], "any", false, false, false, 259), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 260
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specification"], "dateSpecification", [], "any", false, false, false, 260), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 262
                    $context["style"] = "primary";
                    // line 263
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["specification"], "status", [], "any", false, false, false, 263), 1))) {
                        // line 264
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 265
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["specification"], "status", [], "any", false, false, false, 265), 3))) {
                        // line 266
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 267
                        echo "                                                ";
                    } else {
                        // line 268
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 269
                        echo "                                                ";
                    }
                    // line 270
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 270, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 270, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["specification"], "status", [], "any", false, false, false, 270), [], "array", false, false, false, 270)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 272
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["specification"], "product", [], "any", false, false, false, 272), "designation", [], "any", false, false, false, 272), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 273
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["specification"], "product", [], "any", false, false, false, 273), "id", [], "any", false, false, false, 273)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["specification"], "product", [], "any", false, false, false, 273), "name", [], "any", false, false, false, 273), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 274
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["specification"], "rendition", [], "any", false, false, false, 274), "name", [], "any", false, false, false, 274), "html", null, true);
                    echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 277
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_show", ["id" => twig_get_attribute($this->env, $this->source, $context["specification"], "id", [], "any", false, false, false, 277)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            ";
            } else {
                // line 296
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Спецификация не задана
                                </div>
                            ";
            }
            // line 300
            echo "                            </div>
                        </div>
                    ";
        }
        // line 303
        echo "
                    ";
        // line 304
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 304, $this->source); })()), "normDocuments", [], "any", false, false, false, 304), "count", [], "any", false, false, false, 304), 0))) {
            // line 305
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab5\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab5-tab\">
                            <div class=\"card-body\">
                            ";
            // line 307
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 307, $this->source); })()), "normDocuments", [], "any", false, false, false, 307), "count", [], "any", false, false, false, 307), 0))) {
                // line 308
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 321
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 321, $this->source); })()), "normDocuments", [], "any", false, false, false, 321));
                foreach ($context['_seq'] as $context["_key"] => $context["normDocument"]) {
                    // line 322
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 323
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normDocument"], "id", [], "any", false, false, false, 323), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 324
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normDocument"], "dateDocument", [], "any", false, false, false, 324), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 326
                    $context["style"] = "primary";
                    // line 327
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["normDocument"], "status", [], "any", false, false, false, 327), 1))) {
                        // line 328
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 329
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["normDocument"], "status", [], "any", false, false, false, 329), 3))) {
                        // line 330
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 331
                        echo "                                                ";
                    } else {
                        // line 332
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 333
                        echo "                                                ";
                    }
                    // line 334
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 334, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["normDocumentStatuses"]) || array_key_exists("normDocumentStatuses", $context) ? $context["normDocumentStatuses"] : (function () { throw new RuntimeError('Variable "normDocumentStatuses" does not exist.', 334, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["normDocument"], "status", [], "any", false, false, false, 334), [], "array", false, false, false, 334)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 336
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["normDocument"], "product", [], "any", false, false, false, 336), "designation", [], "any", false, false, false, 336), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 337
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["normDocument"], "product", [], "any", false, false, false, 337), "id", [], "any", false, false, false, 337)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["normDocument"], "product", [], "any", false, false, false, 337), "name", [], "any", false, false, false, 337), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 338
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["normDocument"], "rendition", [], "any", false, false, false, 338), "name", [], "any", false, false, false, 338), "html", null, true);
                    echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 341
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["normDocument"], "id", [], "any", false, false, false, 341)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normDocument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 360
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы нормы расхода
                                </div>
                            ";
            }
            // line 364
            echo "                            </div>
                        </div>
                    ";
        }
        // line 367
        echo "
                    ";
        // line 368
        if ((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 368, $this->source); })())) {
            // line 369
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab6\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab6-tab\">
                            ";
            // line 370
            if ((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 370, $this->source); })())) {
                // line 371
                echo "
                                ";
                // line 372
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
                    // line 373
                    echo "                                    <div class=\"card-header\">
                                        <button type=\"button\" onclick='location.href = \"";
                    // line 374
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_product_material_norms", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 374, $this->source); })()), "id", [], "any", false, false, false, 374)]), "html", null, true);
                    echo "\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.print"), "html", null, true);
                    echo "</button>
                                    </div>
                                ";
                }
                // line 377
                echo "
                                <div class=\"card-body\">

                                <table id=\"materials\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Номенклатура</th>
                                            <th>Кол-во</th>
                                            <th>Категория</th>
                                            <th>Ст. кальк. номенкл.</th>
                                            <th>Материал</th>
                                            <th>Ст. кальк. мат.</th>
                                            <th>Основной</th>
                                            <th>Норма на деталь</th>
                                            <th>Норма на изделие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 395
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 395, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                    // line 396
                    echo "                                            <tr role=\"row\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "mainReplacement", [], "any", false, false, false, 396), 2))) {
                        echo "class=\"text-secondary\"";
                    }
                    echo ">
                                                <td>
                                                    ";
                    // line 398
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 398), 3))) {
                        // line 399
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 399), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 401
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 403
                    if ((twig_get_attribute($this->env, $this->source, $context["material"], "amount", [], "any", false, false, false, 403) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 403), 3)))) {
                        // line 404
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amount", [], "any", false, false, false, 404), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnit", [], "any", false, false, false, 404), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 406
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 408
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 408), 3))) {
                        // line 409
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "category", [], "any", false, false, false, 409), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 411
                    echo "                                                </td>

                                                <td>
                                                    ";
                    // line 414
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 414), 3))) {
                        // line 415
                        echo "                                                        <small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "calculationName", [], "any", false, false, false, 415), "html", null, true);
                        echo "</small>
                                                    ";
                    }
                    // line 416
                    echo " 
                                                </td>
                                                <td>
                                                    ";
                    // line 419
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 419), 3))) {
                        // line 420
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 420), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 422
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "material", [], "any", false, false, false, 422), "html", null, true);
                    echo "
                                                </td>
                                                <td>
                                                    ";
                    // line 425
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 425), 3))) {
                        // line 426
                        echo "                                                       <small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "calculationName", [], "any", false, false, false, 426), "html", null, true);
                        echo "</small>
                                                    ";
                    } else {
                        // line 428
                        echo "                                                        <small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "materialCalc", [], "any", false, false, false, 428), "html", null, true);
                        echo "</small>
                                                    ";
                    }
                    // line 430
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 432
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "mainReplacement", [], "any", false, false, false, 432), 1))) {
                        // line 433
                        echo "                                                        <span class='badge badge-success'>Да</span>
                                                    ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 434
$context["material"], "mainReplacement", [], "any", false, false, false, 434), 2))) {
                        // line 435
                        echo "                                                        <span class='badge badge-warning'>Замена</span>
                                                    ";
                    }
                    // line 437
                    echo "                                                <td>
                                                    ";
                    // line 438
                    if (twig_get_attribute($this->env, $this->source, $context["material"], "amountOne", [], "any", false, false, false, 438)) {
                        // line 439
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountOne", [], "any", false, false, false, 439), "html", null, true);
                        echo " ";
                        ((twig_get_attribute($this->env, $this->source, $context["material"], "amountOne", [], "any", false, false, false, 439)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitMaterial", [], "any", false, false, false, 439), "html", null, true))) : (print ("")));
                        echo "
                                                    ";
                    }
                    // line 441
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 443
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["material"], "intype", [], "any", false, false, false, 443), 3))) {
                        // line 444
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amount", [], "any", false, false, false, 444), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnit", [], "any", false, false, false, 444), "html", null, true);
                        echo "
                                                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 445
$context["material"], "amountMaterial", [], "any", false, false, false, 445)) {
                        // line 446
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountMaterial", [], "any", false, false, false, 446), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitMaterial", [], "any", false, false, false, 446), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 448
                    echo "                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 451
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Номенклатура</th>
                                            <th>Кол-во</th>
                                            <th>Категория</th>
                                            <th>Ст. кальк. номенкл.</th>
                                            <th>Материал</th>
                                            <th>Ст. кальк. мат.</th>
                                            <th>Основной</th>
                                            <th>Норма на деталь</th>
                                            <th>Норма на изделие</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>

                                ";
                // line 468
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
                    // line 469
                    echo "                                    <div class=\"card-footer\">
                                        <button type=\"button\" onclick='location.href = \"";
                    // line 470
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_product_material_norms", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 470, $this->source); })()), "id", [], "any", false, false, false, 470)]), "html", null, true);
                    echo "\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.print"), "html", null, true);
                    echo "</button>
                                    </div>
                                ";
                }
                // line 473
                echo "                            ";
            } else {
                // line 474
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Нормы расхода материалов не заданы
                                </div>
                            ";
            }
            // line 478
            echo "                        </div>
                    ";
        }
        // line 480
        echo "
                    ";
        // line 481
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 481, $this->source); })()), "trackDocuments", [], "any", false, false, false, 481), "count", [], "any", false, false, false, 481), 0))) {
            // line 482
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab7\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab7-tab\">
                            <div class=\"card-body\">
                            ";
            // line 484
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 484, $this->source); })()), "trackDocuments", [], "any", false, false, false, 484), "count", [], "any", false, false, false, 484), 0))) {
                // line 485
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата нач.</th>
                                            <th>Дата кон.</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 499
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 499, $this->source); })()), "trackDocuments", [], "any", false, false, false, 499));
                foreach ($context['_seq'] as $context["_key"] => $context["trackDocument"]) {
                    // line 500
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 501
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "id", [], "any", false, false, false, 501), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 502
                    ((twig_get_attribute($this->env, $this->source, $context["trackDocument"], "dateStart", [], "any", false, false, false, 502)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "dateStart", [], "any", false, false, false, 502), "d.m.Y"), "html", null, true))) : (print ("")));
                    echo "</td>
                                                <td>";
                    // line 503
                    ((twig_get_attribute($this->env, $this->source, $context["trackDocument"], "dateEnd", [], "any", false, false, false, 503)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "dateEnd", [], "any", false, false, false, 503), "d.m.Y"), "html", null, true))) : (print ("")));
                    echo "</td>
                                                <td>
                                                ";
                    // line 505
                    $context["style"] = "primary";
                    // line 506
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trackDocument"], "status", [], "any", false, false, false, 506), 1))) {
                        // line 507
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 508
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trackDocument"], "status", [], "any", false, false, false, 508), 3))) {
                        // line 509
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 510
                        echo "                                                ";
                    } else {
                        // line 511
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 512
                        echo "                                                ";
                    }
                    // line 513
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 513, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["trackDocumentStatuses"]) || array_key_exists("trackDocumentStatuses", $context) ? $context["trackDocumentStatuses"] : (function () { throw new RuntimeError('Variable "trackDocumentStatuses" does not exist.', 513, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["trackDocument"], "status", [], "any", false, false, false, 513), [], "array", false, false, false, 513)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 515
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "product", [], "any", false, false, false, 515), "designation", [], "any", false, false, false, 515), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 516
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "product", [], "any", false, false, false, 516), "id", [], "any", false, false, false, 516)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "product", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 517
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trackDocument"], "rendition", [], "any", false, false, false, 517), "name", [], "any", false, false, false, 517), "html", null, true);
                    echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 520
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["trackDocument"], "id", [], "any", false, false, false, 520)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trackDocument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 525
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата нач.</th>
                                            <th>Дата кон.</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 540
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы маршруты
                                </div>
                            ";
            }
            // line 544
            echo "                            </div>
                        </div>
                    ";
        }
        // line 547
        echo "
                    ";
        // line 548
        if ((isset($context["actualTracks"]) || array_key_exists("actualTracks", $context) ? $context["actualTracks"] : (function () { throw new RuntimeError('Variable "actualTracks" does not exist.', 548, $this->source); })())) {
            // line 549
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab8\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab8-tab\">
                            <div class=\"card-body\">
                            ";
            // line 551
            if ((isset($context["actualTracks"]) || array_key_exists("actualTracks", $context) ? $context["actualTracks"] : (function () { throw new RuntimeError('Variable "actualTracks" does not exist.', 551, $this->source); })())) {
                // line 552
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["actualTracks"]) || array_key_exists("actualTracks", $context) ? $context["actualTracks"] : (function () { throw new RuntimeError('Variable "actualTracks" does not exist.', 552, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["actualTrack"]) {
                    // line 553
                    echo "                                <h4>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualTrack"], "rendition", [], "any", false, false, false, 553), "name", [], "any", false, false, false, 553), "html", null, true);
                    echo "</h4>
                                <table class=\"table table-bordered table-striped table-hover table-sm actual-tracks\">
                                    <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                    // line 567
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["actualTrack"], "tracks", [], "any", false, false, false, 567));
                    foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                        // line 568
                        echo "                                        <tr>
                                            <td>";
                        // line 569
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "indexNumber", [], "any", false, false, false, 569), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 570
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 571
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 571), "numberArea", [], "any", false, false, false, 571)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 571), "numberDepartment", [], "any", false, false, false, 571) . " (") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 571), "numberArea", [], "any", false, false, false, 571)) . ")")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 571), "numberDepartment", [], "any", false, false, false, 571))), "html", null, true);
                        echo "</td>
                                            <td>";
                        // line 572
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "numberOperation", [], "any", false, false, false, 572)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "numberOperation", [], "any", false, false, false, 572), "html", null, true))) : (print ("")));
                        echo "</td>
                                            <td>";
                        // line 573
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "technologicalOperation", [], "any", false, false, false, 573)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "technologicalOperation", [], "any", false, false, false, 573), "fullName", [], "any", false, false, false, 573), "html", null, true))) : (print ("")));
                        echo "</td>
                                            <td>";
                        // line 574
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "timeProcessing", [], "any", false, false, false, 574)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "timeProcessing", [], "any", false, false, false, 574), "html", null, true))) : (print ("")));
                        echo "</td>
                                            <td>";
                        // line 575
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "timePiece", [], "any", false, false, false, 575)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "timePiece", [], "any", false, false, false, 575), "html", null, true))) : (print ("")));
                        echo "</td>
                                        </tr>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 578
                    echo "
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class=\"mt-5\"></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualTrack'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 594
                echo "                            ";
            } else {
                // line 595
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы маршруты
                                </div>
                            ";
            }
            // line 599
            echo "                            </div>
                        </div>
                    ";
        }
        // line 602
        echo "
                    ";
        // line 603
        if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 603, $this->source); })())) {
            // line 604
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab9\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab9-tab\">
                            <div class=\"card-body\">
                            ";
            // line 606
            if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 606, $this->source); })())) {
                // line 607
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Комментарий</th>
                                            <th>Пользователь</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 616
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 616, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 617
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 618
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 618), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 619
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "description", [], "any", false, false, false, 619), "html", null, true);
                    echo "</td>
                                                <td>

                                                   ";
                    // line 622
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 622)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 622), "fullName", [], "any", false, false, false, 622), "html", null, true))) : (print ("")));
                    echo "
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 626
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Комментарий</th>
                                            <th>Пользователь</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 636
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Нет комментариев
                                </div>
                            ";
            }
            // line 640
            echo "                            </div>
                            ";
            // line 643
            echo "                        </div>
                    ";
        }
        // line 645
        echo "                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 656
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 657
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

    
        \$(\".actual-tracks\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$(\"#specifications\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$(\"#entres\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$(\"#materials\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"";
        // line 716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$('[data-toggle=\"tooltip\"]').tooltip();

        let \$table = \$('#table');
        // let data = JSON.parse(
        //     '[{\"id\":1,\"pid\":0,\"amount\":1,\"name\":\"Труба с головками 6430-2929016\", \"document\":\"A4\"},' +
        //     '{\"id\":3,\"pid\":1,\"amount\":2,\"name\":\"Труба 6430-2919019\",\"document\":\"A4\"},' +
        //     '{\"id\":4,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":2,\"pid\":0,\"amount\":2,\"name\":\"Шарнир 64221-2919040\",\"document\":\"A4\"},' +
        //     '{\"id\":14,\"pid\":0,\"amount\":2,\"name\":\"Кольцо 64221-2919026\", \"document\":\"A4\"},' +
        //     '{\"id\":15,\"pid\":0,\"amount\":3,\"name\":\"Кольцо 64221-2919032-010\",\"document\":\"A4\"},' +
        //     '{\"id\":16,\"pid\":0,\"amount\":1,\"name\":\"Табличка ТРШ 18.00003\", \"document\":\"A4\"},' +
        //     '{\"id\":6,\"pid\":2,\"amount\":1,\"name\":\"Палец 64221-2919030\", \"document\":\"A4\"},' +
        //     '{\"id\":10,\"pid\":2,\"amount\":2,\"name\":\"Обойма 64221-2919048\", \"document\":\"A4\"},' +
        //     '{\"id\":11,\"pid\":2,\"amount\":0.3,\"name\":\"Резина 7-ИРП-1315 ТУ 38.105.1910-89\", \"document\":\"A4\"}]');
        //
        // let data = JSON.parse(
        //     '[{\"id\":1,\"pid\":0,\"amount\":1,\"name\":\"Труба с головками 6430-2929016\", \"document\":\"A4\"},' +
        //     '{\"id\":3,\"pid\":1,\"amount\":2,\"name\":\"Труба 6430-2919019\",\"document\":\"A4\"},' +
        //     '{\"id\":4,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":5,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":18,\"pid\":5,\"amount\":2,\"name\":\"Шарнир 64221-2919040\",\"document\":\"A4\"},' +
        //     '{\"id\":14,\"pid\":0,\"amount\":2,\"name\":\"Кольцо 64221-2919026\", \"document\":\"A4\"},' +
        //     '{\"id\":15,\"pid\":0,\"amount\":3,\"name\":\"Кольцо 64221-2919032-010\",\"document\":\"A4\"},' +
        //     '{\"id\":16,\"pid\":0,\"amount\":1,\"name\":\"Табличка ТРШ 18.00003\", \"document\":\"A4\"},' +
        //     '{\"id\":6,\"pid\":2,\"amount\":1,\"name\":\"Палец 64221-2919030\", \"document\":\"A4\"},' +
        //     '{\"id\":10,\"pid\":2,\"amount\":2,\"name\":\"Обойма 64221-2919048\", \"document\":\"A4\"},' +
        //     '{\"id\":11,\"pid\":2,\"amount\":0.3,\"name\":\"Резина 7-ИРП-1315 ТУ 38.105.1910-89\", \"document\":\"A4\"}]');

        let url = \"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detailing", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 748, $this->source); })()), "id", [], "any", false, false, false, 748)]), "html", null, true);
        echo "\";

        \$.ajax({
            type: 'post',
            url: url,
            data: {'_method': 'post', '_token': '";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("product-detailing"), "html", null, true);
        echo "'},
            dataType: 'json',
             timeout: 30000,
        }).done(function (result) {
            data = result['detailing'];
            //console.log('dataDEt');
            loadData(data);
        });

        function loadData(data) {

            \$table.bootstrapTable({
                data:data,
                idField: 'id',
                dataType:'jsonp',
                columns: [
                    // { field: 'check',  checkbox: true, formatter: function (value, row, index) {
                    //         if (row.check == true) {
                    //             // console.log(row.serverName);
                    //             //Установить выбрано
                    //             return {  checked: true };
                    //         }
                    //     }
                    // },

                    { field: 'name',  title: 'Номенклатура', sortable: true },
                    { field: 'amount',  title: 'Кол-во', sortable: true,  align: 'center'  },



                    { field: 'category',  title: 'Категория', sortable: true },

                    { field: 'track',  title: 'Маршрут', sortable: true },
                    ///{ field: 'document',  title: 'Документ КД', sortable: true },
                    //{ field: 'material',  title: 'Материал', sortable: true },
                    //{ field: 'amountMaterial',  title: 'Норма на 1шт', sortable: true },
                    //{ field: 'documentMaterial',  title: 'Документ', srtable: true },
                    //{ field: 'operate', title: 'operate', align: 'center', events : operateEvents, formatter: 'operateFormatter' },
                ],

                // bootstrap-table-treegrid.js Конфигурация плагина -- start

                //В каком столбце развернуть дерево
                treeShowField: 'name',
                //Укажите столбец родительского идентификатора
                parentIdField: 'pid',

                onResetView: function(data) {
                    console.log('load');
                    \$table.treegrid({
                        initialState: 'collapsed',// Все узлы свернуты
                        //initialState: 'expanded',// Все узлы развернуты, по умолчанию развернуты
                        treeColumn: 0,
                        // expanderExpandedClass: 'glyphicon glyphicon-minus',  //图标样式
                        // expanderCollapsedClass: 'glyphicon glyphicon-plus',
                        onChange: function() {
                            //\$table.bootstrapTable('resetWidth');
                        }
                    });

                    //Развернуть только узлы первого уровня дерева
                    // \$table.treegrid('getRootNodes').treegrid('expand');

                },
                onCheck:function(row){
                    var datas = \$table.bootstrapTable('getData');
                    // Проверить подкатегорию
                    selectChilds(datas,row,\"id\",\"pid\",true);

                    // Проверить родительскую категорию
                    selectParentChecked(datas,row,\"id\",\"pid\")

                    // Обновить данные
                    \$table.bootstrapTable('load', datas);
                },

                onUncheck:function(row){
                    var datas = \$table.bootstrapTable('getData');
                    selectChilds(datas,row,\"id\",\"pid\",false);
                    \$table.bootstrapTable('load', datas);
                },
                // bootstrap-table-treetreegrid.js Конфигурация плагина -- end
            });
        };

        // Кнопка форматирования
        function operateFormatter(value, row, index) {
            return [
                '<button type=\"button\" class=\"RoleOfadd btn-small  btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-plus\" ></i>&nbsp;Добавить</button>',
                '<button type=\"button\" class=\"RoleOfedit btn-small   btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-pencil-square-o\" ></i>&nbsp;Модифицировать</button>',
                '<button type=\"button\" class=\"RoleOfdelete btn-small   btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-trash-o\" ></i>&nbsp;Удалять</button>'
            ].join('');

        }
        // Тип формата
        function typeFormatter(value, row, index) {
            if (value === 'menu') {  return 'меню';  }
            if (value === 'button') {  return 'Кнопка'; }
            if (value === 'api') {  return 'интерфейс'; }
            return '-';
        }
        // Статус формата
        function statusFormatter(value, row, index) {
            if (value === 1) {
                return '<span class=\"label label-success\">Обычный</span>';
            } else {
                return '<span class=\"label label-default\">Запирание</span>';
            }
        }

        //Как заблокировать кнопку начальной операции
        window.operateEvents = {
            'click .RoleOfadd': function (e, value, row, index) {
                add(row.id);
            },
            'click .RoleOfdelete': function (e, value, row, index) {
                del(row.id);
            },
            'click .RoleOfedit': function (e, value, row, index) {
                update(row.id);
            }
        };
    </script>
    <script>
        function selectChilds(datas,row,id,pid,checked) {
            for(var i in datas){
                if(datas[i][pid] == row[id]){
                    datas[i].check=checked;
                    selectChilds(datas,datas[i],id,pid,checked);
                };
            }
        }

        function selectParentChecked(datas,row,id,pid){
            for(var i in datas){
                if(datas[i][id] == row[pid]){
                    datas[i].check=true;
                    selectParentChecked(datas,datas[i],id,pid);
                };
            }
        }

        function test() {
            var selRows = \$table.bootstrapTable(\"getSelections\");
            if(selRows.length == 0){
                alert(\"Выберите хотя бы одну строку\");
                return;
            }

            var postData = \"\";
            \$.each(selRows,function(i) {
                postData +=  this.id;
                if (i < selRows.length - 1) {
                    postData += \"， \";
                }
            });
            alert(\"Идентификатор выбранной вами строки：\"+postData);

        }

        function add(id) {
            alert(\"add метод , id = \" + id);
        }
        function del(id) {
            alert(\"del метод , id = \" + id);
        }
        function update(id) {
            alert(\"update метод , id = \" + id);
        }


    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let locProductTab = localStorage.getItem('product-tab');
            if (\$('#' + locProductTab).length) {
                \$('#' + locProductTab).tab('show');
            } else {
                \$('#custom-tabs-four-tab1-tab').tab('show');
            }

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('product-tab', selectedTabId);
            });

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1555 => 753,  1547 => 748,  1512 => 716,  1495 => 702,  1478 => 688,  1461 => 674,  1443 => 659,  1439 => 658,  1436 => 657,  1426 => 656,  1408 => 645,  1404 => 643,  1401 => 640,  1395 => 636,  1383 => 626,  1373 => 622,  1367 => 619,  1363 => 618,  1360 => 617,  1356 => 616,  1345 => 607,  1343 => 606,  1339 => 604,  1337 => 603,  1334 => 602,  1329 => 599,  1323 => 595,  1320 => 594,  1299 => 578,  1290 => 575,  1286 => 574,  1282 => 573,  1278 => 572,  1274 => 571,  1270 => 570,  1266 => 569,  1263 => 568,  1259 => 567,  1241 => 553,  1236 => 552,  1234 => 551,  1230 => 549,  1228 => 548,  1225 => 547,  1220 => 544,  1214 => 540,  1197 => 525,  1184 => 520,  1178 => 517,  1172 => 516,  1168 => 515,  1160 => 513,  1157 => 512,  1154 => 511,  1151 => 510,  1148 => 509,  1145 => 508,  1142 => 507,  1139 => 506,  1137 => 505,  1132 => 503,  1128 => 502,  1124 => 501,  1121 => 500,  1117 => 499,  1101 => 485,  1099 => 484,  1095 => 482,  1093 => 481,  1090 => 480,  1086 => 478,  1080 => 474,  1077 => 473,  1069 => 470,  1066 => 469,  1064 => 468,  1045 => 451,  1037 => 448,  1029 => 446,  1027 => 445,  1020 => 444,  1018 => 443,  1014 => 441,  1006 => 439,  1004 => 438,  1001 => 437,  997 => 435,  995 => 434,  992 => 433,  990 => 432,  986 => 430,  980 => 428,  974 => 426,  972 => 425,  965 => 422,  959 => 420,  957 => 419,  952 => 416,  946 => 415,  944 => 414,  939 => 411,  933 => 409,  931 => 408,  927 => 406,  919 => 404,  917 => 403,  913 => 401,  907 => 399,  905 => 398,  897 => 396,  893 => 395,  873 => 377,  865 => 374,  862 => 373,  860 => 372,  857 => 371,  855 => 370,  852 => 369,  850 => 368,  847 => 367,  842 => 364,  836 => 360,  820 => 346,  807 => 341,  801 => 338,  795 => 337,  791 => 336,  783 => 334,  780 => 333,  777 => 332,  774 => 331,  771 => 330,  768 => 329,  765 => 328,  762 => 327,  760 => 326,  755 => 324,  751 => 323,  748 => 322,  744 => 321,  729 => 308,  727 => 307,  723 => 305,  721 => 304,  718 => 303,  713 => 300,  707 => 296,  691 => 282,  678 => 277,  672 => 274,  666 => 273,  662 => 272,  654 => 270,  651 => 269,  648 => 268,  645 => 267,  642 => 266,  639 => 265,  636 => 264,  633 => 263,  631 => 262,  626 => 260,  622 => 259,  619 => 258,  615 => 257,  600 => 244,  598 => 243,  594 => 241,  592 => 240,  589 => 239,  585 => 237,  582 => 234,  576 => 230,  560 => 216,  547 => 211,  541 => 208,  535 => 207,  531 => 206,  523 => 204,  520 => 203,  517 => 202,  514 => 201,  511 => 200,  508 => 199,  505 => 198,  502 => 197,  500 => 196,  495 => 194,  491 => 193,  488 => 192,  484 => 191,  469 => 178,  467 => 177,  463 => 175,  461 => 174,  458 => 173,  453 => 170,  447 => 166,  443 => 164,  441 => 163,  437 => 161,  435 => 160,  430 => 157,  427 => 155,  415 => 151,  411 => 149,  407 => 148,  404 => 147,  399 => 143,  394 => 141,  389 => 139,  386 => 138,  384 => 137,  381 => 136,  376 => 134,  371 => 132,  368 => 131,  366 => 130,  363 => 129,  358 => 127,  353 => 125,  350 => 124,  348 => 123,  343 => 121,  339 => 120,  336 => 119,  331 => 116,  322 => 114,  318 => 113,  311 => 109,  308 => 108,  305 => 107,  300 => 105,  294 => 102,  291 => 101,  288 => 100,  283 => 98,  277 => 95,  274 => 94,  271 => 93,  266 => 91,  260 => 88,  257 => 87,  254 => 86,  249 => 84,  243 => 81,  240 => 80,  238 => 79,  235 => 78,  230 => 76,  225 => 75,  222 => 74,  217 => 72,  212 => 71,  209 => 70,  204 => 68,  199 => 67,  196 => 66,  191 => 64,  186 => 63,  184 => 62,  175 => 55,  169 => 51,  166 => 50,  160 => 46,  157 => 45,  151 => 41,  148 => 40,  142 => 36,  139 => 35,  133 => 31,  130 => 30,  124 => 26,  121 => 25,  115 => 21,  112 => 20,  106 => 16,  104 => 15,  93 => 6,  83 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.product'|trans }}: {{ product.name }} {{ product.designation }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Номенклатура</a>
                        </li>
                        {% if detailing %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Деталировка</a>
                        </li>
                        {% endif %}
                        {% if product.structures.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab3-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab3\" role=\"tab\" aria-controls=\"custom-tabs-four-tab3\" aria-selected=\"false\">Входимость</a>
                        </li>
                        {% endif %}
                        {% if product.specifications.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab4-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab4\" role=\"tab\" aria-controls=\"custom-tabs-four-tab4\" aria-selected=\"false\">Спецификации</a>
                        </li>
                        {% endif %}
                        {% if product.normDocuments.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab5-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab5\" role=\"tab\" aria-controls=\"custom-tabs-four-tab5\" aria-selected=\"false\">Документы установки норм расхода</a>
                        </li>
                        {% endif %}
                        {% if materials %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab6-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab6\" role=\"tab\" aria-controls=\"custom-tabs-four-tab6\" aria-selected=\"false\">Нормы расхода</a>
                        </li>
                        {% endif %}
                        {% if product.trackDocuments.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab7-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab7\" role=\"tab\" aria-controls=\"custom-tabs-four-tab7\" aria-selected=\"false\">Маршруты</a>
                        </li>
                        {% endif %}
                        {% if actualTracks %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab8-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab8\" role=\"tab\" aria-controls=\"custom-tabs-four-tab8\" aria-selected=\"false\">Актуальные маршруты</a>
                        </li>
                        {% endif %}
                        {% if comments %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab9-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab9\" role=\"tab\" aria-controls=\"custom-tabs-four-tab9\" aria-selected=\"false\">Комментарии</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        <div class=\"card-body\">
                            <dl>
                                {% if product.name %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ product.name }}</dd>
                                {% endif %}
                                {% if product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ product.designation }}</dd>
                                {% endif %}
                                {% if product.weight %}
                                    <dt>{{ 'label.weight'|trans }}</dt>
                                    <dd>{{ product.weight }}</dd>
                                {% endif %}
                                {% if product.unit %}
                                    <dt>{{ 'label.unit'|trans }}</dt>
                                    <dd>{{ product.unit.name }}</dd>
                                {% endif %}

                                {% if product.productGroup %}
                                    <dt>
                                        {{ 'label.product_group'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ product.productGroup.name }}</dd>
                                {% endif %}
                                {% if product.productType %}
                                    <dt>
                                        {{ 'label.product_type'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ product.productType.name }}</dd>
                                {% endif %}
                                {% if product.productKind %}
                                    <dt>
                                        {{ 'label.product_kind'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ product.productKind.name }}</dd>
                                {% endif %}
                                 {% if product.productCategory %}
                                    <dt>
                                        {{ 'label.product_category'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ product.productCategory.name }}</dd>
                                {% endif %}
                                {% if product.kdMaterials.count > 0 %}
                                    <dt>
                                        {{ 'label.materials'|trans }}
                                    </dt>
                                    <dd>
                                        <ul>
                                            {% for kdMaterial in product.kdMaterials %}
                                                <li>{{ kdMaterial.fullName }}</li>
                                            {% endfor %}
                                        </ul>
                                    </dd>
                                {% endif %}

                                <dt>{{ 'label.id_erp'|trans }}</dt>
                                <dd>{{ product.idErp }}</dd>

                                {% if product.calculation %}
                                    <dt>
                                        {{ 'label.calculation'|trans }}
                                    </dt>
                                    <dd>{{ product.calculation.name }}</dd>
                                {% endif %}

                                {% if product.analyticGroup %}
                                    <dt>
                                        {{ 'label.analytic_group'|trans }}
                                    </dt>
                                    <dd>{{ product.analyticGroup.name }}</dd>
                                {% endif %}

                                {% if product.financeGroup %}
                                    <dt>
                                        {{ 'label.finance_group'|trans }}
                                    </dt>
                                    <dd>{{ product.financeGroup.name }}</dd>
                                {% endif %}

                            </dl>

                            {# {% if is_granted(\"ROLE_ADMIN\") %} #}
                            <ul class=\"products-list product-list-in-card\">
                                {% for productRendition in productRenditions %}
                                <li class=\"item\">
                                    <div>
                                        <a href=\"{{ path('save_xml', {'id': product.id, 'rendition_id': productRendition.id }) }}\" class=\"product-title\">Выгрузить спецификацию - Вариант исполнения: {{ productRendition.name }}</a>
                                    </div>
                                </li>
                                {% endfor %}
                            </ul>
                            {# {% endif %} #}
                        </div>
                    </div>

                    {% if detailing %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            <div class=\"card-body\">
                            {% if detailing %}
                            <table id=\"table\" class=\"table table-bordered table-striped table-hover table-sm\"></table>
                            {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Спецификация не задана
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if product.structures.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab3\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab3-tab\">
                            <div class=\"card-body\">
                            {% if product.structures.count > 0 %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for structure in product.structures %}
                                            <tr role=\"row\">
                                                <td>{{ structure.specification.id }}</td>
                                                <td>{{ structure.specification.dateSpecification|date(\"d.m.Y\") }}</td>
                                                <td>
                                                {% set style = 'primary' %}
                                                {% if structure.specification.status == 1 %}
                                                        {% set style = 'primary' %}
                                                {% elseif structure.specification.status == 3%}
                                                        {% set style = 'success' %}
                                                {% else %}
                                                    {% set style = 'secondary' %}
                                                {% endif %}
                                                <span class='badge badge-{{style}}'>{{ specificationStatuses[structure.specification.status]|trans }}</span>
                                                </td>
                                                <td>{{ structure.specification.product.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: structure.specification.product.id}) }}' title=\"Открыть\">{{ structure.specification.product.name }}</a></td></td>
                                                <td>{{ structure.specification.rendition.name }}</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('specification_show', {id: structure.specification.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не входит в состав изделия/узла
                                </div>
                            {% endif %}
                            </div>
                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                    {% endif %}

                    {% if product.specifications.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab4\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab4-tab\">
                            <div class=\"card-body\">
                            {% if product.specifications.count > 0 %}
                                <table id=\"specifications\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for specification in product.specifications %}
                                            <tr role=\"row\">
                                                <td>{{ specification.id }}</td>
                                                <td>{{ specification.dateSpecification|date(\"d.m.Y\") }}</td>
                                                <td>
                                                {% set style = 'primary' %}
                                                {% if specification.status == 1 %}
                                                        {% set style = 'primary' %}
                                                {% elseif specification.status == 3%}
                                                        {% set style = 'success' %}
                                                {% else %}
                                                    {% set style = 'secondary' %}
                                                {% endif %}
                                                <span class='badge badge-{{style}}'>{{ specificationStatuses[specification.status]|trans }}</span>
                                                </td>
                                                <td>{{ specification.product.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: specification.product.id}) }}' title=\"Открыть\">{{ specification.product.name }}</a></td></td>
                                                <td>{{ specification.rendition.name }}</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('specification_show', {id: specification.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Спецификация не задана
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if product.normDocuments.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab5\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab5-tab\">
                            <div class=\"card-body\">
                            {% if product.normDocuments.count > 0 %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for normDocument in product.normDocuments %}
                                            <tr role=\"row\">
                                                <td>{{ normDocument.id }}</td>
                                                <td>{{ normDocument.dateDocument|date(\"d.m.Y\") }}</td>
                                                <td>
                                                {% set style = 'primary' %}
                                                {% if normDocument.status == 1 %}
                                                        {% set style = 'primary' %}
                                                {% elseif normDocument.status == 3%}
                                                        {% set style = 'success' %}
                                                {% else %}
                                                    {% set style = 'secondary' %}
                                                {% endif %}
                                                <span class='badge badge-{{style}}'>{{ normDocumentStatuses[normDocument.status]|trans }}</span>
                                                </td>
                                                <td>{{ normDocument.product.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: normDocument.product.id}) }}' title=\"Открыть\">{{ normDocument.product.name }}</a></td></td>
                                                <td>{{ normDocument.rendition.name }}</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('norm_document_show', {id: normDocument.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы нормы расхода
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if materials %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab6\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab6-tab\">
                            {% if materials %}

                                {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\")) %}
                                    <div class=\"card-header\">
                                        <button type=\"button\" onclick='location.href = \"{{ path('print_product_material_norms', {'id': product.id}) }}\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> {{ 'title.print'|trans }}</button>
                                    </div>
                                {% endif %}

                                <div class=\"card-body\">

                                <table id=\"materials\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Номенклатура</th>
                                            <th>Кол-во</th>
                                            <th>Категория</th>
                                            <th>Ст. кальк. номенкл.</th>
                                            <th>Материал</th>
                                            <th>Ст. кальк. мат.</th>
                                            <th>Основной</th>
                                            <th>Норма на деталь</th>
                                            <th>Норма на изделие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for material in materials %}
                                            <tr role=\"row\" {% if material.mainReplacement == 2 %}class=\"text-secondary\"{% endif %}>
                                                <td>
                                                    {% if material.intype != 3 %}
                                                        {{ material.name }}
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if material.amount and material.intype != 3 %}
                                                        {{ material.amount }} {{ material.amountUnit }}
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if material.intype != 3 %}
                                                        {{ material.category }}
                                                    {% endif %}
                                                </td>

                                                <td>
                                                    {% if material.intype != 3 %}
                                                        <small>{{ material.calculationName }}</small>
                                                    {% endif %} 
                                                </td>
                                                <td>
                                                    {% if material.intype == 3 %}
                                                        {{ material.name }}
                                                    {% endif %}
                                                    {{ material.material }}
                                                </td>
                                                <td>
                                                    {% if material.intype == 3 %}
                                                       <small>{{ material.calculationName }}</small>
                                                    {% else %}
                                                        <small>{{ material.materialCalc }}</small>
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if material.mainReplacement == 1 %}
                                                        <span class='badge badge-success'>Да</span>
                                                    {% elseif material.mainReplacement == 2 %}
                                                        <span class='badge badge-warning'>Замена</span>
                                                    {% endif %}
                                                <td>
                                                    {% if material.amountOne %}
                                                        {{ material.amountOne }} {{ material.amountOne?material.amountUnitMaterial:'' }}
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if material.intype != 3 %}
                                                        {{ material.amount }} {{ material.amountUnit }}
                                                    {% elseif material.amountMaterial %}
                                                        {{ material.amountMaterial }} {{ material.amountUnitMaterial }}
                                                    {% endif %}
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Номенклатура</th>
                                            <th>Кол-во</th>
                                            <th>Категория</th>
                                            <th>Ст. кальк. номенкл.</th>
                                            <th>Материал</th>
                                            <th>Ст. кальк. мат.</th>
                                            <th>Основной</th>
                                            <th>Норма на деталь</th>
                                            <th>Норма на изделие</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>

                                {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\")) %}
                                    <div class=\"card-footer\">
                                        <button type=\"button\" onclick='location.href = \"{{ path('print_product_material_norms', {'id': product.id}) }}\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> {{ 'title.print'|trans }}</button>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Нормы расхода материалов не заданы
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}

                    {% if product.trackDocuments.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab7\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab7-tab\">
                            <div class=\"card-body\">
                            {% if product.trackDocuments.count > 0 %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата нач.</th>
                                            <th>Дата кон.</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for trackDocument in product.trackDocuments %}
                                            <tr role=\"row\">
                                                <td>{{ trackDocument.id }}</td>
                                                <td>{{ trackDocument.dateStart?trackDocument.dateStart|date(\"d.m.Y\"):'' }}</td>
                                                <td>{{ trackDocument.dateEnd?trackDocument.dateEnd|date(\"d.m.Y\"):'' }}</td>
                                                <td>
                                                {% set style = 'primary' %}
                                                {% if trackDocument.status == 1 %}
                                                        {% set style = 'primary' %}
                                                {% elseif trackDocument.status == 3%}
                                                        {% set style = 'success' %}
                                                {% else %}
                                                    {% set style = 'secondary' %}
                                                {% endif %}
                                                <span class='badge badge-{{style}}'>{{ trackDocumentStatuses[trackDocument.status]|trans }}</span>
                                                </td>
                                                <td>{{ trackDocument.product.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: trackDocument.product.id}) }}' title=\"Открыть\">{{ trackDocument.product.name }}</a></td></td>
                                                <td>{{ trackDocument.rendition.name }}</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('track_document_show', {id: trackDocument.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата нач.</th>
                                            <th>Дата кон.</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы маршруты
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if actualTracks %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab8\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab8-tab\">
                            <div class=\"card-body\">
                            {% if actualTracks %}
                                {% for actualTrack in actualTracks %}
                                <h4>{{ actualTrack.rendition.name }}</h4>
                                <table class=\"table table-bordered table-striped table-hover table-sm actual-tracks\">
                                    <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for track in actualTrack.tracks %}
                                        <tr>
                                            <td>{{ track.indexNumber }}</td>
                                            <td>{{ track.department.name }}</td>
                                            <td>{{ track.department.numberArea?track.department.numberDepartment~' ('~track.department.numberArea~')':track.department.numberDepartment }}</td>
                                            <td>{{ track.numberOperation?track.numberOperation:'' }}</td>
                                            <td>{{ track.technologicalOperation?track.technologicalOperation.fullName:'' }}</td>
                                            <td>{{ track.timeProcessing?track.timeProcessing:'' }}</td>
                                            <td>{{ track.timePiece?track.timePiece:'' }}</td>
                                        </tr>
                                        {% endfor %}

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class=\"mt-5\"></div>
                                {% endfor %}
                            {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы маршруты
                                </div>
                            {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if comments %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab9\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab9-tab\">
                            <div class=\"card-body\">
                            {% if comments %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Комментарий</th>
                                            <th>Пользователь</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for comment in comments %}
                                            <tr role=\"row\">
                                                <td>{{ comment.createdAt|date(\"d.m.Y\") }}</td>
                                                <td>{{ comment.description }}</td>
                                                <td>

                                                   {{ comment.user?comment.user.fullName:'' }}
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Комментарий</th>
                                            <th>Пользователь</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Нет комментариев
                                </div>
                            {% endif %}
                            </div>
                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                    {% endif %}
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

{% endblock %}


{% block javascripts %}
    <!-- jquery-validation -->
    <script src=\"{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/jquery-validation/additional-methods.min.js') }}\"></script>

    <script type=\"text/javascript\">

    
        \$(\".actual-tracks\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
            }
        });

        \$(\"#specifications\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
            }
        });

        \$(\"#entres\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
            }
        });

        \$(\"#materials\").DataTable({
            \"stateSave\": true,
            \"processing\": true,
            \"responsive\": true,
            \"autoWidth\": false,
            \"paging\": true,
            \"info\": true,
            \"searching\": true,
            \"pageLength\": 25,
            \"language\": {
                 \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
            }
        });

        \$('[data-toggle=\"tooltip\"]').tooltip();

        let \$table = \$('#table');
        // let data = JSON.parse(
        //     '[{\"id\":1,\"pid\":0,\"amount\":1,\"name\":\"Труба с головками 6430-2929016\", \"document\":\"A4\"},' +
        //     '{\"id\":3,\"pid\":1,\"amount\":2,\"name\":\"Труба 6430-2919019\",\"document\":\"A4\"},' +
        //     '{\"id\":4,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":2,\"pid\":0,\"amount\":2,\"name\":\"Шарнир 64221-2919040\",\"document\":\"A4\"},' +
        //     '{\"id\":14,\"pid\":0,\"amount\":2,\"name\":\"Кольцо 64221-2919026\", \"document\":\"A4\"},' +
        //     '{\"id\":15,\"pid\":0,\"amount\":3,\"name\":\"Кольцо 64221-2919032-010\",\"document\":\"A4\"},' +
        //     '{\"id\":16,\"pid\":0,\"amount\":1,\"name\":\"Табличка ТРШ 18.00003\", \"document\":\"A4\"},' +
        //     '{\"id\":6,\"pid\":2,\"amount\":1,\"name\":\"Палец 64221-2919030\", \"document\":\"A4\"},' +
        //     '{\"id\":10,\"pid\":2,\"amount\":2,\"name\":\"Обойма 64221-2919048\", \"document\":\"A4\"},' +
        //     '{\"id\":11,\"pid\":2,\"amount\":0.3,\"name\":\"Резина 7-ИРП-1315 ТУ 38.105.1910-89\", \"document\":\"A4\"}]');
        //
        // let data = JSON.parse(
        //     '[{\"id\":1,\"pid\":0,\"amount\":1,\"name\":\"Труба с головками 6430-2929016\", \"document\":\"A4\"},' +
        //     '{\"id\":3,\"pid\":1,\"amount\":2,\"name\":\"Труба 6430-2919019\",\"document\":\"A4\"},' +
        //     '{\"id\":4,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":5,\"pid\":1,\"amount\":1,\"name\":\"Головка 64221-2919022\",\"document\":\"A4\"},' +
        //     '{\"id\":18,\"pid\":5,\"amount\":2,\"name\":\"Шарнир 64221-2919040\",\"document\":\"A4\"},' +
        //     '{\"id\":14,\"pid\":0,\"amount\":2,\"name\":\"Кольцо 64221-2919026\", \"document\":\"A4\"},' +
        //     '{\"id\":15,\"pid\":0,\"amount\":3,\"name\":\"Кольцо 64221-2919032-010\",\"document\":\"A4\"},' +
        //     '{\"id\":16,\"pid\":0,\"amount\":1,\"name\":\"Табличка ТРШ 18.00003\", \"document\":\"A4\"},' +
        //     '{\"id\":6,\"pid\":2,\"amount\":1,\"name\":\"Палец 64221-2919030\", \"document\":\"A4\"},' +
        //     '{\"id\":10,\"pid\":2,\"amount\":2,\"name\":\"Обойма 64221-2919048\", \"document\":\"A4\"},' +
        //     '{\"id\":11,\"pid\":2,\"amount\":0.3,\"name\":\"Резина 7-ИРП-1315 ТУ 38.105.1910-89\", \"document\":\"A4\"}]');

        let url = \"{{ path('product_detailing', { 'id': product.id }) }}\";

        \$.ajax({
            type: 'post',
            url: url,
            data: {'_method': 'post', '_token': '{{ csrf_token('product-detailing') }}'},
            dataType: 'json',
             timeout: 30000,
        }).done(function (result) {
            data = result['detailing'];
            //console.log('dataDEt');
            loadData(data);
        });

        function loadData(data) {

            \$table.bootstrapTable({
                data:data,
                idField: 'id',
                dataType:'jsonp',
                columns: [
                    // { field: 'check',  checkbox: true, formatter: function (value, row, index) {
                    //         if (row.check == true) {
                    //             // console.log(row.serverName);
                    //             //Установить выбрано
                    //             return {  checked: true };
                    //         }
                    //     }
                    // },

                    { field: 'name',  title: 'Номенклатура', sortable: true },
                    { field: 'amount',  title: 'Кол-во', sortable: true,  align: 'center'  },



                    { field: 'category',  title: 'Категория', sortable: true },

                    { field: 'track',  title: 'Маршрут', sortable: true },
                    ///{ field: 'document',  title: 'Документ КД', sortable: true },
                    //{ field: 'material',  title: 'Материал', sortable: true },
                    //{ field: 'amountMaterial',  title: 'Норма на 1шт', sortable: true },
                    //{ field: 'documentMaterial',  title: 'Документ', srtable: true },
                    //{ field: 'operate', title: 'operate', align: 'center', events : operateEvents, formatter: 'operateFormatter' },
                ],

                // bootstrap-table-treegrid.js Конфигурация плагина -- start

                //В каком столбце развернуть дерево
                treeShowField: 'name',
                //Укажите столбец родительского идентификатора
                parentIdField: 'pid',

                onResetView: function(data) {
                    console.log('load');
                    \$table.treegrid({
                        initialState: 'collapsed',// Все узлы свернуты
                        //initialState: 'expanded',// Все узлы развернуты, по умолчанию развернуты
                        treeColumn: 0,
                        // expanderExpandedClass: 'glyphicon glyphicon-minus',  //图标样式
                        // expanderCollapsedClass: 'glyphicon glyphicon-plus',
                        onChange: function() {
                            //\$table.bootstrapTable('resetWidth');
                        }
                    });

                    //Развернуть только узлы первого уровня дерева
                    // \$table.treegrid('getRootNodes').treegrid('expand');

                },
                onCheck:function(row){
                    var datas = \$table.bootstrapTable('getData');
                    // Проверить подкатегорию
                    selectChilds(datas,row,\"id\",\"pid\",true);

                    // Проверить родительскую категорию
                    selectParentChecked(datas,row,\"id\",\"pid\")

                    // Обновить данные
                    \$table.bootstrapTable('load', datas);
                },

                onUncheck:function(row){
                    var datas = \$table.bootstrapTable('getData');
                    selectChilds(datas,row,\"id\",\"pid\",false);
                    \$table.bootstrapTable('load', datas);
                },
                // bootstrap-table-treetreegrid.js Конфигурация плагина -- end
            });
        };

        // Кнопка форматирования
        function operateFormatter(value, row, index) {
            return [
                '<button type=\"button\" class=\"RoleOfadd btn-small  btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-plus\" ></i>&nbsp;Добавить</button>',
                '<button type=\"button\" class=\"RoleOfedit btn-small   btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-pencil-square-o\" ></i>&nbsp;Модифицировать</button>',
                '<button type=\"button\" class=\"RoleOfdelete btn-small   btn-primary\" style=\"margin-right:15px;\"><i class=\"fa fa-trash-o\" ></i>&nbsp;Удалять</button>'
            ].join('');

        }
        // Тип формата
        function typeFormatter(value, row, index) {
            if (value === 'menu') {  return 'меню';  }
            if (value === 'button') {  return 'Кнопка'; }
            if (value === 'api') {  return 'интерфейс'; }
            return '-';
        }
        // Статус формата
        function statusFormatter(value, row, index) {
            if (value === 1) {
                return '<span class=\"label label-success\">Обычный</span>';
            } else {
                return '<span class=\"label label-default\">Запирание</span>';
            }
        }

        //Как заблокировать кнопку начальной операции
        window.operateEvents = {
            'click .RoleOfadd': function (e, value, row, index) {
                add(row.id);
            },
            'click .RoleOfdelete': function (e, value, row, index) {
                del(row.id);
            },
            'click .RoleOfedit': function (e, value, row, index) {
                update(row.id);
            }
        };
    </script>
    <script>
        function selectChilds(datas,row,id,pid,checked) {
            for(var i in datas){
                if(datas[i][pid] == row[id]){
                    datas[i].check=checked;
                    selectChilds(datas,datas[i],id,pid,checked);
                };
            }
        }

        function selectParentChecked(datas,row,id,pid){
            for(var i in datas){
                if(datas[i][id] == row[pid]){
                    datas[i].check=true;
                    selectParentChecked(datas,datas[i],id,pid);
                };
            }
        }

        function test() {
            var selRows = \$table.bootstrapTable(\"getSelections\");
            if(selRows.length == 0){
                alert(\"Выберите хотя бы одну строку\");
                return;
            }

            var postData = \"\";
            \$.each(selRows,function(i) {
                postData +=  this.id;
                if (i < selRows.length - 1) {
                    postData += \"， \";
                }
            });
            alert(\"Идентификатор выбранной вами строки：\"+postData);

        }

        function add(id) {
            alert(\"add метод , id = \" + id);
        }
        function del(id) {
            alert(\"del метод , id = \" + id);
        }
        function update(id) {
            alert(\"update метод , id = \" + id);
        }


    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let locProductTab = localStorage.getItem('product-tab');
            if (\$('#' + locProductTab).length) {
                \$('#' + locProductTab).tab('show');
            } else {
                \$('#custom-tabs-four-tab1-tab').tab('show');
            }

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('product-tab', selectedTabId);
            });

        });
    </script>

{% endblock %}", "product/show.html.twig", "/var/www/project/templates/product/show.html.twig");
    }
}
