<?php

#open DEBUG
define('IN_DEBUG',TRUE);

IN_DEBUG ? error_reporting(E_ALL ^ E_NOTICE) : error_reporting(0);

#sector set
$environ=ini_get('yaf.environ');    //默认是product

define('APPLICATION_PATH', dirname(__FILE__));
$app = new Yaf_Application(APPLICATION_PATH."/conf/application.{$environ}.ini");
$app->bootstrap()->run();


/*
default Entrance file 

define('APPLICATION_PATH', dirname(__FILE__));
$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();*/
?>
