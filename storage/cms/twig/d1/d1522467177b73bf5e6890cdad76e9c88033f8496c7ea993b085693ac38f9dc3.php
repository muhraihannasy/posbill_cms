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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/fitur.htm */
class __TwigTemplate_8a14b80dd85a794159121ebf570d832cdf6d7335dbeac94cc59c7848a388b072 extends \Twig\Template
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
            <li class=\"nav-item-2 active\"><a href=\"fitur.html\">FITUR</a></li>
            <li class=\"nav-item-2\"><a href=\"harga.html\">HARGA</a></li>
            <li class=\"nav-item-2 dropdown\">
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
    <section class=\"lg:mt-[150px] mt-[100px]\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1\">
            <div class=\"text-black\">
                <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "section1fitur_title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
                </h2>
                <div class=\"mb-[31px]\">
                    ";
        // line 52
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "section1fitur_description", [], "any", false, false, true, 52), 52, $this->source);
        echo "
                </div>
                <a href=\"\" class=\"btn-gradient1\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 54), "section1fitur_text_btn", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</a>
            </div>
            <div class=\"flex items-center justify-center \">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 57, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 57), "section1fitur_image", [], "any", false, false, true, 57), 57, $this->source));
        echo "\" alt=\"Gambar Fitur Aplikasi Postbill\"
                    class=\"lg:w-[416.66px] lg:translate-x-0 mdPhone:translate-x-6 translate-x-4 lg:mt-0 mt-16\">
            </div>
        </div>
    </section>


    <section class=\"mt-[100px]\">
        <div class=\"container\">
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2fitur", [], "any", false, false, true, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["fitur"]) {
            // line 67
            echo "            <div class=\"grid grid-cols-1 lg:gap-0 gap-10 lg:grid-cols-2 mb-[108px]\">
                ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["fitur"], "right", [], "any", false, false, true, 68) == true)) {
                // line 69
                echo "                <div class=\"flex justify-center flex-col\">
                    <h3 class=\"text-[28px] mb-[20px] lg:text-right\">";
                // line 70
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</h3>
                    <div class=\"lg:text-right\">
                        ";
                // line 72
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "description", [], "any", false, false, true, 72), 72, $this->source);
                echo "
                    </div>
                </div>
                <div class=\"flex items-end justify-end\">
                    <img src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 76, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "image", [], "any", false, false, true, 76), 76, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\" class=\"lg:w-[80%]\">
                </div>
                ";
            } else {
                // line 79
                echo "                <div>
                    <img src=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 80, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "image", [], "any", false, false, true, 80), 80, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\" class=\"lg:w-[80%]\">
                </div>
                <div class=\"flex justify-center flex-col\">
                    <h3 class=\"text-[28px] mb-[20px]\">";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "</h3>
                    <div class=\"\">
                        ";
                // line 85
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["fitur"], "description", [], "any", false, false, true, 85), 85, $this->source);
                echo "
                    </div>
                </div>
                ";
            }
            // line 89
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fitur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-10 pb-[7rem]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[32px] text-[#222222]\">";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 96), "section3fitur_title", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "</h2>

            <div
                class=\"bg-primary rounded-[40px] grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 py-10 mt-[92px] lg:h-[225px] lg:gap-0 gap-10\">
                <a class=\"flex flex-col items-center text-white\" href=\"toko.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg viewBox=\"0 0 398 455\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M312.714 142.188V113.75C312.714 51.0275 261.702 0 199 0C136.297 0 85.2857 51.0275 85.2857 113.75V142.188H0V383.906C0 423.17 31.8196 455 71.0714 455H326.929C366.18 455 398 423.17 398 383.906V142.188H312.714ZM142.143 113.75C142.143 82.3888 167.649 56.875 199 56.875C230.351 56.875 255.857 82.3888 255.857 113.75V142.188H142.143V113.75ZM284.286 220.391C272.51 220.391 262.964 210.842 262.964 199.062C262.964 187.283 272.51 177.734 284.286 177.734C296.061 177.734 305.607 187.283 305.607 199.062C305.607 210.842 296.061 220.391 284.286 220.391ZM113.714 220.391C101.939 220.391 92.3929 210.842 92.3929 199.062C92.3929 187.283 101.939 177.734 113.714 177.734C125.49 177.734 135.036 187.283 135.036 199.062C135.036 210.842 125.49 220.391 113.714 220.391Z\"
                                fill=\"#ED892E\" />
                        </svg>
                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">";
        // line 109
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 109), "section3fitur_menu_title1", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">";
        // line 110
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
($context["this"] ?? null), "page", [], "any", false, false, true, 111), "section3fitur_menu_description1", [], "any", false, false, true, 111), 111, $this->source);
        // line 112
        echo "
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white\" href=\"kasir.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg width=\"405\" height=\"398\" viewBox=\"0 0 405 398\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M91.125 124.375C82.6875 124.375 75.5156 121.473 69.6094 115.669C63.7031 109.865 60.75 102.817 60.75 94.525V29.85C60.75 21.5583 63.7031 14.5104 69.6094 8.70625C75.5156 2.90208 82.6875 0 91.125 0H313.875C322.312 0 329.484 2.90208 335.391 8.70625C341.297 14.5104 344.25 21.5583 344.25 29.85V94.525C344.25 102.817 341.297 109.865 335.391 115.669C329.484 121.473 322.312 124.375 313.875 124.375H91.125ZM98.7188 94.525H306.281C308.306 94.525 310.078 93.7787 311.597 92.2862C313.116 90.7937 313.875 89.0525 313.875 87.0625V37.3125C313.875 35.3225 313.116 33.5812 311.597 32.0887C310.078 30.5962 308.306 29.85 306.281 29.85H98.7188C96.6937 29.85 94.9219 30.5962 93.4031 32.0887C91.8844 33.5812 91.125 35.3225 91.125 37.3125V87.0625C91.125 89.0525 91.8844 90.7937 93.4031 92.2862C94.9219 93.7787 96.6937 94.525 98.7188 94.525ZM30.375 398C21.9375 398 14.7656 395.098 8.85938 389.294C2.95313 383.49 0 376.442 0 368.15V333.325H405V368.15C405 376.442 402.047 383.49 396.141 389.294C390.234 395.098 383.062 398 374.625 398H30.375ZM0 318.4L73.4062 157.21C76.1062 151.572 79.8188 147.177 84.5438 144.026C89.2688 140.875 94.6687 139.3 100.744 139.3H304.256C310.331 139.3 315.731 140.875 320.456 144.026C325.181 147.177 328.894 151.572 331.594 157.21L405 318.4H0ZM131.625 278.6H151.875C154.575 278.6 156.938 277.605 158.963 275.615C160.988 273.625 162 271.303 162 268.65C162 265.997 160.988 263.675 158.963 261.685C156.938 259.695 154.575 258.7 151.875 258.7H131.625C128.925 258.7 126.562 259.695 124.537 261.685C122.512 263.675 121.5 265.997 121.5 268.65C121.5 271.303 122.512 273.625 124.537 275.615C126.562 277.605 128.925 278.6 131.625 278.6ZM131.625 238.8H151.875C154.575 238.8 156.938 237.805 158.963 235.815C160.988 233.825 162 231.503 162 228.85C162 226.197 160.988 223.875 158.963 221.885C156.938 219.895 154.575 218.9 151.875 218.9H131.625C128.925 218.9 126.562 219.895 124.537 221.885C122.512 223.875 121.5 226.197 121.5 228.85C121.5 231.503 122.512 233.825 124.537 235.815C126.562 237.805 128.925 238.8 131.625 238.8ZM131.625 199H151.875C154.575 199 156.938 198.005 158.963 196.015C160.988 194.025 162 191.703 162 189.05C162 186.397 160.988 184.075 158.963 182.085C156.938 180.095 154.575 179.1 151.875 179.1H131.625C128.925 179.1 126.562 180.095 124.537 182.085C122.512 184.075 121.5 186.397 121.5 189.05C121.5 191.703 122.512 194.025 124.537 196.015C126.562 198.005 128.925 199 131.625 199ZM192.375 278.6H212.625C215.325 278.6 217.688 277.605 219.713 275.615C221.738 273.625 222.75 271.303 222.75 268.65C222.75 265.997 221.738 263.675 219.713 261.685C217.688 259.695 215.325 258.7 212.625 258.7H192.375C189.675 258.7 187.312 259.695 185.287 261.685C183.262 263.675 182.25 265.997 182.25 268.65C182.25 271.303 183.262 273.625 185.287 275.615C187.312 277.605 189.675 278.6 192.375 278.6ZM192.375 238.8H212.625C215.325 238.8 217.688 237.805 219.713 235.815C221.738 233.825 222.75 231.503 222.75 228.85C222.75 226.197 221.738 223.875 219.713 221.885C217.688 219.895 215.325 218.9 212.625 218.9H192.375C189.675 218.9 187.312 219.895 185.287 221.885C183.262 223.875 182.25 226.197 182.25 228.85C182.25 231.503 183.262 233.825 185.287 235.815C187.312 237.805 189.675 238.8 192.375 238.8ZM192.375 199H212.625C215.325 199 217.688 198.005 219.713 196.015C221.738 194.025 222.75 191.703 222.75 189.05C222.75 186.397 221.738 184.075 219.713 182.085C217.688 180.095 215.325 179.1 212.625 179.1H192.375C189.675 179.1 187.312 180.095 185.287 182.085C183.262 184.075 182.25 186.397 182.25 189.05C182.25 191.703 183.262 194.025 185.287 196.015C187.312 198.005 189.675 199 192.375 199ZM253.125 278.6H273.375C276.075 278.6 278.438 277.605 280.462 275.615C282.488 273.625 283.5 271.303 283.5 268.65C283.5 265.997 282.488 263.675 280.462 261.685C278.438 259.695 276.075 258.7 273.375 258.7H253.125C250.425 258.7 248.062 259.695 246.037 261.685C244.012 263.675 243 265.997 243 268.65C243 271.303 244.012 273.625 246.037 275.615C248.062 277.605 250.425 278.6 253.125 278.6ZM253.125 238.8H273.375C276.075 238.8 278.438 237.805 280.462 235.815C282.488 233.825 283.5 231.503 283.5 228.85C283.5 226.197 282.488 223.875 280.462 221.885C278.438 219.895 276.075 218.9 273.375 218.9H253.125C250.425 218.9 248.062 219.895 246.037 221.885C244.012 223.875 243 226.197 243 228.85C243 231.503 244.012 233.825 246.037 235.815C248.062 237.805 250.425 238.8 253.125 238.8ZM253.125 199H273.375C276.075 199 278.438 198.005 280.462 196.015C282.488 194.025 283.5 191.703 283.5 189.05C283.5 186.397 282.488 184.075 280.462 182.085C278.438 180.095 276.075 179.1 273.375 179.1H253.125C250.425 179.1 248.062 180.095 246.037 182.085C244.012 184.075 243 186.397 243 189.05C243 191.703 244.012 194.025 246.037 196.015C248.062 198.005 250.425 199 253.125 199Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">";
        // line 126
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 126), "section3fitur_menu_title2", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 128
($context["this"] ?? null), "page", [], "any", false, false, true, 128), "section3fitur_menu_description2", [], "any", false, false, true, 128), 128, $this->source);
        // line 129
        echo "
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white lg:bg-[#FAA832] lg:h-[269px] lg:rounded-t-[40px] lg:pt-5 lg:w-[227px] lg:translate-x-[2.5rem] lg:-translate-y-[5.25rem]\"
                    href=\"dana.html\">
                    <div
                        class=\"lg:bg-[#FFC630] bg-[#922775] border-4 lg:border-[#FBE9B3] border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center lg:mt-[15px]\">
                        <svg width=\"412\" height=\"362\" viewBox=\"0 0 412 362\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M371.122 77.5714H64.375C57.2616 77.5714 51.5 71.7859 51.5 64.6429C51.5 57.4998 57.2616 51.7143 64.375 51.7143H373.375C380.488 51.7143 386.25 45.9288 386.25 38.7857C386.25 17.3647 368.957 0 347.625 0H51.5C23.0543 0 0 23.1502 0 51.7143V310.286C0 338.85 23.0543 362 51.5 362H371.122C393.669 362 412 344.603 412 323.214V116.357C412 94.9684 393.669 77.5714 371.122 77.5714ZM334.75 245.643C320.531 245.643 309 234.064 309 219.786C309 205.508 320.531 193.929 334.75 193.929C348.969 193.929 360.5 205.508 360.5 219.786C360.5 234.064 348.969 245.643 334.75 245.643Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px]\">";
        // line 144
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 144), "section3fitur_menu_title3", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">";
        // line 145
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 146
($context["this"] ?? null), "page", [], "any", false, false, true, 146), "section3fitur_menu_description3", [], "any", false, false, true, 146), 146, $this->source);
        // line 147
        echo "
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white\" href=\"managemen.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg width=\"398\" height=\"412\" viewBox=\"0 0 398 412\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M398 257.499V386.25C398 400.469 386.861 412 373.125 412H248.75C235.014 412 223.875 400.469 223.875 386.25V257.499C223.875 243.28 235.014 231.749 248.75 231.749H373.125C386.861 231.749 398 243.28 398 257.499ZM99.5 205.999C44.5496 205.999 0 252.116 0 309C0 365.883 44.5496 412 99.5 412C154.45 412 199 365.883 199 309C199 252.116 154.45 205.999 99.5 205.999ZM372.371 180.249C392.069 180.249 404.382 158.788 394.533 141.624L320.662 12.8731C310.813 -4.29102 286.187 -4.29102 276.338 12.8731L202.467 141.624C192.618 158.788 204.931 180.249 224.629 180.249H372.371Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">";
        // line 161
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 161), "section3fitur_menu_title4", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">";
        // line 162
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 163
($context["this"] ?? null), "page", [], "any", false, false, true, 163), "section3fitur_menu_description4", [], "any", false, false, true, 163), 163, $this->source);
        // line 164
        echo "
                    </div>
                </a>
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
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 204
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
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/fitur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 204,  338 => 201,  332 => 198,  326 => 195,  320 => 192,  312 => 187,  287 => 164,  285 => 163,  284 => 162,  280 => 161,  264 => 147,  262 => 146,  261 => 145,  257 => 144,  240 => 129,  238 => 128,  237 => 127,  233 => 126,  217 => 112,  215 => 111,  214 => 110,  210 => 109,  194 => 96,  187 => 91,  180 => 89,  173 => 85,  168 => 83,  159 => 80,  156 => 79,  147 => 76,  140 => 72,  135 => 70,  132 => 69,  130 => 68,  127 => 67,  123 => 66,  110 => 57,  104 => 54,  99 => 52,  93 => 49,  47 => 6,  41 => 2,  39 => 1,);
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
            <li class=\"nav-item-2 active\"><a href=\"fitur.html\">FITUR</a></li>
            <li class=\"nav-item-2\"><a href=\"harga.html\">HARGA</a></li>
            <li class=\"nav-item-2 dropdown\">
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
    <section class=\"lg:mt-[150px] mt-[100px]\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1\">
            <div class=\"text-black\">
                <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                    {{ this.page.section1fitur_title }}
                </h2>
                <div class=\"mb-[31px]\">
                    {{ this.page.section1fitur_description|raw }}
                </div>
                <a href=\"\" class=\"btn-gradient1\">{{ this.page.section1fitur_text_btn }}</a>
            </div>
            <div class=\"flex items-center justify-center \">
                <img src=\"{{ BASEURL }}{{ this.page.section1fitur_image|media }}\" alt=\"Gambar Fitur Aplikasi Postbill\"
                    class=\"lg:w-[416.66px] lg:translate-x-0 mdPhone:translate-x-6 translate-x-4 lg:mt-0 mt-16\">
            </div>
        </div>
    </section>


    <section class=\"mt-[100px]\">
        <div class=\"container\">
            {% for fitur in viewBag.section2fitur %}
            <div class=\"grid grid-cols-1 lg:gap-0 gap-10 lg:grid-cols-2 mb-[108px]\">
                {% if fitur.right == true %}
                <div class=\"flex justify-center flex-col\">
                    <h3 class=\"text-[28px] mb-[20px] lg:text-right\">{{ fitur.title }}</h3>
                    <div class=\"lg:text-right\">
                        {{ fitur.description|raw }}
                    </div>
                </div>
                <div class=\"flex items-end justify-end\">
                    <img src=\"{{ BASEURL }}{{ fitur.image|media }}\" alt=\"{{ fitur.title }}\" class=\"lg:w-[80%]\">
                </div>
                {% else %}
                <div>
                    <img src=\"{{ BASEURL }}{{ fitur.image|media }}\" alt=\"{{ fitur.title }}\" class=\"lg:w-[80%]\">
                </div>
                <div class=\"flex justify-center flex-col\">
                    <h3 class=\"text-[28px] mb-[20px]\">{{ fitur.title }}</h3>
                    <div class=\"\">
                        {{ fitur.description|raw }}
                    </div>
                </div>
                {% endif %}
            </div>
            {% endfor %}
        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-10 pb-[7rem]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[32px] text-[#222222]\">{{ this.page.section3fitur_title }}</h2>

            <div
                class=\"bg-primary rounded-[40px] grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 py-10 mt-[92px] lg:h-[225px] lg:gap-0 gap-10\">
                <a class=\"flex flex-col items-center text-white\" href=\"toko.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg viewBox=\"0 0 398 455\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M312.714 142.188V113.75C312.714 51.0275 261.702 0 199 0C136.297 0 85.2857 51.0275 85.2857 113.75V142.188H0V383.906C0 423.17 31.8196 455 71.0714 455H326.929C366.18 455 398 423.17 398 383.906V142.188H312.714ZM142.143 113.75C142.143 82.3888 167.649 56.875 199 56.875C230.351 56.875 255.857 82.3888 255.857 113.75V142.188H142.143V113.75ZM284.286 220.391C272.51 220.391 262.964 210.842 262.964 199.062C262.964 187.283 272.51 177.734 284.286 177.734C296.061 177.734 305.607 187.283 305.607 199.062C305.607 210.842 296.061 220.391 284.286 220.391ZM113.714 220.391C101.939 220.391 92.3929 210.842 92.3929 199.062C92.3929 187.283 101.939 177.734 113.714 177.734C125.49 177.734 135.036 187.283 135.036 199.062C135.036 210.842 125.49 220.391 113.714 220.391Z\"
                                fill=\"#ED892E\" />
                        </svg>
                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">{{ this.page.section3fitur_menu_title1 }}</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">{{
                        this.page.section3fitur_menu_description1|raw
                        }}
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white\" href=\"kasir.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg width=\"405\" height=\"398\" viewBox=\"0 0 405 398\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M91.125 124.375C82.6875 124.375 75.5156 121.473 69.6094 115.669C63.7031 109.865 60.75 102.817 60.75 94.525V29.85C60.75 21.5583 63.7031 14.5104 69.6094 8.70625C75.5156 2.90208 82.6875 0 91.125 0H313.875C322.312 0 329.484 2.90208 335.391 8.70625C341.297 14.5104 344.25 21.5583 344.25 29.85V94.525C344.25 102.817 341.297 109.865 335.391 115.669C329.484 121.473 322.312 124.375 313.875 124.375H91.125ZM98.7188 94.525H306.281C308.306 94.525 310.078 93.7787 311.597 92.2862C313.116 90.7937 313.875 89.0525 313.875 87.0625V37.3125C313.875 35.3225 313.116 33.5812 311.597 32.0887C310.078 30.5962 308.306 29.85 306.281 29.85H98.7188C96.6937 29.85 94.9219 30.5962 93.4031 32.0887C91.8844 33.5812 91.125 35.3225 91.125 37.3125V87.0625C91.125 89.0525 91.8844 90.7937 93.4031 92.2862C94.9219 93.7787 96.6937 94.525 98.7188 94.525ZM30.375 398C21.9375 398 14.7656 395.098 8.85938 389.294C2.95313 383.49 0 376.442 0 368.15V333.325H405V368.15C405 376.442 402.047 383.49 396.141 389.294C390.234 395.098 383.062 398 374.625 398H30.375ZM0 318.4L73.4062 157.21C76.1062 151.572 79.8188 147.177 84.5438 144.026C89.2688 140.875 94.6687 139.3 100.744 139.3H304.256C310.331 139.3 315.731 140.875 320.456 144.026C325.181 147.177 328.894 151.572 331.594 157.21L405 318.4H0ZM131.625 278.6H151.875C154.575 278.6 156.938 277.605 158.963 275.615C160.988 273.625 162 271.303 162 268.65C162 265.997 160.988 263.675 158.963 261.685C156.938 259.695 154.575 258.7 151.875 258.7H131.625C128.925 258.7 126.562 259.695 124.537 261.685C122.512 263.675 121.5 265.997 121.5 268.65C121.5 271.303 122.512 273.625 124.537 275.615C126.562 277.605 128.925 278.6 131.625 278.6ZM131.625 238.8H151.875C154.575 238.8 156.938 237.805 158.963 235.815C160.988 233.825 162 231.503 162 228.85C162 226.197 160.988 223.875 158.963 221.885C156.938 219.895 154.575 218.9 151.875 218.9H131.625C128.925 218.9 126.562 219.895 124.537 221.885C122.512 223.875 121.5 226.197 121.5 228.85C121.5 231.503 122.512 233.825 124.537 235.815C126.562 237.805 128.925 238.8 131.625 238.8ZM131.625 199H151.875C154.575 199 156.938 198.005 158.963 196.015C160.988 194.025 162 191.703 162 189.05C162 186.397 160.988 184.075 158.963 182.085C156.938 180.095 154.575 179.1 151.875 179.1H131.625C128.925 179.1 126.562 180.095 124.537 182.085C122.512 184.075 121.5 186.397 121.5 189.05C121.5 191.703 122.512 194.025 124.537 196.015C126.562 198.005 128.925 199 131.625 199ZM192.375 278.6H212.625C215.325 278.6 217.688 277.605 219.713 275.615C221.738 273.625 222.75 271.303 222.75 268.65C222.75 265.997 221.738 263.675 219.713 261.685C217.688 259.695 215.325 258.7 212.625 258.7H192.375C189.675 258.7 187.312 259.695 185.287 261.685C183.262 263.675 182.25 265.997 182.25 268.65C182.25 271.303 183.262 273.625 185.287 275.615C187.312 277.605 189.675 278.6 192.375 278.6ZM192.375 238.8H212.625C215.325 238.8 217.688 237.805 219.713 235.815C221.738 233.825 222.75 231.503 222.75 228.85C222.75 226.197 221.738 223.875 219.713 221.885C217.688 219.895 215.325 218.9 212.625 218.9H192.375C189.675 218.9 187.312 219.895 185.287 221.885C183.262 223.875 182.25 226.197 182.25 228.85C182.25 231.503 183.262 233.825 185.287 235.815C187.312 237.805 189.675 238.8 192.375 238.8ZM192.375 199H212.625C215.325 199 217.688 198.005 219.713 196.015C221.738 194.025 222.75 191.703 222.75 189.05C222.75 186.397 221.738 184.075 219.713 182.085C217.688 180.095 215.325 179.1 212.625 179.1H192.375C189.675 179.1 187.312 180.095 185.287 182.085C183.262 184.075 182.25 186.397 182.25 189.05C182.25 191.703 183.262 194.025 185.287 196.015C187.312 198.005 189.675 199 192.375 199ZM253.125 278.6H273.375C276.075 278.6 278.438 277.605 280.462 275.615C282.488 273.625 283.5 271.303 283.5 268.65C283.5 265.997 282.488 263.675 280.462 261.685C278.438 259.695 276.075 258.7 273.375 258.7H253.125C250.425 258.7 248.062 259.695 246.037 261.685C244.012 263.675 243 265.997 243 268.65C243 271.303 244.012 273.625 246.037 275.615C248.062 277.605 250.425 278.6 253.125 278.6ZM253.125 238.8H273.375C276.075 238.8 278.438 237.805 280.462 235.815C282.488 233.825 283.5 231.503 283.5 228.85C283.5 226.197 282.488 223.875 280.462 221.885C278.438 219.895 276.075 218.9 273.375 218.9H253.125C250.425 218.9 248.062 219.895 246.037 221.885C244.012 223.875 243 226.197 243 228.85C243 231.503 244.012 233.825 246.037 235.815C248.062 237.805 250.425 238.8 253.125 238.8ZM253.125 199H273.375C276.075 199 278.438 198.005 280.462 196.015C282.488 194.025 283.5 191.703 283.5 189.05C283.5 186.397 282.488 184.075 280.462 182.085C278.438 180.095 276.075 179.1 273.375 179.1H253.125C250.425 179.1 248.062 180.095 246.037 182.085C244.012 184.075 243 186.397 243 189.05C243 191.703 244.012 194.025 246.037 196.015C248.062 198.005 250.425 199 253.125 199Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">{{ this.page.section3fitur_menu_title2 }}</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">{{
                        this.page.section3fitur_menu_description2|raw
                        }}
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white lg:bg-[#FAA832] lg:h-[269px] lg:rounded-t-[40px] lg:pt-5 lg:w-[227px] lg:translate-x-[2.5rem] lg:-translate-y-[5.25rem]\"
                    href=\"dana.html\">
                    <div
                        class=\"lg:bg-[#FFC630] bg-[#922775] border-4 lg:border-[#FBE9B3] border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center lg:mt-[15px]\">
                        <svg width=\"412\" height=\"362\" viewBox=\"0 0 412 362\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M371.122 77.5714H64.375C57.2616 77.5714 51.5 71.7859 51.5 64.6429C51.5 57.4998 57.2616 51.7143 64.375 51.7143H373.375C380.488 51.7143 386.25 45.9288 386.25 38.7857C386.25 17.3647 368.957 0 347.625 0H51.5C23.0543 0 0 23.1502 0 51.7143V310.286C0 338.85 23.0543 362 51.5 362H371.122C393.669 362 412 344.603 412 323.214V116.357C412 94.9684 393.669 77.5714 371.122 77.5714ZM334.75 245.643C320.531 245.643 309 234.064 309 219.786C309 205.508 320.531 193.929 334.75 193.929C348.969 193.929 360.5 205.508 360.5 219.786C360.5 234.064 348.969 245.643 334.75 245.643Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px]\">{{ this.page.section3fitur_menu_title3 }}</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">{{
                        this.page.section3fitur_menu_description3|raw
                        }}
                    </div>
                </a>
                <a class=\"flex flex-col items-center text-white\" href=\"managemen.html\">
                    <div
                        class=\"bg-[#922775] border-4 border-secondary w-[65px] h-[65px] rounded-[18px] flex items-center justify-center\">
                        <svg width=\"398\" height=\"412\" viewBox=\"0 0 398 412\" fill=\"none\"
                            xmlns=\"http://www.w3.org/2000/svg\" class=\"w-[24px]\">
                            <path
                                d=\"M398 257.499V386.25C398 400.469 386.861 412 373.125 412H248.75C235.014 412 223.875 400.469 223.875 386.25V257.499C223.875 243.28 235.014 231.749 248.75 231.749H373.125C386.861 231.749 398 243.28 398 257.499ZM99.5 205.999C44.5496 205.999 0 252.116 0 309C0 365.883 44.5496 412 99.5 412C154.45 412 199 365.883 199 309C199 252.116 154.45 205.999 99.5 205.999ZM372.371 180.249C392.069 180.249 404.382 158.788 394.533 141.624L320.662 12.8731C310.813 -4.29102 286.187 -4.29102 276.338 12.8731L202.467 141.624C192.618 158.788 204.931 180.249 224.629 180.249H372.371Z\"
                                fill=\"#ED892E\" />
                        </svg>

                    </div>
                    <h3 class=\"text-[14px] font-medium my-[8px] \">{{ this.page.section3fitur_menu_title4 }}</h3>
                    <div class=\"text-[10px] font-light w-[120px] text-center\">{{
                        this.page.section3fitur_menu_description4|raw
                        }}
                    </div>
                </a>
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
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/fitur.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 66, "if" => 68);
        static $filters = array("theme" => 6, "escape" => 49, "raw" => 52, "media" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['theme', 'escape', 'raw', 'media'],
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
