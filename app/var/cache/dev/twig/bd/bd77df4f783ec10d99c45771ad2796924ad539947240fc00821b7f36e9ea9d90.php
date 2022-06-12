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

/* track/track_document/index.html.twig */
class __TwigTemplate_e99a22b14f5698c02ed7c612c53f4e1940040c89c508d0c7a439c2fcaa3ca8e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/track_document/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.track_document"), "html", null, true);
        
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
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
            // line 10
            echo "                <div class=\"card-header\">
                    ";
            // line 11
            $this->loadTemplate("track/track_document/_controls.html.twig", "track/track_document/index.html.twig", 11)->display($context);
            // line 12
            echo "                    ";
            $this->loadTemplate("track/track_document/_filter.html.twig", "track/track_document/index.html.twig", 12)->display($context);
            // line 13
            echo "                </div>
                ";
        }
        // line 15
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"trackDocuments\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Дата нач.</th>
                            <th>Дата кон.</th>
                            <th>Статус</th>
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Исполнение</th>
                            <th>Сотрудник</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Дата нач.</th>
                            <th>Дата кон.</th>
                            <th>Статус</th>
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Исполнение</th>
                            <th>Сотрудник</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 49
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
            // line 50
            echo "                <div class=\"card-footer\">
                    ";
            // line 51
            $this->loadTemplate("track/track_document/_controls.html.twig", "track/track_document/index.html.twig", 51)->display($context);
            // line 52
            echo "                </div>
                ";
        }
        // line 54
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 62
        $this->loadTemplate("modals/delete.html.twig", "track/track_document/index.html.twig", 62)->display($context);
        // line 63
        echo "    ";
        $this->loadTemplate("modals/copy.html.twig", "track/track_document/index.html.twig", 63)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script>
        \$(function () {
            let columnStatus = 3;

            let statusCheck = \$('#status-check');
            let statusSelect = \$('#status-select');

            let table = \$(\"#trackDocuments\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_document\", \"targets\": 0},
                    {\"name\": \"date_start\", \"targets\": 1},
                    {\"name\": \"date_end\", \"targets\": 2},
                    {\"name\": \"status_document\", \"targets\": columnStatus,  \"orderable\": false, \"searchable\": false},
                    {\"name\": \"product_designation\", \"targets\": 4},
                    {\"name\": \"product_name\", \"targets\": 5},
                    {\"name\": \"rendition\", \"targets\": 6},
                    {\"name\": \"user\", \"targets\": 7},
                    {\"name\": \"control\", \"targets\": 8, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_datatables");
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
                \"order\": [[1, 'desc']],
                \"language\": {
                    \"url\": \"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#trackDocuments\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#trackDocuments\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 125
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

            \$(\"#modal-copy\").on(\"click\", \"#btn-modal-copy\", function () {

                let url = \"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_copy", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-copy-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("copy-item"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", null);
                \$('#modal-copy').modal('hide');
            });

            let state = table.state.loaded();

            if (state) {
                let colStatusSearch = state.columns[columnStatus].search;
                if (colStatusSearch.search) {
                    statusCheck.prop(\"checked\", true);
                    statusSelect.val(colStatusSearch.search);
                }
            }

            statusCheck.on('change', function () {
                if (this.checked) {
                    table.column(columnStatus).search(statusSelect.val()).draw();
                } else {
                    table.column(columnStatus).search('').draw();
                }
            });

            statusSelect.on('change', function () {
                if (statusCheck.is(\":checked\")) {
                    table.column(columnStatus).search(statusSelect.val()).draw();
                }
            });

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "track/track_document/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 144,  272 => 138,  256 => 125,  247 => 119,  228 => 103,  211 => 89,  188 => 68,  178 => 67,  167 => 63,  165 => 62,  155 => 54,  151 => 52,  149 => 51,  146 => 50,  144 => 49,  108 => 15,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.track_document'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-header\">
                    {% include 'track/track_document/_controls.html.twig' %}
                    {% include 'track/track_document/_filter.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"trackDocuments\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Дата нач.</th>
                            <th>Дата кон.</th>
                            <th>Статус</th>
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Исполнение</th>
                            <th>Сотрудник</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Дата нач.</th>
                            <th>Дата кон.</th>
                            <th>Статус</th>
                            <th>Обозначение</th>
                            <th>Наименование</th>
                            <th>Исполнение</th>
                            <th>Сотрудник</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-footer\">
                    {% include 'track/track_document/_controls.html.twig' %}
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
    {% include 'modals/copy.html.twig' %}
{% endblock %}


{% block javascripts %}
    <script>
        \$(function () {
            let columnStatus = 3;

            let statusCheck = \$('#status-check');
            let statusSelect = \$('#status-select');

            let table = \$(\"#trackDocuments\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_document\", \"targets\": 0},
                    {\"name\": \"date_start\", \"targets\": 1},
                    {\"name\": \"date_end\", \"targets\": 2},
                    {\"name\": \"status_document\", \"targets\": columnStatus,  \"orderable\": false, \"searchable\": false},
                    {\"name\": \"product_designation\", \"targets\": 4},
                    {\"name\": \"product_name\", \"targets\": 5},
                    {\"name\": \"rendition\", \"targets\": 6},
                    {\"name\": \"user\", \"targets\": 7},
                    {\"name\": \"control\", \"targets\": 8, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('track_document_datatables') }}\",
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
                \"order\": [[1, 'desc']],
                \"language\": {
                    \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
                }
            });

            \$(\"#trackDocuments\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#trackDocuments\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('track_document_delete', { 'id': 0 }) }}\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

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

            \$(\"#modal-copy\").on(\"click\", \"#btn-modal-copy\", function () {

                let url = \"{{ path('track_document_copy', { 'id': 0 }) }}\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-copy-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('copy-item') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", null);
                \$('#modal-copy').modal('hide');
            });

            let state = table.state.loaded();

            if (state) {
                let colStatusSearch = state.columns[columnStatus].search;
                if (colStatusSearch.search) {
                    statusCheck.prop(\"checked\", true);
                    statusSelect.val(colStatusSearch.search);
                }
            }

            statusCheck.on('change', function () {
                if (this.checked) {
                    table.column(columnStatus).search(statusSelect.val()).draw();
                } else {
                    table.column(columnStatus).search('').draw();
                }
            });

            statusSelect.on('change', function () {
                if (statusCheck.is(\":checked\")) {
                    table.column(columnStatus).search(statusSelect.val()).draw();
                }
            });

        });
    </script>

{% endblock %}", "track/track_document/index.html.twig", "/var/www/project/templates/track/track_document/index.html.twig");
    }
}
