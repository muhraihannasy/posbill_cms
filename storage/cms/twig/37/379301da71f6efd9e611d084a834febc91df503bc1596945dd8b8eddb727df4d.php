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

/* C:\Project Novatama\posbill_cms/themes/posbill/pages/jasa.htm */
class __TwigTemplate_0cfc8eceed08336f6a49d213b4c2e4ab8edbeb35255e47f4ba8778f5b8e3454f extends \Twig\Template
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
        $context["BASEURL"] = "http://127.0.0.1:8000";
        // line 2
        echo "

";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
<main>
    <section class=\"bg-no-repeat bg-center bg-cover h-[644px] flex items-center text-white\"
        style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 8, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "section1jasa_background", [], "any", false, false, true, 8), 8, $this->source));
        echo "')\">
        <div class=\"container \">
            <h2 class=\"font-semibold text-[24px] mb-[29px]\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "section1jasa_subtitle", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h2>
            <h2 class=\"font-semibold md:text-[48px] sm:w-[565px] text-[40px] leading-tight mb-[20px]\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "section1jasa_title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            </h2>
            <div class=\"mb-[31px] w-[597px] font-semibold\">
                ";
        // line 15
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "section1jasa_description", [], "any", false, false, true, 15), 15, $this->source);
        echo "
            </div>
            <a href=\"http://wa.me/6285157220258\" class=\"btn-gradient2 text-[#222222]\">";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "section1jasa_text_btn", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</a>
        </div>
    </section>

    <section class=\"bg-fivety py-24\">
        <div class=\"container grid lg:grid-cols-2 grid-cols-1 gap-10\">
            <div class=\"flex items-center\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 24, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "section2jasa_image", [], "any", false, false, true, 24), 24, $this->source));
        echo "\" alt=\"\" class=\"lg:w-[519px] rounded-md\">
            </div>
            <div class=\"flex items-center\">
                <div class=\"font-semibold text-[24px] text-[#222222] lg:w-[436px]\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "section2jasa_title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </section>

    <section class=\"mt-[70px]\">
        <div class=\"container\">
            <h2 class=\"font-semibold text-[#222222] text-[32px] text-center mb-[100px]\">";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 36), "section3jasa_title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        // line 37
        echo "
            </h2>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "section3jasa_2", [], "any", false, false, true, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 41
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["card"], "right", [], "any", false, false, true, 41) == true)) {
                // line 42
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20  mt-20\">
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"lg:text-right font-semibold text-[28px]\">";
                // line 44
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"lg:text-right text-[20px] paragraf\">
                        ";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 46), 46, $this->source);
                echo "
                    </div>
                </div>
                <div>
                    <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 50, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 50), 50, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
            </div>
            ";
            } else {
                // line 54
                echo "            <div class=\"grid lg:grid-cols-2 grid-cols-1 gap-20 mt-20\">
                <div>
                    <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 56, $this->source), "html", null, true);
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, true, 56), 56, $this->source));
                echo "\" alt=\"\" class=\"rounded-md\">
                </div>
                <div class=\"flex flex-col justify-center gap-2\">
                    <h2 class=\"font-semibold text-[28px]\">";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "</h2>
                    <div class=\"text-[20px]\">
                        ";
                // line 61
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 61), 61, $this->source);
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            // line 66
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

        </div>
    </section>

    <section class=\"mt-[100px] bg-fivety py-12\">
        <div class=\"container\">
            <h2 class=\"text-[32px] font-semibold text-[#222222] mb-[38px]\">Artikel POSbill</h2>


            ";
        // line 78
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 78);
        // line 79
        echo "
            <ul class=\"post-list grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 82
            echo "
                <li>
                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "\">
                        ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 85), "count", [], "any", false, false, true, 85)) {
                // line 86
                echo "                        <div class=\"featured-images text-center\">
                            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 88
                    echo "                            <p>
                                <img data-src=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                    echo "\"
                                    alt=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo "\" class=\"w-full\" />
                            </p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                        </div>
                        ";
            }
            // line 95
            echo "                        <h3 class=\"font-medium text-[16px] mt-4\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</a></h3>
                        <p class=\"excerpt text-[14px] mt-5\">";
            // line 96
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 96), 96, $this->source);
            echo "</p>
                    </a>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "\" class=\"flex items-center gap-4 text-primary mt-2\">
                        Selengkapnya
                        <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                    </a>
                </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </ul>

            ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 108) > 1)) {
            // line 109
            echo "            <ul class=\"pagination\">
                ";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 110) > 1)) {
                // line 111
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 111), "baseFileName", [], "any", false, false, true, 111), 111, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 111) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 111) - 1)]);
                echo "\">&larr;
                        Prev</a></li>
                ";
            }
            // line 114
            echo "
                ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 115)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 116
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 116) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 117
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 117), "baseFileName", [], "any", false, false, true, 117), 117, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 117) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 117, $this->source), "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "
                ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 121) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 121))) {
                // line 122
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 122), "baseFileName", [], "any", false, false, true, 122), 122, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 122) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 122) + 1)]);
                echo "\">Next
                        &rarr;</a></li>
                ";
            }
            // line 125
            echo "            </ul>
            ";
        }
        // line 127
        echo "        </div>
    </section>



</main>

";
        // line 134
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("floatwa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/jasa.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 135,  334 => 134,  325 => 127,  321 => 125,  314 => 122,  312 => 121,  309 => 120,  298 => 117,  293 => 116,  289 => 115,  286 => 114,  279 => 111,  277 => 110,  274 => 109,  272 => 108,  268 => 106,  259 => 104,  248 => 98,  243 => 96,  236 => 95,  232 => 93,  223 => 90,  217 => 89,  214 => 88,  210 => 87,  207 => 86,  205 => 85,  201 => 84,  197 => 82,  192 => 81,  188 => 79,  186 => 78,  174 => 68,  167 => 66,  159 => 61,  154 => 59,  147 => 56,  143 => 54,  135 => 50,  128 => 46,  123 => 44,  119 => 42,  116 => 41,  112 => 40,  107 => 37,  105 => 36,  94 => 28,  86 => 24,  76 => 17,  71 => 15,  65 => 12,  60 => 10,  54 => 8,  49 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://127.0.0.1:8000' %}


{% partial 'nav2' %}

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
            <a href=\"http://wa.me/6285157220258\" class=\"btn-gradient2 text-[#222222]\">{{ this.page.section1jasa_text_btn }}</a>
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


            {% set posts = blogPosts.posts %}

            <ul class=\"post-list grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-28\">
                {% for post in posts %}

                <li>
                    <a href=\"{{ post.url }}\">
                        {% if post.featured_images.count %}
                        <div class=\"featured-images text-center\">
                            {% for image in post.featured_images %}
                            <p>
                                <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\"
                                    alt=\"{{ image.description }}\" class=\"w-full\" />
                            </p>
                            {% endfor %}
                        </div>
                        {% endif %}
                        <h3 class=\"font-medium text-[16px] mt-4\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                        <p class=\"excerpt text-[14px] mt-5\">{{ post.summary|raw }}</p>
                    </a>
                    <a href=\"{{ post.url }}\" class=\"flex items-center gap-4 text-primary mt-2\">
                        Selengkapnya
                        <span class=\"iconify\" data-icon=\"charm:arrow-right\"></span>
                    </a>
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
        </div>
    </section>



</main>

{% partial 'floatwa' %}
{% partial 'footer' %}", "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/jasa.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 4, "for" => 40, "if" => 41);
        static $filters = array("escape" => 8, "media" => 8, "raw" => 15, "page" => 111);
        static $functions = array("range" => 115);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'for', 'if'],
                ['escape', 'media', 'raw', 'page'],
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
