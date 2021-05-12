<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       td{
            
            border: 1px solid black;
           
        }
    </style>

</head>
<body>
    <?php 
    $b1 = mt_rand(1 , 10);
    $b2 = mt_rand(1 , 10);
    $b3 = mt_rand(1 , 10);

    $c1 = $b1 **2 ;
    $c2 = $b2 **2 ;
    $c3 = $b3 **2 ;
    echo " 
       <table>
            <tr>
                <td>$b1</td>
                <td>$c1</td>
            </tr>
            <tr>
                <td>$b2</td>
                <td>$c2</td>
            </tr>
            <tr>
                <td>$b3</td>
                <td>$c3</td>
            </tr>
        </table>
    
    "
    ?>

   
    

</body>
</html>