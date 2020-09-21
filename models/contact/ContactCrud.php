<?php 

/**
*
* Classe que configura o crud do contato
*
* @author Code Universe
*
**/
class ContactCrud
{
	
	private $pdoCrud;
	private $table = 'contact';

	public function __construct()
	{

		$this->pdoCrud = new PDOCrud;

	}

	public function saveContact($id=null, $name, $email, $phone, $message)
	{

		$pdo = array(
			':name' 	=> $name,
			':email' 	=> $email,
			':phone' 	=> $phone,
			':message' 	=> $message,
		);

		$columns = 'nome, email, phone, message';
		$values  = ':name, :email, :phone, :message';

		return $this->pdoCrud->insert($this->table, $columns, $values, $pdo);
	}
}