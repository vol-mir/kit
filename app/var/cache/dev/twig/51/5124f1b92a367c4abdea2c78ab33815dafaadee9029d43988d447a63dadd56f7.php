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

/* modals/edit_group_products.html.twig */
class __TwigTemplate_958ef3fe58a80089b3596846ca6dd0717702017519c3582343621b7908115435 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/edit_group_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/edit_group_products.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-edit-group\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Редактирование записей</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"edit-form\">

                ";
        // line 13
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editGroup\" id=\"edit-group\">
                        <label class=\"custom-control-label\" for=\"edit-group\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_group"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"group-select\" name=\"groupSelect\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productGroups"]) || array_key_exists("productGroups", $context) ? $context["productGroups"] : (function () { throw new RuntimeError('Variable "productGroups" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 21), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editType\" id=\"edit-type\">
                        <label class=\"custom-control-label\" for=\"edit-type\">";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_type"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"type-select\" name=\"typeSelect\">
                        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productTypes"]) || array_key_exists("productTypes", $context) ? $context["productTypes"] : (function () { throw new RuntimeError('Variable "productTypes" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 33
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 33), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editKind\" id=\"edit-kind\">
                        <label class=\"custom-control-label\" for=\"edit-kind\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_kind"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"kind-select\" name=\"kindSelect\">
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productKinds"]) || array_key_exists("productKinds", $context) ? $context["productKinds"] : (function () { throw new RuntimeError('Variable "productKinds" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["kind"]) {
                // line 45
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kind"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["kind"], "id", [], "any", false, false, false, 45), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kind"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kind'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editCategory\" id=\"edit-category\">
                        <label class=\"custom-control-label\" for=\"edit-category\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.product_category"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"category-select\" name=\"categorySelect\">
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productCategories"]) || array_key_exists("productCategories", $context) ? $context["productCategories"] : (function () { throw new RuntimeError('Variable "productCategories" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 57
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 57), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    </select>
                </div>
                ";
        }
        // line 62
        echo "
                ";
        // line 63
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 64
            echo "                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editCalculation\" id=\"edit-calculation\">
                        <label class=\"custom-control-label\" for=\"edit-calculation\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.calculation"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"calculation-select\" name=\"calculationSelect\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["calculations"]) || array_key_exists("calculations", $context) ? $context["calculations"] : (function () { throw new RuntimeError('Variable "calculations" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["calculation"]) {
                // line 71
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calculation"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["calculation"], "id", [], "any", false, false, false, 71), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calculation"], "name", [], "any", false, false, false, 71), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                    </select>
                </div>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 78
            echo "                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editAnalyticGroup\" id=\"edit-analytic-group\">
                        <label class=\"custom-control-label\" for=\"edit-analytic-group\">";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.analytic_group"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"analytic-group-select\" name=\"analyticGroupSelect\">
                        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["analyticGroups"]) || array_key_exists("analyticGroups", $context) ? $context["analyticGroups"] : (function () { throw new RuntimeError('Variable "analyticGroups" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["analyticGroup"]) {
                // line 85
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["analyticGroup"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["analyticGroup"], "id", [], "any", false, false, false, 85), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["analyticGroup"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analyticGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editFinanceGroup\" id=\"edit-finance-group\">
                        <label class=\"custom-control-label\" for=\"edit-finance-group\">";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.finance_group"), "html", null, true);
            echo "</label>
                    </div>
                    <select class=\"form-control\" id=\"finance-group-select\" name=\"financeGroupSelect\">
                        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["financeGroups"]) || array_key_exists("financeGroups", $context) ? $context["financeGroups"] : (function () { throw new RuntimeError('Variable "financeGroups" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["financeGroup"]) {
                // line 97
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["financeGroup"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "\" ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["financeGroup"], "id", [], "any", false, false, false, 97), 1))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["financeGroup"], "name", [], "any", false, false, false, 97), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['financeGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    </select>
                </div>
                ";
        }
        // line 102
        echo "                

                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Отмена</button>
                <button type=\"button\" id=\"btn-modal-edit\" class=\"btn btn-primary\">Сохранить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modals/edit_group_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 102,  287 => 99,  274 => 97,  270 => 96,  264 => 93,  256 => 87,  243 => 85,  239 => 84,  233 => 81,  228 => 78,  226 => 77,  223 => 76,  218 => 73,  205 => 71,  201 => 70,  195 => 67,  190 => 64,  188 => 63,  185 => 62,  180 => 59,  167 => 57,  163 => 56,  157 => 53,  149 => 47,  136 => 45,  132 => 44,  126 => 41,  118 => 35,  105 => 33,  101 => 32,  95 => 29,  87 => 23,  74 => 21,  70 => 20,  64 => 17,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modal-edit-group\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Редактирование записей</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"edit-form\">

                {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_ADMIN\") %}
                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editGroup\" id=\"edit-group\">
                        <label class=\"custom-control-label\" for=\"edit-group\">{{ 'label.product_group'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"group-select\" name=\"groupSelect\">
                        {% for group in productGroups %}
                            <option value=\"{{ group.id }}\" {{ group.id==1?'selected':'' }}>{{ group.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editType\" id=\"edit-type\">
                        <label class=\"custom-control-label\" for=\"edit-type\">{{ 'label.product_type'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"type-select\" name=\"typeSelect\">
                        {% for type in productTypes %}
                            <option value=\"{{ type.id }}\" {{ type.id==1?'selected':'' }}>{{ type.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editKind\" id=\"edit-kind\">
                        <label class=\"custom-control-label\" for=\"edit-kind\">{{ 'label.product_kind'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"kind-select\" name=\"kindSelect\">
                        {% for kind in productKinds %}
                            <option value=\"{{ kind.id }}\" {{ kind.id==1?'selected':'' }}>{{ kind.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editCategory\" id=\"edit-category\">
                        <label class=\"custom-control-label\" for=\"edit-category\">{{ 'label.product_category'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"category-select\" name=\"categorySelect\">
                        {% for category in productCategories %}
                            <option value=\"{{ category.id }}\" {{ category.id==1?'selected':'' }}>{{ category.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                {% endif %}

                {% if is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_ADMIN\") %}
                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editCalculation\" id=\"edit-calculation\">
                        <label class=\"custom-control-label\" for=\"edit-calculation\">{{ 'label.calculation'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"calculation-select\" name=\"calculationSelect\">
                        {% for calculation in calculations %}
                            <option value=\"{{ calculation.id }}\" {{ calculation.id==1?'selected':'' }}>{{ calculation.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                {% endif %}

                {% if is_granted(\"ROLE_BUH\") or is_granted(\"ROLE_ADMIN\") %}
                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editAnalyticGroup\" id=\"edit-analytic-group\">
                        <label class=\"custom-control-label\" for=\"edit-analytic-group\">{{ 'label.analytic_group'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"analytic-group-select\" name=\"analyticGroupSelect\">
                        {% for analyticGroup in analyticGroups %}
                            <option value=\"{{ analyticGroup.id }}\" {{ analyticGroup.id==1?'selected':'' }}>{{ analyticGroup.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <div class=\"custom-control custom-switch\">
                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"editFinanceGroup\" id=\"edit-finance-group\">
                        <label class=\"custom-control-label\" for=\"edit-finance-group\">{{ 'label.finance_group'|trans }}</label>
                    </div>
                    <select class=\"form-control\" id=\"finance-group-select\" name=\"financeGroupSelect\">
                        {% for financeGroup in financeGroups %}
                            <option value=\"{{ financeGroup.id }}\" {{ financeGroup.id==1?'selected':'' }}>{{ financeGroup.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                {% endif %}
                

                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Отмена</button>
                <button type=\"button\" id=\"btn-modal-edit\" class=\"btn btn-primary\">Сохранить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->", "modals/edit_group_products.html.twig", "/var/www/project/templates/modals/edit_group_products.html.twig");
    }
}
