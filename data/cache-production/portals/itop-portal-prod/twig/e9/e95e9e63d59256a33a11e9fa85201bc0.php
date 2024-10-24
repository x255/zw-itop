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

/* itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig */
class __TwigTemplate_62ba3f0af4fd7b0d56398685f80af0a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bBrowseMainContent' => [$this, 'block_bBrowseMainContent'],
            'bBrowseMosaicContent' => [$this, 'block_bBrowseMosaicContent'],
            'bBrowseMosaicEmpty' => [$this, 'block_bBrowseMosaicEmpty'],
            'bBrowseMosaicOverlay' => [$this, 'block_bBrowseMosaicOverlay'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/browse/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/browse/layout.html.twig", "itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bBrowseMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div id=\"brick_content_mosaic\">
\t\t";
        // line 7
        $this->displayBlock('bBrowseMosaicContent', $context, $blocks);
        // line 14
        echo "\t</div>

\t<div id=\"brick_content_empty\" class=\"text-center\">
\t\t";
        // line 17
        $this->displayBlock('bBrowseMosaicEmpty', $context, $blocks);
        // line 20
        echo "\t</div>
\t<div id=\"brick_mosaic_overlay\">
\t\t";
        // line 22
        $this->displayBlock('bBrowseMosaicOverlay', $context, $blocks);
        // line 27
        echo "\t</div>
";
    }

    // line 7
    public function block_bBrowseMosaicContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t\t<ol id=\"mosaic-breadcrumb\" class=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\" data-level-id=\"L\"><span class=\"fas fa-home\"></span></a></li>
\t\t\t</ol>
\t\t\t<div class=\"mosaic-group\" data-level-id=\"L\">
\t\t\t</div>
\t\t";
    }

    // line 17
    public function block_bBrowseMosaicEmpty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:Browse:Filter:NoData"), "html", null, true);
        echo "
\t\t";
    }

    // line 22
    public function block_bBrowseMosaicOverlay($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\t\t\t<div class=\"overlay_content\">
\t\t\t\t";
        // line 24
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/loader.html.twig", "itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</div>
\t\t";
    }

    // line 30
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t";
        $this->displayParentBlock("pPageLiveScripts", $context, $blocks);
        echo "
\t
\t<script type=\"text/javascript\">
\t\tvar sBrowseMode = '";
        // line 34
        echo twig_escape_filter($this->env, ($context["sBrowseMode"] ?? null), "html", null, true);
        echo "';
\t\tvar oLevelsProperties = ";
        // line 35
        echo ($context["aLevelsProperties"] ?? null);
        echo ";
\t\tvar oRawDatas = ";
        // line 36
        echo ($context["aItems"] ?? null);
        echo ";
        var sMosaicEffectName = 'fade';
        var oMosaicEffectOptions = {};
        var iMosaicEffectDuration = 200;

        // Show a loader over the mosaic
\t\tvar showMosaicLoader = function()
\t\t{
\t\t\t\$(\"#brick_content_mosaic\").hide();
\t\t\t\$('#brick_mosaic_overlay').show();
\t\t};
\t\t// Hide the loader over the tree
\t\tvar hideMosaicLoader = function()
\t\t{
\t\t\t\$('#brick_mosaic_overlay').hide();
\t\t\t\$(\"#brick_content_mosaic\").show();
\t\t};
\t\t// Show the requested level
\t\tvar showLevel = function(sLevelAlias, sItemId)
\t\t{
\t\t    // Retrieving level to show
\t\t    var sLevelId = sLevelAlias + ((sItemId !== undefined) ? '::'+sItemId : '' );
\t\t    var oLevelElem = \$('#brick_content_mosaic .mosaic-group[data-level-id=\"' + sLevelId + '\"]');
\t\t    var bLevelLoaded = (oLevelElem.length > 0);

\t\t    // Hiding current level
            \$('#brick_content_mosaic .mosaic-group:visible').hide(
                sMosaicEffectName,
\t\t\t\toMosaicEffectOptions,
\t\t\t\tiMosaicEffectDuration,
\t\t\t\tfunction(){
                    // Showing level
\t\t\t\t\tif(!bLevelLoaded)
\t\t\t\t\t{
                        showMosaicLoader();
\t\t\t\t\t    loadChildNodes(sLevelAlias, sItemId);
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t    oLevelElem.show(sMosaicEffectName, oMosaicEffectOptions, iMosaicEffectDuration, function(){ buildBreadcrumb(); });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t};
\t\t// Registers the toggle listeners on the tree nodes. Used after every AJAX calls.
\t\tvar registerToggleListeners = function()
\t\t{
\t\t    \$('#brick_content_mosaic .mosaic-drilldown').off('click').on('click', function (oEvent) {
\t\t\t\toEvent.preventDefault();

                showLevel(\$(this).attr('data-level-alias'), \$(this).attr('data-item-id'));
\t\t\t});

            \$('#brick_content_mosaic .mosaic-rollup').off('click').on('click', function (oEvent) {
                oEvent.preventDefault();

                var upperlevelId = \$(this).attr('data-level-id');
                var upperlevelIdParts = upperlevelId.split('::');

                showLevel(upperlevelIdParts[0], upperlevelIdParts[1]);
            });

            // Allows link in item's description to work. Otherwise, the predentDefault of the item takes over.
            \$('#brick_content_mosaic .mosaic-item-description a').off('click').on('click', function(oEvent){
                oEvent.stopPropagation();
\t\t\t});
\t\t};
\t\t// Registers the filter listeners on the tree.
\t\tvar registerFilterListeners = function()
\t\t{
\t\t\t/*\$('#brick_search_field').treeListFilter('#brick_content_mosaic', iSearchDelay, filterResultsHandler);*/
\t\t};
\t\t// Load current node childnodes throught AJAX
\t\tvar loadChildNodes = function(sLevelAlias, sNodeId)
\t\t{
\t\t\tvar sUrl = '";
        // line 111
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 111), "generate", [0 => "p_browse_brick_mode_tree", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sBrowseMode" => ($context["sBrowseMode"] ?? null), "sLevelAlias" => "-sLevelAlias-", "sNodeId" => "-sNodeId-"]], "method", false, false, false, 111);
        echo "';
\t\t\tsUrl = sUrl.replace(/-sLevelAlias-/, sLevelAlias).replace(/-sNodeId-/, sNodeId);

            \$.ajax(sUrl)
\t\t\t.done(function(data) {
\t\t\t\t// Building child nodes
\t\t\t\tfor(index in data.data)
\t\t\t\t{
\t\t\t\t\tvar sublevel = data.data[index];
\t\t\t\t\tvar sublevelData = {};
\t\t\t\t\tsublevelData[sublevel.level_alias+\"::\"+sublevel.id] = sublevel;
\t\t\t\t\tbuildMosaic(sublevelData, sLevelAlias+\"::\"+sNodeId, false);
\t\t\t\t}
\t\t\t\t// Showing sublevel
                \$('#brick_content_mosaic .mosaic-group[data-level-id=\"'+sLevelAlias+\"::\"+sNodeId+'\"]').show(sMosaicEffectName, oMosaicEffectOptions, iMosaicEffectDuration, function(){ buildBreadcrumb(); });

\t\t\t\tregisterToggleListeners();
\t\t\t})
\t\t\t.fail(function() {
\t\t\t\talert('";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("Error:XHR:Fail", twig_constant("ITOP_APPLICATION_SHORT")), "html", null, true);
        echo "');
\t\t\t})
\t\t\t.always(function(){
                hideMosaicLoader();
\t\t\t});
\t\t};
\t\t// Build mosaic nodes from data under the nodeId
\t\tvar buildMosaic = function(data, nodeId, isRootLevel)
\t\t{
\t\t    if(nodeId === undefined)
\t\t\t{
\t\t\t\t// We are on the root node
\t\t\t\tnodeId = 'L';
\t\t\t}
\t\t\tif(isRootLevel === undefined)
\t\t\t{
\t\t\t\tisRootLevel = true;
\t\t\t}

\t\t\t// Building node if necessary
\t\t\tif(\$('div[data-level-id=\"'+nodeId+'\"]').length === 0)
\t\t\t{
                \$('#brick_content_mosaic').append( \$('<div></div>').addClass('mosaic-group').attr('data-level-id', nodeId) );
\t\t\t}

\t\t\tif(!isRootLevel)
\t\t\t{
\t\t\t    // Retrieving upper level id
                var levelIdParts = nodeId.split('::');
                var upperlevelId = \$('.mosaic-item[data-level-alias=\"'+levelIdParts[0]+'\"][data-item-id=\"'+levelIdParts[1]+'\"]').closest('.mosaic-group').attr('data-level-id');

                // Building back button
                if( \$('div[data-level-id=\"'+nodeId+'\"] .mosaic-group-back').length === 0 ) {
                    var backElem = \$('<div></div>').addClass('mosaic-group-item').addClass('mosaic-group-back');
                    var aElem = \$('<a></a>').addClass('mosaic-item').addClass('mosaic-rollup').attr('href', '#').attr('data-level-id', upperlevelId).html('<div class=\"mosaic-item-text\"><span class=\"glyphicon glyphicon-arrow-left\"></span></div>');

                    backElem.append(aElem);
                    \$('div[data-level-id=\"' + nodeId + '\"]').append(backElem);
                }
\t\t\t}
\t\t\telse
\t\t\t{
                \$('div[data-level-id=\"'+nodeId+'\"]').html('');
\t\t\t}
\t\t\t
\t\t\t\$.each(data, function(i, item){
\t\t\t\tvar levelId = item.level_alias+'::'+item.id;
\t\t\t\tvar levelAltId = item.level_alias+'_'+item.id;
\t\t\t\tvar levelActions = oLevelsProperties[item.level_alias].actions;
\t\t\t\tvar levelActionsKeys = Object.keys(levelActions);
\t\t\t\tvar levelPrimaryAction = levelActions[levelActionsKeys[0]];
\t\t\t\tvar url = '';

                // Building node
                var itemElem  = \$('<div></div>').addClass('mosaic-group-item');
\t\t\t\tvar aElem   = \$('<a></a>').addClass('mosaic-item').attr('data-item-id', item.id).attr('href', '#').attr('data-level-alias', item.level_alias);
\t\t\t\tvar iItemFlags = 0;
                // - Adding stub div
\t\t\t\tvar textElem = \$('<div></div>').addClass('mosaic-item-text');
\t\t\t\t// - Adding wrapper to textElem to easily control text's subnodes flow
\t\t\t\tvar textWrapperElem = \$('<div></div>').addClass('mosaic-item-text-wrapper');
\t\t\t\ttextWrapperElem.appendTo(textElem);
                // - Adding image
                if( (item.image !== undefined) && (item.image !== '') && (item.image !== null) )
                {
                    iItemFlags += 4;
                    aElem.append( \$('<div></div>').addClass('mosaic-item-image').append( \$('<img />').attr('src', item.image) ) );
                }
                // - Adding name
                if( (item.name !== undefined) && (item.name !== '') )
                {
                    iItemFlags += 1;
\t\t\t\t\ttextWrapperElem.append( \$('<div></div>').addClass('mosaic-item-name').html(item.name) );
                }
                // - Adding description
                if( (item.description !== undefined) && (item.description !== '') )
                {
                    iItemFlags += 2;
                    textWrapperElem.append(\$('<div></div>').addClass('mosaic-item-description').html(item.description));
                }
                aElem.append(textElem);
                // - Adding CSS class to adjust the layout regarding which properties are available
                aElem.addClass('mosaic-item-layout-'+iItemFlags);
                // - Appending element
                \$('div[data-level-id=\"'+nodeId+'\"]').append(itemElem);
                itemElem.append(aElem);

                // Building tooltip for the node
                // N°4662 - Surround tooltip with div to ensure text retrival
                if ((item.tooltip !== undefined) && (\$('<div>'+item.tooltip+'</div>').text() !== ''))
                {
                    aElem.attr('data-tooltip-content', item.tooltip).attr('data-tooltip-html-enabled', true);
                    CombodoTooltip.InitTooltipFromMarkup(aElem);
                }

                // Building actions for that node
                switch (levelPrimaryAction.type)
                {
                    case '";
        // line 228
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_DRILLDOWN"), "html", null, true);
        echo "':
\t\t\t\t\t\taElem.addClass('mosaic-drilldown');
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase '";
        // line 231
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\turl = '";
        // line 232
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 232), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method", false, false, false, 232);
        echo "'.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
                        SetActionUrl(aElem, url);
                        SetActionOpeningTarget(aElem, levelPrimaryAction.opening_target);
                        break;
\t\t\t\t\tcase '";
        // line 236
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\turl = '";
        // line 237
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 237), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method", false, false, false, 237);
        echo "'.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
                        SetActionUrl(aElem, url);
                        SetActionOpeningTarget(aElem, levelPrimaryAction.opening_target);
                        break;
\t\t\t\t\tcase '";
        // line 241
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\turl = levelPrimaryAction.url.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
\t\t\t\t\t\turl = CombodoGlobalToolbox.AddParameterToUrl(url, 'ar_token', item.action_rules_token[levelPrimaryAction.type]);
                        SetActionUrl(aElem, url);
                        SetActionOpeningTarget(aElem, levelPrimaryAction.opening_target);
                        break;
\t\t\t\t\tdefault:
\t\t\t\t\t\t//console.log('Action \"'+levelPrimaryAction.type+'\" not implemented for primary action');
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(levelActionsKeys.length > 1)
\t\t\t\t{
\t\t\t\t\t// Retrieving secondary action (Now we also display primary action)
\t\t\t\t\tvar actionsButtons = {};
\t\t\t\t\tfor(j = 0; j < levelActionsKeys.length; j++)
\t\t\t\t\t{
\t\t\t\t\t\tactionsButtons[levelActionsKeys[j]] = levelActions[levelActionsKeys[j]];
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t// Preparing secondary actions container
\t\t\t\t\tvar actionsElem = \$('<div></div>').addClass('mosaic-group-item-actions');
\t\t\t\t\titemElem.append(actionsElem);
\t\t\t\t\t// Preparing secondary actions menu
\t\t\t\t\tvar actionsSSTogglerElem = \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-'+levelAltId+'\"></a>');
\t\t\t\t\tvar actionsSSMenuElem = \$('<div id=\"item-actions-menu-'+levelAltId+'\" class=\"item-action-wrapper panel panel-default\"></div>');
\t\t\t\t\tvar actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>');
\t\t\t\t\tactionsSSMenuElem.append(actionsSSMenuContainerElem);
\t\t\t\t\tactionsElem.append(actionsSSTogglerElem);
\t\t\t\t\tactionsElem.append(actionsSSMenuElem);

\t\t\t\t\t// Adding secondary actions
\t\t\t\t\tfor(j in actionsButtons)
\t\t\t\t\t{
\t\t\t\t\t\tvar action = actionsButtons[j];
\t\t\t\t\t\tvar actionElem = \$('<a></a>');
\t\t\t\t\t\tvar actionIconElem = \$('<span></span>').appendTo(actionElem);
\t\t\t\t\t\t
\t\t\t\t\t\tswitch(action.type)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tcase '";
        // line 281
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\turl = '";
        // line 282
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 282), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method", false, false, false, 282);
        echo "'.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase '";
        // line 284
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\turl = '";
        // line 285
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 285), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method", false, false, false, 285);
        echo "'.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase '";
        // line 287
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\turl = action.url.replace(/-objectClass-/, item.class).replace(/-objectId-/, item.id);
\t\t\t\t\t\t\t\turl = CombodoGlobalToolbox.AddParameterToUrl(url, 'ar_token', item.action_rules_token[action.type]);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t//console.log('Action \"'+action.type+'\" not implemented for secondary action');
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
                        SetActionUrl(actionElem, url);
                        SetActionOpeningTarget(actionElem, action.opening_target);
\t\t\t\t\t\t
\t\t\t\t\t\t// Adding title if present
\t\t\t\t\t\tif(action.title !== undefined)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tactionElem.attr('title', action.title);
\t\t\t\t\t\t}
\t\t\t\t\t\t// Adding icon class if present
\t\t\t\t\t\tif(action.icon_class !== undefined)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tactionIconElem.addClass(action.icon_class);
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tactionElem.append(action.title);
\t\t\t\t\t\tactionsSSMenuContainerElem.append( \$('<p></p>').append(actionElem) );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t// Building subnodes if necessary
\t\t\t\tif(item.subitems.length !== 0)
\t\t\t\t{
                    var subitemsElem;
\t\t\t\t    if(\$('div[data-level-id=\"'+levelId+'\"]').length > 0)
\t\t\t\t\t{
                        subitemsElem = \$('div[data-level-id=\"'+levelId+'\"]');
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t    subitemsElem = \$('<div></div>').addClass('mosaic-group').attr('data-level-id', levelId);
                        \$('div[data-level-id=\"'+nodeId+'\"]').after(subitemsElem);
\t\t\t\t\t}
\t\t\t\t\tbuildMosaic(item.subitems, levelId, false);
\t\t\t\t}\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t// Update listeners
\t\t\tif(isRootLevel)
\t\t\t{
\t\t\t\tregisterToggleListeners();
\t\t\t}
\t\t};
\t\t// Build breadcrumb
\t\tvar buildBreadcrumb = function(oCurrentElem)
\t\t{
            var aCurrentLevelParts = [];
            var bLeafLevel = false;

\t\t    // If no current item, it's because we begin to build the breadcrumb, starting from the bottom
\t\t\tif(oCurrentElem === undefined)
\t\t\t{
\t\t\t    bLeafLevel = true;

                // Retrieving current level id
                var sCurrentLevelId = \$('#brick_content_mosaic > .mosaic-group:visible').attr('data-level-id');
                aCurrentLevelParts = sCurrentLevelId.split('::');

                // Emptying breadcrumb
                \$('#mosaic-breadcrumb > li:not(:first-of-type)').remove();

\t\t\t\t// Finding current item
                oCurrentElem = \$('#brick_content_mosaic .mosaic-item[data-level-alias=\"'+aCurrentLevelParts[0]+'\"][data-item-id=\"'+aCurrentLevelParts[1]+'\"]');
                if(oCurrentElem.length === 0)
\t\t\t\t{
\t\t\t\t    return false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t    aCurrentLevelParts = [oCurrentElem.attr('data-level-alias'), oCurrentElem.attr('data-item-id')];
\t\t\t}

            // Adding level as crumb
\t\t\tvar oCrumb = \$('<li></li>');
\t\t\tvar oCrumbLink = (bLeafLevel) ? \$('<span></span>') : \$('<a></a>');
\t\t\toCrumbLink.html( oCurrentElem.find('.mosaic-item-name').html() );
\t\t\toCrumbLink.attr('data-level-id', aCurrentLevelParts.join('::')).attr('href', '#');
\t\t\toCrumb.append(oCrumbLink).insertAfter('#mosaic-breadcrumb > li:first-of-type');
\t\t\tif(bLeafLevel)
\t\t\t{
                oCrumb.addClass('active');
            }
\t\t\t// Adding listener
\t\t\t\$('#mosaic-breadcrumb > li:not(:last-of-type) > a').off('click').on('click', function(oEvent){
                oEvent.preventDefault();

\t\t\t\tvar levelId = \$(this).attr('data-level-id');
\t\t\t\tvar levelIdParts = levelId.split('::');

\t\t\t\tshowLevel(levelIdParts[0], levelIdParts[1]);
            });

\t\t\t// Finding parent level
\t\t\tvar oParentLevelElem = oCurrentElem.closest('.mosaic-group');
\t\t\tif(oParentLevelElem.length > 0)
\t\t\t{
\t\t\t    var sParentLevelId = oParentLevelElem.attr('data-level-id');
\t\t\t    var aParentLevelParts = sParentLevelId.split('::');
\t\t\t    var oParentElem = \$('#brick_content_mosaic .mosaic-item[data-level-alias=\"'+aParentLevelParts[0]+'\"][data-item-id=\"'+aParentLevelParts[1]+'\"]');

\t\t\t    if(oParentElem.length === 1)
\t\t\t\t{
\t\t\t\t    buildBreadcrumb(oParentElem);
\t\t\t\t}
\t\t\t}
\t\t};

\t\t// N°3995: Loader is shown immediately, otherwise when we have a huge amount of items, we can have a bottleneck on the buildMosaic() function, blocking the display of the loader
\t\tshowMosaicLoader();
\t\t\$(document).ready(function(){
\t\t\t// Auto collapse item actions popup
\t\t\t\$('body').on('click', function(){
\t\t\t\t\$('#brick_content_mosaic .item-action-wrapper.collapse.in').collapse('hide');
\t\t\t});
\t\t\t
\t\t\t// Build the mosaic (collapsed)
\t\t\tbuildMosaic(oRawDatas);
\t\t\thideMosaicLoader();
\t\t\tregisterFilterListeners();

\t\t\t// Open first level if only one item
\t\t\t// TODO: We must disable opening of first level when pre-filtering when filtering will be implemented
\t\t\tif(\$('#brick_content_mosaic > .mosaic-group[data-level-id=\"L\"] > .mosaic-group-item').length == 1)
\t\t\t{
\t\t\t    setTimeout(function(){
                    \$('#brick_content_mosaic > .mosaic-group[data-level-id=\"L\"] > .mosaic-group-item > .mosaic-item').trigger('click');
\t\t\t\t}, 300);
\t\t\t}
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 287,  419 => 285,  415 => 284,  410 => 282,  406 => 281,  363 => 241,  356 => 237,  352 => 236,  345 => 232,  341 => 231,  335 => 228,  234 => 130,  212 => 111,  134 => 36,  130 => 35,  126 => 34,  119 => 31,  115 => 30,  110 => 25,  108 => 24,  105 => 23,  101 => 22,  94 => 18,  90 => 17,  81 => 8,  77 => 7,  72 => 27,  70 => 22,  66 => 20,  64 => 17,  59 => 14,  57 => 7,  54 => 6,  50 => 5,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig", "/var/www/html/env-production/itop-portal-base/portal/templates/bricks/browse/mode_mosaic.html.twig");
    }
}
