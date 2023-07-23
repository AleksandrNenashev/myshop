<?php
/**
 * Файл настроек проекта
 */
const PATHPREFIX = '../controllers/';
const PATHPOSTFIX = 'Controller.php';

$templateFolder = 'default';

define('TMPLTPREFIX', "../views/{$templateFolder}/");
const TMPLTPOSTFIX = '.tpl';

define('TMPLWEBPATH', "/templaates/{$templateFolder}/");

require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TMPLTPREFIX);
$smarty->setCompileDir('../tmp/smarty/template_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TMPLWEBPATH);
