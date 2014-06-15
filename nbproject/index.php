<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    

        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="board.css">
         <link rel="stylesheet" type="text/css" href="main.css">
         <link rel="stylesheet" type="text/css" href="post.css">
         
<script language="javascript" type="text/javascript" src="postIts.js"></script>
        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>

<link rel="stylesheet" href="/resources/demos/style.css">

</script>

    
    <body>
        <div id="header">
            <!-- Das Logo sowie Profilbild in Header -->
            <img id="logo" src="Logo.png" width="350" height="100"/>
        </div>
        <!-- Hier das Akkordeon Menü -->
        <nav>
            <ul>
                <li id = "home">
                    <a href="#home">Home</a>
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
                    <a href="#dokumente">Dokumente</a>
                </li>
            </ul>
        </nav>
        <!-- Hier das Board -->

        <div id="board">
            <div id="input" class="table" ondragenter="return dragEnter(event)" 
     ondrop="return dragDrop(event)" 
     ondragover="return dragOver(event)">
                Input Queue
                <hr>
               
            </div>
		            <div class="table" ondragenter="return dragEnter(event)" 
     ondrop="return dragDrop(event)" 
     ondragover="return dragOver(event)">
                Analyse
                <hr>
            </div>
                        <div class="table" ondragenter="return dragEnter(event)" 
     ondrop="return dragDrop(event)" 
     ondragover="return dragOver(event)">
                Entwicklung
                <hr>
            </div>
                        <div class="table" ondragenter="return dragEnter(event)" 
     ondrop="return dragDrop(event)" 
     ondragover="return dragOver(event)">
                Test
                <hr>
            </div>
                        <div class="table" ondragenter="return dragEnter(event)" 
     ondrop="return dragDrop(event)" 
     ondragover="return dragOver(event)">
                Release
                <hr>
            </div>
        </div>
        <div id="postIt" draggable="true" ondragstart="return dragStart(event)">
           
        </div>
        <?php
        // class_implements($kanBoard, $autoload);
        //Wollte alles dann in Klassen packen, aber is ja jetzt erstmal wurscht^^
        ?>
        
     
            
            <select name="mydropdown">
            <option value="project1">Projektname 1</option>
            <option value="project2">Projektname 2</option>
            <option value="project3">Projektname 3</option>
            </select>
    </body>
</html>
