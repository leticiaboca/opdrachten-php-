<html>
<head>
<body>

<?php
if(isset($_POST['submit'])){
    echo "<style>";
        echo "body {";
        echo "background-color: ". $_POST['color'] . ";";
        echo "}";
        echo "</style>";
}

?>


<form method="post" action="">

    <input type="radio" name="color" value="red"> Rood

    <input type="radio" name="color" value="green"> Groen

    <input type="radio" name="color" value="blue"> Blauw

    <input type="radio" name="color" value="pink"> Roze
    <br>
    <br>
    <input type="submit" name="submit" value="Instellen">

</form>
</body>
</head>
</html>