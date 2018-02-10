<?php 
class Contato 
{  
var $nome; 
var $telefone;  
var $email; 
var $estado; 
var $profissao; 
var $escolaridade; 

//grava informações de contato  
	function SetContato($nome, $telefone, $email, $estado, $profissao, $escolaridade)  
		{   
			$this->nome = $nome;   
			$this->telefone = $telefone;   
			$this->email = $email;  
			$this->endereco = $estado;
			$this->profissao = $profissao;
			$this->escolaridade = $escolaridade;
		}   
		
//obtém informações de contato  
	function GetContato()  
		{  
			return 
			"Nome: {$this->nome}, 
			Telefone: {$this->telefone}, 
			Email: {$this->email}; 
			Endereco: {$this->endereco}; 
			Profissao: {$this->profissao}; 
			Escolaridade: {$this->escolaridade}"; 			
		} 
} 
?>		