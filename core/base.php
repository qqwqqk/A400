<?php
/**
 * @param object $field
 * @return array|string
 * @throws Exception
 */
namespace core;
use vendor;

class base{
    public static $classMap = array();
    public $assign;

    static public function run(){
        \core\lib\log::init();
        \core\lib\log::log($_SERVER,'server');
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = realpath(' /') .'app/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\app\\ctrl\\'.$ctrlClass.'Ctrl';

        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
            \core\lib\log::log('      ctrl:'.$route->ctrl.'      '.'action:'.$action);
        }
        else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class){
        if(isset($classMap[$class])){
            return true;
        }
        else{
            $class = str_replace('\\','/',$class);
            $file = realpath(' /') . $class . '.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }
            else{
                return false;
            }
        }

    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $name = $file;

        $file = realpath(' /') .'app/views/'.$file;
        if(is_file($file)){
            $loader = new \Twig_Loader_Filesystem(realpath(' /') .'app/views/');
            $twig = new \Twig_Environment($loader, array(
                'cache' => realpath(' /').'log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate($name);
            $template->display($this->assign? $this->assign:array());
        }
        else{
            p('worry');
        }
    }

}