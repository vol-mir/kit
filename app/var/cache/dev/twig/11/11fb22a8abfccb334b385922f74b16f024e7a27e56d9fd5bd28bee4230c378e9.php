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

/* material/show.html.twig */
class __TwigTemplate_1911f564e7165459712677bc8688bb258610569ec99f1c9e5621d7091d8c97ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "material/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.material"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Материал</a>
                        </li>
                        ";
        // line 15
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 15, $this->source); })()), "kdProducts", [], "any", false, false, false, 15), "count", [], "any", false, false, false, 15), 0))) {
            // line 16
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Установлен по КД</a>
                        </li>
                        ";
        }
        // line 20
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 20, $this->source); })()), "structures", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20), 0))) {
            // line 21
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab3-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab3\" role=\"tab\" aria-controls=\"custom-tabs-four-tab3\" aria-selected=\"false\">Входимость в спецификации</a>
                        </li>
                        ";
        }
        // line 25
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 25, $this->source); })()), "materialNorms", [], "any", false, false, false, 25), "count", [], "any", false, false, false, 25), 0))) {
            // line 26
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab4-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab4\" role=\"tab\" aria-controls=\"custom-tabs-four-tab4\" aria-selected=\"false\">Нормы расхода</a>
                        </li>
                        ";
        }
        // line 30
        echo "                        ";
        if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab5-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab5\" role=\"tab\" aria-controls=\"custom-tabs-four-tab5\" aria-selected=\"false\">Комментарии</a>
                        </li>
                        ";
        }
        // line 35
        echo "                    </ul>
                </div>
                <div class=\"card-body\">
                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                <dt>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        echo "</dt>
                                <dd>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "</dd>

                                ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 44, $this->source); })()), "profileName", [], "any", false, false, false, 44)) {
            // line 45
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile_name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 46, $this->source); })()), "profileName", [], "any", false, false, false, 46), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 48
        echo "
                                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 49, $this->source); })()), "profile", [], "any", false, false, false, 49)) {
            // line 50
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 51, $this->source); })()), "profile", [], "any", false, false, false, 51), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 53
        echo "
                                ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 54, $this->source); })()), "profileStandard", [], "any", false, false, false, 54)) {
            // line 55
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile_standard"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 56, $this->source); })()), "profileStandard", [], "any", false, false, false, 56), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 58
        echo "
                                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 59, $this->source); })()), "mark", [], "any", false, false, false, 59)) {
            // line 60
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.mark"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 61, $this->source); })()), "mark", [], "any", false, false, false, 61), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 63
        echo "
                                ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 64, $this->source); })()), "markStandard", [], "any", false, false, false, 64)) {
            // line 65
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.mark_standard"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 66, $this->source); })()), "markStandard", [], "any", false, false, false, 66), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 68
        echo "
                                ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 69, $this->source); })()), "materialKind", [], "any", false, false, false, 69)) {
            // line 70
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.material_kind"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 71, $this->source); })()), "materialKind", [], "any", false, false, false, 71), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 73
        echo "
                                ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 74, $this->source); })()), "unit", [], "any", false, false, false, 74)) {
            // line 75
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 76, $this->source); })()), "unit", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 78
        echo "
                                ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 79, $this->source); })()), "productGroup", [], "any", false, false, false, 79)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 84, $this->source); })()), "productGroup", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 86
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 86, $this->source); })()), "productType", [], "any", false, false, false, 86)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 91, $this->source); })()), "productType", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 93
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 93, $this->source); })()), "productKind", [], "any", false, false, false, 93)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 98, $this->source); })()), "productKind", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 100
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 100, $this->source); })()), "productCategory", [], "any", false, false, false, 100)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 105, $this->source); })()), "productCategory", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 107
        echo "
                                ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 108, $this->source); })()), "calculation", [], "any", false, false, false, 108)) {
            // line 109
            echo "                                    <dt>
                                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.calculation"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 112, $this->source); })()), "calculation", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 114
        echo "
                                ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 115, $this->source); })()), "analyticGroup", [], "any", false, false, false, 115)) {
            // line 116
            echo "                                    <dt>
                                        ";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.analytic_group"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 119, $this->source); })()), "analyticGroup", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 121
        echo "
                                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 122, $this->source); })()), "financeGroup", [], "any", false, false, false, 122)) {
            // line 123
            echo "                                    <dt>
                                        ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.finance_group"), "html", null, true);
            echo "
                                    </dt>
                                    <dd>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 126, $this->source); })()), "financeGroup", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 128
        echo "                            </dl>
                        </div>
                        ";
        // line 130
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 130, $this->source); })()), "kdProducts", [], "any", false, false, false, 130), "count", [], "any", false, false, false, 130), 0))) {
            // line 131
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            ";
            // line 132
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 132, $this->source); })()), "kdProducts", [], "any", false, false, false, 132), "count", [], "any", false, false, false, 132), 0))) {
                // line 133
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 142, $this->source); })()), "kdProducts", [], "any", false, false, false, 142));
                foreach ($context['_seq'] as $context["_key"] => $context["kdProduct"]) {
                    // line 143
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdProduct"], "designation", [], "any", false, false, false, 144), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 145
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["kdProduct"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdProduct"], "name", [], "any", false, false, false, 145), "html", null, true);
                    echo "</a></td></td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 148
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["kdProduct"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kdProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 163
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не используется
                                </div>
                            ";
            }
            // line 167
            echo "                            ";
            // line 169
            echo "                        </div>
                        ";
        }
        // line 171
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 171, $this->source); })()), "structures", [], "any", false, false, false, 171), "count", [], "any", false, false, false, 171), 0))) {
            // line 172
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab3\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab3-tab\">
                            ";
            // line 173
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 173, $this->source); })()), "structures", [], "any", false, false, false, 173), "count", [], "any", false, false, false, 173), 0))) {
                // line 174
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
                // line 187
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 187, $this->source); })()), "structures", [], "any", false, false, false, 187));
                foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
                    // line 188
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 190
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 190), "dateSpecification", [], "any", false, false, false, 190), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 192
                    $context["style"] = "primary";
                    // line 193
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 193), "status", [], "any", false, false, false, 193), 1))) {
                        // line 194
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 195
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 195), "status", [], "any", false, false, false, 195), 3))) {
                        // line 196
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 197
                        echo "                                                ";
                    } else {
                        // line 198
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 199
                        echo "                                                ";
                    }
                    // line 200
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 200, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 200, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 200), "status", [], "any", false, false, false, 200), [], "array", false, false, false, 200)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 202), "product", [], "any", false, false, false, 202), "designation", [], "any", false, false, false, 202), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 203
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 203), "product", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 203), "product", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 204
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 204), "rendition", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                    echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 207
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207)]), "html", null, true);
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
                // line 212
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
                // line 226
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не входит в состав изделия/узла
                                </div>
                            ";
            }
            // line 230
            echo "                            ";
            // line 232
            echo "                        </div>
                        ";
        }
        // line 234
        echo "                        ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 234, $this->source); })()), "materialNorms", [], "any", false, false, false, 234), "count", [], "any", false, false, false, 234), 0))) {
            // line 235
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab4\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab4-tab\">
                            ";
            // line 236
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 236, $this->source); })()), "materialNorms", [], "any", false, false, false, 236), "count", [], "any", false, false, false, 236), 0))) {
                // line 237
                echo "                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th>Норма на деталь</th>
                                            <th>Ед.изм.</th>
                                            <th>Основной</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 253, $this->source); })()), "materialNorms", [], "any", false, false, false, 253));
                foreach ($context['_seq'] as $context["_key"] => $context["materialNorm"]) {
                    // line 254
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 255
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 255), "id", [], "any", false, false, false, 255), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 256
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 256), "dateDocument", [], "any", false, false, false, 256), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 258
                    $context["style"] = "primary";
                    // line 259
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 259), "status", [], "any", false, false, false, 259), 1))) {
                        // line 260
                        echo "                                                        ";
                        $context["style"] = "primary";
                        // line 261
                        echo "                                                ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 261), "status", [], "any", false, false, false, 261), 3))) {
                        // line 262
                        echo "                                                        ";
                        $context["style"] = "success";
                        // line 263
                        echo "                                                ";
                    } else {
                        // line 264
                        echo "                                                    ";
                        $context["style"] = "secondary";
                        // line 265
                        echo "                                                ";
                    }
                    // line 266
                    echo "                                                <span class='badge badge-";
                    echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 266, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["normDocumentStatuses"]) || array_key_exists("normDocumentStatuses", $context) ? $context["normDocumentStatuses"] : (function () { throw new RuntimeError('Variable "normDocumentStatuses" does not exist.', 266, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 266), "status", [], "any", false, false, false, 266), [], "array", false, false, false, 266)), "html", null, true);
                    echo "</span>
                                                </td>
                                                <td>";
                    // line 268
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 268), "product", [], "any", false, false, false, 268), "designation", [], "any", false, false, false, 268), "html", null, true);
                    echo "</td>
                                                <td><a href='";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 269), "product", [], "any", false, false, false, 269), "id", [], "any", false, false, false, 269)]), "html", null, true);
                    echo "' title=\"Открыть\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 269), "product", [], "any", false, false, false, 269), "name", [], "any", false, false, false, 269), "html", null, true);
                    echo "</a></td></td>
                                                <td>";
                    // line 270
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 270), "rendition", [], "any", false, false, false, 270), "name", [], "any", false, false, false, 270), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "amount", [], "any", false, false, false, 271), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 272
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "material", [], "any", false, false, false, 272), "unit", [], "any", false, false, false, 272), "name", [], "any", false, false, false, 272), "html", null, true);
                    echo "</td>
                                                <td>
                                                ";
                    // line 274
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["materialNorm"], "mainReplacement", [], "any", false, false, false, 274), 1))) {
                        // line 275
                        echo "                                                    <span class='badge badge-success'>Да</span>
                                                ";
                    } else {
                        // line 277
                        echo "                                                    <span class='badge badge-warning'>Замена</span>

                                                ";
                    }
                    // line 280
                    echo "                                                </td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                    // line 283
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["materialNorm"], "normDocument", [], "any", false, false, false, 283), "id", [], "any", false, false, false, 283)]), "html", null, true);
                    echo "' class='btn btn-secondary' title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
                    echo "\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materialNorm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th>Норма</th>
                                            <th>Основной</th>
                                            <th>Ед.изм.</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                ";
            } else {
                // line 305
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы нормы расхода
                                </div>
                            ";
            }
            // line 309
            echo "                            ";
            // line 311
            echo "                        </div>
                        ";
        }
        // line 313
        echo "                        ";
        if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 313, $this->source); })())) {
            // line 314
            echo "                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab5\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab5-tab\">

                            ";
            // line 316
            if ((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 316, $this->source); })())) {
                // line 317
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
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 326, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 327
                    echo "                                            <tr role=\"row\">
                                                <td>";
                    // line 328
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 328), "d.m.Y"), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 329
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "description", [], "any", false, false, false, 329), "html", null, true);
                    echo "</td>
                                                <td>

                                                   ";
                    // line 332
                    ((twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 332)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 332), "fullName", [], "any", false, false, false, 332), "html", null, true))) : (print ("")));
                    echo "
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
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
                // line 346
                echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Нет комментариев
                                </div>
                            ";
            }
            // line 350
            echo "
                            ";
            // line 353
            echo "                        </div>
                    ";
        }
        // line 355
        echo "                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
    <!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 367
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 368
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

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
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$('[data-toggle=\"tooltip\"]').tooltip();
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let locDocumentTab = localStorage.getItem('document-tab');
            if (\$('#' + locDocumentTab).length) {
                \$('#' + locDocumentTab).tab('show');
            } else {
                \$('#custom-tabs-four-tab1-tab').tab('show');
            }

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('document-tab', selectedTabId);
            });

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "material/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  867 => 384,  850 => 370,  846 => 369,  843 => 368,  833 => 367,  814 => 355,  810 => 353,  807 => 350,  801 => 346,  789 => 336,  779 => 332,  773 => 329,  769 => 328,  766 => 327,  762 => 326,  751 => 317,  749 => 316,  745 => 314,  742 => 313,  738 => 311,  736 => 309,  730 => 305,  711 => 288,  698 => 283,  693 => 280,  688 => 277,  684 => 275,  682 => 274,  677 => 272,  673 => 271,  669 => 270,  663 => 269,  659 => 268,  651 => 266,  648 => 265,  645 => 264,  642 => 263,  639 => 262,  636 => 261,  633 => 260,  630 => 259,  628 => 258,  623 => 256,  619 => 255,  616 => 254,  612 => 253,  594 => 237,  592 => 236,  589 => 235,  586 => 234,  582 => 232,  580 => 230,  574 => 226,  558 => 212,  545 => 207,  539 => 204,  533 => 203,  529 => 202,  521 => 200,  518 => 199,  515 => 198,  512 => 197,  509 => 196,  506 => 195,  503 => 194,  500 => 193,  498 => 192,  493 => 190,  489 => 189,  486 => 188,  482 => 187,  467 => 174,  465 => 173,  462 => 172,  459 => 171,  455 => 169,  453 => 167,  447 => 163,  435 => 153,  422 => 148,  414 => 145,  410 => 144,  407 => 143,  403 => 142,  392 => 133,  390 => 132,  387 => 131,  385 => 130,  381 => 128,  376 => 126,  371 => 124,  368 => 123,  366 => 122,  363 => 121,  358 => 119,  353 => 117,  350 => 116,  348 => 115,  345 => 114,  340 => 112,  335 => 110,  332 => 109,  330 => 108,  327 => 107,  322 => 105,  316 => 102,  313 => 101,  310 => 100,  305 => 98,  299 => 95,  296 => 94,  293 => 93,  288 => 91,  282 => 88,  279 => 87,  276 => 86,  271 => 84,  265 => 81,  262 => 80,  260 => 79,  257 => 78,  252 => 76,  247 => 75,  245 => 74,  242 => 73,  237 => 71,  232 => 70,  230 => 69,  227 => 68,  222 => 66,  217 => 65,  215 => 64,  212 => 63,  207 => 61,  202 => 60,  200 => 59,  197 => 58,  192 => 56,  187 => 55,  185 => 54,  182 => 53,  177 => 51,  172 => 50,  170 => 49,  167 => 48,  162 => 46,  157 => 45,  155 => 44,  150 => 42,  146 => 41,  138 => 35,  132 => 31,  129 => 30,  123 => 26,  120 => 25,  114 => 21,  111 => 20,  105 => 16,  103 => 15,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.material'|trans }}: {{ material.name }} {% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Материал</a>
                        </li>
                        {% if material.kdProducts.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Установлен по КД</a>
                        </li>
                        {% endif %}
                        {% if material.structures.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab3-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab3\" role=\"tab\" aria-controls=\"custom-tabs-four-tab3\" aria-selected=\"false\">Входимость в спецификации</a>
                        </li>
                        {% endif %}
                        {% if material.materialNorms.count > 0 %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab4-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab4\" role=\"tab\" aria-controls=\"custom-tabs-four-tab4\" aria-selected=\"false\">Нормы расхода</a>
                        </li>
                        {% endif %}
                        {% if comments %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab5-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab5\" role=\"tab\" aria-controls=\"custom-tabs-four-tab5\" aria-selected=\"false\">Комментарии</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
                <div class=\"card-body\">
                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                <dt>{{ 'label.name'|trans }}</dt>
                                <dd>{{ material.name }}</dd>

                                {% if material.profileName %}
                                    <dt>{{ 'label.profile_name'|trans }}</dt>
                                    <dd>{{ material.profileName }}</dd>
                                {% endif %}

                                {% if material.profile %}
                                    <dt>{{ 'label.profile'|trans }}</dt>
                                    <dd>{{ material.profile}}</dd>
                                {% endif %}

                                {% if material.profileStandard %}
                                    <dt>{{ 'label.profile_standard'|trans }}</dt>
                                    <dd>{{ material.profileStandard}}</dd>
                                {% endif %}

                                {% if material.mark %}
                                    <dt>{{ 'label.mark'|trans }}</dt>
                                    <dd>{{ material.mark }}</dd>
                                {% endif %}

                                {% if material.markStandard %}
                                    <dt>{{ 'label.mark_standard'|trans }}</dt>
                                    <dd>{{ material.markStandard }}</dd>
                                {% endif %}

                                {% if material.materialKind %}
                                    <dt>{{ 'label.material_kind'|trans }}</dt>
                                    <dd>{{ material.materialKind }}</dd>
                                {% endif %}

                                {% if material.unit %}
                                    <dt>{{ 'label.unit'|trans }}</dt>
                                    <dd>{{ material.unit.name }}</dd>
                                {% endif %}

                                {% if material.productGroup %}
                                    <dt>
                                        {{ 'label.product_group'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ material.productGroup.name }}</dd>
                                {% endif %}
                                {% if material.productType %}
                                    <dt>
                                        {{ 'label.product_type'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ material.productType.name }}</dd>
                                {% endif %}
                                {% if material.productKind %}
                                    <dt>
                                        {{ 'label.product_kind'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ material.productKind.name }}</dd>
                                {% endif %}
                                {% if material.productCategory %}
                                    <dt>
                                        {{ 'label.product_category'|trans }}
                                        <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                                    </dt>
                                    <dd>{{ material.productCategory.name }}</dd>
                                {% endif %}

                                {% if material.calculation %}
                                    <dt>
                                        {{ 'label.calculation'|trans }}
                                    </dt>
                                    <dd>{{ material.calculation.name }}</dd>
                                {% endif %}

                                {% if material.analyticGroup %}
                                    <dt>
                                        {{ 'label.analytic_group'|trans }}
                                    </dt>
                                    <dd>{{ material.analyticGroup.name }}</dd>
                                {% endif %}

                                {% if material.financeGroup %}
                                    <dt>
                                        {{ 'label.finance_group'|trans }}
                                    </dt>
                                    <dd>{{ material.financeGroup.name }}</dd>
                                {% endif %}
                            </dl>
                        </div>
                        {% if material.kdProducts.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            {% if material.kdProducts.count > 0 %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for kdProduct in material.kdProducts %}
                                            <tr role=\"row\">
                                                <td>{{ kdProduct.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: kdProduct.id}) }}' title=\"Открыть\">{{ kdProduct.name }}</a></td></td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('product_show', {id: kdProduct.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не используется
                                </div>
                            {% endif %}
                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                        {% endif %}
                        {% if material.structures.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab3\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab3-tab\">
                            {% if material.structures.count > 0 %}
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
                                        {% for structure in material.structures %}
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
                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                        {% endif %}
                        {% if material.materialNorms.count > 0 %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab4\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab4-tab\">
                            {% if material.materialNorms.count > 0 %}
                                <table id=\"entres\" class=\"table table-bordered table-striped table-hover table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Дата</th>
                                            <th>Статус</th>
                                            <th>Обозначение</th>
                                            <th>Наименование</th>
                                            <th>Исполнение</th>
                                            <th>Норма на деталь</th>
                                            <th>Ед.изм.</th>
                                            <th>Основной</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for materialNorm in material.materialNorms %}
                                            <tr role=\"row\">
                                                <td>{{ materialNorm.normDocument.id }}</td>
                                                <td>{{ materialNorm.normDocument.dateDocument|date(\"d.m.Y\") }}</td>
                                                <td>
                                                {% set style = 'primary' %}
                                                {% if materialNorm.normDocument.status == 1 %}
                                                        {% set style = 'primary' %}
                                                {% elseif materialNorm.normDocument.status == 3%}
                                                        {% set style = 'success' %}
                                                {% else %}
                                                    {% set style = 'secondary' %}
                                                {% endif %}
                                                <span class='badge badge-{{style}}'>{{ normDocumentStatuses[materialNorm.normDocument.status]|trans }}</span>
                                                </td>
                                                <td>{{ materialNorm.normDocument.product.designation }}</td>
                                                <td><a href='{{ path('product_show', {id: materialNorm.normDocument.product.id}) }}' title=\"Открыть\">{{ materialNorm.normDocument.product.name }}</a></td></td>
                                                <td>{{ materialNorm.normDocument.rendition.name }}</td>
                                                <td>{{ materialNorm.amount }}</td>
                                                <td>{{ materialNorm.material.unit.name }}</td>
                                                <td>
                                                {% if materialNorm.mainReplacement == 1 %}
                                                    <span class='badge badge-success'>Да</span>
                                                {% else %}
                                                    <span class='badge badge-warning'>Замена</span>

                                                {% endif %}
                                                </td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='{{ path('norm_document_show', {id: materialNorm.normDocument.id}) }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a>
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
                                            <th>Норма</th>
                                            <th>Основной</th>
                                            <th>Ед.изм.</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {% else %}
                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не заданы нормы расхода
                                </div>
                            {% endif %}
                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                        {% endif %}
                        {% if comments %}
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab5\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab5-tab\">

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

                            {# <br/>
                            <button onclick=\"test()\">Выбрать</button> #}
                        </div>
                    {% endif %}
                    </div>
                </div>
                <!-- /.card -->
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

        \$('[data-toggle=\"tooltip\"]').tooltip();
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let locDocumentTab = localStorage.getItem('document-tab');
            if (\$('#' + locDocumentTab).length) {
                \$('#' + locDocumentTab).tab('show');
            } else {
                \$('#custom-tabs-four-tab1-tab').tab('show');
            }

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('document-tab', selectedTabId);
            });

        });
    </script>

{% endblock %}", "material/show.html.twig", "/var/www/project/templates/material/show.html.twig");
    }
}
