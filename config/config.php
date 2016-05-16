<?php
/**
 * файл настроек
 */
 
 
//Константы для обращения к контроллерам
define('PathPrefix','../controllers/');
define('PathPostfix','Controller.php');




//> Используемый шаблон 
$tamplate =  'default';

//пути к файлам шаблонов (*.tpl)
define('TemplatePrefix',"../views/default/{$template}/");
define('TemplatePostfix','.tpl');

//Пути к файлам  шаблонов в вебпространстве
define('TemplateWebPath',"/templates/{$template}/");
//<

//>Инициализация шаблонизатора Smarty
// put full path to Smarty . class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();


$smarty-> setTemplateDir(TemplatePrefix);
$smarty-> setCompileDir('../tmp/smarty/templates_c'); 
$smarty-> setCacheDir('../tmp/smarty/cache'); 
$smarty-> setConfigDir('..//libary/Smarty/configs');
 
$smarty->assign('teplateWebPath',TemplateWebPath); 
//<

?>








