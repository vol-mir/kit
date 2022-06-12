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

/* specification/structure/_form_material.html.twig */
class __TwigTemplate_b3aeb48300d763b46db7cd794380458e7166039e30a06617937a149d502e4aaa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/_form_material.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specification/structure/_form_material.html.twig"));

        // line 1
        echo "<div class=\"card-body\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "_token", [], "any", false, false, false, 2), 'row');
        echo "

    <div class=\"form-group\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "format", [], "any", false, false, false, 5), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "format", [], "any", false, false, false, 6), 'widget');
        echo "

        ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "format", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "array", false, false, false, 8)), 0))) {
            // line 9
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "format", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "errors", [], "array", false, false, false, 10));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "area", [], "any", false, false, false, 18), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "area", [], "any", false, false, false, 19), 'widget');
        echo "

        ";
        // line 21
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "area", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "array", false, false, false, 21)), 0))) {
            // line 22
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "area", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "array", false, false, false, 23));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "position", [], "any", false, false, false, 31), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "position", [], "any", false, false, false, 32), 'widget', ["type" => "number"]);
        echo "

        ";
        // line 34
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "position", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "array", false, false, false, 34)), 0))) {
            // line 35
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "position", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "array", false, false, false, 36));
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

    <div class=\"form-group\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "product", [], "any", false, false, false, 44), 'label');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "product", [], "any", false, false, false, 45), 'widget');
        echo "

        ";
        // line 47
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "product", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "array", false, false, false, 47)), 0))) {
            // line 48
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "product", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "array", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 50
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 50), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </ul>
        ";
        }
        // line 54
        echo "    </div>

    <div class=\"form-group\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "amount", [], "any", false, false, false, 57), 'label');
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "amount", [], "any", false, false, false, 58), 'widget', ["type" => "number"]);
        echo "

        ";
        // line 60
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "amount", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "array", false, false, false, 60)), 0))) {
            // line 61
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "amount", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "array", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 63
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 63), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </ul>
        ";
        }
        // line 67
        echo "    </div>

    <div class=\"form-group\">
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "note", [], "any", false, false, false, 70), 'label');
        echo "
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "note", [], "any", false, false, false, 71), 'widget');
        echo "

        ";
        // line 73
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "note", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "array", false, false, false, 73)), 0))) {
            // line 74
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "note", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "array", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 76
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 76), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </ul>
        ";
        }
        // line 80
        echo "    </div>

</div>
<!-- /.card-body -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "specification/structure/_form_material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 80,  259 => 78,  250 => 76,  246 => 75,  243 => 74,  241 => 73,  236 => 71,  232 => 70,  227 => 67,  223 => 65,  214 => 63,  210 => 62,  207 => 61,  205 => 60,  200 => 58,  196 => 57,  191 => 54,  187 => 52,  178 => 50,  174 => 49,  171 => 48,  169 => 47,  164 => 45,  160 => 44,  155 => 41,  151 => 39,  142 => 37,  138 => 36,  135 => 35,  133 => 34,  128 => 32,  124 => 31,  119 => 28,  115 => 26,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  92 => 19,  88 => 18,  83 => 15,  79 => 13,  70 => 11,  66 => 10,  63 => 9,  61 => 8,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body\">
    {{ form_row(form._token) }}

    <div class=\"form-group\">
        {{ form_label(form.format) }}
        {{ form_widget(form.format) }}

        {% if form.format.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.format.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.area) }}
        {{ form_widget(form.area) }}

        {% if form.area.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.area.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.position) }}
        {{ form_widget(form.position, {'type' : 'number'})  }}

        {% if form.position.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.position.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.product) }}
        {{ form_widget(form.product) }}

        {% if form.product.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product.vars['errors'] %}
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

", "specification/structure/_form_material.html.twig", "/var/www/project/templates/specification/structure/_form_material.html.twig");
    }
}
