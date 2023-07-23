<?php
/**
 * Контроллер галавной страницы
 */
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Это главная страница');
    loadTemplate($smarty, 'index');
}