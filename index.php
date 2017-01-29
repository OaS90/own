<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
session_start();


//config
include_once './config.php';
include_once './libs/default.php';
include_once './libs/class_Mail.php';
include_once './variables.php';


//router
$link = mysqli_connect(Core::$DB_LOCAL,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME) or die(mysqli_error($link));
include './modules/'.$_GET['module'].'/'.$_GET['page'].'.php';
include './skins/'.Core::$SKIN.'/index.tpl';


