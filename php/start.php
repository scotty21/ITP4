<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <meta charset="UTF-8">
        <title>KANsimpleBAN-The simple way to manage projects</title>
    </head>
    <body>
        <div id="header">
            <img id="logo" src="../Logo.png" width="350" height="100"/>
        <div id="login">
            <form action="db/login.php" method="post" id="login">
                    <input type="text" name="uid" placeholder="E-Mail" style="width:170px;">
                    <input type="password" name="pw" placeholder="Passwort">
                    <input type="submit" value="Login" />
            </form>
         </div>
         </div>
        <div id="register">
            <h1>Registrieren</h1>
            <form action="db/newUser.php" method="post" id="newUser">
                <input type="text" name="firstname" placeholder="Vorname" style="width:150px;">
                <input type ="text" name="lastname" placeholder="Nachname" style="width:150px;">
                <input type="text" name="mail" placeholder="E-Mail" style="width:338px;">
                <input type="password" name="pw1" placeholder="Passwort" style="width:338px;">
                <input type="password" name="pw2" placeholder="Passwort wiederholen" style="width:338px;">
                <input type="submit" value="Registrieren" />
            </form>
        </div>
        <div id="image">
            <img id="image" src="../image.png" />
        </div>

    </body>
</html>
