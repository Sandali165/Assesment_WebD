<!DOCTYPE HTML>
<html>  
<body>


<form action="file.view.php" method="post">

Name: <input type="text" name="name"><br><br>

Food:<br>
<input type="radio" name="food"
<?php if (isset($food) && $food=="Idli") echo "checked";?>
value="Idli">Idli <br>
<input type="radio" name="food"
<?php if (isset($food) && $food=="Dosa") echo "checked";?>
value="Dosa">Dosa <br>
<input type="radio" name="food"
<?php if (isset($food) && $food=="Vadapav") echo "checked";?>
value="Vadapav">Vadapav <br><br>
<input type="submit">

</form>


</body>
</html>