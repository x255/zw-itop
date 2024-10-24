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

/* application/display-block/block-chart-ajax-pie/layout.js.twig */
class __TwigTemplate_3307ecad58cb92ceef177371fc0e8c6c extends Template
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
        echo "
// Calculate height of graph : 200px (minimum height for the chart) + 20*iNbLinesToAddForName for the legend
var iChartDefaultHeight = 200,
        iChartLegendHeight = 20 * ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iNbLinesToAddForName", [], "any", false, false, false, 6), "html", null, true);
        echo " ,
        iChartTotalHeight = (iChartDefaultHeight+iChartLegendHeight);
\$('#my_chart_";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 8), "html", null, true);
        echo "').height(iChartTotalHeight+'px');

var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 11), "html", null, true);
        echo "'),
    data: {
        columns: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSColumns", [], "any", false, false, false, 13);
        echo ",
        type: 'pie',
        names: ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSNames", [], "any", false, false, false, 15);
        echo ",
        onclick: function (d) {
            var aURLs = ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSURLs", [], "any", false, false, false, 17);
        echo ";
            window.location.href = aURLs[d.index];
        },
        order: null
    },
    legend: {
        show: true,
        position: 'right'
    },
    tooltip: {
        format: {
            value: function (value) {
                return value;
            }
        }
    },
});

if (typeof (charts) === \"undefined\")
{
    charts = [];
    refreshChart = [];
}
var idxChart = charts.length;
charts.push(chart);
var refreshChart";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 42), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        echo "='\t\$.post(\"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sURLForRefresh", [], "any", false, false, false, 42), "js"), "html", null, true);
        echo "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'});';

refreshChart.push(refreshChart";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 47), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        echo ");";
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart-ajax-pie/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  96 => 42,  68 => 17,  63 => 15,  58 => 13,  53 => 11,  47 => 8,  42 => 6,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart-ajax-pie/layout.js.twig", "/var/www/html/templates/application/display-block/block-chart-ajax-pie/layout.js.twig");
    }
}
