<?php
class Database
{
	private $_Domain, $_User, $_Password, $_Database;
	private $_Connection;
	
	public function __construct()
	{
		$this->_Domain = 'localhost';
		$this->_User = 'ITP4';
		$this->_Password = 'kanban';
		$this->_Database = 'kansimpleban';
		$this->_Connection = new MySQLi();
	}
	
	public function Connect()
	{
		$this->_Connection->real_connect($this->_Domain, $this->_User, $this->_Password, $this->_Database);
	}
	
	public function Close()
	{
		$this->_Connection->close();
	}
	
	public function Query($sql, $binding)
	{
		$argc = func_num_args();
		$argv = func_get_args();
		$retArray = array();
		$retArray[] = -1;

		//die Anzahl der zusätzlichen Parameter muss mit der Anzahl der Buchstaben im Binding uebereinstimmen
		if (($argc - 2) == strlen($binding))
		{
			$stmnt = $this->_Connection->prepare($sql);
			if ($stmnt)
			{
				array_shift($argv);
				
				if (strlen($binding) > 0)
				{
					call_user_func_array(array($stmnt, "bind_param"), $this->CreateRefArray($argv));
				}
				$stmnt->execute();
				$result = $stmnt->get_result();
				if ($result)
				{
					array_shift($retArray);
					while($row = $result->fetch_array(MYSQL_BOTH))
					{
						$retArray[] = $row;
					}
					$result->free();
				}
				else if ($stmnt->errno == 0)
				{
					$retArray[0] = $stmnt->affected_rows;
				}
				$stmnt->free_result();
			}
		}
		return $retArray;
	}
	
	private function CreateRefArray($values)
	{
		$refs = array();
		foreach($values as $key => $value)
		{
			$refs[$key] = &$values[$key];
		}
		return $refs;
	}
}

?>
