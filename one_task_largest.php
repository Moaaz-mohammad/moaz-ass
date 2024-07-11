<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <form action="one_task_largest.php" method="post">
      Number 1: <input type="text" name="num1"><br>
      Number 2: <input type="text" name="num2"><br>
      Number 3: <input type="text" name="num3"><br>
      <input type="submit" value="Submit">
    </form>
  </body>
  <?php 
  
  $number1 = @$_POST['num1'];
  $number2 = @$_POST['num2'];
  $number3 = @$_POST['num3'];
  
  $sum = [$number1, $number2, $number3];

  $largest = $sum[0];


  $a = 0;
  while ($a < count($sum)) {
    if ($sum[$a] > $largest) {
      $largest = $sum[$a];
    }
    $a++;
  }

  echo "Largest Number Is  $largest";

  ?>
</html>