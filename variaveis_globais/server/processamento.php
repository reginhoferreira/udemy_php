<?php

if(isset($_GET['nome'])){

$nome = $_GET['nome'];
$idade = $_GET['idade'];

}else{
    $nome ="padrao";
    $idade = "padrao";
}

?>
<h1> o seu nome é <?= $nome ?>, e vc tem <?= $idade ?> anos </h1>