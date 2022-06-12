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

/* base.html.twig */
class __TwigTemplate_a795bbdc8dc798c748c7984842f7517348c779a98b98a4705a675107b8fd7847 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\" utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>КиТ: ";
        // line 6
        $this->displayBlock("title", $context, $blocks);
        echo "</title>
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<!-- Tell the browser to be responsive to screen width -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
<!-- iCheck -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Select2 -->
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        echo "\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
<!-- overlayScrollbars -->
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
<!-- Daterange picker -->
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
<!-- summernote -->
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
<!-- Toastr -->
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-select/css/select.bootstrap4.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css"), "html", null, true);
        echo "\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
<!-- Custom style -->
<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/style.css"), "html", null, true);
        echo "\">
<!-- Bootstrap Table -->
<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-table/bootstrap-table.min.css"), "html", null, true);
        echo "\">
<!-- Jquery treegrid -->
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-treegrid/css/jquery.treegrid.css"), "html", null, true);
        echo "\">
";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">Главная</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Выйти</a>
                </li>
            ";
        } else {
            // line 66
            echo "                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Войти</a>
                </li>
            ";
        }
        // line 70
        echo "        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"brand-link\">
            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/LogisticLogo.png"), "html", null, true);
        echo "\" alt=\"Logistic Logo\"
                 class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">КиТ</span>
        </a>
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) {
            // line 86
            echo "                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "getFullName", [], "method", false, false, false, 88), "html", null, true);
            echo "</a>
                    </div>
                </div>
            ";
        }
        // line 92
        echo "            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                    data-accordion=\"false\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"
                           class=\"nav-link ";
        // line 98
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "get", [0 => "_route"], "method", false, false, false, 98), "home"))) {
            echo " active ";
        }
        echo "\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.main"), "html", null, true);
        echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-header\">Справочники</li>
                    ";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 108
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            echo "\"
                           class=\"nav-link ";
            // line 110
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "get", [0 => "_route"], "method", false, false, false, 110), "product_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa fa-cubes nav-icon\"></i>
                            <p>
                                ";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>


                    <li class=\"nav-item\">
                        <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
            echo "\"
                           class=\"nav-link ";
            // line 121
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "get", [0 => "_route"], "method", false, false, false, 121), "material_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa fa-leaf nav-icon\"></i>
                            <p>
                                ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.material"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    ";
            // line 129
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 130
                echo "                    <li class=\"nav-item\">
                        <a href=\"";
                // line 131
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
                echo "\"
                           class=\"nav-link ";
                // line 132
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "get", [0 => "_route"], "method", false, false, false, 132), "document_index"))) {
                    echo " active ";
                }
                echo "\">
                            <i class=\"fas fa fa-book nav-icon\"></i>
                            <p>
                                ";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.document"), "html", null, true);
                echo "
                            </p>
                        </a>
                    </li>
                    ";
            }
            // line 140
            echo "
                    <li class=\"nav-header\">Документы</li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_index");
            echo "\"
                           class=\"nav-link ";
            // line 145
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "get", [0 => "_route"], "method", false, false, false, 145), "specification_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-tasks nav-icon\"></i>
                            <p>
                                ";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.specification"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 154
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_index");
            echo "\"
                           class=\"nav-link ";
            // line 155
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "get", [0 => "_route"], "method", false, false, false, 155), "norm_document_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-shopping-basket nav-icon\"></i>
                            <p>
                                ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.norm_document"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 163
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_index");
            echo "\"
                           class=\"nav-link ";
            // line 164
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "get", [0 => "_route"], "method", false, false, false, 164), "track_document_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-road  nav-icon\"></i>
                            <p>
                                ";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.track_document"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 172
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("production_plan_index");
            echo "\"
                           class=\"nav-link ";
            // line 173
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "get", [0 => "_route"], "method", false, false, false, 173), "production_plan_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-bookmark nav-icon\"></i>
                            <p>
                                ";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.plan_document"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    ";
        }
        // line 182
        echo "
                    ";
        // line 183
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"))) {
            // line 184
            echo "
                    <li class=\"nav-header\">Дополнительно</li>

                    ";
        }
        // line 188
        echo "
                    ";
        // line 189
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 190
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_kind_index");
            echo "\"
                           class=\"nav-link ";
            // line 193
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "request", [], "any", false, false, false, 193), "get", [0 => "_route"], "method", false, false, false, 193), "product_kind_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-kiwi-bird nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product_kind"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 202
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_group_index");
            echo "\"
                           class=\"nav-link ";
            // line 203
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "request", [], "any", false, false, false, 203), "get", [0 => "_route"], "method", false, false, false, 203), "product_group_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-object-group nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product_group"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_category_index");
            echo "\"
                           class=\"nav-link ";
            // line 213
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "request", [], "any", false, false, false, 213), "get", [0 => "_route"], "method", false, false, false, 213), "product_category_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-flag nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product_category"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    ";
        }
        // line 222
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 223
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 225
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unit_index");
            echo "\"
                           class=\"nav-link ";
            // line 226
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "request", [], "any", false, false, false, 226), "get", [0 => "_route"], "method", false, false, false, 226), "unit_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-hashtag nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.unit"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 235
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rendition_index");
            echo "\"
                           class=\"nav-link ";
            // line 236
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "request", [], "any", false, false, false, 236), "get", [0 => "_route"], "method", false, false, false, 236), "rendition_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-cube nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.rendition"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 245
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_index");
            echo "\"
                           class=\"nav-link ";
            // line 246
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 246, $this->source); })()), "request", [], "any", false, false, false, 246), "get", [0 => "_route"], "method", false, false, false, 246), "department_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-building nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.department"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 254
        echo "
                    ";
        // line 255
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 256
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 258
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculation_index");
            echo "\"
                           class=\"nav-link ";
            // line 259
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "request", [], "any", false, false, false, 259), "get", [0 => "_route"], "method", false, false, false, 259), "calculation_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-tags nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.calculation"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 267
        echo "
                    ";
        // line 268
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 269
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 270
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analytic_group_index");
            echo "\"
                           class=\"nav-link ";
            // line 271
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "request", [], "any", false, false, false, 271), "get", [0 => "_route"], "method", false, false, false, 271), "analytic_group_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-archive nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.analytic_group"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 279
        echo "                    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 280
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 282
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("finance_group_index");
            echo "\"
                           class=\"nav-link ";
            // line 283
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "request", [], "any", false, false, false, 283), "get", [0 => "_route"], "method", false, false, false, 283), "finance_group_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-calculator nav-icon text-warning\"></i>
                            <p>
                                ";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.finance_group"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 291
        echo "
                    ";
        // line 292
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 293
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 295
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_type_index");
            echo "\"
                           class=\"nav-link ";
            // line 296
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "request", [], "any", false, false, false, 296), "get", [0 => "_route"], "method", false, false, false, 296), "product_type_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-asterisk  nav-icon\"></i>
                            <p>
                                ";
            // line 299
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.product_type"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 304
        echo "
                    ";
        // line 305
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 306
            echo "
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 308
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technological_operation_index");
            echo "\"
                           class=\"nav-link ";
            // line 309
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "request", [], "any", false, false, false, 309), "get", [0 => "_route"], "method", false, false, false, 309), "technological_operation_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-square nav-icon\"></i>
                            <p>
                                ";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.technological_operation_menu"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 317
        echo "
                    ";
        // line 318
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 319
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 320
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_section_index");
            echo "\"
                           class=\"nav-link ";
            // line 321
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "request", [], "any", false, false, false, 321), "get", [0 => "_route"], "method", false, false, false, 321), "specification_section_index"))) {
                echo " active ";
            }
            echo "\">
                            <i class=\"fas fa-tag nav-icon\"></i>
                            <p>
                                ";
            // line 324
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.index.specification_section"), "html", null, true);
            echo "
                            </p>
                        </a>
                    </li>
                    ";
        }
        // line 329
        echo "
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-12\">
                        <h1 class=\"m-0 text-dark\">";
        // line 343
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                ";
        // line 352
        $this->loadTemplate("default/_flashes.html.twig", "base.html.twig", 352)->display($context);
        // line 353
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 354
        echo "            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020 - 2022 <a href=\"";
        // line 360
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">КиТ</a>.</strong>
        Проект разработал Быковский В.В.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Версия </b><a href=\"";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("version");
        echo "\">1.2.1</a>
        </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- Select2 -->
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/select2/js/i18n/ru.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- DataTables -->
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-select/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-select/js/select.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-colreorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables-colreorder/js/colReorder.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Toastr -->
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Table -->
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-table/bootstrap-table.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery treegrid -->
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-treegrid/js/jquery.treegrid.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 422
        $this->displayBlock('javascripts', $context, $blocks);
        // line 423
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 343
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Главная";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 353
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 422
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  999 => 422,  981 => 353,  962 => 343,  944 => 44,  933 => 423,  931 => 422,  927 => 421,  922 => 419,  918 => 418,  913 => 416,  908 => 414,  904 => 413,  899 => 411,  895 => 410,  891 => 409,  887 => 408,  883 => 407,  879 => 406,  874 => 404,  869 => 402,  864 => 400,  860 => 399,  855 => 397,  850 => 395,  845 => 393,  840 => 391,  836 => 390,  831 => 388,  826 => 386,  821 => 384,  816 => 382,  807 => 376,  802 => 374,  788 => 363,  782 => 360,  774 => 354,  771 => 353,  769 => 352,  757 => 343,  741 => 329,  733 => 324,  725 => 321,  721 => 320,  718 => 319,  716 => 318,  713 => 317,  705 => 312,  697 => 309,  693 => 308,  689 => 306,  687 => 305,  684 => 304,  676 => 299,  668 => 296,  664 => 295,  660 => 293,  658 => 292,  655 => 291,  647 => 286,  639 => 283,  635 => 282,  631 => 280,  628 => 279,  620 => 274,  612 => 271,  608 => 270,  605 => 269,  603 => 268,  600 => 267,  592 => 262,  584 => 259,  580 => 258,  576 => 256,  574 => 255,  571 => 254,  563 => 249,  555 => 246,  551 => 245,  542 => 239,  534 => 236,  530 => 235,  521 => 229,  513 => 226,  509 => 225,  505 => 223,  502 => 222,  493 => 216,  485 => 213,  481 => 212,  472 => 206,  464 => 203,  460 => 202,  451 => 196,  443 => 193,  439 => 192,  435 => 190,  433 => 189,  430 => 188,  424 => 184,  422 => 183,  419 => 182,  410 => 176,  402 => 173,  398 => 172,  390 => 167,  382 => 164,  378 => 163,  370 => 158,  362 => 155,  358 => 154,  349 => 148,  341 => 145,  337 => 144,  331 => 140,  323 => 135,  315 => 132,  311 => 131,  308 => 130,  306 => 129,  298 => 124,  290 => 121,  286 => 120,  276 => 113,  268 => 110,  264 => 109,  261 => 108,  259 => 107,  250 => 101,  242 => 98,  238 => 97,  231 => 92,  224 => 88,  220 => 86,  218 => 85,  207 => 77,  203 => 76,  195 => 70,  189 => 67,  186 => 66,  180 => 63,  177 => 62,  175 => 61,  167 => 56,  154 => 45,  152 => 44,  148 => 43,  143 => 41,  138 => 39,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  114 => 30,  109 => 28,  104 => 26,  99 => 24,  94 => 22,  89 => 20,  85 => 19,  80 => 17,  75 => 15,  68 => 11,  61 => 7,  57 => 6,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\" utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>КиТ: {{ block('title') }}</title>
<link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\">
<!-- Tell the browser to be responsive to screen width -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
<!-- iCheck -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
<!-- Select2 -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/select2/css/select2.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
<!-- overlayScrollbars -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
<!-- Daterange picker -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">
<!-- summernote -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/summernote/summernote-bs4.css') }}\">
<!-- Toastr -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/toastr/toastr.min.css') }}\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-select/css/select.bootstrap4.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css') }}\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
<!-- Custom style -->
<link rel=\"stylesheet\" href=\"{{ asset('dist/css/style.css') }}\">
<!-- Bootstrap Table -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap-table/bootstrap-table.min.css') }}\">
<!-- Jquery treegrid -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/jquery-treegrid/css/jquery.treegrid.css') }}\">
{% block stylesheets %}{% endblock %}
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"{{ path('home') }}\" class=\"nav-link\">Главная</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            {% if app.user %}
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Выйти</a>
                </li>
            {% else %}
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"{{ path('app_login') }}\" class=\"nav-link\">Войти</a>
                </li>
            {% endif %}
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"{{ path('home') }}\" class=\"brand-link\">
            <img src=\"{{ asset('dist/img/LogisticLogo.png') }}\" alt=\"Logistic Logo\"
                 class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">КиТ</span>
        </a>
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            {% if app.user %}
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">{{ app.user.getFullName() }}</a>
                    </div>
                </div>
            {% endif %}
            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                    data-accordion=\"false\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('home') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'home' %} active {% endif %}\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                {{ 'title.page.main'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-header\">Справочники</li>
                    {% if is_granted(\"ROLE_USER\") %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('product_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'product_index' %} active {% endif %}\">
                            <i class=\"fas fa fa-cubes nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.product'|trans }}
                            </p>
                        </a>
                    </li>


                    <li class=\"nav-item\">
                        <a href=\"{{ path('material_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'material_index' %} active {% endif %}\">
                            <i class=\"fas fa fa-leaf nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.material'|trans }}
                            </p>
                        </a>
                    </li>

                    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('document_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'document_index' %} active {% endif %}\">
                            <i class=\"fas fa fa-book nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.document'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    <li class=\"nav-header\">Документы</li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('specification_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'specification_index' %} active {% endif %}\">
                            <i class=\"fas fa-tasks nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.specification'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('norm_document_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'norm_document_index' %} active {% endif %}\">
                            <i class=\"fas fa-shopping-basket nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.norm_document'|trans }}
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('track_document_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'track_document_index' %} active {% endif %}\">
                            <i class=\"fas fa-road  nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.track_document'|trans }}
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('production_plan_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'production_plan_index' %} active {% endif %}\">
                            <i class=\"fas fa-bookmark nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.plan_document'|trans }}
                            </p>
                        </a>
                    </li>

                    {% endif %}

                    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_BUH\")%}

                    <li class=\"nav-header\">Дополнительно</li>

                    {% endif %}

                    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('product_kind_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'product_kind_index' %} active {% endif %}\">
                            <i class=\"fas fa-kiwi-bird nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.product_kind'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('product_group_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'product_group_index' %} active {% endif %}\">
                            <i class=\"fas fa-object-group nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.product_group'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('product_category_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'product_category_index' %} active {% endif %}\">
                            <i class=\"fas fa-flag nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.product_category'|trans }}
                            </p>
                        </a>
                    </li>

                    {% endif %}
                    {% if  is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('unit_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'unit_index' %} active {% endif %}\">
                            <i class=\"fas fa-hashtag nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.unit'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('rendition_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'rendition_index' %} active {% endif %}\">
                            <i class=\"fas fa-cube nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.rendition'|trans }}
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ path('department_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'department_index' %} active {% endif %}\">
                            <i class=\"fas fa-building nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.department'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_PEO\") or is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('calculation_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'calculation_index' %} active {% endif %}\">
                            <i class=\"fas fa-tags nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.calculation'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_BUH\") or is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('analytic_group_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'analytic_group_index' %} active {% endif %}\">
                            <i class=\"fas fa-archive nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.analytic_group'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}
                    {% if is_granted(\"ROLE_BUH\") or is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('finance_group_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'finance_group_index' %} active {% endif %}\">
                            <i class=\"fas fa-calculator nav-icon text-warning\"></i>
                            <p>
                                {{ 'title.page.index.finance_group'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('product_type_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'product_type_index' %} active {% endif %}\">
                            <i class=\"fas fa-asterisk  nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.product_type'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_OGT\") or is_granted(\"ROLE_ADMIN\") %}

                    <li class=\"nav-item\">
                        <a href=\"{{ path('technological_operation_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'technological_operation_index' %} active {% endif %}\">
                            <i class=\"fas fa-square nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.technological_operation_menu'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                    {% if is_granted(\"ROLE_OGK\") or is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('specification_section_index') }}\"
                           class=\"nav-link {% if app.request.get('_route') == 'specification_section_index' %} active {% endif %}\">
                            <i class=\"fas fa-tag nav-icon\"></i>
                            <p>
                                {{ 'title.page.index.specification_section'|trans }}
                            </p>
                        </a>
                    </li>
                    {% endif %}

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-12\">
                        <h1 class=\"m-0 text-dark\">{% block title %}Главная{% endblock %}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                {% include 'default/_flashes.html.twig' %}
                {% block body %}{% endblock %}
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020 - 2022 <a href=\"{{ path('home') }}\">КиТ</a>.</strong>
        Проект разработал Быковский В.В.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Версия </b><a href=\"{{ path('version') }}\">1.2.1</a>
        </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('plugins/sparklines/sparkline.js') }}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset('plugins/moment/moment.min.js') }}\"></script>
<script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
<!-- Summernote -->
<script src=\"{{ asset('plugins/summernote/summernote-bs4.min.js') }}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
<!-- Select2 -->
<script src=\"{{ asset('plugins/select2/js/select2.full.min.js') }}\"></script>
<script src=\"{{ asset('plugins/select2/js/i18n/ru.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('dist/js/demo.js') }}\"></script>
<!-- DataTables -->
<script src=\"{{ asset('plugins/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-select/js/dataTables.select.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-select/js/select.bootstrap4.min.js') }}\"></script>

<script src=\"{{ asset('plugins/datatables-colreorder/js/dataTables.colReorder.min.js') }}\"></script>
<script src=\"{{ asset('plugins/datatables-colreorder/js/colReorder.bootstrap4.min.js') }}\"></script>
<!-- Toastr -->
<script src=\"{{ asset('plugins/toastr/toastr.min.js') }}\"></script>
<!-- Bootstrap Table -->
<script src=\"{{ asset('plugins/bootstrap-table/bootstrap-table.min.js') }}\"></script>
<script src=\"{{ asset('plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.min.js') }}\"></script>
<!-- Jquery treegrid -->
<script src=\"{{ asset('plugins/jquery-treegrid/js/jquery.treegrid.min.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/project/templates/base.html.twig");
    }
}
