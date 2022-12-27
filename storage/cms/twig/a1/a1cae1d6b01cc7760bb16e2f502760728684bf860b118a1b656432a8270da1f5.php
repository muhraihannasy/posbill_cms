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

/* C:\Project Novatama\posbill_cms/themes/posbill/partials/nav2.htm */
class __TwigTemplate_40a5f0ff1ca0e12bd57317bbcc10b5e2b4c4d811362ec377d0991ebd49a52f89 extends \Twig\Template
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
      <img
        src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo3.png");
        echo "\"
        alt=\"Logo Posbill\"
        class=\"w-[250px]\"
      />
    </a>
    <ul
      class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\"
    >
      <li
        class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\"
      >
        <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
      </li>
      <li class=\"nav-item-2\">
        <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\" class=\"z-[20]\">BERANDA</a>
      </li>
      ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "fitur")) {
            // line 22
            echo "      <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a></li>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["this"] ?? null), "page", [], "any", false, false, true, 23), "id", [], "any", false, false, true, 23) == "toko")) {
            // line 24
            echo "      <li class=\"nav-item-2 active\">
        <a href=\"";
            // line 25
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a> ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25) == "dana")) {
            // line 27
            echo "      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a> ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "kasir")) {
            // line 32
            echo "      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a> ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 35), "id", [], "any", false, false, true, 35) == "managemen")) {
            // line 37
            echo "      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a>

        ";
        } else {
            // line 43
            echo "      </li>

      <li class=\"nav-item-2\"><a href=\"";
            // line 45
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
            echo "\">FITUR</a></li>
      ";
        }
        // line 46
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46) == "harga")) {
            // line 47
            echo "      <li class=\"nav-item-2 active\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
            echo "\">HARGA</a></li>
      ";
        } else {
            // line 49
            echo "      <li class=\"nav-item-2\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
            echo "\">HARGA</a></li>
      ";
        }
        // line 50
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "id", [], "any", false, false, true, 50) == "retail")) {
            // line 51
            echo "      <li class=\"nav-item-2 dropdown active\">
        <div class=\"flex items-center gap-2 dropdown-btn\">
          <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
          <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
        </div>

        <ul class=\"dropdown-item shadow-lg\">
          <li><a href=\"";
            // line 58
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
          <li><a href=\"";
            // line 59
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
          <li><a href=\"";
            // line 60
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
        </ul>
      </li>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["this"] ?? null), "page", [], "any", false, false, true, 63), "id", [], "any", false, false, true, 63) == "jasa")) {
            // line 64
            echo "      <li class=\"nav-item-2 dropdown active\">
        <div class=\"flex items-center gap-2 dropdown-btn\">
          <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
          <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
        </div>

        <ul class=\"dropdown-item shadow-lg\">
          <li><a href=\"";
            // line 71
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
          <li><a href=\"";
            // line 72
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
          <li><a href=\"";
            // line 73
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
        </ul>
      </li>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["this"] ?? null), "page", [], "any", false, false, true, 76), "id", [], "any", false, false, true, 76) == "food")) {
            // line 77
            echo "      <li class=\"nav-item-2 dropdown active\">
        <div class=\"flex items-center gap-2 dropdown-btn\">
          <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
          <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
        </div>

        <ul class=\"dropdown-item shadow-lg\">
          <li><a href=\"";
            // line 84
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
          <li><a href=\"";
            // line 85
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
          <li><a href=\"";
            // line 86
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
        </ul>
      </li>
      ";
        } else {
            // line 90
            echo "      <li class=\"nav-item-2 dropdown\">
        <div class=\"flex items-center gap-2 dropdown-btn\">
          <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
          <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
        </div>

        <ul class=\"dropdown-item shadow-lg\">
          <li><a href=\"";
            // line 97
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
            echo "\">Retail</a></li>
          <li><a href=\"";
            // line 98
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
            echo "\">Jasa</a></li>
          <li><a href=\"";
            // line 99
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
            echo "\">Food & Beverage</a></li>
        </ul>
      </li>
      ";
        }
        // line 102
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 102), "id", [], "any", false, false, true, 102) == "artikel")) {
            // line 103
            echo "      <li class=\"nav-item-2 font-medium active\">
        <a href=\"";
            // line 104
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
            echo "\">ARTIKEL</a>
      </li>
      ";
        } else {
            // line 107
            echo "      <li class=\"nav-item-2 font-medium\">
        <a href=\"";
            // line 108
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
            echo "\">ARTIKEL</a>
      </li>
      ";
        }
        // line 110
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 110), "id", [], "any", false, false, true, 110) == "kontak-kami")) {
            // line 111
            echo "      <li class=\"nav-item-2 active\">
        <a href=\"";
            // line 112
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontak-kami");
            echo "\">KONTAK KAMI</a>
      </li>
      ";
        } else {
            // line 115
            echo "      <li class=\"nav-item-2\">
        <a href=\"";
            // line 116
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontak-kami");
            echo "\">KONTAK KAMI</a>
      </li>
      ";
        }
        // line 119
        echo "      <li class=\"lgTablet:mt-0 mt-5\">
        <a
          href=\"https://app.posbill.id/login\"
          class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\"
        >
          Login Dashboard</a
        >
      </li>
    </ul>
    <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
      <span
        class=\"iconify text-4xl text-white\"
        data-icon=\"fluent:list-16-filled\"
      ></span>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/partials/nav2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 119,  276 => 116,  273 => 115,  267 => 112,  264 => 111,  261 => 110,  255 => 108,  252 => 107,  246 => 104,  243 => 103,  240 => 102,  233 => 99,  229 => 98,  225 => 97,  216 => 90,  209 => 86,  205 => 85,  201 => 84,  192 => 77,  190 => 76,  184 => 73,  180 => 72,  176 => 71,  167 => 64,  165 => 63,  159 => 60,  155 => 59,  151 => 58,  142 => 51,  139 => 50,  133 => 49,  127 => 47,  124 => 46,  119 => 45,  115 => 43,  109 => 40,  104 => 37,  100 => 35,  95 => 32,  91 => 30,  86 => 27,  82 => 25,  79 => 24,  77 => 23,  72 => 22,  70 => 21,  65 => 19,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"mx-auto bg-primary py-8\">
  <nav class=\"container flex items-center justify-between\">
    <a href=\"{{ 'beranda'|page }}\" class=\"logo-navbar\">
      <img
        src=\"{{ 'assets/images/logo3.png'|theme }}\"
        alt=\"Logo Posbill\"
        class=\"w-[250px]\"
      />
    </a>
    <ul
      class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\"
    >
      <li
        class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\"
      >
        <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
      </li>
      <li class=\"nav-item-2\">
        <a href=\"{{ 'beranda'|page }}\" class=\"z-[20]\">BERANDA</a>
      </li>
      {% if this.page.id=='fitur' %}
      <li class=\"nav-item-2 active\"><a href=\"{{ 'fitur'|page }}\">FITUR</a></li>
      {% elseif this.page.id == 'toko' %}
      <li class=\"nav-item-2 active\">
        <a href=\"{{ 'fitur'|page }}\">FITUR</a> {% elseif this.page.id == 'dana'
        %}
      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"{{ 'fitur'|page }}\">FITUR</a> {% elseif this.page.id == 'kasir'
        %}
      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"{{ 'fitur'|page }}\">FITUR</a> {% elseif this.page.id ==
        'managemen' %}
      </li>

      <li class=\"nav-item-2 active\">
        <a href=\"{{ 'fitur'|page }}\">FITUR</a>

        {% else %}
      </li>

      <li class=\"nav-item-2\"><a href=\"{{ 'fitur'|page }}\">FITUR</a></li>
      {% endif %} {% if this.page.id == 'harga' %}
      <li class=\"nav-item-2 active\"><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
      {% else %}
      <li class=\"nav-item-2\"><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
      {% endif %} {% if this.page.id == 'retail'%}
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
      {% endif %} {% if this.page.id == 'artikel' %}
      <li class=\"nav-item-2 font-medium active\">
        <a href=\"{{ 'artikel'|page }}\">ARTIKEL</a>
      </li>
      {% else %}
      <li class=\"nav-item-2 font-medium\">
        <a href=\"{{ 'artikel'|page }}\">ARTIKEL</a>
      </li>
      {% endif %} {% if this.page.id == 'kontak-kami' %}
      <li class=\"nav-item-2 active\">
        <a href=\"{{ 'kontak-kami'|page }}\">KONTAK KAMI</a>
      </li>
      {% else %}
      <li class=\"nav-item-2\">
        <a href=\"{{ 'kontak-kami'|page }}\">KONTAK KAMI</a>
      </li>
      {% endif %}
      <li class=\"lgTablet:mt-0 mt-5\">
        <a
          href=\"https://app.posbill.id/login\"
          class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\"
        >
          Login Dashboard</a
        >
      </li>
    </ul>
    <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
      <span
        class=\"iconify text-4xl text-white\"
        data-icon=\"fluent:list-16-filled\"
      ></span>
    </div>
  </nav>
</header>", "C:\\Project Novatama\\posbill_cms/themes/posbill/partials/nav2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("page" => 3, "theme" => 5);
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
