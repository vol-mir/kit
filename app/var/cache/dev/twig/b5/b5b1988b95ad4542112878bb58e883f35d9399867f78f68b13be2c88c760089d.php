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

/* product/index.html.twig */
class __TwigTemplate_a5d73c6de2a8053a74f439d96f2e992750f61db68a8f6f43a3fc176c4ddcea67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product"), "html", null, true);
        
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
            $this->loadTemplate("product/_controls.html.twig", "product/index.html.twig", 11)->display($context);
            // line 12
            echo "                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"products\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th width=\"3%\" class=\"toggle-all\"><i id=\"select_all\" name=\"select_invoice\"></i></th>
                            <th></th>
                            <th>Код</th>
                            <th>Обозначение</th>
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
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 44
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
            // line 45
            echo "                <div class=\"card-footer\">
                    ";
            // line 46
            $this->loadTemplate("product/_controls.html.twig", "product/index.html.twig", 46)->display($context);
            // line 47
            echo "                </div>
                ";
        }
        // line 49
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 57
        $this->loadTemplate("modals/delete.html.twig", "product/index.html.twig", 57)->display($context);
        // line 58
        echo "    ";
        $this->loadTemplate("modals/edit_group_products.html.twig", "product/index.html.twig", 58)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script>
        \$(function () {
            let columnYid = 1;

            \$('[data-toggle=\"tooltip\"]').tooltip();

            let table = \$(\"#products\").DataTable({
                \"columnDefs\": [
                    {
                        \"name\": \"checkbox\",
                        \"targets\": 0,
                        \"orderable\": false,
                        \"searchable\": false,
                        className: 'select-checkbox'
                    },
                    {\"name\": \"yid\", \"targets\": columnYid, \"orderable\": false, \"searchable\": false, className: \"hide_column\",},
                    {\"name\": \"id\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"groups\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_datatables");
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
        // line 100
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


            \$('#products').on('click', '.toggle-all', function () {
                \$(this).closest(\"tr\").toggleClass(\"selected\");
                if (\$(this).closest(\"tr\").hasClass(\"selected\")) {
                    table.rows().select();
                } else {
                    table.rows().deselect();
                }

            });

            \$(\"#products\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 146
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


            let productsEdit = [];
            \$(\".edit-group\").on(\"click\", function () {
                productsEdit = table.rows(\".selected\").data().pluck(columnYid).toArray();
                if (productsEdit.length > 0) {
                    \$('#modal-edit-group').modal('show');
                }
            });

            \$(\"#modal-edit-group\").on(\"click\", \"#btn-modal-edit\", function () {

                if (productsEdit.length === 0) {
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
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_list_edit");
        echo "\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("products-list-edit"), "html", null, true);
        echo "',
                        'productsEdit': JSON.stringify(productsEdit),
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
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 216,  341 => 209,  275 => 146,  266 => 140,  223 => 100,  206 => 86,  181 => 63,  171 => 62,  160 => 58,  158 => 57,  148 => 49,  144 => 47,  142 => 46,  139 => 45,  137 => 44,  105 => 14,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.product'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\")  or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_PEO\")  or is_granted(\"ROLE_BUH\") %}
                <div class=\"card-header\">
                    {% include 'product/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"products\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th width=\"3%\" class=\"toggle-all\"><i id=\"select_all\" name=\"select_invoice\"></i></th>
                            <th></th>
                            <th>Код</th>
                            <th>Обозначение</th>
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
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Группы</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\")  or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-footer\">
                    {% include 'product/_controls.html.twig' %}
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

            let table = \$(\"#products\").DataTable({
                \"columnDefs\": [
                    {
                        \"name\": \"checkbox\",
                        \"targets\": 0,
                        \"orderable\": false,
                        \"searchable\": false,
                        className: 'select-checkbox'
                    },
                    {\"name\": \"yid\", \"targets\": columnYid, \"orderable\": false, \"searchable\": false, className: \"hide_column\",},
                    {\"name\": \"id\", \"targets\": 2},
                    {\"name\": \"designation\", \"targets\": 3},
                    {\"name\": \"name\", \"targets\": 4},
                    {\"name\": \"groups\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('product_datatables') }}\",
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


            \$('#products').on('click', '.toggle-all', function () {
                \$(this).closest(\"tr\").toggleClass(\"selected\");
                if (\$(this).closest(\"tr\").hasClass(\"selected\")) {
                    table.rows().select();
                } else {
                    table.rows().deselect();
                }

            });

            \$(\"#products\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('product_delete', { 'id': 0 }) }}\";
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


            let productsEdit = [];
            \$(\".edit-group\").on(\"click\", function () {
                productsEdit = table.rows(\".selected\").data().pluck(columnYid).toArray();
                if (productsEdit.length > 0) {
                    \$('#modal-edit-group').modal('show');
                }
            });

            \$(\"#modal-edit-group\").on(\"click\", \"#btn-modal-edit\", function () {

                if (productsEdit.length === 0) {
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

                let url = \"{{ path('products_list_edit') }}\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '{{ csrf_token('products-list-edit') }}',
                        'productsEdit': JSON.stringify(productsEdit),
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

{% endblock %}", "product/index.html.twig", "/var/www/project/templates/product/index.html.twig");
    }
}
