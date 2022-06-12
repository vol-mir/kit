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

/* product/_form.html.twig */
class __TwigTemplate_31685baa1dd28093d460e4af913d7b0d5b2f403830791c39971d45a74668cac7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "_token", [], "any", false, false, false, 2), 'row');
        echo "

    <div class=\"form-group ";
        // line 4
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'widget');
        echo "

        ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "array", false, false, false, 8)), 0))) {
            // line 9
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "errors", [], "array", false, false, false, 10));
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
    <div class=\"form-group ";
        // line 16
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "designation", [], "any", false, false, false, 17), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "designation", [], "any", false, false, false, 18), 'widget');
        echo "

        ";
        // line 20
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "designation", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "array", false, false, false, 20)), 0))) {
            // line 21
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "designation", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "array", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </ul>
        ";
        }
        // line 27
        echo "    </div>
    <div class=\"form-group ";
        // line 28
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "weight", [], "any", false, false, false, 29), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "weight", [], "any", false, false, false, 30), 'widget', ["type" => "number"]);
        echo "

        ";
        // line 32
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "weight", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "array", false, false, false, 32)), 0))) {
            // line 33
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "weight", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "array", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 35
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </ul>
        ";
        }
        // line 39
        echo "    </div>
    <div class=\"form-group ";
        // line 40
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "unit", [], "any", false, false, false, 41), 'label');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "unit", [], "any", false, false, false, 42), 'widget');
        echo "

        ";
        // line 44
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "unit", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "errors", [], "array", false, false, false, 44)), 0))) {
            // line 45
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "unit", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "array", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 47
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 47), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </ul>
        ";
        }
        // line 51
        echo "    </div>

    <div class=\"form-group ";
        // line 53
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "product_group", [], "any", false, false, false, 54), 'label');
        echo "
        <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "product_group", [], "any", false, false, false, 56), 'widget');
        echo "

        ";
        // line 58
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "product_group", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "array", false, false, false, 58)), 0))) {
            // line 59
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "product_group", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "array", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 61
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 61), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </ul>
        ";
        }
        // line 65
        echo "    </div>

    <div class=\"form-group ";
        // line 67
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "product_type", [], "any", false, false, false, 68), 'label');
        echo "
        <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "product_type", [], "any", false, false, false, 70), 'widget');
        echo "

        ";
        // line 72
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "product_type", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "array", false, false, false, 72)), 0))) {
            // line 73
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "product_type", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "array", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </ul>
        ";
        }
        // line 79
        echo "    </div>

    <div class=\"form-group ";
        // line 81
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "product_kind", [], "any", false, false, false, 82), 'label');
        echo "
        <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "product_kind", [], "any", false, false, false, 84), 'widget');
        echo "

        ";
        // line 86
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "product_kind", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "array", false, false, false, 86)), 0))) {
            // line 87
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "product_kind", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "array", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 89), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </ul>
        ";
        }
        // line 93
        echo "    </div>

    <div class=\"form-group ";
        // line 95
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "product_category", [], "any", false, false, false, 96), 'label');
        echo "
        <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "product_category", [], "any", false, false, false, 98), 'widget');
        echo "

        ";
        // line 100
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "product_category", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "array", false, false, false, 100)), 0))) {
            // line 101
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "product_category", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "array", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 103
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 103), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </ul>
        ";
        }
        // line 107
        echo "    </div>

    <div class=\"form-group ";
        // line 109
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "kd_materials", [], "any", false, false, false, 110), 'label');
        echo "
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "kd_materials", [], "any", false, false, false, 111), 'widget');
        echo "

        ";
        // line 113
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "kd_materials", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "array", false, false, false, 113)), 0))) {
            // line 114
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "kd_materials", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "array", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 116
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 116), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            </ul>
        ";
        }
        // line 120
        echo "    </div>

    <div class=\"form-group ";
        // line 122
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "calculation", [], "any", false, false, false, 123), 'label');
        echo "
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "calculation", [], "any", false, false, false, 124), 'widget');
        echo "

        ";
        // line 126
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "calculation", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "array", false, false, false, 126)), 0))) {
            // line 127
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "calculation", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "array", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 129
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 129), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            </ul>
        ";
        }
        // line 133
        echo "    </div>

    <div class=\"form-group ";
        // line 135
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "analytic_group", [], "any", false, false, false, 136), 'label');
        echo "
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "analytic_group", [], "any", false, false, false, 137), 'widget');
        echo "

        ";
        // line 139
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "analytic_group", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "array", false, false, false, 139)), 0))) {
            // line 140
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "analytic_group", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "array", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 142
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 142), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "            </ul>
        ";
        }
        // line 146
        echo "    </div>

    <div class=\"form-group ";
        // line 148
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "finance_group", [], "any", false, false, false, 149), 'label');
        echo "
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "finance_group", [], "any", false, false, false, 150), 'widget');
        echo "

        ";
        // line 152
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "finance_group", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "errors", [], "array", false, false, false, 152)), 0))) {
            // line 153
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "finance_group", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "errors", [], "array", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 155), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "            </ul>
        ";
        }
        // line 159
        echo "    </div>

";
        // line 176
        echo "




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 176,  516 => 159,  512 => 157,  503 => 155,  499 => 154,  496 => 153,  494 => 152,  489 => 150,  485 => 149,  481 => 148,  477 => 146,  473 => 144,  464 => 142,  460 => 141,  457 => 140,  455 => 139,  450 => 137,  446 => 136,  442 => 135,  438 => 133,  434 => 131,  425 => 129,  421 => 128,  418 => 127,  416 => 126,  411 => 124,  407 => 123,  403 => 122,  399 => 120,  395 => 118,  386 => 116,  382 => 115,  379 => 114,  377 => 113,  372 => 111,  368 => 110,  364 => 109,  360 => 107,  356 => 105,  347 => 103,  343 => 102,  340 => 101,  338 => 100,  333 => 98,  328 => 96,  324 => 95,  320 => 93,  316 => 91,  307 => 89,  303 => 88,  300 => 87,  298 => 86,  293 => 84,  288 => 82,  284 => 81,  280 => 79,  276 => 77,  267 => 75,  263 => 74,  260 => 73,  258 => 72,  253 => 70,  248 => 68,  244 => 67,  240 => 65,  236 => 63,  227 => 61,  223 => 60,  220 => 59,  218 => 58,  213 => 56,  208 => 54,  204 => 53,  200 => 51,  196 => 49,  187 => 47,  183 => 46,  180 => 45,  178 => 44,  173 => 42,  169 => 41,  165 => 40,  162 => 39,  158 => 37,  149 => 35,  145 => 34,  142 => 33,  140 => 32,  135 => 30,  131 => 29,  127 => 28,  124 => 27,  120 => 25,  111 => 23,  107 => 22,  104 => 21,  102 => 20,  97 => 18,  93 => 17,  89 => 16,  86 => 15,  82 => 13,  73 => 11,  69 => 10,  66 => 9,  64 => 8,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    {{ form_row(form._token) }}

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name) }}

        {% if form.name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.designation) }}
        {{ form_widget(form.designation) }}

        {% if form.designation.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.designation.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.weight) }}
        {{ form_widget(form.weight, {'type' : 'number'})  }}

        {% if form.weight.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.weight.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.unit) }}
        {{ form_widget(form.unit) }}

        {% if form.unit.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.unit.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.product_group) }}
        <span data-toggle='tooltip' data-placement='right' title='Группа: Продукция технического назначения, ТНП, основные материалы - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        {{ form_widget(form.product_group) }}

        {% if form.product_group.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product_group.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.product_type) }}
        <span data-toggle='tooltip' data-placement='right' title='Используется для дополнительной группировки'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        {{ form_widget(form.product_type) }}

        {% if form.product_type.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product_type.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.product_kind) }}
        <span data-toggle='tooltip' data-placement='right' title='Вид номенклатуры - должно быть как в 1С'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        {{ form_widget(form.product_kind) }}

        {% if form.product_kind.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product_kind.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.product_category) }}
        <span data-toggle='tooltip' data-placement='right' title='Товарная категория: покупная или собственного изготовления - если одна и та же деталь может быть либо покупной, либо собственного изготовления, то  необходимо создать 2 элемента в справочнике'><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></span>
        {{ form_widget(form.product_category) }}

        {% if form.product_category.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product_category.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.kd_materials) }}
        {{ form_widget(form.kd_materials) }}

        {% if form.kd_materials.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.kd_materials.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_PEO\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.calculation) }}
        {{ form_widget(form.calculation) }}

        {% if form.calculation.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.calculation.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_BUH\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.analytic_group) }}
        {{ form_widget(form.analytic_group) }}

        {% if form.analytic_group.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.analytic_group.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_BUH\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.finance_group) }}
        {{ form_widget(form.finance_group) }}

        {% if form.finance_group.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.finance_group.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

{# 
    {% if is_granted(\"ROLE_ADMIN\") %}
    <div class=\"form-group\">
        {{ form_label(form.id_erp) }}
        {{ form_widget(form.id_erp) }}

        {% if form.id_erp.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.id_erp.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    {% endif %} #}





", "product/_form.html.twig", "/var/www/project/templates/product/_form.html.twig");
    }
}
