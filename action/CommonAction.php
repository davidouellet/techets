<?php
	session_start();
    ini_set('display_errors', 1);

	abstract class CommonAction {
		protected static $VISIBILITY_PUBLIC = 0;
		protected static $VISIBILITY_MEMBER = 1;
		protected static $VISIBILITY_MODERATOR = 2;
		protected static $VISIBILITY_ADMIN = 3;

		private $pageVisibility;

		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}

		public function execute() {


			// Template method
			$this->executeAction();
		}

		protected abstract function executeAction();

	}
