<?php

function loadPage($controllerName, $actionName){
    include_once PATHPREFIX .$controllerName. PATHPOSTFIX;
    $function = $actionName . 'Action';
    $function();
}