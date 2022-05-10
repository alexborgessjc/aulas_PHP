<?php
    $array1 = array("Alex",2,3);
    $array2 = [1,2,3];

    $array3 = array(
        "chave1" => 1,
        "chave2" => "Aula de PHP",
        "chave3" => true
    );
    //Acessando um valor pela chave
    echo "<br> Array3 valor => ".$array3["chave3"];

    //Acessando um valor pela posição
    echo "<br> Array1 valor => ".$array1[0];

    //Atribuindo um valor para uma chave
    $array3["chave2"] = 2;

    //Imprimindo na tela o valor da chave2
    echo "<br> Array3 valor de chave 2=> ".$array3["chave2"];

    //Alterando o valor de um array
    $array2[0] = 55;

    //Acessando um valor pela posição
    echo "<br> Array2 valor => ".$array2[0];
?>