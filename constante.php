<?php 
class Biblioteca 
{  
const NOME = "Sistema "; 
} 
 
class Aplicacao extends Biblioteca 
{  
// declaração das constantes  
const Ambiente = "Maestro ";  
const Versão = "1.0.0.1"; 
 
 /* método construtor   
  */ 
  function __construct($Nome)  
  {   
  echo parent::NOME . self::Ambiente . self::Versão . $Nome . "\n";  
  }
 } 
 
// acessa as constantes externamente 
echo Biblioteca::NOME.Aplicacao::Ambiente.Aplicacao::Versão . "\n"; 
 
new Aplicacao(' 2016'); 
new Aplicacao(' 2017'); 
new Aplicacao(' 2018'); 
?>