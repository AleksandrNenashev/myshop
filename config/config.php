<?php
/**
 * Файл настроек проекта
 */
const PATHPREFIX = '../controllers/';
const PATHPOSTFIX = 'Controller.php';

const DB_HOST = 'localhost';
const DB_NAME = 'myshop';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

//Колличество самых последних товаров
const LASTPRODUCTS = 12;

//Папка шаблона
$templateFolder = 'default';

//Пути к шаблонам
define('TMPLTPREFIX', "../views/{$templateFolder}/");
const TMPLTPOSTFIX = '.tpl';

//Путь у шаблонам в www
define('TMPLTWEBPATH', "/templates/{$templateFolder}/");

//Подключение Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

//Конфигурация Smarty 
$smarty->setTemplateDir(TMPLTPREFIX);
$smarty->setCompileDir('../tmp/smarty/template_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TMPLTWEBPATH);
