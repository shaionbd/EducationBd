<?php
error_reporting(0);
#start session

#start cookies

#include entities
require_once './entity/cleanURL.php';

#requires entites

#create object of class
$cleanURL = new cleanURL();


#call necessary function
$path = $cleanURL->get_path();

?>

