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

/* application/display-block/block-chart/layout.html.twig */
class __TwigTemplate_99060e18d8ed0c2539fa582e73dc2500 extends Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    <div style=\"height:250px;width:100%\" class=\"dashboard_chart\" id=\"my_chart_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sChartId", [], "any", false, false, false, 4), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iChartCounter", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        <div style=\"height:200px;line-height:200px;vertical-align:center;text-align:center;width:100%\">
            <img src=\"../images/indicator.gif\">
        </div>
    </div>
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_1_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart/layout.html.twig", "/var/www/html/templates/application/display-block/block-chart/layout.html.twig");
    }
}
