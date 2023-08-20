<?php

function getLastProducts($limit = null){
    $sql = 'SELECT * FROM products ORDER BY id DESC'; // сортировка в обратном порядке
    $link = createConnection();

    if($limit){
        $sql = $sql . ' LIMIT ' . $limit;
    }
    $result = mysqli_query($link, $sql);

    return createSmartyRecArr($result);
}

function getProductsByCategory($id){
    //защищаемся от SQL-инъекций, приводит любое значение к integer
    $itemId = intval($id);
    $sql = 'SELECT * FROM products WHERE category_id = ' . $itemId;
    $link = createConnection();
    $result = mysqli_query($link, $sql);
    return createSmartyRecArr($result);
}

function getProductById($itemId){
    //защищаемся от SQL-инъекций, приводит любое значение к integer
    $itemId = intval($id);
    $sql = 'SELECT * FROM products WHERE id = ' . $itemId;
    $link = createConnection();
    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($result);
}