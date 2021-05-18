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

        $i = $_GET['ime'];
    

        $ime = substr($i,0,1);
        $prezime = strpos($i," ",1);
        $n= $prezime+1;
        $pr=substr($i,$n,1);

        echo "$ime.$pr.";




    ?>
</body>
</html>