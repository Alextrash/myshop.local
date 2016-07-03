<?php
/**
 * Основные функции контроллера страницы
 */

/**
 * фунция формирования запрашиваемой страницы
 *
 * @param $controllerName название контроллера
 * @param string $actionName функция описания страницы
 */
function loadPage ($smarty, $controllerName, $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param $smarty
 * @param $templateName
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Фунция тестирования переменных
 * @param null $value переменная для исследования (null по умолчанию)
 * @param int $die при 0 - продолжение работы, при 1 - остановка выполнения кода
 */
function d($value = null, $die = 1){
    echo('Debug: <br /><pre>');
    print_r($value);
    echo('</pre>');

    if($die) die;
}