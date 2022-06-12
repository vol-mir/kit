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

/* material/edit.html.twig */
class __TwigTemplate_9082ff882c6bb0b789b52a446cf1ac27bccc7d28c6153fcfdac5ae3401458b38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "material/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.edit.material"), "html", null, true);
        
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
                <form id=\"materialForm\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"POST\">
                    <div class=\"card-body\">
                        ";
        // line 13
        $this->loadTemplate("material/_form.html.twig", "material/edit.html.twig", 13)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })())]));
        // line 14
        echo "                        ";
        $this->loadTemplate("material/_show_form.html.twig", "material/edit.html.twig", 14)->display(twig_to_array(["material" => (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 14, $this->source); })())]));
        // line 15
        echo "                    </div>
                    <div class=\"card-footer\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "save", [], "any", false, false, false, 17), 'widget');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "saveAndStay", [], "any", false, false, false, 18), 'widget');
        echo "
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
        echo "\"
                           class=\"btn btn-default float-right\">";
        // line 20
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

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    <!-- jquery-validation -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-validation/additional-methods.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#formed').click(function() {

                let valMaterialName = \$('#material_name').val().trim();

                let valProfileName = \$('#material_profile_name').val().trim();
                let valProfile = \$('#material_profile').val().trim();
                let valProfileStandard = \$('#material_profile_standard').val().trim();
                let valMark = \$('#material_mark').val().trim();
                let valMarkStandard = \$('#material_mark_standard').val().trim();

                if (valMaterialName.length === 0) {
                    temp = valProfileName + ' ' + valProfile;
                    temp = temp.trim();

                    temp += ' ' + valProfileStandard;
                    temp = temp.trim();

                    temp += ' ' + valMark;
                    temp = temp.trim();

                    temp += ' ' + valMarkStandard;
                    temp = temp.trim();

                    if (temp.length > 0) {
                        \$('#material_name').val(temp);
                    }
                }

            });
            \$('#materialForm').validate({
                rules: {
                    'material[name]': {
                        required: true,
                        maxlength: 190
                    },
                    'material[profile_name]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[profile]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[profile_standard]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[mark]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[mark_standard]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[material_kind]': {
                        required: false,
                        maxlength: 190,
                    },

                    'material[unit]': {
                        required: true,
                    },
                    'material[product_group]': {
                        required: true,
                    },
                    'material[product_type]': {
                        required: true,
                    },
                    'material[product_kind]': {
                        required: true,
                    },
                    'material[product_category]': {
                        required: true,
                    },
                },
                messages: {
                    'material[name]': {
                        required: \"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                        maxlength: \"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[profile_name]': {
                        maxlength: \"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[profile]': {
                        maxlength: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                     'material[profile_standard]': {
                        maxlength: \"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[mark]': {
                        maxlength: \"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[mark_standard]': {
                        maxlength: \"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[material_kind]': {
                        maxlength: \"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.too_long_content", ["%limit%" => 190]), "html", null, true);
        echo "\"
                    },
                    'material[unit]': {
                        required: \"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                    },
                    'material[product_group]': {
                        required: \"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                    },
                    'material[product_type]': {
                        required: \"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                    },
                    'material[product_kind]': {
                        required: \"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
                    },
                    'material[product_category]': {
                        required: \"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.validation.required"), "html", null, true);
        echo "\",
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
        return "material/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 151,  308 => 148,  302 => 145,  296 => 142,  290 => 139,  284 => 136,  278 => 133,  272 => 130,  266 => 127,  260 => 124,  254 => 121,  248 => 118,  244 => 117,  159 => 35,  155 => 34,  152 => 33,  142 => 32,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 15,  103 => 14,  101 => 13,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.edit.material'|trans }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- jquery validation -->
            <div class=\"card card-default\">
                <!-- form start -->
                <form id=\"materialForm\" action=\"{{ path('material_edit', {'id': material.id}) }}\" method=\"POST\">
                    <div class=\"card-body\">
                        {% include 'material/_form.html.twig' with {'form': form} only %}
                        {% include 'material/_show_form.html.twig' with {'material': material} only %}
                    </div>
                    <div class=\"card-footer\">
                        {{ form_widget(form.save) }}
                        {{ form_widget(form.saveAndStay) }}
                        <a href=\"{{ path('material_index') }}\"
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
            \$('#formed').click(function() {

                let valMaterialName = \$('#material_name').val().trim();

                let valProfileName = \$('#material_profile_name').val().trim();
                let valProfile = \$('#material_profile').val().trim();
                let valProfileStandard = \$('#material_profile_standard').val().trim();
                let valMark = \$('#material_mark').val().trim();
                let valMarkStandard = \$('#material_mark_standard').val().trim();

                if (valMaterialName.length === 0) {
                    temp = valProfileName + ' ' + valProfile;
                    temp = temp.trim();

                    temp += ' ' + valProfileStandard;
                    temp = temp.trim();

                    temp += ' ' + valMark;
                    temp = temp.trim();

                    temp += ' ' + valMarkStandard;
                    temp = temp.trim();

                    if (temp.length > 0) {
                        \$('#material_name').val(temp);
                    }
                }

            });
            \$('#materialForm').validate({
                rules: {
                    'material[name]': {
                        required: true,
                        maxlength: 190
                    },
                    'material[profile_name]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[profile]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[profile_standard]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[mark]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[mark_standard]': {
                        required: false,
                        maxlength: 190,
                    },
                    'material[material_kind]': {
                        required: false,
                        maxlength: 190,
                    },

                    'material[unit]': {
                        required: true,
                    },
                    'material[product_group]': {
                        required: true,
                    },
                    'material[product_type]': {
                        required: true,
                    },
                    'material[product_kind]': {
                        required: true,
                    },
                    'material[product_category]': {
                        required: true,
                    },
                },
                messages: {
                    'material[name]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[profile_name]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[profile]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                     'material[profile_standard]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[mark]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[mark_standard]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[material_kind]': {
                        maxlength: \"{{ 'message.validation.too_long_content'|trans({ '%limit%': 190 }) }}\"
                    },
                    'material[unit]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                    },
                    'material[product_group]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                    },
                    'material[product_type]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                    },
                    'material[product_kind]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
                    },
                    'material[product_category]': {
                        required: \"{{ 'message.validation.required'|trans }}\",
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

{% endblock %}", "material/edit.html.twig", "/var/www/project/templates/material/edit.html.twig");
    }
}
