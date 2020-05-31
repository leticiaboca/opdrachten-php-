<html>
<head>
<body>
<?php
if(isset($_POST['submit'])){
    if($_POST['btw'] == 9){
        $melding = "De rekening is " .$_POST['bedrag'] * 1.09;
    }else{
        $melding = "De rekening is " .$_POST['bedrag'] * 1.21;
    }

}else{
    echo "error";
}
?>

<form method="post" action="">

    <label>Bedrag exclusief BTW </label>
    <input type="text" name="bedrag" >

    <br>

    <input type="radio" name="btw" value="9" > Laag, 9%

    <br>

    <input type="radio" name="btw" value="21" > Hoog, 21%

    <br><br><br><br>

    <input type="submit" name="submit" value="Uitrekenen">
</form>
<?php
echo "<br><br>  Bedrag inclusief 21 BTW:$melding "
?>
</form>
</body>
</head>
</html>