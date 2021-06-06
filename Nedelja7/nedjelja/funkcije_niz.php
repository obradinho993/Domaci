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
       
       $x = array_map(function($osoba){
        $osoba['godine_staza'] = []; 
        for($i=0;$i<4;$i++)   
            $osoba['godine_staza'] = mt_rand(1, 3) ;
        return $osoba;
    }, $x);
    print_r($x);
    echo "<br>";

    usort($x, function($a, $b){ return ($b['godine_staza'] - $a['godine_staza']);});
    var_dump($x);
    echo "<br>";

    $max_godine_staza=0;
    for($i=0;$i<count($x);$i++){
        if($x[$i]['godine_staza']>$max_godine_staza)
        $max_godine_staza=$x[$i]['godine_staza'];
    }
    echo $max_godine_staza;

    $najveci_staz = array_filter($x, function($osoba){
        global $max_godine_staza;            
        if ($osoba['godine_staza'] === $max_godine_staza) {
            return true;
        }else {
            return false;
        }
    });

    for ($i=0; $i <count($najveci_staz) ; $i++) { 
        echo "<p>".join(", ",$najveci_staz[$i])."</p>";
   
    }
    print_r($najveci_staz);

    

