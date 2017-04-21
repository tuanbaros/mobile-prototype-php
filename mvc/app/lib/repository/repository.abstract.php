<?php
/**
* 
*/
require_once 'repository.interface.php';

abstract class BaseRepository implements SourceRepository
{
	protected $db;

	public function __construct()
	{
		require_once '../app/lib/database.php';
		$this->db = Database::getInstance();
	}

	public function insert($table, $columns, $values) {
		$sql = "insert into {$table} ({$columns}) values ({$values})";
		$this->db->query($sql);
		return $this->db->lastInsertId();
	}

	public function update($table, $set, $whereClause) {
		$sql = "update {$table} set {$set} where {$whereClause}";
		$result = $this->db->query($sql);
		return $result->rowCount();
	}

	public function delete($table, $whereClause) {
		$sql = "delete from {$table} where {$whereClause}";
		$result = $this->db->query($sql);
		return $result->rowCount();
	}

	public function raw_query($sql) {
		return $this->db->query($sql);
	}

	public function query($distinct, $table, $columns, $whereClause, $groupby, $having, $orderby, $limit) {
		// $sql = "select :distinct :columns";
	}

	public function count($table, $whereClause) {
		$sql = "select count(*) from {$table}";
		if (isset($whereClause)) {
			$sql = $sql . " where {$whereClause}";
		}
		$req = $this->db->query($sql);
		return $req->fetchColumn();
	}
}
