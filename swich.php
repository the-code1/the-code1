///

بەم شێوەیە کاردەکات: سەرەتا ئێمە یەک دەربڕینمان هەیە n (زۆربەی کات گۆڕاوێکە)، کە جارێک هەڵدەسەنگێندرێت. پاشان بەهای دەربڕینەکە بەراورد دەکرێت لەگەڵ بەهاکانی هەر حاڵەتێک لە پێکهاتەکەدا. ئەگەر یەکسانبوون هەبێت، ئەوا بلۆکی کۆدی پەیوەست بەو حاڵەتە جێبەجێ دەکرێت. بەکاری بهێنە breakبۆ ئەوەی کۆدەکە بە شێوەیەکی ئۆتۆماتیکی نەچێتە ناو حاڵەتی داهاتوو. defaultئەگەر هیچ یەکسانیەک نەدۆزرێتەوە، ئەوا قسەکە بەکاردەهێنرێت .


<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>
//////

