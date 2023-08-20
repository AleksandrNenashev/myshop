<?php

include_once "../models/ProductModel.php";
include_once "../models/CategoriesModel.php";

function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if($itemId == null) exit();

    $allCategories = getAllCategories();
    //получаем данные продукта
    $recProduct = getProductById($itemId);
    $recCategory = getAllCategoriesById($recProduct['category_id']);

    $smarty->assign('pageTitle', $recProduct['name_ru']);
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('recCategory', $recCategory);
    $smarty->assign('recProduct', $recProduct);

    loadTemplate($smarty, 'product');
}