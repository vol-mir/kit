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

/* material/index.html.twig */
class __TwigTemplate_951bca32ff6a51e16cf6c9a9377f79ad94daeb599959e550907285a2dd86f4a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "material/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.material"), "html", null, true);
        
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
        <div class=\"col-12\">
            <div class=\"card\">
                ";
        // line 9
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
            // line 10
            echo "                <div class=\"card-header\">
                    ";
            // line 11
            $this->loadTemplate("material/_controls.html.twig", "material/index.html.twig", 11)->display($context);
            // line 12
            echo "                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"materials\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th width=\"3%\" class=\"toggle-all\"><i id=\"select_all\" name=\"select_invoice\"></i></th>
                            <th></th>
                            <th>Код</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th width=\"5%\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Код</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 42
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
            // line 43
            echo "                <div class=\"card-footer\">
                    ";
            // line 44
            $this->loadTemplate("material/_controls.html.twig", "material/index.html.twig", 44)->display($context);
            // line 45
            echo "                </div>
                ";
        }
        // line 47
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 55
        $this->loadTemplate("modals/delete.html.twig", "material/index.html.twig", 55)->display($context);
        // line 56
        echo "    ";
        $this->loadTemplate("modals/edit_group_products.html.twig", "material/index.html.twig", 56)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script>
        \$(function () {

            let columnYid = 1;

            \$('[data-toggle=\"tooltip\"]').tooltip();

            let table = \$(\"#materials\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {
                        \"name\": \"checkbox\",
                        \"targets\": 0,
                        \"orderable\": false,
                        \"searchable\": false,
                        className: 'select-checkbox'
                    },
                    {\"name\": \"yid\", \"targets\": columnYid, \"orderable\": false, \"searchable\": false, className: \"hide_column\",},
                    {\"name\": \"id\", \"targets\": 2},
                    {\"name\": \"name\", \"targets\": 3},
                    {\"name\": \"groups\", \"targets\": 4},
                    {\"name\": \"control\", \"targets\": 5, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_datatables");
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
                \"order\": [[2, 'asc']],
                \"language\": {
                    \"url\": \"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                },
                \"select\": {
                    \"style\": \"multi\",
                    \"selector\": \"td:first-child\"

                },
            }).on('select.dt deselect.dt', function (evtObj) {
                let all = table.rows().nodes().length;
                let sel = table.rows(\".selected\").nodes().length;

                if (all === sel) {

                    \$(\".toggle-all\").closest(\"tr\").addClass(\"selected\");
                } else {

                    \$(\".toggle-all\").closest(\"tr\").removeClass(\"selected\");
                }

            });

            \$('#materials').on('click', '.toggle-all', function () {
                \$(this).closest(\"tr\").toggleClass(\"selected\");
                if (\$(this).closest(\"tr\").hasClass(\"selected\")) {
                    table.rows().select();
                } else {
                    table.rows().deselect();
                }

            });

            \$(\"#materials\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    if (data.messageError) {
                        toastr.error(data.messageError);
                    } else if (data.messageSuccess) {
                        toastr.success(data.messageSuccess);
                    }
                });

                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", null);
                \$('#modal-delete').modal('hide');
            });

            let materialsEdit = [];
            \$(\".edit-group\").on(\"click\", function () {
                materialsEdit = table.rows(\".selected\").data().pluck(columnYid).toArray();
                if (materialsEdit.length > 0) {
                    \$('#modal-edit-group').modal('show');
                }
            });

            \$(\"#modal-edit-group\").on(\"click\", \"#btn-modal-edit\", function () {

                if (materialsEdit.length === 0) {
                    \$('#modal-edit-group').modal('hide');
                    return;
                }

                let formData = {};

                if (\$(\"#edit-form #edit-group\").is(':checked')) {
                    formData.groupSelect = \$(\"#edit-form #group-select\").val();
                }
                if (\$(\"#edit-form #edit-type\").is(':checked')) {
                    formData.typeSelect = \$(\"#edit-form #type-select\").val();
                }
                if (\$(\"#edit-form #edit-kind\").is(':checked')) {
                    formData.kindSelect = \$(\"#edit-form #kind-select\").val();
                }
                if (\$(\"#edit-form #edit-category\").is(':checked')) {
                    formData.categorySelect = \$(\"#edit-form #category-select\").val();
                }
                if (\$(\"#edit-form #edit-calculation\").is(':checked')) {
                    formData.calculationSelect = \$(\"#edit-form #calculation-select\").val();
                }

                if (\$(\"#edit-form #edit-analytic-group\").is(':checked')) {
                    formData.analyticGroupSelect = \$(\"#edit-form #analytic-group-select\").val();
                }

                if (\$(\"#edit-form #edit-finance-group\").is(':checked')) {
                    formData.financeGroupSelect = \$(\"#edit-form #finance-group-select\").val();
                }

                if (\$.isEmptyObject(formData)) {
                    \$('#modal-edit-group').modal('hide');
                    return;
                }

                let url = \"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materials_list_edit");
        echo "\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("materials-list-edit"), "html", null, true);
        echo "',
                        'materialsEdit': JSON.stringify(materialsEdit),
                        'formData': JSON.stringify(formData)
                    },
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });


                \$('#modal-edit-group').modal('hide');
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "material/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 211,  336 => 204,  272 => 143,  263 => 137,  222 => 99,  205 => 85,  179 => 61,  169 => 60,  158 => 56,  156 => 55,  146 => 47,  142 => 45,  140 => 44,  137 => 43,  135 => 42,  105 => 14,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.material'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_BUH\") %}
                <div class=\"card-header\">
                    {% include 'material/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"materials\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th width=\"3%\" class=\"toggle-all\"><i id=\"select_all\" name=\"select_invoice\"></i></th>
                            <th></th>
                            <th>Код</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th width=\"5%\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Код</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\")   or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-footer\">
                    {% include 'material/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    {% include 'modals/delete.html.twig' %}
    {% include 'modals/edit_group_products.html.twig' %}
{% endblock %}


{% block javascripts %}
    <script>
        \$(function () {

            let columnYid = 1;

            \$('[data-toggle=\"tooltip\"]').tooltip();

            let table = \$(\"#materials\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {
                        \"name\": \"checkbox\",
                        \"targets\": 0,
                        \"orderable\": false,
                        \"searchable\": false,
                        className: 'select-checkbox'
                    },
                    {\"name\": \"yid\", \"targets\": columnYid, \"orderable\": false, \"searchable\": false, className: \"hide_column\",},
                    {\"name\": \"id\", \"targets\": 2},
                    {\"name\": \"name\", \"targets\": 3},
                    {\"name\": \"groups\", \"targets\": 4},
                    {\"name\": \"control\", \"targets\": 5, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('material_datatables') }}\",
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
                \"order\": [[2, 'asc']],
                \"language\": {
                    \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
                },
                \"select\": {
                    \"style\": \"multi\",
                    \"selector\": \"td:first-child\"

                },
            }).on('select.dt deselect.dt', function (evtObj) {
                let all = table.rows().nodes().length;
                let sel = table.rows(\".selected\").nodes().length;

                if (all === sel) {

                    \$(\".toggle-all\").closest(\"tr\").addClass(\"selected\");
                } else {

                    \$(\".toggle-all\").closest(\"tr\").removeClass(\"selected\");
                }

            });

            \$('#materials').on('click', '.toggle-all', function () {
                \$(this).closest(\"tr\").toggleClass(\"selected\");
                if (\$(this).closest(\"tr\").hasClass(\"selected\")) {
                    table.rows().select();
                } else {
                    table.rows().deselect();
                }

            });

            \$(\"#materials\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('material_delete', { 'id': 0 }) }}\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '{{ csrf_token('delete-item') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    if (data.messageError) {
                        toastr.error(data.messageError);
                    } else if (data.messageSuccess) {
                        toastr.success(data.messageSuccess);
                    }
                });

                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", null);
                \$('#modal-delete').modal('hide');
            });

            let materialsEdit = [];
            \$(\".edit-group\").on(\"click\", function () {
                materialsEdit = table.rows(\".selected\").data().pluck(columnYid).toArray();
                if (materialsEdit.length > 0) {
                    \$('#modal-edit-group').modal('show');
                }
            });

            \$(\"#modal-edit-group\").on(\"click\", \"#btn-modal-edit\", function () {

                if (materialsEdit.length === 0) {
                    \$('#modal-edit-group').modal('hide');
                    return;
                }

                let formData = {};

                if (\$(\"#edit-form #edit-group\").is(':checked')) {
                    formData.groupSelect = \$(\"#edit-form #group-select\").val();
                }
                if (\$(\"#edit-form #edit-type\").is(':checked')) {
                    formData.typeSelect = \$(\"#edit-form #type-select\").val();
                }
                if (\$(\"#edit-form #edit-kind\").is(':checked')) {
                    formData.kindSelect = \$(\"#edit-form #kind-select\").val();
                }
                if (\$(\"#edit-form #edit-category\").is(':checked')) {
                    formData.categorySelect = \$(\"#edit-form #category-select\").val();
                }
                if (\$(\"#edit-form #edit-calculation\").is(':checked')) {
                    formData.calculationSelect = \$(\"#edit-form #calculation-select\").val();
                }

                if (\$(\"#edit-form #edit-analytic-group\").is(':checked')) {
                    formData.analyticGroupSelect = \$(\"#edit-form #analytic-group-select\").val();
                }

                if (\$(\"#edit-form #edit-finance-group\").is(':checked')) {
                    formData.financeGroupSelect = \$(\"#edit-form #finance-group-select\").val();
                }

                if (\$.isEmptyObject(formData)) {
                    \$('#modal-edit-group').modal('hide');
                    return;
                }

                let url = \"{{ path('materials_list_edit') }}\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '{{ csrf_token('materials-list-edit') }}',
                        'materialsEdit': JSON.stringify(materialsEdit),
                        'formData': JSON.stringify(formData)
                    },
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });


                \$('#modal-edit-group').modal('hide');
            });
        });
    </script>

{% endblock %}", "material/index.html.twig", "/var/www/project/templates/material/index.html.twig");
    }
}
