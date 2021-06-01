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
    // PRVI ZADATAK
    function span(){
        $niz = ["rijec1","rec2","rijec3","rec4","rijec5"];
   

        for ($i=0; $i <count($niz) ; $i++) { 
            if(strlen($niz[$i])>=5)
                echo"<span style='color:green'>".$niz[$i]."</span>";
            else
                echo "<span style='color:red'>".$niz[$i]."</span> " ;

        }

    }

    span();
    // DRUGI ZADATAK

    function aritmeticka_sredina(){
        $niz = [1,8,7,9,6,5,8,4];
        $niz_veci=[];
        $s=0;
        $br=0;
        for ($i=0; $i <count($niz) ; $i++) { 
            $br++;
            $s +=$niz[$i];
            $sredina = $s/$br;
      
            
        }
        echo "<br>";
        echo $br;
        echo "<br>";
        echo $s;
        echo "<br>";
        echo "sredina je $sredina";
        echo "<br>";

        for ($i=0; $i <count($niz) ; $i++) { 
            if($niz[$i]>$sredina)
            array_unshift($niz_veci,$niz[$i]);
        }
        echo " novi niz je:".join(",",$niz_veci)."";


    }
    aritmeticka_sredina();
    echo "<br>";
    // TRECI ZADATAK

    $number=$_GET['numbers'];
    echo $number; 
    function input(){
        global $number,$nizniz;
         $nizniz=explode(" ",$number);
         print_r($nizniz);
       
    }
    input();

    function tri_parna($niz_parni){
        $broj_parnih=0;
        for ($i=0; $i <count($niz_parni) ; $i++) { 
            if($niz_parni[$i]%2==0)
                $broj_parnih++;
        }

        if($broj_parnih>=3)
            echo "imaju bar tri parna";
        else
            echo "nemaju tri parna";
    }
    $x=[4,2,1,3,5,5];
    tri_parna($x);
    echo "<br>";

    function manji_od_1000($niz_1000){
        $svi_manji=1;
        for ($j=0; $j <count($niz_1000) ; $j++) { 
            if($niz_1000[$j]>1000)
                $svi_manji=0;
        }
        return $svi_manji;

    }
    $x=[9,2,3,4,5,6];
     print_r(manji_od_1000($x));
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";



      print_r(manji_od_1000($nizniz));
      tri_parna($nizniz);




    ?>
</body>
</html>

