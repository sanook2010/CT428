<?php

namespace application\models;

use application\core\Model;

class Order extends Model
{

    protected $table = "dathang";
    protected $primary_key = "SoDonDH";
    public function getOrder()
    {
        return $this->db->row("SELECT * FROM `dathang` INNER JOIN `khachhang` ON `dathang`.`MSKH` = `khachhang`.`MSKH` ORDER BY `MSNV`, `SoDonDH`");
    }
}
