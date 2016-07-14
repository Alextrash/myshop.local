<?php
session_start();
if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php'; //инициализация настроек
include_once '../config/db.php';     // инициализация баз данных
include_once '../library/mainFunctions.php'; //основные фцнкции

//опредеяем, с каким контролером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//опредеяем, с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $mysqli, $controllerName, $actionName);

