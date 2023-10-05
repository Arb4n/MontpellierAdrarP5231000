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
class __TwigTemplate_522617cdd1548be606f63f93b92ed3a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link
\thref=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">

\t";
        // line 13
        echo "

\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login to the Bedflix
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "\t<style>
\t\tbody {
\t\t\tbackground-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.6)), 
            url(\"https: //assets.nflxext.com/ffe/siteui/vlv3/9db4a880-3034-4e98-bdea-5d983e86bf52/e51f7928-e078-4d74-95ef-15815021f579/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"), 
url(\"public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\");

\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;
\t\t\t/* object-fit: cover; */
\t\t\tbackground-size: cover;

            
\t\t}
\t</style>
\t<header class=\"header-login\">
\t\t";
        // line 41
        echo "\t\t<!-- <img src=\"\"> -->
\t<img class=\"adrar-classrooms-img\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img_login/bedflix.png"), "html", null, true);
        echo "\" alt=\"Image\" width=\"200\" height=\"150\"> </header>

\t<form method=\"POST\" action=\"login.php\">

\t\t";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 49
        echo "
\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as
\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "userIdentifier", [], "any", false, false, false, 53), "html", null, true);
            echo ",
\t\t\t\t<a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "
\t\t";
        // line 72
        echo "
\t\t<div
\t\t\tclass=\"login-zone\">
\t\t\t<!-- formulaire  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        S'identifier 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        email input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        password input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        id button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        -->
\t\t\t<form method=\"POST\" action=\"login.php\">
\t\t\t\t<div class=\"login-title\">S'identifier</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" required>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"login-button\">S'identifier</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"remember\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\" name=\"remember\" checked/>
\t\t\t\t\t<label for=\"remember\">Se souvenir de moi</label>
\t\t\t\t\t<!-- TODO : relier à la page d'aide -->
\t\t\t\t\t<a href=\"\">Besoin d'aide?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-visit\">
\t\t\t\t\t<div>
\t\t\t\t\t\tPremière visite sur Netflix ?

\t\t\t\t\t\t<!-- Todo : relier à page inscription -->
\t\t\t\t\t\t<a href=\"\">Inscrivez-vous.
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\tCette page est protégée par Google reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pour nous assurer que vous n'êtes plus un robot.
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<!-- TODO : relier à une page \"en savoir plus\" -->
\t\t\t\t\t\t<a href=\"\">En savoir plus
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<footer>
\t\t\t<div>
\t\t\t\tDes questions ? Appelez le (+33) **** - *** - ***
\t\t\t</div>

\t\t\t<div class=\"services\">
\t\t\t\t<div>
\t\t\t\t\t<a>FAQ</a>
\t\t\t\t\t<a>Centre d'aide</a>
\t\t\t\t\t<a>Boutique Netflix</a>
\t\t\t\t\t<a>Conditions d'utilisation</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a>Confidentialité</a>
\t\t\t\t\t<a>Préférences de cookies</a>
\t\t\t\t\t<a>Mentions légales</a>
\t\t\t\t\t<a>Choix liés à la pub</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"language-select\">
\t\t\t\t\t<label for=\"language-select\"></label>

\t\t\t\t\t<select id=\"language-select\">
\t\t\t\t\t\t<option value=\"french\">※ Français</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  198 => 85,  183 => 72,  180 => 57,  174 => 54,  170 => 53,  166 => 51,  164 => 50,  161 => 49,  155 => 47,  153 => 46,  146 => 42,  143 => 41,  126 => 25,  116 => 24,  96 => 21,  82 => 15,  78 => 13,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{# CSS>>> #}
{% block stylesheets %}

\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link
\thref=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">

\t{# <link rel=\"stylesheet\" href=\"{{asset ('css/login.css')}}\"> #}


\t<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">


{% endblock %}


{% block title %}Login to the Bedflix
{% endblock %}

{% block body %}
\t<style>
\t\tbody {
\t\t\tbackground-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.6)), 
            url(\"https: //assets.nflxext.com/ffe/siteui/vlv3/9db4a880-3034-4e98-bdea-5d983e86bf52/e51f7928-e078-4d74-95ef-15815021f579/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"), 
url(\"public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\");

\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;
\t\t\t/* object-fit: cover; */
\t\t\tbackground-size: cover;

            
\t\t}
\t</style>
\t<header class=\"header-login\">
\t\t{# <img src=\"../../public/assets/img_login/bedflix.png\"> #}
\t\t<!-- <img src=\"\"> -->
\t<img class=\"adrar-classrooms-img\" src=\"{{asset (\"assets/img_login/bedflix.png\")}}\" alt=\"Image\" width=\"200\" height=\"150\"> </header>

\t<form method=\"POST\" action=\"login.php\">

\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}

\t\t{% if app.user %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as
\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t</div>
\t\t{% endif %}

\t\t{# <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"  required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t           value=\"{{ csrf_token('authenticate') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Connexion
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form> #}

\t\t<div
\t\t\tclass=\"login-zone\">
\t\t\t<!-- formulaire  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        S'identifier 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        email input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        password input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        id button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        -->
\t\t\t<form method=\"POST\" action=\"login.php\">
\t\t\t\t<div class=\"login-title\">S'identifier</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" required>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"login-button\">S'identifier</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"remember\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\" name=\"remember\" checked/>
\t\t\t\t\t<label for=\"remember\">Se souvenir de moi</label>
\t\t\t\t\t<!-- TODO : relier à la page d'aide -->
\t\t\t\t\t<a href=\"\">Besoin d'aide?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-visit\">
\t\t\t\t\t<div>
\t\t\t\t\t\tPremière visite sur Netflix ?

\t\t\t\t\t\t<!-- Todo : relier à page inscription -->
\t\t\t\t\t\t<a href=\"\">Inscrivez-vous.
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\tCette page est protégée par Google reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pour nous assurer que vous n'êtes plus un robot.
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<!-- TODO : relier à une page \"en savoir plus\" -->
\t\t\t\t\t\t<a href=\"\">En savoir plus
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<footer>
\t\t\t<div>
\t\t\t\tDes questions ? Appelez le (+33) **** - *** - ***
\t\t\t</div>

\t\t\t<div class=\"services\">
\t\t\t\t<div>
\t\t\t\t\t<a>FAQ</a>
\t\t\t\t\t<a>Centre d'aide</a>
\t\t\t\t\t<a>Boutique Netflix</a>
\t\t\t\t\t<a>Conditions d'utilisation</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a>Confidentialité</a>
\t\t\t\t\t<a>Préférences de cookies</a>
\t\t\t\t\t<a>Mentions légales</a>
\t\t\t\t\t<a>Choix liés à la pub</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"language-select\">
\t\t\t\t\t<label for=\"language-select\"></label>

\t\t\t\t\t<select id=\"language-select\">
\t\t\t\t\t\t<option value=\"french\">※ Français</option>
\t\t\t\t\t</select>

\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t{% endblock %}
", "security/login.html.twig", "C:\\Users\\Hal\\Downloads\\MontpellierAdrar\\MontpellierAdrarP5231000\\231002LunSymfony_ProjetBedflix\\Bedflix_project-Anthony\\templates\\security\\login.html.twig");
    }
}
