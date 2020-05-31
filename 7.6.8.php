<html>
<body>
<?php
session_start();
if(!isset($_SESSION['fruit'])){
    $_SESSION['fruit'] = array();
}

if(isset($_POST['toevoegen'])) {
    $_SESSION['fruit'][] = $_POST['fruitsoort'];
}

if(isset($_POST['sorteren'])) {
    sort($_SESSION['fruit']);
}

if(isset($_POST['schudden'])) {
    shuffle($_SESSION['fruit']);
}
//session_destroy();
?>

<form action="" method="POST">
    <label>Fruitsoort:</label> &emsp;&emsp;&emsp;
    <input type="text" name="fruitsoort" ><br><br>
    <input type="submit" name="toevoegen" value="Toevoegen"><br><br><br>
    --------------------<br><br>
    <input type="submit" name="sorteren" value="Sorteren">
    <input type="submit" name="schudden" value="Schudden"><br><br>
    --------------------
    <br>
</form>
<?php
echo "Inhoud van de array: <br>";
for($i = 0; $i < count($_SESSION['fruit']); $i++) {
    echo "-".$_SESSION['fruit'][$i]."<br>";

}
?>

</body>
</html>