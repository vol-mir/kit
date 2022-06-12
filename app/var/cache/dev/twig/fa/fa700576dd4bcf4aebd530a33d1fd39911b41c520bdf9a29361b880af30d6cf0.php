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

/* track/track_document/edit.html.twig */
class __TwigTemplate_382d1d156efd7c03856d6f652e6c6c6ce6c67dee567bc346dac4bd7563922517 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "track/track_document/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "track/track_document/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.edit.track_document"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3)) {
            echo " - вес ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3), "html", null, true);
            echo " кг";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3)) {
            echo ", товарная категория - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
            echo " ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-header p-0 border-bottom-0\">
                    <ul class=\"nav nav-tabs\" id=\"custom-tabs-four-tab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab1-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab1\" role=\"tab\" aria-controls=\"custom-tabs-four-tab1\" aria-selected=\"false\">Документ</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Маршрут</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        ";
        // line 24
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 24, $this->source); })()), "close", [], "any", false, false, false, 24), 1))))) {
            // line 25
            echo "                        <!-- form start -->
                        <form id=\"trackDocumentForm\" action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" method=\"POST\">
                            ";
            // line 27
            $this->loadTemplate("track/track_document/_form.html.twig", "track/track_document/edit.html.twig", 27)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })())]));
            // line 28
            echo "                            <div class=\"card-footer\">

                                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "save", [], "any", false, false, false, 30), 'widget');
            echo "
                                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "saveAndStay", [], "any", false, false, false, 31), 'widget');
            echo "

                                <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_index");
            echo "\"
                                   class=\"btn btn-default float-right\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
            echo "</a>
                            </div>
                        </form>
                        ";
        } else {
            // line 38
            echo "                            <div class=\"card-body\">
                            <dl>
                                ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 40, $this->source); })()), "dateStart", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_start"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 42, $this->source); })()), "dateStart", [], "any", false, false, false, 42), "d.m.Y"), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 44
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 44, $this->source); })()), "dateEnd", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_end"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 46, $this->source); })()), "dateEnd", [], "any", false, false, false, 46), "d.m.Y"), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 48
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 48, $this->source); })()), "product", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 50, $this->source); })()), "product", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 52
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 52, $this->source); })()), "product", [], "any", false, false, false, 52), "designation", [], "any", false, false, false, 52)) {
                // line 53
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 54, $this->source); })()), "product", [], "any", false, false, false, 54), "designation", [], "any", false, false, false, 54), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 56
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 56, $this->source); })()), "rendition", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 58, $this->source); })()), "rendition", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 60
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60)) {
                // line 61
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["trackDocumentStatuses"]) || array_key_exists("trackDocumentStatuses", $context) ? $context["trackDocumentStatuses"] : (function () { throw new RuntimeError('Variable "trackDocumentStatuses" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62), [], "array", false, false, false, 62)), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 64
            echo "                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_document_index");
            echo "\"
                                   class=\"btn btn-default float-right\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 71
        echo "                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                            ";
        // line 74
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 74, $this->source); })()), "close", [], "any", false, false, false, 74), 1))))) {
            // line 75
            echo "
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    ";
            // line 78
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 78, $this->source); })()), "close", [], "any", false, false, false, 78), 1))))) {
                // line 79
                echo "                                    <div class=\"col-md-12\">
                                        ";
                // line 80
                $this->loadTemplate("track/track/_controls.html.twig", "track/track_document/edit.html.twig", 80)->display($context);
                // line 81
                echo "                                    </div>
                                    ";
            }
            // line 83
            echo "                                </div>
                            </div>

                            ";
        }
        // line 87
        echo "
                            <div class=\"card-body\">
                                <table id=\"track\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                            </div>

                            ";
        // line 119
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 119, $this->source); })()), "close", [], "any", false, false, false, 119), 1))))) {
            // line 120
            echo "
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        ";
            // line 124
            $this->loadTemplate("track/track/_controls.html.twig", "track/track_document/edit.html.twig", 124)->display($context);
            // line 125
            echo "                                    </div>
                                </div>
                            </div>

                            ";
        }
        // line 130
        echo "
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

    ";
        // line 140
        $this->loadTemplate("modals/delete.html.twig", "track/track_document/edit.html.twig", 140)->display($context);
        // line 141
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "track/track_document/edit.html.twig", 141)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('#trackDocumentForm').validate({
                rules: {
                    'track_document[date_start]': {
                        maxlength: 190,
                        required: false,
                    },
                    'track_document[date_end]': {
                        maxlength: 190,
                        required: false,
                    },
                    'track_document[product]': {
                        required: true,
                    },
                    'track_document[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'track_document[date_start]': {
                        maxlength: \"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'track_document[date_end]': {
                        maxlength: \"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'track_document[product]': {
                        required: \"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\"
                    },
                    'track_document[rendition]': {
                        required: \"";
        // line 181
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


        });
    </script>

    <script>

        \$(document).ready(function () {
            let table = \$(\"#track\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name_department\", \"targets\": 1},
                    {\"name\": \"number_department\", \"targets\": 2},
                    {\"name\": \"number_operation\", \"targets\": 3},
                    {\"name\": \"technological_operation\", \"targets\": 4},
                    {\"name\": \"time_processing\", \"targets\": 5},
                    {\"name\": \"time_piece\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("track_datatables", ["track_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)]), "html", null, true);
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
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            let locTrackDocumentTab = localStorage.getItem('track-document-tab');
            \$('#' + locTrackDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('track-document-tab', selectedTabId);
            });

            \$(\"#track\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#track\").on(\"click\", \".element-move\", function () {

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

                let trackId = \$(this).attr('data-confirm-delete-id');
                let url = \"/track/document/\" + ";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268), "html", null, true);
        echo " + \"/edit/track/\" + trackId + \"/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 273
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

            \$(document).on('click','.element-up',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/track/document/\" + ";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 287, $this->source); })()), "id", [], "any", false, false, false, 287), "html", null, true);
        echo " + \"/edit/track/\" + consumptionId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("track-item-up"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });


            \$(document).on('click','.element-adown',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/track/document/\" + ";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 305, $this->source); })()), "id", [], "any", false, false, false, 305), "html", null, true);
        echo " + \"/edit/track/\" + consumptionId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("track-item-adown"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });

            \$(\"#modal-move\").on(\"click\", \"#btn-modal-move\", function () {

                let consumptionId = \$(this).attr('data-move-id');
                let newIndexNumber = \$(\"#option-index-numbers\").val();

                let url = \"/track/document/\" + ";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trackDocument"]) || array_key_exists("trackDocument", $context) ? $context["trackDocument"] : (function () { throw new RuntimeError('Variable "trackDocument" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324), "html", null, true);
        echo " + \"/edit/track/\" + consumptionId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("track-item-move"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

            \$(\"#track_document_product\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"";
        // line 343
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
        return "track/track_document/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 343,  600 => 329,  592 => 324,  575 => 310,  567 => 305,  551 => 292,  543 => 287,  526 => 273,  518 => 268,  479 => 232,  461 => 217,  422 => 181,  416 => 178,  410 => 175,  404 => 172,  377 => 148,  373 => 147,  370 => 146,  360 => 145,  349 => 141,  347 => 140,  335 => 130,  328 => 125,  326 => 124,  320 => 120,  318 => 119,  284 => 87,  278 => 83,  274 => 81,  272 => 80,  269 => 79,  267 => 78,  262 => 75,  260 => 74,  255 => 71,  249 => 68,  245 => 67,  240 => 64,  235 => 62,  230 => 61,  227 => 60,  222 => 58,  217 => 57,  214 => 56,  209 => 54,  204 => 53,  201 => 52,  196 => 50,  191 => 49,  188 => 48,  183 => 46,  178 => 45,  175 => 44,  170 => 42,  165 => 41,  163 => 40,  159 => 38,  152 => 34,  148 => 33,  143 => 31,  139 => 30,  135 => 28,  133 => 27,  129 => 26,  126 => 25,  124 => 24,  105 => 7,  95 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.edit.track_document'|trans }}: {{ trackDocument.product.name }} {{ trackDocument.product.designation }} {% if trackDocument.product.weight %} - вес {{ trackDocument.product.weight }} кг{% endif %} {% if trackDocument.product.productCategory %}, товарная категория - {{ trackDocument.product.productCategory.name }} {% endif %}
{% endblock %}

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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Маршрут</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and trackDocument.close != 1) %}
                        <!-- form start -->
                        <form id=\"trackDocumentForm\" action=\"{{ path('track_document_edit', {'id': trackDocument.id}) }}\" method=\"POST\">
                            {% include 'track/track_document/_form.html.twig' with {'form': form} only %}
                            <div class=\"card-footer\">

                                {{ form_widget(form.save) }}
                                {{ form_widget(form.saveAndStay) }}

                                <a href=\"{{ path('track_document_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        </form>
                        {% else %}
                            <div class=\"card-body\">
                            <dl>
                                {% if trackDocument.dateStart %}
                                    <dt>{{ 'label.date_start'|trans }}</dt>
                                    <dd>{{ trackDocument.dateStart|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if trackDocument.dateEnd %}
                                    <dt>{{ 'label.date_end'|trans }}</dt>
                                    <dd>{{ trackDocument.dateEnd|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if trackDocument.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ trackDocument.product.name }}</dd>
                                {% endif %}
                                {% if trackDocument.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ trackDocument.product.designation }}</dd>
                                {% endif %}
                                {% if trackDocument.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ trackDocument.rendition.name}}</dd>
                                {% endif %}
                                {% if trackDocument.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ trackDocumentStatuses[trackDocument.status]|trans }}</dd>
                                {% endif %}
                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"{{ path('track_document_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">

                            {% if (is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and trackDocument.close != 1)) %}

                            <div class=\"card-header\">
                                <div class=\"row\">
                                    {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and trackDocument.close != 1) %}
                                    <div class=\"col-md-12\">
                                        {% include 'track/track/_controls.html.twig' %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>

                            {% endif %}

                            <div class=\"card-body\">
                                <table id=\"track\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Цех</th>
                                            <th>Номер цеха</th>
                                            <th>Номер операции</th>
                                            <th>Операция</th>
                                            <th>tц, tо, tоп</th>
                                            <th>tшт</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                            </div>

                            {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and trackDocument.close != 1)%}

                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        {% include 'track/track/_controls.html.twig' %}
                                    </div>
                                </div>
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

            \$('#trackDocumentForm').validate({
                rules: {
                    'track_document[date_start]': {
                        maxlength: 190,
                        required: false,
                    },
                    'track_document[date_end]': {
                        maxlength: 190,
                        required: false,
                    },
                    'track_document[product]': {
                        required: true,
                    },
                    'track_document[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'track_document[date_start]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'track_document[date_end]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'track_document[product]': {
                        required: \"{{ 'message.validation.required'|trans }}\"
                    },
                    'track_document[rendition]': {
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


        });
    </script>

    <script>

        \$(document).ready(function () {
            let table = \$(\"#track\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name_department\", \"targets\": 1},
                    {\"name\": \"number_department\", \"targets\": 2},
                    {\"name\": \"number_operation\", \"targets\": 3},
                    {\"name\": \"technological_operation\", \"targets\": 4},
                    {\"name\": \"time_processing\", \"targets\": 5},
                    {\"name\": \"time_piece\", \"targets\": 6},
                    {\"name\": \"control\", \"targets\": 7, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('track_datatables', {'track_document_id': trackDocument.id}) }}\",
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

            let locTrackDocumentTab = localStorage.getItem('track-document-tab');
            \$('#' + locTrackDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('track-document-tab', selectedTabId);
            });

            \$(\"#track\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#track\").on(\"click\", \".element-move\", function () {

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

                let trackId = \$(this).attr('data-confirm-delete-id');
                let url = \"/track/document/\" + {{ trackDocument.id }} + \"/edit/track/\" + trackId + \"/delete\";

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

            \$(document).on('click','.element-up',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/track/document/\" + {{ trackDocument.id }} + \"/edit/track/\" + consumptionId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('track-item-up') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });


            \$(document).on('click','.element-adown',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/track/document/\" + {{ trackDocument.id }} + \"/edit/track/\" + consumptionId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('track-item-adown') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });

            \$(\"#modal-move\").on(\"click\", \"#btn-modal-move\", function () {

                let consumptionId = \$(this).attr('data-move-id');
                let newIndexNumber = \$(\"#option-index-numbers\").val();

                let url = \"/track/document/\" + {{ trackDocument.id }} + \"/edit/track/\" + consumptionId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('track-item-move') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

            \$(\"#track_document_product\").select2({
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

{% endblock %}", "track/track_document/edit.html.twig", "/var/www/project/templates/track/track_document/edit.html.twig");
    }
}
