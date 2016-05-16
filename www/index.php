<?php

include_once('../config/config.php'); // Инициализация настроек
include_once('..//library/mainFunctions.php');// Основные функции


// Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
        //echo 'Подключаемый php файл(Контроллер) = ' . $controllerName . '</br>';


//Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';
       // echo 'Функция формирующая страницу (Экшн) = ' . $actionName  . '</br>';
        
        
/**
 * //Подключаем контроллер
 * include_once '../controllers/' . $controllerName . 'Controller.php'; 


 * //формируем название функции
 * $function = $actionName . 'Action';
 * echo 'Полное название вызываемой функции = ' . $function . '</br>';

 * $function();  
 */

//загрузка страници
loadPage($smarty,$controllerName,$actionName);  






?>