<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid']) && isset($_POST['pw']))
{
	$user = $_POST['uid'];
	$pass = $_POST['pw'];
	
	include_once('dbhandler.php');
	$db = new Database();

	$db->Connect();
	$result = $db->Query("SELECT * FROM `user` WHERE `Username`=? AND `Password`=?;", 'ss', htmlentities($user, (ENT_QUOTES | ENT_XHTML)), md5($pass));
	$db->Close();
}
header('Location:../index.php');



