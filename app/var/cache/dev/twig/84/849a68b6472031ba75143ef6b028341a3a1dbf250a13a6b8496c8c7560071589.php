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

/* default/table_group_btn_esd.html.twig */
class __TwigTemplate_e4ec0c6edfd2719ef60ee2653d4e0469c5587322a895610b753f0b84844bc132 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_esd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_esd.html.twig"));

        // line 1
        echo "<div class='btn-group btn-group-sm dropleft'>
";
        // line 12
        echo "
\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></button>
    <ul class=\"dropdown-menu\">
    \t";
        // line 15
        if ((isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <li>
        \t<a href='";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "' class='dropdown-item' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 20
        echo "    \t";
        if ((isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <li>
        \t<a href='";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "' class='dropdown-item' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.edit"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.edit"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 25
        echo "    \t";
        if ((isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "        <li>
        \t<a href='";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "' class='dropdown-item modal-delete-dialog' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
            echo "\" data-toggle='modal'
            data-id='";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 31
        echo "    </ul>

</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/table_group_btn_esd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  94 => 28,  88 => 27,  85 => 26,  82 => 25,  72 => 22,  69 => 21,  66 => 20,  56 => 17,  53 => 16,  51 => 15,  46 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='btn-group btn-group-sm dropleft'>
{# \t{% if urlShow %}
    \t<a href='{{ urlShow }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a'></i></a>
\t{% endif %}
\t{% if urlEdit %}
    \t<a href='{{ urlEdit }}' class='btn btn-info' title=\"{{ 'title.edit'|trans }}\"><i class='fas fa-edit'></i></a>
\t{% endif %}
\t{% if idDelete %}
    \t<button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='{{ idDelete }}' title=\"{{ 'title.delete'|trans }}\"><i class='fas fa-trash'></i></button>
\t{% endif %} #}

\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-ellipsis-h\" aria-hidden=\"true\"></i></button>
    <ul class=\"dropdown-menu\">
    \t{% if urlShow %}
        <li>
        \t<a href='{{ urlShow }}' class='dropdown-item' title=\"{{ 'title.show'|trans }}\">{{ 'title.show'|trans }}</a>
        </li>
        {% endif %}
    \t{% if urlEdit %}
        <li>
        \t<a href='{{ urlEdit }}' class='dropdown-item' title=\"{{ 'title.edit'|trans }}\">{{ 'title.edit'|trans }}</a>
        </li>
        {% endif %}
    \t{% if idDelete %}
        <li>
        \t<a href='{{ urlEdit }}' class='dropdown-item modal-delete-dialog' title=\"{{ 'title.delete'|trans }}\" data-toggle='modal'
            data-id='{{ idDelete }}'>{{ 'title.delete'|trans }}</a>
        </li>
        {% endif %}
    </ul>

</div>

", "default/table_group_btn_esd.html.twig", "/var/www/project/templates/default/table_group_btn_esd.html.twig");
    }
}
