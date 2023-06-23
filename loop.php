<!DOCTYPE html>
<html>
<body>

<?php  
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?>  

</body>
</html>
///////
نموونە ڕوون کراوەتەوە
$x = 0؛ - ژمێرەری لوپ ($x) دەستپێبکە، و بەهای دەستپێکردنەکە لەسەر 0 دابنێ
$x <= 100 - بەردەوام بە لە لوپەکە بە مەرجێک $x کەمتر بێت یان یەکسان بێت بە 100
$x+=10؛ - بەهای ژمێرەری لوپ بە ڕێژەی ١٠ زیاد بکە بۆ هەر دووبارەکردنەوەیەک




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 0;
 
while($x <= 100) {
  echo "The number is: $x <br>";
  $+x=10;
}
?>  

</body>
</html>
///////


<!DOCTYPE html>
<html>
<body>

<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

</body>
</html>
///////

<!DOCTYPE html>
<html>
<body>

<?php 
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

</body>
</html>
///////

$x = 0؛ - ژمێرەری لوپ ($x) دەستپێبکە، و بەهای دەستپێکردنەکە لەسەر 0 دابنێ
$x <= 10؛ - بەردەوام بە لە لوپەکە تا ئەو کاتەی $x کەمتر بێت یان یەکسان بێت بە 10
$x++ - بەهای ژمێرەری لوپ بە ڕێژەی 1 زیاد بکە بۆ هەر دووبارەکردنەوەیەک


<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  

</body>
</html>
///////
<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>  

</body>
</html>
/////////

<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>

</body>
</html>

////

<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>

</body>
</html>
//////

<!DOCTYPE html>
<html>
<body>

<?php  
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
  x++;
  
  }
  echo "The number is: $x <br>";
  $x++;
  
} 
?>  

</body>
</html>




Syntax
foreach ($array as $value) {
  code to be executed;
}

<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  

</body>
</html>
////


<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

</body>
</html>

//////

