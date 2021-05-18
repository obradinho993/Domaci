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
    $prvi = "Dragutin";
    $drugi = "Milutin";

    function ime(){
        global $prvi, $drugi;
        if (strlen($prvi)> strlen($drugi)) {
            echo $prvi;
        }
        else
            echo $drugi;    
    }
    ime();

    

  


    ?>
</body>
</html>