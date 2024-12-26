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

/* themes/custom/employee/templates/classy/form/details.html.twig */
class __TwigTemplate_d9c7b3d5ce64c69ddfb272a0fe1307be extends Template
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
        // line 18
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">";
        // line 19
        if (($context["title"] ?? null)) {
            // line 21
            $context["summary_classes"] = [((            // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 23
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 26
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 26), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</summary>";
        }
        // line 28
        yield "<div class=\"details-wrapper\">
    ";
        // line 29
        if (($context["errors"] ?? null)) {
            // line 30
            yield "      <div class=\"form-item--error-message\">
        <strong>";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 34
        if (($context["description"] ?? null)) {
            // line 35
            yield "<div class=\"details-description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 37
        if (($context["children"] ?? null)) {
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        }
        // line 40
        if (($context["value"] ?? null)) {
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 43
        yield "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/employee/templates/classy/form/details.html.twig";
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
        return array (  92 => 43,  89 => 41,  87 => 40,  84 => 38,  82 => 37,  77 => 35,  75 => 34,  69 => 31,  66 => 30,  64 => 29,  61 => 28,  54 => 26,  52 => 23,  51 => 22,  50 => 21,  48 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - summary_attributes: A list of HTML attributes for the summary element.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
<details{{ attributes }}>
  {%- if title -%}
    {%
      set summary_classes = [
        required ? 'js-form-required',
        required ? 'form-required',
      ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>{{ title }}</summary>
  {%- endif -%}
  <div class=\"details-wrapper\">
    {% if errors %}
      <div class=\"form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {%- if description -%}
      <div class=\"details-description\">{{ description }}</div>
    {%- endif -%}
    {%- if children -%}
      {{ children }}
    {%- endif -%}
    {%- if value -%}
      {{ value }}
    {%- endif -%}
  </div>
</details>
", "themes/custom/employee/templates/classy/form/details.html.twig", "/var/www/html/employee/web/themes/custom/employee/templates/classy/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 21);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
