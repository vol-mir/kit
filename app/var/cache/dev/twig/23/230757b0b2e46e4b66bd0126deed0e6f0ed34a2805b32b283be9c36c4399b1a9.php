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

/* norm/material_norm/replacement_element.html.twig */
class __TwigTemplate_4121e4c5d82124a9ba82aad30f7eda8a5fa7c0e0dedc19ca3dcb8fc89d222a76 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/replacement_element.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/replacement_element.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "norm/material_norm/replacement_element.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.replacement.structure"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 4, $this->source); })()), "material", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 4, $this->source); })()), "material", [], "any", false, false, false, 4), "designation", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">
            \t<div class=\"card-header\">
            \t\t<p>Замена элемента:</p>
                    <dt>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
        echo "</dt>
                \t<dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 15, $this->source); })()), "material", [], "any", false, false, false, 15), "fullName", [], "any", false, false, false, 15), "html", null, true);
        echo "</dd>
                    <dt>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
        echo "</dt>
                \t<dd>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 17, $this->source); })()), "material", [], "any", false, false, false, 17), "unit", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</dd>
                    <dt>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.amount"), "html", null, true);
        echo "</dt>
                \t<dd>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 19, $this->source); })()), "amount", [], "any", false, false, false, 19), "html", null, true);
        echo "</dd>
                \t<dt>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.normDocument"), "html", null, true);
        echo "</dt>
                \t<dd><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "designation", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></dd>

                \t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\"
                           class=\"btn btn-default float-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->


    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">

                ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 38, $this->source); })()), "close", [], "any", false, false, false, 38), 1))))) {
            // line 39
            echo "

                ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 41, $this->source); })()), "mainReplacement", [], "any", false, false, false, 41)) {
                // line 42
                echo "                <div class=\"card-header\">
            \t\t<div class=\"row\">
              \t\t\t<div class=\"col-md-12\">
                \t\t\t<div class=\"form-group\">
                  \t\t\t\t<label>Элементы для замены</label>
                  \t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\" id=\"elementSelect\">
                    \t\t\t\t<option value=\"0\" selected=\"selected\">Не выбрано</option>
                    \t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["elementsReplacement"]) || array_key_exists("elementsReplacement", $context) ? $context["elementsReplacement"] : (function () { throw new RuntimeError('Variable "elementsReplacement" does not exist.', 49, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 50
                    echo "                    \t\t\t\t\t";
                    if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "getMaterialNormRepltMains", [], "method", false, false, false, 50), "count", [], "method", false, false, false, 50), 0)))) {
                        // line 51
                        echo "                        \t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "material", [], "any", false, false, false, 51), "fullName", [], "any", false, false, false, 51), "html", null, true);
                        echo "</option>
                        \t\t\t\t";
                    }
                    // line 53
                    echo "                    \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                  \t\t\t\t</select>
                \t\t\t</div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <button type='button' class='btn btn-sm btn-success float-left mb-3' id='addReplacement'>";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add"), "html", null, true);
                echo "</button>

                        </div>
                    </div>
                </div>
                ";
            }
            // line 68
            echo "                ";
        }
        // line 69
        echo "                <div class=\"card-body\">

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <table id=\"materialNormReplacement\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
                                        <th>Примечание</th>
                                        <th></th>
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
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                \t\t</div>
                \t</div>
                </div>


            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    ";
        // line 112
        $this->loadTemplate("modals/delete.html.twig", "norm/material_norm/replacement_element.html.twig", 112)->display($context);
        // line 113
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let elementSelect = \$('#elementSelect');

            \$(\"#addReplacement\").click(function() {
                if (elementSelect.val() != 0) {

                    let url = \"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consumption_element_replacement_new", ["norm_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\";

                    \$.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            '_method': 'post',
                            '_token': '";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("material-norm-element-replacement-add"), "html", null, true);
        echo "',
                            'materialNormMainId': JSON.stringify(";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135), "html", null, true);
        echo "),
                            'materialNormReplacementId': JSON.stringify(elementSelect.val()),
                        },
                        dataType: 'json'
                    }).done(function (data) {
                        table.ajax.reload(null, false);

                        \$('#elementSelect option').each(function() {
                            if ( \$(this).val() == elementSelect.val() ) {
                               \$(this).remove();
                            }
                        });

                    });
                }
            });

            let table = \$(\"#materialNormReplacement\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consumption_replacement_datatables", ["norm_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164), "materialNormMainId" => twig_get_attribute($this->env, $this->source, (isset($context["materialNorm"]) || array_key_exists("materialNorm", $context) ? $context["materialNorm"] : (function () { throw new RuntimeError('Variable "materialNorm" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164)]), "html", null, true);
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
                \"pageLength\": 25,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#materialNormReplacement\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let replacementId = \$(this).attr('data-confirm-delete-id');
                let url = \" /norm/document/\" + ";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190), "html", null, true);
        echo " + \"/edit/consumption/\" + replacementId + \"/replacement/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);

                    toastr.success(data.message);
                });

                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", null);
                \$('#modal-delete').modal('hide');
            });


        });


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "norm/material_norm/replacement_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 195,  376 => 190,  361 => 178,  344 => 164,  312 => 135,  308 => 134,  298 => 127,  287 => 118,  277 => 117,  266 => 113,  264 => 112,  219 => 69,  216 => 68,  207 => 62,  197 => 54,  191 => 53,  183 => 51,  180 => 50,  176 => 49,  167 => 42,  165 => 41,  161 => 39,  159 => 38,  142 => 24,  138 => 23,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  93 => 8,  83 => 7,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}{{ 'title.page.replacement.structure'|trans }} - {{ materialNorm.material.name }}  {{ materialNorm.material.designation }}{% endblock %}


{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">
            \t<div class=\"card-header\">
            \t\t<p>Замена элемента:</p>
                    <dt>{{ 'label.name'|trans }}</dt>
                \t<dd>{{ materialNorm.material.fullName }}</dd>
                    <dt>{{ 'label.unit'|trans }}</dt>
                \t<dd>{{ materialNorm.material.unit.name }}</dd>
                    <dt>{{ 'label.amount'|trans }}</dt>
                \t<dd>{{ materialNorm.amount }}</dd>
                \t<dt>{{ 'label.normDocument'|trans }}</dt>
                \t<dd><a href=\"{{ path('norm_document_edit', {'id': normDocument.id}) }}\">{{ normDocument.product.name }}  {{ normDocument.product.designation }}</a></dd>

                \t<a href=\"{{ path('norm_document_edit', {'id': normDocument.id}) }}\"
                           class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->


    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">

                {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1) %}


                {% if materialNorm.mainReplacement %}
                <div class=\"card-header\">
            \t\t<div class=\"row\">
              \t\t\t<div class=\"col-md-12\">
                \t\t\t<div class=\"form-group\">
                  \t\t\t\t<label>Элементы для замены</label>
                  \t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\" id=\"elementSelect\">
                    \t\t\t\t<option value=\"0\" selected=\"selected\">Не выбрано</option>
                    \t\t\t\t{% for element in elementsReplacement %}
                    \t\t\t\t\t{% if element.id != materialNorm.id and  element.getMaterialNormRepltMains().count() == 0 %}
                        \t\t\t\t\t<option value=\"{{ element.id }}\">{{ element.material.fullName }}</option>
                        \t\t\t\t{% endif %}
                    \t\t\t\t{% endfor %}
                  \t\t\t\t</select>
                \t\t\t</div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <button type='button' class='btn btn-sm btn-success float-left mb-3' id='addReplacement'>{{ 'title.add'|trans }}</button>

                        </div>
                    </div>
                </div>
                {% endif %}
                {% endif %}
                <div class=\"card-body\">

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <table id=\"materialNormReplacement\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Материал</th>
                                        <th>Ед.изм.</th>
                                        <th>Норма на деталь</th>
                                        <th>Основной</th>
                                        <th>Примечание</th>
                                        <th></th>
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
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                \t\t</div>
                \t</div>
                </div>


            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    {% include 'modals/delete.html.twig' %}

{% endblock %}


{% block javascripts %}

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let elementSelect = \$('#elementSelect');

            \$(\"#addReplacement\").click(function() {
                if (elementSelect.val() != 0) {

                    let url = \"{{ path('consumption_element_replacement_new', {'norm_document_id': normDocument.id}) }}\";

                    \$.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            '_method': 'post',
                            '_token': '{{ csrf_token('material-norm-element-replacement-add') }}',
                            'materialNormMainId': JSON.stringify({{ materialNorm.id }}),
                            'materialNormReplacementId': JSON.stringify(elementSelect.val()),
                        },
                        dataType: 'json'
                    }).done(function (data) {
                        table.ajax.reload(null, false);

                        \$('#elementSelect option').each(function() {
                            if ( \$(this).val() == elementSelect.val() ) {
                               \$(this).remove();
                            }
                        });

                    });
                }
            });

            let table = \$(\"#materialNormReplacement\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('consumption_replacement_datatables', {'norm_document_id': normDocument.id, 'materialNormMainId': materialNorm.id }) }}\",
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
                \"pageLength\": 25,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
                }
            });

            \$(\"#materialNormReplacement\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let replacementId = \$(this).attr('data-confirm-delete-id');
                let url = \" /norm/document/\" + {{ normDocument.id }} + \"/edit/consumption/\" + replacementId + \"/replacement/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '{{ csrf_token('delete-item') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);

                    toastr.success(data.message);
                });

                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", null);
                \$('#modal-delete').modal('hide');
            });


        });


    </script>

{% endblock %}
", "norm/material_norm/replacement_element.html.twig", "/var/www/project/templates/norm/material_norm/replacement_element.html.twig");
    }
}
