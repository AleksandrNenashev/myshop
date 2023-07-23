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
 * Undocumented function
 *
 * @return array/bool
 */
 function getAllCategories(){
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $link = createConnection();

    $result = mysqli_query($link, $sql);

    if($result === false){
        return false;
    }else{
        while($row = mysqli_fetch_array($result)){
            //echo("<br>Уровень: " . $row['id'] . ";<br>Родитель: " . $row['parent_id'] . "<br> Имя категории: " . $row['name_ru']);
            $smartyArr[] = $row;
        }
    }
    return $smartyArr;
 }









