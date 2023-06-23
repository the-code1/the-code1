<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

</body>
</html>
////////فەنکشنەکە count()بەکاردێت بۆ گەڕاندنەوەی درێژی (ژمارەی توخمەکان)ی ڕیزبەندییەک:
///درێژی ڕیزبەندییەک بەدەست بهێنە - فەنکشنی count().


<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

</body>
</html>
/////////
///////بۆ لوپکردن و چاپکردنی هەموو بەهاکانی ڕیزبەندییەکی ئیندێکسکراو، دەتوانیت لوپێک بەکاربهێنیت for، وەک ئەم:



<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

</body>
</html>


//////ڕیزبەندی پەیوەندیدار ئەو ڕیزبەندییانەن کە کلیلی ناودار بەکاردەهێنن کە تۆ بۆیان دیاری دەکەیت.


<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Ben'] . " years old.";
?>

</body>
</html>
////////
///////ئێستا ڕیزبەندی دوو ڕەهەندی $cars چوار ڕیزبەندی لەخۆدەگرێت، و دوو ئیندێکسی هەیە: ڕیز و ستوون.



<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";






توخمەکانی ناو ڕیزبەندییەک دەتوانرێت بە ڕیزبەندی ئەلفوبێ یان ژمارەیی، دابەزین یان بەرزبوونەوە ڕیزبکرێن.

PHP - ئەرکەکانی ڕیزکردن بۆ ڕیزبەندی
لەم بابەتەدا بەم فەنکشنانەی خوارەوەی ڕیزبەندی PHP دا تێدەپەڕین:

sort()- ڕیزبەندی ڕیزبەندی بە ڕیزبەندی بەرزبوونەوە
rsort()- ڕیزبەندی ڕیزبەندی بە ڕیزبەندی دابەزین
asort()- ڕیزبەندی پەیوەندیدارەکان بە ڕیزبەندی بەرزبوونەوە، بەپێی بەهاکە
ksort()- ڕیزبەندی پەیوەندیدارەکان بە ڕیزبەندی بەرزبوونەوە، بەپێی کلیلەکە
arsort()- ڕیزبەندی پەیوەندیدارەکان بە ڕیزبەندی دابەزین، بەپێی بەهاکە
krsort()- ڕیزبەندی پەیوەندیدارەکان بە ڕیزبەندی دابەزین، بەپێی کلیلەکە
///////
  /////
  <!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

</body>
</html>

////////////////////////////////////////
<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

</body>
</html>
/////////////////////////////////
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

</body>
</html>
//////////////////////
<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

</body>
</html>

echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

</body>
</html>
