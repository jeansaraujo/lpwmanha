<?php

// Operador de Atribuição
$variavel = "nome";
//print $variavel;

// Operação Comparação / Relacional

// == ou ===

$variavel_1 = "10";
$variavel_2 = 10;

if ($variavel_1 === $variavel_2){
    print "Valor Igual";
} 
else{
    print "Valor Igual, mas tipo diferente";
}

echo "<br>";

if ($variavel_1 == $variavel_2){
    print "Compara apenas Valor";
}

echo "<br>";

if(true && true){
    print "AND condicional";
}

echo "<br>";

if(true || false){
    print "OR condicional";
}


echo "<br>";

if(!false){
    print "nega o Falso";
}


// Operador Ternário

$altura = 1.70;
$tipo = $altura>1.6?"Alto":"Baixo";

echo "<br>";

print $tipo;

// Operadores Aritméticos  >>> + - * / 

echo "<br>";

$var = 10;
$var++;
print $var++;
echo "<br>";
print ++$var;
$var *= 10;
echo "<br>";
print ++$var;









?>