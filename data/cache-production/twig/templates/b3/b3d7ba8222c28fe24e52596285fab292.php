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

/* base/components/datatable/static/layout.ready.js.twig */
class __TwigTemplate_d5bbcb9c2e495c96edc262b9d7d56ad3 extends Template
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
        $context["sListId"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3);
        // line 4
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method", false, false, false, 5))) {
            // line 6
            $context["iPageSize"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method", false, false, false, 6);
        } else {
            // line 8
            $context["iPageSize"] = 10;
        }
        // line 10
        echo "
var oTable";
        // line 11
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
        echo "').DataTable({
    language: {
        processing: \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Processing"), "html", null, true);
        echo "\",
        search: \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Search"), "html", null, true);
        echo "\",
        lengthMenu: \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:LengthMenu"), "html", null, true);
        echo "\",
        zeroRecords: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:ZeroRecords"), "html", null, true);
        echo "\",
        info: \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Info"), "html", null, true);
        echo "\",
        infoEmpty: \"\",
        infoFiltered: \"(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoFiltered"), "html", null, true);
        echo ")\",
        emptyTable: \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:EmptyTable"), "html", null, true);
        echo "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Ascending"), "html", null, true);
        echo "\",
            sortDescending: \": ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Descending"), "html", null, true);
        echo "\"
        }
    },
    scrollX: true,
    ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method", false, false, false, 33))) {
            // line 34
            echo "        scrollY: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method", false, false, false, 34), "html", null, true);
            echo "\",
    ";
        }
        // line 36
        echo "    scrollCollapse: true,
    order: [],
    rowId: \"id\",
    filter: false,
    ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "pageLength"], "method", false, false, false, 40))) {
            // line 41
            echo "        pageLength: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "pageLength"], "method", false, false, false, 41), "html", null, true);
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "dom"], "method", false, false, false, 43))) {
            // line 44
            echo "    dom: \"<'ibo-datatable--toolbar'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "dom"], "method", false, false, false, 44), "html", null, true);
            echo ">t\",
    ";
        } else {
            // line 46
            echo "    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        }
        // line 48
        echo "    lengthMenu: [[ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", -1], [ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:DisplayLength:All"), "html", null, true);
        echo "\"]],
    columns: [
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 51
            echo "        {
            data: \"";
            // line 52
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\",
            width: \"auto\",
            sortable: true
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 57)) {
            // line 58
            echo "            getRowActionsColumnDefinition('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
            echo "'),
        ";
        }
        // line 60
        echo "    ],
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
        
        // Disable hyperlinks if necessary
        ";
        // line 81
        if (((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 81) === true) || ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 81)) &&  !(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 81) === false)))) {
            // line 82
            echo "        \$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 82), "html", null, true);
            echo " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
        }
        // line 86
        echo "    },
    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }
        
        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    }
});

if (window.ResizeObserver)
{
    let oStaticTable";
        // line 101
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
    const oStaticTable";
        // line 102
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function(){
        clearTimeout(oStaticTable";
        // line 103
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
        oStaticTable";
        // line 104
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function(){
            \$('#";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 105), "html", null, true);
        echo "').DataTable().columns.adjust();
        }, 120);
    });
    oStaticTable";
        // line 108
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 108), "html", null, true);
        echo "')[0]);
}

";
        // line 111
        $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/static/layout.ready.js.twig", 111)->display($context);
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 111,  262 => 108,  256 => 105,  252 => 104,  248 => 103,  244 => 102,  240 => 101,  223 => 86,  215 => 82,  213 => 81,  190 => 60,  184 => 58,  181 => 57,  170 => 52,  167 => 51,  163 => 50,  141 => 48,  137 => 46,  131 => 44,  128 => 43,  122 => 41,  120 => 40,  114 => 36,  108 => 34,  106 => 33,  99 => 29,  95 => 28,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  52 => 11,  49 => 10,  46 => 8,  43 => 6,  41 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/layout.ready.js.twig", "/var/www/html/templates/base/components/datatable/static/layout.ready.js.twig");
    }
}
