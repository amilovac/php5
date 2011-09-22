<?php

class Vehicles {


/*class Vehicles
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
**
**
*/

function __construct($type){
	$this->type=$type;
}

// definicija metoda klase, koje su funkcije objekta?

/* Setter method za paljenje kola
**engineStatus : On ili Off
**
**/


	function setEngineStatus($engineStatus){
   		$this->engineStatus = $engineStatus;

	}

	function setSpeed($speed){
    		$this->speed = $speed;

	}

	function setColor($color){
    		$this->color = $color;
	}

	function setGear($gear){
    		$this->gear = $gear;
    
	}

	function setType($type){
    		$this->type = $type;
    
	}
	
	function setHorsepower($horsepower){
		$this->horsepower = $horsepower;

	}

/*getter metodhs
**
**
*/


	function getEngineStatus(){
   		return $this->engineStatus;

	}

	function getSpeed(){
    		return $this->speed;

	}

	function getColor(){
    		return $this->color;
	}

	function getGear(){
    		return $this->gear;
    
	}

	function getType(){
    		return $this->type;
    
	}
	
	function getHorsepower(){
		return $this->horsepower;

	}






}



?>
