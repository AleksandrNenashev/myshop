<?php
/**
 * Модель категорий меню
 */

 /**
  * Создание подключения к БД
  * @return mysql/bool
  */

 function createConnection(){
    $link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        return false;
    }
    else{
        mysqli_set_charset($link, "utf8");
        return $link;
    }
 }
/**
 * Получение категорий товаров из БД
 *
 * @return array/bool
 */
 function getAllCategories(){
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $link = createConnection();
    $result = mysqli_query($link, $sql);
    $smartyArr = array();
    
    if($result === false){
        return false;
    }else{
        while($row = mysqli_fetch_array($result)){
            $recChildren = getChildren($row['id']);
            if($recChildren){
                $row['children'] = $recChildren;
            }
            $smartyArr[] = $row;
        }
    }
    return $smartyArr;
 }

 function getChildren($recID){
    $sql = 'SELECT * FROM categories WHERE parent_id = ' . $recID;
    $link = createConnection();
    $result = mysqli_query($link, $sql);
    return createSmartyRecArr($result);
    /*if($result === false){
        echo "Ошибка";
    }else{
        while($row = mysqli_fetch_array($result)){
            echo $row['name_ru'];
        }
    }*/
 }









