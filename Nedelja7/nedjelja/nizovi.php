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
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
       ];

       $x[4]= ['ime'=>"Dragan", "godine"=>38, "grad"=>"Nis", "pozicija"=>"pekar"];
       $x[5]= ['ime'=>"Milana", "godine"=>36, "grad"=>"Bg", "pozicija"=>"lekar"];
       $x[6]= ['ime'=>"Jovana", "godine"=>41, "grad"=>"NS", "pozicija"=>"apotekar"];
       $x[7]= ['ime'=>"Sanja", "godine"=>55, "grad"=>"BG", "pozicija"=>"programer"];
     


       var_dump($x);
       echo "<br>";

       function imena_programera($x){
           for ($i=0; $i <count($x) ; $i++) { 
               if($x[$i]['pozicija']=='programer')
               print_r( $x[$i]['ime']);
           }

       }
       imena_programera($x);
       echo "<br>";



      
    function prikazi_podatke($osoba){
         echo "<p>".join(",", $osoba)."</p>";
       
    }
    prikazi_podatke($x[2]);
    echo "<br>";




    
    function imaju_s_u_imenu($osoba){
        
        if(stripos($osoba['ime'],'s')!==false)
         prikazi_podatke($osoba);  

}
    for ($i=0; $i <count($x) ; $i++) { 
         imaju_s_u_imenu($x[$i]);
         

}

    
     
    

   
       
    
    ?>
</body>
</html>