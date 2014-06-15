<?php

session_start();
$_SESSION["status"] = array();

if (!isset($_POST["uid"]) && !isset($_POST["pw"])) {
	$_SESSION["status"] = 0;
	header('Location:../start.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid']) && isset($_POST['pw']))
{
        $_SESSION["status"] = 2;
        $_SESSION["loggedin"] = true;
	$user = $_POST['uid'];
	$pass = $_POST['pw'];
	
	include_once('dbhandler.php');
	$db = new Database();

	$db->Connect();
	$result = $db->Query("SELECT * FROM `user` WHERE `Username`=? AND `Password`=?;", 'ss', htmlentities($user, (ENT_QUOTES | ENT_XHTML)), md5($pass));
	$db->Close();
        header('Location:../index.php');
}


else {
	$_SESSION["status"] = 0;
	header('Location:../start.php'); 
	exit(); 
}


