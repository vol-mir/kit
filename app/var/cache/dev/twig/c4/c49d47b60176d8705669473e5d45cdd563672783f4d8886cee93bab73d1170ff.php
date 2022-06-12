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

/* plan/production_plan/index.html.twig */
class __TwigTemplate_882487f1b91117b3cd2c18a877a8e6b8e1dc74ee70b57e52defe796f094fd323 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plan/production_plan/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plan/production_plan/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plan/production_plan/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.plan_document"), "html", null, true);
        
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "                <div class=\"card-header\">

                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"production-plans\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Код ЕРП</th>
                            <th>Дата ЕРП</th>
                            <th>Тип счета</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Код ЕРП</th>
                            <th>Дата ЕРП</th>
                            <th>Тип счета</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                <div class=\"card-footer\">

                </div>
                ";
        }
        // line 43
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 51
        $this->loadTemplate("modals/delete.html.twig", "plan/production_plan/index.html.twig", 51)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script>
        \$(function () {
            let table = \$(\"#production-plans\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {
                       'render': function (data, type, row) {
                            return row[\"id\"];
                        },
                        \"name\": \"id_document\",
                        \"targets\": 0
                    },
                    {
                       'render': function (data, type, row) {
                            return row[\"id_erp\"];
                        },
                        \"name\": \"id_erp\",
                        \"targets\": 1
                    },
                    {
                       'render': function (data, type, row) {
                            let dateErp = row[\"date_erp\"]?moment(new Date(row[\"date_erp\"].date)).format('DD.MM.YYYY'):'';
                            return dateErp;
                        },
                        \"name\": \"date_erp\",
                        \"targets\": 2
                    },
                    {
                       'render': function (data, type, row) {
                            return row[\"account_type\"];
                        },
                        \"name\": \"account_type\",
                        \"targets\": 3
                    },
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("datatable_production_plans");
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
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#production-plans\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#production-plans\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("production_plan_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 128
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
        return "plan/production_plan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 128,  240 => 122,  221 => 106,  204 => 92,  166 => 56,  156 => 55,  146 => 51,  136 => 43,  130 => 39,  128 => 38,  102 => 14,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.plan_document'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") %}
                <div class=\"card-header\">

                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"production-plans\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Код ЕРП</th>
                            <th>Дата ЕРП</th>
                            <th>Тип счета</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Код ЕРП</th>
                            <th>Дата ЕРП</th>
                            <th>Тип счета</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") %}
                <div class=\"card-footer\">

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
{% endblock %}


{% block javascripts %}
    <script>
        \$(function () {
            let table = \$(\"#production-plans\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {
                       'render': function (data, type, row) {
                            return row[\"id\"];
                        },
                        \"name\": \"id_document\",
                        \"targets\": 0
                    },
                    {
                       'render': function (data, type, row) {
                            return row[\"id_erp\"];
                        },
                        \"name\": \"id_erp\",
                        \"targets\": 1
                    },
                    {
                       'render': function (data, type, row) {
                            let dateErp = row[\"date_erp\"]?moment(new Date(row[\"date_erp\"].date)).format('DD.MM.YYYY'):'';
                            return dateErp;
                        },
                        \"name\": \"date_erp\",
                        \"targets\": 2
                    },
                    {
                       'render': function (data, type, row) {
                            return row[\"account_type\"];
                        },
                        \"name\": \"account_type\",
                        \"targets\": 3
                    },
                ],
                \"ajax\": {
                    \"url\": \"{{ path('datatable_production_plans') }}\",
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

            \$(\"#production-plans\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#production-plans\").on(\"click\", \".modal-copy-dialog\", function () {
                \$('#btn-modal-copy').attr(\"data-confirm-copy-id\", \$(this).attr('data-id'));
                \$('#modal-copy').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('production_plan_delete', { 'id': 0 }) }}\";
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

        });
    </script>

{% endblock %}", "plan/production_plan/index.html.twig", "/var/www/project/templates/plan/production_plan/index.html.twig");
    }
}
