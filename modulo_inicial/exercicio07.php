<?php

echo"insira sua primeira nota\n";
$n1=readline();

echo"insira sua segunda nota\n";
$n2=readline();

echo"insira sua terceira nota\n";
$n3=readline();

echo"insira sua quarta nota\n";
$n4=readline();


$media=($n1+$n2+$n3+$n4/4);

$novamedia=($exame+$media);

if ($media>=7) {
    echo"Aprovado";
    echo"esta e sua nota\n",$media=($n1+$n2+$n3+$n4/4);

}elseif($media<7){
    echo"insira o valor do exame\n";
    $exame=readline();
    echo"aqui e valor de seu exame\n",$exame;
    echo"a sua media nova e\n", $novamedia;
}elseif($novamedia>=5){
    echo"Aprovado\n";
    echo"sua nova media e\n",$novamedia;
}else{
    echo"Reprovado";
}
?>