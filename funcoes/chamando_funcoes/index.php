<?php


function soma(){
    $a = 5;
    $b = 4;

    echo $a + $b ."<br>";
    echo $a * $b ."<br>";
}
soma();

echo strtoupper("testando função <br>");

function nome(){
    $nome = "regis";
    $sobrenome = "ferreira";
    echo$nome . " ". $sobrenome;
}
nome();

echo"<br>";
function velocidadeMaxima($vel){
    echo " o carro atinge a velocidade maxima de $vel km/h <br>";
}
velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

$velocidade = 125;
velocidadeMaxima($velocidade);

function descreverAnimal($nome, $raca){
    echo "o $nome é $raca <br>";
}
descreverAnimal("bob" , "Vira lata");
descreverAnimal("romero", "rottwailler");

echo strtoupper("exercicio <br>");

function exercicio($nome, $idade){
    echo "me chamo $nome e tenho $idade anos <br>";
}
exercicio("régis", 33);

require "par_impar.php";

echo strtoupper("funções com retorno <br>");

function numAoQuadrado($x){
    $resultado = $x ** 2;
    return $resultado;
}
 echo numAoQuadrado(2). "<br>";

 $num = numAoQuadrado(4);

 echo $num . "<br>";

echo "<br>";
echo strtoupper("exercicio 2");
echo "<br>";

$arr = [];
for($i = 0; $i <= 30; $i++){
    array_push($arr, $i);
}
print_r($arr);
echo "<br>";

function par($array){
    $arrayRetorno = [];
    for($j = 0; $j < count($array); $j++){
        if($array[$j] > 7){
            array_push($arrayRetorno, $array[$j]);

        }
    }
    return $arrayRetorno;
}
$novoArray = par($arr);
print_r($novoArray);