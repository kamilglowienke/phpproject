<?php

    session_start();
    
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true))
    {
        header('Location: zalogowany.php');
        exit();
    }

?>



<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Projekt s21683</title>
</head>

<body>
      

    
    <form action="zalogujAdmin.php" method="post">
    
    Login: <br /> <input type="text" name = "login" /> <br />
    Hasło: <br /> <input type="password" name = "haslo" /> <br />
    <input type="submit" value="zaloguj" />
    
    
    </form>



    <a href="index.php"></br>Wróć do strony głównej</a>

    
    <?php
    if(isset($_SESSION['blad'])){
    echo $_SESSION['blad'];
    }
    ?>
    
    
</body>
</html>