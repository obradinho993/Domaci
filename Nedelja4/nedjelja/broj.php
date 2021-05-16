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
    $a = mt_rand();
    $b = mt_rand();

    if($a>$b){
        echo "<p style='color:green'>$a<p> <br>
              <p style='color:red'>$b<p>";
    }
    else{
        echo "<p style='color:green'>$b<p> <br>
        <p style='color:red'>$a<p>";
    }

    
    ?>
</body>
</html>
