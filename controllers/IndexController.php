<?php
/**
 * контроллер главной страницы
 */
 
function testAction(){
    echo 'IndexController.php > testAction';
}



/**
 * формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатора
 */
 function indexAction($smarty){
    
    $smarty->assign('pageTitle','Главная страница сайта');
    
   loadTemplate($smarty,'header');
   loadTemplate($smarty,'index');
   loadTemplate($smarty,'footer');
 }


	
?>