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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/beranda.htm */
class __TwigTemplate_79ef4ccc7cd63c7cbda17f240ee744cbd19469e485b98fb35018914df5e0860a extends \Twig\Template
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
        $context["BASEURL"] = "http://localhost/posbill_cms";
        // line 2
        echo "<header class=\"mx-auto max-w-[1800px] z-20 bg-no-repeat bg-right-top h-[1056px]\"
    style=\"background-image: url('";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-slay.svg");
        echo "')\">
    <nav class=\"container flex items-center justify-between pt-10\">
        <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\" class=\"logo-navbar\">
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo1.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item active\">
                <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\" class=\"z-[20]\">BERANDA</a>
            </li>
            <li class=\"nav-item\"><a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
        echo "\">FITUR</a></li>
            <li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
        echo "\">HARGA</a></li>
            <li class=\"nav-item dropdown\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item\">
                    <li><a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("retail");
        echo "\">Retail</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa");
        echo "\">Jasa</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("food");
        echo "\">Food & Beverage</a></li>
                </ul>
            </li>
            </li>
            <li class=\"nav-item font-medium\"><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
        echo "\">ARTIKEL</a></li>
            <li class=\" nav-item\"><a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("kontak-kami");
        echo "\">KONTAK KAMI</a></li>
            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"#\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>

    <section class=\"container lg:mt-[150px] mt-[100px] grid lg:grid-cols-2 grid-cols-1\">
        <div class=\"flex flex-col items-center lg:items-start\">
            <h1
                class=\"font-semibold text-white  mdTablet:text-black text-center lg:text-left md:text-[60px] sm:w-[565px] text-[40px] leading-tight\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "section1home_title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
            </h1>
            <div class=\"smPhone:w-[346px] mt-4 text-white tablet:text-black text-center lg:text-left\">
                ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "section1home_description", [], "any", false, false, true, 50), 50, $this->source);
        echo "
            </div>
            <a class=\"btn-gradient1 mt-4\">";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "section1home_text_btn", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</a>
        </div>
        <div class=\"flex items-center justify-center lg:justify-start mt-10 lg:mt-0\">
            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 55, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "section1home_image", [], "any", false, false, true, 55), 55, $this->source));
        echo "\" alt=\"Gambar Handphone Aplikasi Posbill\"
                class=\"lg:w-full md:w-[70%]\">
        </div>
    </section>
</header>

<main>
    <section class=\"lg:mt-0 sm:mt-52\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1\">
            <div class=\"flex items-center justify-center\">
                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 65, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "section2home_image", [], "any", false, false, true, 65), 65, $this->source));
        echo "\" alt=\"Gambar Fitur Aplikasi Postbill\"
                    class=\"lg:w-[357px] w-[80%]\">
            </div>
            <div class=\"md:-translate-x-4\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[47px] mt-10\">";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 69), "section2home_title", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        // line 70
        echo "</h2>

                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2home_2", [], "any", false, false, true, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["fitur"]) {
            // line 73
            echo "                <div class=\"fitur-posbill\">
                    <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 74, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "icon", [], "any", false, false, true, 74), 74, $this->source));
            echo "\" alt=\"Icon ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\">
                    <div>
                        <h3>";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</h3>
                        <div>
                            ";
            // line 78
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "description", [], "any", false, false, true, 78), 78, $this->source);
            echo "
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fitur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                <div class=\"flex items-center justify-end gap-2 text-primary\">
                    Selengkapnya
                    <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                </div>
            </div>
        </div>
    </section>

    <section class=\"lg:mt-[180px] mt-20\">
        <div class=\"container flex lg:flex-row flex-col  items-center justify-center xl:translate-x-[4.5rem] gap-16\">
            <div class=\"flex lg:flex-row flex-col items-center gap-5 \">
                <div class=\"flex lg:items-end items-center flex-col \">
                    <h3 class=\"font-semibold mb-[15px]\">";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 95), "section3home_title", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"lg:text-right text-center sm:w-[283px]\">
                        ";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 97), "section3home_description", [], "any", false, false, true, 97), 97, $this->source);
        echo "
                    </div>

                    <a href=\"#\"
                        class=\"block rounded-full border border-primary py-3 px-8 mt-[16px] transition hover:bg-primary hover:text-white \">
                        ";
        // line 102
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 102), "section3home_text_btn", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
                    </a>
                </div>

                <img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-r.svg");
        echo "\" alt=\"Icon Right\" class=\"lg:rotate-0 rotate-90\">
            </div>
            <div
                class=\"relative before:absolute lg:before:h-[541px] before:h-[2px] lg:before:w-[2px] before:w-[300px]  before:bg-primary lg:before:-bottom-[16rem] before:bottom-[2rem] lg:before:left-[1.7rem] before:-left-[200%] before:z-[-1]\">
                <img src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo4.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[59px]\">
            </div>
            <div class=\"flex items-center justify-center\">
                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 113, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 113), "section3home_image", [], "any", false, false, true, 113), 113, $this->source));
        echo "\" alt=\"Gambar Aplikasi Fitwell\"
                    class=\"lg:w-[441px]\">
            </div>
        </div>
    </section>


    <section class=\"lg:mt-[200px]\">
        <div class=\"container flex items-center justify-center flex-col\">
            <div class=\"text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 123), "section4home_title", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        // line 124
        echo "</h2>
                <div class=\"text-[#222222]\">";
        // line 125
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 125), "section4home_description", [], "any", false, false, true, 125), 125, $this->source);
        echo "</div>
            </div>
            <div class=\"owl-carousel mt-[50px] relative xl:w-full lg:w-[50rem]\">

                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section4home_2", [], "any", false, false, true, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 130
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 130, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 130), 130, $this->source));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">";
        // line 138
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 138), "section5home_title", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        // line 139
        echo "</h2>
                <div class=\"text-[#222222] md:w-[364px]\">
                    ";
        // line 141
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 141), "section5home_description", [], "any", false, false, true, 141), 141, $this->source);
        echo "
                </div>
            </div>

            <div class=\"grid lg:grid-cols-3 place-items-centers md:grid-cols-2 grid-cols-1 mt-[53px] lg:gap-0 gap-20\">

                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section5home_2", [], "any", false, false, true, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["solusi"]) {
            // line 148
            echo "                <div class=\"flex flex-col items-center text-center gap-4\">
                    <img src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 149, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["solusi"], "icon", [], "any", false, false, true, 149), 149, $this->source));
            echo "\" alt=\"Icon ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["solusi"], "title", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "\" class=\"w-[100px]\">
                    <h2>";
            // line 150
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["solusi"], "title", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "</h2>
                    <div class=\"md:w-[290px]\">
                        ";
            // line 152
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["solusi"], "description", [], "any", false, false, true, 152), 152, $this->source);
            echo "
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solusi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "            </div>
        </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">";
        // line 163
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 163), "section6home_title", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        // line 164
        echo "</h2>
                <div class=\"text-[#222222] md:w-[364px]\">
                    ";
        // line 166
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 166), "section6home_description", [], "any", false, false, true, 166), 166, $this->source);
        echo "
                </div>
            </div>

            <div class=\"flex md:flex-row flex-col md:items-end justify-center gap-10 mt-[50px]\">
                <div
                    class=\"md:w-[310px] h-[482px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-12\">
                    <h2 class=\"text-[16px]\">";
        // line 173
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 173), "section6home_2_card_title_1", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
        echo "</h2>
                    <!-- <h3 class=\" text-primary\">
                            <span class=\"text-[16px]\">Rp</span>
                            0
                        </h3> -->
                    <div class=\"relative flex items-center text-primary \">
                        <span class=\"text-[18px] absolute top-[10px] -left-[25px] font-medium\">Rp</span>
                        <h3 class=\"text-[70px]\">";
        // line 180
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 180), "section6home_2_card_price_1", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 183
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 183), "section6home_2_card_description_1", [], "any", false, false, true, 183), 183, $this->source);
        echo "
                    </div>
                    <a href=\"\" class=\"py-4 px-16 flex items-center justify-center bg-secondary rounded-full\">Beli</a>
                </div>
                <div
                    class=\"md:w-[428px] h-[665.47px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-12\">
                    <h2 class=\"text-[32px]\">";
        // line 189
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 189), "section6home_2_card_title_2", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
        echo "</h2>
                    <div class=\"relative flex items-center text-primary \">
                        <span class=\"text-[18px] absolute top-[10px] font-medium\">Rp</span>
                        <h3 class=\"text-[110px]\">";
        // line 192
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 192), "section6home_2_card_price_2", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
        echo "</h3>
                        <span class=\"text-[24px] pt-12\">.000</span>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 196
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 196), "section6home_2_card_description_2", [], "any", false, false, true, 196), 196, $this->source);
        echo "
                    </div>
                    <a href=\"\" class=\"py-4 px-24 flex items-center justify-center bg-secondary rounded-full\">Beli</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center \">
                <h2 class=\"text-[16px]\">";
        // line 207
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 207), "section7home_subtitle", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
        echo "</h2>
                <h2 class=\"text-[32px]  font-medium mb-[20px] \">";
        // line 208
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 208), "section7home_title", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
        echo "</h2>
                <div class=\"text-[#222222] mb-[14px]\">
                    ";
        // line 210
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 210), "section7home_description", [], "any", false, false, true, 210), 210, $this->source);
        echo "
                </div>
                <div class=\"text-[#222222] md:w-[232px]\">
                    ";
        // line 213
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 213), "section7home_description2", [], "any", false, false, true, 213), 213, $this->source);
        echo "
                </div>

                <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 216, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 216), "section7home_image1", [], "any", false, false, true, 216), 216, $this->source));
        echo "\" alt=\"\" class=\"w-[152px] my-[42px]\">
                <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 217, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 217), "section7home_image2", [], "any", false, false, true, 217), 217, $this->source));
        echo "\" alt=\"\" class=\"md:w-[975px]\">
            </div>
        </div>
    </section>
</main>

<footer class=\"mt-[100px] bg-third pt-20 pb-10\">
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
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 240
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 246
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 252
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
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/beranda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 252,  489 => 249,  483 => 246,  477 => 243,  471 => 240,  463 => 235,  441 => 217,  436 => 216,  430 => 213,  424 => 210,  419 => 208,  415 => 207,  401 => 196,  394 => 192,  388 => 189,  379 => 183,  373 => 180,  363 => 173,  353 => 166,  349 => 164,  347 => 163,  338 => 156,  328 => 152,  323 => 150,  316 => 149,  313 => 148,  309 => 147,  300 => 141,  296 => 139,  294 => 138,  286 => 132,  274 => 130,  270 => 129,  263 => 125,  260 => 124,  258 => 123,  244 => 113,  238 => 110,  231 => 106,  224 => 102,  216 => 97,  211 => 95,  197 => 83,  186 => 78,  181 => 76,  173 => 74,  170 => 73,  166 => 72,  162 => 70,  160 => 69,  152 => 65,  138 => 55,  132 => 52,  127 => 50,  121 => 47,  103 => 32,  99 => 31,  92 => 27,  88 => 26,  84 => 25,  73 => 17,  69 => 16,  64 => 14,  53 => 6,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms' %}
<header class=\"mx-auto max-w-[1800px] z-20 bg-no-repeat bg-right-top h-[1056px]\"
    style=\"background-image: url('{{ 'assets/images/bg-slay.svg'|theme }}')\">
    <nav class=\"container flex items-center justify-between pt-10\">
        <a href=\"{{ 'beranda'|page }}\" class=\"logo-navbar\">
            <img src=\"{{ 'assets/images/logo1.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[250px]\">
        </a>
        <ul
            class=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16 pt-6\">
            <li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
                <span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
            </li>
            <li class=\"nav-item active\">
                <a href=\"{{ 'beranda'|page }}\" class=\"z-[20]\">BERANDA</a>
            </li>
            <li class=\"nav-item\"><a href=\"{{ 'fitur'|page }}\">FITUR</a></li>
            <li class=\"nav-item\"><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
            <li class=\"nav-item dropdown\">
                <div class=\"flex items-center gap-2 dropdown-btn\">
                    <a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
                    <span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
                </div>

                <ul class=\"dropdown-item\">
                    <li><a href=\"{{ 'retail'|page }}\">Retail</a></li>
                    <li><a href=\"{{ 'jasa'|page }}\">Jasa</a></li>
                    <li><a href=\"{{ 'food'|page }}\">Food & Beverage</a></li>
                </ul>
            </li>
            </li>
            <li class=\"nav-item font-medium\"><a href=\"{{ 'artikel'|page }}\">ARTIKEL</a></li>
            <li class=\" nav-item\"><a href=\"{{ 'kontak-kami'|page }}\">KONTAK KAMI</a></li>
            <li class=\"lgTablet:mt-0 mt-5\">
                <a href=\"#\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
                    Login Dashboard</a>
            </li>
        </ul>
        <div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
            <span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
        </div>
    </nav>

    <section class=\"container lg:mt-[150px] mt-[100px] grid lg:grid-cols-2 grid-cols-1\">
        <div class=\"flex flex-col items-center lg:items-start\">
            <h1
                class=\"font-semibold text-white  mdTablet:text-black text-center lg:text-left md:text-[60px] sm:w-[565px] text-[40px] leading-tight\">
                {{ this.page.section1home_title }}
            </h1>
            <div class=\"smPhone:w-[346px] mt-4 text-white tablet:text-black text-center lg:text-left\">
                {{ this.page.section1home_description|raw }}
            </div>
            <a class=\"btn-gradient1 mt-4\">{{ this.page.section1home_text_btn }}</a>
        </div>
        <div class=\"flex items-center justify-center lg:justify-start mt-10 lg:mt-0\">
            <img src=\"{{ BASEURL }}{{ this.page.section1home_image|media }}\" alt=\"Gambar Handphone Aplikasi Posbill\"
                class=\"lg:w-full md:w-[70%]\">
        </div>
    </section>
</header>

<main>
    <section class=\"lg:mt-0 sm:mt-52\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1\">
            <div class=\"flex items-center justify-center\">
                <img src=\"{{ BASEURL }}{{ this.page.section2home_image|media }}\" alt=\"Gambar Fitur Aplikasi Postbill\"
                    class=\"lg:w-[357px] w-[80%]\">
            </div>
            <div class=\"md:-translate-x-4\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[47px] mt-10\">{{ this.page.section2home_title
                    }}</h2>

                {% for fitur in viewBag.section2home_2 %}
                <div class=\"fitur-posbill\">
                    <img src=\"{{ BASEURL }}{{ fitur.icon|media }}\" alt=\"Icon {{ fitur.title }}\">
                    <div>
                        <h3>{{ fitur.title }}</h3>
                        <div>
                            {{ fitur.description|raw }}
                        </div>
                    </div>
                </div>
                {% endfor %}
                <div class=\"flex items-center justify-end gap-2 text-primary\">
                    Selengkapnya
                    <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                </div>
            </div>
        </div>
    </section>

    <section class=\"lg:mt-[180px] mt-20\">
        <div class=\"container flex lg:flex-row flex-col  items-center justify-center xl:translate-x-[4.5rem] gap-16\">
            <div class=\"flex lg:flex-row flex-col items-center gap-5 \">
                <div class=\"flex lg:items-end items-center flex-col \">
                    <h3 class=\"font-semibold mb-[15px]\">{{ this.page.section3home_title }}</h3>
                    <div class=\"lg:text-right text-center sm:w-[283px]\">
                        {{ this.page.section3home_description|raw }}
                    </div>

                    <a href=\"#\"
                        class=\"block rounded-full border border-primary py-3 px-8 mt-[16px] transition hover:bg-primary hover:text-white \">
                        {{ this.page.section3home_text_btn }}
                    </a>
                </div>

                <img src=\"{{ 'assets/images/icon/icn-r.svg'|theme }}\" alt=\"Icon Right\" class=\"lg:rotate-0 rotate-90\">
            </div>
            <div
                class=\"relative before:absolute lg:before:h-[541px] before:h-[2px] lg:before:w-[2px] before:w-[300px]  before:bg-primary lg:before:-bottom-[16rem] before:bottom-[2rem] lg:before:left-[1.7rem] before:-left-[200%] before:z-[-1]\">
                <img src=\"{{'assets/images/logo4.png'|theme}}\" alt=\"Logo Posbill\" class=\"w-[59px]\">
            </div>
            <div class=\"flex items-center justify-center\">
                <img src=\"{{ BASEURL }}{{ this.page.section3home_image|media }}\" alt=\"Gambar Aplikasi Fitwell\"
                    class=\"lg:w-[441px]\">
            </div>
        </div>
    </section>


    <section class=\"lg:mt-[200px]\">
        <div class=\"container flex items-center justify-center flex-col\">
            <div class=\"text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">{{ this.page.section4home_title
                    }}</h2>
                <div class=\"text-[#222222]\">{{ this.page.section4home_description|raw }}</div>
            </div>
            <div class=\"owl-carousel mt-[50px] relative xl:w-full lg:w-[50rem]\">

                {% for card in viewBag.section4home_2 %}
                <img src=\"{{ BASEURL }}{{ card.image|media }}\" alt=\"{{ card.image }}\">
                {% endfor %}
            </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">{{ this.page.section5home_title
                    }}</h2>
                <div class=\"text-[#222222] md:w-[364px]\">
                    {{ this.page.section5home_description|raw }}
                </div>
            </div>

            <div class=\"grid lg:grid-cols-3 place-items-centers md:grid-cols-2 grid-cols-1 mt-[53px] lg:gap-0 gap-20\">

                {% for solusi in viewBag.section5home_2 %}
                <div class=\"flex flex-col items-center text-center gap-4\">
                    <img src=\"{{ BASEURL }}{{ solusi.icon|media }}\" alt=\"Icon {{ solusi.title }}\" class=\"w-[100px]\">
                    <h2>{{ solusi.title }}</h2>
                    <div class=\"md:w-[290px]\">
                        {{ solusi.description|raw }}
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center\">
                <h2 class=\"mdPhone:text-[40px] text-[35px] font-medium mb-[26px] mt-10\">{{ this.page.section6home_title
                    }}</h2>
                <div class=\"text-[#222222] md:w-[364px]\">
                    {{ this.page.section6home_description|raw }}
                </div>
            </div>

            <div class=\"flex md:flex-row flex-col md:items-end justify-center gap-10 mt-[50px]\">
                <div
                    class=\"md:w-[310px] h-[482px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-12\">
                    <h2 class=\"text-[16px]\">{{ this.page.section6home_2_card_title_1 }}</h2>
                    <!-- <h3 class=\" text-primary\">
                            <span class=\"text-[16px]\">Rp</span>
                            0
                        </h3> -->
                    <div class=\"relative flex items-center text-primary \">
                        <span class=\"text-[18px] absolute top-[10px] -left-[25px] font-medium\">Rp</span>
                        <h3 class=\"text-[70px]\">{{ this.page.section6home_2_card_price_1 }}</h3>
                    </div>
                    <div class=\"text-center\">
                        {{ this.page.section6home_2_card_description_1|raw }}
                    </div>
                    <a href=\"\" class=\"py-4 px-16 flex items-center justify-center bg-secondary rounded-full\">Beli</a>
                </div>
                <div
                    class=\"md:w-[428px] h-[665.47px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-12\">
                    <h2 class=\"text-[32px]\">{{ this.page.section6home_2_card_title_2 }}</h2>
                    <div class=\"relative flex items-center text-primary \">
                        <span class=\"text-[18px] absolute top-[10px] font-medium\">Rp</span>
                        <h3 class=\"text-[110px]\">{{ this.page.section6home_2_card_price_2 }}</h3>
                        <span class=\"text-[24px] pt-12\">.000</span>
                    </div>
                    <div class=\"text-center\">
                        {{ this.page.section6home_2_card_description_2|raw }}
                    </div>
                    <a href=\"\" class=\"py-4 px-24 flex items-center justify-center bg-secondary rounded-full\">Beli</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[100px]\">
        <div class=\"container\">
            <div class=\"flex items-center flex-col text-center \">
                <h2 class=\"text-[16px]\">{{ this.page.section7home_subtitle }}</h2>
                <h2 class=\"text-[32px]  font-medium mb-[20px] \">{{ this.page.section7home_title }}</h2>
                <div class=\"text-[#222222] mb-[14px]\">
                    {{ this.page.section7home_description|raw }}
                </div>
                <div class=\"text-[#222222] md:w-[232px]\">
                    {{ this.page.section7home_description2|raw }}
                </div>

                <img src=\"{{ BASEURL }}{{ this.page.section7home_image1|media }}\" alt=\"\" class=\"w-[152px] my-[42px]\">
                <img src=\"{{ BASEURL }}{{ this.page.section7home_image2|media }}\" alt=\"\" class=\"md:w-[975px]\">
            </div>
        </div>
    </section>
</main>

<footer class=\"mt-[100px] bg-third pt-20 pb-10\">
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
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/beranda.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 72);
        static $filters = array("theme" => 3, "page" => 5, "escape" => 47, "raw" => 50, "media" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['theme', 'page', 'escape', 'raw', 'media'],
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
