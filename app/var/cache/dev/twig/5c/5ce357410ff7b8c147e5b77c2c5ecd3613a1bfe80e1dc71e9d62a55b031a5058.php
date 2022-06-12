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

/* user/_form.html.twig */
class __TwigTemplate_60e1dcfe855effce203120039b201b8e24b4845b9ea696ffdb6bfb60ea2d6e0a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo "<div class=\"card-body\">

    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "_token", [], "any", false, false, false, 3), 'row');
        echo "

    <div class=\"form-group\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "username", [], "any", false, false, false, 6), 'label');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), 'widget');
        echo "

        ";
        // line 9
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "errors", [], "array", false, false, false, 9)), 0))) {
            // line 10
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "errors", [], "array", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 12), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </ul>
        ";
        }
        // line 16
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "roles", [], "any", false, false, false, 18), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "roles", [], "any", false, false, false, 19), 'widget');
        echo "

        ";
        // line 21
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "roles", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "array", false, false, false, 21)), 0))) {
            // line 22
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "roles", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "array", false, false, false, 23));
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
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "plain_password", [], "any", false, false, false, 30), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "plain_password", [], "any", false, false, false, 31), 'widget');
        echo "

        ";
        // line 33
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "plain_password", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "errors", [], "array", false, false, false, 33)), 0))) {
            // line 34
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plain_password", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "array", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 36
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 36), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </ul>
        ";
        }
        // line 40
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "last_name", [], "any", false, false, false, 42), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "last_name", [], "any", false, false, false, 43), 'widget');
        echo "

        ";
        // line 45
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "last_name", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "array", false, false, false, 45)), 0))) {
            // line 46
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "last_name", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "array", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 48), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </ul>
        ";
        }
        // line 52
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "first_name", [], "any", false, false, false, 54), 'label');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "first_name", [], "any", false, false, false, 55), 'widget');
        echo "

        ";
        // line 57
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "first_name", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "errors", [], "array", false, false, false, 57)), 0))) {
            // line 58
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "first_name", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "array", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 60
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
        ";
        }
        // line 64
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "middle_name", [], "any", false, false, false, 66), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "middle_name", [], "any", false, false, false, 67), 'widget');
        echo "

        ";
        // line 69
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "middle_name", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "array", false, false, false, 69)), 0))) {
            // line 70
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "middle_name", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "array", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 72
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 72), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            </ul>
        ";
        }
        // line 76
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "department", [], "any", false, false, false, 78), 'label');
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "department", [], "any", false, false, false, 79), 'widget');
        echo "

        ";
        // line 81
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "department", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "array", false, false, false, 81)), 0))) {
            // line 82
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "department", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "array", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 84
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 84), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </ul>
        ";
        }
        // line 88
        echo "    </div>
</div>
<!-- /.card-body -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 88,  290 => 86,  281 => 84,  277 => 83,  274 => 82,  272 => 81,  267 => 79,  263 => 78,  259 => 76,  255 => 74,  246 => 72,  242 => 71,  239 => 70,  237 => 69,  232 => 67,  228 => 66,  224 => 64,  220 => 62,  211 => 60,  207 => 59,  204 => 58,  202 => 57,  197 => 55,  193 => 54,  189 => 52,  185 => 50,  176 => 48,  172 => 47,  169 => 46,  167 => 45,  162 => 43,  158 => 42,  154 => 40,  150 => 38,  141 => 36,  137 => 35,  134 => 34,  132 => 33,  127 => 31,  123 => 30,  119 => 28,  115 => 26,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  92 => 19,  88 => 18,  84 => 16,  80 => 14,  71 => 12,  67 => 11,  64 => 10,  62 => 9,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body\">

    {{ form_row(form._token) }}

    <div class=\"form-group\">
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}

        {% if form.username.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.username.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.roles) }}
        {{ form_widget(form.roles) }}

        {% if form.roles.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.roles.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.plain_password) }}
        {{ form_widget(form.plain_password) }}

        {% if form.plain_password.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.plain_password.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.last_name) }}
        {{ form_widget(form.last_name) }}

        {% if form.last_name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.last_name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.first_name) }}
        {{ form_widget(form.first_name) }}

        {% if form.first_name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.first_name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.middle_name) }}
        {{ form_widget(form.middle_name) }}

        {% if form.middle_name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.middle_name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.department) }}
        {{ form_widget(form.department) }}

        {% if form.department.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.department.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
</div>
<!-- /.card-body -->

", "user/_form.html.twig", "/var/www/project/templates/user/_form.html.twig");
    }
}
