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

/* modules/contrib/slick/templates/slick-slide.html.twig */
class __TwigTemplate_1031393dbc32be424ac772c0f0da9cfd extends Template
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
            'slick_slide' => [$this, 'block_slick_slide'],
            'slick_caption' => [$this, 'block_slick_caption'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["classes"] = [("slide--" .         // line 22
($context["delta"] ?? null)), ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["item"] ?? null), "slide", [], "any", false, false, true, 23))) ? ("slide--text") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "layout", [], "any", false, false, true, 24)) ? (("slide--caption--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "layout", [], "any", false, false, true, 24)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "class", [], "any", false, false, true, 25)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "class", [], "any", false, false, true, 25)) : (""))];
        // line 29
        $context["content_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["settings"] ?? null), "detroy", [], "any", false, false, true, 30)) ? ("slide") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["settings"] ?? null), "detroy", [], "any", false, false, true, 31)) ? ("slide__content") : (""))];
        // line 35
        $context["caption_classes"] = ["slide__caption"];
        // line 39
        $context["use_blazy"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blazies"] ?? null), "use", [], "any", false, false, true, 39), "theme_blazy", [], "any", false, false, true, 39);
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "wrapper", [], "any", false, false, true, 40)) {
            // line 41
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 41), "html", null, true);
            yield ">";
        }
        // line 44
        if (($context["use_blazy"] ?? null)) {
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true);
        } else {
            // line 47
            yield "    ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "use_ca", [], "any", false, false, true, 51)) {
                yield "<div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 51), "html", null, true);
                yield ">";
            }
            // line 52
            $context["slide"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 53
                yield "        ";
                yield from $this->unwrap()->yieldBlock('slick_slide', $context, $blocks);
                // line 60
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 62)) {
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide"] ?? null), "html", null, true);
            }
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 66)) {
                // line 67
                yield from $this->unwrap()->yieldBlock('slick_caption', $context, $blocks);
            }
            // line 92
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "use_ca", [], "any", false, false, true, 92)) {
                yield "</div>";
            }
        }
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "wrapper", [], "any", false, false, true, 95)) {
            // line 96
            yield "</div>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["delta", "item", "settings", "blazies", "attributes", "content_attributes", "caption_attributes"]);        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slick_slide(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "split", [], "any", false, false, true, 54)) {
            // line 55
            yield "<div class=\"slide__media\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 55), "html", null, true);
            yield "</div>
          ";
        } else {
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "slide", [], "any", false, false, true, 57), "html", null, true);
        }
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slick_caption(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "fullwidth", [], "any", false, false, true, 68)) {
            yield "<div class=\"slide__constrained\">";
        }
        // line 69
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["caption_attributes"] ?? null), "addClass", [($context["caption_classes"] ?? null)], "method", false, false, true, 69), "html", null, true);
        yield ">";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 70), "overlay", [], "any", false, false, true, 70)) {
            // line 71
            yield "<div class=\"slide__overlay\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 71), "overlay", [], "any", false, false, true, 71), "html", null, true);
            yield "</div>";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 72)) {
                yield "<div class=\"slide__data\">";
            }
        }
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 74), "title", [], "any", false, false, true, 74)) {
            // line 75
            yield "<h2 class=\"slide__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 75), "title", [], "any", false, false, true, 75), "html", null, true);
            yield "</h2>";
        }
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 77), "alt", [], "any", false, false, true, 77)) {
            // line 78
            yield "<p class=\"slide__description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 78), "alt", [], "any", false, false, true, 78), "html", null, true);
            yield "</p>";
        }
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 80), "data", [], "any", false, false, true, 80)) {
            // line 81
            yield "<div class=\"slide__description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 81), "data", [], "any", false, false, true, 81), "html", null, true);
            yield "</div>";
        }
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 83), "link", [], "any", false, false, true, 83)) {
            // line 84
            yield "<div class=\"slide__link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 84), "link", [], "any", false, false, true, 84), "html", null, true);
            yield "</div>";
        }
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caption", [], "any", false, false, true, 86), "overlay", [], "any", false, false, true, 86) && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 86))) {
            yield "</div>";
        }
        // line 87
        yield "</div>";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "fullwidth", [], "any", false, false, true, 88)) {
            yield "</div>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/slick/templates/slick-slide.html.twig";
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
        return array (  194 => 88,  192 => 87,  188 => 86,  183 => 84,  181 => 83,  176 => 81,  174 => 80,  169 => 78,  167 => 77,  162 => 75,  160 => 74,  155 => 72,  151 => 71,  149 => 70,  145 => 69,  141 => 68,  134 => 67,  128 => 57,  122 => 55,  120 => 54,  113 => 53,  106 => 96,  104 => 95,  99 => 92,  96 => 67,  94 => 66,  91 => 63,  89 => 62,  85 => 60,  82 => 53,  80 => 52,  74 => 51,  72 => 47,  69 => 45,  67 => 44,  62 => 41,  60 => 40,  58 => 39,  56 => 35,  54 => 31,  53 => 30,  52 => 29,  50 => 25,  49 => 24,  48 => 23,  47 => 22,  46 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the individual slick item/slide template.
 *
 * Available variables:
 * - attributes: An array of attributes to apply to the element.
 * - item.slide: A renderable array of the main image/background.
 * - item.caption: A renderable array containing caption fields if provided:
 *   - title: The individual slide title.
 *   - alt: The core Image field Alt as caption.
 *   - link: The slide links or buttons.
 *   - overlay: The image/audio/video overlay, or a nested slick.
 *   - data: any possible field for more complex data if crazy enough.
 * - settings: An array containing the given settings.
 *
 * @see template_preprocess_slick_slide()
 */
#}
{%
  set classes = [
    'slide--' ~ delta,
    item.slide is empty ? 'slide--text',
    settings.layout ? 'slide--caption--' ~ settings.layout|clean_class,
    settings.class ? settings.class
  ]
%}
{%
  set content_classes = [
    settings.detroy ? 'slide',
    not settings.detroy ? 'slide__content'
  ]
%}
{%
  set caption_classes = [
    'slide__caption',
  ]
%}
{% set use_blazy = blazies.use.theme_blazy  %}
{%- if settings.wrapper -%}
  <div{{ attributes.addClass(classes) }}>
{%- endif -%}

  {%- if use_blazy -%}
    {{- item -}}
  {% else %}
    {# @todo remove all below at 3.x for theme_blazy(). If you need to modify
    anything, please use MYTHEME_preprocess_blazy() instead, starting at 3.x,
    or better just use CSS for more reliable theming. FYI, theme_blazy()
    offers greater possibility and versatility, that is why it is deprecated. #}
    {%- if settings.use_ca -%}<div{{ content_attributes.addClass(content_classes) }}>{%- endif -%}
      {% set slide %}
        {% block slick_slide %}
          {%- if settings.split -%}
            <div class=\"slide__media\">{{- item.slide -}}</div>
          {% else %}
            {{- item.slide -}}
          {%- endif -%}
        {% endblock %}
      {% endset %}

      {%- if item.slide -%}
        {{- slide -}}
      {%- endif -%}

      {%- if item.caption -%}
        {% block slick_caption %}
          {%- if settings.fullwidth -%}<div class=\"slide__constrained\">{%- endif -%}
            <div{{ caption_attributes.addClass(caption_classes) }}>
              {%- if item.caption.overlay -%}
                <div class=\"slide__overlay\">{{ item.caption.overlay }}</div>
                {%- if settings.data -%}<div class=\"slide__data\">{%- endif -%}
              {%- endif -%}
              {%- if item.caption.title -%}
                <h2 class=\"slide__title\">{{ item.caption.title }}</h2>
              {%- endif -%}
              {%- if item.caption.alt -%}
                <p class=\"slide__description\">{{ item.caption.alt }}</p>
              {%- endif -%}
              {%- if item.caption.data -%}
                <div class=\"slide__description\">{{- item.caption.data -}}</div>
              {%- endif -%}
              {%- if item.caption.link -%}
                <div class=\"slide__link\">{{ item.caption.link }}</div>
              {%- endif -%}
              {%- if item.caption.overlay and settings.data -%}</div>{%- endif -%}
            </div>
          {%- if settings.fullwidth -%}</div>{%- endif -%}
        {% endblock %}
      {%- endif -%}

    {%- if settings.use_ca -%}</div>{%- endif -%}
  {%- endif -%}

{%- if settings.wrapper -%}
  </div>
{%- endif -%}
", "modules/contrib/slick/templates/slick-slide.html.twig", "/var/www/html/employee/web/modules/contrib/slick/templates/slick-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 40, "block" => 53);
        static $filters = array("clean_class" => 24, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
