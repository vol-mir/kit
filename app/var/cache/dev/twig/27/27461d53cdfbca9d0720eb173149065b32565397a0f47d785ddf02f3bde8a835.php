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

/* security/login.html.twig */
class __TwigTemplate_719d03e86f3a1ed18204c9bf3a97ad32dc4e5b4f81ddf97373e8438d90479656 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo ">
<head>
    <meta charset=\" utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>КиТ | Войти</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- iCheck -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition login-page\">

<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><b>КиТ</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Войдите, чтобы начать работу</p>

            <form method=\"post\">
                ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageKey", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageData", [], "any", false, false, false, 33), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 35
        echo "
                ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </div>
                ";
        }
        // line 41
        echo "
                <div class=\"input-group mb-3\">
                    <input type=\"text\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\"
                           class=\"form-control\" placeholder=\"Табельный номер\" required autofocus>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-user\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Пароль\"
                           required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >

                <div class=\"row\">
                    <div class=\"offset-8 col-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 84,  167 => 82,  162 => 80,  141 => 62,  119 => 43,  115 => 41,  107 => 38,  104 => 37,  102 => 36,  99 => 35,  93 => 33,  91 => 32,  80 => 24,  69 => 16,  64 => 14,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}>
<head>
    <meta charset=\" utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>КиТ | Войти</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- iCheck -->
<link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
<!-- Theme style -->
<link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition login-page\">

<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"{{ path('home') }}\"><b>КиТ</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Войдите, чтобы начать работу</p>

            <form method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                <div class=\"input-group mb-3\">
                    <input type=\"text\" value=\"{{ lastUsername }}\" name=\"username\" id=\"inputUsername\"
                           class=\"form-control\" placeholder=\"Табельный номер\" required autofocus>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-user\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Пароль\"
                           required>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >

                <div class=\"row\">
                    <div class=\"offset-8 col-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
</body>
</html>
", "security/login.html.twig", "/var/www/project/templates/security/login.html.twig");
    }
}
