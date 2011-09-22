<?php

class Vehicles {


/***class Vehicles*******
**author Aleksandar Milovac, aleksandar.milovac@gmail.com
**released under GPL v2 licence
** defines Vehicle object
**/

protected $speed;
protected $color;
protected $gear;
protected $engineStatus = 'Off';
protected $type;
protected $horsePower;

/*konstruktor koji setuje tip vozila:kola, kamion....
*
*
*/

function __construct($vtype){
	$this->type=$vtype;
}

// definicija metoda klase, koje su funkcije objekta?

/***** Setter method za paljenje kola
**enineStatus : On ili Off
**
**/


function setEngineStatus($engineStatus){
    $this->engineStatus = $engineStatus;

}

function setSpeed($speed){
    $this->speed=$speed;

}

function setColor($color){
    $this->color=$color;
}

function setGear($gear){
    $this->gear=$gear;
    
}







}

//$car = new Vehicles("auto"); 
//var_dump($car);


?>
