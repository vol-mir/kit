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

/* product/_show_form.html.twig */
class __TwigTemplate_b615d6f9ee22f83bf8025665dd50efc937c822ec41fee8abd3b8e1db42821ed7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_show_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_show_form.html.twig"));

        // line 1
        if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
            // line 2
            echo "<dl>
    ";
            // line 3
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
                // line 4
                echo "
    ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "        <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
                    echo "</dt>
        <dd>";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 9
                echo "
    ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "designation", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "        <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
                    echo "</dt>
        <dd>";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "designation", [], "any", false, false, false, 12), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 14
                echo "
    ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "weight", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "        <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.weight"), "html", null, true);
                    echo "</dt>
        <dd>";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "weight", [], "any", false, false, false, 17), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 19
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "unit", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "        <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
                    echo "</dt>
        <dd>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "unit", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 23
                echo "
    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "productGroup", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "        <dt>                           
            ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_group"), "html", null, true);
                    echo "
            <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        </dt>
        <dd>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "productGroup", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 31
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "productType", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "        <dt>
            ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_type"), "html", null, true);
                    echo "
            <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        </dt>
        <dd>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "productType", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 38
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "productKind", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "        <dt>
            ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_kind"), "html", null, true);
                    echo "
            <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        </dt>
        <dd>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "productKind", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 45
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "productCategory", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "        <dt>
            ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_category"), "html", null, true);
                    echo "
            <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        </dt>
        <dd>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "productCategory", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 52
                echo "    ";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "kdMaterials", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52), 0))) {
                    // line 53
                    echo "        <dt>
            ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.materials"), "html", null, true);
                    echo "
        </dt>
        <dd>
            <ul>
                ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "kdMaterials", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["kdMaterial"]) {
                        // line 59
                        echo "                    <li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdMaterial"], "fullName", [], "any", false, false, false, 59), "html", null, true);
                        echo "</li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kdMaterial'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "            </ul>
        </dd>
    ";
                }
                // line 64
                echo "
    ";
            }
            // line 66
            echo "
    ";
            // line 67
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
                // line 68
                echo "
    ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "calculation", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "        <dt>
            ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.calculation"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "calculation", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 75
                echo "
    ";
            }
            // line 77
            echo "
    ";
            // line 78
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO"))) {
                // line 79
                echo "
    ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "analyticGroup", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "        <dt>
            ";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.analytic_group"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "analyticGroup", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 86
                echo "
    ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 87, $this->source); })()), "financeGroup", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "        <dt>
            ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.finance_group"), "html", null, true);
                    echo "
        </dt>
        <dd>";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "financeGroup", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                    echo "</dd>
    ";
                }
                // line 93
                echo "
    ";
            }
            // line 95
            echo "
    </dl>
";
        }
        // line 98
        echo "                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 98,  285 => 95,  281 => 93,  276 => 91,  271 => 89,  268 => 88,  266 => 87,  263 => 86,  258 => 84,  253 => 82,  250 => 81,  248 => 80,  245 => 79,  243 => 78,  240 => 77,  236 => 75,  231 => 73,  226 => 71,  223 => 70,  221 => 69,  218 => 68,  216 => 67,  213 => 66,  209 => 64,  204 => 61,  195 => 59,  191 => 58,  184 => 54,  181 => 53,  178 => 52,  173 => 50,  167 => 47,  164 => 46,  161 => 45,  156 => 43,  150 => 40,  147 => 39,  144 => 38,  139 => 36,  133 => 33,  130 => 32,  127 => 31,  122 => 29,  116 => 26,  113 => 25,  111 => 24,  108 => 23,  103 => 21,  98 => 20,  95 => 19,  90 => 17,  85 => 16,  83 => 15,  80 => 14,  75 => 12,  70 => 11,  68 => 10,  65 => 9,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_BUH\") %}
<dl>
    {% if is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_BUH\") %}

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

    {% endif %}

    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\")  or is_granted(\"ROLE_BUH\") %}

    {% if product.calculation %}
        <dt>
            {{ 'label.calculation'|trans }}
        </dt>
        <dd>{{ product.calculation.name }}</dd>
    {% endif %}

    {% endif %}

    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\")  or is_granted(\"ROLE_PEO\") %}

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

    {% endif %}

    </dl>
{% endif %}
                ", "product/_show_form.html.twig", "/var/www/project/templates/product/_show_form.html.twig");
    }
}
