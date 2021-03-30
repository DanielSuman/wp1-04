<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>RPG-Životy</h1>
<body>
<?php
// hodnoty
$maxhealth = 100;
$chealth = rand(0,100);

// podminky
if($chealth == 100) {
    echo "Vaše momentální zdraví
     je $chealth! Jste zcela zdráv!";
    } elseif($chealth == 0) {echo "Vaše zdraví je 0! Jste mrtvý!";}
      elseif($chealth < $maxhealth) {
    echo "Jste zraněn! Vaše zdraví je $chealth!
         Doporučujeme vyhledat okamžitou lékařskou pomoc nebo
          aplikovat lektvar zdraví!";}
        


?>
    
</body>
</html>