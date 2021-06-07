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

    public function getUserById($id)
    {
        return $this->db->first("SELECT * FROM `dathang` INNER JOIN `khachhang` ON `dathang`.`MSKH` = `khachhang`.`MSKH` WHERE SoDonDH = {$id}");
    }

    public function getAllProductsById($id)
    {
        return $this->db->row("SELECT * FROM `chitietdathang` INNER JOIN `hanghoa` ON `hanghoa`.`MSHH` = `chitietdathang`.`MSHH` WHERE `chitietdathang`.`SoDonDH` = {$id}");
    }

    public function getAddressById($id)
    {
        return $this->db->first("SELECT * FROM `dathang` INNER JOIN `diachikh` ON `dathang`.`MSKH` = `diachikh`.`MSKH` WHERE SoDonDH = {$id} GROUP BY `SoDonDH`");
    }
}
