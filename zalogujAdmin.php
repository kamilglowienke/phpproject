<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}


$login = $_POST['login'];
$haslo = $_POST['haslo'];

if ($login == admin || $haslo == admin1){
        header('Location: panelAdministratora.php');
}
else {
	$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
	header('Location: admin.php');			
		}
?>