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

/* themes/custom/employee/templates/classy/dataset/table.html.twig */
class __TwigTemplate_2d7b6c49a40e8eff69c78889fb597404 extends Template
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
        // line 42
        yield "<table";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 43
        if (($context["caption"] ?? null)) {
            // line 44
            yield "    <caption>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
            yield "</caption>
  ";
        }
        // line 46
        yield "
  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["colgroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 48
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 48)) {
                // line 49
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 49), "html", null, true);
                yield ">
        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", false, false, true, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 51
                    yield "          <col";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "attributes", [], "any", false, false, true, 51), "html", null, true);
                    yield " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "      </colgroup>
    ";
            } else {
                // line 55
                yield "      <colgroup";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", false, false, true, 55), "html", null, true);
                yield " />
    ";
            }
            // line 57
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['colgroup'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
  ";
        // line 59
        if (($context["header"] ?? null)) {
            // line 60
            yield "    <thead>
      <tr>
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 63
                yield "          ";
                // line 64
                $context["cell_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 65
$context["cell"], "active_table_sort", [], "any", false, false, true, 65)) ? ("is-active") : (""))];
                // line 68
                yield "          <";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 68), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["cell_classes"] ?? null)], "method", false, false, true, 68), "html", null, true);
                yield ">";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 69), "html", null, true);
                // line 70
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 70), "html", null, true);
                yield ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "      </tr>
    </thead>
  ";
        }
        // line 75
        yield "
  ";
        // line 76
        if (($context["rows"] ?? null)) {
            // line 77
            yield "    <tbody>
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 79
                yield "        ";
                // line 80
                $context["row_classes"] = [(( !                // line 81
($context["no_striping"] ?? null)) ? (Twig\Extension\CoreExtension::cycle(["odd", "even"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 81))) : (""))];
                // line 84
                yield "        <tr";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 84), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 84), "html", null, true);
                yield ">
          ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 86
                    yield "            <";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 86), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 86), "html", null, true);
                    yield ">";
                    // line 87
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 87), "html", null, true);
                    // line 88
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 88), "html", null, true);
                    yield ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "    </tbody>
  ";
        } elseif (        // line 93
($context["empty"] ?? null)) {
            // line 94
            yield "    <tbody>
      <tr class=\"odd\">
        <td colspan=\"";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_columns"] ?? null), "html", null, true);
            yield "\" class=\"empty message\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "</td>
      </tr>
    </tbody>
  ";
        }
        // line 100
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 101
            yield "    <tfoot>
      ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["footer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 103
                yield "        <tr";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 103), "html", null, true);
                yield ">
          ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cells", [], "any", false, false, true, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 105
                    yield "            <";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 105), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "attributes", [], "any", false, false, true, 105), "html", null, true);
                    yield ">";
                    // line 106
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "content", [], "any", false, false, true, 106), "html", null, true);
                    // line 107
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cell"], "tag", [], "any", false, false, true, 107), "html", null, true);
                    yield ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "    </tfoot>
  ";
        }
        // line 113
        yield "</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "caption", "colgroups", "header", "rows", "no_striping", "loop", "empty", "header_columns", "footer"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/employee/templates/classy/dataset/table.html.twig";
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
        return array (  274 => 113,  270 => 111,  263 => 109,  254 => 107,  252 => 106,  247 => 105,  243 => 104,  238 => 103,  234 => 102,  231 => 101,  228 => 100,  219 => 96,  215 => 94,  213 => 93,  210 => 92,  195 => 90,  186 => 88,  184 => 87,  179 => 86,  175 => 85,  170 => 84,  168 => 81,  167 => 80,  165 => 79,  148 => 78,  145 => 77,  143 => 76,  140 => 75,  135 => 72,  126 => 70,  124 => 69,  119 => 68,  117 => 65,  116 => 64,  114 => 63,  110 => 62,  106 => 60,  104 => 59,  101 => 58,  95 => 57,  89 => 55,  85 => 53,  76 => 51,  72 => 50,  67 => 49,  64 => 48,  60 => 47,  57 => 46,  51 => 44,  49 => 43,  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a table.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the <table> tag.
 * - caption: A localized string for the <caption> tag.
 * - colgroups: Column groups. Each group contains the following properties:
 *   - attributes: HTML attributes to apply to the <col> tag.
 *     Note: Drupal currently supports only one table header row, see
 *     https://www.drupal.org/node/893530 and
 *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.
 * - header: Table header cells. Each cell contains the following properties:
 *   - tag: The HTML tag name to use; either 'th' or 'td'.
 *   - attributes: HTML attributes to apply to the tag.
 *   - content: A localized string for the title of the column.
 *   - field: Field name (required for column sorting).
 *   - sort: Default sort order for this column (\"asc\" or \"desc\").
 * - sticky: A flag indicating whether to use a \"sticky\" table header.
 * - rows: Table rows. Each row contains the following properties:
 *   - attributes: HTML attributes to apply to the <tr> tag.
 *   - data: Table cells.
 *   - no_striping: A flag indicating that the row should receive no
 *     'even / odd' styling. Defaults to FALSE.
 *   - cells: Table cells of the row. Each cell contains the following keys:
 *     - tag: The HTML tag name to use; either 'th' or 'td'.
 *     - attributes: Any HTML attributes, such as \"colspan\", to apply to the
 *       table cell.
 *     - content: The string to display in the table cell.
 *     - active_table_sort: A boolean indicating whether the cell is the active
         table sort.
 * - footer: Table footer rows, in the same format as the rows variable.
 * - empty: The message to display in an extra row if table does not have
 *   any rows.
 * - no_striping: A boolean indicating that the row should receive no striping.
 * - header_columns: The number of columns in the header.
 *
 * @see template_preprocess_table()
 */
#}
<table{{ attributes }}>
  {% if caption %}
    <caption>{{ caption }}</caption>
  {% endif %}

  {% for colgroup in colgroups %}
    {% if colgroup.cols %}
      <colgroup{{ colgroup.attributes }}>
        {% for col in colgroup.cols %}
          <col{{ col.attributes }} />
        {% endfor %}
      </colgroup>
    {% else %}
      <colgroup{{ colgroup.attributes }} />
    {% endif %}
  {% endfor %}

  {% if header %}
    <thead>
      <tr>
        {% for cell in header %}
          {%
            set cell_classes = [
              cell.active_table_sort ? 'is-active',
            ]
          %}
          <{{ cell.tag }}{{ cell.attributes.addClass(cell_classes) }}>
            {{- cell.content -}}
          </{{ cell.tag }}>
        {% endfor %}
      </tr>
    </thead>
  {% endif %}

  {% if rows %}
    <tbody>
      {% for row in rows %}
        {%
          set row_classes = [
            not no_striping ? cycle(['odd', 'even'], loop.index0),
          ]
        %}
        <tr{{ row.attributes.addClass(row_classes) }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tbody>
  {% elseif empty %}
    <tbody>
      <tr class=\"odd\">
        <td colspan=\"{{ header_columns }}\" class=\"empty message\">{{ empty }}</td>
      </tr>
    </tbody>
  {% endif %}
  {% if footer %}
    <tfoot>
      {% for row in footer %}
        <tr{{ row.attributes }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tfoot>
  {% endif %}
</table>
", "themes/custom/employee/templates/classy/dataset/table.html.twig", "/var/www/html/employee/web/themes/custom/employee/templates/classy/dataset/table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "for" => 47, "set" => 64);
        static $filters = array("escape" => 42);
        static $functions = array("cycle" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['cycle'],
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
