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
        $prvi = $_GET['prvi'];
        $drugi = $_GET['drugi'];
        $treci = $_GET['treci'];
        $cetvrti = $_GET['cetvrti'];

        if($prvi>$drugi or $treci >$cetvrti)
            die("Nije u redu");
        else{
            $zbir = 0;
            for ($i=$prvi; $i <=$drugi ; $i++) 
            if($i % 4==0){
            $zbir +=$i;
            }
           
            $zbir2 = 0;
            for ($i=$treci; $i <=$cetvrti ; $i++) 
            if($i % 3==0){
            $zbir2 +=$i;
            } 

          
        }  
        
        if($zbir>$zbir2)
        echo "Veci je zbir prva dva broja i on iznosi $zbir";
        else
        echo "Veci je zbir druga dva broja i on iznosi $zbir2";
       






    ?>
    
</body>
</html>