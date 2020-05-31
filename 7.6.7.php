<html>
<body>
<?php
if(isset($_POST['uitrekenen']))    {
    $kapitaal= $_POST['kapitaal'];
    $rente= $_POST['rente'];
    $opname= $_POST['opname'];
}else  {
    $kapitaal="";
    $rente="";
    $opname="";

}
?>

<form method="post" action="">
    <label>Startkapitaal</label>
    <input type="text" name="kapitaal" value="<?php echo $kapitaal; ?>">
    <br>
    <label>Rentepercentage</label>
    <input type="text" name="rente" value="<?php echo $rente; ?>">
    <br>
    <label>Jaarlijkse opname</label>
    <input type="text" name="opname" value="<?php echo $opname ?>">
    <br>
    <input type="submit" name="uitrekenen" value="bereken de looptijd">
</form>
<br><br>

</body>
</html>
<?php

if (isset($_POST['uitrekenen']))    {
    $kapitaal= $_POST['kapitaal'];
    $rente= $_POST['rente'];
    $opname= $_POST['opname'];

    $jaren=1;
    while ($kapitaal>0) {

        $kapitaal= $kapitaal *(($rente /100) +1);
        $kapitaal-= $opname;

        $jaren++;
    }
    echo "<br>";
    echo "U kunt " .($jaren - 2) . " jaar lang € " .$opname. " opnemen";
}else   {

}
