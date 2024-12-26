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

/* modules/contrib/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_693138363049bdc2f6714b2d94f80a4e extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = ["slick-wrapper", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["blazies"] ?? null), "is", [], "any", false, false, true, 18), "nav", [], "any", false, false, true, 18)) ? ("slick-wrapper--asnavfor") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "skin", [], "any", false, false, true, 19)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 19)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 21)) ? ("slick-wrapper--v") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "vertical_tn", [], "any", false, false, true, 22)) ? ("slick-wrapper--v-tn") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23)) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23)))) : ("")), ((CoreExtension::inFilter("over", CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 24))) ? ("slick-wrapper--tn-overlay") : ("")), ((CoreExtension::inFilter("over", CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25))) ? (("slick-wrapper--tn-" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25), ["over-" => ""]))) : (""))];
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blazies"] ?? null), "is", [], "any", false, false, true, 28), "nav", [], "any", false, false, true, 28)) {
            // line 29
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 29), "id"), "html", null, true);
            yield ">";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true);
            // line 31
            yield "</div>
";
        } else {
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["items"] ?? null), "html", null, true);
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["blazies", "settings", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/slick/templates/slick-wrapper.html.twig";
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
        return array (  66 => 33,  62 => 31,  60 => 30,  56 => 29,  54 => 28,  52 => 25,  51 => 24,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  45 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a slick wrapper.
 *
 * Available variables:
 * - items: A list of items containing main and thumbnail of slick.html.twig
 *   which can be re-position using option Thumbnail position.
 * - attributes: HTML attributes to be applied to the list.
 * - settings: An array containing the given settings.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'slick-wrapper',
    blazies.is.nav ? 'slick-wrapper--asnavfor',
    settings.skin ? 'slick-wrapper--' ~ settings.skin|clean_class,
    settings.skin_thumbnail ? 'slick-wrapper--' ~ settings.skin_thumbnail|clean_class,
    settings.vertical ? 'slick-wrapper--v',
    settings.vertical_tn ? 'slick-wrapper--v-tn',
    settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|clean_class,
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-overlay',
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|replace({ 'over-' : '' })
  ]
%}
{%- if blazies.is.nav -%}
  <div{{ attributes.addClass(classes)|without('id') }}>
    {{- items -}}
  </div>
{% else %}
  {{- items -}}
{%- endif -%}
", "modules/contrib/slick/templates/slick-wrapper.html.twig", "/var/www/html/employee/web/modules/contrib/slick/templates/slick-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 28);
        static $filters = array("clean_class" => 19, "replace" => 25, "escape" => 29, "without" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
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
