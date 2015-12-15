<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 15/11/2
 * Time: 上午11:17
 */
//后端用的路径
define("RAIN_FRAMEWORK","RAIN");
define("BASE_PATH",dirname(__FILE__));//后端用的根路径
define("VIEW_PATH",BASE_PATH.'/'.'view');

//后端模板用的两个公共变量，这里做记录，后边处理参数赋值
$GLOBALS['CONTRLLER_NAME'] = "";
$GLOBALS['FUNCTION_NAME'] = "";

//前端用的路径
define("WEBROOT",'/adminFramework/');//如果项目在网站根目录下，这里配置为"/"
define("WEB_VIEW_PATH",WEBROOT.'view');//用于载入CSS等文件
define("WEB_TEMPLATE_PATH",WEBROOT.'view/template');//这个载入模板会经常用，上线时，此路径应禁止浏览器访问



require "./conf/conf.inc.php";
require "./include/RainFramwork.class.php";
$framework = new RainFramwork();