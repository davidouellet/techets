<?php
	require_once("action/getDbAction.php");

	$action = new getDbAction();
	$action->execute();

	echo json_encode($action->result);
