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

/* home/index.html.twig */
class __TwigTemplate_21e4fec1479d037961c4ee3005e9c636c88f6f20228b5a16dc745b84a3cae791 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.page.main"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

\t";
        // line 8
        if ((((((((((((((((isset($context["countNullStructures"]) || array_key_exists("countNullStructures", $context) ? $context["countNullStructures"] : (function () { throw new RuntimeError('Variable "countNullStructures" does not exist.', 8, $this->source); })()) || (isset($context["countNullProductsGroups"]) || array_key_exists("countNullProductsGroups", $context) ? $context["countNullProductsGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsGroups" does not exist.', 8, $this->source); })())) || (isset($context["countNullProductsKinds"]) || array_key_exists("countNullProductsKinds", $context) ? $context["countNullProductsKinds"] : (function () { throw new RuntimeError('Variable "countNullProductsKinds" does not exist.', 8, $this->source); })())) ||         // line 9
(isset($context["countNullProductsTypes"]) || array_key_exists("countNullProductsTypes", $context) ? $context["countNullProductsTypes"] : (function () { throw new RuntimeError('Variable "countNullProductsTypes" does not exist.', 9, $this->source); })())) || (isset($context["countNullProductsCategories"]) || array_key_exists("countNullProductsCategories", $context) ? $context["countNullProductsCategories"] : (function () { throw new RuntimeError('Variable "countNullProductsCategories" does not exist.', 9, $this->source); })())) || (isset($context["countNullMaterialsGroups"]) || array_key_exists("countNullMaterialsGroups", $context) ? $context["countNullMaterialsGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsGroups" does not exist.', 9, $this->source); })())) ||         // line 10
(isset($context["countNullMaterialsKinds"]) || array_key_exists("countNullMaterialsKinds", $context) ? $context["countNullMaterialsKinds"] : (function () { throw new RuntimeError('Variable "countNullMaterialsKinds" does not exist.', 10, $this->source); })())) || (isset($context["countNullMaterialsTypes"]) || array_key_exists("countNullMaterialsTypes", $context) ? $context["countNullMaterialsTypes"] : (function () { throw new RuntimeError('Variable "countNullMaterialsTypes" does not exist.', 10, $this->source); })())) || (isset($context["countNullMaterialsCategories"]) || array_key_exists("countNullMaterialsCategories", $context) ? $context["countNullMaterialsCategories"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCategories" does not exist.', 10, $this->source); })())) ||         // line 11
(isset($context["countNullProductsCalculations"]) || array_key_exists("countNullProductsCalculations", $context) ? $context["countNullProductsCalculations"] : (function () { throw new RuntimeError('Variable "countNullProductsCalculations" does not exist.', 11, $this->source); })())) || (isset($context["countNullMaterialsCalculations"]) || array_key_exists("countNullMaterialsCalculations", $context) ? $context["countNullMaterialsCalculations"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCalculations" does not exist.', 11, $this->source); })())) ||         // line 12
(isset($context["countNullProductsAnalyticGroups"]) || array_key_exists("countNullProductsAnalyticGroups", $context) ? $context["countNullProductsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsAnalyticGroups" does not exist.', 12, $this->source); })())) || (isset($context["countNullMaterialsAnalyticGroups"]) || array_key_exists("countNullMaterialsAnalyticGroups", $context) ? $context["countNullMaterialsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsAnalyticGroups" does not exist.', 12, $this->source); })())) ||         // line 13
(isset($context["countNullProductsFinanceGroups"]) || array_key_exists("countNullProductsFinanceGroups", $context) ? $context["countNullProductsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsFinanceGroups" does not exist.', 13, $this->source); })())) || (isset($context["countNullMaterialsFinanceGroups"]) || array_key_exists("countNullMaterialsFinanceGroups", $context) ? $context["countNullMaterialsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsFinanceGroups" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "\t<!-- Small boxes (Stat box) -->
    <div class=\"row\">

        ";
            // line 17
            if ((isset($context["countNullStructures"]) || array_key_exists("countNullStructures", $context) ? $context["countNullStructures"] : (function () { throw new RuntimeError('Variable "countNullStructures" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "        <div class=\"col-lg-3 col-6\">
           \t<!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["countNullStructures"]) || array_key_exists("countNullStructures", $context) ? $context["countNullStructures"] : (function () { throw new RuntimeError('Variable "countNullStructures" does not exist.', 22, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>Ошибки в спецификациях</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specification_index_error");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if ((isset($context["countNullProductsGroups"]) || array_key_exists("countNullProductsGroups", $context) ? $context["countNullProductsGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsGroups" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["countNullProductsGroups"]) || array_key_exists("countNullProductsGroups", $context) ? $context["countNullProductsGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsGroups" does not exist.', 39, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указана Группа</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 50
            echo "
        ";
            // line 51
            if ((isset($context["countNullProductsKinds"]) || array_key_exists("countNullProductsKinds", $context) ? $context["countNullProductsKinds"] : (function () { throw new RuntimeError('Variable "countNullProductsKinds" does not exist.', 51, $this->source); })())) {
                // line 52
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["countNullProductsKinds"]) || array_key_exists("countNullProductsKinds", $context) ? $context["countNullProductsKinds"] : (function () { throw new RuntimeError('Variable "countNullProductsKinds" does not exist.', 56, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указан Вид</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 67
            echo "
        ";
            // line 68
            if ((isset($context["countNullProductsTypes"]) || array_key_exists("countNullProductsTypes", $context) ? $context["countNullProductsTypes"] : (function () { throw new RuntimeError('Variable "countNullProductsTypes" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["countNullProductsTypes"]) || array_key_exists("countNullProductsTypes", $context) ? $context["countNullProductsTypes"] : (function () { throw new RuntimeError('Variable "countNullProductsTypes" does not exist.', 73, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указан Тип</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if ((isset($context["countNullProductsCategories"]) || array_key_exists("countNullProductsCategories", $context) ? $context["countNullProductsCategories"] : (function () { throw new RuntimeError('Variable "countNullProductsCategories" does not exist.', 85, $this->source); })())) {
                // line 86
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["countNullProductsCategories"]) || array_key_exists("countNullProductsCategories", $context) ? $context["countNullProductsCategories"] : (function () { throw new RuntimeError('Variable "countNullProductsCategories" does not exist.', 90, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указана Категория</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 97
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 101
            echo "
        ";
            // line 102
            if ((isset($context["countNullProductsCalculations"]) || array_key_exists("countNullProductsCalculations", $context) ? $context["countNullProductsCalculations"] : (function () { throw new RuntimeError('Variable "countNullProductsCalculations" does not exist.', 102, $this->source); })())) {
                // line 103
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["countNullProductsCalculations"]) || array_key_exists("countNullProductsCalculations", $context) ? $context["countNullProductsCalculations"] : (function () { throw new RuntimeError('Variable "countNullProductsCalculations" does not exist.', 107, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указана Калькуляция</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 114
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 118
            echo "
        ";
            // line 119
            if ((isset($context["countNullProductsAnalyticGroups"]) || array_key_exists("countNullProductsAnalyticGroups", $context) ? $context["countNullProductsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsAnalyticGroups" does not exist.', 119, $this->source); })())) {
                // line 120
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 124
                echo twig_escape_filter($this->env, (isset($context["countNullProductsAnalyticGroups"]) || array_key_exists("countNullProductsAnalyticGroups", $context) ? $context["countNullProductsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsAnalyticGroups" does not exist.', 124, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указана Группа аналит. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 131
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 135
            echo "
        ";
            // line 136
            if ((isset($context["countNullProductsFinanceGroups"]) || array_key_exists("countNullProductsFinanceGroups", $context) ? $context["countNullProductsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsFinanceGroups" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 141
                echo twig_escape_filter($this->env, (isset($context["countNullProductsFinanceGroups"]) || array_key_exists("countNullProductsFinanceGroups", $context) ? $context["countNullProductsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullProductsFinanceGroups" does not exist.', 141, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В номенклатуре не указана Группа фин. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 148
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 152
            echo "

        ";
            // line 154
            if ((isset($context["countNullMaterialsGroups"]) || array_key_exists("countNullMaterialsGroups", $context) ? $context["countNullMaterialsGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsGroups" does not exist.', 154, $this->source); })())) {
                // line 155
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 159
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsGroups"]) || array_key_exists("countNullMaterialsGroups", $context) ? $context["countNullMaterialsGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsGroups" does not exist.', 159, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указана Группа</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 166
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 170
            echo "
        ";
            // line 171
            if ((isset($context["countNullMaterialsKinds"]) || array_key_exists("countNullMaterialsKinds", $context) ? $context["countNullMaterialsKinds"] : (function () { throw new RuntimeError('Variable "countNullMaterialsKinds" does not exist.', 171, $this->source); })())) {
                // line 172
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 176
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsKinds"]) || array_key_exists("countNullMaterialsKinds", $context) ? $context["countNullMaterialsKinds"] : (function () { throw new RuntimeError('Variable "countNullMaterialsKinds" does not exist.', 176, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указан Вид</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 183
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 187
            echo "
        ";
            // line 188
            if ((isset($context["countNullMaterialsTypes"]) || array_key_exists("countNullMaterialsTypes", $context) ? $context["countNullMaterialsTypes"] : (function () { throw new RuntimeError('Variable "countNullMaterialsTypes" does not exist.', 188, $this->source); })())) {
                // line 189
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 193
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsTypes"]) || array_key_exists("countNullMaterialsTypes", $context) ? $context["countNullMaterialsTypes"] : (function () { throw new RuntimeError('Variable "countNullMaterialsTypes" does not exist.', 193, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указан Тип</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 200
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 204
            echo "
        ";
            // line 205
            if ((isset($context["countNullMaterialsCategories"]) || array_key_exists("countNullMaterialsCategories", $context) ? $context["countNullMaterialsCategories"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCategories" does not exist.', 205, $this->source); })())) {
                // line 206
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsCategories"]) || array_key_exists("countNullMaterialsCategories", $context) ? $context["countNullMaterialsCategories"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCategories" does not exist.', 210, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указана Категория</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 217
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 221
            echo "
        ";
            // line 222
            if ((isset($context["countNullMaterialsCalculations"]) || array_key_exists("countNullMaterialsCalculations", $context) ? $context["countNullMaterialsCalculations"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCalculations" does not exist.', 222, $this->source); })())) {
                // line 223
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 227
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsCalculations"]) || array_key_exists("countNullMaterialsCalculations", $context) ? $context["countNullMaterialsCalculations"] : (function () { throw new RuntimeError('Variable "countNullMaterialsCalculations" does not exist.', 227, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указана Калькуляция</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 234
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 238
            echo "

        ";
            // line 240
            if ((isset($context["countNullMaterialsAnalyticGroups"]) || array_key_exists("countNullMaterialsAnalyticGroups", $context) ? $context["countNullMaterialsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsAnalyticGroups" does not exist.', 240, $this->source); })())) {
                // line 241
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsAnalyticGroups"]) || array_key_exists("countNullMaterialsAnalyticGroups", $context) ? $context["countNullMaterialsAnalyticGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsAnalyticGroups" does not exist.', 245, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указана Группа аналит. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 252
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 256
            echo "
        ";
            // line 257
            if ((isset($context["countNullMaterialsFinanceGroups"]) || array_key_exists("countNullMaterialsFinanceGroups", $context) ? $context["countNullMaterialsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsFinanceGroups" does not exist.', 257, $this->source); })())) {
                // line 258
                echo "        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
                // line 262
                echo twig_escape_filter($this->env, (isset($context["countNullMaterialsFinanceGroups"]) || array_key_exists("countNullMaterialsFinanceGroups", $context) ? $context["countNullMaterialsFinanceGroups"] : (function () { throw new RuntimeError('Variable "countNullMaterialsFinanceGroups" does not exist.', 262, $this->source); })()), "html", null, true);
                echo " </h3>

                <p>В материалах не указана Группа фин. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"";
                // line 269
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("material_index");
                echo "\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        ";
            }
            // line 273
            echo "
        <!-- ./col -->
    </div>

";
        }
        // line 278
        echo "
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Как работать с КиТ</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id=\"accordion\">
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseOne\">
                          Полезная информация
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <p>Информация, которая может помочь при работе с программой</p>
                        <ul>
                          <li>
                            <a href=\"https://ta-aspect.by/project-materials/kalkulyaciya-sebestoimosti\">Калькуляция себестоимости продукции</a>
                          </li>
                          <li>
                            <a href=\"https://studbooks.net/1231135/buhgalterskiy_uchet_i_audit/ponyatie_klassifikatsiya_materialov\">Понятие и классификация материалов</a>
                          </li>
                          <li>
                            <a href=\"https://habr.com/ru/post/470239/\">Недовнедренная ERP-система в производстве</a>
                          </li>
                          <li>
                            <a href=\"https://lifehacker.ru/pravila-komandnoj-raboty/\">Как организовать работу</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <div id=\"accordion\">
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseTwo\">
                          Правильно разносим номенклатуру и материал Пример №1
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseTwo\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/faq/example1.png"), "html", null, true);
        echo "\" alt=\"example1\">
                      </div>
                    </div>
                  </div>
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseThree\">
                          Правильно разносим номенклатуру и материал Пример №2
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseThree\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/faq/example2.png"), "html", null, true);
        echo "\" alt=\"example2\">
                      </div>
                    </div>
                  </div>
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapse4\">
                          Правильно разносим номенклатуру и материал Пример №3
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapse4\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/faq/example3.png"), "html", null, true);
        echo "\" alt=\"example3\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 374
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 375
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 375,  644 => 374,  617 => 356,  600 => 342,  583 => 328,  531 => 278,  524 => 273,  517 => 269,  507 => 262,  501 => 258,  499 => 257,  496 => 256,  489 => 252,  479 => 245,  473 => 241,  471 => 240,  467 => 238,  460 => 234,  450 => 227,  444 => 223,  442 => 222,  439 => 221,  432 => 217,  422 => 210,  416 => 206,  414 => 205,  411 => 204,  404 => 200,  394 => 193,  388 => 189,  386 => 188,  383 => 187,  376 => 183,  366 => 176,  360 => 172,  358 => 171,  355 => 170,  348 => 166,  338 => 159,  332 => 155,  330 => 154,  326 => 152,  319 => 148,  309 => 141,  303 => 137,  301 => 136,  298 => 135,  291 => 131,  281 => 124,  275 => 120,  273 => 119,  270 => 118,  263 => 114,  253 => 107,  247 => 103,  245 => 102,  242 => 101,  235 => 97,  225 => 90,  219 => 86,  217 => 85,  214 => 84,  207 => 80,  197 => 73,  191 => 69,  189 => 68,  186 => 67,  179 => 63,  169 => 56,  163 => 52,  161 => 51,  158 => 50,  151 => 46,  141 => 39,  135 => 35,  133 => 34,  130 => 33,  123 => 29,  113 => 22,  107 => 18,  105 => 17,  100 => 14,  98 => 13,  97 => 12,  96 => 11,  95 => 10,  94 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.page.main'|trans }}{% endblock %}

{% block body %}


\t{% if countNullStructures or countNullProductsGroups or countNullProductsKinds or
      countNullProductsTypes or countNullProductsCategories or countNullMaterialsGroups or
      countNullMaterialsKinds or countNullMaterialsTypes or countNullMaterialsCategories 
      or countNullProductsCalculations or countNullMaterialsCalculations 
      or countNullProductsAnalyticGroups or countNullMaterialsAnalyticGroups
      or countNullProductsFinanceGroups or countNullMaterialsFinanceGroups %}
\t<!-- Small boxes (Stat box) -->
    <div class=\"row\">

        {% if countNullStructures %}
        <div class=\"col-lg-3 col-6\">
           \t<!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullStructures }} </h3>

                <p>Ошибки в спецификациях</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('specification_index_error') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsGroups }} </h3>

                <p>В номенклатуре не указана Группа</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsKinds %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsKinds }} </h3>

                <p>В номенклатуре не указан Вид</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsTypes %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsTypes }} </h3>

                <p>В номенклатуре не указан Тип</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsCategories %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsCategories }} </h3>

                <p>В номенклатуре не указана Категория</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsCalculations %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsCalculations }} </h3>

                <p>В номенклатуре не указана Калькуляция</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsAnalyticGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsAnalyticGroups }} </h3>

                <p>В номенклатуре не указана Группа аналит. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullProductsFinanceGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullProductsFinanceGroups }} </h3>

                <p>В номенклатуре не указана Группа фин. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('product_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}


        {% if countNullMaterialsGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsGroups }} </h3>

                <p>В материалах не указана Группа</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullMaterialsKinds %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsKinds }} </h3>

                <p>В материалах не указан Вид</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullMaterialsTypes %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsTypes }} </h3>

                <p>В материалах не указан Тип</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullMaterialsCategories %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsCategories }} </h3>

                <p>В материалах не указана Категория</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullMaterialsCalculations %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsCalculations }} </h3>

                <p>В материалах не указана Калькуляция</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}


        {% if countNullMaterialsAnalyticGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsAnalyticGroups }} </h3>

                <p>В материалах не указана Группа аналит. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        {% if countNullMaterialsFinanceGroups %}
        <div class=\"col-lg-3 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ countNullMaterialsFinanceGroups }} </h3>

                <p>В материалах не указана Группа фин. учета</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-pie-graph\"></i>
              </div>
              <a href=\"{{ path('material_index') }}\" class=\"small-box-footer\">Больше информации <i class=\"fas fa-arrow-circle-right\"></i></a>
            </div>
        </div>
        {% endif %}

        <!-- ./col -->
    </div>

{% endif %}

        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Как работать с КиТ</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id=\"accordion\">
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseOne\">
                          Полезная информация
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <p>Информация, которая может помочь при работе с программой</p>
                        <ul>
                          <li>
                            <a href=\"https://ta-aspect.by/project-materials/kalkulyaciya-sebestoimosti\">Калькуляция себестоимости продукции</a>
                          </li>
                          <li>
                            <a href=\"https://studbooks.net/1231135/buhgalterskiy_uchet_i_audit/ponyatie_klassifikatsiya_materialov\">Понятие и классификация материалов</a>
                          </li>
                          <li>
                            <a href=\"https://habr.com/ru/post/470239/\">Недовнедренная ERP-система в производстве</a>
                          </li>
                          <li>
                            <a href=\"https://lifehacker.ru/pravila-komandnoj-raboty/\">Как организовать работу</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <div id=\"accordion\">
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseTwo\">
                          Правильно разносим номенклатуру и материал Пример №1
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseTwo\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"{{ asset('dist/img/faq/example1.png') }}\" alt=\"example1\">
                      </div>
                    </div>
                  </div>
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapseThree\">
                          Правильно разносим номенклатуру и материал Пример №2
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapseThree\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"{{ asset('dist/img/faq/example2.png') }}\" alt=\"example2\">
                      </div>
                    </div>
                  </div>
                  <div class=\"card card-default\">
                    <div class=\"card-header\">
                      <h4 class=\"card-title w-100\">
                        <a class=\"d-block w-100\" data-toggle=\"collapse\" href=\"#collapse4\">
                          Правильно разносим номенклатуру и материал Пример №3
                        </a>
                      </h4>
                    </div>
                    <div id=\"collapse4\" class=\"collapse\" data-parent=\"#accordion\">
                      <div class=\"card-body\">
                        <img src=\"{{ asset('dist/img/faq/example3.png') }}\" alt=\"example3\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->


{% endblock %}

{% block javascripts %}


{% endblock %}", "home/index.html.twig", "/var/www/project/templates/home/index.html.twig");
    }
}
