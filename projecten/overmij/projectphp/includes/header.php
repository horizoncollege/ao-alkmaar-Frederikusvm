<div class="headbar">

<a href="index.php"><img id="barimg" src="images/logo.png" alt="logo" class="images"></a>

<div class="menu">
<div id="home">
<?php
$actief = 0;
if (isset($_GET['page'])){
    $actief = $_GET['page'];
} 
?>
<h1><a <?php if ($actief == 0){ echo "class='active'";} ?> href="index.php?page=0" target="_self">Home</a></h1>
</div>

<div id="Opl">
<h1><a <?php if ($actief == 1){ echo "class='active'";} ?> href="opleiding.php?page=1" target="_self">Opleiding</a></h1>
</div>

<div id="Pers">
<h1><a <?php if ($actief == 2){ echo "class='active'";} ?> href="persoon.php?page=2" target="_self">Persoonlijk</a></h1>
</div>

<div id="cont">
    <h1><a <?php if ($actief == 3){ echo "class='active'";} ?> href="contact.php?page=3" target="_self">Contact</a></h1>
</div>
</div>

</div>