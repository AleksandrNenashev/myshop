<?php

$controllerName = isset($GET['controller']) ? ucfirst($_GET['controller']):'Index';
$actionName = isset($_GET['action']) ? $_GET['action']:'Index';