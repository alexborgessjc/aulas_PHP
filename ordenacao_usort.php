<?php
    //Criando o array
    $people = array(
        array("name" => "João", "age" => 39),
        array("name" => "Maria", "age" => 23),
        array("name" => "Astolfinho", "age" => 14)
    );
    //Função anonima de ordenacao
    usort($people, function($personA, $personB)
    {
        return ($personA["age"] < $personB["age"]) ? -1 : 1;
    });
    //Mostrando o vetor ordenado
    print_r($people);
?>