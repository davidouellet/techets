<?php
    require_once("action/CommonAction.php");
    require_once("action/dao/DAO.php");

	class getDbAction extends CommonAction {

		public $result;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			console.log("test getdbaction");

			if($_POST["actionType"] == "getFileAttenteContent"){
            	$this->result = DAO::getFileAttenteContent();
			}
			
			if($_POST["actionType"] == "AddNewUser"){
				$this->result = DAO::AddNewUser();
			}
		}
	}