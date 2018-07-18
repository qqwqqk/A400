<?php

//测试的输出格式
function p($var)
{
    if(is_bool($var)){
        var_dump($var);
    } else if(is_null($var)){
        var_dump(NULL);
    }else{
        echo "<pre style = 'position:relative;z-index:1000;padding:10px;
        border-radius:5px;background:#F5f5f5;border:1px solid #aaa;font-size:14px;
        line-height:18px;opactiy:0.9;'>" . print_r($var, true) . "</pre>";
    }
}

//POST接收
function post($name,$default=false,$fitt=false)
{
    if(isset($_POST[$name])){
        if($fitt){
            switch($fitt){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    } else {
                        return $default;
                    }
                    break;
                default: ;
            }
        } else {
            return $_POST[$name];
        }
    } else {
        return $default;
    }
}

//页面跳转
function jump($url){
    header('location:'.$url);
    exit();
}
