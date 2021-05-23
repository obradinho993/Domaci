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

    function ime(){
        echo "<p><span>Obrad</span>
        <span>Babic</span></p>";
    } 
    $a = strlen("Obrad Babic");
    for ($i=1; $i <$a ; $i++) { 
    ime();
       
    }

    $x=mt_rand(1,10);
    $n=mt_rand(1,10);
    echo "$x <br>";
    echo "$n <br>";
    
    function span(){
        global $n;
         for ($i=1; $i <=$n ; $i++) { 
         echo "<span>  Ovo je span $i  </span>";
         }
       
    }   
    
    for ($i=1; $i <= $x ; $i++) { 
        span(); 
        echo "<div ></div>";

     
    }

   
    
    ?>
</body>
</html>