<?php
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

// VARIAVEL ESTÁTICA

function teste2(){
    $a = 0;
    $a++;
    echo "$a <br>";
}
teste2();
teste2();
teste2();
function testeStatic(){
    static $a = 0;
    $a++;
    echo "$a ,<br>";
}
echo" COM VARIAVEL STATIC <br>";
testeStatic();
testeStatic();
testeStatic();

//PARAMETROS POR FUNÇÕES

function soma($a,$b){
   
    echo $a + $b;
    echo "<br>";
}

//soma($a,$b);
echo"soma 1 <br>";
soma(2,4);
echo"soma 2 <br>";
soma(3,6);
echo"soma 3 <br>";
soma(5,9);


