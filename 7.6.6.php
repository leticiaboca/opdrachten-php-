<html>
<head>
<body>
<?php
session_start();

setcookie("cijfer" , $_COOKIE['cijfer'] + 1, time() + 3600);
if(!isset($_SESSION['cijfer'])) {
    $_SESSION['cijfer'] = 1;
} else {
    $_SESSION['cijfer'] = 1;
}

$gemiddelde = array (rand (1, 10));
$gemiddelde = $_SESSION['cijfer'] + $_SESSION['cijfer'];
$gemiddelde1 =  $_SESSION['cijfer'] + $_SESSION['cijfer'] / $gemiddelde;

?>
<form method="post" action="">
    <label>Cijfer</label>
    <input type="text" name="bedrag" >

    <br><br>

    <input type="submit" name="submit" value="Toevoegen">

</form>
</body>
</head>
</html>
