<?php

//FRONT CONTROLLER

//1. Общие настройки

//Вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
//2. Подключение файлов системы
define('ROOT', dirname(__FILE__) . '/src');
require(ROOT.'/components/router.php');
require_once(ROOT . '/components/DataBaseConnection.php');
require_once 'autoload.php';
//3.Установка соединений с БД

//4.ВЫзов router

$router = new Router();
$router->run();
?>