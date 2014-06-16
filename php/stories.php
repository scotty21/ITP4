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
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/stories.js"></script>
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
                        <?php 
                            include_once('./db/dbhandler.php');
                            $db = new Database();
                            $db->Connect();
                            $result = $db->Query("SELECT ID FROM `user` WHERE `Username`=?;", 's', htmlentities($_SESSION["user"]["uid"]));
//                            print_r($result);
                            $userId = $result[0]['ID'];
//                            echo 'userId: '.$userId;
                            $userProjects = $db->Query("SELECT projectID FROM `user_project` WHERE `userID`=?;", 's', $userId);
                            $defaultProject = $userProjects[0]['projectID'];
                            $stories = $db->Query("SELECT * FROM `story` WHERE `projectID`=?;", 's', $defaultProject);
//                            $db->Close();
                            foreach ($stories as $story) {
//                                print_r($story);
                                echo '<li class="buttonStyle"><a href="editStory.php?action=edit&id='.$story['ID'].'">'.$story['title'].'</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <select id="selectProject" onchange="getStories()">
                        <?php 
                            foreach ($userProjects as $up) {
                                $project = $db->Query("SELECT * FROM `project` WHERE `ID`=?;", 's', $up['projectID']);
                                echo '<option value="'.$project[0]['ID'].'">'.$project[0]['Projectname'].'</option>';
                            }
                            $db->Close();
                        ?>
                </select>
            </div>

            <div id = "newStoryButton" class="buttonStyle borderStyle">
                <a href="editStory.php">neue Story anlegen</a>
            </div>
        </div>
</html>
