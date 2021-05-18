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

        
     function krace_ime(){
        global $prvi, $drugi;
        if (strlen($prvi)> strlen($drugi)){
            echo "<p style ='color :green'>$drugi<p>";
            echo "<p style = 'color :red'>$prvi<p>"  ; 
           return $drugi;
          

        }
       else
       echo "<p style = 'color :red'>$prvi<p>"  ; 
           echo "<p style ='color :green'>$drugi<p>";

           return $prvi; 
           
    }

    echo "<p>".krace_ime()."<p>";
  

    
    ?>
</body>
</html>