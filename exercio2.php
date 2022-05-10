<?php
    $colecao = [1,3,6,9,13];
    $soma = 0;

    for($i = 0; $i < count($colecao);$i++)
    {
        $soma += $colecao[$i];
    }
    echo "O resultado é: ".$soma
?>