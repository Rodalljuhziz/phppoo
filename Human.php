<?php
class Human
{
    public $taille = '175';
    public $nom;
    public $nee = 'je suis née';
    public $mort ='je suis morte';

    private $secret;

    public function  showSize(){
        echo $this->taille;
    }
    public function marcher(){
        echo "Hey, im walking here";
    }

    public function maTaille(){
        echo ($this->taille++);
        return $this->taille;
    }

   /* public function __construct($nomDeFamille){
        $nom = $nomDeFamille;
        $this->nee = function (){
            echo $this->nee;
        };
    }*/

    public function __destruc(){
        $this->mort = function() {
            echo this->$mort;
        };
    }

    public function setSecret($secret){
        $this->secret = $secret;
    }
    public function getSecret(){
        return $this->secret;
    }
}

class Homme extends Human
{

}

class Femme extends Human
{

}

$marceline = new Femme();
$constance = new Femme();
$marceline->marcher();
$constance->showSize();
//echo $constance->nee(), PHP_EOL;
echo $constance->maTaille();