<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['pw1'])&& isset($_POST['pw2']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
        $user = $_POST['mail'];
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];
        
        if($pw1 == $pw2)
        {
            include_once('dbhandler.php');
            $db = new Database();
            $db->Connect();
            $result = $db->Query("INSERT INTO `user`(`Firstname`, `Lastname`, `Username`, `Password`) VALUES(?,?,?,?);", "ssss", $firstname, $lastname, $user, md5($pw1));
            $db->Close();
        }
}
header('Location:../index.php');

