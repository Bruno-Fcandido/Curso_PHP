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

if ($media>=5) {
    echo"aluno aprovado";

}else {
    echo"reprovado";
    echo"$media";
}



?>