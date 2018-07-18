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
        $this->display('login.html');
    }

    //新用户注册界面
    public function registration(){
        $this->display('registration.html');
    }

    //登录操作响应
    public function login(){
        $val['admin'] = post(admin);
        $val['student_id'] = post(student_id);
        $val['password'] = post(password);

        $model = new model();
        $columns = array('admin', 'passwords');
        $where = array('student_id[==]' => $val['student_id']);
        $result = $model->find( $columns, $where)['0'];

        $data['id']=$val['student_id'];

        if($result){
            if($val['admin']){
                if($result['admin']==1 && $result['passwords']==$val['password']){
                    $url = "/admin/admin/id/".$val['student_id'];
                    jump($url);
                } else {
                    $data['error']='用户名或密码错误!';
                    $this->assign('data',$data);
                    $this->display('login.html');
                }
            } else {
                if($result['admin']==0 && $result['passwords']==$val['password']){
                    $url = "/user/user/id/".$val['student_id'];
                    jump($url);
                } else {
                    $data['error']='用户名或密码错误!';
                    $this->assign('data',$data);
                    $this->display('login.html');
                }
            }
        }else{
            $data['error']='用户名或密码错误!';
            $this->assign('data',$data);
            $this->display('login.html');
        }
    }

    public function rlogin(){
        $val['student_id'] = post(student_id);
        $val['password'] = post(password);
        $val['password2'] = post(password);

        if($val['password']==$val['password2']){
            $model = new model();
            $columns= array("student_id"=>$val['student_id'], "passwords"=>$val['password']);
            $model->add($columns);

            $url = "/user/user/id/".$val['student_id'];
            jump($url);
        } else {
            $data['student_id']=$val['student_id'];
            $data['error']='两次输入的密码不一致!';
            $this->assign('data',$data);
            $this->display('login.html');
        }
    }

    //展示操作响应
    public function show(){
        p($_GET);
        exit;
        $this->display('show.html');
    }
}