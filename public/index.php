<?php

declare(strict_types = 1);



include __DIR__ . '/../vendor/autoload.php';
include '../Count/Counter.php';


use Controllers\UserController;
use Count\Counter;



// $count1 = new Counter();

Counter::plusCount();
echo Counter::$count;











?>