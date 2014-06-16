<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type ="text/css" href="../css/editStory.css">

        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>
    </head>
    <body>
        <div id="header">
            <!-- Das Logo sowie Profilbild in Header -->
            <img id="logo" src="../Logo.png" width="350" height="100"/>
        </div>
        <div id="user">
        <?php
            session_start();
            if (isset($_SESSION['user']['uid'])) {
            echo $_SESSION['user']['uid'] ;
            }
	?>
        <div id="button">
            <a href="db/logout.php"  method="post" target="_parent"><img src="../logout_button.png"></a>
        </div>
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
            <div id="left">
                <input type="text" id="storyTitle" class="borderStyle" placeholder="Userstory Titel">
                <div id="storyDescription" class="borderStyle">                
                    <textarea id="description" placeholder="Beschreibung der Userstory einfügen"></textarea>
                </div>                
                <div id="buttons">                
                    <div id="storyDelete" class="buttonStyle borderStyle">
                        <a href="#">Story löschen</a>
                    </div>
                    <div id="storySave" class="buttonStyle borderStyle">
                        <a href="#">Story speichern</a>
                    </div>
                </div>            
            </div>
        </div>
</html>
