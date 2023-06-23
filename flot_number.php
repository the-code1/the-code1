<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>
///jeawaze

<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) :int {
  return (int) ($a + $b);
}
echo addNumbers(1.2, 5.2); 
?>



////////////////////outpot 7

<!DOCTYPE html>
<html>
<body>

<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

</body>
</html>

