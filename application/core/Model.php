<?php

namespace application\core;

use application\lib\Db;

abstract class Model
{

	public $db;
	protected $table;
	protected $primary_key;
	public function __construct()
	{
		$this->db = new Db;
	}
	public function all()
	{
		return $this->db->row("SELECT * FROM `{$this->table}`");
	}

	public function find($value)
	{
		return $this->db->first("SELECT * FROM `{$this->table}` WHERE `{$this->primary_key}` = {$value} LIMIT 1");
	}

	public function where($key, $value)
	{
		return $this->db->row("SELECT * FROM `{$this->table}` WHERE `{$key}` = {$value}");
	}
	public function firstWhere($key, $value)
	{
		return $this->db->first("SELECT * FROM `{$this->table}` WHERE `{$key}` = {$value}");
	}

	public function insert($data)
	{

		$columnString = implode(', ', array_keys($data));
		$valueString = ":" . implode(', :', array_flip($data));
		return $this->db->query("INSERT INTO `{$this->table}` ({$columnString}) VALUES ({$valueString})", $data);
		// $lastInsertId = $this->db->lastInsertId();
		// return $lastInsertId;
	}
}
