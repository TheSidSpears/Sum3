<?php

include_once "vendor/autoload.php";

$sum = new \SidSpears\Sum();
echo $sum->sum(25, 75);

$sum = new \Svichka\Sum();
echo $sum->sum(25, 75);