<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    

        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../css/board.css">
         //<link rel="stylesheet" type="text/css" href="../css/main.css">
         <link rel="stylesheet" type="text/css" href="../css/post.css">
         
<script language="javascript" type="text/javascript" src="../js/postIts.js"></script>

        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>


</script>

    
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
                    <a href="#index.php">Home</a>
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
        <!-- Hier das Board -->
        
          <select id="projects" name="mydropdown">
            <option value="project1">Projektname 1</option>
            <option value="project2">Projektname 2</option>
            <option value="project3">Projektname 3</option>
            </select>

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
        <button id="newPost" type="button" onclick="popup();">Neue Aufgabe hinzufügen
      </button> 
       <div id="postIt" draggable="true" ondragstart="return dragStart(event)">
           
        </div>
    </body>
</html>
