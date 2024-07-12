<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <form action="task_four.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
        Number <?= $i ?>: <input type="text" name="num<?= $i ?>"><br>
        <?php endfor; ?>
      <input type="submit" value="Submit">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $numberOne = $_POST['num1'];
      $numberTwo = $_POST['num2'];
      $numberThree = $_POST['num3'];
      $numberFour = $_POST['num4'];
      $numberFive = $_POST['num5'];
      $numberSix = $_POST['num6'];
      $numberSeven = $_POST['num7'];
      $numberEight = $_POST['num8'];
      $numberNine = $_POST['num9'];
      $numberTen = $_POST['num10'];
      $arr = [$numberOne, $numberTwo, $numberThree, $numberFour, $numberFive, $numberSix, $numberSeven, $numberEight, $numberNine, $numberTen];
    }

    $RangeOne = 0;
    $RangeTwo = 0;
    $RangeThre = 0;
    $RangeFour = 0;

    $a = 0;
    while ($a < count($arr)) {
      if ($arr[$a] >= 0 && $arr[$a] <= 25) {
        $RangeOne++;
      }else if ($arr[$a] >= 26 && $arr[$a] <= 50) {
        $RangeTwo++;
      }else if ($arr[$a] >= 51 && $arr[$a] <= 75) {
        $RangeThre++;
      }else if ($arr[$a] >= 76 && $arr[$a] <= 100) {
        $RangeFour++;
      }
      $a++;
    }
    echo '<br>';
    echo '___[0,25]___' . '<br>' .' Range One is: ' . $RangeOne. '<br>';
    echo '_______________<br>';
    echo '___[26,50]___' . '<br>' .'  Range Two is: ' . $RangeTwo. '<br>';
    echo '_______________<br>';
    echo '___[51,75]___ ' . '<br>' .' Range Three is: ' . $RangeThre. '<br>';
    echo '_______________<br>';
    echo '___[76,100]___' . '<br>' .'  Range Four is: ' . $RangeThre;
    
    ?>
  </body>
</html>