<html>
<head>
<body>
<?php
if(isset($_POST['submit'])){
if($_POST['bedrag'] AND $_POST['bedrag2']){
        if (($_POST['btw']) == 'optellen') {
            $waarde = $_POST['bedrag'] + $_POST['bedrag2'];
        }
    elseif(($_POST['btw']) == 'aftrekken'){

                $waarde = $_POST['bedrag'] - $_POST['bedrag2'];

    }
  elseif (($_POST['btw']) == 'vermenigvuldigen'){

                $waarde = $_POST['bedrag'] * $_POST['bedrag2'];

  }
        elseif (($_POST['btw']) == 'delen'){

                $waarde = $_POST['bedrag'] / $_POST['bedrag2'];

        }
//    else{}
    }
}
?>
<form method="post" action="">

    <label>Getal 1</label>
    <input type="text" name="bedrag" >
    <br>

    <input type="radio" name="btw" value="optellen"> Optellen

    <input type="radio" name="btw" value="aftrekken"> Aftrekken

    <input type="radio" name="btw" value="vermenigvuldigen"> Vermenigvuldigen

    <input type="radio" name="btw" value="delen"> Delen

    <br>

    <label>Getal 2</label>
    <input type="text" name="bedrag2" >

    <br><br>

    <input type="submit" name="submit" value="Berekenen">
</form>
<?php
echo $waarde;
?>
</body>
</head>
</html>