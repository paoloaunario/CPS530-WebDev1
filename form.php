<!DOCTYPE html>
<html>
<body>

<?php

$number = $_POST['number'];
$number2 = $_POST['number2'];
$n=$number;
$end=$number2;
for ($x = 1; $x <= 12; $x++) {
  $p=$number*$x;
  echo $n. "x" .$x."=".$p."<br>";
}
?>

<?php
  if (!isset($_COOKIE['hits']))
  {
     ?>
You have visited this page 1 time.
<?php
  $cookie = 1;
  setcookie("hits", $cookie);
  }
  else
  {
    $cookie = ++$_COOKIE['hits'];
    setcookie("hits", $cookie);
?>
You have viewed this page <?= $_COOKIE['hits'] ?> times.
<?php } ?>
</body>
</html>


