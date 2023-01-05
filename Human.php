<?php
class Human
{
    public $taille = '175';
    public $nom;
    public $nee = 'je suis née';
    public $mort ='je suis morte';

    public function  showSize(){
        echo $this->taille;
    }
    public function marcher(){
        echo "Hey, im walking here";
    }

    public function maTaille($taille){
        return $taille +=1;
    }

    public function __construct(){
        $this->nee = function (){
            echo $nee;
        };
    }

    public function __destruc(){
        $this->mort = function() {
            echo $mort;
        };
    }
}

$marceline = new Human();
$constance = new Human();
$marceline->marcher();
$constance->showSize();
echo ($constance->nee)(), PHP_EOL;
echo $constance->maTaille(178);