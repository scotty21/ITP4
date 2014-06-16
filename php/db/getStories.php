<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//If(isset($_POST['value'])) {
    $value=$_POST['value'];
//} else {
//    $defaultProject = query('SELECT projectID from user_project WHERE userID = ?', 'i', $_SESSION);
//}

include_once('dbhandler.php');
$db = new Database();
$db->Connect();
$stories = $db->Query('SELECT * from `story` WHERE `projectID`=?;', 's', $value);
$db->Close();
foreach ($stories as $story) {
    echo '<li class="buttonStyle"><a href="editStory.php?action=edit&id=' . $story['ID'] . '">' . $story['title'] . '</a></li>';
}
