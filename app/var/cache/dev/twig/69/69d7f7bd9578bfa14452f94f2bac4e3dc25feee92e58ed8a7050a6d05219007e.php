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

/* material/_show_form.html.twig */
class __TwigTemplate_5134d0556f5baefa87c51984024e73593bc87fa3259fd4e7d31bd356243b1c12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/_show_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/_show_form.html.twig"));

        // line 1
        if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
            // line 2
            echo "<dl>
    ";
            // line 3
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
                // line 4
                echo "
        <dt>";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
                echo "</dt>
        <dd>";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
                echo "</dd>

        ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 8, $this->source); })()), "profileName", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile_name"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 10, $this->source); })()), "profileName", [], "any", false, false, false, 10), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 12
                echo "
        ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 13, $this->source); })()), "profile", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 15, $this->source); })()), "profile", [], "any", false, false, false, 15), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 17
                echo "
        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 18, $this->source); })()), "profileStandard", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.profile_standard"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 20, $this->source); })()), "profileStandard", [], "any", false, false, false, 20), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 22
                echo "
        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 23, $this->source); })()), "mark", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.mark"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 25, $this->source); })()), "mark", [], "any", false, false, false, 25), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 27
                echo "
        ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 28, $this->source); })()), "markStandard", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.mark_standard"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 30, $this->source); })()), "markStandard", [], "any", false, false, false, 30), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 32
                echo "
        ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 33, $this->source); })()), "materialKind", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.material_kind"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 35, $this->source); })()), "materialKind", [], "any", false, false, false, 35), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 37
                echo "
        ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 38, $this->source); })()), "unit", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "            <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
                    echo "</dt>
            <dd>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 40, $this->source); })()), "unit", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 42
                echo "
        ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 43, $this->source); })()), "productGroup", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "            <dt>
                ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_group"), "html", null, true);
                    echo "
                <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
            </dt>
            <dd>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 48, $this->source); })()), "productGroup", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 50
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 50, $this->source); })()), "productType", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "            <dt>
                ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_type"), "html", null, true);
                    echo "
                <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
            </dt>
            <dd>";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 55, $this->source); })()), "productType", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 57
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 57, $this->source); })()), "productKind", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "            <dt>
                ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_kind"), "html", null, true);
                    echo "
                <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
            </dt>
            <dd>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 62, $this->source); })()), "productKind", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 64
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 64, $this->source); })()), "productCategory", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "            <dt>
                ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_category"), "html", null, true);
                    echo "
                <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
            </dt>
            <dd>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 69, $this->source); })()), "productCategory", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
                    echo "</dd>
        ";
                }
                // line 71
                echo "
    ";
            }
            // line 73
            echo "
    ";
            // line 74
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
                // line 75
                echo "
    ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 76, $this->source); })()), "calculation", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "        <dt>
            ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.calculation"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 80, $this->source); })()), "calculation", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 82
                echo "
    ";
            }
            // line 84
            echo "
    ";
            // line 85
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO"))) {
                // line 86
                echo "
    ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 87, $this->source); })()), "analyticGroup", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "        <dt>
            ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.analytic_group"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 91, $this->source); })()), "analyticGroup", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 93
                echo "
    ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 94, $this->source); })()), "financeGroup", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "        <dt>
            ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.finance_group"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 98, $this->source); })()), "financeGroup", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 100
                echo "
    ";
            }
            // line 102
            echo "    </dl>
";
        }
        // line 104
        echo "                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "material/_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 104,  310 => 102,  306 => 100,  301 => 98,  296 => 96,  293 => 95,  291 => 94,  288 => 93,  283 => 91,  278 => 89,  275 => 88,  273 => 87,  270 => 86,  268 => 85,  265 => 84,  261 => 82,  256 => 80,  251 => 78,  248 => 77,  246 => 76,  243 => 75,  241 => 74,  238 => 73,  234 => 71,  229 => 69,  223 => 66,  220 => 65,  217 => 64,  212 => 62,  206 => 59,  203 => 58,  200 => 57,  195 => 55,  189 => 52,  186 => 51,  183 => 50,  178 => 48,  172 => 45,  169 => 44,  167 => 43,  164 => 42,  159 => 40,  154 => 39,  152 => 38,  149 => 37,  144 => 35,  139 => 34,  137 => 33,  134 => 32,  129 => 30,  124 => 29,  122 => 28,  119 => 27,  114 => 25,  109 => 24,  107 => 23,  104 => 22,  99 => 20,  94 => 19,  92 => 18,  89 => 17,  84 => 15,  79 => 14,  77 => 13,  74 => 12,  69 => 10,  64 => 9,  62 => 8,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_BUH\") %}
<dl>
    {% if is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_BUH\") %}

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

    {% endif %}

    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\")  or is_granted(\"ROLE_BUH\") %}

    {% if material.calculation %}
        <dt>
            {{ 'label.calculation'|trans }}
        </dt>
        <dd>{{ material.calculation.name }}</dd>
    {% endif %}

    {% endif %}

    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\")  or is_granted(\"ROLE_PEO\") %}

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

    {% endif %}
    </dl>
{% endif %}
                ", "material/_show_form.html.twig", "/var/www/project/templates/material/_show_form.html.twig");
    }
}
