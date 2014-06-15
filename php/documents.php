<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type ="text/css" href="../css/documents.css">

        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>
    </head>
    <body>
        <div id="header">
            <!-- Das Logo sowie Profilbild in Header -->
            <img id="logo" src="../Logo.png" width="350" height="100"/>
        </div>
        <!-- Hier das Akkordeon Menü -->
        <nav>
            <ul>
                <li id = "home">
                    <a href="index.php">Home</a>
                </li>
                <li id = "kalender">
                    <a href="#kalender">Kalender</a>
                </li>
                <li id = "projektverwaltung">
                    <a href="#projektverwaltung">Projektverwaltung</a>
                    <ul>
                        <li> 
                        </li>
                    </ul>
                </li>
                <li id = "stories">
                    <a href="stories.php">Stories</a>
                </li>
                <li id = "dokumente">
                    <a href="documents.php">Dokumente</a>
                </li>
            </ul>
        </nav>
        <div id = "content">
            <div class = "docs">
                <div class="title">Vorlagen</div>
                <div id="defaultDocs">
                    <ul>
<?php 
                    $files = scandir("../files/default");
                    for($i = 2; $i < sizeof($files); $i++)
                    {
                        echo '<li>'.$files[$i].'</li>';
                    }

?>  
                    </ul>
                </div>            </div>
            <div class = "docs">
                <div class="title">Meine Dokumente</div>
                <div id="userDocs">
                    <ul>
<?php 
                    $files = scandir("../files/userfiles/docs");
                    for($i = 2; $i < sizeof($files); $i++)
                    {
                        echo '<li>'.$files[$i].'</li>';
                    }

?>  
                    </ul>
                </div>
            </div>
            <div id="dropWrapper">            
                <div id = "dragDropBox">
                    drop documents here
                </div>
                <p id="upload" class="hidden"><label>Drag & drop not supported, but you can still upload via this input field:<br><input type="file"></label></p>
                <p id="filereader">File API & FileReader API not supported</p>
                <p id="formdata">XHR2's FormData is not supported</p>
                <p id="progress">XHR2's upload progress isn't supported</p>
                <p>Upload progress: <progress id="uploadprogress" min="0" max="100" value="0">0</progress></p>
                <script src="../js/docsUpload.js"></script>
            </div>        
        </div>
    </body>
</html>
