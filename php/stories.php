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
                    <a href="#stories">Stories</a>
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
                            <a href="#"> Userstory 1 - bla bla</a>
                        </li>
                        <li>
                            <a href="#"> Userstory 2 - test</a>
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
                <a href="#">neue Story anlegen</a>
            </div>
        </div>
</html>
