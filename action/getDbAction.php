<?php
    require_once("action/CommonAction.php");
    require_once("action/dao/DAO.php");

	class getDbAction extends CommonAction {

		public $result;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if($_POST["actionType"] == "getFileAttenteContent"){
            	$this->result = DAO::getFileAttenteContent();
			}
			else if($_POST["actionType"] == "AddNewUser"){
				$this->result = DAO::getFileAttenteContent();
				}
		}
	}