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

/* norm/norm_document/edit.html.twig */
class __TwigTemplate_a619ae573ea4504747dccd878bf7296ceb8c1daa7db089c070633df7d0fc06c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/norm_document/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/norm_document/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "norm/norm_document/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.edit.norm_document"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3)) {
            echo " - вес ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "weight", [], "any", false, false, false, 3), "html", null, true);
            echo " кг";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3)) {
            echo ", товарная категория - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "productCategory", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Материалы</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        ";
        // line 24
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 24, $this->source); })()), "close", [], "any", false, false, false, 24), 1))))) {
            // line 25
            echo "                        <!-- form start -->
                        <form id=\"normDocumentForm\" action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" method=\"POST\">
                            ";
            // line 27
            $this->loadTemplate("norm/norm_document/_form.html.twig", "norm/norm_document/edit.html.twig", 27)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })())]));
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_index");
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 40, $this->source); })()), "dateDocument", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.date_specification"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 42, $this->source); })()), "dateDocument", [], "any", false, false, false, 42), "d.m.Y"), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 44
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 44, $this->source); })()), "product", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 46, $this->source); })()), "product", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 48
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 48, $this->source); })()), "product", [], "any", false, false, false, 48), "designation", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.designation"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 50, $this->source); })()), "product", [], "any", false, false, false, 50), "designation", [], "any", false, false, false, 50), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 52
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 52, $this->source); })()), "rendition", [], "any", false, false, false, 52)) {
                // line 53
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.rendition"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 54, $this->source); })()), "rendition", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 56
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                    <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.status"), "html", null, true);
                echo "</dt>
                                    <dd>";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["normDocumentStatuses"]) || array_key_exists("normDocumentStatuses", $context) ? $context["normDocumentStatuses"] : (function () { throw new RuntimeError('Variable "normDocumentStatuses" does not exist.', 58, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), [], "array", false, false, false, 58)), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 60
            echo "                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_index");
            echo "\"
                                   class=\"btn btn-default float-right\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 67
        echo "                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">


                            ";
        // line 71
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 71, $this->source); })()), "close", [], "any", false, false, false, 71), 1)))) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 71, $this->source); })()), "product", [], "any", false, false, false, 71), "kdMaterials", [], "any", false, false, false, 71), "count", [], "method", false, false, false, 71), 0)))) {
            // line 72
            echo "
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        ";
            // line 76
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 76, $this->source); })()), "product", [], "any", false, false, false, 76), "kdMaterials", [], "any", false, false, false, 76), "count", [], "method", false, false, false, 76), 0))) {
                // line 77
                echo "
                                            <div class=\"alert alert-light\" role=\"alert\">
                                                ";
                // line 79
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 79, $this->source); })()), "product", [], "any", false, false, false, 79), "kdMaterials", [], "any", false, false, false, 79), "count", [], "method", false, false, false, 79), 0))) {
                    // line 80
                    echo "                                                <h4 class=\"alert-heading\">Материал по КД:</h4>
                                                <ul>
                                                    ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 82, $this->source); })()), "product", [], "any", false, false, false, 82), "kdMaterials", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["kdMaterial"]) {
                        // line 83
                        echo "                                                        <li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kdMaterial"], "fullName", [], "any", false, false, false, 83), "html", null, true);
                        echo "</li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kdMaterial'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                                </ul>
                                                ";
                }
                // line 87
                echo "                                            </div>
                                        ";
            }
            // line 89
            echo "                                    </div>
                                    ";
            // line 90
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 90, $this->source); })()), "close", [], "any", false, false, false, 90), 1))))) {
                // line 91
                echo "                                    <div class=\"col-md-12\">
                                        ";
                // line 92
                $this->loadTemplate("norm/material_norm/_controls.html.twig", "norm/norm_document/edit.html.twig", 92)->display($context);
                // line 93
                echo "                                    </div>
                                    ";
            }
            // line 95
            echo "                                </div>
                            </div>

                            ";
        }
        // line 99
        echo "
                            <div class=\"card-body\">
                                <table id=\"consumption\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Материал</th>
                                            <th>Ед.изм.</th>
                                            <th>Норма на деталь</th>
                                            <th>Основной</th>
                                            <th>Примечание</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Материал</th>
                                            <th>Ед.изм.</th>
                                            <th>Норма на деталь</th>
                                            <th>Основной</th>
                                            <th>Примечание</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                            </div>

                            ";
        // line 129
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT") && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 129, $this->source); })()), "close", [], "any", false, false, false, 129), 1))))) {
            // line 130
            echo "
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        ";
            // line 134
            $this->loadTemplate("norm/material_norm/_controls.html.twig", "norm/norm_document/edit.html.twig", 134)->display($context);
            // line 135
            echo "                                    </div>
                                </div>
                            </div>

                            ";
        }
        // line 140
        echo "

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->

    ";
        // line 151
        $this->loadTemplate("modals/delete.html.twig", "norm/norm_document/edit.html.twig", 151)->display($context);
        // line 152
        echo "    ";
        $this->loadTemplate("modals/move.html.twig", "norm/norm_document/edit.html.twig", 152)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$('#normDocumentForm').validate({
                rules: {
                    'normDocument[date_document]': {
                        maxlength: 190,
                        required: false,
                    },
                    'normDocument[product]': {
                        required: true,
                    },
                    'normDocument[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'normDocument[date_document]': {
                        maxlength: \"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'normDocument[product]': {
                        required: \"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\"
                    },
                    'normDocument[rendition]': {
                        required: \"";
        // line 185
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
            let table = \$(\"#consumption\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consumption_datatables", ["norm_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, false, 220)]), "html", null, true);
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
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/json/dataTables.ru.lang.json"), "html", null, true);
        echo "\"
                }
            });

            let locNormDocumentTab = localStorage.getItem('norm-document-tab');
            \$('#' + locNormDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('norm-document-tab', selectedTabId);
            });

            \$(\"#norm_document_product\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"";
        // line 250
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

            \$(\"#consumption\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#consumption\").on(\"click\", \".element-move\", function () {

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

                let materialNormId = \$(this).attr('data-confirm-delete-id');
                let url = \" /norm/document/\" + ";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 287, $this->source); })()), "id", [], "any", false, false, false, 287), "html", null, true);
        echo " + \"/edit/consumption/\" + materialNormId + \"/delete\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'delete', '_token': '";
        // line 292
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
                let url = \"/norm/document/\" + ";
        // line 306
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306), "html", null, true);
        echo " + \"/edit/consumption/\" + consumptionId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("material-norm-item-up"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });


            \$(document).on('click','.element-adown',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/norm/document/\" + ";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324), "html", null, true);
        echo " + \"/edit/consumption/\" + consumptionId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("material-norm-item-adown"), "html", null, true);
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

                let url = \"/norm/document/\" + ";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 343, $this->source); })()), "id", [], "any", false, false, false, 343), "html", null, true);
        echo " + \"/edit/consumption/\" + consumptionId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("material-norm-item-move"), "html", null, true);
        echo "'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "norm/norm_document/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 348,  624 => 343,  607 => 329,  599 => 324,  583 => 311,  575 => 306,  558 => 292,  550 => 287,  510 => 250,  492 => 235,  474 => 220,  436 => 185,  430 => 182,  424 => 179,  401 => 159,  397 => 158,  394 => 157,  384 => 156,  373 => 152,  371 => 151,  358 => 140,  351 => 135,  349 => 134,  343 => 130,  341 => 129,  309 => 99,  303 => 95,  299 => 93,  297 => 92,  294 => 91,  292 => 90,  289 => 89,  285 => 87,  281 => 85,  272 => 83,  268 => 82,  264 => 80,  262 => 79,  258 => 77,  256 => 76,  250 => 72,  248 => 71,  242 => 67,  236 => 64,  232 => 63,  227 => 60,  222 => 58,  217 => 57,  214 => 56,  209 => 54,  204 => 53,  201 => 52,  196 => 50,  191 => 49,  188 => 48,  183 => 46,  178 => 45,  175 => 44,  170 => 42,  165 => 41,  163 => 40,  159 => 38,  152 => 34,  148 => 33,  143 => 31,  139 => 30,  135 => 28,  133 => 27,  129 => 26,  126 => 25,  124 => 24,  105 => 7,  95 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.edit.norm_document'|trans }}: {{ normDocument.product.name }} {{ normDocument.product.designation }} {% if normDocument.product.weight %} - вес {{ normDocument.product.weight }} кг{% endif %} {% if normDocument.product.productCategory %}, товарная категория - {{ normDocument.product.productCategory.name }} {% endif %}
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
                            <a class=\"nav-link\" id=\"custom-tabs-four-tab2-tab\" data-toggle=\"pill\" href=\"#custom-tabs-four-tab2\" role=\"tab\" aria-controls=\"custom-tabs-four-tab2\" aria-selected=\"true\">Материалы</a>
                        </li>
                    </ul>
                </div>

                <div class=\"tab-content\" id=\"custom-tabs-four-tabContent\">
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab1\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab1-tab\">
                        {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1) %}
                        <!-- form start -->
                        <form id=\"normDocumentForm\" action=\"{{ path('norm_document_edit', {'id': normDocument.id}) }}\" method=\"POST\">
                            {% include 'norm/norm_document/_form.html.twig' with {'form': form} only %}
                            <div class=\"card-footer\">

                                {{ form_widget(form.save) }}
                                {{ form_widget(form.saveAndStay) }}

                                <a href=\"{{ path('norm_document_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        </form>
                        {% else %}
                            <div class=\"card-body\">
                            <dl>
                                {% if normDocument.dateDocument %}
                                    <dt>{{ 'label.date_specification'|trans }}</dt>
                                    <dd>{{ normDocument.dateDocument|date(\"d.m.Y\") }}</dd>
                                {% endif %}
                                {% if normDocument.product %}
                                    <dt>{{ 'label.name'|trans }}</dt>
                                    <dd>{{ normDocument.product.name }}</dd>
                                {% endif %}
                                {% if normDocument.product.designation %}
                                    <dt>{{ 'label.designation'|trans }}</dt>
                                    <dd>{{ normDocument.product.designation }}</dd>
                                {% endif %}
                                {% if normDocument.rendition %}
                                    <dt>{{ 'label.rendition'|trans }}</dt>
                                    <dd>{{ normDocument.rendition.name}}</dd>
                                {% endif %}
                                {% if normDocument.status %}
                                    <dt>{{ 'label.status'|trans }}</dt>
                                    <dd>{{ normDocumentStatuses[normDocument.status]|trans }}</dd>
                                {% endif %}
                            </dl>
                            </div>
                            <div class=\"card-footer\">
                                <a href=\"{{ path('norm_document_index') }}\"
                                   class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"tab-pane fade\" id=\"custom-tabs-four-tab2\" role=\"tabpanel\" aria-labelledby=\"custom-tabs-four-tab2-tab\">


                            {% if (is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1)) or (normDocument.product.kdMaterials.count() > 0) %}

                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        {% if normDocument.product.kdMaterials.count() > 0 %}

                                            <div class=\"alert alert-light\" role=\"alert\">
                                                {% if normDocument.product.kdMaterials.count() > 0 %}
                                                <h4 class=\"alert-heading\">Материал по КД:</h4>
                                                <ul>
                                                    {% for kdMaterial in normDocument.product.kdMaterials %}
                                                        <li>{{ kdMaterial.fullName }}</li>
                                                    {% endfor %}
                                                </ul>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    </div>
                                    {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1) %}
                                    <div class=\"col-md-12\">
                                        {% include 'norm/material_norm/_controls.html.twig' %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>

                            {% endif %}

                            <div class=\"card-body\">
                                <table id=\"consumption\" class=\"table table-bordered table-striped table-hover table-sm\">
                                        <thead>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Материал</th>
                                            <th>Ед.изм.</th>
                                            <th>Норма на деталь</th>
                                            <th>Основной</th>
                                            <th>Примечание</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№ п/п</th>
                                            <th>Материал</th>
                                            <th>Ед.изм.</th>
                                            <th>Норма на деталь</th>
                                            <th>Основной</th>
                                            <th>Примечание</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                            </div>

                            {% if is_granted(\"ROLE_ADMIN\") or (is_granted(\"ROLE_OGT\") and normDocument.close != 1)%}

                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        {% include 'norm/material_norm/_controls.html.twig' %}
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

            \$('#normDocumentForm').validate({
                rules: {
                    'normDocument[date_document]': {
                        maxlength: 190,
                        required: false,
                    },
                    'normDocument[product]': {
                        required: true,
                    },
                    'normDocument[rendition]': {
                        required: true,
                    },
                },
                messages: {
                    'normDocument[date_document]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'normDocument[product]': {
                        required: \"{{ 'message.validation.required'|trans }}\"
                    },
                    'normDocument[rendition]': {
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
            let table = \$(\"#consumption\").DataTable({
                \"columnDefs\": [
                    // These are the column name variables that will be sent to the server
                    {\"name\": \"indexNumber\", \"targets\": 0},
                    {\"name\": \"name\", \"targets\": 1},
                    {\"name\": \"unit\", \"targets\": 2},
                    {\"name\": \"amount\", \"targets\": 3},
                    {\"name\": \"mainReplacement\", \"targets\": 4, \"orderable\": false, \"searchable\": false},
                    {\"name\": \"note\", \"targets\": 5},
                    {\"name\": \"control\", \"targets\": 6, \"orderable\": false, \"searchable\": false},
                ],
                \"ajax\": {
                    \"url\": \"{{ path('consumption_datatables', {'norm_document_id': normDocument.id}) }}\",
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

            let locNormDocumentTab = localStorage.getItem('norm-document-tab');
            \$('#' + locNormDocumentTab).tab('show');

            \$('a[data-toggle=\"pill\"]').on('click', function (e) {
                let selectedTabId = e.target.id;
                localStorage.setItem('norm-document-tab', selectedTabId);
            });

            \$(\"#norm_document_product\").select2({
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

            \$(\"#consumption\").on(\"click\", \".modal-delete-dialog\", function () {
                \$('#btn-modal-delete').attr(\"data-confirm-delete-id\", \$(this).attr('data-id'));
                \$('#modal-delete').modal('show');
            });

            \$(\"#consumption\").on(\"click\", \".element-move\", function () {

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

                let materialNormId = \$(this).attr('data-confirm-delete-id');
                let url = \" /norm/document/\" + {{ normDocument.id }} + \"/edit/consumption/\" + materialNormId + \"/delete\";

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
                let url = \"/norm/document/\" + {{ normDocument.id }} + \"/edit/consumption/\" + consumptionId + \"/up\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('material-norm-item-up') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });


            \$(document).on('click','.element-adown',function(){

                let consumptionId = \$(this).attr('data-id');
                let url = \"/norm/document/\" + {{ normDocument.id }} + \"/edit/consumption/\" + consumptionId + \"/adown\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('material-norm-item-adown') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

            });

            \$(\"#modal-move\").on(\"click\", \"#btn-modal-move\", function () {

                let consumptionId = \$(this).attr('data-move-id');
                let newIndexNumber = \$(\"#option-index-numbers\").val();

                let url = \"/norm/document/\" + {{ normDocument.id }} + \"/edit/consumption/\" + consumptionId + \"/move/\" + newIndexNumber + \"/new-index\";

                \$.ajax({
                    type: 'post',
                    url: url,
                    data: {'_method': 'post', '_token': '{{ csrf_token('material-norm-item-move') }}'},
                    dataType: 'json'
                }).done(function (data) {
                    table.ajax.reload(null, false);
                    toastr.success(data.message);
                });

                \$('#btn-modal-move').attr(\"data-move-id\", null);
                \$('#modal-move').modal('hide');
            });

        });

    </script>

{% endblock %}", "norm/norm_document/edit.html.twig", "/var/www/project/templates/norm/norm_document/edit.html.twig");
    }
}
