<?php
session_start();
$riddle = $_SESSION['question'];
$result = "";
$lenght = strlen($riddle);
if (!isset($_SESSION['entered'])) {
    $_SESSION['entered'] = array();
}
if (isset($_GET['input'])) {
    array_push($_SESSION['entered'], $_GET['input']);
    
    if (!strstr($riddle, $_GET['input'])) {
        $_SESSION['counter']++;
    }
}
if ($_SESSION['debug'] == 1) {
    echo $riddle . "<br>" . $lenght . "<br>";
}
for ($i = 0; $i < $lenght; $i++) {
    if (in_array(substr($riddle, $i, 1), $_SESSION['entered'])) {
        $result .=  substr($riddle, $i, 1);
    } else {
        $result .= "*";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="galgjestyle.css">
<title>Galgje</title>
</head>
<body>
<img src="<?php echo $_SESSION['counter'];?>.png" height="250px">
<br>
<?php
echo $result . "<br>";
echo"Number of wrong guesses: " . $_SESSION['counter'] . "<br>";

if ($_SESSION['counter'] >= $_SESSION['max']) {
    echo "<h1>Failure.</h1><br>";
    echo "The word we were looking for was: " . $riddle;
    echo "<br><a href='index.php'>Try again</a>";
} elseif ($result == $riddle) {
    echo "<h1>Correct</h1>";
    echo "<br><a href='index.php'>Try again</a>";
} else {
    foreach (range('A', 'Z') as $char) {
        if (!in_array($char, $_SESSION['entered'])) {
            echo "<a href='?input=$char'>" . $char . "</a>\n";
        } else {
            echo "<span class='strike'>" . $char . "</span>\n";   
        }
    }  
}
?>
</body>
</html>