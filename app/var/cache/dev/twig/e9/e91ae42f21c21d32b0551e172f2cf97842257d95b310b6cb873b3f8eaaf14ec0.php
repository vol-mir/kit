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

/* material/_form.html.twig */
class __TwigTemplate_f27302492676c04542716315f899eac7f5458db1892d2794d225ab9776dbabab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/_form.html.twig"));

        // line 1
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "_token", [], "any", false, false, false, 1), 'row');
        echo "

    <div class=\"form-group ";
        // line 3
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'label');
        echo "

        <div class=\"input-group mb-3\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'widget');
        echo "

            <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"formed\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.formed"), "html", null, true);
        echo "</button>
            </div>

        </div>

        ";
        // line 15
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "array", false, false, false, 15)), 0))) {
            // line 16
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "array", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </ul>
        ";
        }
        // line 22
        echo "    </div>

    <div class=\"form-group ";
        // line 24
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "profile_name", [], "any", false, false, false, 25), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "profile_name", [], "any", false, false, false, 26), 'widget');
        echo "

        ";
        // line 28
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "profile_name", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "array", false, false, false, 28)), 0))) {
            // line 29
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "profile_name", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "array", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 31
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        ";
        }
        // line 35
        echo "    </div>
    <div class=\"form-group ";
        // line 36
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "profile", [], "any", false, false, false, 37), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "profile", [], "any", false, false, false, 38), 'widget');
        echo "

        ";
        // line 40
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "profile", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "array", false, false, false, 40)), 0))) {
            // line 41
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "profile", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "errors", [], "array", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 43
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 43), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </ul>
        ";
        }
        // line 47
        echo "    </div>
    <div class=\"form-group ";
        // line 48
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "profile_standard", [], "any", false, false, false, 49), 'label');
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "profile_standard", [], "any", false, false, false, 50), 'widget');
        echo "

        ";
        // line 52
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "profile_standard", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "array", false, false, false, 52)), 0))) {
            // line 53
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "profile_standard", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "array", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </ul>
        ";
        }
        // line 59
        echo "    </div>
    <div class=\"form-group ";
        // line 60
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "mark", [], "any", false, false, false, 61), 'label');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "mark", [], "any", false, false, false, 62), 'widget');
        echo "

        ";
        // line 64
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "mark", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "array", false, false, false, 64)), 0))) {
            // line 65
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "mark", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "array", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 67), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </ul>
        ";
        }
        // line 71
        echo "    </div>
    <div class=\"form-group ";
        // line 72
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "mark_standard", [], "any", false, false, false, 73), 'label');
        echo "
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "mark_standard", [], "any", false, false, false, 74), 'widget');
        echo "

        ";
        // line 76
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "mark_standard", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "array", false, false, false, 76)), 0))) {
            // line 77
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "mark_standard", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "array", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 79
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 79), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            </ul>
        ";
        }
        // line 83
        echo "    </div>
    <div class=\"form-group ";
        // line 84
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "material_kind", [], "any", false, false, false, 85), 'label');
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "material_kind", [], "any", false, false, false, 86), 'widget');
        echo "

        ";
        // line 88
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "material_kind", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "array", false, false, false, 88)), 0))) {
            // line 89
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "material_kind", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "errors", [], "array", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 91), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </ul>
        ";
        }
        // line 95
        echo "    </div>

    <div class=\"form-group ";
        // line 97
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "unit", [], "any", false, false, false, 98), 'label');
        echo "
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "unit", [], "any", false, false, false, 99), 'widget');
        echo "

        ";
        // line 101
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "unit", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "errors", [], "array", false, false, false, 101)), 0))) {
            // line 102
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "unit", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "array", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 104
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 104), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </ul>
        ";
        }
        // line 108
        echo "    </div>

    <div class=\"form-group ";
        // line 110
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "product_group", [], "any", false, false, false, 111), 'label');
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "product_group", [], "any", false, false, false, 112), 'widget');
        echo "

        ";
        // line 114
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "product_group", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "array", false, false, false, 114)), 0))) {
            // line 115
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "product_group", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "array", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 117
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 117), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "            </ul>
        ";
        }
        // line 121
        echo "    </div>

    <div class=\"form-group ";
        // line 123
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "product_type", [], "any", false, false, false, 124), 'label');
        echo "
        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "product_type", [], "any", false, false, false, 125), 'widget');
        echo "

        ";
        // line 127
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "product_type", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "array", false, false, false, 127)), 0))) {
            // line 128
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "product_type", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "array", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 130
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 130), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </ul>
        ";
        }
        // line 134
        echo "    </div>

    <div class=\"form-group ";
        // line 136
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "product_kind", [], "any", false, false, false, 137), 'label');
        echo "
        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "product_kind", [], "any", false, false, false, 138), 'widget');
        echo "

        ";
        // line 140
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "product_kind", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140), "errors", [], "array", false, false, false, 140)), 0))) {
            // line 141
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "product_kind", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "errors", [], "array", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 143
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 143), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "            </ul>
        ";
        }
        // line 147
        echo "    </div>

    <div class=\"form-group ";
        // line 149
        echo (((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGK"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OGT"), false))) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "product_category", [], "any", false, false, false, 150), 'label');
        echo "
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "product_category", [], "any", false, false, false, 151), 'widget');
        echo "

        ";
        // line 153
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "product_category", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "errors", [], "array", false, false, false, 153)), 0))) {
            // line 154
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "product_category", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "errors", [], "array", false, false, false, 155));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 156
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 156), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "            </ul>
        ";
        }
        // line 160
        echo "    </div>

    <div class=\"form-group ";
        // line 162
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PEO"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "calculation", [], "any", false, false, false, 163), 'label');
        echo "
        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "calculation", [], "any", false, false, false, 164), 'widget');
        echo "

        ";
        // line 166
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "calculation", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "errors", [], "array", false, false, false, 166)), 0))) {
            // line 167
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "calculation", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "errors", [], "array", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 169
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 169), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "            </ul>
        ";
        }
        // line 173
        echo "    </div>

    <div class=\"form-group ";
        // line 175
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "analytic_group", [], "any", false, false, false, 176), 'label');
        echo "
        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "analytic_group", [], "any", false, false, false, 177), 'widget');
        echo "

        ";
        // line 179
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "analytic_group", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "errors", [], "array", false, false, false, 179)), 0))) {
            // line 180
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "analytic_group", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "errors", [], "array", false, false, false, 181));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 182
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 182), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "            </ul>
        ";
        }
        // line 186
        echo "    </div>

    <div class=\"form-group ";
        // line 188
        echo ((((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BUH"), false)) && (0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false)))) ? ("d-none") : (""));
        echo "\">
        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "finance_group", [], "any", false, false, false, 189), 'label');
        echo "
        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "finance_group", [], "any", false, false, false, 190), 'widget');
        echo "

        ";
        // line 192
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "finance_group", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "errors", [], "array", false, false, false, 192)), 0))) {
            // line 193
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "finance_group", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "array", false, false, false, 194));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 195
                echo "                    <li class=\"text-danger small\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 195), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "            </ul>
        ";
        }
        // line 199
        echo "    </div>


<!-- /.card-body -->


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "material/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 199,  632 => 197,  623 => 195,  619 => 194,  616 => 193,  614 => 192,  609 => 190,  605 => 189,  601 => 188,  597 => 186,  593 => 184,  584 => 182,  580 => 181,  577 => 180,  575 => 179,  570 => 177,  566 => 176,  562 => 175,  558 => 173,  554 => 171,  545 => 169,  541 => 168,  538 => 167,  536 => 166,  531 => 164,  527 => 163,  523 => 162,  519 => 160,  515 => 158,  506 => 156,  502 => 155,  499 => 154,  497 => 153,  492 => 151,  488 => 150,  484 => 149,  480 => 147,  476 => 145,  467 => 143,  463 => 142,  460 => 141,  458 => 140,  453 => 138,  449 => 137,  445 => 136,  441 => 134,  437 => 132,  428 => 130,  424 => 129,  421 => 128,  419 => 127,  414 => 125,  410 => 124,  406 => 123,  402 => 121,  398 => 119,  389 => 117,  385 => 116,  382 => 115,  380 => 114,  375 => 112,  371 => 111,  367 => 110,  363 => 108,  359 => 106,  350 => 104,  346 => 103,  343 => 102,  341 => 101,  336 => 99,  332 => 98,  328 => 97,  324 => 95,  320 => 93,  311 => 91,  307 => 90,  304 => 89,  302 => 88,  297 => 86,  293 => 85,  289 => 84,  286 => 83,  282 => 81,  273 => 79,  269 => 78,  266 => 77,  264 => 76,  259 => 74,  255 => 73,  251 => 72,  248 => 71,  244 => 69,  235 => 67,  231 => 66,  228 => 65,  226 => 64,  221 => 62,  217 => 61,  213 => 60,  210 => 59,  206 => 57,  197 => 55,  193 => 54,  190 => 53,  188 => 52,  183 => 50,  179 => 49,  175 => 48,  172 => 47,  168 => 45,  159 => 43,  155 => 42,  152 => 41,  150 => 40,  145 => 38,  141 => 37,  137 => 36,  134 => 35,  130 => 33,  121 => 31,  117 => 30,  114 => 29,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  95 => 22,  91 => 20,  82 => 18,  78 => 17,  75 => 16,  73 => 15,  65 => 10,  59 => 7,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ form_row(form._token) }}

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.name) }}

        <div class=\"input-group mb-3\">
            {{ form_widget(form.name) }}

            <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"formed\">{{ 'title.formed'|trans }}</button>
            </div>

        </div>

        {% if form.name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>

    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.profile_name) }}
        {{ form_widget(form.profile_name) }}

        {% if form.profile_name.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.profile_name.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.profile) }}
        {{ form_widget(form.profile) }}

        {% if form.profile.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.profile.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.profile_standard) }}
        {{ form_widget(form.profile_standard) }}

        {% if form.profile_standard.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.profile_standard.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.mark) }}
        {{ form_widget(form.mark) }}

        {% if form.mark.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.mark.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.mark_standard) }}
        {{ form_widget(form.mark_standard) }}

        {% if form.mark_standard.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.mark_standard.vars['errors'] %}
                    <li class=\"text-danger small\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
    <div class=\"form-group {{ is_granted(\"ROLE_OGK\")==false and is_granted(\"ROLE_OGT\")==false and is_granted(\"ROLE_ADMIN\")==false ? 'd-none' : '' }}\">
        {{ form_label(form.material_kind) }}
        {{ form_widget(form.material_kind) }}

        {% if form.material_kind.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.material_kind.vars['errors'] %}
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
        {{ form_widget(form.product_category) }}

        {% if form.product_category.vars['errors']|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in form.product_category.vars['errors'] %}
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


<!-- /.card-body -->


", "material/_form.html.twig", "/var/www/project/templates/material/_form.html.twig");
    }
}
