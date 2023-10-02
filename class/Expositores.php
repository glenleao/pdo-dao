<?php

class Expositores {

	private $ID;
	private $Nome_fantasia;
	private $CEP;
	private $Logradouro;
	private $Numero;
	private $Complemento;
	private $Bairro;
	private $Municipio;
	private $UF;
	private $Pais;
	private $Stand;
	private $Localizacao;

	public function getID(){
		return $this->ID;
	}

	public function setID($value){
		$this->ID = $value;
	}

	public function getNome_fantasia(){
		return $this->Nome_fantasia;
	}

	public function setNome_fantasia($value){
		$this->Nome_fantasia= $value;
	}

	public function getCEP(){
		return $this->CEP;
	}

	public function setCEP($value){
		$this->CEP= $value;
	}

	public function getLogradouro(){
		return $this->Logradouro;
	}

	public function setLogradouro($value){
		$this->Logradouro= $value;
	}

	public function getNumero(){
		return $this->Numero;
	}

	public function setNumero($value){
		$this->Numero= $value;
	}

	public function getComplemento(){
		return $this->Complemento;
	}

	public function setComplemento($value){
		$this->Complemento= $value;
	}

	public function getBairro(){
		return $this->Bairro;
	}

	public function setBairro($value){
		$this->Bairro= $value;
	}

	public function getMunicipio(){
		return $this->Municipio;
	}

	public function setMunicipio($value){
		$this->Municipio= $value;
	}

	public function getUF(){
		return $this->UF;
	}

	public function setUF($value){
		$this->UF= $value;
	}

	public function getPais(){
		return $this->Pais;
	}

	public function setPais($value){
		$this->Pais= $value;
	}

	public function getStand(){
		return $this->Stand;
	}

	public function setStand($value){
		$this->Stand= $value;
	}

	public function getLocalizacao(){
		return $this->Localizacao;
	}

	public function setLocalizacao($value){
		$this->Localizacao= $value;
	}

	public function loadbyId($id) {
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tbl_expositores WHERE ID = :ID", array(
			":ID"=>$id 
		));

			if (count($results) > 0){
				$row = $results[0];
			
			$this->setID($row['ID']);
			$this->setNome_fantasia($row['Nome_fantasia']);
			$this->setCEP($row['CEP']);
			$this->setLogradouro($row['Logradouro']);
			$this->setNumero($row['Numero']);
			$this->setComplemento($row['Complemento']);
			$this->setBairro($row['Bairro']);
			$this->setMunicipio($row['Municipio']);
			$this->setUF($row['UF']);
			$this->setPais($row['Pais']);
			$this->setStand($row['Stand']);
			$this->setLocalizacao($row['Localização']);
		}	
	}


	// aula 66

	public static function getList(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tbl_expositores ORDER BY Nome_fantasia;");
	}
	// fim aula 66

public function __toString(){

	return json_encode(array(
		"ID"=>$this->getID(),
		"Nome_fantasia"=>$this->getNome_fantasia(),
		"CEP"=>$this->getCEP(),
		"Logradouro"=>$this->getLogradouro(),
		"Numero"=>$this->getNumero(),
		"Complemento"=>$this->getComplemento(),
		"Bairro"=>$this->getBairro(),
		"Municipio"=>$this->getMunicipio(),
		"UF"=>$this->getUF(),
		"Pais"=>$this->getPais(),
		"Stand"=>$this->getStand(),
		"Localização"=>$this->getLocalizacao()

	));
}
}