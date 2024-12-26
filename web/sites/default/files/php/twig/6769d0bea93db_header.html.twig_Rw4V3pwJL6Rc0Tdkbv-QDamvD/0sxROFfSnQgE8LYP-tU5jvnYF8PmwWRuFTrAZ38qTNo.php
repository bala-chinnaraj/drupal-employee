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

/* @employee/includes/header.html.twig */
class __TwigTemplate_304188e8541a158faf1dc0f79cf23bae extends Template
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
        // line 1
        yield "<header class=\"header\">
  <div class=\"logo_section\"><a href=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Employee Portal</a></div>";
        // line 4
        yield "<nav class=\"navbar navbar-expand-xl\">
    
        <div class=\"container\">
            <div class=\"d-flex justify-content-between align-items-center\">
                ";
        // line 9
        yield "                ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 9), "html", null, true);
        yield "
                ";
        // line 11
        yield "            </div>
        </div>
    </nav>";
        // line 15
        yield "</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@employee/includes/header.html.twig";
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
        return array (  65 => 15,  61 => 11,  56 => 9,  50 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"header\">
  <div class=\"logo_section\"><a href=\"{{ url(\"<front>\") }}\">Employee Portal</a></div>
  {#-- Navbar --#}
    <nav class=\"navbar navbar-expand-xl\">
    
        <div class=\"container\">
            <div class=\"d-flex justify-content-between align-items-center\">
                {# Navbar-Nav #}
                {{ page.primary_menu }}
                {# / #}
            </div>
        </div>
    </nav>
    {#-- /Navbar --#}
</header>
{#---- /Header ----#}", "@employee/includes/header.html.twig", "/var/www/html/employee/web/themes/custom/employee/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array("url" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['url'],
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
