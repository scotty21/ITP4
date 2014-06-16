<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type ="text/css" href="../css/stories.css">

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
                    <a href="calender.php">Kalender</a>
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
            <div id = "left">
                <div id="selctStory">
                    <ul id = "storiesList">
                        <li>
                            <a href="editStory.php"> Userstory 1 - bla bla</a>
                        </li>
                        <li>
                            <a href="editStory.php"> Userstory 2 - test</a>
                        </li>
                    </ul>
                </div>
                <select id="selectProject">
                    <option value="0">Testprojekt</option>
                    <option value="1">Projekt 1</option>
                    <option value="2">Projekt 2</option>
                </select>
            </div>

            <div id = "newStoryButton">
                <a href="editStory.php">neue Story anlegen</a>
            </div>
        </div>
</html>
