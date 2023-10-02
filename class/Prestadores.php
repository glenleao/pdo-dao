<?php

class Prestadores {

	private $id;
	private $empresa;
	private $telefone;
	private $celular;
	private $email;
	private $website;
	private $contato;

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getEmpresa(){
		return $this->empresa;
	}

	public function setEmpresa($value){
		$this->empresa = $value;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($value){
		$this->telefone = $value;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($value){
		$this->celular = $value;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($value){
		$this->email = $value;
	}

	public function getWebsite(){
		return $this->website;
	}

	public function setWebsite($value){
		$this->website = $value;
	}

	public function getContato(){
		return $this->contato;
	}

	public function setContato($value){
		$this->contato = $value;
	}

	

	public function loadbyId($id){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM prestadores WHERE id = :ID", array(
			":ID"=>$id
		));

		if (count($results)>0) {
			$row = $results[0];

			$this->setId($row['id']);
			$this->setEmpresa($row['empresa']);
			$this->setTelefone($row['telefone']);
			$this->setCelular($row['celular']);
			$this->setEmail($row['email']);
			$this->setWebsite($row['website']);
			$this->setContato($row['contato']);
		}
	
	}

	public function __toString(){

		return json_encode(array(

			"id"=>$this->getId(),
			"empresa"=>$this->getEmpresa(),
			"telefone"=>$this->getTelefone(),
			"celular"=>$this->getCelular(),
			"email"=>$this->getEmail(),
			"website"=>$this->getWebsite(),
			"Contato"=>$this->getcontato()
		));
	}
}

