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

/* specification/structure/_controls.html.twig */
class __TwigTemplate_73b8b4c725afd6324db6f41cc5fc7c20a545d2829ede9baf955e20f25a7ff783 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/_controls.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/_controls.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-12\">

        <button type=\"button\" class=\"btn btn-sm btn-success float-left mr-2 mb-1 dropdown-toggle\" data-toggle=\"dropdown\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add"), "html", null, true);
        echo "
        </button>
        <ul class=\"dropdown-menu button-ul\">
            <li class=\"dropdown-item\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_product_new", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_product"), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_section_new", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_section"), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_material_new", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_material"), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("structure_document_new", ["specification_id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_document"), "html", null, true);
        echo "</a></li>
        </ul>

        <button type=\"button\" onclick='location.href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_specification", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["specification"]) || array_key_exists("specification", $context) ? $context["specification"] : (function () { throw new RuntimeError('Variable "specification" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.print"), "html", null, true);
        echo "</button>




    </div>


</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "specification/structure/_controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  73 => 11,  67 => 10,  61 => 9,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12\">

        <button type=\"button\" class=\"btn btn-sm btn-success float-left mr-2 mb-1 dropdown-toggle\" data-toggle=\"dropdown\">
            {{ 'title.add'|trans }}
        </button>
        <ul class=\"dropdown-menu button-ul\">
            <li class=\"dropdown-item\"><a href=\"{{ path('structure_product_new', {'specification_id': specification.id}) }}\">{{ 'title.add_product'|trans }}</a></li>
            <li class=\"dropdown-item\"><a href=\"{{ path('structure_section_new', {'specification_id': specification.id}) }}\">{{ 'title.add_section'|trans }}</a></li>
            <li class=\"dropdown-item\"><a href=\"{{ path('structure_material_new', {'specification_id': specification.id}) }}\">{{ 'title.add_material'|trans }}</a></li>
            <li class=\"dropdown-item\"><a href=\"{{ path('structure_document_new', {'specification_id': specification.id}) }}\">{{ 'title.add_document'|trans }}</a></li>
        </ul>

        <button type=\"button\" onclick='location.href = \"{{ path('print_specification', {'id': specification.id}) }}\";' role=\"button\" class=\"btn btn-sm btn-default float-left mr-2 mb-1\"><i class='fas fa-print'></i> {{ 'title.print'|trans }}</button>




    </div>


</div>
", "specification/structure/_controls.html.twig", "/var/www/project/templates/specification/structure/_controls.html.twig");
    }
}
