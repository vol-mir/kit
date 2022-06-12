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

/* document/show.html.twig */
class __TwigTemplate_05fe371d6b592ec494e3907a912e33f1c07fd80c6fb0390cac46bbb69e556bf3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "document/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.document"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 3, $this->source); })()), "designation", [], "any", false, false, false, 3), "html", null, true);
        
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Документация</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Входимость</a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24)) {
            // line 25
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 28
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 28, $this->source); })()), "designation", [], "any", false, false, false, 28)) {
            // line 29
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 30, $this->source); })()), "designation", [], "any", false, false, false, 30), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 32
        echo "                            </dl>
                        </div>
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            ";
        // line 35
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 35, $this->source); })()), "structures", [], "any", false, false, false, 35), "count", [], "any", false, false, false, 35), 0))) {
            // line 36
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
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 49, $this->source); })()), "structures", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
                // line 50
                echo "                                            <tr role=\"row\">
                                                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                                                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 52), "dateSpecification", [], "any", false, false, false, 52), "d.m.Y"), "html", null, true);
                echo "</td>
                                                <td>
                                                ";
                // line 54
                $context["style"] = "primary";
                // line 55
                echo "                                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 55), "status", [], "any", false, false, false, 55), 1))) {
                    // line 56
                    echo "                                                        ";
                    $context["style"] = "primary";
                    // line 57
                    echo "                                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 57), "status", [], "any", false, false, false, 57), 3))) {
                    // line 58
                    echo "                                                        ";
                    $context["style"] = "success";
                    // line 59
                    echo "                                                ";
                } else {
                    // line 60
                    echo "                                                    ";
                    $context["style"] = "secondary";
                    // line 61
                    echo "                                                ";
                }
                // line 62
                echo "                                                <span class='badge badge-";
                echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 62), "status", [], "any", false, false, false, 62), [], "array", false, false, false, 62)), "html", null, true);
                echo "</span>
                                                </td>
                                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 64), "product", [], "any", false, false, false, 64), "designation", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                                <td><a href='";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 65), "product", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "' title=\"Открыть\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 65), "product", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                echo "</a></td></td>
                                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 66), "rendition", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class='btn-group btn-group-sm'>
                                                        <a href='";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["structure"], "specification", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
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
            // line 74
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
            // line 88
            echo "                                <div class=\"alert alert-light text-center\" role=\"alert\">
                                    Не входит в состав изделия/узла
                                </div>
                            ";
        }
        // line 92
        echo "                            ";
        // line 94
        echo "                        </div>
                    </div>
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

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
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
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
            }
        });

        \$('[data-toggle=\"tooltip\"]').tooltip();
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let locDocumentTab = localStorage.getItem('document-tab');
            \$('#' + locDocumentTab).tab('show');

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
        return "document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 124,  297 => 110,  293 => 109,  290 => 108,  280 => 107,  260 => 94,  258 => 92,  252 => 88,  236 => 74,  223 => 69,  217 => 66,  211 => 65,  207 => 64,  199 => 62,  196 => 61,  193 => 60,  190 => 59,  187 => 58,  184 => 57,  181 => 56,  178 => 55,  176 => 54,  171 => 52,  167 => 51,  164 => 50,  160 => 49,  145 => 36,  143 => 35,  138 => 32,  133 => 30,  128 => 29,  125 => 28,  120 => 26,  115 => 25,  113 => 24,  93 => 6,  83 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.document'|trans }}: {{ document.name }} {{ document.designation }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"true\">Документация</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"false\">Входимость</a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\">
                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                {% if document.name %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ document.name }}</dd>
                                {% endif %}
                                {% if document.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ document.designation }}</dd>
                                {% endif %}
                            </dl>
                        </div>
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">
                            {% if document.structures.count > 0 %}
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
                                        {% for structure in document.structures %}
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
            \$('#' + locDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('document-tab', selectedTabId);
            });

        });
    </script>

{% endblock %}", "document/show.html.twig", "/var/www/project/templates/document/show.html.twig");
    }
}
