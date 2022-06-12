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

/* product/save_xml.html.twig */
class __TwigTemplate_a8e856d86aa3a74046e6f392094bea965c267781a207d992abf91f2b2441199a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/save_xml.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/save_xml.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<root>
    ";
        // line 3
        $context["codePoint"] = "";
        // line 4
        echo "    ";
        $context["numberStage"] = 1;
        // line 5
        echo "    ";
        $context["codePointOld"] = "";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trackPoints"]) || array_key_exists("trackPoints", $context) ? $context["trackPoints"] : (function () { throw new RuntimeError('Variable "trackPoints" does not exist.', 6, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trackPoint"]) {
            // line 7
            echo "    <specification>
        ";
            // line 8
            $context["numberTrack"] = 1;
            // line 9
            echo "        ";
            $context["delimiter"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) ? ("") : ("-"));
            // line 10
            echo "        ";
            $context["codePointOld"] = (isset($context["codePoint"]) || array_key_exists("codePoint", $context) ? $context["codePoint"] : (function () { throw new RuntimeError('Variable "codePoint" does not exist.', 10, $this->source); })());
            // line 11
            echo "        ";
            $context["codePoint"] = (((isset($context["codePoint"]) || array_key_exists("codePoint", $context) ? $context["codePoint"] : (function () { throw new RuntimeError('Variable "codePoint" does not exist.', 11, $this->source); })()) . (isset($context["delimiter"]) || array_key_exists("delimiter", $context) ? $context["delimiter"] : (function () { throw new RuntimeError('Variable "delimiter" does not exist.', 11, $this->source); })())) . twig_get_attribute($this->env, $this->source, $context["trackPoint"], "number_area", [], "any", false, false, false, 11));
            // line 12
            echo "        <name>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "designation", [], "any", false, false, false, 12), "html", null, true);
            echo ", ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) ? ("Изделие") : ("Заготовка"));
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["codePoint"]) || array_key_exists("codePoint", $context) ? $context["codePoint"] : (function () { throw new RuntimeError('Variable "codePoint" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, (("(" . twig_get_attribute($this->env, $this->source, (isset($context["rendition"]) || array_key_exists("rendition", $context) ? $context["rendition"] : (function () { throw new RuntimeError('Variable "rendition" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12)) . ")"), "html", null, true))) : (print ("")));
            echo "</name>

        <dateBegin></dateBegin>
        <dateEnd></dateEnd>

        <departmentManufacturer>
            <id>0</id>
            <name></name>
        </departmentManufacturer>

        <product>
            ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) {
                echo "<idErp>";
                ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "idErp", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "idErp", [], "any", false, false, false, 23), "html", null, true))) : (print (0)));
                echo "</idErp>";
            }
            // line 24
            echo "            <idInner>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</idInner>
            <name>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</name>
            <designation>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "designation", [], "any", false, false, false, 26), "html", null, true);
            echo "</designation>
            <type>";
            // line 27
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 27)) ? ("Изделие") : ("Заготовка"));
            echo "</type>
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) {
                echo "<weightKg>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "weight", [], "any", false, false, false, 28), "html", null, true);
                echo "</weightKg>";
            }
            // line 29
            echo "            <unit>
                <idErp>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "unit", [], "any", false, false, false, 30), "idErp", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "unit", [], "any", false, false, false, 30), "idErp", [], "any", false, false, false, 30), "html", null, true))) : (print (0)));
            echo "</idErp>
                <idInner>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "unit", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</idInner>
                <name>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "unit", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</name>
            </unit>
            <characteristic>
                ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35)) {
                echo "<rendition>
                    <idInner>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendition"]) || array_key_exists("rendition", $context) ? $context["rendition"] : (function () { throw new RuntimeError('Variable "rendition" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</idInner>
                    <name>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rendition"]) || array_key_exists("rendition", $context) ? $context["rendition"] : (function () { throw new RuntimeError('Variable "rendition" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</name>
                </rendition>
                ";
            } else {
                // line 40
                echo "                <name>";
                echo twig_escape_filter($this->env, (isset($context["codePoint"]) || array_key_exists("codePoint", $context) ? $context["codePoint"] : (function () { throw new RuntimeError('Variable "codePoint" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "</name>
                ";
            }
            // line 42
            echo "            </characteristic>
            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "productGroup", [], "any", false, false, false, 43) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43))) {
                echo "<productGroup>
                <idErp>";
                // line 44
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "productGroup", [], "any", false, false, false, 44), "idErp", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "productGroup", [], "any", false, false, false, 44), "idErp", [], "any", false, false, false, 44), "html", null, true))) : (print (0)));
                echo "</idErp>
                <idInner>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "productGroup", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                echo "</idInner>
                <name>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "productGroup", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                echo "</name>
            </productGroup>
            ";
            } else {
                // line 48
                echo "<productGroup>
                <name>Собственные полуфабрикаты и комплектующие изделия, конструкции и детали</name>
            </productGroup>
            ";
            }
            // line 52
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "productKind", [], "any", false, false, false, 52) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52))) {
                echo "<productKind>
                <idInner>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "productKind", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
                echo "</idInner>
                <name>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "productKind", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</name>
            </productKind>
            ";
            } else {
                // line 56
                echo "<productKind>
                <name>Заготовки деталей</name>
            </productKind>
            ";
            }
            // line 60
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "productCategory", [], "any", false, false, false, 60)) {
                echo "<productCategory>
                <idInner>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "productCategory", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
                echo "</idInner>
                <name>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 62, $this->source); })()), "productCategory", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</name>
            </productCategory>
            ";
            }
            // line 65
            echo "        </product>
        ";
            // line 66
            if (((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 66, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 66))) {
                echo "<materials>
        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 67, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                    echo "<material>
            <idErp>";
                    // line 68
                    ((twig_get_attribute($this->env, $this->source, $context["material"], "idErp", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "idErp", [], "any", false, false, false, 68), "html", null, true))) : (print (0)));
                    echo "</idErp>
            <idInner>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 69), "html", null, true);
                    echo "</idInner>
            <name>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 70), "html", null, true);
                    echo "</name>
            <designation>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "designation", [], "any", false, false, false, 71), "html", null, true);
                    echo "</designation>
            <amount>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amount", [], "any", false, false, false, 72), "html", null, true);
                    echo "</amount>
            <unit>
                <idErp>";
                    // line 74
                    ((twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitIdErp", [], "any", false, false, false, 74)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitIdErp", [], "any", false, false, false, 74), "html", null, true))) : (print (0)));
                    echo "</idErp>
                <idInner>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitId", [], "any", false, false, false, 75), "html", null, true);
                    echo "</idInner>
                <name>";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "amountUnitName", [], "any", false, false, false, 76), "html", null, true);
                    echo "</name>
            </unit>
            ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["material"], "category", [], "any", false, false, false, 78)) {
                        echo "<materialCategory>
                <idInner>";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "categoryId", [], "any", false, false, false, 79), "html", null, true);
                        echo "</idInner>
                <name>";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "category", [], "any", false, false, false, 80), "html", null, true);
                        echo "</name>
            </materialCategory>
            ";
                    }
                    // line 83
                    echo "        </material>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "        </materials>
        ";
            } else {
                // line 87
                echo "        <materials>
            <material>
                <name>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
                echo "</name>
                <designation>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 90, $this->source); })()), "designation", [], "any", false, false, false, 90), "html", null, true);
                echo "</designation>
                <amount>1</amount>
                <unit>
                    <idErp>";
                // line 93
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "unit", [], "any", false, false, false, 93), "idErp", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "unit", [], "any", false, false, false, 93), "idErp", [], "any", false, false, false, 93), "html", null, true))) : (print (0)));
                echo "</idErp>
                    <idInner>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 94, $this->source); })()), "unit", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
                echo "</idInner>
                    <name>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 95, $this->source); })()), "unit", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                echo "</name>
                </unit>
                <type>Заготовка</type>
                <characteristic>
                    <name>";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["codePointOld"]) || array_key_exists("codePointOld", $context) ? $context["codePointOld"] : (function () { throw new RuntimeError('Variable "codePointOld" does not exist.', 99, $this->source); })()), "html", null, true);
                echo "</name>
                </characteristic>
                ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "productCategory", [], "any", false, false, false, 101)) {
                    echo "<materialCategory>
                    <idInner>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "productCategory", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
                    echo "</idInner>
                    <name>";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "productCategory", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
                    echo "</name>
                </materialCategory>
                ";
                }
                // line 106
                echo "            </material>
        </materials>
        ";
            }
            // line 109
            echo "        <stages>
            <stage>
                <number>";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["numberStage"]) || array_key_exists("numberStage", $context) ? $context["numberStage"] : (function () { throw new RuntimeError('Variable "numberStage" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "</number>
                <name>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "designation", [], "any", false, false, false, 112), "html", null, true);
            echo ", ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 112)) ? ("Изделие") : ("Заготовка"));
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["codePoint"]) || array_key_exists("codePoint", $context) ? $context["codePoint"] : (function () { throw new RuntimeError('Variable "codePoint" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "</name>
                <department>
                    <id>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackPoint"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "</id>
                    <name>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackPoint"], "name", [], "any", false, false, false, 115), "html", null, true);
            echo "</name>
                    <numberArea>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trackPoint"], "number_area", [], "any", false, false, false, 116), "html", null, true);
            echo "</numberArea>
                </department>
            </stage>
        </stages>
        ";
            // line 120
            if ((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 120, $this->source); })())) {
                echo "<tracks>
        ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 121, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "department", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["trackPoint"], "id", [], "any", false, false, false, 121)))) {
                        echo "<track>
            <number>";
                        // line 122
                        echo twig_escape_filter($this->env, (isset($context["numberTrack"]) || array_key_exists("numberTrack", $context) ? $context["numberTrack"] : (function () { throw new RuntimeError('Variable "numberTrack" does not exist.', 122, $this->source); })()), "html", null, true);
                        echo "</number>
            <typeWork></typeWork>
            <timeMinutes>";
                        // line 124
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "timePiece", [], "any", false, false, false, 124), "html", null, true);
                        echo "</timeMinutes>
            <assignment>Номер операции ";
                        // line 125
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "numberOperation", [], "any", false, false, false, 125)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "numberOperation", [], "any", false, false, false, 125), "html", null, true))) : (print ("")));
                        echo ": ";
                        ((twig_get_attribute($this->env, $this->source, $context["track"], "technologicalOperation", [], "any", false, false, false, 125)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["track"], "technologicalOperation", [], "any", false, false, false, 125), "fullName", [], "any", false, false, false, 125), "html", null, true))) : (print ("")));
                        echo "</assignment>
        </track>
        ";
                        // line 127
                        $context["numberTrack"] = ((isset($context["numberTrack"]) || array_key_exists("numberTrack", $context) ? $context["numberTrack"] : (function () { throw new RuntimeError('Variable "numberTrack" does not exist.', 127, $this->source); })()) + 1);
                        // line 128
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  
        </tracks>
        ";
            }
            // line 131
            echo "    </specification>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trackPoint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
</root>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/save_xml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 133,  438 => 131,  427 => 128,  425 => 127,  418 => 125,  414 => 124,  409 => 122,  402 => 121,  398 => 120,  391 => 116,  387 => 115,  383 => 114,  372 => 112,  368 => 111,  364 => 109,  359 => 106,  353 => 103,  349 => 102,  345 => 101,  340 => 99,  333 => 95,  329 => 94,  325 => 93,  319 => 90,  315 => 89,  311 => 87,  307 => 85,  300 => 83,  294 => 80,  290 => 79,  286 => 78,  281 => 76,  277 => 75,  273 => 74,  268 => 72,  264 => 71,  260 => 70,  256 => 69,  252 => 68,  246 => 67,  242 => 66,  239 => 65,  233 => 62,  229 => 61,  224 => 60,  218 => 56,  212 => 54,  208 => 53,  203 => 52,  197 => 48,  191 => 46,  187 => 45,  183 => 44,  179 => 43,  176 => 42,  170 => 40,  164 => 37,  160 => 36,  156 => 35,  150 => 32,  146 => 31,  142 => 30,  139 => 29,  133 => 28,  129 => 27,  125 => 26,  121 => 25,  116 => 24,  110 => 23,  87 => 12,  84 => 11,  81 => 10,  78 => 9,  76 => 8,  73 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<root>
    {% set codePoint='' %}
    {% set numberStage=1 %}
    {% set codePointOld='' %}
    {% for trackPoint in trackPoints %}
    <specification>
        {% set numberTrack=1 %}
        {% set delimiter=loop.first?'':'-' %}
        {% set codePointOld=codePoint %}
        {% set codePoint=codePoint~delimiter~trackPoint.number_area %}
        <name>{{ product.name }} {{ product.designation }}, {{ loop.last?'Изделие':'Заготовка' }} {{codePoint}} {{ loop.last?'('~rendition.name~')':'' }}</name>

        <dateBegin></dateBegin>
        <dateEnd></dateEnd>

        <departmentManufacturer>
            <id>0</id>
            <name></name>
        </departmentManufacturer>

        <product>
            {% if loop.last %}<idErp>{{ product.idErp?product.idErp:0 }}</idErp>{% endif %}
            <idInner>{{ product.id }}</idInner>
            <name>{{ product.name }}</name>
            <designation>{{ product.designation }}</designation>
            <type>{{ loop.last?'Изделие':'Заготовка' }}</type>
            {% if loop.last %}<weightKg>{{ product.weight }}</weightKg>{% endif %}
            <unit>
                <idErp>{{ product.unit.idErp?product.unit.idErp:0 }}</idErp>
                <idInner>{{ product.unit.id }}</idInner>
                <name>{{ product.unit.name }}</name>
            </unit>
            <characteristic>
                {% if loop.last %}<rendition>
                    <idInner>{{ rendition.id }}</idInner>
                    <name>{{ rendition.name }}</name>
                </rendition>
                {% else %}
                <name>{{ codePoint }}</name>
                {% endif %}
            </characteristic>
            {% if product.productGroup and loop.last %}<productGroup>
                <idErp>{{ product.productGroup.idErp?product.productGroup.idErp:0 }}</idErp>
                <idInner>{{ product.productGroup.id }}</idInner>
                <name>{{ product.productGroup.name }}</name>
            </productGroup>
            {% else %}<productGroup>
                <name>Собственные полуфабрикаты и комплектующие изделия, конструкции и детали</name>
            </productGroup>
            {% endif %}
            {% if product.productKind and loop.last %}<productKind>
                <idInner>{{ product.productKind.id }}</idInner>
                <name>{{ product.productKind.name }}</name>
            </productKind>
            {% else %}<productKind>
                <name>Заготовки деталей</name>
            </productKind>
            {% endif %}
            {% if product.productCategory %}<productCategory>
                <idInner>{{ product.productCategory.id }}</idInner>
                <name>{{ product.productCategory.name }}</name>
            </productCategory>
            {% endif %}
        </product>
        {% if materials and loop.first %}<materials>
        {% for material in materials %}<material>
            <idErp>{{ material.idErp?material.idErp:0 }}</idErp>
            <idInner>{{ material.id }}</idInner>
            <name>{{ material.name }}</name>
            <designation>{{ material.designation }}</designation>
            <amount>{{ material.amount }}</amount>
            <unit>
                <idErp>{{ material.amountUnitIdErp?material.amountUnitIdErp:0 }}</idErp>
                <idInner>{{ material.amountUnitId }}</idInner>
                <name>{{ material.amountUnitName }}</name>
            </unit>
            {% if material.category %}<materialCategory>
                <idInner>{{ material.categoryId }}</idInner>
                <name>{{ material.category }}</name>
            </materialCategory>
            {% endif %}
        </material>
        {% endfor %}
        </materials>
        {% else %}
        <materials>
            <material>
                <name>{{ product.name }}</name>
                <designation>{{ product.designation }}</designation>
                <amount>1</amount>
                <unit>
                    <idErp>{{ product.unit.idErp?product.unit.idErp:0 }}</idErp>
                    <idInner>{{ product.unit.id }}</idInner>
                    <name>{{ product.unit.name }}</name>
                </unit>
                <type>Заготовка</type>
                <characteristic>
                    <name>{{ codePointOld }}</name>
                </characteristic>
                {% if product.productCategory %}<materialCategory>
                    <idInner>{{ product.productCategory.id }}</idInner>
                    <name>{{ product.productCategory.name }}</name>
                </materialCategory>
                {% endif %}
            </material>
        </materials>
        {% endif %}
        <stages>
            <stage>
                <number>{{ numberStage }}</number>
                <name>{{ product.name }} {{ product.designation }}, {{ loop.last?'Изделие':'Заготовка' }} {{codePoint}}</name>
                <department>
                    <id>{{ trackPoint.id }}</id>
                    <name>{{ trackPoint.name }}</name>
                    <numberArea>{{ trackPoint.number_area }}</numberArea>
                </department>
            </stage>
        </stages>
        {% if tracks %}<tracks>
        {% for track in tracks %}{% if track.department.id == trackPoint.id  %}<track>
            <number>{{ numberTrack }}</number>
            <typeWork></typeWork>
            <timeMinutes>{{ track.timePiece }}</timeMinutes>
            <assignment>Номер операции {{ track.numberOperation?track.numberOperation:'' }}: {{ track.technologicalOperation?track.technologicalOperation.fullName:'' }}</assignment>
        </track>
        {% set numberTrack=numberTrack+1 %}
        {% endif %}{% endfor %}  
        </tracks>
        {% endif %}
    </specification>
    {% endfor %}

</root>
", "product/save_xml.html.twig", "/var/www/project/templates/product/save_xml.html.twig");
    }
}
