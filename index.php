<?php
declare(strict_types = 1);
include 'includes/class-autoload.php';
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>

  <body>
    <form action="includes/calc.php" method="post">
      <p>My calculator</p>
      <input type="number" name="num1" placeholder="First number">
      <select name="operation">
        <option value="add">Sum</option>
        <option value="sub">Substract</option>
        <option value="div">Devide</option>
        <option value="mult">Multiply</option>
      </select>
      <input type="number" name="num2" placeholder="Second number">
      <button type="submit" name="submit">Calculate</button>
    </form>

  </body>
</html>
