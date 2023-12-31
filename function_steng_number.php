///لەبەر ئەوەی strict چالاک نەکراوە "5 ڕۆژ" دەگۆڕدرێت بۆ int(5)، و 10 دەگەڕێنێتەوە
// since strict is enabled and "5 days" is not an integer, an error will be thrown
<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>

///error
<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
