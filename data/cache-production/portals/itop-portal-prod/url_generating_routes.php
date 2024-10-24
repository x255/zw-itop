<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'p_session_message_add' => [[], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\SessionMessageController::AddMessageAction'], [], [['text', '/session-message/add']], [], [], []],
    'p_home' => [[], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController::HomeAction'], [], [['text', '/']], [], [], []],
    'p_user_profile_brick' => [['sBrickId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::DisplayAction', 'sBrickId' => null], [], [['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/user']], [], [], []],
    'p_object_create' => [['sObjectClass'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateAction'], [], [['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/create']], [], [], []],
    'p_object_create_from_factory' => [['sObjectClass', 'sObjectId', 'sEncodedMethodName'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateFromFactoryAction'], [], [['variable', '/', '[^/]++', 'sEncodedMethodName', true], ['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/create-from-factory']], [], [], []],
    'p_object_edit' => [['sObjectClass', 'sObjectId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::EditAction'], [], [['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/edit']], [], [], []],
    'p_object_view' => [['sObjectClass', 'sObjectId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ViewAction'], [], [['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/view']], [], [], []],
    'p_object_view_from_attribute' => [['sObjectClass', 'sObjectAttCode', 'sObjectAttValue'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ViewFromAttributeAction'], [], [['variable', '/', '[^/]++', 'sObjectAttValue', true], ['variable', '/', '[^/]++', 'sObjectAttCode', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/view']], [], [], []],
    'p_object_apply_stimulus' => [['sStimulusCode', 'sObjectClass', 'sObjectId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ApplyStimulusAction'], [], [['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['variable', '/', '[^/]++', 'sStimulusCode', true], ['text', '/object/apply-stimulus']], [], [], []],
    'p_object_search_from_attribute' => [['sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchFromAttributeAction', 'sHostObjectClass' => null, 'sHostObjectId' => null], [], [['variable', '/', '[^/]++', 'sHostObjectId', true], ['variable', '/', '[^/]++', 'sHostObjectClass', true], ['variable', '/', '[^/]++', 'sTargetAttCode', true], ['text', '/object/search/from-attribute']], [], [], []],
    'p_object_search_autocomplete' => [['sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchAutocompleteAction', 'sHostObjectClass' => null, 'sHostObjectId' => null], [], [['variable', '/', '[^/]++', 'sHostObjectId', true], ['variable', '/', '[^/]++', 'sHostObjectClass', true], ['variable', '/', '[^/]++', 'sTargetAttCode', true], ['text', '/object/search/autocomplete']], [], [], []],
    'p_object_search_generic' => [['sMode', 'sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], ['sMode' => '-sMode-', 'sHostObjectClass' => null, 'sHostObjectId' => null], [], [['variable', '/', '[^/]++', 'sHostObjectId', true], ['variable', '/', '[^/]++', 'sHostObjectClass', true], ['variable', '/', '[^/]++', 'sTargetAttCode', true], ['variable', '/', '[^/]++', 'sMode', true], ['text', '/object/search']], [], [], []],
    'p_object_get_information_json' => [[], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::GetInformationAsJsonAction'], [], [['text', '/object/get-information/json']], [], [], []],
    'p_object_get_information_for_linked_set_json' => [[], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::GetInformationForLinkedSetAsJsonAction'], [], [['text', '/object/get-information-for-linked-set/json']], [], [], []],
    'p_object_document_display' => [['sObjectClass', 'sObjectId', 'sObjectField'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction', 'sOperation' => 'display'], [], [['variable', '/', '[^/]++', 'sObjectField', true], ['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/document/display']], [], [], []],
    'p_object_document_download' => [['sObjectClass', 'sObjectId', 'sObjectField'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction', 'sOperation' => 'download'], [], [['variable', '/', '[^/]++', 'sObjectField', true], ['variable', '/', '[^/]++', 'sObjectId', true], ['variable', '/', '[^/]++', 'sObjectClass', true], ['text', '/object/document/download']], [], [], []],
    'p_object_attachment_add' => [[], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction'], [], [['text', '/object/attachment/add']], [], [], []],
    'p_object_attachment_download' => [['sAttachmentId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction', 'sOperation' => 'download'], [], [['variable', '/', '[^/]++', 'sAttachmentId', true], ['text', '/object/attachment/download']], [], [], []],
    'p_create_brick' => [['sBrickId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\CreateBrickController::DisplayAction'], [], [['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/create']], [], [], []],
    'p_browse_brick' => [['sBrickId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction'], [], [['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/browse']], [], [], []],
    'p_browse_brick_mode' => [['sBrickId', 'sBrowseMode'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction'], [], [['variable', '/', '[^/]++', 'sBrowseMode', true], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/browse']], [], [], []],
    'p_browse_brick_mode_list' => [['sBrickId', 'iPageNumber', 'iListLength'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction', 'sBrowseMode' => 'list', 'sDataLoading' => 'lazy', 'iPageNumber' => 1, 'iListLength' => 20], ['sBrowseMode' => 'list', 'iPageNumber' => '\\d+', 'iListLength' => '\\d+'], [['variable', '/', '\\d+', 'iListLength', true], ['text', '/show'], ['variable', '/', '\\d+', 'iPageNumber', true], ['text', '/list/page'], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/browse']], [], [], []],
    'p_browse_brick_mode_tree' => [['sBrickId', 'sLevelAlias', 'sNodeId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction', 'sBrowseMode' => 'tree', 'sDataLoading' => 'lazy', 'sNodeId' => null], ['sBrowseMode' => 'tree'], [['variable', '/', '[^/]++', 'sNodeId', true], ['variable', '/', '[^/]++', 'sLevelAlias', true], ['text', '/tree/expand'], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/browse']], [], [], []],
    'p_manage_brick' => [['sBrickId', 'sGroupingTab'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sGroupingTab' => null], [], [['variable', '/', '[^/]++', 'sGroupingTab', true], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/manage']], [], [], []],
    'p_manage_brick_display_as' => [['sBrickId', 'sDisplayMode', 'sGroupingTab'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sGroupingTab' => null], ['sDisplayMode' => 'list|pie-chart|bar-chart'], [['variable', '/', '[^/]++', 'sGroupingTab', true], ['variable', '/', 'list|pie-chart|bar-chart', 'sDisplayMode', true], ['text', '/display-as'], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/manage']], [], [], []],
    'p_manage_brick_lazy' => [['sBrickId', 'sGroupingTab', 'sGroupingArea', 'iPageNumber', 'iListLength'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sDataLoading' => 'lazy', 'iPageNumber' => 1, 'iListLength' => 20], ['iPageNumber' => '\\d+', 'iListLength' => '\\d+'], [['variable', '/', '\\d+', 'iListLength', true], ['text', '/show'], ['variable', '/', '\\d+', 'iPageNumber', true], ['text', '/page'], ['variable', '/', '[^/]++', 'sGroupingArea', true], ['variable', '/', '[^/]++', 'sGroupingTab', true], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/manage']], [], [], []],
    'p_manage_brick_excel_export_start' => [['sBrickId', 'sGroupingTab', 'sGroupingArea'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::ExcelExportStartAction'], [], [['variable', '/', '[^/]++', 'sGroupingArea', true], ['variable', '/', '[^/]++', 'sGroupingTab', true], ['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/manage/export/excel/start']], [], [], []],
    'p_aggregatepage_brick' => [['sBrickId'], ['_controller' => 'Combodo\\iTop\\Portal\\Controller\\AggregatePageBrickController::DisplayAction'], [], [['variable', '/', '[^/]++', 'sBrickId', true], ['text', '/aggregate-page']], [], [], []],
];
