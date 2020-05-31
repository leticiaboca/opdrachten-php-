<html>
<body>
<?php
if(isset($_POST['submit'])){
    $bedrag = $_POST['bedrag'];
    $korting = $_POST['korting'];
    $melding = number_format($_POST['bedrag'] - $_POST['korting'] / 100 * $_POST['bedrag'], 2, ",", ".");
}else{
    $melding ="";
    $bedrag = "";
    $korting = "";
}

?>

<form method="post" action="">
    <label>Prijs</label>
    <input type="text" name="bedrag" value="<?php echo $bedrag ?>"  >

    <br>

    <label>Korting (%)</label>
    <input type="text" name="korting"value="<?php echo $korting ?>"  >

    <br><br>

    <input type="submit" name="submit" value="Uitrekenen">

    <?php
    echo "<br><br>Bedrag inclusief  korting $korting %: $melding";
    ?>
</form>
</body>
</html>