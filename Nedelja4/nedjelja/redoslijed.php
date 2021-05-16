<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = mt_rand(-1000,1000);
        $b = mt_rand(-1000,1000);
        $c = mt_rand(-1000,1000);

        if($a>$b && $a>$c){
            if($b>$c){
                echo "$c <br>$b <br> $a";
            }
            else{
                echo "$b <br>$c <br> $a";
            }
        }
        if($b>$a && $b>$c){
            if($a>$c){
                echo "$c <br>$a <br> $b";
            }
            else{
                echo "$a <br>$c <br> $b";
            }
        }
        if($c>$a && $c>$b){
            if($a>$b){
                echo "$b <br>$a <br> $c";
            }
            else{
                echo "$a <br>$b <br> $c";
            }
        }
        
        



    ?>
</body>
</html>