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

/* base/layouts/activity-panel/tab-toolbar/caselog.html.twig */
class __TwigTemplate_4671e7f38053c77147bd806ec3919c6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/tab-toolbar/layout.html.twig", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bExtraCSSClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ibo-activity-panel--tab-toolbar-for-caselog ibo-activity-panel--tab-toolbar-for-caselog-";
        echo twig_escape_filter($this->env, ($context["iRank"] ?? null), "html", null, true);
    }

    // line 5
    public function block_bDataTabType($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "caselog";
    }

    // line 7
    public function block_bExtraDataAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "data-caselog-attribute-code=\"";
        echo twig_escape_filter($this->env, ($context["sAttCode"] ?? null), "html", null, true);
        echo "\" data-caselog-attribute-label=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aData"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "\" data-caselog-rank=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 7), "html", null, true);
        echo "\"";
    }

    // line 9
    public function block_bTabToolbarFirstRow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabEntryForm", [0 => ($context["sAttCode"] ?? null)], "method", false, false, false, 10)) {
            // line 11
            echo "        <div class=\"ibo-activity-panel--tab-entry-form\" data-role=\"ibo-activity-panel--tab-entry-form\">
            ";
            // line 12
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabEntryForm", [0 => ($context["sAttCode"] ?? null)], "method", false, false, false, 12), ["bInitOpened" => twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEntryFormOpened", [], "method", false, false, false, 12)]);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/tab-toolbar/caselog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  84 => 11,  81 => 10,  77 => 9,  64 => 7,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", "/var/www/html/templates/base/layouts/activity-panel/tab-toolbar/caselog.html.twig");
    }
}
