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

/* themes/custom/employee/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_60f8ae61c635c2e479e1ff8a25619031 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = ["block", "block-menu", "navigation", ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null)))];
        // line 42
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 42) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        yield "
  ";
        // line 45
        yield "  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 45)) {
            // line 46
            yield "    ";
            $context["title_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 46);
            // line 47
            yield "  ";
        }
        // line 48
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  <h2";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 49), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 49), "html", null, true);
        yield "</h2>
  ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 53
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 56
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["derivative_plugin_id", "attributes", "configuration", "title_prefix", "title_suffix", "content"]);        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/employee/templates/block/block--system-menu-block.html.twig";
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
        return array (  95 => 54,  88 => 53,  81 => 56,  78 => 53,  73 => 50,  67 => 49,  62 => 48,  59 => 47,  56 => 46,  53 => 45,  50 => 43,  48 => 42,  46 => 39,  45 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 */
#}
{%
  set classes = [
    'block',
    'block-menu',
    'navigation',
    'menu--' ~ derivative_plugin_id|clean_class,
  ]
%}
{% set heading_id = attributes.id ~ '-menu'|clean_id %}

  {# Label. If not displayed, we still provide it for screen readers. #}
  {% if not configuration.label_display %}
    {% set title_attributes = title_attributes.addClass('visually-hidden') %}
  {% endif %}
  {{ title_prefix }}
  <h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>
  {{ title_suffix }}

  {# Menu. #}
  {% block content %}
    {{ content }}
  {% endblock %}

", "themes/custom/employee/templates/block/block--system-menu-block.html.twig", "/var/www/html/employee/web/themes/custom/employee/templates/block/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 45, "block" => 53);
        static $filters = array("clean_class" => 39, "clean_id" => 42, "escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape'],
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
