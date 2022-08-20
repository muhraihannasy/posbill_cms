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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/partials/nav2.htm */
class __TwigTemplate_593daec38becdb37a1a464e18ca2bf1ec55f9199fccce2415bb42a68cc2f0e2b extends \Twig\Template
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
        echo "<header class=\"mx-auto bg-primary py-8\">
    <nav class=\"container flex items-center justify-between\">
        <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\" class=\"logo-navbar\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo3.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item-2\">
                <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\" class=\"z-[20]\">BERANDA</a>
            </li>
            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "id", [], "any", false, false, true, 14) == "fitur")) {
            // line 15
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>
            </li>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "toko")) {
            // line 18
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19) == "dana")) {
            // line 20
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "kasir")) {
            // line 22
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["this"] ?? null), "page", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23) == "managemen")) {
            // line 24
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>

                ";
        } else {
            // line 27
            echo "            <li class=\"nav-item-2\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>
            </li>
            ";
        }
        // line 30
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "harga")) {
            // line 31
            echo "            <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
            echo "\">HARGA</a></li>
            ";
        } else {
            // line 33
            echo "            <li class=\"nav-item-2\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
            echo "\">HARGA</a></li>
            ";
        }
        // line 35
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 35), "id", [], "any", false, false, true, 35) == "retail")) {
            // line 36
            echo "            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"";
            // line 43
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
                    <li><a href=\"";
            // line 44
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
                    <li><a href=\"";
            // line 45
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
                </ul>
            </li>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["this"] ?? null), "page", [], "any", false, false, true, 48), "id", [], "any", false, false, true, 48) == "jasa")) {
            // line 49
            echo "            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"";
            // line 56
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
                    <li><a href=\"";
            // line 57
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
                    <li><a href=\"";
            // line 58
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
                </ul>
            </li>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["this"] ?? null), "page", [], "any", false, false, true, 61), "id", [], "any", false, false, true, 61) == "food")) {
            // line 62
            echo "            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"";
            // line 69
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
                    <li><a href=\"";
            // line 70
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
                    <li><a href=\"";
            // line 71
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
                </ul>
            </li>
            ";
        } else {
            // line 75
            echo "            <li class=\"nav-item-2 dropdown\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"";
            // line 82
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
                    <li><a href=\"";
            // line 83
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
                    <li><a href=\"";
            // line 84
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
                </ul>
            </li>
            ";
        }
        // line 88
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 88), "id", [], "any", false, false, true, 88) == "artikel")) {
            // line 89
            echo "            <li class=\"nav-item-2 font-medium active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
            echo "\">ARTIKEL</a></li>
            ";
        } else {
            // line 91
            echo "            <li class=\"nav-item-2 font-medium\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
            echo "\">ARTIKEL</a></li>
            ";
        }
        // line 93
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 93), "id", [], "any", false, false, true, 93) == "kontak-kami")) {
            // line 94
            echo "            <li class=\" nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontak-kami");
            echo "\">KONTAK KAMI</a></li>
            ";
        } else {
            // line 96
            echo "            <li class=\" nav-item-2\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontak-kami");
            echo "\">KONTAK KAMI</a></li>
            ";
        }
        // line 98
        echo "            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"#\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/partials/nav2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 98,  248 => 96,  242 => 94,  239 => 93,  233 => 91,  227 => 89,  224 => 88,  217 => 84,  213 => 83,  209 => 82,  200 => 75,  193 => 71,  189 => 70,  185 => 69,  176 => 62,  174 => 61,  168 => 58,  164 => 57,  160 => 56,  151 => 49,  149 => 48,  143 => 45,  139 => 44,  135 => 43,  126 => 36,  123 => 35,  117 => 33,  111 => 31,  108 => 30,  101 => 27,  94 => 24,  92 => 23,  87 => 22,  85 => 21,  80 => 20,  78 => 19,  73 => 18,  71 => 17,  65 => 15,  63 => 14,  58 => 12,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"mx-auto bg-primary py-8\">
    <nav class=\"container flex items-center justify-between\">
        <a href=\"{{ 'beranda'|page }}\" class=\"logo-navbar\">
            <img src=\"{{ 'assets/images/logo3.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item-2\">
                <a href=\"{{ 'beranda'|page }}\" class=\"z-[20]\">BERANDA</a>
            </li>
            {% if this.page.id=='fitur' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>
            </li>
            {% elseif this.page.id == 'toko' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>
                {% elseif this.page.id == 'dana' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>
                {% elseif this.page.id == 'kasir' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>
                {% elseif this.page.id == 'managemen' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>

                {% else %}
            <li class=\"nav-item-2\"><a href=\"{{ 'fitur'|page }}\">FITUR</a>
            </li>
            {% endif %}
            {% if this.page.id == 'harga' %}
            <li class=\"nav-item-2 active\"><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
            {% else %}
            <li class=\"nav-item-2\"><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
            {% endif %}
            {% if this.page.id == 'retail'%}
            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"{{ 'retail'|page }}\">Retail</a></li>
                    <li><a href=\"{{ 'jasa'|page }}\">Jasa</a></li>
                    <li><a href=\"{{ 'food'|page }}\">Food & Beverage</a></li>
                </ul>
            </li>
            {% elseif this.page.id == 'jasa' %}
            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"{{ 'retail'|page }}\">Retail</a></li>
                    <li><a href=\"{{ 'jasa'|page }}\">Jasa</a></li>
                    <li><a href=\"{{ 'food'|page }}\">Food & Beverage</a></li>
                </ul>
            </li>
            {% elseif this.page.id == 'food' %}
            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"{{ 'retail'|page }}\">Retail</a></li>
                    <li><a href=\"{{ 'jasa'|page }}\">Jasa</a></li>
                    <li><a href=\"{{ 'food'|page }}\">Food & Beverage</a></li>
                </ul>
            </li>
            {% else %}
            <li class=\"nav-item-2 dropdown\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"{{ 'retail'|page }}\">Retail</a></li>
                    <li><a href=\"{{ 'jasa'|page }}\">Jasa</a></li>
                    <li><a href=\"{{ 'food'|page }}\">Food & Beverage</a></li>
                </ul>
            </li>
            {% endif %}
            {% if this.page.id == 'artikel' %}
            <li class=\"nav-item-2 font-medium active\"><a href=\"{{ 'artikel'|page }}\">ARTIKEL</a></li>
            {% else %}
            <li class=\"nav-item-2 font-medium\"><a href=\"{{ 'artikel'|page }}\">ARTIKEL</a></li>
            {% endif %}
            {% if this.page.id == 'kontak-kami' %}
            <li class=\" nav-item-2 active\"><a href=\"{{ 'kontak-kami'|page }}\">KONTAK KAMI</a></li>
            {% else %}
            <li class=\" nav-item-2\"><a href=\"{{ 'kontak-kami'|page }}\">KONTAK KAMI</a></li>
            {% endif %}
            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"#\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>
</header>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/partials/nav2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("page" => 3, "theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
