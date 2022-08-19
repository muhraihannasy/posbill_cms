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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/jasa.htm */
class __TwigTemplate_ce1e499d3137c78791e5a140fce6394a3e668fea7da0aecedb6e5f44994db46e extends \Twig\Template
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
        // line 7
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
        style=\"background-image: url('";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 47, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "section1jasa_background", [], "any", false, false, true, 47), 47, $this->source));
        echo "')\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "section1jasa_subtitle", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 51), "section1jasa_title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 54), "section1jasa_description", [], "any", false, false, true, 54), 54, $this->source);
        echo "
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 56), "section1jasa_text_btn", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 63, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 63), "section2jasa_image", [], "any", false, false, true, 63), 63, $this->source));
        echo "\" alt=\"\" class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <div class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 67), "section2jasa_title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 75), "section3jasa_title", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        // line 76
        echo "
            </h2>

            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section3jasa_2", [], "any", false, false, true, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 80
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "right", [], "any", false, false, true, 80) == true)) {
                // line 81
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20  mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"lg:text-right text-[20px]\">
                        ";
                // line 85
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 85), 85, $this->source);
                echo "
                    </div>
                </div>
                <div>
                    <img src=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 89, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 89), 89, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
            </div>
            ";
            } else {
                // line 93
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div>
                    <img src=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 95, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 95), 95, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"font-semibold text-[28px]\">";
                // line 98
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"text-[20px]\">
                        ";
                // line 100
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 100), 100, $this->source);
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            // line 105
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "

        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-12\">
        <div class=\"container\">
            <h2 class=\"text-[32px] font-semibold text-[#222222] mb-[38px]\">Artikel POSbill</h2>

            <div class=\"grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                <div>
                    <img src=\"";
        // line 118
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
        // line 134
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
        // line 151
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
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 201
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
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/jasa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 201,  325 => 198,  319 => 195,  313 => 192,  307 => 189,  299 => 184,  263 => 151,  243 => 134,  224 => 118,  211 => 107,  204 => 105,  196 => 100,  191 => 98,  184 => 95,  180 => 93,  172 => 89,  165 => 85,  160 => 83,  156 => 81,  153 => 80,  149 => 79,  144 => 76,  142 => 75,  131 => 67,  123 => 63,  113 => 56,  108 => 54,  102 => 51,  97 => 49,  91 => 47,  48 => 7,  41 => 2,  39 => 1,);
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
        style=\"background-image: url('{{ BASEURL }}{{ this.page.section1jasa_background|media }}')\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">{{ this.page.section1jasa_subtitle }}</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                {{ this.page.section1jasa_title }}
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                {{ this.page.section1jasa_description|raw }}
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">{{ this.page.section1jasa_text_btn }}</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"{{ BASEURL }}{{ this.page.section2jasa_image|media }}\" alt=\"\" class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <div class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    {{ this.page.section2jasa_title }}
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">{{ this.page.section3jasa_title
                }}
            </h2>

            {% for card in viewBag.section3jasa_2 %}
            {% if card.right == true %}
            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20  mt-20\">
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
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/jasa.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 79, "if" => 80);
        static $filters = array("theme" => 7, "escape" => 47, "media" => 47, "raw" => 54);
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
