<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 19:08
 */
namespace core\lib;

class log{
    static $class;

    static public function init(){
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name,$file = 'log'){
        self::$class -> log($name,$file);
    }
}