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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/kontak-kami.htm */
class __TwigTemplate_014b6bddeb7be37ebab5a3b8a19e04bd655b8a99f5b07cc1ec3779b97ed7fa0a extends \Twig\Template
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

<header class=\"mx-auto bg-[#99125A] py-8\">
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
            <li class=\" nav-item-2 active\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
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
    <section class=\"bg-[#A71A65] lg:h-[500px] flex items-center text-white lg:pt-0 pt-[100px] pb-[50px]\">
        <div class=\"container bg-\">
            <div class=\"lg:pt-20\">
                <h2 class=\"font-semibold text-[36px] mb-[24px]\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "section1contact_title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</h2>
                <div class=\"mb-[31px] lg:w-[591px] text-[24px] font-light\">
                    ";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 51), "section1contact_description", [], "any", false, false, true, 51), 51, $this->source);
        echo "
                </div>
            </div>

            <div class=\"flex items-center gap-3 lg:translate-y-[6rem]\">
                <a href=\"\">
                    <svg width=\"36\" height=\"36\" viewBox=\"0 0 36 36\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M0 17.9012C0 26.7517 6.42795 34.1113 14.8349 35.6037V22.7463H10.3844V17.8018H14.8349V13.8454C14.8349 9.39492 17.7024 6.92343 21.7583 6.92343C23.043 6.92343 24.4286 7.12074 25.7133 7.31804V11.8679H23.4391C21.2628 11.8679 20.7688 12.9553 20.7688 14.3409V17.8018H25.516L24.7253 22.7463H20.7688V35.6037C29.1757 34.1113 35.6037 26.7532 35.6037 17.9012C35.6037 8.05534 27.5929 0 17.8018 0C8.01083 0 0 8.05534 0 17.9012Z\"
                            fill=\"#FFB1DB\" />
                    </svg></a>
                <a href=\"\">
                    <svg width=\"34\" height=\"33\" viewBox=\"0 0 34 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M31.1342 7.63072C26.198 -0.000252252 16.12 -2.26892 8.30439 2.47466C0.69445 7.21823 -1.77364 17.5304 3.16254 25.1613L3.57389 25.7801L1.9285 31.9673L8.09872 30.3174L8.71574 30.7299C11.3895 32.1736 14.2689 32.9985 17.1484 32.9985C20.2335 32.9985 23.3186 32.1736 25.9924 30.5236C33.6023 25.5738 35.8647 15.4679 31.1342 7.63072ZM26.8151 23.5114C25.9924 24.7488 24.964 25.5738 23.5243 25.7801C22.7016 25.7801 21.6732 26.1925 17.5597 24.5426C14.0633 22.8927 11.1838 20.2115 9.12709 17.1179C7.89304 15.6742 7.27602 13.818 7.07035 11.9618C7.07035 10.3119 7.68737 8.86817 8.71574 7.83696C9.12709 7.42448 9.53844 7.21823 9.94978 7.21823H10.9782C11.3895 7.21823 11.8009 7.21823 12.0065 8.0432C12.4179 9.07442 13.4462 11.5493 13.4462 11.7556C13.6519 11.9618 13.6519 12.3743 13.4462 12.5805C13.6519 12.993 13.4462 13.4055 13.2406 13.6117C13.0349 13.818 12.8292 14.2305 12.6235 14.4367C12.2122 14.643 12.0065 15.0554 12.2122 15.4679C13.0349 16.7054 14.0633 17.9428 15.0916 18.9741C16.3257 20.0053 17.5597 20.8302 18.9994 21.449C19.4108 21.6552 19.8221 21.6552 20.0278 21.2427C20.2335 20.8302 21.2619 19.799 21.6732 19.3865C22.0846 18.9741 22.2902 18.9741 22.7016 19.1803L25.9924 20.8302C26.4037 21.0365 26.8151 21.2427 27.0207 21.449C27.2264 22.0677 27.2264 22.8927 26.8151 23.5114Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"47\" height=\"33\" viewBox=\"0 0 47 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M45.6651 5.16315C45.1358 3.13082 43.5762 1.53022 41.5961 0.987034C38.0069 0 23.6147 0 23.6147 0C23.6147 0 9.22256 0 5.63329 0.987034C3.65313 1.53031 2.09358 3.13082 1.56426 5.16315C0.602539 8.84687 0.602539 16.5326 0.602539 16.5326C0.602539 16.5326 0.602539 24.2183 1.56426 27.9021C2.09358 29.9344 3.65313 31.4683 5.63329 32.0115C9.22256 32.9985 23.6147 32.9985 23.6147 32.9985C23.6147 32.9985 38.0068 32.9985 41.5961 32.0115C43.5762 31.4683 45.1358 29.9344 45.6651 27.9021C46.6268 24.2183 46.6268 16.5326 46.6268 16.5326C46.6268 16.5326 46.6268 8.84687 45.6651 5.16315ZM18.9076 23.5107V9.55454L30.9366 16.5328L18.9076 23.5107Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"39\" height=\"32\" viewBox=\"0 0 39 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M6.96029 0C5.28058 0 3.66967 0.674284 2.48194 1.87452C1.29421 3.07475 0.626953 4.70261 0.626953 6.4V7.0432L19.627 17.3824L38.627 7.0464V6.4C38.627 4.70261 37.9597 3.07475 36.772 1.87452C35.5842 0.674284 33.9733 0 32.2936 0H6.96029ZM38.627 10.6784L20.3775 20.608C20.1468 20.7335 19.8889 20.7992 19.627 20.7992C19.365 20.7992 19.1071 20.7335 18.8765 20.608L0.626953 10.6784V25.6C0.626953 27.2974 1.29421 28.9252 2.48194 30.1255C3.66967 31.3257 5.28058 32 6.96029 32H32.2936C33.9733 32 35.5842 31.3257 36.772 30.1255C37.9597 28.9252 38.627 27.2974 38.627 25.6V10.6784Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"34\" height=\"33\" viewBox=\"0 0 34 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M17.1218 10.9972C14.0922 10.9972 11.6198 13.4696 11.6198 16.4993C11.6198 19.5289 14.0922 22.0014 17.1218 22.0014C20.1514 22.0014 22.6238 19.5289 22.6238 16.4993C22.6238 13.4696 20.1514 10.9972 17.1218 10.9972ZM33.6236 16.4993C33.6236 14.2208 33.6443 11.963 33.5163 9.68872C33.3884 7.04705 32.7858 4.70257 30.8541 2.77085C28.9183 0.835004 26.578 0.236501 23.9363 0.108545C21.6579 -0.0194104 19.4002 0.00122773 17.1259 0.00122773C14.8475 0.00122773 12.5898 -0.0194104 10.3155 0.108545C7.67387 0.236501 5.32944 0.839131 3.39775 2.77085C1.46194 4.7067 0.86345 7.04705 0.735497 9.68872C0.607543 11.9672 0.628181 14.225 0.628181 16.4993C0.628181 18.7736 0.607543 21.0355 0.735497 23.3098C0.86345 25.9515 1.46607 28.296 3.39775 30.2277C5.33356 32.1635 7.67387 32.762 10.3155 32.89C12.5939 33.0179 14.8516 32.9973 17.1259 32.9973C19.4043 32.9973 21.6621 33.0179 23.9363 32.89C26.578 32.762 28.9224 32.1594 30.8541 30.2277C32.7899 28.2918 33.3884 25.9515 33.5163 23.3098C33.6484 21.0355 33.6236 18.7777 33.6236 16.4993ZM17.1218 24.965C12.437 24.965 8.65622 21.1841 8.65622 16.4993C8.65622 11.8144 12.437 8.03355 17.1218 8.03355C21.8065 8.03355 25.5873 11.8144 25.5873 16.4993C25.5873 21.1841 21.8065 24.965 17.1218 24.965ZM25.9341 9.66395C24.8403 9.66395 23.957 8.78064 23.957 7.68683C23.957 6.59301 24.8403 5.70971 25.9341 5.70971C27.0279 5.70971 27.9111 6.59301 27.9111 7.68683C27.9115 7.94656 27.8606 8.2038 27.7613 8.44383C27.6621 8.68385 27.5165 8.90194 27.3328 9.08559C27.1491 9.26925 26.9311 9.41487 26.691 9.51412C26.451 9.61336 26.1938 9.66428 25.9341 9.66395Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class=\"mt-[20px]\">
        <div class=\"container flex lg:flex-row flex-col gap-32\">
            <div>
                <h2 class=\"w-[235px] text-[24px] font-semibold text-[#222222] mb-10 my-8\">
                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 98), "section2contact_title", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
                </h2>

                <div class=\"lg:w-[239px] flex flex-col gap-8\">
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2contact_2", [], "any", false, false, true, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 103
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 103, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 103), 103, $this->source));
            echo "\" alt=\"\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </div>
            </div>
            <div class=\" bg-white rounded-xl shadow-lg overflow-hidden lg:-translate-y-[11.7rem]\">
                <div
                    class=\"flex md:flex-row flex-col items-center justify-between gap-10 bg-[#F2F2F2] py-10 md:px-10 px-6\">
                    <img src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-c.png");
        echo "\" alt=\"\" class=\"w-[91px]\">
                    <div class=\"text-[16px] font-medium\">
                        ";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 112), "section2contact_description", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"grid lg:grid-cols-2 grid-cols-1 md:px-10 px-6 gap-5 mt-10\">
                    <input type=\"text\" name=\"nama\" placeholder=\"Nama\" id=\"nama\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"email\" name=\"email\" placeholder=\"Email\" id=\"email\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"number\" name=\"phone\" placeholder=\"No Telepon\" id=\"phone\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"text\" name=\"alamat\" placeholder=\"Alamat\" id=\"alamat\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686] \">
                </div>

                <div class=\"md:px-10 px-6 mt-16\">
                    <h2 class=\"font-semibold text-[#222222] text-[24px] mb-[26px]\">Optional</h2>
                    <textarea name=\"detail\" id=\"detail\"
                        class=\"w-full h-[313px] bg-[#EBEBEB] rounded-md pt-4 pl-6 focus:outline-none text-[#868686]\"
                        placeholder=\"Detail\"></textarea>
                    <div
                        class=\"relative w-full bg-[#EBEBEB] rounded-md h-[102px]  focus:outline-none text-[#868686] mt-6 flex items-center justify-center \">
                        <input type=\"file\"
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md opacity-0 z-30 cursor-pointer\"
                            id=\"file_report\">
                        <div
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md absolute flex items-center justify-center cursor-pointer\">
                            <h5 class=\"sm:text-[16px] text-[10px] font-medium sm:translate-x-0 translate-x-[2rem] cursor-pointer\"
                                id=\"name_file\">Tempel gambar
                                disini
                            </h5>
                            <img src=\" ./assets/images/contact/icn-file.png\" alt=\"\"
                                class=\"absolute w-[4.5rem] sm:left-[-0.4rem] left-[-0.15rem] cursor-pointer\">
                        </div>

                    </div>
                    <button
                        class=\"bg-primary w-full flex items-center justify-center py-4 mt-[49px] mb-10 rounded-md text-white transition hover:bg-secondary\">Kirim</button>
                </div>
            </div>
        </div>
        <div class=\"container flex flex-col text-center justify-center items-center lg:mt-0 mt-10\">
            <div class=\"font-semibold\">
                <h2 class=\"mb-5 text-[24px]\">";
        // line 155
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 155), "section2contact_subtitle", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "</h2>
                <iframe src=\"https://www.youtube.com/embed/9vWMjHRsB-c\"
                    class=\"rounded-xl lg:w-[875px] lg:h-[492px] w-[100%] \" title=\"YouTube video player\" frameborder=\"0\"
                    allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                    allowfullscreen></iframe>
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
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <img src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                </li>
                <li>
                    <img src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
                </li>
                <li>
                    <img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                </li>
                <li>
                    <img src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                </li>
                <li>
                    <img src=\"";
        // line 194
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
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/kontak-kami.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 194,  278 => 191,  272 => 188,  266 => 185,  260 => 182,  252 => 177,  227 => 155,  181 => 112,  176 => 110,  169 => 105,  159 => 103,  155 => 102,  148 => 98,  98 => 51,  93 => 49,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms/' %}


<header class=\"mx-auto bg-[#99125A] py-8\">
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
            <li class=\" nav-item-2 active\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
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
    <section class=\"bg-[#A71A65] lg:h-[500px] flex items-center text-white lg:pt-0 pt-[100px] pb-[50px]\">
        <div class=\"container bg-\">
            <div class=\"lg:pt-20\">
                <h2 class=\"font-semibold text-[36px] mb-[24px]\">{{ this.page.section1contact_title }}</h2>
                <div class=\"mb-[31px] lg:w-[591px] text-[24px] font-light\">
                    {{ this.page.section1contact_description|raw }}
                </div>
            </div>

            <div class=\"flex items-center gap-3 lg:translate-y-[6rem]\">
                <a href=\"\">
                    <svg width=\"36\" height=\"36\" viewBox=\"0 0 36 36\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                            d=\"M0 17.9012C0 26.7517 6.42795 34.1113 14.8349 35.6037V22.7463H10.3844V17.8018H14.8349V13.8454C14.8349 9.39492 17.7024 6.92343 21.7583 6.92343C23.043 6.92343 24.4286 7.12074 25.7133 7.31804V11.8679H23.4391C21.2628 11.8679 20.7688 12.9553 20.7688 14.3409V17.8018H25.516L24.7253 22.7463H20.7688V35.6037C29.1757 34.1113 35.6037 26.7532 35.6037 17.9012C35.6037 8.05534 27.5929 0 17.8018 0C8.01083 0 0 8.05534 0 17.9012Z\"
                            fill=\"#FFB1DB\" />
                    </svg></a>
                <a href=\"\">
                    <svg width=\"34\" height=\"33\" viewBox=\"0 0 34 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M31.1342 7.63072C26.198 -0.000252252 16.12 -2.26892 8.30439 2.47466C0.69445 7.21823 -1.77364 17.5304 3.16254 25.1613L3.57389 25.7801L1.9285 31.9673L8.09872 30.3174L8.71574 30.7299C11.3895 32.1736 14.2689 32.9985 17.1484 32.9985C20.2335 32.9985 23.3186 32.1736 25.9924 30.5236C33.6023 25.5738 35.8647 15.4679 31.1342 7.63072ZM26.8151 23.5114C25.9924 24.7488 24.964 25.5738 23.5243 25.7801C22.7016 25.7801 21.6732 26.1925 17.5597 24.5426C14.0633 22.8927 11.1838 20.2115 9.12709 17.1179C7.89304 15.6742 7.27602 13.818 7.07035 11.9618C7.07035 10.3119 7.68737 8.86817 8.71574 7.83696C9.12709 7.42448 9.53844 7.21823 9.94978 7.21823H10.9782C11.3895 7.21823 11.8009 7.21823 12.0065 8.0432C12.4179 9.07442 13.4462 11.5493 13.4462 11.7556C13.6519 11.9618 13.6519 12.3743 13.4462 12.5805C13.6519 12.993 13.4462 13.4055 13.2406 13.6117C13.0349 13.818 12.8292 14.2305 12.6235 14.4367C12.2122 14.643 12.0065 15.0554 12.2122 15.4679C13.0349 16.7054 14.0633 17.9428 15.0916 18.9741C16.3257 20.0053 17.5597 20.8302 18.9994 21.449C19.4108 21.6552 19.8221 21.6552 20.0278 21.2427C20.2335 20.8302 21.2619 19.799 21.6732 19.3865C22.0846 18.9741 22.2902 18.9741 22.7016 19.1803L25.9924 20.8302C26.4037 21.0365 26.8151 21.2427 27.0207 21.449C27.2264 22.0677 27.2264 22.8927 26.8151 23.5114Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"47\" height=\"33\" viewBox=\"0 0 47 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M45.6651 5.16315C45.1358 3.13082 43.5762 1.53022 41.5961 0.987034C38.0069 0 23.6147 0 23.6147 0C23.6147 0 9.22256 0 5.63329 0.987034C3.65313 1.53031 2.09358 3.13082 1.56426 5.16315C0.602539 8.84687 0.602539 16.5326 0.602539 16.5326C0.602539 16.5326 0.602539 24.2183 1.56426 27.9021C2.09358 29.9344 3.65313 31.4683 5.63329 32.0115C9.22256 32.9985 23.6147 32.9985 23.6147 32.9985C23.6147 32.9985 38.0068 32.9985 41.5961 32.0115C43.5762 31.4683 45.1358 29.9344 45.6651 27.9021C46.6268 24.2183 46.6268 16.5326 46.6268 16.5326C46.6268 16.5326 46.6268 8.84687 45.6651 5.16315ZM18.9076 23.5107V9.55454L30.9366 16.5328L18.9076 23.5107Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"39\" height=\"32\" viewBox=\"0 0 39 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M6.96029 0C5.28058 0 3.66967 0.674284 2.48194 1.87452C1.29421 3.07475 0.626953 4.70261 0.626953 6.4V7.0432L19.627 17.3824L38.627 7.0464V6.4C38.627 4.70261 37.9597 3.07475 36.772 1.87452C35.5842 0.674284 33.9733 0 32.2936 0H6.96029ZM38.627 10.6784L20.3775 20.608C20.1468 20.7335 19.8889 20.7992 19.627 20.7992C19.365 20.7992 19.1071 20.7335 18.8765 20.608L0.626953 10.6784V25.6C0.626953 27.2974 1.29421 28.9252 2.48194 30.1255C3.66967 31.3257 5.28058 32 6.96029 32H32.2936C33.9733 32 35.5842 31.3257 36.772 30.1255C37.9597 28.9252 38.627 27.2974 38.627 25.6V10.6784Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
                <a href=\"\">
                    <svg width=\"34\" height=\"33\" viewBox=\"0 0 34 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path
                            d=\"M17.1218 10.9972C14.0922 10.9972 11.6198 13.4696 11.6198 16.4993C11.6198 19.5289 14.0922 22.0014 17.1218 22.0014C20.1514 22.0014 22.6238 19.5289 22.6238 16.4993C22.6238 13.4696 20.1514 10.9972 17.1218 10.9972ZM33.6236 16.4993C33.6236 14.2208 33.6443 11.963 33.5163 9.68872C33.3884 7.04705 32.7858 4.70257 30.8541 2.77085C28.9183 0.835004 26.578 0.236501 23.9363 0.108545C21.6579 -0.0194104 19.4002 0.00122773 17.1259 0.00122773C14.8475 0.00122773 12.5898 -0.0194104 10.3155 0.108545C7.67387 0.236501 5.32944 0.839131 3.39775 2.77085C1.46194 4.7067 0.86345 7.04705 0.735497 9.68872C0.607543 11.9672 0.628181 14.225 0.628181 16.4993C0.628181 18.7736 0.607543 21.0355 0.735497 23.3098C0.86345 25.9515 1.46607 28.296 3.39775 30.2277C5.33356 32.1635 7.67387 32.762 10.3155 32.89C12.5939 33.0179 14.8516 32.9973 17.1259 32.9973C19.4043 32.9973 21.6621 33.0179 23.9363 32.89C26.578 32.762 28.9224 32.1594 30.8541 30.2277C32.7899 28.2918 33.3884 25.9515 33.5163 23.3098C33.6484 21.0355 33.6236 18.7777 33.6236 16.4993ZM17.1218 24.965C12.437 24.965 8.65622 21.1841 8.65622 16.4993C8.65622 11.8144 12.437 8.03355 17.1218 8.03355C21.8065 8.03355 25.5873 11.8144 25.5873 16.4993C25.5873 21.1841 21.8065 24.965 17.1218 24.965ZM25.9341 9.66395C24.8403 9.66395 23.957 8.78064 23.957 7.68683C23.957 6.59301 24.8403 5.70971 25.9341 5.70971C27.0279 5.70971 27.9111 6.59301 27.9111 7.68683C27.9115 7.94656 27.8606 8.2038 27.7613 8.44383C27.6621 8.68385 27.5165 8.90194 27.3328 9.08559C27.1491 9.26925 26.9311 9.41487 26.691 9.51412C26.451 9.61336 26.1938 9.66428 25.9341 9.66395Z\"
                            fill=\"#FFB1DB\" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class=\"mt-[20px]\">
        <div class=\"container flex lg:flex-row flex-col gap-32\">
            <div>
                <h2 class=\"w-[235px] text-[24px] font-semibold text-[#222222] mb-10 my-8\">
                    {{ this.page.section2contact_title }}
                </h2>

                <div class=\"lg:w-[239px] flex flex-col gap-8\">
                    {% for card in viewBag.section2contact_2 %}
                    <img src=\"{{ BASEURL }}{{ card.image|media }}\" alt=\"\">
                    {% endfor %}
                </div>
            </div>
            <div class=\" bg-white rounded-xl shadow-lg overflow-hidden lg:-translate-y-[11.7rem]\">
                <div
                    class=\"flex md:flex-row flex-col items-center justify-between gap-10 bg-[#F2F2F2] py-10 md:px-10 px-6\">
                    <img src=\"{{ 'assets/images/logo-c.png'|theme }}\" alt=\"\" class=\"w-[91px]\">
                    <div class=\"text-[16px] font-medium\">
                        {{ this.page.section2contact_description }}
                    </div>
                </div>

                <div class=\"grid lg:grid-cols-2 grid-cols-1 md:px-10 px-6 gap-5 mt-10\">
                    <input type=\"text\" name=\"nama\" placeholder=\"Nama\" id=\"nama\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"email\" name=\"email\" placeholder=\"Email\" id=\"email\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"number\" name=\"phone\" placeholder=\"No Telepon\" id=\"phone\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686]\">
                    <input type=\"text\" name=\"alamat\" placeholder=\"Alamat\" id=\"alamat\"
                        class=\" bg-[#EBEBEB]  rounded-md h-[49px] pl-6 focus:outline-none text-[#868686] \">
                </div>

                <div class=\"md:px-10 px-6 mt-16\">
                    <h2 class=\"font-semibold text-[#222222] text-[24px] mb-[26px]\">Optional</h2>
                    <textarea name=\"detail\" id=\"detail\"
                        class=\"w-full h-[313px] bg-[#EBEBEB] rounded-md pt-4 pl-6 focus:outline-none text-[#868686]\"
                        placeholder=\"Detail\"></textarea>
                    <div
                        class=\"relative w-full bg-[#EBEBEB] rounded-md h-[102px]  focus:outline-none text-[#868686] mt-6 flex items-center justify-center \">
                        <input type=\"file\"
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md opacity-0 z-30 cursor-pointer\"
                            id=\"file_report\">
                        <div
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md absolute flex items-center justify-center cursor-pointer\">
                            <h5 class=\"sm:text-[16px] text-[10px] font-medium sm:translate-x-0 translate-x-[2rem] cursor-pointer\"
                                id=\"name_file\">Tempel gambar
                                disini
                            </h5>
                            <img src=\" ./assets/images/contact/icn-file.png\" alt=\"\"
                                class=\"absolute w-[4.5rem] sm:left-[-0.4rem] left-[-0.15rem] cursor-pointer\">
                        </div>

                    </div>
                    <button
                        class=\"bg-primary w-full flex items-center justify-center py-4 mt-[49px] mb-10 rounded-md text-white transition hover:bg-secondary\">Kirim</button>
                </div>
            </div>
        </div>
        <div class=\"container flex flex-col text-center justify-center items-center lg:mt-0 mt-10\">
            <div class=\"font-semibold\">
                <h2 class=\"mb-5 text-[24px]\">{{ this.page.section2contact_subtitle }}</h2>
                <iframe src=\"https://www.youtube.com/embed/9vWMjHRsB-c\"
                    class=\"rounded-xl lg:w-[875px] lg:h-[492px] w-[100%] \" title=\"YouTube video player\" frameborder=\"0\"
                    allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                    allowfullscreen></iframe>
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
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/kontak-kami.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 102);
        static $filters = array("theme" => 7, "escape" => 49, "raw" => 51, "media" => 103);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
