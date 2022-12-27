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

/* C:\Project Novatama\posbill_cms/themes/posbill/pages/harga.htm */
class __TwigTemplate_76165bbdf4fa36de66ccd171bdb0b906265497fb61a0a0c72e23513d15f22413 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<main>
\t<section class=\"lg:mt-[150px] mt-[100px]\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex flex-col items-center justify-center text-center\">
\t\t\t\t<h2 class=\"text-[#7A0E57] font-semibold md:text-[48px] text-[40px] leading-tight mb-[20px]\">
\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "section1harga_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
\t\t\t\t</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"font-semibold text-[#222222] md:text-[48px] md:w-[978px] text-[40px] leading-tight mb-[44px]\">
\t\t\t\t\t";
        // line 13
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "section1harga_description", [], "any", false, false, true, 13), 13, $this->source);
        echo "
\t\t\t\t</div>
\t\t\t\t<a href=\"http://wa.me/6285157220258\" class=\"btn-gradient1\">";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "section1harga_text_btn", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</section>


\t<section class=\"mt-[100px]\">
\t\t<div class=\"container flex flex-col items-center gap-10\">
\t\t\t<div class=\"flex items-center justify-center\">
\t\t\t\t<div class=\"text-[#222222] text-center md:w-[938px]\">
\t\t\t\t\t";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 25), "section2harga_description", [], "any", false, false, true, 25), 25, $this->source);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"grid md:grid-cols-2 grid-cols-1 gap-5 md:w-max w-full\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2harga_2", [], "any", false, false, true, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 31
            echo "\t\t\t\t<div
\t\t\t\t\tclass=\"md:w-[198.09px] w-full h-[308px] bg-white shadow-xl rounded-md flex flex-col items-center justify-center gap-2\">
\t\t\t\t\t<h2 class=\"text-[16px]\">";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t\t<div class=\"relative flex items-center text-primary \">
\t\t\t\t\t\t<span class=\"text-[18px] absolute top-[10px] -left-[25px] font-medium\">Rp</span>
\t\t\t\t\t\t<h3 class=\"text-[64px]\">";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "price1", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<span class=\"text-[10px] pt-12\">";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "price2", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "price1", [], "any", false, false, true, 39) == "0")) {
                // line 40
                echo "\t\t\t\t\t<div class=\"text-center text-[18px] w-[138px]\">
\t\t\t\t\t\t";
                // line 41
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 41), 41, $this->source);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t<div class=\"text-center text-[12px] w-[138px]\">
\t\t\t\t\t\t";
                // line 45
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 45), 45, $this->source);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 48
            echo "
\t\t\t\t\t<a href=\"http://wa.me/6285157220258\"
\t\t\t\t\t\tclass=\"py-2 px-16 flex items-center justify-center bg-secondary rounded-full mt-[6px]\">Beli</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Cash, Debit & Kredit</h3>
\t\t\t\t\t\t<img src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">By Posbill</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">2 Bulan Terakhir</h3>
\t\t\t\t\t\t<img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]\">
\t\t\t\t\t\t<img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem]\">
\t\t\t\t\t\t<img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">1 Admin & 1 Kasir</h3>
\t\t\t\t\t\t<img src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">7x24 online</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Slow respond</h3>
\t\t\t\t\t\t<img src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">CODE</h3>
\t\t\t\t\t\t<img src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-no.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 \">
\t\t\t\t\t\t<img src=\"";
        // line 153
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
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">E-Wallet, Cash, Debit, QRIS</h3>
\t\t\t\t\t\t<img src=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Edited</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center  mt-[5rem] gap-[0.8rem]\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[5rem] gap-[1.2rem]  \">
\t\t\t\t\t\t<img src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col items-center mt-[2.4rem] gap-[0.8rem] \">
\t\t\t\t\t\t<img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Unlimited</h3>
\t\t\t\t\t\t<img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-3\">
\t\t\t\t\t\t<img src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Email ticket</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">Fast respond</h3>
\t\t\t\t\t\t<img src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">FACE DAN CODE</h3>
\t\t\t\t\t\t<img src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-3\">
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">GRAB, GOFOOD, SHOPEE</h3>
\t\t\t\t\t\t<h3 class=\"font-medium text-[#222222] text-[20px]\">KASBILL</h3>
\t\t\t\t\t\t<img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/harga/card-ok.png");
        echo "\" alt=\"\" class=\"w-[14px] mt-2 mb-2\">
\t\t\t\t\t\t<button class=\"bg-[#59DC9D] py-2 px-6 rounded-md\">49.000/bulan</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


</main>

";
        // line 209
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("floatwa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 210
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/harga.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 210,  435 => 209,  421 => 198,  415 => 195,  410 => 193,  404 => 190,  400 => 189,  396 => 188,  392 => 187,  388 => 186,  383 => 184,  379 => 183,  373 => 180,  369 => 179,  365 => 178,  361 => 177,  355 => 174,  351 => 173,  347 => 172,  339 => 167,  335 => 166,  330 => 164,  326 => 163,  322 => 162,  310 => 153,  306 => 152,  302 => 151,  298 => 150,  293 => 148,  287 => 145,  283 => 144,  279 => 143,  275 => 142,  271 => 141,  266 => 139,  262 => 138,  256 => 135,  252 => 134,  248 => 133,  244 => 132,  238 => 129,  234 => 128,  230 => 127,  222 => 122,  218 => 121,  213 => 119,  209 => 118,  205 => 117,  139 => 53,  129 => 48,  123 => 45,  120 => 44,  114 => 41,  111 => 40,  109 => 39,  104 => 37,  100 => 36,  94 => 33,  90 => 31,  86 => 30,  78 => 25,  65 => 15,  60 => 13,  53 => 9,  45 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms/' %}
{% partial 'nav2' %}

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
\t\t\t\t<a href=\"http://wa.me/6285157220258\" class=\"btn-gradient1\">{{ this.page.section1harga_text_btn }}</a>
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

\t\t\t\t\t<a href=\"http://wa.me/6285157220258\"
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

{% partial 'floatwa' %}
{% partial 'footer' %}", "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/harga.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 2, "for" => 30, "if" => 39);
        static $filters = array("escape" => 9, "raw" => 13, "theme" => 117);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'for', 'if'],
                ['escape', 'raw', 'theme'],
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
