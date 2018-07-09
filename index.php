<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:23
 */

date_default_timezone_set('PRC');
define('BASE',realpath(' /'));
define('CORE',BASE.'/core');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();

    ini_set('display_error','on');
} else{
    ini_set('display_error','off');
}

//dump($_SERVER);exit();

include CORE.'/common/function.php';

include CORE.'/base.php';

spl_autoload_register('\core\base::load');

\core\base::run();