<?php
/**
 * Контроллер галавной страницы
 */
include_once '../models/CategoriesModel.php';
function indexAction($smarty){
    $allCategories = getAllCategories();
    $smarty->assign('pageTitle', 'Главная страница');
    $smarty->assign('allCategories', $allCategories);
    loadTemplate($smarty, 'index');
}