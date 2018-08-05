<?php

namespace app\ctrl;
use core\lib\partymodel;
use core\lib\base;
use app\model\model;
use function Couchbase\defaultDecoder;

class userCtrl extends \core\base
{
    //用户访问主界面
    public function user(){
        $data['id'] = $_GET['id'];

        $model = new model();
        $columns = array('apply', 'handle','fulfil');
        $where = array('student_id[==]' => $data['id']);
        $result = $model->find( $columns, $where)['0'];

        switch ($result['fulfil']){
            case '0':
                $data['info'] = "您需要进一步完善您的详细信息，以提交介绍信出具申请。";
                $data['btn'] = "完善个人信息";
                $data['href'] = "/user/revise";
                break;
            case '1':
                $data['info'] = "工作人员正在为您处理介绍信出具申请事项，请耐心等待；如果个人信息有变动，可以更新您的个人信息。";
                $data['btn'] = "更新个人信息";
                $data['href'] = "/user/revise";
                break;
            case '2':
                $data['info'] = "您的介绍信待领取，请前往宝山校区A400前三号窗口领取纸质介绍信；如个人信息有变请提交重新出具申请。";
                $data['btn'] = "重开介绍信";
                $data['href'] = "/user/revise";
                break;
            case '3':
                $data['info'] = "您的介绍信已领取，请尽快上交回执联部分；如介绍信过期请提交重新出具申请。";
                $data['btn'] = "重开介绍信";
                $data['href'] = "/user/revise";
                break;
            case '4':
                $data['info'] = "您的线下手续已经处理完毕，请耐心工作人员进行网上党组织关系转出事项。";
                $data['btn'] = "返回登录界面";
                $data['href'] = "/";
                break;
            case '5':
                $data['info'] = "您的相关手续已经处理完毕，网络平台党组织关系已转出，请耐心等待接收单位接收。";
                $data['btn'] = "返回登录界面";
                $data['href'] = "/";
                break;
            default:
                break;
        }

        $this->assign('info',$data);
        $this->display('user.html');
    }

    //修改操作响应
    public function revise(){
        $data['id'] = post('user_id');

        $model = new model();
        $columns= array('student_id', 'partyname','formal','superior','base','card_id','nationality','time_fare','telephone','college','field','handle');
        $where= array('student_id[==]' => $data['id']);
        $val = $model->find( $columns, $where)['0'];

        $val['date_y'] = intval(substr($val['time_fare'],0,4));
        $val['date_m'] = intval(substr($val['time_fare'],5,2));

        $val['sex'] = substr($val['card_id'],16,1) % 2;
        if($val['field']){$val['date_d'] = 30; if(!$val['base']){$val['base'] = "你处";}} else {$val['date_d'] = 90;}

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
        $val['current_date_d'] = intval($d2);

        //p($val);exit;

        $this->assign('info',$val);
        $this->display('save.html');
    }

    //保存操作响应
    public function save(){
        $val = post('user_id','0','int');

        $data['field'] = post('fields');
        $data['superior'] = post('superior');
        $data['partyname'] = post('partyname');
        $data['sex'] = post('sexes');
        $data['age'] = post('age');
        $data['nationality'] = post('nationalities');
        $data['formal'] = post('formals');
        $data['card_id'] = post('card_id');
        $data['base'] = post('base');
        $data['year'] = post('years');
        $data['month'] = post('months');
        $data['telephone'] = post('telephone');
        $data['college'] = post('colleges');
        $data['handle'] = post('handle') + 1;
        $data['time'] = $data['year'].'-'.$data['month'].'-1';

        $current = date('Y-m-d', time());
        list($y1,$m1,$d1)=explode('-',$current);
        $data['time_apply'] = $y1.'-'.$m1.'-'.$d1;

        $columns = array('partyname'=>$data['partyname'], 'telephone'=>$data['telephone'],'card_id'=>$data['card_id'],'nationality'=>$data['nationality'],'superior'=>$data['superior'],'base'=>$data['base'],'college'=>$data['college'],'time_fare'=>$data['time'],'time_apply'=>$data['time_apply'], 'field'=>$data['field'],'formal'=>$data['formal'],'apply'=>$data['handle'], 'fulfil'=>1);
        $where= array('student_id[==]' => intval($val));
        $model = new model();
        $ret = $model->save($columns,$where);

        //p($ret);exit;

        if($ret){
            $url = "/show/show/id/".$val;
            jump($url);
        }else{
            p("未知的错误！");
        }
    }
}