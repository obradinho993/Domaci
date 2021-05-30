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
    function funkcija(){
        $a=[54,92,105,215,78,22];
        $k=count($a);
        $d=0;
        $t=0;
        for ($i=0; $i <$k ; $i++) { 
            if($a[$i]<100)
             $d++;  
            else
             $t++;   
            
         }
         if($d>$t)
         echo "vise je dvocifrenih";
         else
         echo "vise je trocifrenih";
         echo "<br>";
    }

    funkcija();
 
                
    function palindrom(){
        $niz=["buducnost", "potop", "lul", "vfvvvf"];
        $k=count($niz);
        for ($i=0; $i <$k ; $i++) { 
            if($niz[$i]===strrev($niz[$i]))
            echo $niz[$i];
            echo "<br>";
            
        }


    }    
    palindrom();

    function meni($niz){
        // function izracunaj($niz){
        //     for($i=0; $i<count($niz); $i++){
        //         if(strlen($niz[$i]) > 5)
        //             //echo "<span>".$niz[$i]."</span>";
        //             echo "<span>{$niz[$i]}</span> ";
        //     }
        //     foreach($niz as $rec){
        //         if(strlen($rec) > 5)
        //             echo "<span>$rec</span> ";
        //     }
        // }
        // $x = ["zvezda", "nije", "partizan", "duza","obilic"];
        // izracunaj($x);
      foreach ($niz as $rijec) {
          echo "<ul> <li>$rijec</li> </ul>";
      }

    }
    $x = ["stavka1 ","stavka2", "stavka3"];
    meni($x);
 
    ?>
</body>
</html>