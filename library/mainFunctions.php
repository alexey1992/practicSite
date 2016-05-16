<?php
/**
 * основные функции
 */
 
 
 
 /**
  * формирование запрашеваемой страницы
  * 
  * 
  * @param string $controllerName - название контролера
  * @param string $actionName - название  функции обработки страницы
  */
	
function loadPage($smarty,$controllerName,$actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix ;
        
   $function = $actionName .  'Action';
   $function($smarty); 
    
} 

/**
 * Загрузка шаблона
 * 
 * @param object $smarty обьект шаблонизатора
 * @param string $templateName название файла шаблона
 */
 function loadTemplate($smarty, $templateName)
 {
    $smarty->display($templateName . TemplatePostfix);
 }
 
 /**
  * функия отладки.Останавливаем работу программы выводя значение
  * переменной $value
  * 
  * @param variant $value переменная для вывода ее на страницу
  * 
  */
 function d($value = null,$die = 1){
    echo 'Debug:<br /> <pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
        
    
 }
 
 
 
 
 
 
 
 
 
 
 
 