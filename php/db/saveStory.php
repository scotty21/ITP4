<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('dbhandler.php');
$db = new Database();
$db->Connect();
if($_POST['action'] === "new") {
    $result = $db->Query("INSERT INTO `story` (`projectID`, `title`, `description`) VALUES (?, ?, ?);", 'sss', 
            $_POST['project'], $_POST['title'], $_POST['descr']);
//    print_r($result);
//    echo $result;
} else if ($_POST['action'] === "edit") {
    $result = $db->Query("UPDATE `story` SET `title` = ?, `description` = ? WHERE ID = ?;", 'sss', 
            $_POST['title'], $_POST['descr'], $_POST['id']);
//    print_r($result);
//    echo $result;
} else if ($_POST['action'] === "delete") {
    $result = $db->Query("DELETE FROM `story` WHERE ID = ?;", 's', $_POST['id']);
//    print_r($result);
//    echo $result;
}
$db->Close();
//echo 'closed';

        
