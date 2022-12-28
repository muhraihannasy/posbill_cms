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

/* C:\Project Novatama\posbill_cms/themes/posbill/pages/kebijakan-privasi.htm */
class __TwigTemplate_05411d6d33406a5f3dc5a4be18e1d56ff5e167e618b9286110b34f671fd25f98 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<main>
\t<section>
\t\t<div class=\"container pt-[3rem] kebijakan-privasi\">
\t\t\t<h2 class=\"text-[1.5rem] mb-[1.5rem]\"><strong>Kebijakan Privasi</strong></h2>
\t\t\t";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "section1_description", [], "any", false, false, true, 7), 7, $this->source);
        echo "
\t\t</div>
\t</section>
</main>


";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("floatwa"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/kebijakan-privasi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 13,  50 => 7,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'nav2' %}

<main>
\t<section>
\t\t<div class=\"container pt-[3rem] kebijakan-privasi\">
\t\t\t<h2 class=\"text-[1.5rem] mb-[1.5rem]\"><strong>Kebijakan Privasi</strong></h2>
\t\t\t{{ this.page.section1_description|raw }}
\t\t</div>
\t</section>
</main>


{% partial 'floatwa' %}
{% partial 'footer' %}", "C:\\Project Novatama\\posbill_cms/themes/posbill/pages/kebijakan-privasi.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("raw" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['raw'],
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
