<?php

namespace app\model;

use core\lib\partymodel;

class model extends partymodel{
    //数据表名称
    public $table = 'partymember';

    //查询所有数据
    public function all(){
        return $this->select($this->table,'*');

    }

    //查询指定数据
    public function find($columns, $where){
        return $this->select($this->table, $columns, $where);
    }

    //添加指定数据
    public function add($data){
        $where = array("AND" => ["student_id" => $data['student_id'], "id[>]" => 0]);
        $this->delete($this->table,$where);
        return $this->insert($this->table,$data);
    }

    //修改指定数据
    public function save($columns, $where){
        return $this->update($this->table, $columns, $where);
    }
}