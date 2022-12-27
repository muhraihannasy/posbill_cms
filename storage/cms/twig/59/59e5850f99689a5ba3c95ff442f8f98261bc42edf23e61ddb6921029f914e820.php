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

/* C:\Project Novatama\posbill_cms/themes/posbill/partials/footer.htm */
class __TwigTemplate_61cd7b0a0285a60ce5664ce8ca754ef4b483a5d4056fdcfa3b849cce3b43fdde extends \Twig\Template
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
        echo "<footer class=\"bg-third pt-20 pb-10 mt-[10rem]\">
    <div class=\"container flex flex-col justify-center items-center gap-16\">
        <ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
            <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("beranda");
        echo "\">BERANDA</a></li>
            <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fitur");
        echo "\">FITUR</a></li>
            <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("harga");
        echo "\">HARGA</a></li>
            <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
        echo "\">ARTIKEL</a></li>
            <li><a href=\"https://play.google.com/store/apps/details?id=app.posbill.id&hl=en&gl=US&pli=1\">DONWLOAD APLIKASI</a></li>
            <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("kebijakan-privasi");
        echo "\">KEBIJAKAN PRIVASI</a></li>
        </ul>

        <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <a href=\"https://www.facebook.com/posbill.id/\">
                        <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-fb.svg");
        echo "\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.youtube.com/channel/UCtNKTz7PtbGsXb-h6v5TMAg\">
                        <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-yt.svg");
        echo "\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.tokopedia.com/posbill?source=universe&st=product\">
                        <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/TOKOPEDIA.png");
        echo "\" alt=\"Icon Tokopedia\" class=\"w-[38.02px]\">
                    </a>
                </li>
                <li>
                    <a href=\"\">
                        <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-eml.sv");
        echo "g\" alt=\"Icon Email\" class=\"w-[38px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.instagram.com/posbill.id/?hl=en\">
                        <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon/icn-ig.svg");
        echo "\" alt=\"Icon Instagram\" class=\"w-[33px]\">
                    </a>
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
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  100 => 33,  92 => 28,  84 => 23,  76 => 18,  67 => 12,  61 => 9,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-third pt-20 pb-10 mt-[10rem]\">
    <div class=\"container flex flex-col justify-center items-center gap-16\">
        <ul class=\"flex lg:flex-row flex-col items-center justify-between gap-6 text-white\">
            <li><a href=\"{{ 'beranda'|page }}\">BERANDA</a></li>
            <li><a href=\"{{ 'fitur'|page }}\">FITUR</a></li>
            <li><a href=\"{{ 'harga'|page }}\">HARGA</a></li>
            <li><a href=\"{{ 'artikel'|page }}\">ARTIKEL</a></li>
            <li><a href=\"https://play.google.com/store/apps/details?id=app.posbill.id&hl=en&gl=US&pli=1\">DONWLOAD APLIKASI</a></li>
            <li><a href=\"{{ 'kebijakan-privasi'|page }}\">KEBIJAKAN PRIVASI</a></li>
        </ul>

        <img src=\"{{ 'assets/images/logo2.png'|theme }}\" alt=\"Logo Posbill\" class=\"w-[130.56px]\">

        <div>
            <ul class=\"flex items-center gap-5\">
                <li>
                    <a href=\"https://www.facebook.com/posbill.id/\">
                        <img src=\"{{ 'assets/images/icon/icn-fb.svg'|theme }}\" alt=\"Icon Facebook\" class=\"w-[35.6px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.youtube.com/channel/UCtNKTz7PtbGsXb-h6v5TMAg\">
                        <img src=\"{{ 'assets/images/icon/icn-yt.svg'|theme }}\" alt=\"Icon Youtube\" class=\"w-[46.02px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.tokopedia.com/posbill?source=universe&st=product\">
                        <img src=\"{{ 'assets/images/icon/TOKOPEDIA.png'|theme }}\" alt=\"Icon Tokopedia\" class=\"w-[38.02px]\">
                    </a>
                </li>
                <li>
                    <a href=\"\">
                        <img src=\"{{ 'assets/images/icon/icn-eml.sv'|theme }}g\" alt=\"Icon Email\" class=\"w-[38px]\">
                    </a>
                </li>
                <li>
                    <a href=\"https://www.instagram.com/posbill.id/?hl=en\">
                        <img src=\"{{ 'assets/images/icon/icn-ig.svg'|theme }}\" alt=\"Icon Instagram\" class=\"w-[33px]\">
                    </a>
                </li>
            </ul>

            <p class=\"w-[288px] text-[14px] text-white text-center mt-6\">
                © Copyright 2021, All right reserved
                PT Novatama Solusi Teknologi
            </p>
        </div>
    </div>
</footer>", "C:\\Project Novatama\\posbill_cms/themes/posbill/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 4, "theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
