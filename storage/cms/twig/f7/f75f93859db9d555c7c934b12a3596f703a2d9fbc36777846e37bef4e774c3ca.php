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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/food.htm */
class __TwigTemplate_1a5716b5affa2c036fa4d27f3e3efacd4f36a881ff0a79cf01600c62baea31c4 extends \Twig\Template
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
        $context["BASEURL"] = "http://localhost/posbill_cms/";
        // line 2
        echo "
<header class=\"mx-auto bg-primary py-8\">
    <nav class=\"container flex items-center justify-between\">
        <a href=\"index.html\" class=\"logo-navbar\">
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo3.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item-2\">
                <a href=\"index.html\" class=\"z-[20]\">BERANDA</a>
            </li>
            <li class=\"nav-item-2\"><a href=\"fitur.html\">FITUR</a></li>
            <li class=\"nav-item-2\"><a href=\"harga.html\">HARGA</a></li>
            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"retail.html\">Retail</a></li>
                    <li><a href=\"jasa.html\">Jasa</a></li>
                    <li><a href=\"food.html\">Food & Beverage</a></li>
                </ul>
            </li>
            </li>
            <li class=\"nav-item-2 font-medium\"><a href=\"artikel.html\">ARTIKEL</a></li>
            <li class=\" nav-item-2\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"login_dashboard.html\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>
</header>

<main>
    <section class=\"bg-no-repeat bg-center bg-cover h-[644px] flex items-center text-white\"
        style=\"background-image: url(";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 46, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "section1food_background", [], "any", false, false, true, 46), 46, $this->source));
        echo ");\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 48), "section1food_subtitle", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "section1food_title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                ";
        // line 53
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 53), "section1food_description", [], "any", false, false, true, 53), 53, $this->source);
        echo "
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "section1food_text_btn", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 62, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 62), "section2food_image", [], "any", false, false, true, 62), 62, $this->source));
        echo "\" alt=\"\" class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <p class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "section2food_title", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
                </p>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">
                ";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 75), "section3food_title", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
            </h2>

            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section3food_2", [], "any", false, false, true, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 79
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "right", [], "any", false, false, true, 79) == true)) {
                // line 80
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">";
                // line 82
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"lg:text-right text-[20px]\">
                        ";
                // line 84
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 84), 84, $this->source);
                echo "
                    </div>
                </div>
                <div>
                    <img src=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 88, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 88), 88, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
            </div>
            ";
            } else {
                // line 92
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div>
                    <img src=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 94, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 94), 94, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"font-semibold text-[28px]\">";
                // line 97
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"text-[20px]\">
                        ";
                // line 99
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 99), 99, $this->source);
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            // line 104
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-12\">
        <div class=\"container\">
            <h2 class=\"text-[32px] font-semibold text-[#222222] mb-[38px]\">Artikel POSbill</h2>

            <div class=\"grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                <div>
                    <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jasa/img-ar1.png");
        echo "\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">4 Tips UMKM Pasti Bisa Berkembang</h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4\">
                            Mengenali Kompetitor Mulai cari tahu dan kenal dengan siapa competitor yang akan
                            membuatmu paham dengan kelebihan dan
                            kekurangan dari produk yang mereka tawarkan. Kelebihan yang ada pada kompetitor
                            sebaiknya kamu bisa...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
                <div>
                    <img src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jasa/img-ar2.png");
        echo "\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">Pakai 4 Tips ini Untuk Menghindari Tumpukan Pekerjaan
                    </h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4 \">
                            Fokus Yang jadi langkah pertama dalam masalah ini adalah kamu harus fokus terhadap
                            pekerjaan yang kamu lakukan. Pisahkan
                            terhadap pekerjaan yang harus kamu selesaikan terlebih dahulu dengan membuat skala
                            prioritas, dan tetap ...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
                <div>
                    <img src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jasa/img-ar3.png");
        echo "\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">4 Tips Ini di Jamin Bikin Laundry Kamu Bakal Sukses
                    </h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4\">
                            Kepercyaan Dengan Hasil Cucian Pastinya konsumen mengharapkan hasilnya cucian yang dia
                            laundry akan bersih, rapi, dan
                            juga harum. Nah dengan ini kamu harus menjaga kepercayaan konsumenmu dengan memastikan
                            cucian mereka ...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class=\"bg-third pt-20 pb-10\">
    <div class=\"container flex flex-col justify-center items-center gap-16\">
        <ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
            <li><a href=\"\">BERANDA</a></li>
            <li><a href=\"\">FITUR</a></li>
            <li><a href=\"\">SOLUSI BISNIS</a></li>
            <li><a href=\"\">HARGA</a></li>
            <li><a href=\"\">ARTIKEL</a></li>
            <li><a href=\"\">DONWLOAD APLIKASI</a></li>
            <li><a href=\"\">KEBIJAKAN PRIVASI</a></li>
        </ul>

        <img src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-ig.svg");
        echo "\" alt=\"Icon Instagram\" class=\"w-[33px]\">
                </li>
            </ul>

            <p class=\"w-[288px] text-[14px] text-white text-center mt-6\">
                © Copyright 2021, All right reserved
                PT Novatama Solusi Teknologi
            </p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/food.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 198,  322 => 195,  316 => 192,  310 => 189,  304 => 186,  296 => 181,  260 => 148,  240 => 131,  221 => 115,  210 => 106,  203 => 104,  195 => 99,  190 => 97,  183 => 94,  179 => 92,  171 => 88,  164 => 84,  159 => 82,  155 => 80,  152 => 79,  148 => 78,  142 => 75,  130 => 66,  122 => 62,  112 => 55,  107 => 53,  101 => 50,  96 => 48,  90 => 46,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms/' %}

<header class=\"mx-auto bg-primary py-8\">
    <nav class=\"container flex items-center justify-between\">
        <a href=\"index.html\" class=\"logo-navbar\">
            <img src=\"{{ 'assets/images/logo3.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item-2\">
                <a href=\"index.html\" class=\"z-[20]\">BERANDA</a>
            </li>
            <li class=\"nav-item-2\"><a href=\"fitur.html\">FITUR</a></li>
            <li class=\"nav-item-2\"><a href=\"harga.html\">HARGA</a></li>
            <li class=\"nav-item-2 dropdown active\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item shadow-lg\">
                    <li><a href=\"retail.html\">Retail</a></li>
                    <li><a href=\"jasa.html\">Jasa</a></li>
                    <li><a href=\"food.html\">Food & Beverage</a></li>
                </ul>
            </li>
            </li>
            <li class=\"nav-item-2 font-medium\"><a href=\"artikel.html\">ARTIKEL</a></li>
            <li class=\" nav-item-2\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"login_dashboard.html\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>
</header>

<main>
    <section class=\"bg-no-repeat bg-center bg-cover h-[644px] flex items-center text-white\"
        style=\"background-image: url({{ BASEURL }}{{ this.page.section1food_background|media }});\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">{{ this.page.section1food_subtitle }}</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                {{ this.page.section1food_title }}
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                {{ this.page.section1food_description|raw }}
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">{{ this.page.section1food_text_btn }}</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"{{ BASEURL }}{{ this.page.section2food_image|media }}\" alt=\"\" class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <p class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    {{ this.page.section2food_title }}
                </p>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">
                {{ this.page.section3food_title }}
            </h2>

            {% for card in viewBag.section3food_2 %}
            {% if card.right == true %}
            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">{{ card.title }}</h2>
                    <div class=\"lg:text-right text-[20px]\">
                        {{ card.description|raw }}
                    </div>
                </div>
                <div>
                    <img src=\"{{ BASEURL }}{{ card.image|media }}\" alt=\"\" class=\"rounded-md\">
                </div>
            </div>
            {% else %}
            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div>
                    <img src=\"{{ BASEURL }}{{ card.image|media }}\" alt=\"\" class=\"rounded-md\">
                </div>
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"font-semibold text-[28px]\">{{ card.title }}</h2>
                    <div class=\"text-[20px]\">
                        {{ card.description|raw }}
                    </div>
                </div>
            </div>
            {% endif %}

            {% endfor %}
        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-12\">
        <div class=\"container\">
            <h2 class=\"text-[32px] font-semibold text-[#222222] mb-[38px]\">Artikel POSbill</h2>

            <div class=\"grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                <div>
                    <img src=\"{{ 'assets/images/jasa/img-ar1.png'|theme }}\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">4 Tips UMKM Pasti Bisa Berkembang</h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4\">
                            Mengenali Kompetitor Mulai cari tahu dan kenal dengan siapa competitor yang akan
                            membuatmu paham dengan kelebihan dan
                            kekurangan dari produk yang mereka tawarkan. Kelebihan yang ada pada kompetitor
                            sebaiknya kamu bisa...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
                <div>
                    <img src=\"{{ 'assets/images/jasa/img-ar2.png'|theme }}\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">Pakai 4 Tips ini Untuk Menghindari Tumpukan Pekerjaan
                    </h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4 \">
                            Fokus Yang jadi langkah pertama dalam masalah ini adalah kamu harus fokus terhadap
                            pekerjaan yang kamu lakukan. Pisahkan
                            terhadap pekerjaan yang harus kamu selesaikan terlebih dahulu dengan membuat skala
                            prioritas, dan tetap ...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
                <div>
                    <img src=\"{{ 'assets/images/jasa/img-ar3.png'|theme }}\" alt=\"\">
                    <h3 class=\"font-medium text-[16px] mt-8\">4 Tips Ini di Jamin Bikin Laundry Kamu Bakal Sukses
                    </h3>
                    <div class=\"mt-6\">
                        <p class=\"text-[14px] mb-4\">
                            Kepercyaan Dengan Hasil Cucian Pastinya konsumen mengharapkan hasilnya cucian yang dia
                            laundry akan bersih, rapi, dan
                            juga harum. Nah dengan ini kamu harus menjaga kepercayaan konsumenmu dengan memastikan
                            cucian mereka ...
                        </p>
                        <a href=\"\" class=\"flex items-center gap-4 text-primary\">
                            Selengkapnya
                            <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class=\"bg-third pt-20 pb-10\">
    <div class=\"container flex flex-col justify-center items-center gap-16\">
        <ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
            <li><a href=\"\">BERANDA</a></li>
            <li><a href=\"\">FITUR</a></li>
            <li><a href=\"\">SOLUSI BISNIS</a></li>
            <li><a href=\"\">HARGA</a></li>
            <li><a href=\"\">ARTIKEL</a></li>
            <li><a href=\"\">DONWLOAD APLIKASI</a></li>
            <li><a href=\"\">KEBIJAKAN PRIVASI</a></li>
        </ul>

        <img src=\"{{ 'assets/images/logo2.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"{{ 'assets/images/icon/icn-fb.svg'|theme }}\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"{{ 'assets/images/icon/icn-wa.svg'|theme }}\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"{{ 'assets/images/icon/icn-yt.svg'|theme }}\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"{{ 'assets/images/icon/icn-eml.sv'|theme }}g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"{{ 'assets/images/icon/icn-ig.svg'|theme }}\" alt=\"Icon Instagram\" class=\"w-[33px]\">
                </li>
            </ul>

            <p class=\"w-[288px] text-[14px] text-white text-center mt-6\">
                © Copyright 2021, All right reserved
                PT Novatama Solusi Teknologi
            </p>
        </div>
    </div>
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/food.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 78, "if" => 79);
        static $filters = array("theme" => 6, "escape" => 46, "media" => 46, "raw" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['theme', 'escape', 'media', 'raw'],
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
