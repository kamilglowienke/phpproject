<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Projekt s21683</title>
</head>

<body>
    <h1> Lista mailów: </h1>
<?php
    


	require_once "connect.php";

    $sql = "SELECT * FROM uzytkownicy";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['email'] . "<br>";
        }
    }

?>

<br>[ <a href="logout.php">Powrót do menu głównego!</a> ]
      
</body>
</html>