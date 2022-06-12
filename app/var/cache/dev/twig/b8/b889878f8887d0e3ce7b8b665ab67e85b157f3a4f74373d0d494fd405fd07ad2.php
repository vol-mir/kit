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

/* norm/norm_document/show.html.twig */
class __TwigTemplate_b36abfcfcaca78f450d6c3edd0a85366a7f164186b8790881d81a481f5a46256 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/norm_document/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/norm_document/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "norm/norm_document/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.edit.norm_document"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3)) {
            echo " - вес ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3), "html", null, true);
            echo " кг";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3)) {
            echo ", товарная категория - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Материалы</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        <div class=\"card-body\">
                            <dl>
                                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 26, $this->source); })()), "dateDocument", [], "any", false, false, false, 26)) {
            // line 27
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_document"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 28, $this->source); })()), "dateDocument", [], "any", false, false, false, 28), "d.m.Y"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 30
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 30, $this->source); })()), "product", [], "any", false, false, false, 30)) {
            // line 31
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 32, $this->source); })()), "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 34
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 34, $this->source); })()), "product", [], "any", false, false, false, 34), "designation", [], "any", false, false, false, 34)) {
            // line 35
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 36, $this->source); })()), "product", [], "any", false, false, false, 36), "designation", [], "any", false, false, false, 36), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 38
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 38, $this->source); })()), "rendition", [], "any", false, false, false, 38)) {
            // line 39
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 40, $this->source); })()), "rendition", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 42
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
            echo "</dt>
                                    <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["normDocumentStatuses"]) || array_key_exists("normDocumentStatuses", $context) ? $context["normDocumentStatuses"] : (function () { throw new RuntimeError('Variable "normDocumentStatuses" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), [], "array", false, false, false, 44)), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 46
        echo "                                <dt>Разработал</dt>
                                <dd>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47), "html", null, true);
        echo "</dd>
                            </dl>
                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                        ";
        // line 54
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 54, $this->source); })()), "close", [], "any", false, false, false, 54), 1))))) {
            // line 55
            echo "                            <div class=\"card-header\">
                                ";
            // line 56
            $this->loadTemplate("norm/norm_document/_controls_edit.html.twig", "norm/norm_document/show.html.twig", 56)->display($context);
            // line 57
            echo "                            </div>
                        ";
        }
        // line 59
        echo "
                        <div class=\"card-body\">

                            ";
        // line 62
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 62, $this->source); })()), "product", [], "any", false, false, false, 62), "kdMaterials", [], "any", false, false, false, 62), "count", [], "method", false, false, false, 62), 0))) {
            // line 63
            echo "                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"alert alert-light\" role=\"alert\">
                                            ";
            // line 66
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 66, $this->source); })()), "product", [], "any", false, false, false, 66), "kdMaterials", [], "any", false, false, false, 66), "count", [], "method", false, false, false, 66), 0))) {
                // line 67
                echo "                                                <h4 class=\"alert-heading\">Материал по КД:</h4>
                                                <ul>
                                                    ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 69, $this->source); })()), "product", [], "any", false, false, false, 69), "kdMaterials", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["kdMaterial"]) {
                    // line 70
                    echo "                                                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdMaterial"], "fullName", [], "any", false, false, false, 70), "html", null, true);
                    echo "</li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kdMaterial'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                                </ul>
                                            ";
            }
            // line 74
            echo "                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 78
        echo "
                            <table id=\"consumption\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
                                        <th>Примечание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
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
        // line 114
        $this->loadTemplate("modals/delete.html.twig", "norm/norm_document/show.html.twig", 114)->display($context);
        // line 115
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "norm/norm_document/show.html.twig", 115)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "
    <script>

        \$(document).ready(function () {
            let table = \$(\"#consumption\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consumption_datatables", ["norm_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            let locNormDocumentTab = localStorage.getItem('norm-document-tab');
            \$('#' + locNormDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('norm-document-tab', selectedTabId);
            });

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "norm/norm_document/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 150,  333 => 135,  316 => 120,  306 => 119,  295 => 115,  293 => 114,  255 => 78,  249 => 74,  245 => 72,  236 => 70,  232 => 69,  228 => 67,  226 => 66,  221 => 63,  219 => 62,  214 => 59,  210 => 57,  208 => 56,  205 => 55,  203 => 54,  193 => 47,  190 => 46,  185 => 44,  180 => 43,  177 => 42,  172 => 40,  167 => 39,  164 => 38,  159 => 36,  154 => 35,  151 => 34,  146 => 32,  141 => 31,  138 => 30,  133 => 28,  128 => 27,  126 => 26,  105 => 7,  95 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.edit.norm_document'|trans }}: {{ normDocument.product.name }} {{ normDocument.product.designation }} {% if normDocument.product.weight %} - вес {{ normDocument.product.weight }} кг{% endif %} {% if normDocument.product.productCategory %}, товарная категория - {{ normDocument.product.productCategory.name }} {% endif %}
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Материалы</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        <div class=\"card-body\">
                            <dl>
                                {% if normDocument.dateDocument %}
                                    <dt>{{ 'label.date_document'|trans }}</dt>
                                    <dd>{{ normDocument.dateDocument|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if normDocument.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ normDocument.product.name }}</dd>
                                {% endif %}
                                {% if normDocument.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ normDocument.product.designation }}</dd>
                                {% endif %}
                                {% if normDocument.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ normDocument.rendition.name}}</dd>
                                {% endif %}
                                {% if normDocument.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ normDocumentStatuses[normDocument.status]|trans }}</dd>
                                {% endif %}
                                <dt>Разработал</dt>
                                <dd>{{ normDocument.user.fullName }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                        {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1) %}
                            <div class=\"card-header\">
                                {% include 'norm/norm_document/_controls_edit.html.twig' %}
                            </div>
                        {% endif %}

                        <div class=\"card-body\">

                            {% if normDocument.product.kdMaterials.count() > 0 %}
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"alert alert-light\" role=\"alert\">
                                            {% if normDocument.product.kdMaterials.count() > 0 %}
                                                <h4 class=\"alert-heading\">Материал по КД:</h4>
                                                <ul>
                                                    {% for kdMaterial in normDocument.product.kdMaterials %}
                                                        <li>{{ kdMaterial.fullName }}</li>
                                                    {% endfor %}
                                                </ul>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endif %}

                            <table id=\"consumption\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
                                        <th>Примечание</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
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

        \$(document).ready(function () {
            let table = \$(\"#consumption\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('consumption_datatables', {'norm_document_id': normDocument.id}) }}\",
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

            let locNormDocumentTab = localStorage.getItem('norm-document-tab');
            \$('#' + locNormDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('norm-document-tab', selectedTabId);
            });

        });

    </script>

{% endblock %}", "norm/norm_document/show.html.twig", "/var/www/project/templates/norm/norm_document/show.html.twig");
    }
}
