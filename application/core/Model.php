<?php

namespace application\core;

use application\lib\Db;
use application\core\View;

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
		$valueString = null;
		$valueString = null;
		foreach($data as $key => $value)
		{
			$valueString .= " :{$key},";
		}
		$valueString = rtrim($valueString, ", ");

		$this->db->query("INSERT INTO `{$this->table}` ({$columnString}) VALUES ({$valueString})", $data);
		return $this->db->lastInsertId();
	}

	public function findOrFail($id)
	{
		$result = $this->db->first("SELECT * FROM `$this->table` WHERE `{$this->primary_key}` = {$id}");
		if ($result != null) {
			return $result;
		}
		return View::errorCode(404);
	}

	public function update($params, $id)
	{
		$setStr = "";


		$params[$this->primary_key] = $id;

		foreach ($params as $key => $value) {
			$setStr .= "`{$key}` = :{$key},";
		}

		$setStr = rtrim($setStr, ",");
		$this->db->query("UPDATE `$this->table` SET $setStr WHERE `{$this->primary_key}` = :{$this->primary_key}", $params);
	}

	public function destroy($id)
	{
		$params[$this->primary_key] = $id;
		$this->db->query("DELETE FROM `{$this->table}` WHERE `{$this->primary_key}` = :{$this->primary_key}", $params);
	}

}
