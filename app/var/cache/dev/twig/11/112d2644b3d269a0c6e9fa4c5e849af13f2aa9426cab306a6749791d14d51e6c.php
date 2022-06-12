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

/* norm/material_norm/_form.html.twig */
class __TwigTemplate_41225eee609fc8199c3b9030e9a85e10b9848ee0d239fb81799ff3eeccd68ad9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "norm/material_norm/_form.html.twig"));

        // line 1
        echo "<div class=\"card-body\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "_token", [], "any", false, false, false, 2), 'row');
        echo "

    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "material", [], "any", false, false, false, 5), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "material", [], "any", false, false, false, 6), 'widget');
        echo "

        ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "material", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "array", false, false, false, 8)), 0))) {
            // line 9
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "material", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "errors", [], "array", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 11), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </ul>
        ";
        }
        // line 15
        echo "    </div>

    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "amount", [], "any", false, false, false, 18), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "amount", [], "any", false, false, false, 19), 'widget', ["type" => "number"]);
        echo "

        ";
        // line 21
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "amount", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "array", false, false, false, 21)), 0))) {
            // line 22
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "amount", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "array", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        ";
        }
        // line 28
        echo "    </div>

    <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "note", [], "any", false, false, false, 31), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "note", [], "any", false, false, false, 32), 'widget');
        echo "

        ";
        // line 34
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "note", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "array", false, false, false, 34)), 0))) {
            // line 35
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "note", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "array", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 37
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 37), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </ul>
        ";
        }
        // line 41
        echo "    </div>

</div>
<!-- /.card-body -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "norm/material_norm/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 41,  151 => 39,  142 => 37,  138 => 36,  135 => 35,  133 => 34,  128 => 32,  124 => 31,  119 => 28,  115 => 26,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  92 => 19,  88 => 18,  83 => 15,  79 => 13,  70 => 11,  66 => 10,  63 => 9,  61 => 8,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body\">
    {{ form_row(form._token) }}

    <div class=\"form-group\">
        {{ form_label(form.material) }}
        {{ form_widget(form.material) }}

        {% if form.material.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.material.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.amount) }}
        {{ form_widget(form.amount, {'type' : 'number'})  }}

        {% if form.amount.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.amount.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.note) }}
        {{ form_widget(form.note)  }}

        {% if form.note.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.note.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

</div>
<!-- /.card-body -->

", "norm/material_norm/_form.html.twig", "/var/www/project/templates/norm/material_norm/_form.html.twig");
    }
}
