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

/* themes/custom/employee/templates/classy/form/fieldset.html.twig */
class __TwigTemplate_764a73689f5a3debdfe155a3a530502e extends Template
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
        // line 29
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 36
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 36), "html", null, true);
        yield ">
  ";
        // line 38
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 40
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 41
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 44
        yield "  ";
        // line 45
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 45), "html", null, true);
        yield ">
    <span";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 46), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 46), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 46), "html", null, true);
        yield "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 49
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 49))) {
            // line 50
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 50), "addClass", ["description"], "method", false, false, true, 50), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 50), "html", null, true);
            yield "</div>
    ";
        }
        // line 52
        yield "    ";
        if (($context["errors"] ?? null)) {
            // line 53
            yield "      <div class=\"form-item--error-message\">
        <strong>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 57
        yield "    ";
        if (($context["prefix"] ?? null)) {
            // line 58
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 60
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
    ";
        // line 61
        if (($context["suffix"] ?? null)) {
            // line 62
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 64
        yield "    ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 64))) {
            // line 65
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 65), "addClass", ["description"], "method", false, false, true, 65), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 65), "html", null, true);
            yield "</div>
    ";
        }
        // line 67
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend", "legend_span", "description_display", "description", "errors", "prefix", "children", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/employee/templates/classy/form/fieldset.html.twig";
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
        return array (  125 => 67,  117 => 65,  114 => 64,  108 => 62,  106 => 61,  101 => 60,  95 => 58,  92 => 57,  86 => 54,  83 => 53,  80 => 52,  72 => 50,  70 => 49,  62 => 46,  57 => 45,  55 => 44,  53 => 41,  52 => 40,  51 => 38,  46 => 36,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a fieldset element and its children.
 *
 * Available variables:
 * - attributes: HTML attributes for the fieldset element.
 * - errors: (optional) Any errors for this fieldset element, may not be set.
 * - required: Boolean indicating whether the fieldset element is required.
 * - legend: The legend element containing the following properties:
 *   - title: Title of the fieldset, intended for use as the text of the legend.
 *   - attributes: HTML attributes to apply to the legend.
 * - description: The description element containing the following properties:
 *   - content: The description content of the fieldset.
 *   - attributes: HTML attributes to apply to the description container.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element (default).
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - children: The rendered child elements of the fieldset.
 * - prefix: The content to add before the fieldset children.
 * - suffix: The content to add after the fieldset children.
 *
 * @see template_preprocess_fieldset()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {#  Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
    {% if errors %}
      <div class=\"form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {% if prefix %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
  </div>
</fieldset>
", "themes/custom/employee/templates/classy/form/fieldset.html.twig", "/var/www/html/employee/web/themes/custom/employee/templates/classy/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 49);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
