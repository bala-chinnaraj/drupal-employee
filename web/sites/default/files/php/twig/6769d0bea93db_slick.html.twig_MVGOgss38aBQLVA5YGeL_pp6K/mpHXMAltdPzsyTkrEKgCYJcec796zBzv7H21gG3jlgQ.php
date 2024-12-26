<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/slick/templates/slick.html.twig */
class __TwigTemplate_3e59868e767c071a5ca1fa52a06b6400 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'slick_content' => [$this, 'block_slick_content'],
            'slick_arrow' => [$this, 'block_slick_arrow'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $context["classes"] = [((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["settings"] ?? null), "unslick", [], "any", false, false, true, 38)) ? ("unslick") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 39)) ? ("slick--vertical") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["settings"] ?? null), "attributes", [], "any", false, false, true, 40), "class", [], "any", false, false, true, 40)) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "attributes", [], "any", false, false, true, 40), "class", [], "any", false, false, true, 40), " ")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["settings"] ?? null), "skin", [], "any", false, false, true, 41)) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 41)))) : ("")), ((CoreExtension::inFilter("boxed", CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "skin", [], "any", false, false, true, 42))) ? ("slick--skin--boxed") : ("")), ((CoreExtension::inFilter("split", CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "skin", [], "any", false, false, true, 43))) ? ("slick--skin--split") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["settings"] ?? null), "optionset", [], "any", false, false, true, 44)) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "optionset", [], "any", false, false, true, 44)))) : ("")), ((        // line 45
array_key_exists("arrow_down_attributes", $context)) ? ("slick--has-arrow-down") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["settings"] ?? null), "asNavFor", [], "any", false, false, true, 46)) ? (("slick--" . \Drupal\Component\Utility\Html::getClass(($context["display"] ?? null)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["settings"] ?? null), "slidesToShow", [], "any", false, false, true, 47) > 1)) ? ("slick--multiple-view") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["blazies"] ?? null), "count", [], "any", false, false, true, 48) <= CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "slidesToShow", [], "any", false, false, true, 48))) ? ("slick--less") : ("")), ((((        // line 49
($context["display"] ?? null) == "main") && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 49))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "media_switch", [], "any", false, false, true, 49)))) : ("")), ((((        // line 50
($context["display"] ?? null) == "thumbnail") && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_caption", [], "any", false, false, true, 50))) ? ("slick--has-caption") : (""))];
        // line 54
        $context["arrow_classes"] = ["slick__arrow", ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 56)) ? ("slick__arrow--v") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 57)) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin_arrows", [], "any", false, false, true, 57)))) : (""))];
        // line 60
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 60), "html", null, true);
        yield ">";
        // line 61
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "unslick", [], "any", false, false, true, 61)) {
            // line 62
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["slick__slider"], "method", false, false, true, 62), "html", null, true);
            yield ">";
        }
        // line 65
        yield from $this->unwrap()->yieldBlock('slick_content', $context, $blocks);
        // line 69
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "unslick", [], "any", false, false, true, 69)) {
            // line 70
            yield "</div>
    ";
            // line 71
            yield from $this->unwrap()->yieldBlock('slick_arrow', $context, $blocks);
        }
        // line 85
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["settings", "arrow_down_attributes", "display", "blazies", "attributes", "content_attributes", "items", "arrow_attributes"]);        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slick_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true);
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slick_arrow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "      <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["arrow_attributes"] ?? null), "addClass", [($context["arrow_classes"] ?? null)], "method", false, false, true, 72), "html", null, true);
        yield ">
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(t(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "prevArrow", [], "any", false, false, true, 73))), "html", null, true);
        yield "\" tabindex=\"0\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "prevArrow", [], "any", false, false, true, 73)));
        yield "</button>";
        // line 74
        if (array_key_exists("arrow_down_attributes", $context)) {
            // line 75
            yield "<button";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["arrow_down_attributes"] ?? null), "addClass", ["slick-down"], "method", false, false, true, 75), "setAttribute", ["type", "button"], "method", false, false, true, 75), "setAttribute", ["data-role", "none"], "method", false, false, true, 76), "setAttribute", ["data-target", CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["settings"] ?? null), "downArrowTarget", [], "any", false, false, true, 78)], "method", false, false, true, 77), "setAttribute", ["data-offset", CoreExtension::getAttribute($this->env, $this->source,             // line 79
($context["settings"] ?? null), "downArrowOffset", [], "any", false, false, true, 79)], "method", false, false, true, 78), "html", null, true);
            yield "></button>";
        }
        // line 81
        yield "<button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(t(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "nextArrow", [], "any", false, false, true, 81))), "html", null, true);
        yield "\" tabindex=\"0\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "nextArrow", [], "any", false, false, true, 81)));
        yield "</button>
      </nav>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/slick/templates/slick.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  131 => 81,  127 => 79,  126 => 78,  124 => 75,  122 => 74,  117 => 73,  112 => 72,  105 => 71,  100 => 66,  93 => 65,  86 => 85,  83 => 71,  80 => 70,  78 => 69,  76 => 65,  71 => 62,  69 => 61,  65 => 60,  63 => 57,  62 => 56,  61 => 54,  59 => 50,  58 => 49,  57 => 48,  56 => 47,  55 => 46,  54 => 45,  53 => 44,  52 => 43,  51 => 42,  50 => 41,  49 => 40,  48 => 39,  47 => 38,  46 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the Slick carousel template.
 *
 * This template holds 3 displays: main, thumbnail and overlay slicks in one.
 * Arrows are enforced, but toggled by JS accordingly. This allows responsive
 * object to enable and disable it as needed without losing context.
 *
 * Available variables:
 * - items: The array of items containing main image/video/audio, optional
 *     image/video/audio overlay and captions, and optional thumbnail
 *     texts/images.
 * - settings: A cherry-picked settings that mostly defines the slide HTML or
 *     layout, and none of JS settings/options which are defined at data-slick.
 * - attributes: The array of attributes to hold the main container classes, id.
 * - content_attributes: The array of attributes to hold optional RTL, id and
 *     data-slick containing JSON object aka JS settings the Slick expects to
 *     override default options. We don't store these JS settings in the normal
 *     <head>, but inline within data-slick attribute instead.
 *
 * Debug:
 * @see https://www.drupal.org/node/1906780
 * @see https://www.drupal.org/node/1903374
 * Use Kint: {{ kint(variable) }}
 * Dump all available variables and their contents: {{ dump() }}
 * Dump only the available variable keys: {{ dump(_context|keys) }}
 *
 * Note!
 * - Unlike Splide, Slick changed markups when being unslick since it doesn't
 *   use HTML list (UL > LI) to worry about, and it behaves with 1 slide.
 * - If you see blazies, it is used to interop with Splide, such as required by
 *   ElevateZoomPlus.
 */
#}
{%
  set classes = [
    settings.unslick ? 'unslick',
    settings.vertical ? 'slick--vertical',
    settings.attributes.class ? settings.attributes.class|join(' '),
    settings.skin ? 'slick--skin--' ~ settings.skin|clean_class,
    'boxed' in settings.skin ? 'slick--skin--boxed',
    'split' in settings.skin ? 'slick--skin--split',
    settings.optionset ? 'slick--optionset--' ~ settings.optionset|clean_class,
    arrow_down_attributes is defined ? 'slick--has-arrow-down',
    settings.asNavFor ? 'slick--' ~ display|clean_class,
    settings.slidesToShow > 1 ? 'slick--multiple-view',
    blazies.count <= settings.slidesToShow ? 'slick--less',
    display == 'main' and settings.media_switch ? 'slick--' ~ settings.media_switch|clean_class,
    display == 'thumbnail' and settings.thumbnail_caption ? 'slick--has-caption'
  ]
%}
{%
  set arrow_classes = [
    'slick__arrow',
    settings.vertical ? 'slick__arrow--v',
    settings.skin_arrows ? 'slick__arrow--' ~ settings.skin_arrows|clean_class
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {%- if not settings.unslick -%}
    <div{{ content_attributes.addClass('slick__slider') }}>
  {%- endif -%}

  {% block slick_content %}
    {{- items -}}
  {% endblock %}

  {%- if not settings.unslick -%}
    </div>
    {% block slick_arrow %}
      <nav{{ arrow_attributes.addClass(arrow_classes) }}>
        <button type=\"button\" data-role=\"none\" class=\"slick-prev\" aria-label=\"{{ settings.prevArrow|t|striptags }}\" tabindex=\"0\">{{ settings.prevArrow|t }}</button>
        {%- if arrow_down_attributes is defined -%}
          <button{{ arrow_down_attributes.addClass('slick-down')
            .setAttribute('type', 'button')
            .setAttribute('data-role', 'none')
            .setAttribute('data-target', settings.downArrowTarget)
            .setAttribute('data-offset', settings.downArrowOffset) }}></button>
        {%- endif -%}
        <button type=\"button\" data-role=\"none\" class=\"slick-next\" aria-label=\"{{ settings.nextArrow|t|striptags }}\" tabindex=\"0\">{{ settings.nextArrow|t }}</button>
      </nav>
    {% endblock %}
  {%- endif -%}
</div>
", "modules/contrib/slick/templates/slick.html.twig", "/var/www/html/employee/web/modules/contrib/slick/templates/slick.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 61, "block" => 65);
        static $filters = array("join" => 40, "clean_class" => 41, "escape" => 60, "striptags" => 73, "t" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['join', 'clean_class', 'escape', 'striptags', 't'],
                [],
                $this->source
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
