<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="documents.css">
        
        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>
    </head>
    <body>
        <div id="header">
        <!-- Das Logo sowie Profilbild in Header -->
        <img id="logo" src="Logo.png" width="350" height="100"/>
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
	<div class = "docs">
		Vorlagen
	</div>
	<div class = "docs">
		Meine Dokumente
	</div>
	<div id = "dragDropBox">
		Drop documents here
	</div>
</div>
</html>
