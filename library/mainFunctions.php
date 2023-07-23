<?php
/**
 * Главные функции проекта
 *
 * @param $controllerName название контроллера
 * @param $actionName название функции обработки страницы
 * @return void
 */
function loadPage($controllerName, $actionName){
    include_once PATHPREFIX .$controllerName. PATHPOSTFIX;
    $function = $actionName . 'Action';
    $function();
}