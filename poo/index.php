<?php

require "Pessoa.php";
//require_once - permite carregar uma única vez, não sendo preciso dar require em todo o projeto para o mesmo arquivo
//include - não dá erro fatal, somente warning
//@ no começo - ignora os warnings

$uma_pessoa = new Pessoa;
//$uma_pessoa->nome = "Eliezer";
//$uma_pessoa->site = "www.eliezerladeira.com.br";

//var_dump($uma_pessoa);

//$uma_pessoa->falarNome();
//$uma_pessoa->falarSite();

// usando get e set

$uma_pessoa->setNome("Eliezer");

echo $uma_pessoa->getNome();