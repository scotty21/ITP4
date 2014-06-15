<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$subdir = "../files/userfiles/docs/";
if (isset($_FILES['userfile'])) {
    $fileupload = $_FILES['userfile'];
    if ($_FILES['userfile']['type'] == "image/gif"
            or $_FILES['userfile']['type'] == "image/png"
            or $_FILES['userfile']['type'] == "image/jpeg") {

        if (!$fileupload['error'] && $fileupload['size'] > 0 && $fileupload['tmp_name'] && is_uploaded_file($fileupload['tmp_name'])) {
            move_uploaded_file($fileupload['tmp_name'], $subdir . $fileupload['name']);
        } else {
            echo 'Fehler beim Upload';
        }
    }
}