<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductModel.php';

function indexAction($smarty){
    $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    $allCategories = getAllCategories();
    if(count($itemIds) !==0){
        $recProduct = getProductsFromArray($itemIds);
    }else{
        $recProduct = null;
    }

    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('allCategories', $allCategories);
    $smarty->assign('recProduct', $recProduct);

    loadTemplate($smarty, 'cart');
}

