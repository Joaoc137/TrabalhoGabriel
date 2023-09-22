<?php
//arquivos necessários para as operações 
require "Conexao.php";
require "Casa.php";
require "RepositorioCasa.php";
//instanciando o repositório para cadastrar
$repCasa = new RepositorioCasa();
//instanciando os objetos
$Casa1 = new Casa("Rua Wilson Costa","20m","4","100.000,00","1995");
$Casa2 = new Casa("Rua Doutor Albert Sabin","40m","3","130.000,00","2000");

$repCasa->cadastrar($banco,$Casa1);
$repCasa->cadastrar($banco,$Casa2);