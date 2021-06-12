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

// Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
// Napisati konstruktor koji dobija i  postavlja sve clanice.
// Napisati metodu za citanje cene.
// Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."

// Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.

// U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
// Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.


    class Krevet{
        private $cena;
        public $duzina, $sirina, $materijal;

        public function __construct($cena,$duzina,$sirina,$materijal){
            $this->cena=$cena;
            $this->duzina=$duzina;
            $this->sirina=$sirina;
            $this->materijal=$materijal;
        }

        public function prikazi_cenu(){
            return $this->cena;
        }

        public function __toString(){

            return "Krevet je duzine ".$this->duzina ." i sirine ".$this->sirina ." napravljen od ".$this->materijal ."  
            po ceni ".$this->prikazi_cenu() ." ";
            
        }
        public function procenat($popust){
           $this->cena = $this->cena-$this->cena/$popust;
            return $this->cena;
        }
    }

    $krevet1=new Krevet(50000,200,150,"mahagonija");
    $krevet2=new Krevet(45000,220,180,"bukovina");

    if($krevet1->prikazi_cenu()>$krevet2->prikazi_cenu())
        echo $krevet1;
    else
        echo $krevet2;  
        
        
        $krevet3=new Krevet(80000,300,180,"mahagonija");
        echo $krevet3;
        echo "<br>";
        echo  $krevet3->procenat(10);
        echo "<br>";
        echo $krevet3;
        echo "<br>";





    


    ?>
</body>
</html>