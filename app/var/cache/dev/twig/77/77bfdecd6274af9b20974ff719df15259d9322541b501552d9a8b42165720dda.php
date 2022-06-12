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

/* specification/specification_document/show.html.twig */
class __TwigTemplate_b158f9dd7b0b151f76898c3299280227a25e0eaddfc8b8e4c19bcf1b9cfaeb02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specification/specification_document/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.specification"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Детализация</a>
                        </li>
                    </ul>
                </div>


                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">

                        <div class=\"card-body\">
                            <dl>
                                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 27, $this->source); })()), "dateSpecification", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_specification"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 29, $this->source); })()), "dateSpecification", [], "any", false, false, false, 29), "d.m.Y"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 31
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 31, $this->source); })()), "product", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 33, $this->source); })()), "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 35
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 35, $this->source); })()), "product", [], "any", false, false, false, 35), "designation", [], "any", false, false, false, 35)) {
            // line 36
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 37, $this->source); })()), "product", [], "any", false, false, false, 37), "designation", [], "any", false, false, false, 37), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 39
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 39, $this->source); })()), "rendition", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 41, $this->source); })()), "rendition", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 43
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43)) {
            // line 44
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 45, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 45, $this->source); })()), "status", [], "any", false, false, false, 45), [], "array", false, false, false, 45)), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 47
        echo "                                <dt>Разработал</dt>
                                <dd>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "fullName", [], "any", false, false, false, 48), "html", null, true);
        echo "</dd>
                            </dl>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                        ";
        // line 54
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 54, $this->source); })()), "close", [], "any", false, false, false, 54), 1))))) {
            // line 55
            echo "                            <div class=\"card-header\">
                                ";
            // line 56
            $this->loadTemplate("specification/specification_document/_controls_edit.html.twig", "specification/specification_document/show.html.twig", 56)->display($context);
            // line 57
            echo "                            </div>
                        ";
        }
        // line 59
        echo "                        <div class=\"card-body\">
                            <table id=\"structure\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    ";
        // line 94
        $this->loadTemplate("modals/delete.html.twig", "specification/specification_document/show.html.twig", 94)->display($context);
        // line 95
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "specification/specification_document/show.html.twig", 95)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    <script>
        \$(function () {
            let table = \$(\"#structure\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"format\", \"targets\": 1},
                    {\"name\": \"position\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"amount\", \"targets\": 5},
                    {\"name\": \"note\", \"targets\": 6}
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_datatables", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
        echo "\",
                    \"type\": \"POST\"
                },
                \"stateSave\": true,
                \"processing\": true,
                \"serverSide\": true,
                \"responsive\": true,
                \"autoWidth\": false,
                \"paging\": true,
                \"info\": true,
                \"searching\": true,
                \"aLengthMenu\": [ 10, 25, 50, 100, 150, 200, 250 ],
                \"pageLength\": 100,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

        });



        \$(document).ready(function () {

            let locSpecificationTab = localStorage.getItem('specification-show-tab');
            \$('#' + locSpecificationTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('specification-show-tab', selectedTabId);
            });

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "specification/specification_document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 129,  279 => 114,  263 => 100,  253 => 99,  242 => 95,  240 => 94,  203 => 59,  199 => 57,  197 => 56,  194 => 55,  192 => 54,  183 => 48,  180 => 47,  175 => 45,  170 => 44,  167 => 43,  162 => 41,  157 => 40,  154 => 39,  149 => 37,  144 => 36,  141 => 35,  136 => 33,  131 => 32,  128 => 31,  123 => 29,  118 => 28,  116 => 27,  93 => 6,  83 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.specification'|trans }}: {{ specification.product.name }} {{ specification.product.designation }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Детализация</a>
                        </li>
                    </ul>
                </div>


                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">

                        <div class=\"card-body\">
                            <dl>
                                {% if specification.dateSpecification %}
                                    <dt>{{ 'label.date_specification'|trans }}</dt>
                                    <dd>{{ specification.dateSpecification|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if specification.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ specification.product.name }}</dd>
                                {% endif %}
                                {% if specification.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ specification.product.designation }}</dd>
                                {% endif %}
                                {% if specification.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ specification.rendition.name}}</dd>
                                {% endif %}
                                {% if specification.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ specificationStatuses[specification.status]|trans }}</dd>
                                {% endif %}
                                <dt>Разработал</dt>
                                <dd>{{ specification.user.fullName }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                        {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGK\") and specification.close != 1) %}
                            <div class=\"card-header\">
                                {% include 'specification/specification_document/_controls_edit.html.twig' %}
                            </div>
                        {% endif %}
                        <div class=\"card-body\">
                            <table id=\"structure\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    {% include 'modals/delete.html.twig' %}
    {% include 'modals/move.html.twig' %}
{% endblock %}


{% block javascripts %}
    <script>
        \$(function () {
            let table = \$(\"#structure\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"format\", \"targets\": 1},
                    {\"name\": \"position\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"amount\", \"targets\": 5},
                    {\"name\": \"note\", \"targets\": 6}
                ],
                \"ajax\": {
                    \"url\": \"{{ path('structure_datatables', {'specification_id': specification.id}) }}\",
                    \"type\": \"POST\"
                },
                \"stateSave\": true,
                \"processing\": true,
                \"serverSide\": true,
                \"responsive\": true,
                \"autoWidth\": false,
                \"paging\": true,
                \"info\": true,
                \"searching\": true,
                \"aLengthMenu\": [ 10, 25, 50, 100, 150, 200, 250 ],
                \"pageLength\": 100,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
                }
            });

        });



        \$(document).ready(function () {

            let locSpecificationTab = localStorage.getItem('specification-show-tab');
            \$('#' + locSpecificationTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('specification-show-tab', selectedTabId);
            });

        });

    </script>

{% endblock %}", "specification/specification_document/show.html.twig", "/var/www/project/templates/specification/specification_document/show.html.twig");
    }
}
