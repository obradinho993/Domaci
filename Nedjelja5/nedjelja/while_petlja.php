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
        $i = 20;
        while($i>0){
            echo "$i ";
            $i --;
        }
    
    ?>

    <?php
    echo "<br>";
    $n=30;
    $p=1;
    $p1=0;
    $i1=0;
    while($p < 100000 and $n>0){
        $p1=$p;
        $i1=$n;
        $p *= $n;
        $n--;
       
    }
    $c=$i1+1;
    echo "<p style='color:red'>$p1<p>";
    echo "<p style='color:green'>$c<p>";



    for($i=30; $i<=99; $i++){
        if(($i%10)%4==0 || (floor($i/10))%3==0)
        continue;

        else
        echo "$i ";


    }


    
    
 

    
    ?>
   

    
   
</body>
</html>