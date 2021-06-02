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



    function niz(){
        $x = [];
        for ($i=0; $i <9 ; $i++) { 
            $x[$i]=mt_rand(-5,7);
        }
        echo join(",",$x);
        return $x;
     

    }
    function nula($x){
        $svi=true;
        for ($i=0; $i <count($x) ; $i++) { 
            if($x[$i]==0)
               $svi=false;     
        }
      return $svi;

    }
    
    $niz=niz();

    $svibrojevi= nula($niz);
    if($svibrojevi){
        echo "nema nule";
        echo "<br>";}
    else{
        echo "ima nule";
        echo "<br>";}


//         Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
// Koji dan je najuspesniji
// Kolika je prosecna uspesnost
// Razliku izmedju najbolje i najgore uspesnosti



        $domaci=['ponedeljak'=>27,'utorak'=>29,'cetvrtak'=>28,'petak'=>28];

        function asocija($domaci){
            $max=26;
            $uspesan_dan=" ";
            foreach($domaci as $dan=>$broj){
                if($broj>$max){
                    $max=$broj;
                    $uspesan_dan=$dan;
                }

            }
            echo "najuspjesniji dan je $uspesan_dan";
            echo "<br>";

        }

        asocija($domaci);

        function average($domaci){
            $suma=0;
            $brojac=0;
            foreach($domaci as $dan=>$broj){
                $suma += $broj;
                $brojac++;

            }
            $prosjek = $suma/$brojac;
            echo " prosjek je $prosjek <br>";

        }
        average($domaci);

        function difference($domaci){


            foreach($domaci as $dan=>$broj){
        
                $max = max($domaci);
                echo $max;
                echo "<br>";
              
                $min = min($domaci);
                echo $min;
                echo "<br>";

              

                $r=$max - $min;
                return "razilka je $r";            

            }

        }
            echo difference($domaci);
            
            

        

    ?>
</body>
</html>