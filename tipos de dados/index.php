<?php
$num= 5;
echo $num;
echo "ele tem $num anos <br>";

echo true;
echo "<br>";
$arr = ['nome' =>'Romero', 'idade'=>15];
print_r ($arr);
echo "<br>";

echo $arr['nome'];
echo"<br>";
echo $arr['idade'];
echo "<br>";
$a=[1,2,3];
print_r($a[1]);
echo "<br>";

$pessoa = ['nome' =>'regis', 'idade' => 33, 'sobrenome'=>'ferreira'];
print_r ($pessoa);
$nome=$pessoa['nome'];
$idade=$pessoa['idade'];
echo "<br>";
if($pessoa['idade']>18){
    echo "$nome  tem $idade anos portanto ele é maior de idade";
}
echo"<br>";
class Pessoa{
    function falar(){
        echo "ola pessoal";
    }
}

$regis = new Pessoa();
echo"<br>";
$regis->nome = "regis";
echo $regis->nome;
echo"<br>";

$regis->falar();

//PRINTANDO ARRAYS 
$velocidade=100;
$marca = "Ferrari";
$itens = ["teto solar", "motor 2.0", "porta malas grande"];
echo "<br>";
echo $velocidade;
echo "<br>";
echo $marca;
echo "<br>";
print_r($itens);

//soma de variaveis
$a =2;
$b =4;
$soma= $a + $b;
echo"<br>";
echo "$soma <br>";


//VARIAVEL DE VARIAVEL

$x = "nome";
echo "$x <br>";
$$x = "mateus";
echo "$nome <br>";

//VARIAVEL POR REFERENCIA "&"

$x = 10;
$y = &$x;
echo $x;
echo"<br>";
echo "$y <br>";

//ATRIBUIÇÃO APÓS REFERENCIA
$y = 15;
$y = $x;
echo $x;
echo"<br>";
echo "$y <br>";

$x = 20;
$y = $x;
echo $x;
echo"<br>";
echo "$y <br>";

//ALTERAÇÃO COM STRING

$nome = "regis";
$nome2 = & $nome;

echo "$nome <br>";
echo"$nome2 <br>";

//VARIAVEIS LOCAIS E GLOBAIS

$x =10;

echo "$x variavel global <br>";

function teste(){
    $x =5;
    echo"$x variavel local <br>";
}
teste();

$x = 99;
echo "$x <br>";

//ESCOPO GLOBAL

$teste = "asd";
echo"$teste global 1 <br>";

if(5 > 2){
    $teste = "dsa";
    echo"$teste - pelo if <br>";
}

echo "$teste - global 2 alterada pelo if <br>";

// GLOBAL COM FUNÇÕES
function funcao(){

    $teste = "xsxs";
    echo"$teste local <br>";
}
funcao();

function testandoGlobal(){
    echo" CHAMANDO A VARIAVEL GLOBAL NATIVA <br>";
    global $teste; 

    $teste = 2;
    echo"$teste global da função <br>";
}
testandoGlobal();

echo "$teste global 3 <br>";