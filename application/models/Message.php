<?php

namespace application\models;

use application\core\Model;

class Message extends Model
{

    protected $table = 'messages';
    public function insert($data)
    {
        $params = [
            'content' => $data['content'],
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s")
        ];
        $result = $this->db->query("INSERT INTO {$this->table} (content, created_at, updated_at) VALUES ( :content, :created_at, :updated_at)", $params);
        return $this->db->lastInsertId();
    }

    public function get()
    {
        $result = $this->db->row("SELECT * FROM {$this->table} WHERE `reply` IS NOT NULL ORDER BY `updated_at` DESC");
        return $result;
    }
}
