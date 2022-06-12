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

/* default/table_group_btn_consumption.html.twig */
class __TwigTemplate_b8b08ef9605cecab20a1783417024acdd87f4ae681d7f8a7446b622c678306be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_consumption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_consumption.html.twig"));

        // line 1
        echo "<div class='btn-group btn-group-sm'>
    ";
        // line 2
        if ((isset($context["idUp"]) || array_key_exists("idUp", $context) ? $context["idUp"] : (function () { throw new RuntimeError('Variable "idUp" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <button type='button' class='btn btn-sm btn-default consumption-up'
            data-id='";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["idUp"]) || array_key_exists("idUp", $context) ? $context["idUp"] : (function () { throw new RuntimeError('Variable "idUp" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "' title=\"Вверх\"><i class='fas fa-arrow-up'></i></button>
    ";
        }
        // line 6
        echo "    ";
        if ((isset($context["idDown"]) || array_key_exists("idDown", $context) ? $context["idDown"] : (function () { throw new RuntimeError('Variable "idDown" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <button type='button' class='btn btn-sm btn-default consumption-adown'
            data-id='";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["idDown"]) || array_key_exists("idDown", $context) ? $context["idDown"] : (function () { throw new RuntimeError('Variable "idDown" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "' title=\"Вниз\"><i class='fas fa-arrow-down'></i></button>
    ";
        }
        // line 10
        echo "    ";
        if ((isset($context["idMove"]) || array_key_exists("idMove", $context) ? $context["idMove"] : (function () { throw new RuntimeError('Variable "idMove" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <button type='button' class='btn btn-sm btn-default consumption-move'
            data-id='";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["idMove"]) || array_key_exists("idMove", $context) ? $context["idMove"] : (function () { throw new RuntimeError('Variable "idMove" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "'  title=\"Переместить\"><i class='fas fa-share'></i></button>
    ";
        }
        // line 14
        echo "\t";
        if ((isset($context["urlReplacement"]) || array_key_exists("urlReplacement", $context) ? $context["urlReplacement"] : (function () { throw new RuntimeError('Variable "urlReplacement" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "    \t<a href='";
            echo twig_escape_filter($this->env, (isset($context["urlReplacement"]) || array_key_exists("urlReplacement", $context) ? $context["urlReplacement"] : (function () { throw new RuntimeError('Variable "urlReplacement" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "' class='btn btn-warning' title=\"Замена\"><i class='fas fa-reply-all '></i></a>
\t";
        }
        // line 17
        echo "\t";
        if ((isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "    <a href='";
            echo twig_escape_filter($this->env, (isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "' class='btn btn-info' title=\"Изменить\"><i class='fas fa-edit'></i></a>
    ";
        }
        // line 20
        echo "    ";
        if ((isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "    <button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "' title=\"Удалить\"><i class='fas fa-trash'></i></button>
    ";
        }
        // line 24
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/table_group_btn_consumption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 22,  99 => 21,  96 => 20,  90 => 18,  87 => 17,  81 => 15,  78 => 14,  73 => 12,  70 => 11,  67 => 10,  62 => 8,  59 => 7,  56 => 6,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='btn-group btn-group-sm'>
    {% if idUp %}
    <button type='button' class='btn btn-sm btn-default consumption-up'
            data-id='{{ idUp }}' title=\"Вверх\"><i class='fas fa-arrow-up'></i></button>
    {% endif %}
    {% if idDown %}
    <button type='button' class='btn btn-sm btn-default consumption-adown'
            data-id='{{ idDown }}' title=\"Вниз\"><i class='fas fa-arrow-down'></i></button>
    {% endif %}
    {% if idMove %}
    <button type='button' class='btn btn-sm btn-default consumption-move'
            data-id='{{ idMove }}'  title=\"Переместить\"><i class='fas fa-share'></i></button>
    {% endif %}
\t{% if urlReplacement %}
    \t<a href='{{ urlReplacement }}' class='btn btn-warning' title=\"Замена\"><i class='fas fa-reply-all '></i></a>
\t{% endif %}
\t{% if urlEdit %}
    <a href='{{ urlEdit }}' class='btn btn-info' title=\"Изменить\"><i class='fas fa-edit'></i></a>
    {% endif %}
    {% if idDelete %}
    <button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='{{ idDelete }}' title=\"Удалить\"><i class='fas fa-trash'></i></button>
    {% endif %}

</div>", "default/table_group_btn_consumption.html.twig", "/var/www/project/templates/default/table_group_btn_consumption.html.twig");
    }
}
