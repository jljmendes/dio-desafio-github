<?php
  if ($_POST) {
     $tp = $_POST['operador'];
     $texto1 = (float) $_POST['primNum'];
     $texto2 = (float) $_POST['seguNum'];
   
     switch ($tp){
       case "+":
         $tp = "soma";
         $resultado = $texto1 + $texto2;
       break;
       case "-":
         $tp = "subtração";
         $resultado = $texto1 - $texto2;
       break;
       case "*":
         $tp = "multiplicação";
         $resultado = $texto1 * $texto2;
       break;
       case "/":
         $tp = "divisão";
         $resultado = $texto1 / $texto2;
       break;
     }
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Calculadora</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1 align="center" >CALCULADORA BÁSICA </h1>
  <br><br>

  <form method="post" >
     Valor 01: <input type="text" value="" name="primNum" /><br/><br/>
     Valor 02: <input type="text" value="" name="seguNum" /><br/><br/>
     <input type="submit" name="operador" value="+" />
     <input type="submit" name="operador" value="-" />
     <input type="submit" name="operador" value="*" />
     <input type="submit" name="operador" value="/" />
     <input type="text" name="resultado" value= "<?php if ($_POST) echo "$resultado";?>" />   
  </form>

</body>
</html>