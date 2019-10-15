<?php
require("Funcionario.php");
require("Supervisor.php");
require("Gerente.php");
require("Badeco.php");
require("Estagiario.php");
$Funcionario1 = new Estagiario("Nome Sobrenome",20,"10/10/2010","100.101.111-10","email@email.com");

$Funcionario1->dadosFuncionario();
$Funcionario1->dadosFinanceiro();

$Funcionario2 = new Supervisor("Nome Sobrenome",20,"10/10/2010","100.101.111-10","email@email.com");

$Funcionario2->dadosFuncionario();
$Funcionario2->dadosFinanceiro();

$Funcionario3 = new Gerente("Nome Sobrenome",20,"10/10/2010","100.101.111-10","email@email.com");

$Funcionario3->dadosFuncionario();
$Funcionario3->dadosFinanceiro();

$Funcionario4 = new Badeco("Nome Sobrenome",20,"10/10/2010","100.101.111-10","email@email.com");

$Funcionario4->dadosFuncionario();
$Funcionario4->dadosFinanceiro();
?>