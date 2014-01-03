<?php
namespace Database;

class mPDO {
    private $pdo = null;
    private $statement = null;
    private $as_array = true;
	
	/**
	 *  Incializa a conexão com o PDO
	 *  @method __construct
	 *  @param  string $hostname Host do Banco de Dados
	 *  @param  string $username Usuário do Banco de Dados
	 *  @param  string $password Senha do Banco de Dados
	 *  @param  string $database Nome do Banco de Dados
	 *  @param  array  $port     Porta do Host do Banco de Dados
	 *  @return object  
	 */
    public function __construct($hostname, $username, $password, $database, $port = "3306") {

        try{
            $this->pdo = new PDO("mysql:host=".$hostname.";port=".$port.";dbname=".$database, $username, $password, array(PDO::ATTR_PERSISTENT => true));
        }catch(PDOException $e){
            exit('Error: Could not make a database link ( '. $e->getMessage() . '). Error Code : ' . $e->getCode() . ' <br />');    
        }
        
        $this->pdo->exec("SET NAMES 'utf8'");
        $this->pdo->exec("SET CHARACTER SET utf8");
        $this->pdo->exec("SET CHARACTER_SET_CONNECTION=utf8");
        $this->pdo->exec("SET SQL_MODE = ''");
		
		return $this;
    }

	/**
	 *  Executa a query
	 *  @method execute
	 *  @return Object Or Array
	 */
    public function execute(){
        $this->statement->execute();
		
		if ($this->as_array)
			$data = $this->statement->fetchAll(PDO::FETCH_ASSOC);
		else
			$data = $this->statement->fetchAll(PDO::FETCH_OBJ);
		
		$result = new stdClass;
		$result->row = isset($data[0]) ? $data[0] : array();
		$result->rows = $data;
		$result->num_rows = $this->countAffected();
		
		return $result;
    }

	/**
	 *  Define a query a ser executada
	 *  @method query
	 *  @param  string  $sql
	 *  @return Object
	 */
    public function query($sql) {
        $this->statement = $this->pdo->prepare($sql);
		
		return $this;
    }
	
	/**
	 *  Define que o tipo retornado na função Executa será Object
	 *  @method as_object
	 *  @return Object
	 */
	public function as_object(){
		$this->as_array = false;
		return $this;
	}
	
	/**
	 *  Define que o tipo retornado na função Executa será Array
	 *  @method as_array
	 *  @return Object
	 */
	public function as_array(){
		$this->as_array = true;
		return $this;
	}

	/**
	 *  Remove alguns caracters e projete contra sql-injection
	 *  @method escape
	 *  @param  string  $value
	 *  @return String
	 */
    public function escape($value) {
        $search=array("\\","\0","\n","\r","\x1a","'",'"');
        $replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
        return str_replace($search,$replace,$value);
    } 

	/**
	 *  Retorna o número de dados afetados
	 *  @method countAffected
	 *  @return Int
	 */
    public function countAffected() {
        if ($this->statement)
            return (int)$this->statement->rowCount();
        else
            return 0;
    }

	/**
	 *  Retorna o último ID inserido
	 *  @method getLastID
	 *  @return Int
	 */
    public function getLastId() {
        return (int)$this->pdo->lastInsertId();
    }

	/**
	 *  Destroi a conexão
	 *  @method __destruct
	 *  @return Object
	 */
    public function __destruct() {
        $this->pdo = null;
		return $this;
    }
}