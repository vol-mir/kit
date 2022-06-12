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

/* norm/material_norm/new.html.twig */
class __TwigTemplate_d682e74e3a4bb604060457955c2dbecb225d2b72127fc24f8ce19ac4a984ea5b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "norm/material_norm/new.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.new.material_norm"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 3, $this->source); })()), "product", [], "any", false, false, false, 3), "designation", [], "any", false, false, false, 3), "html", null, true);
        
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
            <!-- jquery validation -->
            <div class=\"card card-default\">
                <!-- form start -->
                <form id=\"materialNormForm\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consumption_material_new", ["norm_document_id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"POST\">
                    ";
        // line 12
        $this->loadTemplate("norm/material_norm/_form.html.twig", "norm/material_norm/new.html.twig", 12)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "                    <div class=\"card-footer\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "save", [], "any", false, false, false, 14), 'widget');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "saveAndCreateNew", [], "any", false, false, false, 15), 'widget');
        echo "
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("norm_document_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["normDocument"]) || array_key_exists("normDocument", $context) ? $context["normDocument"] : (function () { throw new RuntimeError('Variable "normDocument" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\"
                           class=\"btn btn-default float-right\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.cancel"), "html", null, true);
        echo "</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$(\"#material_norm_material\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select_material");
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

            \$('#materialNormForm').validate({
                rules: {
                    'material_norm[material]': {
                        required: true,
                    },
                    'material_norm[amount]': {
                        required: true,
                        number: true
                    },
                },
                messages: {
                    'material_norm[material]': {
                        required: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                    },
                    'material_norm[amount]': {
                        required: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                        number: \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.number"), "html", null, true);
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "norm/material_norm/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  203 => 68,  197 => 65,  169 => 40,  158 => 32,  154 => 31,  151 => 30,  141 => 29,  121 => 17,  117 => 16,  113 => 15,  109 => 14,  106 => 13,  104 => 12,  100 => 11,  93 => 6,  83 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.new.material_norm'|trans }} - {{ normDocument.product.name }}  {{ normDocument.product.designation }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">
                <!-- form start -->
                <form id=\"materialNormForm\" action=\"{{ path('consumption_material_new', {'norm_document_id': normDocument.id}) }}\" method=\"POST\">
                    {% include 'norm/material_norm/_form.html.twig' with {'form': form} only %}
                    <div class=\"card-footer\">
                        {{ form_widget(form.save) }}
                        {{ form_widget(form.saveAndCreateNew) }}
                        <a href=\"{{ path('norm_document_edit', {'id': normDocument.id}) }}\"
                           class=\"btn btn-default float-right\">{{ 'title.cancel'|trans }}</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

{% endblock %}


{% block javascripts %}
    <!-- jquery-validation -->
    <script src=\"{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/jquery-validation/additional-methods.min.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$(\"#material_norm_material\").select2({
                ajax: {
                    type: \"POST\",
                    url: \"{{ path('select_material') }}\",
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

            \$('#materialNormForm').validate({
                rules: {
                    'material_norm[material]': {
                        required: true,
                    },
                    'material_norm[amount]': {
                        required: true,
                        number: true
                    },
                },
                messages: {
                    'material_norm[material]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                    },
                    'material_norm[amount]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                        number: \"{{ 'message.validation.number'|trans }}\"
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

{% endblock %}", "norm/material_norm/new.html.twig", "/var/www/project/templates/norm/material_norm/new.html.twig");
    }
}
