<?php



echo"Informe um numero  inteiro\n";
$n1=readline();

echo"Informe um segundoo  inteiro\n";
$n2=readline();

echo"Informe um terceiro inteiro\n";
$n3=readline();

echo"Informe um quarto  inteiro\n";
$n4=readline();

echo"Informe um quinto  inteiro\n";
$n5=readline();

$media=($n1+$n2+$n3+$n4+$n5) / 5;



if($n1>$media){

    echo $n1, "e o maior\n";
}
if ($n2>$media) {
    echo $n2, "e o maior\n";
}

if($n3>$media){
    echo $n3, "e o maior\n";
}
if ($n4>$media) {
    echo $n4, "e o maior\n";
}
if ($n5>$media){
    echo $n5, "e o maior\n";
} 
?>