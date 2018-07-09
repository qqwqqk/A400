<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/22
 * Time: 15:36
 */

namespace app\ctrl;
use core\lib\partymodel;
use core\lib\base;
use app\model\model;

class indexCtrl extends \core\base
{
    //展示主页面
    public function index(){
        $model = new model();
        $data = $model->all();
        $this->assign('data',$data);
        $this->display('index.html');
    }

    //添加操作及其展示
    public function add(){
        $this->display('add.html');
    }

    //保存操作
    public function save(){
        $data['student_id'] = post('student_id','0','int');
        $data['partyname'] = post('partyname');
        $model = new testmodel();
        $ret = $model->addOne($data);
        if($ret){
            jump("/index");
        } else {
            p('error');
        }
    }

}