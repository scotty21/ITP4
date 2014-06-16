<?php

session_start();
$_SESSION["status"] = array();

if (!isset($_POST['uid']) && !isset($_POST["pw"])) {
	$_SESSION["status"] = 0;
	header('Location:../start.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid']) && isset($_POST['pw']))
{
        $_SESSION["status"] = 1;
        UserAuthentication($_POST["uid"], $_POST["pw"]);
}


else {
	$_SESSION["status"] = 0;
	header('Location:../start.php'); 
	exit(); 
}

// nur eingeloggt User können auf den Webtop zugreifen
function UserAuthentication($user, $password) 
{	
	
	include_once('dbhandler.php');
	$db = new Database();

	$db->Connect();
	$result = $db->Query("SELECT * FROM `user` WHERE `Username`=? AND `Password`=?;", 'ss', htmlentities($user, (ENT_QUOTES | ENT_XHTML)), md5($password));
	$db->Close();
        if (count($result) > 0 && $result[0] != -1)
	{
		$_SESSION["status"] = 2;
		$_SESSION["user"] = array(); //löscht bereits existierende Sessions & erstellt eine neue
		$_SESSION["user"]["uid"] = $user;
		$_SESSION["loggedin"] = true;
                unset($password);
                header('Location:../index.php');
	}
}

?>