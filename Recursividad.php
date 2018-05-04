<?php
function factorial($n){
    $valor_=$n*5;
    if($n==1)
        return 1;
    else
        return $n * factorial($n-1);
}

$numero =5;
$valor=$numero*5;
$resultado = factorial($numero);
echo "el factorial de ".$numero." es ".$resultado
?>