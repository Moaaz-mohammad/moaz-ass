<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="Three_Check_Greater_Than_Ten.php" method="post">
    Number 1: <input type="text" name="num1"><br>
    Number 2: <input type="text" name="num2"><br>
    Number 3: <input type="text" name="num3"><br>
    Number 4: <input type="text" name="num4"><br>
    <input type="submit" value="Submit">
  </form>
</body>
  <?php
  
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];
    $numberThree = $_POST['num3'];
    $numberFour = $_POST['num4'];
  }
  
  $arr = [@$numberOne, @$numberTwo, @$numberThree, @$numberFour];

  $a = 0;
  while ($a < count($arr)) {
    if ($arr[$a] > 10) {
      //__One Anwser__//
      echo "Yes";
      break;
      //__Two Anwser__//
      echo "Yes $arr[$a] <br>";
    }else {
      echo 'No';
      break;
    }
    $a++;
  }
  
  ?>
</html>