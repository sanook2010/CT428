<?php

namespace application\models;

use application\core\Model;

class User extends Model
{

    protected $table = "NhanVien";
    protected $primary_key = "MSNV";

    public function login($SoDienThoai, $MatKhau)
    {
        $user = $this->getUserByPhone($SoDienThoai);
        if ($user != null) {
            if (password_verify($MatKhau, $user->MatKhau)) {
                return $user;
            }
        }
        return NULL;
    }

    public function getUserByPhone($phone)
    {
        return $this->firstWhere("SoDienThoai", $phone);
    }
    private function getPasswordHash($password)
    {
        password_hash($password, PASSWORD_DEFAULT);
    }
}
