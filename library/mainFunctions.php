<?php
/**
 * Главные функции проекта
 *
 * @param $controllerName название контроллера
 * @param $actionName название функции обработки страницы
 * @return void
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PATHPREFIX .$controllerName. PATHPOSTFIX;
    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TMPLTPOSTFIX);
}