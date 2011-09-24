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

	public function __construct($type){
		$this->type=$type;
}

// definicija metoda klase, koje su funkcije objekta?

/* Setter method za paljenje kola
**engineStatus : On ili Off
**
**/


	public function setEnginestatus($engineStatus){
   		$this->engineStatus = $engineStatus;

	}

	public function setSpeed($speed){
    		$this->speed = $speed;

	}

	public function setColor($color){
    		$this->color = $color;
	}

	public function setGear($gear){
    		$this->gear = $gear;
    
	}

	public function setType($type){
    		$this->type = $type;
    
	}
	
	public function setHorsepower($horsepower){
		$this->horsepower = $horsepower;

	}

/*getter metodhs
**
**
*/


	

	public function getSpeed(){
    		return $this->speed;

	}

	public function getColor(){
    		return $this->color;
	}

	public function getGear(){
    		return $this->gear;
    
	}

	public function getType(){
    		return $this->type;
    
	}
	
	public function getHorsepower(){
		return $this->horsepower;

	}
	
	public function getEnginestatus(){
		return $this->engineStatus;

	}






}



?>
