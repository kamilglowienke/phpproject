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
      
    <a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
    <br/> <br/>
    
    <form action="zaloguj.php" method="post">
    
    Login: <br /> <input type="text" name = "login" /> <br />
    Hasło: <br /> <input type="password" name = "haslo" /> <br />
    <input type="submit" value="zaloguj" />
    
    
    </form>



    <a href="admin.php"></br>Panel administratora</a>


    
    
</body>
</html>