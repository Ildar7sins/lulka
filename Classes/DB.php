<?php
namespace App\Classes;
/**
 * Class DB

 */
class DB
{
	private $dbh;
	private $className = 'stdClass';
	
	public function __construct()
	{
		$this->dbh = new \PDO('mysql:dbname=lulka;host=localhost', 'root', '10125117');

	}

	public function setClassName($class)
	{
		$this->className = $class;
	}
	public function query($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll(\PDO::FETCH_CLASS, $this->className);
	}	
	public function execute($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		return $sth->execute($params);
	}

	public function lustInsertId()
	{
		return $this->dbh->lastInsertId();
	}
}