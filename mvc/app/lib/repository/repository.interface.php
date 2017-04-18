<?php
/**
* 
*/
interface SourceRepository
{

	public function insert($table, $columns, $values);

	public function update($table, $set, $whereClause);

	public function delete($table, $whereClause);

	public function raw_query($sql);

	public function query($distinct, $table, $columns, $whereClause, $groupby, $having, $orderby, $limit);

	public function count($table, $whereClause);

	// function query($table, $columns, $selection, $selectionArgs, $groupby, $having, $orderby, $limit);

	// function query($table, $columns, $selection, $selectionArgs, $groupby, $having, $orderby);
}
