<?php

echo"insira um valor";
$n1=readline();
echo"insira um segundo valor";
$n2=readline();

echo"digite 1 para adiçao,2 para subtraçao,3 para multiplicaçao e 4 para divisao";
$escolha=readline();


switch ($escolha) {
    case 1:
        echo $n1+$n2;
        break;
    case 2:
        echo $n1-$n2;
        break;
    case 3:
        echo $n1*$n2;
        break;
    case 4: {

        if($n2==0)
        echo"nao valido";
        echo $n1/$n2; 
        
        break;
    }
    default:
        echo "nem uma operaçao definida";
        break;
}


?>