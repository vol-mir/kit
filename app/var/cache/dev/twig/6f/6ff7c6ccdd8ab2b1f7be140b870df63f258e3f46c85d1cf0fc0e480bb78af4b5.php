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

/* specification/specification_document/edit.html.twig */
class __TwigTemplate_05e78bbee0706adfe295d06a3869ce12e28b155e55471c91ca72e1639bf0c447 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/specification_document/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "specification/specification_document/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.edit.specification"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Детализация</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        ";
        // line 23
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 23, $this->source); })()), "close", [], "any", false, false, false, 23), 1))))) {
            // line 24
            echo "                        <!-- form start -->
                        <form id=\"specificationForm\" action=\"";
            // line 25
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "list_error"], "method", false, false, false, 25)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "list_error" => "true"])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]))), "html", null, true);
            echo "\" method=\"POST\">
                            ";
            // line 26
            $this->loadTemplate("specification/specification_document/_form.html.twig", "specification/specification_document/edit.html.twig", 26)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })())]));
            // line 27
            echo "                            <div class=\"card-footer\">

                                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "save", [], "any", false, false, false, 29), 'widget');
            echo "
                                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "saveAndStay", [], "any", false, false, false, 30), 'widget');
            echo "

                                <a href=\"";
            // line 32
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "list_error"], "method", false, false, false, 32)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_index_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_index")));
            echo "\"
                                   class=\"btn btn-default float-right\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
            echo "</a>
                            </div>
                        </form>
                        ";
        } else {
            // line 37
            echo "                            <div class=\"card-body\">
                            <dl>
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 39, $this->source); })()), "dateSpecification", [], "any", false, false, false, 39)) {
                // line 40
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_specification"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 41, $this->source); })()), "dateSpecification", [], "any", false, false, false, 41), "d.m.Y"), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 43
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 43, $this->source); })()), "product", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 45, $this->source); })()), "product", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 47
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 47, $this->source); })()), "product", [], "any", false, false, false, 47), "designation", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 49, $this->source); })()), "product", [], "any", false, false, false, 49), "designation", [], "any", false, false, false, 49), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 51
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 51, $this->source); })()), "rendition", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 53, $this->source); })()), "rendition", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 55
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["specificationStatuses"]) || array_key_exists("specificationStatuses", $context) ? $context["specificationStatuses"] : (function () { throw new RuntimeError('Variable "specificationStatuses" does not exist.', 57, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57), [], "array", false, false, false, 57)), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 59
            echo "                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_index");
            echo "\"
                                   class=\"btn btn-default float-right\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 66
        echo "                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">


                            ";
        // line 70
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 70, $this->source); })()), "close", [], "any", false, false, false, 70), 1))))) {
            // line 71
            echo "                            <div class=\"card-header\">
                                ";
            // line 72
            $this->loadTemplate("specification/structure/_controls.html.twig", "specification/specification_document/edit.html.twig", 72)->display($context);
            // line 73
            echo "                            </div>
                            ";
        }
        // line 75
        echo "                            <div class=\"card-body\">
                                <table id=\"structure\" class=\"table table-bordered table-striped table-hover table-sm\">
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
                            </div>
                            ";
        // line 105
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 105, $this->source); })()), "close", [], "any", false, false, false, 105), 1))))) {
            // line 106
            echo "                            <div class=\"card-footer\">
                                ";
            // line 107
            $this->loadTemplate("specification/structure/_controls.html.twig", "specification/specification_document/edit.html.twig", 107)->display($context);
            // line 108
            echo "                            </div>
                            ";
        }
        // line 110
        echo "
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

    ";
        // line 120
        $this->loadTemplate("modals/delete.html.twig", "specification/specification_document/edit.html.twig", 120)->display($context);
        // line 121
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "specification/specification_document/edit.html.twig", 121)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('#specificationForm').validate({
                rules: {
                    'specification[date_specification]': {
                        maxlength: 190,
                        required: false,
                    },
                    'specification[product]': {
                        required: true,
                    },
                    'specification[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'specification[date_specification]': {
                        maxlength: \"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'specification[product]': {
                        required: \"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\"
                    },
                    'specification[rendition]': {
                        required: \"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\"
                    },
                },
                errorElement: 'div',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    \$(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    \$(element).removeClass('is-invalid');
                }
            });


            \$(\".print-specification\").on(\"click\", function () {

                let url = \"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_specification", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173)]), "html", null, true);
        echo "\";
                let specificationId = \"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174), "html", null, true);
        echo "\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("print-specification"), "html", null, true);
        echo "',
                        'specificationId': specificationId
                    },
                    dataType: 'json'
                }).done(function (data) {

                });

            });


        });
    </script>

    <script>
        \$(function () {
            let table = \$(\"#structure\").DataTable({
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
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_datatables", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
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
                \"aLengthMenu\": [ 10, 25, 50, 100, 150, 200, 250 ],
                \"pageLength\": 100,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            \$(\"#structure\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#structure\").on(\"click\", \".element-move\", function () {

                \$(\"#option-index-numbers option\").remove();

                \$.each(table.column(0).data(), function() {
                    \$('#option-index-numbers').append(\$('<option>', {
                        value: this,
                        text: this
                    }));
                });


                \$('#btn-modal-move').attr(\"data-move-id\", \$(this).attr('data-id'));
                \$('#modal-move').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let structureId = \$(this).attr('data-confirm-delete-id');
                let url = \" /specification/\" + ";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 253, $this->source); })()), "id", [], "any", false, false, false, 253), "html", null, true);
        echo " + \"/edit/structure/\" + structureId + \"/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 258
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

            \$(\"#modal-move\").on(\"click\", \"#btn-modal-move\", function () {

                let structureId = \$(this).attr('data-move-id');
                let newIndexNumber = \$(\"#option-index-numbers\").val();

                let url = \" /specification/\" + ";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274), "html", null, true);
        echo " + \"/edit/structure/\" + structureId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("structure-item-move"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

            \$(document).on('click','.element-up',function(){

                let structureId = \$(this).attr('data-id');
                let url = \"/specification/\" + ";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 293, $this->source); })()), "id", [], "any", false, false, false, 293), "html", null, true);
        echo " + \"/edit/structure/\" + structureId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("structure-item-up"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    console.log(data);
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });

            \$(document).on('click','.element-adown',function(){

                let structureId = \$(this).attr('data-id');
                let url = \"/specification/\" + ";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 311, $this->source); })()), "id", [], "any", false, false, false, 311), "html", null, true);
        echo " + \"/edit/structure/\" + structureId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("structure-item-adown"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    console.log(data);
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });
            });

        });



        \$(document).ready(function () {

            let locSpecificationTab = localStorage.getItem('specification-tab');
            \$('#' + locSpecificationTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('specification-tab', selectedTabId);
            });

            \$(\"#specification_product\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select_product");
        echo "\",
                    dataType: 'json',
                    delay: 350,
                    cache: true,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page || 1
                        };
                    }
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
        return "specification/specification_document/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 342,  568 => 316,  560 => 311,  544 => 298,  536 => 293,  519 => 279,  511 => 274,  492 => 258,  484 => 253,  453 => 225,  435 => 210,  403 => 181,  393 => 174,  389 => 173,  367 => 154,  361 => 151,  355 => 148,  332 => 128,  328 => 127,  325 => 126,  315 => 125,  304 => 121,  302 => 120,  290 => 110,  286 => 108,  284 => 107,  281 => 106,  279 => 105,  247 => 75,  243 => 73,  241 => 72,  238 => 71,  236 => 70,  230 => 66,  224 => 63,  220 => 62,  215 => 59,  210 => 57,  205 => 56,  202 => 55,  197 => 53,  192 => 52,  189 => 51,  184 => 49,  179 => 48,  176 => 47,  171 => 45,  166 => 44,  163 => 43,  158 => 41,  153 => 40,  151 => 39,  147 => 37,  140 => 33,  136 => 32,  131 => 30,  127 => 29,  123 => 27,  121 => 26,  117 => 25,  114 => 24,  112 => 23,  93 => 6,  83 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.edit.specification'|trans }}: {{ specification.product.name }} {{ specification.product.designation }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Детализация</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGK\") and specification.close != 1) %}
                        <!-- form start -->
                        <form id=\"specificationForm\" action=\"{{ app.request.get('list_error')?path('specification_edit', {'id': specification.id, 'list_error': 'true'}):path('specification_edit', {'id': specification.id}) }}\" method=\"POST\">
                            {% include 'specification/specification_document/_form.html.twig' with {'form': form} only %}
                            <div class=\"card-footer\">

                                {{ form_widget(form.save) }}
                                {{ form_widget(form.saveAndStay) }}

                                <a href=\"{{ app.request.get('list_error')?path('specification_index_error'):path('specification_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        </form>
                        {% else %}
                            <div class=\"card-body\">
                            <dl>
                                {% if specification.dateSpecification %}
                                    <dt>{{ 'label.date_specification'|trans }}</dt>
                                    <dd>{{ specification.dateSpecification|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if specification.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ specification.product.name }}</dd>
                                {% endif %}
                                {% if specification.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ specification.product.designation }}</dd>
                                {% endif %}
                                {% if specification.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ specification.rendition.name}}</dd>
                                {% endif %}
                                {% if specification.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ specificationStatuses[specification.status]|trans }}</dd>
                                {% endif %}
                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"{{ path('specification_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">


                            {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGK\") and specification.close != 1) %}
                            <div class=\"card-header\">
                                {% include 'specification/structure/_controls.html.twig' %}
                            </div>
                            {% endif %}
                            <div class=\"card-body\">
                                <table id=\"structure\" class=\"table table-bordered table-striped table-hover table-sm\">
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
                            </div>
                            {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGK\") and specification.close != 1) %}
                            <div class=\"card-footer\">
                                {% include 'specification/structure/_controls.html.twig' %}
                            </div>
                            {% endif %}

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

    {% include 'modals/delete.html.twig' %}
    {% include 'modals/move.html.twig' %}
{% endblock %}


{% block javascripts %}
    <!-- jquery-validation -->
    <script src=\"{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/jquery-validation/additional-methods.min.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('#specificationForm').validate({
                rules: {
                    'specification[date_specification]': {
                        maxlength: 190,
                        required: false,
                    },
                    'specification[product]': {
                        required: true,
                    },
                    'specification[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'specification[date_specification]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'specification[product]': {
                        required: \"{{ 'message.validation.required'|trans }}\"
                    },
                    'specification[rendition]': {
                        required: \"{{ 'message.validation.required'|trans }}\"
                    },
                },
                errorElement: 'div',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    \$(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    \$(element).removeClass('is-invalid');
                }
            });


            \$(\".print-specification\").on(\"click\", function () {

                let url = \"{{ path('print_specification', {'id': specification.id}) }}\";
                let specificationId = \"{{ specification.id }}\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        '_method': 'post',
                        '_token': '{{ csrf_token('print-specification') }}',
                        'specificationId': specificationId
                    },
                    dataType: 'json'
                }).done(function (data) {

                });

            });


        });
    </script>

    <script>
        \$(function () {
            let table = \$(\"#structure\").DataTable({
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
                    \"url\": \"{{ path('structure_datatables', {'specification_id': specification.id}) }}\",
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
                \"aLengthMenu\": [ 10, 25, 50, 100, 150, 200, 250 ],
                \"pageLength\": 100,
                \"order\": [[0, 'asc']],
                \"language\": {
                    \"url\": \"{{ asset('dist/json/dataTables.ru.lang.json') }}\"
                }
            });

            \$(\"#structure\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#structure\").on(\"click\", \".element-move\", function () {

                \$(\"#option-index-numbers option\").remove();

                \$.each(table.column(0).data(), function() {
                    \$('#option-index-numbers').append(\$('<option>', {
                        value: this,
                        text: this
                    }));
                });


                \$('#btn-modal-move').attr(\"data-move-id\", \$(this).attr('data-id'));
                \$('#modal-move').modal('show');
            });

            \$(\"#modal-delete\").on(\"click\", \"#btn-modal-delete\", function () {

                let structureId = \$(this).attr('data-confirm-delete-id');
                let url = \" /specification/\" + {{ specification.id }} + \"/edit/structure/\" + structureId + \"/delete\";

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

            \$(\"#modal-move\").on(\"click\", \"#btn-modal-move\", function () {

                let structureId = \$(this).attr('data-move-id');
                let newIndexNumber = \$(\"#option-index-numbers\").val();

                let url = \" /specification/\" + {{ specification.id }} + \"/edit/structure/\" + structureId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('structure-item-move') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

            \$(document).on('click','.element-up',function(){

                let structureId = \$(this).attr('data-id');
                let url = \"/specification/\" + {{ specification.id }} + \"/edit/structure/\" + structureId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('structure-item-up') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    console.log(data);
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });

            \$(document).on('click','.element-adown',function(){

                let structureId = \$(this).attr('data-id');
                let url = \"/specification/\" + {{ specification.id }} + \"/edit/structure/\" + structureId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('structure-item-adown') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    console.log(data);
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });
            });

        });



        \$(document).ready(function () {

            let locSpecificationTab = localStorage.getItem('specification-tab');
            \$('#' + locSpecificationTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('specification-tab', selectedTabId);
            });

            \$(\"#specification_product\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"{{ path('select_product') }}\",
                    dataType: 'json',
                    delay: 350,
                    cache: true,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page || 1
                        };
                    }
                }
            });

        });

    </script>

{% endblock %}", "specification/specification_document/edit.html.twig", "/var/www/project/templates/specification/specification_document/edit.html.twig");
    }
}
