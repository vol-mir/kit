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

/* technological_operation/show.html.twig */
class __TwigTemplate_948295b37ddc5870113e4b00d5af9dbc64b3fb313697ddce484ccecd50fc3a67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technological_operation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technological_operation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "technological_operation/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.show.technological_operation"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
                <div class=\"card-body\">
                    <dl>
                        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11)) {
            // line 12
            echo "                            <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.name"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</dd>
                        ";
        }
        // line 15
        echo "
                        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 16, $this->source); })()), "codeOperation", [], "any", false, false, false, 16)) {
            // line 17
            echo "                            <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code_operation"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 18, $this->source); })()), "codeOperation", [], "any", false, false, false, 18), "html", null, true);
            echo "</dd>
                        ";
        }
        // line 20
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 20, $this->source); })()), "typeOperation", [], "any", false, false, false, 20)) {
            // line 21
            echo "                            <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.type_operation"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 22, $this->source); })()), "typeOperation", [], "any", false, false, false, 22), "html", null, true);
            echo "</dd>
                        ";
        }
        // line 24
        echo "
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 25, $this->source); })()), "codeTypeOperation", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.code_type_operation"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 27, $this->source); })()), "codeTypeOperation", [], "any", false, false, false, 27), "html", null, true);
            echo "</dd>
                        ";
        }
        // line 29
        echo "
                        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 30, $this->source); })()), "note", [], "any", false, false, false, 30)) {
            // line 31
            echo "                            <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.note"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technologicalOperation"]) || array_key_exists("technologicalOperation", $context) ? $context["technologicalOperation"] : (function () { throw new RuntimeError('Variable "technologicalOperation" does not exist.', 32, $this->source); })()), "note", [], "any", false, false, false, 32), "html", null, true);
            echo "</dd>
                        ";
        }
        // line 34
        echo "                    </dl>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
    <!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "technological_operation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 34,  162 => 32,  157 => 31,  155 => 30,  152 => 29,  147 => 27,  142 => 26,  140 => 25,  137 => 24,  132 => 22,  127 => 21,  124 => 20,  119 => 18,  114 => 17,  112 => 16,  109 => 15,  104 => 13,  99 => 12,  97 => 11,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.show.technological_operation'|trans }}: {{ technologicalOperation.name }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card card-primary card-outline card-outline-tabs\">
                <div class=\"card-body\">
                    <dl>
                        {% if technologicalOperation.name %}
                            <dt>{{ 'label.name'|trans }}</dt>
                            <dd>{{ technologicalOperation.name }}</dd>
                        {% endif %}

                        {% if technologicalOperation.codeOperation %}
                            <dt>{{ 'label.code_operation'|trans }}</dt>
                            <dd>{{ technologicalOperation.codeOperation }}</dd>
                        {% endif %}
                        {% if technologicalOperation.typeOperation %}
                            <dt>{{ 'label.type_operation'|trans }}</dt>
                            <dd>{{ technologicalOperation.typeOperation }}</dd>
                        {% endif %}

                        {% if technologicalOperation.codeTypeOperation %}
                            <dt>{{ 'label.code_type_operation'|trans }}</dt>
                            <dd>{{ technologicalOperation.codeTypeOperation }}</dd>
                        {% endif %}

                        {% if technologicalOperation.note %}
                            <dt>{{ 'label.note'|trans }}</dt>
                            <dd>{{ technologicalOperation.note }}</dd>
                        {% endif %}
                    </dl>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
    <!-- /.row -->

{% endblock %}
", "technological_operation/show.html.twig", "/var/www/project/templates/technological_operation/show.html.twig");
    }
}
