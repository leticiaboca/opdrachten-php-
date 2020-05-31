<html>
<head>
<style>
    input[type=text]{
        width: 50px;
    }
</style>
<body>
<?php
if(isset($_POST['uitrekenen'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];


}else {
    $a = "";
    $b = "";
    $c = "";
}
?>
<form action="" method="POST">
    <label>ABC-formule</label>
    <br><br>
    y =
    <input type="text" name="a" value="<?php echo $a?>">x² +
    <input type="text" name="b" value="<?php echo $b?>">x +
    <input type="text" name="c" value="<?php echo $c?>">
    <br><br>
    <input type="submit" name="uitrekenen" value="Uitrekenen">
</form>

<?php
if(isset($_POST['uitrekenen'])) {

    $d = (($b * $b) - (4 * $a * $c));
    $x1 = (((-$b * 1) + sqrt($d)) / (2 * $a));
    $x2 = (((-$b * 1) - sqrt($d)) / (2 * $a));

    echo "x1 = ". $x1 . "<br>";
    echo "x2 = ". $x2;
}
?>
</body>
</head>
</html>