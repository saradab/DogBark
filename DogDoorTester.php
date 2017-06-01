<?php

require_once dirname(__FILE__).'/DogDoor.php';
require_once dirname(__FILE__).'/Remote.php';
require_once dirname(__FILE__).'/BarkRecognizer.php';
require_once dirname(__FILE__).'/Bark.php';


$door = new DogDoor;
$door->setAllowedBarks(new Bark('hauu'));
$door->setAllowedBarks(new Bark('Hrauu'));
$door->setAllowedBarks(new Bark('hauhauu'));
$door->setAllowedBarks(new Bark('hauuuuu'));

$recognizer = new BarkRecognizer($door);
$remote = new Remote($door);

echo 'Azor szczeka by wyjsc na spacer...';
//symulujemy usłyszenie szczekania przez system
$recognizer->recognize(new Bark ('hauu'));
//$remote->pressButton();

echo "\n" . 'Azor wyszedł na spacer...';
//$remote->pressButton();

echo "\n" . 'Azor załatwił co trzeba...';
//$remote->pressButton();

//symulujemy usłyszenie szczekania obcego psa
$otherBark = new Bark('hiau');
echo 'Mały pies zaczął szczekać.';
$recognizer->recognize($otherBark);

echo 'Azor zaczyna szczekać...';
//symulujemy usłyszenie szczekania Brusa przez system ponownie
$recognizer->recognize(new Bark('hauuuuu'));

echo "\n" . 'Azor jest w domu...';
