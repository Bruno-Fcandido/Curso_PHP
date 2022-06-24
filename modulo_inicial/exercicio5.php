<?php

echo "Informe sua altura\n";
$h=readline();

echo"informe se e masculino ou feminino\n";
$genero=readline();


$masculino=(72.7*$h) - 58;

$feminino=(62.1*$h) - 44.7;



if($genero=='feminino')
{
    echo $feminino,"este e seu peso ideal de mulher\n";
}

else
{
    echo $masculino,"este e seu peso ideal de homem\n";
} 
?>