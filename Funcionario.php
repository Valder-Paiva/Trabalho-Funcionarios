<?php 

class Funcionario{
    
    private $nome;
    private $idade;
    private $dataEntrada;
    protected $cargo;
    private $cpf;
    private $contato;
    
public function __construct($nome, $idade, $dataEntrada, $cpf, $contato){
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setDataEntrada($dataEntrada);
    $this->setCargo();
    $this->setContato($contato);
    $this->setCPF($cpf);
}
public function dadosFuncionario(){
    $this->getCargo();
    $this->getNome();
    $this->getDataEntrada();
    $this->getIdade();
    $this->getCPF();
    $this->getContato();   
    echo "-----------------------------------------<br>";
}
public function setNome($nomeF){
    $this->nome = $nomeF;
    }
public function getNome(){
    echo "<b>Nome: </b>",$this->nome ,"<br>";
    }
public function setIdade($idadeF){
    $this->idade = $idadeF;
    }
public function getIdade(){
    echo "<b>Idade: </b>",$this->idade,"<br>";
    }
public function setDataEntrada($dataEntradaF){
    $this->dataEntrada = $dataEntradaF;
    }
public function getDataEntrada(){
    echo "<b>Data de entrada: </b>",$this->dataEntrada,"<br>";
    }
public function setCargo(){
    $this->cargo = "Não definido ainda.";
    }
public function getCargo(){
    echo "<b>Cargo ocupado: </b>",$this->cargo,"<br>";
    
    }
public function setCpf($cpfF){
    $this->cpf = $cpfF;
    }
public function getCpf(){
    echo "<b>CPF: </b>",$this->cpf,"<br>";
    }
public function setContato($contatoF){
    $this->contato = $contatoF;
    }
public function getContato(){
    echo "<b>Contato: </b>",$this->contato,"<br>";
    }
}
?>