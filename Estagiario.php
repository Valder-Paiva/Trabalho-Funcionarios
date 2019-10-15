<?php 

class Estagiario extends Funcionario{
    

    
    private $salario;
    private $desconto;

public function __construct($nome, $idade, $dataEntrada, $cpf, $contato){
    parent::__construct($nome, $idade, $dataEntrada, $cpf, $contato);
    $this->setCargo();
    $this->setSalario();
    $this->setDesconto();
    }
public function dadosFinanceiro(){

    $this->getSalario();    
    echo "==========================================<br>";
    }
    
public function setCargo(){
    $this->cargo = "<strike> Escravo </strike> Estágiario";
    }
public function getCargo(){
    echo "<b>Cargo ocupado: </b>",$this->cargo,"<br>";
    }
public function setSalario(){
    $this->salario = 0;
    }
public function getSalario(){       
    echo "<b>Salário Bruto:</b> R$",number_format($this->salario,2,",","."),"<br>";
    echo "<font color=red> <b> Desconto de:</b> R$",number_format($this->salario*$this->desconto,2,",","."),"  (",$this->desconto*100," %)","<br> </font>"; 
    echo "<b> Salário Líquido:</b> R$",number_format($this->salario-($this->salario*$this->desconto),2,",","."),"<br>";
    echo "<font color=red><br><i>Está ganhando expêriencia e dois hot-dog com coca por dia </b></i> </font><br>";
    }
 public function setDesconto(){
     $this->desconto=1;
    }

    
    
    
}


?>