<?php
//
// File generated by ... on the 2024-10-22T13:54:27+0200
// Please do not edit manually
//

/**
 * Classes and menus for itop-tickets (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
define('RESPONSE_TICKET_SLT_QUERY', 'SELECT SLT AS slt JOIN lnkSLAToSLT AS l1 ON l1.slt_id=slt.id JOIN SLA AS sla ON l1.sla_id=sla.id JOIN lnkCustomerContractToService AS l2 ON l2.sla_id=sla.id JOIN CustomerContract AS sc ON l2.customercontract_id=sc.id WHERE slt.metric = :metric AND l2.service_id = :this->service_id AND sc.org_id = :this->org_id AND slt.request_type = :request_type AND slt.priority = :this->priority');


/**
 * Persistent classes for a CMDB
 *
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
abstract class Ticket extends _Ticket
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,structure',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('title'),
			'name_attcode' => array('ref'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('ref', 'finalclass'),
			'db_table' => 'ticket',
			'db_key_field' => 'id',
			'db_finalclass_field' => 'finalclass',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-tickets/../../images/icons/icons8-comments.svg'),
			'indexes' => array (
  'ref' => 
  array (
    0 => 'ref',
  ),
),
			'uniqueness_rules' => array (
  'ref' => 
  array (
    'attributes' => 
    array (
      0 => 'ref',
    ),
    'filter' => NULL,
    'disabled' => NULL,
    'is_blocking' => false,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeMetaEnum("operational_status", array("allowed_values"=>new ValueSetEnum("closed,ongoing,resolved" ), "styled_values"=>['resolved' =>  new ormStyle('ibo-dm-enum--Ticket-operational_status-resolved', 'ibo-dm-enum-alt--Ticket-operational_status-resolved', 'var(--ibo-dm-enum--Ticket-operational_status-resolved--main-color)', 'var(--ibo-dm-enum--Ticket-operational_status-resolved--complementary-color)', 'fas fa-check', null),'closed' =>  new ormStyle('ibo-dm-enum--Ticket-operational_status-closed', 'ibo-dm-enum-alt--Ticket-operational_status-closed', 'var(--ibo-dm-enum--Ticket-operational_status-closed--main-color)', 'var(--ibo-dm-enum--Ticket-operational_status-closed--complementary-color)', null, null)], "default_style"=> new ormStyle('ibo-dm-enum--Ticket-operational_status', 'ibo-dm-enum-alt--Ticket-operational_status', 'var(--ibo-dm-enum--Ticket-operational_status--main-color)', 'var(--ibo-dm-enum--Ticket-operational_status--complementary-color)', null, null), "sql"=>'operational_status', "default_value"=>'ongoing', "mapping"=>array (
  'Ticket' => 
  array (
    'attcode' => 'status',
    'values' => 
    array (
      'resolved' => 'resolved',
      'closed' => 'closed',
      'rejected' => 'closed',
    ),
  ),
), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("ref", array("sql"=>'ref', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("org_id", array("targetclass"=>'Organization', "allowed_values"=>null, "sql"=>'org_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("org_name", array("extkey_attcode"=>'org_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("caller_id", array("targetclass"=>'Person', "allowed_values"=>new ValueSetObjects("SELECT Person WHERE org_id = :this->org_id"), "sql"=>'caller_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array('org_id'), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("caller_name", array("extkey_attcode"=>'caller_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("team_id", array("targetclass"=>'Team', "allowed_values"=>new ValueSetObjects("SELECT Team AS t JOIN lnkDeliveryModelToContact AS l1 ON l1.contact_id=t.id JOIN DeliveryModel AS dm ON l1.deliverymodel_id=dm.id JOIN Organization AS o ON o.deliverymodel_id=dm.id WHERE o.id = :this->org_id"), "sql"=>'team_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "allow_target_creation"=>false, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array('org_id'), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("team_name", array("extkey_attcode"=>'team_id', "target_attcode"=>'email', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("agent_id", array("targetclass"=>'Person', "allowed_values"=>new ValueSetObjects("SELECT Person AS p JOIN lnkPersonToTeam AS l ON l.person_id=p.id JOIN Team AS t ON l.team_id=t.id WHERE t.id = :this->team_id"), "sql"=>'agent_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "allow_target_creation"=>false, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array('team_id'), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("agent_name", array("extkey_attcode"=>'agent_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("title", array("sql"=>'title', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("sql"=>'description', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "format"=>'html', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("start_date", array("sql"=>'start_date', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>true)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("end_date", array("sql"=>'end_date', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("last_update", array("sql"=>'last_update', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>ATTRIBUTE_TRACKING_NONE)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("close_date", array("sql"=>'close_date', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeCaseLog("private_log", array("sql"=>'private_log', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("contacts_list", array("linked_class"=>'lnkContactToTicket', "ext_key_to_me"=>'ticket_id', "ext_key_to_remote"=>'contact_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("functionalcis_list", array("linked_class"=>'lnkFunctionalCIToTicket', "ext_key_to_me"=>'ticket_id', "ext_key_to_remote"=>'functionalci_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("workorders_list", array("linked_class"=>'WorkOrder', "ext_key_to_me"=>'ticket_id', "count_min"=>0, "count_max"=>0, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'ref',
  1 => 'org_id',
  2 => 'caller_id',
  3 => 'team_id',
  4 => 'agent_id',
  5 => 'title',
  6 => 'description',
  7 => 'operational_status',
  8 => 'start_date',
  9 => 'end_date',
  10 => 'last_update',
  11 => 'close_date',
  12 => 'private_log',
  13 => 'contacts_list',
  14 => 'workorders_list',
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'title',
  1 => 'org_id',
  2 => 'description',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'ref',
  1 => 'title',
  2 => 'description',
  3 => 'operational_status',
  4 => 'start_date',
  5 => 'end_date',
  6 => 'last_update',
  7 => 'close_date',
));
		MetaModel::Init_SetZListItems('default_search', array (
  0 => 'ref',
  1 => 'title',
  2 => 'caller_id',
  3 => 'org_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'ref',
  1 => 'org_id',
  2 => 'title',
  3 => 'caller_id',
  4 => 'team_id',
  5 => 'agent_id',
  6 => 'operational_status',
  7 => 'start_date',
));
;
	}

	protected function RegisterEventListeners()
	{
		parent::RegisterEventListeners();

		// listenerId = UpdateImpactAnalysis
		$this->RegisterCRUDListener("EVENT_DB_LINKS_CHANGED", 'UpdateImpactedItems', 0, 'itop-tickets');
	}



    public function DBInsertNoReload()
    {
          $iNextId = ItopCounter::IncClass(get_class($this));
          $sRef = $this->MakeTicketRef($iNextId);
          $this->SetIfNull('ref', $sRef);
          $iKey = parent::DBInsertNoReload();
          return $iKey;
    }
        



        protected function MakeTicketRef($iNextId)
        {
                return sprintf(static::GetTicketRefFormat(), $iNextId);
        }
        



        public static function GetTicketRefFormat()
        {
                return 'T-%06d';
        }
        

	/**
            *
            * Add the current contact associated Person to the contacts_list of this Ticket
            * No error if there is no associated Person or if the Person is already in the list
            * @return bool Return true on success
            */
          
	public function AddCurrentUserToContacts()
    {
        $iPersonId = UserRights::GetContactId();
        if ($iPersonId > 0) {
            $oContactsSet = $this->Get('contacts_list');
            if (!in_array($iPersonId, $oContactsSet->GetColumnAsArray('contact_id'))) {
                $oLnk = MetaModel::NewObject('lnkContactToTicket');
                $oLnk->Set('contact_id', $iPersonId);
                $oLnk->Set('ticket_id', $this->GetKey());
                $oContactsSet->AddItem($oLnk);
                $this->Set('contacts_list', $oContactsSet);
                $this->DBUpdate();
            }
	      }
		    return true;
	  }

	/**
            *
            * Remove the current user associated Person from the contacts_list of this Ticket
            * No error if there is no associated Person or if the Person is not in the list
            * @return bool Return true
            */
          
	public function RemoveCurrentUserFromContacts()
	  {
        $iPersonId = UserRights::GetContactId();
        if ($iPersonId > 0) {
            $oContactsSet = $this->Get('contacts_list');
            foreach ($oContactsSet as $oLnk) {
                if ($oLnk->Get('contact_id') == $iPersonId) {
                    $oContactsSet->RemoveItem($oLnk->GetKey());
                    $this->Set('contacts_list', $oContactsSet);
                    $this->DBUpdate();
                    return true;
                }
            }
        }
      return true;
	  }

}


class lnkContactToTicket extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => array('contact_name', 'ticket_ref'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('ticket_id', 'contact_id'),
			'db_table' => 'lnkcontacttoticket',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'uniqueness_rules' => array (
  'no_duplicate' => 
  array (
    'attributes' => 
    array (
      0 => 'contact_id',
      1 => 'ticket_id',
    ),
    'filter' => '',
    'disabled' => false,
    'is_blocking' => true,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("ticket_id", array("targetclass"=>'Ticket', "allowed_values"=>null, "sql"=>'ticket_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("ticket_ref", array("extkey_attcode"=>'ticket_id', "target_attcode"=>'ref', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("contact_id", array("targetclass"=>'Contact', "allowed_values"=>null, "sql"=>'contact_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("contact_email", array("extkey_attcode"=>'contact_id', "target_attcode"=>'email', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("contact_name", array("extkey_attcode"=>'contact_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("role", array("sql"=>'role', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("role_code", array("allowed_values"=>new ValueSetEnum("computed,do_not_notify,manual" ), "display_style"=>'list', "sql"=>'impact_code', "default_value"=>'manual', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'ticket_id',
  1 => 'contact_id',
  2 => 'role_code',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'ticket_id',
  1 => 'contact_id',
  2 => 'role_code',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'ticket_id',
  1 => 'contact_id',
  2 => 'role_code',
));
;
	}


}


class WorkOrder extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,incidentmgmt,requestmgmt,changemgmt,m2prequest',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => 'status',
			'reconc_keys' => array('name', 'ticket_id'),
			'db_table' => 'workorder',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-tickets/../../images/icons/icons8-tasklist.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("sql"=>'name', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("status", array("allowed_values"=>new ValueSetEnum("closed,open" ), "display_style"=>'list', "sql"=>'status', "default_value"=>'open', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("sql"=>'description', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("ticket_id", array("targetclass"=>'Ticket', "allowed_values"=>null, "sql"=>'ticket_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("ticket_ref", array("extkey_attcode"=>'ticket_id', "target_attcode"=>'ref', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("team_id", array("targetclass"=>'Team', "allowed_values"=>new ValueSetObjects("SELECT Team"), "sql"=>'team_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("team_name", array("extkey_attcode"=>'team_id', "target_attcode"=>'email', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("agent_id", array("targetclass"=>'Person', "allowed_values"=>new ValueSetObjects("SELECT Person AS p JOIN lnkPersonToTeam AS l ON l.person_id=p.id JOIN Team AS t ON l.team_id=t.id WHERE t.id = :this->team_id"), "sql"=>'owner_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "allow_target_creation"=>false, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array('team_id'), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("agent_email", array("extkey_attcode"=>'agent_id', "target_attcode"=>'email', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("start_date", array("sql"=>'start_date', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("end_date", array("sql"=>'end_date', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeCaseLog("log", array("sql"=>'log', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));

		// Lifecycle (status attribute: status)
		//
		MetaModel::Init_DefineStimulus(new StimulusUserAction("ev_close", array()));
		MetaModel::Init_DefineState(
			"open",
			array(
				"attribute_inherit" => '',
				"attribute_list" => array(
				),
			)
		);
		MetaModel::Init_DefineTransition("open", "ev_close", array(
            "target_state"=>"closed",
            "actions"=>array(array('verb' => 'SetCurrentDateIfNull', 'params' => array(array('type' => 'attcode', 'value' => "end_date")))),
            "user_restriction"=>null,
            "attribute_list"=>array(
            )
        ));
		MetaModel::Init_DefineState(
			"closed",
			array(
				"attribute_inherit" => '',
				"attribute_list" => array(
				),
			)
		);


		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'status',
  2 => 'ticket_id',
  3 => 'team_id',
  4 => 'agent_id',
  5 => 'description',
  6 => 'start_date',
  7 => 'end_date',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'status',
  2 => 'ticket_id',
  3 => 'team_id',
  4 => 'agent_id',
  5 => 'start_date',
  6 => 'end_date',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'status',
  1 => 'ticket_id',
  2 => 'start_date',
  3 => 'end_date',
  4 => 'team_id',
  5 => 'agent_id',
));
;
	}



	public function UpdateParentTicketLog()
	{
		$oLog = $this->Get('log');
		$sLog = $oLog->GetModifiedEntry('html');
		if ($sLog != '')
		{
			$oTicket = MetaModel::GetObject('Ticket', $this->Get('ticket_id'), false);
			if ($oTicket)
			{
				$oTicket->Set('private_log', $sLog);
				$oTicket->DBUpdate();
			}
		}
	}


	protected function OnUpdate()
	{
		$this->UpdateParentTicketLog();
	}

}