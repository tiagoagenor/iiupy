<?php

class DB {
	
	/* Link Databse */
	private $db;

	/**
	 *  Carrega class de banco de dados
	 *  @Author Team Dev Harmony
	 *  @method __construct
	 *  @param  string $type      Tipo da Conexão (mPDO, mMySqli)
	 *          array  $hostname  Host do banco de dados
	 *          array  $username  Usário do Banco de Dados
	 *          array  $password  Password do Banco de Dados
	 *          array  $database  Nome do Banco de Dados
	 */
	public function __construct($type, $hostname, $username, $password, $database) {
		$class = 'Database\\' . $type;
		
		if ( ! class_exists($class)){
			exit('Class ' . $class . ' Not Found');
		}

		$this->db = new $class($hostname, $username, $password, $database);
	}

	/**
	 *  Define a query a ser executada
	 *  @Author Team Dev Harmony
	 *  @method query
	 *  @param  string $sql
	 *  @return Array or Object
	 */
	public function query($sql) {
		return $this->db->query($sql);
	}

	/**
	 *  Remove caracters Anti SQL-Injection
	 *  @Author Team Dev Harmony
	 *  @method escape
	 *  @param  string $value
	 *  @return String
	 */
	public function escape($value) {
		return $this->db->escape($value);
	}

	/**
	 *  Verifica a quantidade de linhas afetadas pela Query
	 *  @Author Team Dev Harmony
	 *  @method countAffected
	 *  @return int
	 */
	public function countAffected() {
		return $this->db->countAffected();
	}

	/**
	 *  Verifica o último ID
	 *  @Author Team Dev Harmony
	 *  @method getLastId
	 *  @return int
	 */
	public function getLastId() {
		return $this->db->getLastId();
	}
}