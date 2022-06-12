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

/* specification/specification_document/index.html.twig */
class __TwigTemplate_19f67d19284b2ccd57681b7e6581125e829625a2ca16bc6c59db00a0ff513dd5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specification/specification_document/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.specification"), "html", null, true);
        
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
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"))) {
            // line 10
            echo "                <div class=\"card-header\">
                    ";
            // line 11
            $this->loadTemplate("specification/specification_document/_controls.html.twig", "specification/specification_document/index.html.twig", 11)->display($context);
            // line 12
            echo "                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"specifications\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Дата</th>
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
                            <th>Дата</th>
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
        // line 46
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"))) {
            // line 47
            echo "                <div class=\"card-footer\">
                    ";
            // line 48
            $this->loadTemplate("specification/specification_document/_controls.html.twig", "specification/specification_document/index.html.twig", 48)->display($context);
            // line 49
            echo "                </div>
                ";
        }
        // line 51
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 59
        $this->loadTemplate("modals/delete.html.twig", "specification/specification_document/index.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("modals/copy.html.twig", "specification/specification_document/index.html.twig", 60)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    <script>
        \$(function () {
            let table = \$(\"#specifications\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_specification\", \"targets\": 0},
                    {\"name\": \"date_specification\", \"targets\": 1},
                    {\"name\": \"status_specification\", \"targets\": 2,  \"orderable\": false, \"searchable\": false},
                    {\"name\": \"product_designation\", \"targets\": 3},
                    {\"name\": \"product_name\", \"targets\": 4},
                    {\"name\": \"rendition\", \"targets\": 5},
                    {\"name\": \"user\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_datatables");
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
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#specifications\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#specifications\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 116
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
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_copy", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-copy-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 135
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

        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "specification/specification_document/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 135,  261 => 129,  245 => 116,  236 => 110,  217 => 94,  200 => 80,  183 => 65,  173 => 64,  162 => 60,  160 => 59,  150 => 51,  146 => 49,  144 => 48,  141 => 47,  139 => 46,  105 => 14,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.specification'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\") %}
                <div class=\"card-header\">
                    {% include 'specification/specification_document/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"specifications\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Дата</th>
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
                            <th>Дата</th>
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
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGK\") %}
                <div class=\"card-footer\">
                    {% include 'specification/specification_document/_controls.html.twig' %}
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
            let table = \$(\"#specifications\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_specification\", \"targets\": 0},
                    {\"name\": \"date_specification\", \"targets\": 1},
                    {\"name\": \"status_specification\", \"targets\": 2,  \"orderable\": false, \"searchable\": false},
                    {\"name\": \"product_designation\", \"targets\": 3},
                    {\"name\": \"product_name\", \"targets\": 4},
                    {\"name\": \"rendition\", \"targets\": 5},
                    {\"name\": \"user\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('specification_datatables') }}\",
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

            \$(\"#specifications\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#specifications\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('specification_delete', { 'id': 0 }) }}\";
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

                let url = \"{{ path('specification_copy', { 'id': 0 }) }}\";
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

        });
    </script>

{% endblock %}", "specification/specification_document/index.html.twig", "/var/www/project/templates/specification/specification_document/index.html.twig");
    }
}
