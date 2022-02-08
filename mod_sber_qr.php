<?php

defined('_JEXEC') or die('Restricted area');
// Подключаем файлы стилей
$doc = JFactory::getDocument();
$doc ->addStyleSheet('/css/style.css')
$doc ->addScript('/js/show.js');

// Подключаем helper.php 
require_once __DIR__ . '/helper.php';

// Загрузка параметров модуля из абъекта $params
$nam_users = $params->get('num_users');
$moduleclass_sfx = $params->get('"moduleclass_sfx');

// Загрузка данных в объект из helper.php
$users = ModLatestUsers::getUsers($params);

// Подключение шаблона для вывода данных в HTML


?>
