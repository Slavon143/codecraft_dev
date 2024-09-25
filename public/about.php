<?php

require '../vendor/autoload.php';

use App\Controllers\MainController;

$controller = new MainController();
$controller->about();
