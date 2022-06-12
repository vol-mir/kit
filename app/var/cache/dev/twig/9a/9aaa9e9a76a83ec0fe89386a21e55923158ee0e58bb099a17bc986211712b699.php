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

/* default/table_group_btn_esdc.html.twig */
class __TwigTemplate_1df1583f169109a53c0985384ecac0c745e5a3aefb9a3a81cef19d6075dfb940 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_esdc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_btn_esdc.html.twig"));

        // line 1
        echo "<div class='btn-group btn-group-sm'>
\t";
        // line 2
        if ((isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    \t<a href='";
            echo twig_escape_filter($this->env, (isset($context["urlShow"]) || array_key_exists("urlShow", $context) ? $context["urlShow"] : (function () { throw new RuntimeError('Variable "urlShow" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "' class='btn btn-secondary' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.show"), "html", null, true);
            echo "\"><i class='fas fa-eye'></i></a'></i></a>
\t";
        }
        // line 5
        echo "\t";
        if ((isset($context["idCopy"]) || array_key_exists("idCopy", $context) ? $context["idCopy"] : (function () { throw new RuntimeError('Variable "idCopy" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    \t<button type='button' class='btn btn-sm btn-dark float-left modal-copy-dialog' data-toggle='modal'
            data-id='";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["idCopy"]) || array_key_exists("idCopy", $context) ? $context["idCopy"] : (function () { throw new RuntimeError('Variable "idCopy" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "' style=\"color:white\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.copy"), "html", null, true);
            echo "\"><i class='fas fa-copy'></i></button>
\t";
        }
        // line 9
        echo "\t";
        if ((isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    \t<a href='";
            echo twig_escape_filter($this->env, (isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "' class='btn btn-info' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.edit"), "html", null, true);
            echo "\"><i class='fas fa-edit'></i></a>
\t";
        }
        // line 12
        echo "\t";
        if ((isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "    \t<button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
            echo "\"><i class='fas fa-trash'></i></button>
\t";
        }
        // line 16
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/table_group_btn_esdc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 16,  86 => 14,  83 => 13,  80 => 12,  72 => 10,  69 => 9,  62 => 7,  59 => 6,  56 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='btn-group btn-group-sm'>
\t{% if urlShow %}
    \t<a href='{{ urlShow }}' class='btn btn-secondary' title=\"{{ 'title.show'|trans }}\"><i class='fas fa-eye'></i></a'></i></a>
\t{% endif %}
\t{% if idCopy %}
    \t<button type='button' class='btn btn-sm btn-dark float-left modal-copy-dialog' data-toggle='modal'
            data-id='{{ idCopy }}' style=\"color:white\" title=\"{{ 'title.copy'|trans }}\"><i class='fas fa-copy'></i></button>
\t{% endif %}
\t{% if urlEdit %}
    \t<a href='{{ urlEdit }}' class='btn btn-info' title=\"{{ 'title.edit'|trans }}\"><i class='fas fa-edit'></i></a>
\t{% endif %}
\t{% if idDelete %}
    \t<button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='{{ idDelete }}' title=\"{{ 'title.delete'|trans }}\"><i class='fas fa-trash'></i></button>
\t{% endif %}
</div>", "default/table_group_btn_esdc.html.twig", "/var/www/project/templates/default/table_group_btn_esdc.html.twig");
    }
}
