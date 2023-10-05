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

/* security/login.html */
class __TwigTemplate_a3c78472ea2209be0c48d186899904db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../public/css/login.css\">
    <!-- <script type=\"text/javascript\" src=\"./public/js/login.js\" defer></script> -->

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">   
<title>Jump into Bedflix</title>
</head>

<body class=\"body-login\">
    <header class=\"header-login\">
        <!-- <img src=\"../../public/assets/img_login/bedflix.png\"> -->
        <!-- <img src=\"\"> -->
        <!-- <img class=\"adrar-classrooms-img\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img_login/bedflix.png"), "html", null, true);
        echo "\"
            alt=\"Image\" width=\"200\" height=\"150\"> -->
    </header>

    <div class=\"login-zone\">
        <!-- formulaire  
        S'identifier 
        email input 
        password input
        id button
        -->
        <form method=\"POST\" action=\"login.php\">
            <div class=\"login-title\">S'identifier</div>
            <div>

                <input type=\"email\" placeholder=\"Email\" required />
            </div>
            <div>
                <input type=\"password\" placeholder=\"Mot de passe \" required />
            </div>
            <div>
                <button class=\"login-button\">S'identifier</button>
            </div>
            <div class=\"remember\">
                <input type=\"checkbox\" id=\"remember\" name=\"remember\" checked />
                <label for=\"remember\">Se souvenir de moi</label>
                <!-- TODO : relier à la page d'aide -->
                <a href=\"\">Besoin d'aide?</a>
            </div>
            <div class=\"login-visit\">
                <div>
                    Première visite sur Netflix ?

                    <!-- Todo : relier à page inscription -->
                    <a href=\"\">Inscrivez-vous. </a>
                </div>
                <div>
                    Cette page est protégée par Google reCAPTCHA
                    pour nous assurer que vous n'êtes plus un robot.
                </div>
                <div>
                    <!-- TODO : relier à une page \"en savoir plus\" -->
                    <a href=\"\">En savoir plus </a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div>
            Des questions ? Appelez le (+33) **** - *** - ***
        </div>

        <div class=\"services\">
            <div>
                <a>FAQ</a>
                <a>Centre d'aide</a>
                <a>Boutique Netflix</a>
                <a>Conditions d'utilisation</a>
            </div>
            <div>
                <a>Confidentialité</a>
                <a>Préférences de cookies</a>
                <a>Mentions légales</a>
                <a>Choix liés à la pub</a>
            </div>
            <div class=\"language-select\">
                <label for=\"language-select\"></label>

                <select id=\"language-select\">
                    <option value=\"french\">※ Français</option>
                </select>

            </div>
        </div>
    </footer>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../public/css/login.css\">
    <!-- <script type=\"text/javascript\" src=\"./public/js/login.js\" defer></script> -->

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">   
<title>Jump into Bedflix</title>
</head>

<body class=\"body-login\">
    <header class=\"header-login\">
        <!-- <img src=\"../../public/assets/img_login/bedflix.png\"> -->
        <!-- <img src=\"\"> -->
        <!-- <img class=\"adrar-classrooms-img\" src=\"{{asset (\"assets/img_login/bedflix.png\")}}\"
            alt=\"Image\" width=\"200\" height=\"150\"> -->
    </header>

    <div class=\"login-zone\">
        <!-- formulaire  
        S'identifier 
        email input 
        password input
        id button
        -->
        <form method=\"POST\" action=\"login.php\">
            <div class=\"login-title\">S'identifier</div>
            <div>

                <input type=\"email\" placeholder=\"Email\" required />
            </div>
            <div>
                <input type=\"password\" placeholder=\"Mot de passe \" required />
            </div>
            <div>
                <button class=\"login-button\">S'identifier</button>
            </div>
            <div class=\"remember\">
                <input type=\"checkbox\" id=\"remember\" name=\"remember\" checked />
                <label for=\"remember\">Se souvenir de moi</label>
                <!-- TODO : relier à la page d'aide -->
                <a href=\"\">Besoin d'aide?</a>
            </div>
            <div class=\"login-visit\">
                <div>
                    Première visite sur Netflix ?

                    <!-- Todo : relier à page inscription -->
                    <a href=\"\">Inscrivez-vous. </a>
                </div>
                <div>
                    Cette page est protégée par Google reCAPTCHA
                    pour nous assurer que vous n'êtes plus un robot.
                </div>
                <div>
                    <!-- TODO : relier à une page \"en savoir plus\" -->
                    <a href=\"\">En savoir plus </a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div>
            Des questions ? Appelez le (+33) **** - *** - ***
        </div>

        <div class=\"services\">
            <div>
                <a>FAQ</a>
                <a>Centre d'aide</a>
                <a>Boutique Netflix</a>
                <a>Conditions d'utilisation</a>
            </div>
            <div>
                <a>Confidentialité</a>
                <a>Préférences de cookies</a>
                <a>Mentions légales</a>
                <a>Choix liés à la pub</a>
            </div>
            <div class=\"language-select\">
                <label for=\"language-select\"></label>

                <select id=\"language-select\">
                    <option value=\"french\">※ Français</option>
                </select>

            </div>
        </div>
    </footer>
</body>

</html>", "security/login.html", "C:\\Users\\Hal\\Downloads\\MontpellierAdrar\\MontpellierAdrarP5231000\\231002LunSymfony_ProjetBedflix\\Bedflix_project-Anthony\\templates\\security\\login.html");
    }
}
