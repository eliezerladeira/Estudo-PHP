<?php

class Pessoa
{
	public $nome;
	public $site;
	
	public function falarNome()	{
		echo $this->nome;
	}
	
	public function falarSite()	{
		echo $this->site;
	}
}

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Eliezer";
$uma_pessoa->site = "www.eliezerladeira.com.br";

var_dump($uma_pessoa);

$uma_pessoa->falarNome();
$uma_pessoa->falarSite();