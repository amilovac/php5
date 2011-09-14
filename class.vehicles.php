<?php

class Vehicles {


/***class Vehicles*******
*author Aleksandar Milovac, aleksandar.milovac@gmail.com
*released under GPL v2 licence
* defines Vehicle object
*/

protected $speed;
protected $color;
protected $gear;
protected $engineStatus;
protected $type;
protected $horsePower;

/*konstruktor koji setuje tip vozila:kola, kamion....
*
*
*/
function __construct($type){
	$this->type=$type;


}




}

$car = new Vehicles("auto"); 
var_dump($car);


?>
