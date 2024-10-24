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

/* base/components/collapsible-section/layout.ready.js.twig */
class __TwigTemplate_8787e511d9caf4b0e803ddb65830602b extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').collapsible_section({
    bOpenedByDefault: ";
        // line 2
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method", false, false, false, 2)), "html", null, true);
        echo "
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSaveCollapsibleStateEnabled", [], "method", false, false, false, 3)) {
            echo ", collapsibleStateStorageKey: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSessionCollapsibleStateStorageKey", [], "method", false, false, false, 3), "html", null, true);
            echo "'";
        }
        // line 4
        echo "});";
    }

    public function getTemplateName()
    {
        return "base/components/collapsible-section/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/collapsible-section/layout.ready.js.twig", "/var/www/html/templates/base/components/collapsible-section/layout.ready.js.twig");
    }
}
