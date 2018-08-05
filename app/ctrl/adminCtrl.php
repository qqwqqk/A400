<?php


namespace app\ctrl;
use core\lib\partymodel;
use core\lib\base;
use app\model\model;

class adminCtrl extends \core\base
{
    public function admin(){
        $val = $_GET['id'];
        if($val==null){$val=post(id);}
        $data['student_id'] = post(student_id);
        $data['fulfil'] = post(fulfil);
        if($data['fulfil'] == null){$data['fulfil'] = 1;}

        $checked = new model();
        $columns = array('admin', 'passwords');
        $where = array('student_id[==]' => $val);
        $result = $checked->find( $columns, $where)['0'];
        //p($result['admin']);

        if($result['admin']){
            //p($data);
            if($data['student_id'] != null){$where = array( "AND"=>["student_id[==]" => $data['student_id'],"admin[==]" => 0 ],"ORDER" => ["time_apply" => "DESC"],);}
            elseif($data['fulfil'] == null) {$where = array("AND"=>["admin[==]" => 0,"fulfil[==]" => 1 ],"ORDER" => ["time_apply" => "DESC"],);}
            else{$where = array("AND"=>["admin[==]" => 0,"fulfil[==]" => $data['fulfil'] ],"ORDER" => ["time_apply" => "DESC"],);}
            //p($where);exit;
            $model = new model();
            $columns = array('id','student_id', 'partyname','time_apply','apply', 'handle', 'fulfil');
            $ret = $model->find( $columns, $where);

            $admin['id'] = $val;
            if($data['fulfil']==null){$admin['fulfil'] = $data['fulfil'];}else{$admin['fulfil'] = $ret[0]['fulfil'];}
            //p($ret);exit;

            $this->assign('info',$ret);
            $this->assign('admin',$admin);
            $this->display('admin.html');
        } else {
            $this->display('login.html');
        }
    }

    public function handle(){
        $val = $_GET['id'];
        $stream = $_GET['fulfil'];

        $current = date('Y-m-d', time());
        list($y1,$m1,$d1)=explode('-',$current);
        $data['time'] = $y1.'-'.$m1.'-'.$d1;

        switch ($stream){
            case '1':
                $columns = array('time_out' => $data['time'], 'fulfil' => 2 );
                break;
            case '2':
                $columns = array('time_out' => $data['time'], 'fulfil' => 3 );
                break;
            case '3':
                $columns = array('time_out' => $data['time'], 'fulfil' => 4 );
                break;
            case '4':
                $columns = array('time_out' => $data['time'], 'fulfil' => 5 );
                break;
            default:
                $columns = array('time_out' => $data['time'], 'fulfil' => 1 );
                break;
        }
        $where= array('student_id[==]' => intval($val));
        $model = new model();
        $ret = $model->save($columns,$where);

        if($ret){
            echo "<script language=\"JavaScript\"> alert(\"办理成功\"); history.back();</script>";
        } else{
            echo "<script language=\"JavaScript\"> alert(\"处理异常\"); history.back();</script>";
        }
        exit;
    }

    public function passwd(){
        $val = $_GET['id'];
        if($val==null){$val=post(id);}
        $data['student_id'] = post(student_id);
        $data['password'] = post(password);

        $checked = new model();
        $columns = array('admin', 'passwords');
        $where = array('student_id[==]' => $val);
        $result = $checked->find( $columns, $where)['0'];
        //p($data);exit;

        if($result['admin']){
            if($data['password'] != null){
                $columns = array('passwords' => $data['password']);
                $where= array('student_id[==]' => $data['student_id']);
                $model = new model();
                $ret = $model->save($columns,$where);

                if($ret){
                    echo "<script language=\"JavaScript\"> alert(\"修改成功\"); history.back();</script>";
                } else{
                    echo "<script language=\"JavaScript\"> alert(\"处理异常\"); history.back();</script>";
                }
                exit;
            }

            $this->assign('admin',$val);
            $this->display('passwd.html');
        }else {
            $this->display('login.html');
        }
    }
}