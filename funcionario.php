<?php

//modelo
class Funcionario{
  //atributos
  public $nome = "José";
  public $telefone = "222222222222";
  public $numFilhos = 2;

  //metodos
//   function saudacao(){
//     echo "Olá Mundo";
//   }
  
//   function nomeFuncionario(){
//     echo $this->nome; //this é usado para chamar um atributo 
//   }

// function telefoneFuncionario(){
//     echo "$this->telefone";//o aspas duplas nao ignora os comandos enquanto aspas simples ignoram os comando!! 
// }

function getNumFilhos(){
    echo $this->numFilhos;
}

function setNumFilhos($numFilhos){
    $this->numFilhos = $numFilhos;
}

function getNome(){
    echo $this->nome;
}

function setNome($nome){
    echo $this->nome = $nome;
}

function getTelefone(){
    echo $this->telefone;
}
function setTelefone($telefone){
    echo $this->telefone = $telefone;
}
function resumo(){
    echo "$this->nome possui $this->numFilhos filhos telefone $this->telefone";
}
//chamar todos os valores de variaveis
function __get($variavel){
    echo $this->$variavel;
}

//para atualizar os valores
function __set($variavel, $valor){
    $this->$variavel = $valor;
}

}



$p = new Funcionario();
$p ->setNome("José");
$p ->setNumFilhos(5);
$p ->setTelefone("2022-2222");

$o = new Funcionario();
$o-> setNome("Maria");
$o-> setNumFilhos(2);
$o-> setTelefone("1111-1010");

$t = new Funcionario();
$t -> setNome("Maria");
$o-> setNumFilhos(2);
$o-> setTelefone("1111-1010");

echo $p -> resumo();
echo "<br>";
echo $o -> resumo();

echo $o->__get('nome');
echo"<br>";

// echo $p -> saudacao(); //-> usado para acessar uma funcao
// echo "<hr>";
// echo $p -> nomeFuncionario();
// echo "<hr>";
// echo $p -> telefoneFuncionario();
// echo "<br>";
// echo $p -> getNumFilhos();
// echo $p -> setNumFilhos(5);
// echo "<br>";
// echo $p -> getNumFilhos();
// echo "<br>";
// echo $p -> getNome();
// echo $p -> setNome("Glaucia");
// echo $p -> getNome();