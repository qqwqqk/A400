<?php


namespace app\ctrl;
use core\lib\partymodel;
use core\lib\base;
use app\model\model;

class adminCtrl extends \core\base
{
    public function admin(){
        $val = $_GET['id'];

        if($val){
            $model = new model();
            $columns = array('id','student_id', 'partyname','stream','data');
            $where = array( "AND"=>["stream[==]" => 2,"admin[==]" => 0],"ORDER" => ["data" => "DESC"],);
            $ret = $model->find( $columns, $where);
            $this->assign('info',$ret);
            $this->display('admin.html');
        } else {
            $this->display('login.html');
        }
    }
}