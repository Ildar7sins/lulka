<?php
namespace App\Classes;

use App\Classes\BD;

/**
* Abstract class for extends
*/

abstract class AbstractClass
{
	protected static $table;
	protected $data = [];
	protected $id;

		public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

		public function __get($name)
	{
		return $this->data[$name];
	}

		public function __isset($k)
		{
			return isset($this->data[$k]);
		}

		static public function getAll()
	{
		$class = get_called_class();
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table;
		$db->setClassName($class);
		return $db->query($sql);

	}

		static public function getOne($id)
	{
		$class = get_called_class();
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id';
		$db->setClassName($class);
		return $db->query($sql, [':id' => $id])[0];
	}



		static public function getByColumnName($column, $value)
	{
		$db = new DB;
		$db->setClassName(get_called_class());
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' = :value';
		
		$res = $db->query
		($sql,
		[':value' => $value]);

		//if(empty($res))
		//{
		//	throw new Exception("Error Processing Request", 1);
		//}
		
		return $res[0];
		
	}

	public function save($searchColumn = '', $value = '')
	{
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE `' . $searchColumn . '` = ' . $value;
		if(!$this->getOne($value) == null )
		{
			$this->update($searchColumn, $value);
		}else{
			$this->insert();
		}
	}
	
	protected function insert()
	{
		$cols = array_keys($this->data);
		$ins = [];
		$data = [];
		foreach ($cols as $col) {
			$data[':' . $col] = $this->data[$col];
 		}
		$sql = '
		 	INSERT INTO ' . static::$table . '
		 	(' . implode(', ', $cols) . ') 
		 	VALUES 
		 	(' . implode(', ', array_keys($data)) . ')
		 '; 
		 $db = new DB;
		 $db->execute($sql, $data);
		 $this->id = $db->lustInsertId();
	}

	protected function update($searchColumn, $value)
	{
		$cols = array_keys($this->data);
		$i = 1;
		
		foreach ($cols as $col) {
			$data[':' . $col] = $this->data[$col];
			if (count($cols) > $i) {
				$str .= '`' . $col . '` = :' . $col . ', ';
			}else{
				$str .= '`' . $col . '` = :' . $col . '';
			}
			$i++;
 		}
 		

 		$sql = 'UPDATE ' . static::$table . ' SET ' . $str . ' WHERE ' . $searchColumn . ' = ' . $value;
 		$db = new DB;
 		$db->execute($sql, $data);
	}

	public function delete()
	{
		$cols = array_keys($this->data);
		
		foreach ($cols as $col) {
			$data[':' . $col] = $this->data[$col];
			$sql = 'DELETE FROM ' . static::$table . ' WHERE `' . $col . '` = :' . $col;
 		}

		$db = new DB;
 		$db->execute($sql, $data);
	}
}