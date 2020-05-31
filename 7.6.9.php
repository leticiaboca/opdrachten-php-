<html>
<body>
<?php
if(isset($_POST['weergeven'])) {
    $tekst = $_POST['tekst'];
    $letters = $_POST['letters'];
}else {
    $tekst = "";
    $letters = "";
}
?>

<form action="" method="POST">
    <label>Tekst:</label>
    <input type="text" name="tekst" value="<?php echo $tekst?>"><br>
    <input type="radio" name="letters" value="1" <?php if($letters == "1") { echo "checked='checked'"; } ?>>In hoofdletters<br>
    <input type="radio" name="letters" value="2" <?php if($letters == "2") { echo "checked='checked'"; } ?>>In kleine letters<br>
    <input type="radio" name="letters" value="3" <?php if($letters == "3") { echo "checked='checked'"; } ?>>Eerste letter van de zin hoofdletter<br>
    <input type="radio" name="letters" value="4" <?php if($letters == "4") { echo "checked='checked'"; } ?>>Eerste letter van ieder woord hoofdletter
    <br><br>
    <input type="submit" name="weergeven" value="Weergeven">
</form>

<?php
if(isset($_POST['weergeven'])) {
    if ($letters == 1) {
        echo strtoupper($tekst);
    }elseif ($letters == 2) {
        echo strtolower($tekst);
    }elseif ($letters == 3) {
        echo ucfirst($tekst);
    }elseif ($letters == 4) {
        echo ucwords($tekst);
    }
}

?>
</body>
</html>