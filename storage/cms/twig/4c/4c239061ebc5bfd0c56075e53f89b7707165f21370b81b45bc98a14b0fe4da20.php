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

/* C:\xampp\htdocs\posbill_cms/themes/posbill/pages/harga.htm */
class __TwigTemplate_b47766d19a7752cf2a4363fe04348b0e51c806a54b5b922e1a80f6cd552c5458 extends \Twig\Template
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
\t<nav class=\"container flex items-center justify-between\">
\t\t<a href=\"index.html\" class=\"logo-navbar\">
\t\t\t<img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo3.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[250px]\">
\t\t</a>
\t\t<ul
\t\t\tclass=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16\">
\t\t\t<li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
\t\t\t\t<span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2\">
\t\t\t\t<a href=\"index.html\" class=\"z-[20]\">BERANDA</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2\"><a href=\"fitur.html\">FITUR</a></li>
\t\t\t<li class=\"nav-item-2 active\"><a href=\"harga.html\">HARGA</a></li>
\t\t\t<li class=\"nav-item-2 dropdown\">
\t\t\t\t<div class=\"flex items-center gap-2 dropdown-btn\">
\t\t\t\t\t<a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
\t\t\t\t\t<span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
\t\t\t\t</div>

\t\t\t\t<ul class=\"dropdown-item shadow-lg\">
\t\t\t\t\t<li><a href=\"retail.html\">Retail</a></li>
\t\t\t\t\t<li><a href=\"jasa.html\">Jasa</a></li>
\t\t\t\t\t<li><a href=\"food.html\">Food & Beverage</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2 font-medium\"><a href=\"artikel.html\">ARTIKEL</a></li>
\t\t\t<li class=\" nav-item-2\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
\t\t\t<li class=\"lgTablet:mt-0 mt-5\">
\t\t\t\t<a href=\"login_dashboard.html\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
\t\t\t\t\tLogin Dashboard</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
\t\t\t<span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
\t\t</div>
\t</nav>
</header>

<main>
\t<section class=\"lg:mt-[150px] mt-[100px]\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex flex-col items-center justify-center text-center\">
\t\t\t\t<h2 class=\"text-[#7A0E57] font-semibold md:text-[48px] text-[40px] leading-tight mb-[20px]\">
\t\t\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "section1harga_title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
\t\t\t\t</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"font-semibold text-[#222222] md:text-[48px] md:w-[978px] text-[40px] leading-tight mb-[44px]\">
\t\t\t\t\t";
        // line 53
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 53), "section1harga_description", [], "any", false, false, true, 53), 53, $this->source);
        echo "
\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"btn-gradient1\">";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "section1harga_text_btn", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</section>


\t<section class=\"mt-[100px]\">
\t\t<div class=\"container flex flex-col items-center gap-10\">
\t\t\t<div class=\"flex items-center justify-center\">
\t\t\t\t<div class=\"text-[#222222] text-center md:w-[938px]\">
\t\t\t\t\t";
        // line 65
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "section2harga_description", [], "any", false, false, true, 65), 65, $this->source);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"grid md:grid-cols-2 grid-cols-1 gap-5 md:w-max w-full\">
\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2harga_2", [], "any", false, false, true, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 71
            echo "\t\t\t\t<div
\t\t\t\t\tclass=\"md:w-[198.09px] w-full h-[308px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-2\">
\t\t\t\t\t<h2 class=\"text-[16px]\">";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t\t<div class=\"relative flex items-center text-primary \">
\t\t\t\t\t\t<span class=\"text-[18px] absolute top-[10px] -left-[25px] font-medium\">Rp</span>
\t\t\t\t\t\t<h3 class=\"text-[64px]\">";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "price1", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<span class=\"text-[10px] pt-12\">";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "price2", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "price1", [], "any", false, false, true, 79) == "0")) {
                // line 80
                echo "\t\t\t\t\t<div class=\"text-center text-[18px] w-[138px]\">
\t\t\t\t\t\t";
                // line 81
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 81), 81, $this->source);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t<div class=\"text-center text-[12px] w-[138px]\">
\t\t\t\t\t\t";
                // line 85
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 85), 85, $this->source);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t\t<a href=\"\"
\t\t\t\t\t\tclass=\"py-2 px-16 flex items-center justify-center bg-secondary rounded-full mt-[6px]\">Beli</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"mt-[100px] mb-[100px]\">
\t\t<div class=\"container lg:overflow-x-auto overflow-x-scroll lg:pr-0\">
\t\t\t<h2
\t\t\t\tclass=\"text-center bg-[#C1136E] lg:w-full w-[59.5rem] rounded-[10px] text-[32px] text-white py-4 lg:mr-0 mr-10\">
\t\t\t\tMembandingkan
\t\t\t\tPaket</h2>

\t\t\t<div class=\"flex lg:w-full w-[60rem] lg:pr-0 pr-4\">
\t\t\t\t<div class=\"flex flex-col gap-10 pt-32 flex-1 pb-[5rem]\">
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">POS / Transaksi</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Jumlah Transaksi Harian</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Cetak Tanda Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Ubah Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Kirim Booking WA</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Pembayaran</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Bayar Nanti</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Kirim Struk via WA</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Format Struck</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">LAPORAN</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Jangka waktu laporan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Export laporan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Top Pelanggan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Top Produk</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">PRODUK</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Input produk</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Input Kategori</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Inventori</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Stok Cabang</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">WEB ADMIN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">MULTI CABANG MULTI OUTLET</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Managemen Karyawan</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TIPE PESANAN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">PENGATURAN PENJUALAN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">DISCOUNT</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TOKO ONLINE</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Transaksi Offine / Online</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">CUSTOMER SUPPORT *</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Coming Soon Feature *</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TABLE MAPPING</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">ABSENSI</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">DOUBLE STRUCK PRINT</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">OJEK ONLINE INTEGRATION</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">AKUNTING</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">MEMBERSHIP</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Harga</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"bg-[#FFDEF6] flex-1 text-center\">
\t\t\t\t\t<h2 class=\"text-[36px] font-medium text-[#C1136E] translate-y-[2rem]\">Lite</h2>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[7.5rem] gap-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">50 Transaksi</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">10 Booking</h3>
\t\t\t\t\t\t<img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Cash, Debit & Kredit</h3>
\t\t\t\t\t\t<img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">By Posbill</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">2 Bulan Terakhir</h3>
\t\t\t\t\t\t<img src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 169
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]\">
\t\t\t\t\t\t<img src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 175
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem]\">
\t\t\t\t\t\t<img src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">1 Admin & 1 Kasir</h3>
\t\t\t\t\t\t<img src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">7x24 online</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Slow respond</h3>
\t\t\t\t\t\t<img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">CODE</h3>
\t\t\t\t\t\t<img src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<button class=\"bg-secondary py-2 px-6 rounded-md\">GRATIS</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"bg-[#FFDEF6] flex-1 text-center flex flex-col\">
\t\t\t\t\t<h2 class=\"text-[36px] font-medium text-[#C1136E] translate-y-[2rem] \">Premium</h2>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[7.5rem] gap-3 \">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">E-Wallet, Cash, Debit, QRIS</h3>
\t\t\t\t\t\t<img src=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 207
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Edited</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center  mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]  \">
\t\t\t\t\t\t<img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem] \">
\t\t\t\t\t\t<img src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"";
        // line 226
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Email ticket</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Fast respond</h3>
\t\t\t\t\t\t<img src=\"";
        // line 233
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">FACE DAN CODE</h3>
\t\t\t\t\t\t<img src=\"";
        // line 235
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">GRAB, GOFOOD, SHOPEE</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">KASBILL</h3>
\t\t\t\t\t\t<img src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<button class=\"bg-[#59DC9D] py-2 px-6 rounded-md\">49.000/bulan</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


</main>


<footer class=\"mt-[100px] bg-third pt-20 pb-10\">
\t<div class=\"container flex flex-col justify-center items-center gap-16\">
\t\t<ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
\t\t\t<li><a href=\"\">BERANDA</a></li>
\t\t\t<li><a href=\"\">FITUR</a></li>
\t\t\t<li><a href=\"\">SOLUSI BISNIS</a></li>
\t\t\t<li><a href=\"\">HARGA</a></li>
\t\t\t<li><a href=\"\">ARTIKEL</a></li>
\t\t\t<li><a href=\"\">DONWLOAD APLIKASI</a></li>
\t\t\t<li><a href=\"\">KEBIJAKAN PRIVASI</a></li>
\t\t</ul>

\t\t<img src=\"";
        // line 262
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

\t\t<div>
\t\t\t<ul class=\"flex items-center gap-5\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 267
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-wa.svg");
        echo "\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 276
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-ig.svg");
        echo "\" alt=\"Icon Instagram\" class=\"w-[33px]\">
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<p class=\"w-[288px] text-[14px] text-white text-center mt-6\">
\t\t\t\t© Copyright 2021, All right reserved
\t\t\t\tPT Novatama Solusi Teknologi
\t\t\t</p>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/harga.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 279,  514 => 276,  508 => 273,  502 => 270,  496 => 267,  488 => 262,  461 => 238,  455 => 235,  450 => 233,  444 => 230,  440 => 229,  436 => 228,  432 => 227,  428 => 226,  423 => 224,  419 => 223,  413 => 220,  409 => 219,  405 => 218,  401 => 217,  395 => 214,  391 => 213,  387 => 212,  379 => 207,  375 => 206,  370 => 204,  366 => 203,  362 => 202,  350 => 193,  346 => 192,  342 => 191,  338 => 190,  333 => 188,  327 => 185,  323 => 184,  319 => 183,  315 => 182,  311 => 181,  306 => 179,  302 => 178,  296 => 175,  292 => 174,  288 => 173,  284 => 172,  278 => 169,  274 => 168,  270 => 167,  262 => 162,  258 => 161,  253 => 159,  249 => 158,  245 => 157,  179 => 93,  169 => 88,  163 => 85,  160 => 84,  154 => 81,  151 => 80,  149 => 79,  144 => 77,  140 => 76,  134 => 73,  130 => 71,  126 => 70,  118 => 65,  105 => 55,  100 => 53,  93 => 49,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms/' %}

<header class=\"mx-auto bg-primary py-8\">
\t<nav class=\"container flex items-center justify-between\">
\t\t<a href=\"index.html\" class=\"logo-navbar\">
\t\t\t<img src=\"{{ 'assets/images/logo3.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[250px]\">
\t\t</a>
\t\t<ul
\t\t\tclass=\"navbar flex lgTablet:flex-row flex-col lgTablet:w-max w-[16rem] lgTablet:h-max h-full lgTablet:left-auto lgTablet:top-auto top-0 lgTablet:items-center gap-2 text-[16px] font-medium lgTablet:relative fixed lgTablet:bg-transparent bg-white lgTablet:p-0 px-6 pb-16\">
\t\t\t<li class=\"lgTablet:hidden cursor-pointer btn-close-nav text-3xl text-primary translate-x-[11rem] my-6\">
\t\t\t\t<span class=\"iconify\" data-icon=\"ep:close-bold\"></span>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2\">
\t\t\t\t<a href=\"index.html\" class=\"z-[20]\">BERANDA</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2\"><a href=\"fitur.html\">FITUR</a></li>
\t\t\t<li class=\"nav-item-2 active\"><a href=\"harga.html\">HARGA</a></li>
\t\t\t<li class=\"nav-item-2 dropdown\">
\t\t\t\t<div class=\"flex items-center gap-2 dropdown-btn\">
\t\t\t\t\t<a href=\"javascript:void(0)\">SOLUSI BISNIS</a>
\t\t\t\t\t<span class=\"iconify\" data-icon=\"ep:arrow-down-bold\"></span>
\t\t\t\t</div>

\t\t\t\t<ul class=\"dropdown-item shadow-lg\">
\t\t\t\t\t<li><a href=\"retail.html\">Retail</a></li>
\t\t\t\t\t<li><a href=\"jasa.html\">Jasa</a></li>
\t\t\t\t\t<li><a href=\"food.html\">Food & Beverage</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t</li>
\t\t\t<li class=\"nav-item-2 font-medium\"><a href=\"artikel.html\">ARTIKEL</a></li>
\t\t\t<li class=\" nav-item-2\"><a href=\"kontak_kami.html\">KONTAK KAMI</a></li>
\t\t\t<li class=\"lgTablet:mt-0 mt-5\">
\t\t\t\t<a href=\"login_dashboard.html\" class=\"rounded-full bg-secondary px-5 py-4 ml-2 text-primary\">
\t\t\t\t\tLogin Dashboard</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"lgTablet:hidden cursor-pointer btn-open-nav\">
\t\t\t<span class=\"iconify text-4xl text-white\" data-icon=\"fluent:list-16-filled\"></span>
\t\t</div>
\t</nav>
</header>

<main>
\t<section class=\"lg:mt-[150px] mt-[100px]\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex flex-col items-center justify-center text-center\">
\t\t\t\t<h2 class=\"text-[#7A0E57] font-semibold md:text-[48px] text-[40px] leading-tight mb-[20px]\">
\t\t\t\t\t{{ this.page.section1harga_title }}
\t\t\t\t</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"font-semibold text-[#222222] md:text-[48px] md:w-[978px] text-[40px] leading-tight mb-[44px]\">
\t\t\t\t\t{{ this.page.section1harga_description|raw }}
\t\t\t\t</div>
\t\t\t\t<a href=\"\" class=\"btn-gradient1\">{{ this.page.section1harga_text_btn }}</a>
\t\t\t</div>
\t\t</div>
\t</section>


\t<section class=\"mt-[100px]\">
\t\t<div class=\"container flex flex-col items-center gap-10\">
\t\t\t<div class=\"flex items-center justify-center\">
\t\t\t\t<div class=\"text-[#222222] text-center md:w-[938px]\">
\t\t\t\t\t{{ this.page.section2harga_description|raw }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"grid md:grid-cols-2 grid-cols-1 gap-5 md:w-max w-full\">
\t\t\t\t{% for card in viewBag.section2harga_2 %}
\t\t\t\t<div
\t\t\t\t\tclass=\"md:w-[198.09px] w-full h-[308px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-2\">
\t\t\t\t\t<h2 class=\"text-[16px]\">{{ card.title }}</h2>
\t\t\t\t\t<div class=\"relative flex items-center text-primary \">
\t\t\t\t\t\t<span class=\"text-[18px] absolute top-[10px] -left-[25px] font-medium\">Rp</span>
\t\t\t\t\t\t<h3 class=\"text-[64px]\">{{ card.price1 }}</h3>
\t\t\t\t\t\t<span class=\"text-[10px] pt-12\">{{ card.price2 }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t{% if card.price1 == '0' %}
\t\t\t\t\t<div class=\"text-center text-[18px] w-[138px]\">
\t\t\t\t\t\t{{ card.description|raw }}
\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"text-center text-[12px] w-[138px]\">
\t\t\t\t\t\t{{ card.description|raw }}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"\"
\t\t\t\t\t\tclass=\"py-2 px-16 flex items-center justify-center bg-secondary rounded-full mt-[6px]\">Beli</a>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"mt-[100px] mb-[100px]\">
\t\t<div class=\"container lg:overflow-x-auto overflow-x-scroll lg:pr-0\">
\t\t\t<h2
\t\t\t\tclass=\"text-center bg-[#C1136E] lg:w-full w-[59.5rem] rounded-[10px] text-[32px] text-white py-4 lg:mr-0 mr-10\">
\t\t\t\tMembandingkan
\t\t\t\tPaket</h2>

\t\t\t<div class=\"flex lg:w-full w-[60rem] lg:pr-0 pr-4\">
\t\t\t\t<div class=\"flex flex-col gap-10 pt-32 flex-1 pb-[5rem]\">
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">POS / Transaksi</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Jumlah Transaksi Harian</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Cetak Tanda Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Ubah Booking</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Kirim Booking WA</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Pembayaran</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Bayar Nanti</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Kirim Struk via WA</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Format Struck</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">LAPORAN</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Jangka waktu laporan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Export laporan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Top Pelanggan</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Top Produk</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">PRODUK</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Input produk</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Input Kategori</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Inventori</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Stok Cabang</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-3\">
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">WEB ADMIN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">MULTI CABANG MULTI OUTLET</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Managemen Karyawan</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TIPE PESANAN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">PENGATURAN PENJUALAN</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">DISCOUNT</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TOKO ONLINE</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Transaksi Offine / Online</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">CUSTOMER SUPPORT *</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">Coming Soon Feature *</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">TABLE MAPPING</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">ABSENSI</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">DOUBLE STRUCK PRINT</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">OJEK ONLINE INTEGRATION</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">AKUNTING</h2>
\t\t\t\t\t\t<h2 class=\"font-semibold text-[#222222] text-[20px]\">MEMBERSHIP</h2>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Harga</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"bg-[#FFDEF6] flex-1 text-center\">
\t\t\t\t\t<h2 class=\"text-[36px] font-medium text-[#C1136E] translate-y-[2rem]\">Lite</h2>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[7.5rem] gap-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">50 Transaksi</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">10 Booking</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Cash, Debit & Kredit</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">By Posbill</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">2 Bulan Terakhir</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem]\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">1 Admin & 1 Kasir</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">7x24 online</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Slow respond</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">CODE</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-no.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<button class=\"bg-secondary py-2 px-6 rounded-md\">GRATIS</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"bg-[#FFDEF6] flex-1 text-center flex flex-col\">
\t\t\t\t\t<h2 class=\"text-[36px] font-medium text-[#C1136E] translate-y-[2rem] \">Premium</h2>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[7.5rem] gap-3 \">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">E-Wallet, Cash, Debit, QRIS</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Edited</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center  mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]  \">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem] \">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Email ticket</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Fast respond</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">FACE DAN CODE</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-2 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">GRAB, GOFOOD, SHOPEE</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">KASBILL</h3>
\t\t\t\t\t\t<img src=\"{{ 'assets/images/harga/card-ok.png'|theme }}\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<button class=\"bg-[#59DC9D] py-2 px-6 rounded-md\">49.000/bulan</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


</main>


<footer class=\"mt-[100px] bg-third pt-20 pb-10\">
\t<div class=\"container flex flex-col justify-center items-center gap-16\">
\t\t<ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
\t\t\t<li><a href=\"\">BERANDA</a></li>
\t\t\t<li><a href=\"\">FITUR</a></li>
\t\t\t<li><a href=\"\">SOLUSI BISNIS</a></li>
\t\t\t<li><a href=\"\">HARGA</a></li>
\t\t\t<li><a href=\"\">ARTIKEL</a></li>
\t\t\t<li><a href=\"\">DONWLOAD APLIKASI</a></li>
\t\t\t<li><a href=\"\">KEBIJAKAN PRIVASI</a></li>
\t\t</ul>

\t\t<img src=\"{{ 'assets/images/logo2.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

\t\t<div>
\t\t\t<ul class=\"flex items-center gap-5\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ 'assets/images/icon/icn-fb.svg'|theme }}\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ 'assets/images/icon/icn-wa.svg'|theme }}\" alt=\"Icon Whatsapp\" class=\"w-[33px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ 'assets/images/icon/icn-yt.svg'|theme }}\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ 'assets/images/icon/icn-eml.sv'|theme }}g\" alt=\"Icon Email\" class=\"w-[38px]\">
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ 'assets/images/icon/icn-ig.svg'|theme }}\" alt=\"Icon Instagram\" class=\"w-[33px]\">
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<p class=\"w-[288px] text-[14px] text-white text-center mt-6\">
\t\t\t\t© Copyright 2021, All right reserved
\t\t\t\tPT Novatama Solusi Teknologi
\t\t\t</p>
\t\t</div>
\t</div>
</footer>", "C:\\xampp\\htdocs\\posbill_cms/themes/posbill/pages/harga.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 70, "if" => 79);
        static $filters = array("theme" => 6, "escape" => 49, "raw" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['theme', 'escape', 'raw'],
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
