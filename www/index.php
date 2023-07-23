<?php

include_once '../config/config.php';
include_once '../library/mainFunctions.php';

$controllerName = isset($GET['controller']) ? ucfirst($_GET['controller']):'Index';
$actionName = isset($_GET['action']) ? $_GET['action']:'Index';

loadPage($smarty, $controllerName, $actionName);


