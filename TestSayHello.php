<?php
use TitipInformatika\Belajar\Custumer;
require_once __DIR__."/vendor/autoload.php";

$custumer = new Custumer("Rezza");
echo $custumer->sayHello("Riki").PHP_EOL;