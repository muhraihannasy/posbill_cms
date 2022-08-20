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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/layouts/default.htm */
class __TwigTemplate_fc2eb60191ba70d2984b12b18b7d2e5f9adc1e4f589cfd29e9d41d3c79eb8f80 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Owl Carousel -->
    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\" rel=\"stylesheet\">


    <!-- Custom CSS -->
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/output.css");
        echo "\" rel=\"stylesheet\">
</head>

<body>

    <main>
        ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "    </main>

    <!-- Jquery -->
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script> -->
    <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    ";
        // line 26
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 27
        echo "
    <script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>


    <!-- Iconify -->
    <script src=\"https://code.iconify.design/2/2.2.1/iconify.min.js\"></script>

    <!-- Custom JS -->
    <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
    <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/carousel.js");
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  105 => 35,  95 => 28,  92 => 27,  81 => 26,  77 => 25,  70 => 20,  68 => 19,  59 => 13,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Owl Carousel -->
    <link href=\"{{ 'assets/css/owl.carousel.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/owl.theme.default.min.css'|theme }}\" rel=\"stylesheet\">


    <!-- Custom CSS -->
    <link href=\"{{ 'assets/css/output.css'|theme }}\" rel=\"stylesheet\">
</head>

<body>

    <main>
        {% page %}
    </main>

    <!-- Jquery -->
    <!-- <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script> -->
    <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    {% framework extras %}

    <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>


    <!-- Iconify -->
    <script src=\"https://code.iconify.design/2/2.2.1/iconify.min.js\"></script>

    <!-- Custom JS -->
    <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/carousel.js'|theme }}\"></script>
</body>

</html>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 19, "framework" => 26);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page', 'framework'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
