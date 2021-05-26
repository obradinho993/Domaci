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
    function broj($a,$b,$c){
        if($a>$b and $a >$c)
        return $a;
        if($b>$a and $b >$c)
        return $b;
        if($c>$a and $c >$b)
        return $c;

    }
    echo broj(7,1,4);


    function div($N){
        echo "<div>";
        for ($i=1; $i <=$N ; $i++) { 
            echo "<span>$N<span> <br>";
        }
        echo "</div>";

    }

    div(11);
    ?>
</body>
</html>