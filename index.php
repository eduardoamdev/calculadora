<!doctype html>
<html>
<head>

<meta charset="utf-8">

<title>Documento sin título</title>

<style>

  form{
    padding-top: 5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  input{
    margin-bottom: 2rem;
    padding: 0.3rem;
    font-size: 1.2rem;
  }

  select{
    margin-bottom: 2rem;
    padding: 0.3rem;
    font-size: 1.2rem;
  }

</style>

</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <label for="num1"></label>
  <input type="text" name="num1" id="num1" class="form-text">
  <label for="num2"></label>
  <input type="text" name="num2" id="num2">
  <label for="operacion"></label>
  <select name="operacion" id="operacion">
    <option>suma</option>
    <option>resta</option>
    <option>multiplicación</option>
    <option>división</option>
    <option>incremento1</option>
    <option>decremento1</option>
    <option>incremento2</option>
    <option>decremento2</option>
  </select>
  <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
</form>

<?php

  include("calculadora.php");

  if(isset($_POST["button"])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    operar($numero1, $numero2, $operacion);

  }

?>

</body>
</html>
