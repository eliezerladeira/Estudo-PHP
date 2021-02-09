<?php

class Pessoa
{
/*	public $nome;
	public $site;
	
	public function falarNome()	{
		echo $this->nome;
	}
	
	public function falarSite()	{
		echo $this->site;
	}
*/
// usando get e set
	protected $nome;
	
	const ESPECIE = "Humana";
	
	public function __construct($tmpNome)
	// envia o nome diretamente na instanciação da classe
	{
		$this->nome = $tmpNome;
	}
	
	public function setNome($novoNome) {
		$this->nome = $novoNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
}