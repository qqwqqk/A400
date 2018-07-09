<?php

namespace core\lib;
use core\lib\conf;

class partymodel extends \Medoo\Medoo
{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct($option);
    }

}