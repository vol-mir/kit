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

/* default/table_group_with_copy_btn.html.twig */
class __TwigTemplate_58da8537eeaaa0d692183ae62fc9949b2a52e1f440271fbf04ff461c66755a1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_with_copy_btn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/table_group_with_copy_btn.html.twig"));

        // line 1
        echo "<div class='btn-group btn-group-sm'>
    <button type='button' class='btn btn-sm btn-dark float-left modal-copy-dialog' data-toggle='modal'
            data-id='";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["idCopy"]) || array_key_exists("idCopy", $context) ? $context["idCopy"] : (function () { throw new RuntimeError('Variable "idCopy" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "' style=\"color:white\"><i class='fas fa-copy'></i></button>
    <a href='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["urlEdit"]) || array_key_exists("urlEdit", $context) ? $context["urlEdit"] : (function () { throw new RuntimeError('Variable "urlEdit" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "' class='btn btn-info'><i class='fas fa-edit'></i></a>

    ";
        // line 6
        if ((0 !== twig_compare((isset($context["specificationClose"]) || array_key_exists("specificationClose", $context) ? $context["specificationClose"] : (function () { throw new RuntimeError('Variable "specificationClose" does not exist.', 6, $this->source); })()), 1))) {
            // line 7
            echo "    <button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["idDelete"]) || array_key_exists("idDelete", $context) ? $context["idDelete"] : (function () { throw new RuntimeError('Variable "idDelete" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "'><i class='fas fa-trash'></i></button>
    ";
        }
        // line 10
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/table_group_with_copy_btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  61 => 8,  58 => 7,  56 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='btn-group btn-group-sm'>
    <button type='button' class='btn btn-sm btn-dark float-left modal-copy-dialog' data-toggle='modal'
            data-id='{{ idCopy }}' style=\"color:white\"><i class='fas fa-copy'></i></button>
    <a href='{{ urlEdit }}' class='btn btn-info'><i class='fas fa-edit'></i></a>

    {% if specificationClose != 1 %}
    <button type='button' class='btn btn-sm btn-danger float-left modal-delete-dialog' data-toggle='modal'
            data-id='{{ idDelete }}'><i class='fas fa-trash'></i></button>
    {% endif %}
</div>", "default/table_group_with_copy_btn.html.twig", "/var/www/project/templates/default/table_group_with_copy_btn.html.twig");
    }
}
