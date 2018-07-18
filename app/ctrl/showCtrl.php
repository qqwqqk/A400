<?php


namespace app\ctrl;
use core\lib\partymodel;
use core\lib\base;
use app\model\model;

class showCtrl extends \core\base
{
    //展示操作响应
    public function show()
    {
        $id = $_GET['id'];

        $model = new model();
        $columns = array('student_id', 'partyname','formal','superior','base','card_id','nationality','time_fare','telephone','college','field');
        $where = array('student_id[==]' => $id);
        $val = $model->find( $columns, $where)['0'];

        if(!$val['base']){$val['base'] = "你处";}

        if($val['formal']){
            $val['formals']='正式';
        } else {
            $val['formals']='预备';
        }

        if(substr($val['card_id'],16,1) % 2){
            $val['sex']='男';
        } else {
            $val['sex']='女';
        }

        $val['date_y'] = intval(substr($val['time_fare'],0,4));
        $val['date_m'] = intval(substr($val['time_fare'],5,2));

        if($val['field']){
            $val['date_d'] = 30;
        } else {
            $val['date_d'] = 90;
        }

        $date_begin = substr($val['card_id'],6,4).'-'.substr($val['card_id'],10,2).'-'.substr($val['card_id'],12,2);
        $date_end = date('Y-m-d', time());

        list($y1,$m1,$d1)=explode('-',$date_begin);
        list($y2,$m2,$d2)=explode('-',$date_end);
        $y=$y2-$y1;$m=$m2-$m1;$d=$d2-$d1;
        if($d<0){$d+=(int)date('t',strtotime("-1 month $date_end"));$m--;}
        if($m<0){$m+=12;$y--;}
        $date_old = $y.'-'.$m.'-'.$d;
        $val['age']= substr($date_old,0,2);

        $val['current_date_y'] = intval($y2);
        $val['current_date_m'] = intval($m2);
        $val['current_date_m2'] = $m2 + 1;
        $val['current_date_d'] = intval($d2);

        $this->assign('info',$val);
        $this->display('show.html');
    }
}