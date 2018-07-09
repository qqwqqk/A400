<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 13:41
 */

namespace app\model;

use core\lib\partymodel;

class model extends partymodel{
    //数据表名称
    public $table = 'partymember';

    //查询所有数据
    public function all(){
        return $this->select($this->table,'*');

    }

    //添加指定数据
    public function addOne($data){
        p($data);
        return $this->insert($this->table,$data);
    }
}