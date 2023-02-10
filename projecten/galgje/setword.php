<?php

session_start();
$generatedword = $_GET['word'];
$_SESSION['question'] = strtoupper($generatedword);
$_SESSION['max'] =  9;
$_SESSION['counter'] = 0;
header('Location:galgje.php');
?>