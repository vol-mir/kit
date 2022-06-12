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

/* technological_operation/index.html.twig */
class __TwigTemplate_dd61c3886907943083463e715279382fb084dadece801576c1476ab4630743f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technological_operation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technological_operation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "technological_operation/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.technological_operation"), "html", null, true);
        
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
            $this->loadTemplate("technological_operation/_controls.html.twig", "technological_operation/index.html.twig", 11)->display($context);
            // line 12
            echo "                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"technologicalOperations\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Код операции</th>
                            <th>Наименование</th>
                            <th>Тип операции</th>
                            <th>Код типа</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Код операции</th>
                            <th>Наименование</th>
                            <th>Тип операции</th>
                            <th>Код типа</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 42
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"))) {
            // line 43
            echo "                <div class=\"card-footer\">
                    ";
            // line 44
            $this->loadTemplate("technological_operation/_controls.html.twig", "technological_operation/index.html.twig", 44)->display($context);
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
        $this->loadTemplate("modals/delete.html.twig", "technological_operation/index.html.twig", 55)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script>
        \$(function () {
            let table = \$(\"#technologicalOperations\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_operation\", \"targets\": 0},
                    {\"name\": \"code_operation\", \"targets\": 1},
                    {\"name\": \"name_operation\", \"targets\": 2},
                    {\"name\": \"type_operation\", \"targets\": 3},
                    {\"name\": \"code_type_operation\", \"targets\": 4},
                    {\"name\": \"control\", \"targets\": 5, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technological_operation_datatables");
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
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#technologicalOperations\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technological_operation_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 104
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
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "technological_operation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 104,  222 => 98,  208 => 87,  191 => 73,  176 => 60,  166 => 59,  156 => 55,  146 => 47,  142 => 45,  140 => 44,  137 => 43,  135 => 42,  105 => 14,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.technological_operation'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-header\">
                    {% include 'technological_operation/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"technologicalOperations\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Код</th>
                            <th>Код операции</th>
                            <th>Наименование</th>
                            <th>Тип операции</th>
                            <th>Код типа</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Код</th>
                            <th>Код операции</th>
                            <th>Наименование</th>
                            <th>Тип операции</th>
                            <th>Код типа</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_OGT\") %}
                <div class=\"card-footer\">
                    {% include 'technological_operation/_controls.html.twig' %}
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
            let table = \$(\"#technologicalOperations\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"id_operation\", \"targets\": 0},
                    {\"name\": \"code_operation\", \"targets\": 1},
                    {\"name\": \"name_operation\", \"targets\": 2},
                    {\"name\": \"type_operation\", \"targets\": 3},
                    {\"name\": \"code_type_operation\", \"targets\": 4},
                    {\"name\": \"control\", \"targets\": 5, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('technological_operation_datatables') }}\",
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

            \$(\"#technologicalOperations\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('technological_operation_delete', { 'id': 0 }) }}\";
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
        });
    </script>

{% endblock %}", "technological_operation/index.html.twig", "/var/www/project/templates/technological_operation/index.html.twig");
    }
}
