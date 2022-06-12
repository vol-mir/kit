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

/* department/index.html.twig */
class __TwigTemplate_5f9132c3bd5de5e583e964b2abd647f03fd9cae83606af6b2730abe9a2c91858 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "department/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.department"), "html", null, true);
        
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
                    ";
            // line 11
            $this->loadTemplate("department/_controls.html.twig", "department/index.html.twig", 11)->display($context);
            // line 12
            echo "                </div>
                ";
        }
        // line 14
        echo "                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"departments\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Вышестоящие подразделение</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Наименование</th>
                            <th>Вышестоящие подразделение</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                <div class=\"card-footer\">
                    ";
            // line 38
            $this->loadTemplate("department/_controls.html.twig", "department/index.html.twig", 38)->display($context);
            // line 39
            echo "                </div>
                ";
        }
        // line 41
        echo "                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    ";
        // line 49
        $this->loadTemplate("modals/delete.html.twig", "department/index.html.twig", 49)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    <script>
        \$(function () {
            let table = \$(\"#departments\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"name\", \"targets\": 0},
                    {\"name\": \"parent\", \"targets\": 1, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"control\", \"targets\": 2, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_datatables");
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
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#departments\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_delete", ["id" => 0]);
        echo "\";
                url = url.replace(\"0\", \$(this).attr('data-confirm-delete-id'));

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 95
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
        return "department/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 95,  213 => 89,  199 => 78,  182 => 64,  170 => 54,  160 => 53,  150 => 49,  140 => 41,  136 => 39,  134 => 38,  131 => 37,  129 => 36,  105 => 14,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.index.department'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                {% if is_granted(\"ROLE_ADMIN\") %}
                <div class=\"card-header\">
                    {% include 'department/_controls.html.twig' %}
                </div>
                {% endif %}
                <!-- /.card-header -->
                <div class=\"card-body\">
                    <table id=\"departments\" class=\"table table-bordered table-striped table-hover table-sm\">
                        <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Вышестоящие подразделение</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Наименование</th>
                            <th>Вышестоящие подразделение</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                {% if is_granted(\"ROLE_ADMIN\") %}
                <div class=\"card-footer\">
                    {% include 'department/_controls.html.twig' %}
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
            let table = \$(\"#departments\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"name\", \"targets\": 0},
                    {\"name\": \"parent\", \"targets\": 1, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"control\", \"targets\": 2, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('department_datatables') }}\",
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

            \$(\"#departments\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let url = \"{{ path('department_delete', { 'id': 0 }) }}\";
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

{% endblock %}", "department/index.html.twig", "/var/www/project/templates/department/index.html.twig");
    }
}
