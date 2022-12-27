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

/* C:\Project Novatama\posbill_cms/themes/posbill/pages/kontak-kami.htm */
class __TwigTemplate_599f0b68d7fb86f134e18082e47b8f0f8a4f6168ffcba723e68ddc37e6c3c9bb extends \Twig\Template
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
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<main>
    <section class=\"bg-[#A71A65] lg:h-[500px] flex items-center text-white lg:pt-0 pt-[100px] pb-[50px]\">
        <div class=\"container bg-\">
            <div class=\"lg:pt-20\">
                <h2 class=\"font-semibold text-[36px] mb-[24px]\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "section1contact_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h2>
                <div class=\"mb-[31px] lg:w-[591px] text-[24px] font-light\">
                    ";
        // line 11
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "section1contact_description", [], "any", false, false, true, 11), 11, $this->source);
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
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "section2contact_title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                </h2>

                <div class=\"lg:w-[239px] flex flex-col gap-8\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section2contact_2", [], "any", false, false, true, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 63
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 63, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 63), 63, $this->source));
            echo "\" alt=\"\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
            </div>
            <!-- s -->
            <form class=\" bg-white rounded-xl shadow-lg overflow-hidden lg:-translate-y-[11.7rem]\"
                data-request=\"onSubmit\" data-request-update=\"mytime: '#myDiv'\" data-request-files>
                <div class=\" flex md:flex-row flex-col items-center justify-between gap-10 bg-[#F2F2F2] py-10 md:px-10
                px-6\">
                    <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-c.png");
        echo "\" alt=\"\" class=\"w-[91px]\">
                    <div class=\"text-[16px] font-medium\">
                        ";
        // line 74
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 74), "section2contact_description", [], "any", false, false, true, 74), 74, $this->source);
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
                            id=\"file_report\" onchange=\"loadFile(event)\" name=\"file_report\" accept=\"image/*\">
                        <div
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md absolute flex items-center justify-center cursor-pointer\">
                            <h5 class=\"sm:text-[16px] text-[10px] font-medium sm:translate-x-0 translate-x-[2rem] cursor-pointer\"
                                id=\"name_file\">Tempel gambar
                                disini
                            </h5>
                            <img src=\" ";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/contact/icn-file.png");
        echo "\" alt=\"\"
                                class=\"absolute w-[4.5rem] sm:left-[-0.4rem] left-[-0.15rem] cursor-pointer\">
                        </div>

                    </div>
                    <button
                        class=\"bg-primary w-full flex items-center justify-center py-4 mt-[49px] mb-10 rounded-md text-white transition hover:bg-secondary\"
                        id=\"btn-send\">Kirim</button>
                </div>
            </form>
            <div id=\"myDiv\">";
        // line 115
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mytime"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

        </div>
        <div class=\"container flex flex-col text-center justify-center items-center lg:mt-0 mt-10\">
            <div class=\"font-semibold\">
                <h2 class=\"mb-5 text-[24px]\">";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 120), "section2contact_subtitle", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "</h2>
                <iframe src=\"https://www.youtube.com/embed/9vWMjHRsB-c\"
                    class=\"rounded-xl lg:w-[875px] lg:h-[492px] w-[100%] \" title=\"YouTube video player\" frameborder=\"0\"
                    allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>

";
        // line 130
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("floatwa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 131
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 132
        echo "

<script>
    const name = document.querySelector(\"#nama\");
    const email = document.querySelector(\"#email\");
    const phone = document.querySelector(\"#phone\");
    const address = document.querySelector(\"#alamat\");
    const detail = document.querySelector(\"#detail\");
    const fileReport = document.querySelector(\"#file_report\");
    const meta = document.querySelector(\"meta[name='csrf-token']\");
    console.log(meta)

    const loadFile = function (event) {
        const uri = URL.createObjectURL(event.target.files[0]);
        // const uri2 = URL.revokeObjectURL(uri) // free memory
        console.log(uri)
    };

    const btnSend = document.querySelector('#btn-send');

    // btnSend.addEventListener(\"click\", () => {


    //     const obj = {
    //         name: name.value,
    //         email: email.value,
    //         phome: phone.value,
    //         address: address.value,
    //         detail: detail.value,
    //         filereport: fileReport.value
    //     }



    //     fetch(`http://localhost/posbill_cms/data-contact/\${obj.name}/\${obj.email}/\${obj.phone}/\${obj.address}/\${obj.detail}`, { body: obj })
    //     // window.location.href = `http://localhost/posbill_cms/data-contact/\${obj.name}/\${obj.email}/\${obj.phone}/\${obj.address}/\${obj.detail}/s`;

    // });


</script>";
    }

    public function getTemplateName()
    {
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/kontak-kami.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 132,  219 => 131,  215 => 130,  202 => 120,  192 => 115,  179 => 105,  145 => 74,  140 => 72,  131 => 65,  121 => 63,  117 => 62,  110 => 58,  60 => 11,  55 => 9,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost/posbill_cms/' %}

{% partial 'nav2' %}

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
            <!-- s -->
            <form class=\" bg-white rounded-xl shadow-lg overflow-hidden lg:-translate-y-[11.7rem]\"
                data-request=\"onSubmit\" data-request-update=\"mytime: '#myDiv'\" data-request-files>
                <div class=\" flex md:flex-row flex-col items-center justify-between gap-10 bg-[#F2F2F2] py-10 md:px-10
                px-6\">
                    <img src=\"{{ 'assets/images/logo-c.png'|theme }}\" alt=\"\" class=\"w-[91px]\">
                    <div class=\"text-[16px] font-medium\">
                        {{ this.page.section2contact_description|raw }}
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
                            id=\"file_report\" onchange=\"loadFile(event)\" name=\"file_report\" accept=\"image/*\">
                        <div
                            class=\"border-[3px] h-[70%] w-[95%] border-white border-dashed rounded-md absolute flex items-center justify-center cursor-pointer\">
                            <h5 class=\"sm:text-[16px] text-[10px] font-medium sm:translate-x-0 translate-x-[2rem] cursor-pointer\"
                                id=\"name_file\">Tempel gambar
                                disini
                            </h5>
                            <img src=\" {{ 'assets/images/contact/icn-file.png'|theme }}\" alt=\"\"
                                class=\"absolute w-[4.5rem] sm:left-[-0.4rem] left-[-0.15rem] cursor-pointer\">
                        </div>

                    </div>
                    <button
                        class=\"bg-primary w-full flex items-center justify-center py-4 mt-[49px] mb-10 rounded-md text-white transition hover:bg-secondary\"
                        id=\"btn-send\">Kirim</button>
                </div>
            </form>
            <div id=\"myDiv\">{% partial 'mytime' %}</div>

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

{% partial 'floatwa' %}
{% partial 'footer' %}


<script>
    const name = document.querySelector(\"#nama\");
    const email = document.querySelector(\"#email\");
    const phone = document.querySelector(\"#phone\");
    const address = document.querySelector(\"#alamat\");
    const detail = document.querySelector(\"#detail\");
    const fileReport = document.querySelector(\"#file_report\");
    const meta = document.querySelector(\"meta[name='csrf-token']\");
    console.log(meta)

    const loadFile = function (event) {
        const uri = URL.createObjectURL(event.target.files[0]);
        // const uri2 = URL.revokeObjectURL(uri) // free memory
        console.log(uri)
    };

    const btnSend = document.querySelector('#btn-send');

    // btnSend.addEventListener(\"click\", () => {


    //     const obj = {
    //         name: name.value,
    //         email: email.value,
    //         phome: phone.value,
    //         address: address.value,
    //         detail: detail.value,
    //         filereport: fileReport.value
    //     }



    //     fetch(`http://localhost/posbill_cms/data-contact/\${obj.name}/\${obj.email}/\${obj.phone}/\${obj.address}/\${obj.detail}`, { body: obj })
    //     // window.location.href = `http://localhost/posbill_cms/data-contact/\${obj.name}/\${obj.email}/\${obj.phone}/\${obj.address}/\${obj.detail}/s`;

    // });


</script>", "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/kontak-kami.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 3, "for" => 62);
        static $filters = array("escape" => 9, "raw" => 11, "media" => 63, "theme" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'for'],
                ['escape', 'raw', 'media', 'theme'],
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
