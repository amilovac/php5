<?php
include 'class.vehicles.php';
$kola = new Vehicles('porodicni auto');

//var_dump($kola);

echo $kola->getType();
$kola->setType('kamion');
echo $kola->getType();
$kola->setEnginestatus('On');
echo $kola->getEnginestatus();

?>
