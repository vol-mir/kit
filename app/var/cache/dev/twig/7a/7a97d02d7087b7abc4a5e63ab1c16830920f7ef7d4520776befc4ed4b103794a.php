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

/* specification/structure/replacement_element.html.twig */
class __TwigTemplate_08c838a3dfbc70b390c22f83ddf74b48030d669c218d6e9e5d13c6e89e532370 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/replacement_element.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/replacement_element.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specification/structure/replacement_element.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "designation", [], "any", false, false, false, 4), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 15, $this->source); })()), "product", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 15, $this->source); })()), "product", [], "any", false, false, false, 15), "designation", [], "any", false, false, false, 15), "html", null, true);
        echo "</dd>
                    <dt>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.unit"), "html", null, true);
        echo "</dt>
                \t<dd>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "unit", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</dd>
                    <dt>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.amount"), "html", null, true);
        echo "</dt>
                \t<dd>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 19, $this->source); })()), "amount", [], "any", false, false, false, 19), "html", null, true);
        echo "</dd>
                \t<dt>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.specification"), "html", null, true);
        echo "</dt>
                \t<dd><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "designation", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></dd>

                \t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
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
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 37, $this->source); })()), "close", [], "any", false, false, false, 37), 1))))) {
            // line 38
            echo "

                ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 40, $this->source); })()), "mainReplacement", [], "any", false, false, false, 40)) {
                // line 41
                echo "                <div class=\"card-header\">
            \t\t<div class=\"row\">
              \t\t\t<div class=\"col-md-12\">
                \t\t\t<div class=\"form-group\">
                  \t\t\t\t<label>Элементы для замены</label>
                  \t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\" id=\"elementSelect\">
                    \t\t\t\t<option value=\"0\" selected=\"selected\">Не выбрано</option>
                    \t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["elementsReplacement"]) || array_key_exists("elementsReplacement", $context) ? $context["elementsReplacement"] : (function () { throw new RuntimeError('Variable "elementsReplacement" does not exist.', 48, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 49
                    echo "                    \t\t\t\t\t";
                    if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "getStructureRepltMains", [], "method", false, false, false, 49), "count", [], "method", false, false, false, 49), 0)))) {
                        // line 50
                        echo "                        \t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 50), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 50), "designation", [], "any", false, false, false, 50), "html", null, true);
                        echo "</option>
                        \t\t\t\t";
                    }
                    // line 52
                    echo "                    \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                  \t\t\t\t</select>
                \t\t\t</div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <button type='button' class='btn btn-sm btn-success float-left mb-3' id='addReplacement'>";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add"), "html", null, true);
                echo "</button>

                        </div>
                    </div>
                </div>
                ";
            }
            // line 67
            echo "
                ";
        }
        // line 69
        echo "
                <div class=\"card-body\">

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <table id=\"structureReplacement\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                        <th></th>
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
        // line 114
        $this->loadTemplate("modals/delete.html.twig", "specification/structure/replacement_element.html.twig", 114)->display($context);
        // line 115
        echo "
";
        
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
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            let elementSelect = \$('#elementSelect');

            \$(\"#addReplacement\").click(function() {
                if (elementSelect.val() != 0) {

                    let url = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_element_replacement_new", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
        echo "\";

                    \$.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            '_method': 'post',
                            '_token': '";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("structure-element-replacement-add"), "html", null, true);
        echo "',
                            'structureMainId': JSON.stringify(";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137), "html", null, true);
        echo "),
                            'structureReplacementId': JSON.stringify(elementSelect.val()),
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

            let table = \$(\"#structureReplacement\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"format\", \"targets\": 1},
                    {\"name\": \"position\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"amount\", \"targets\": 5},
                    {\"name\": \"note\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_replacement_datatables", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167), "structureMainId" => twig_get_attribute($this->env, $this->source, (isset($context["structure"]) || array_key_exists("structure", $context) ? $context["structure"] : (function () { throw new RuntimeError('Variable "structure" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
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
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#structureReplacement\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let replacementId = \$(this).attr('data-confirm-delete-id');
                let url = \" /specification/\" + ";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193), "html", null, true);
        echo " + \"/edit/structure/\" + replacementId + \"/replacement/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 198
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
        return "specification/structure/replacement_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 198,  383 => 193,  368 => 181,  351 => 167,  318 => 137,  314 => 136,  304 => 129,  293 => 120,  283 => 119,  272 => 115,  270 => 114,  223 => 69,  219 => 67,  210 => 61,  200 => 53,  194 => 52,  184 => 50,  181 => 49,  177 => 48,  168 => 41,  166 => 40,  162 => 38,  160 => 37,  144 => 24,  140 => 23,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  105 => 15,  101 => 14,  93 => 8,  83 => 7,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}{{ 'title.page.replacement.structure'|trans }} - {{ structure.product.name }}  {{ structure.product.designation }}{% endblock %}


{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">
            \t<div class=\"card-header\">
            \t\t<p>Замена элемента:</p>
                    <dt>{{ 'label.name'|trans }}</dt>
                \t<dd>{{ structure.product.name }}  {{ structure.product.designation }}</dd>
                    <dt>{{ 'label.unit'|trans }}</dt>
                \t<dd>{{ structure.product.unit.name }}</dd>
                    <dt>{{ 'label.amount'|trans }}</dt>
                \t<dd>{{ structure.amount }}</dd>
                \t<dt>{{ 'label.specification'|trans }}</dt>
                \t<dd><a href=\"{{ path('specification_edit', {'id': specification.id}) }}\">{{ specification.product.name }}  {{ specification.product.designation }}</a></dd>

                \t<a href=\"{{ path('specification_edit', {'id': specification.id}) }}\"
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
                {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGK\") and specification.close != 1) %}


                {% if structure.mainReplacement %}
                <div class=\"card-header\">
            \t\t<div class=\"row\">
              \t\t\t<div class=\"col-md-12\">
                \t\t\t<div class=\"form-group\">
                  \t\t\t\t<label>Элементы для замены</label>
                  \t\t\t\t<select class=\"form-control select2\" style=\"width: 100%;\" id=\"elementSelect\">
                    \t\t\t\t<option value=\"0\" selected=\"selected\">Не выбрано</option>
                    \t\t\t\t{% for element in elementsReplacement %}
                    \t\t\t\t\t{% if element.id != structure.id and  element.getStructureRepltMains().count() == 0 %}
                        \t\t\t\t\t<option value=\"{{ element.id }}\">{{ element.product.name }} {{ element.product.designation }}</option>
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

                            <table id=\"structureReplacement\" class=\"table table-bordered table-striped table-hover table-sm\">
                                <thead>
                                    <tr>
                                        <th>№ п/п</th>
                                        <th>Формат</th>
                                        <th>Позиция</th>
                                        <th>Обозначение</th>
                                        <th>Наименование</th>
                                        <th>Кол</th>
                                        <th>Примечание</th>
                                        <th></th>
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

                    let url = \"{{ path('structure_element_replacement_new', {'specification_id': specification.id}) }}\";

                    \$.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            '_method': 'post',
                            '_token': '{{ csrf_token('structure-element-replacement-add') }}',
                            'structureMainId': JSON.stringify({{ structure.id }}),
                            'structureReplacementId': JSON.stringify(elementSelect.val()),
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

            let table = \$(\"#structureReplacement\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"format\", \"targets\": 1},
                    {\"name\": \"position\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"amount\", \"targets\": 5},
                    {\"name\": \"note\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('structure_replacement_datatables', {'specification_id': specification.id, 'structureMainId': structure.id }) }}\",
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

            \$(\"#structureReplacement\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let replacementId = \$(this).attr('data-confirm-delete-id');
                let url = \" /specification/\" + {{ specification.id }} + \"/edit/structure/\" + replacementId + \"/replacement/delete\";

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
", "specification/structure/replacement_element.html.twig", "/var/www/project/templates/specification/structure/replacement_element.html.twig");
    }
}
