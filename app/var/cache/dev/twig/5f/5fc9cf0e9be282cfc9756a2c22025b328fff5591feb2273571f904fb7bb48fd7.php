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

/* track/track_document/show.html.twig */
class __TwigTemplate_4d8088f6e03282327a0113d02f49e3712365e4800afdeda1459009e9af7deb5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/track_document/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.track_document"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3)) {
            echo " - вес ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3), "html", null, true);
            echo " кг";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3)) {
            echo ", товарная категория - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Маршрут</a>
                        </li>
                    </ul>
                </div>

                <div class=\"card-body\">

                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 27, $this->source); })()), "dateStart", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 29, $this->source); })()), "dateStart", [], "any", false, false, false, 29), "d.m.Y"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 31
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 31, $this->source); })()), "dateEnd", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 33, $this->source); })()), "dateEnd", [], "any", false, false, false, 33), "d.m.Y"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 35
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 35, $this->source); })()), "product", [], "any", false, false, false, 35)) {
            // line 36
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 37, $this->source); })()), "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 39
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 39, $this->source); })()), "product", [], "any", false, false, false, 39), "designation", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 41, $this->source); })()), "product", [], "any", false, false, false, 41), "designation", [], "any", false, false, false, 41), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 43
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 43, $this->source); })()), "rendition", [], "any", false, false, false, 43)) {
            // line 44
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 45, $this->source); })()), "rendition", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 47
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47)) {
            // line 48
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["trackDocumentStatuses"]) || array_key_exists("trackDocumentStatuses", $context) ? $context["trackDocumentStatuses"] : (function () { throw new RuntimeError('Variable "trackDocumentStatuses" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), [], "array", false, false, false, 49)), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 51
        echo "                                <dt>Разработал</dt>
                                <dd>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "fullName", [], "any", false, false, false, 52), "html", null, true);
        echo "</dd>
                            </dl>
                        </div>
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                            <table id=\"track\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
                                            <th></th>
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
        // line 97
        $this->loadTemplate("modals/delete.html.twig", "track/track_document/show.html.twig", 97)->display($context);
        // line 98
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "track/track_document/show.html.twig", 98)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "
    <script>

        \$(document).ready(function () {
            let table = \$(\"#track\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name_department\", \"targets\": 1},
                    {\"name\": \"number_department\", \"targets\": 2},
                    {\"name\": \"number_operation\", \"targets\": 3},
                    {\"name\": \"technological_operation\", \"targets\": 4},
                    {\"name\": \"time_processing\", \"targets\": 5},
                    {\"name\": \"time_piece\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_datatables", ["track_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
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
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            let locTrackDocumentTab = localStorage.getItem('track-document-tab');
            \$('#' + locTrackDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('track-document-tab', selectedTabId);
            });

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "track/track_document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 135,  297 => 120,  278 => 103,  268 => 102,  257 => 98,  255 => 97,  207 => 52,  204 => 51,  199 => 49,  194 => 48,  191 => 47,  186 => 45,  181 => 44,  178 => 43,  173 => 41,  168 => 40,  165 => 39,  160 => 37,  155 => 36,  152 => 35,  147 => 33,  142 => 32,  139 => 31,  134 => 29,  129 => 28,  127 => 27,  105 => 7,  95 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.track_document'|trans }}: {{ trackDocument.product.name }} {{ trackDocument.product.designation }} {% if trackDocument.product.weight %} - вес {{ trackDocument.product.weight }} кг{% endif %} {% if trackDocument.product.productCategory %}, товарная категория - {{ trackDocument.product.productCategory.name }} {% endif %}
{% endblock %}

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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Маршрут</a>
                        </li>
                    </ul>
                </div>

                <div class=\"card-body\">

                    <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                            <dl>
                                {% if trackDocument.dateStart %}
                                    <dt>{{ 'label.date_start'|trans }}</dt>
                                    <dd>{{ trackDocument.dateStart|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if trackDocument.dateEnd %}
                                    <dt>{{ 'label.date_end'|trans }}</dt>
                                    <dd>{{ trackDocument.dateEnd|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if trackDocument.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ trackDocument.product.name }}</dd>
                                {% endif %}
                                {% if trackDocument.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ trackDocument.product.designation }}</dd>
                                {% endif %}
                                {% if trackDocument.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ trackDocument.rendition.name}}</dd>
                                {% endif %}
                                {% if trackDocument.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ trackDocumentStatuses[trackDocument.status]|trans }}</dd>
                                {% endif %}
                                <dt>Разработал</dt>
                                <dd>{{ trackDocument.user.fullName }}</dd>
                            </dl>
                        </div>
                        <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                            <table id=\"track\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
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
                                            <th></th>
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

        \$(document).ready(function () {
            let table = \$(\"#track\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name_department\", \"targets\": 1},
                    {\"name\": \"number_department\", \"targets\": 2},
                    {\"name\": \"number_operation\", \"targets\": 3},
                    {\"name\": \"technological_operation\", \"targets\": 4},
                    {\"name\": \"time_processing\", \"targets\": 5},
                    {\"name\": \"time_piece\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('track_datatables', {'track_document_id': trackDocument.id}) }}\",
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

            let locTrackDocumentTab = localStorage.getItem('track-document-tab');
            \$('#' + locTrackDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('track-document-tab', selectedTabId);
            });

        });

    </script>

{% endblock %}", "track/track_document/show.html.twig", "/var/www/project/templates/track/track_document/show.html.twig");
    }
}
