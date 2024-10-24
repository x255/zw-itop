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

/* base/components/input/set/layout.ready.js.twig */
class __TwigTemplate_11b665bc01e2b1980a66c57686c7916a extends Template
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
        echo "
";
        // line 4
        echo "
";
        // line 6
        $context["oDataProvider"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataProvider", [], "method", false, false, false, 6);
        // line 7
        echo "let oWidget";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        echo "').selectize({

    ";
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "IsAjaxProviderType", [], "any", false, false, false, 10)) {
            // line 11
            echo "    preload: true, ";
            // line 12
            echo "    loadingClass: '',
    ";
        }
        // line 14
        echo "    itemClass: 'item attribute-set-item',
    hasError: ";
        // line 15
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasError", [], "method", false, false, false, 15)), "html", null, true);
        echo ",
    placeholder: '";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceholder", [], "method", false, false, false, 16), "html", null, true);
        echo "',

    ";
        // line 19
        echo "    plugins: {
        ";
        // line 21
        echo "        'combodo_update_operations' : {
            initial: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInitialValue", [], "method", false, false, false, 22);
        echo "
        },
        ";
        // line 25
        echo "        'combodo_auto_position' : {
            maxDropDownHeight: 300, ";
        // line 27
        echo "        },
        ";
        // line 29
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButton", [], "method", false, false, false, 29)) {
            // line 30
            echo "        'combodo_add_button' : {
            title: '";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAddButtonTitle", [], "method", false, false, false, 31), "html", null, true);
            echo "'
        },
        ";
        }
        // line 34
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMultiValuesSynthesis", [], "method", false, false, false, 34)) {
            // line 35
            echo "        'combodo_multi_values_synthesis' : {

            tooltip_links_will_be_created_for_all_objects: '";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedForAllObjects"), "html", null, true);
            echo "',
            tooltip_links_will_be_deleted_from_all_objects: '";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFromAllObjects"), "html", null, true);
            echo "',
            tooltip_links_will_be_created_for_one_object: '";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedFor1Object"), "html", null, true);
            echo "',
            tooltip_links_will_be_deleted_from_one_object: '";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFrom1Object"), "html", null, true);
            echo "',
            tooltip_links_will_be_created_for_x_objects: '";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedForXObjects"), "html", null, true);
            echo "',
            tooltip_links_will_be_deleted_from_x_objects: '";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFromXObjects"), "html", null, true);
            echo "',
            tooltip_links_exist_for_all_objects: '";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForAllObjects"), "html", null, true);
            echo "',
            tooltip_links_exist_for_one_object: '";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForOneObject"), "html", null, true);
            echo "',
            tooltip_links_exist_for_x_objects: '";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForXObjects"), "html", null, true);
            echo "'
        },
        ";
        }
        // line 48
        echo "        ";
        // line 49
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRemoveItemButton", [], "method", false, false, false, 49)) {
            // line 50
            echo "        'remove_button' : {},
        ";
        }
        // line 52
        echo "    },

    ";
        // line 55
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxItems", [], "method", false, false, false, 55))) {
            // line 56
            echo "    maxItems: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxItems", [], "method", false, false, false, 56), "html", null, true);
            echo ",
    ";
        }
        // line 58
        echo "
    ";
        // line 60
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxOptions", [], "method", false, false, false, 60))) {
            // line 61
            echo "    maxOptions: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxOptions", [], "method", false, false, false, 61), "html", null, true);
            echo ",
    ";
        }
        // line 63
        echo "
    ";
        // line 65
        echo "    valueField: '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataValueField", [], "method", false, false, false, 65), "html", null, true);
        echo "',
    labelField: '";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataLabelField", [], "method", false, false, false, 66), "html", null, true);
        echo "',
    searchField: ";
        // line 67
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataSearchFields", [], "method", false, false, false, 67));
        echo ",
    optgroupField: '";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 68), "html", null, true);
        echo "',
    tooltipField: '";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetTooltipField", [], "method", false, false, false, 69), "html", null, true);
        echo "',

    ";
        // line 72
        echo "    options: ";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetOptions", [], "method", false, false, false, 72));
        echo ",

    ";
        // line 75
        echo "    optgroups: ";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetOptionsGroups", [], "method", false, false, false, 75));
        echo ",

    ";
        // line 78
        echo "    items: ";
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 78);
        echo ",

    inputClass: 'ibo-input ibo-input-selectize ibo-input-set attribute-set selectize-input',

    ";
        // line 83
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "IsAjaxProviderType", [], "any", false, false, false, 83)) {
            // line 84
            echo "    load: function (query, callback) {
        let me = this;
        \$.ajax({
            url: '";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getFunction('get_absolute_url_app_root')->getCallable()(), "html", null, true);
            echo "pages/ajax.render.php?route=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetRoute", [], "method", false, false, false, 87), "html", null, true);
            echo "&search=' + query + '";
            echo twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetParamsAsQueryString", [], "any", false, false, false, 87);
            echo "',
            type: 'POST',
            dataType: 'json',
            data: me.convertParamArray('";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetPostParamsAsJsonString", [], "method", false, false, false, 90);
            echo "'),
            error: function (e) {
                callback();
                console.error(e);
                if(!me.settings.hasError) {
                    me.toggleErrorClass(true);
                }
            },
            success: function (res) {

                // Handle errors
                if(!me.settings.hasError){
                    me.toggleErrorClass(!res.data.success);
                    if(!res.data.success) return;
                }

                // Retrieve current input value
                let aSelectedItems = me.getValue();
                // Filter old options data to keep selected values
                // (options with force flag will be kept event if they doesn't be part of the current value)
                let options = Object.values(me.options);
                options = options.filter(item => (typeof(item.force) !== \"undefined\" && item.force === true) || aSelectedItems.includes(item['";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataValueField", [], "method", false, false, false, 111), "html", null, true);
            echo "']));
                // Merge kept and new values
                options = \$.merge(options, res.data.search_data);
                // Compute groups
                \$.each(options, function(index, value) {
                    me.addOptionGroup(value['";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 116), "html", null, true);
            echo "'], {
                        label: value['";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 117), "html", null, true);
            echo "'],
                        value: value['";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 118), "html", null, true);
            echo "']
                    });
                });
                // Clear all options
                me.clearOptions();
                // Add merged values
                callback(options);
                // Restore input value
                me.addItems(aSelectedItems, true);
            }
        });
    },
    ";
        }
        // line 131
        echo "
    ";
        // line 133
        echo "    render: {

        ";
        // line 136
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasOptionsTemplate", [], "method", false, false, false, 136)) {
            // line 137
            echo "        option: function(option) {
            return CombodoGlobalToolbox.RenderTemplate('#";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 138), "html", null, true);
            echo "_options_template', option, this.settings.optionClass)[0].outerHTML;
        },
        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasItemsTemplate", [], "method", false, false, false, 143)) {
            // line 144
            echo "        item: function (item) {
            return CombodoGlobalToolbox.RenderTemplate('#";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 145), "html", null, true);
            echo "_items_template', item, this.settings.itemClass)[0].outerHTML;
        },
        ";
        }
        // line 148
        echo "
    },

    onInitialize: function(){

        /**
         * Function to convert param array.
         *
         * EVAL_JAVASCRIPT{code_to_eval}
         */
        this.convertParamArray = function(paramArray){
            let postParam = JSON.parse(paramArray);
            let data = {};
            Object.entries(postParam).forEach(([key, value]) => {
                let matches = null;
                if(typeof(value) === 'string'){
                    matches = value.match(/^EVAL_JAVASCRIPT{(.*)}\$/);
                }
                if(matches != null){
                    data[key] = eval(matches[1]);
                }
                else{
                    data[key] = value;
                }
            });
            return data;
        };

        /**
         * Function to show error.
         *
         */
        this.toggleErrorClass = function(bValue){
            this.\$control.toggleClass('selectize-input-error', bValue);
        };

        ";
        // line 185
        echo "        this.toggleErrorClass(this.settings.hasError);
    },

    onDropdownOpen: function (oDropdownElem) {
        oDropdownElem.addClass('set-dropdown');
    },

    ";
        // line 193
        echo "    onItemAdd: function(value, \$item){
        \$item.addClass(this.settings.itemClass);
        \$item.attr({
            'data-tooltip-content': this.options[value][this.settings.tooltipField],
            'data-tooltip-html-enabled': true
        });
        CombodoTooltip.InitTooltipFromMarkup(\$item);
    },

    ";
        // line 203
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButton", [], "method", false, false, false, 203) && twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButtonJsOnClick", [], "method", false, false, false, 203))) {
            // line 204
            echo "    onAdd: function(){
        ";
            // line 205
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAddOptionButtonJsOnClick", [], "method", false, false, false, 205);
            echo "

    },
    ";
        }
        // line 209
        echo "
});



";
    }

    public function getTemplateName()
    {
        return "base/components/input/set/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 209,  399 => 205,  396 => 204,  393 => 203,  382 => 193,  373 => 185,  335 => 148,  329 => 145,  326 => 144,  323 => 143,  320 => 141,  314 => 138,  311 => 137,  308 => 136,  304 => 133,  301 => 131,  285 => 118,  281 => 117,  277 => 116,  269 => 111,  245 => 90,  235 => 87,  230 => 84,  227 => 83,  219 => 78,  213 => 75,  207 => 72,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  185 => 65,  182 => 63,  176 => 61,  173 => 60,  170 => 58,  164 => 56,  161 => 55,  157 => 52,  153 => 50,  150 => 49,  148 => 48,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 35,  103 => 34,  97 => 31,  94 => 30,  91 => 29,  88 => 27,  85 => 25,  80 => 22,  77 => 21,  74 => 19,  69 => 16,  65 => 15,  62 => 14,  58 => 12,  56 => 11,  53 => 10,  45 => 7,  43 => 6,  40 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/set/layout.ready.js.twig", "/var/www/html/templates/base/components/input/set/layout.ready.js.twig");
    }
}
