<?php
    //Variavel de nivel global
    $num_1 = 15;

    function exemplo($num_2)
    {
        //num_2 é uma variavel local
        global $num_1;

        $operacao = $num_1 + $num_2;

        return $operacao;
    }
    echo exemplo(5);
?>

