<?php 
	# carrega as classes 
	include 'funcionario_2.php'; 
	include 'estagiario.php'; 
	 
	$pedrinho = new Estagiario; 
	$pedrinho->setSalario(248); 
	echo 'O Salário do Pedrinho é R$: ' . $pedrinho->getSalario() . "\n"; 
?>