<?php

namespace application\models;

use application\core\Model;

class Order extends Model
{

    protected $table = "dathang";
    protected $primary_key = "SoDonDH";

    public function getDetail()
    {
        // $this->db->query("SELE")
    }
}
