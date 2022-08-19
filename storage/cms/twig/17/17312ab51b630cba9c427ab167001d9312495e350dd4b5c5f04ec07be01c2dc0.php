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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/retail.htm */
class __TwigTemplate_19d728dc191da85b7f4a72a598d46981f2aeaacb4c6ee4db2480ac804008585c extends \Twig\Template
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
        style=\"background-image: url('";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 46, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "section1retail_background", [], "any", false, false, true, 46), 46, $this->source));
        echo "')\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 48), "section1retail_subtitle", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "section1retail_title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                ";
        // line 53
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 53), "section1retail_description", [], "any", false, false, true, 53), 53, $this->source);
        echo "
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "section1retail_text_btn", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 62, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 62), "section2retail_image", [], "any", false, false, true, 62), 62, $this->source));
        echo "\" alt=\"\"
                    class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <div class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 67), "section2retail_title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">
                ";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 76), "section3retail_title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
            </h2>

            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section3retail_2", [], "any", false, false, true, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 80
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "right", [], "any", false, false, true, 80) == true)) {
                // line 81
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"lg:text-right text-[20px] paragraf\">
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
        echo "        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-12\">
        <div class=\"container\">
            <h2 class=\"text-[32px] font-semibold text-[#222222] mb-[38px]\">Artikel POSbill</h2>

            <div class=\"grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                <div>
                    <img src=\"";
        // line 116
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
        // line 132
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
        // line 149
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

    ";
        // line 169
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 169);
        // line 170
        echo "
    <ul class=\"post-list\">
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 173
            echo "
        <li>
            <h3><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "</a></h3>
            ";
            // line 176
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 176)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 176)] ?? null) : null), "path", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
            <p class=\"info\">
                Posted
                ";
            // line 179
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 179))) {
                echo " in ";
            }
            // line 180
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 180));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 181
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 181)) {
                    echo ", ";
                }
                // line 182
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 183), 183, $this->source), "M d, Y"), "html", null, true);
            echo "
            </p>

            <p class=\"excerpt\">";
            // line 186
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 186), 186, $this->source);
            echo "</p>
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 189
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "    </ul>

    ";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 193) > 1)) {
            // line 194
            echo "    <ul class=\"pagination\">
        ";
            // line 195
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 195) > 1)) {
                // line 196
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 196), "baseFileName", [], "any", false, false, true, 196), 196, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 196) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 196) - 1)]);
                echo "\">&larr;
                Prev</a></li>
        ";
            }
            // line 199
            echo "
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 200)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 201
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 201) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 202
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 202), "baseFileName", [], "any", false, false, true, 202), 202, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 202) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 202, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "
        ";
            // line 206
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 206) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 206))) {
                // line 207
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 207), "baseFileName", [], "any", false, false, true, 207), 207, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 207) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 207) + 1)]);
                echo "\">Next
                &rarr;</a></li>
        ";
            }
            // line 210
            echo "    </ul>
    ";
        }
        // line 212
        echo "
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
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 232
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 244
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
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/retail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 244,  480 => 241,  474 => 238,  468 => 235,  462 => 232,  454 => 227,  437 => 212,  433 => 210,  426 => 207,  424 => 206,  421 => 205,  410 => 202,  405 => 201,  401 => 200,  398 => 199,  391 => 196,  389 => 195,  386 => 194,  384 => 193,  380 => 191,  371 => 189,  363 => 186,  356 => 183,  342 => 182,  333 => 181,  315 => 180,  311 => 179,  305 => 176,  299 => 175,  295 => 173,  290 => 172,  286 => 170,  284 => 169,  261 => 149,  241 => 132,  222 => 116,  211 => 107,  204 => 105,  196 => 100,  191 => 98,  184 => 95,  180 => 93,  172 => 89,  165 => 85,  160 => 83,  156 => 81,  153 => 80,  149 => 79,  143 => 76,  131 => 67,  122 => 62,  112 => 55,  107 => 53,  101 => 50,  96 => 48,  90 => 46,  47 => 6,  41 => 2,  39 => 1,);
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
        style=\"background-image: url('{{ BASEURL }}{{  this.page.section1retail_background|media }}')\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">{{ this.page.section1retail_subtitle }}</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                {{ this.page.section1retail_title }}
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                {{ this.page.section1retail_description|raw }}
            </div>
            <a href=\"\" class=\"btn-gradient2 text-[#222222]\">{{ this.page.section1retail_text_btn }}</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"{{ BASEURL }}{{ this.page.section2retail_image|media }}\" alt=\"\"
                    class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <div class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    {{ this.page.section2retail_title }}
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">
                {{ this.page.section3retail_title }}
            </h2>

            {% for card in viewBag.section3retail_2 %}
            {% if card.right == true %}
            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">{{ card.title }}</h2>
                    <div class=\"lg:text-right text-[20px] paragraf\">
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

    {% set posts = blogPosts.posts %}

    <ul class=\"post-list\">
        {% for post in posts %}

        <li>
            <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
            {{ post.featured_images[post.id].path }}
            <p class=\"info\">
                Posted
                {% if post.categories|length %} in {% endif %}
                {% for category in post.categories %}
                <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
                on {{ post.published_at|date('M d, Y') }}
            </p>

            <p class=\"excerpt\">{{ post.summary|raw }}</p>
        </li>
        {% else %}
        <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
        {% endfor %}
    </ul>

    {% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr;
                Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
        <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
            <a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
        <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next
                &rarr;</a></li>
        {% endif %}
    </ul>
    {% endif %}

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
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/retail.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 79, "if" => 80);
        static $filters = array("theme" => 6, "escape" => 46, "media" => 46, "raw" => 53, "length" => 179, "date" => 183, "page" => 196);
        static $functions = array("range" => 200);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['theme', 'escape', 'media', 'raw', 'length', 'date', 'page'],
                ['range']
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