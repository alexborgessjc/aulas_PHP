<?php
    //Declarando o array
    $array = array(1,"Php",true);

    foreach($array as $chave => $valor){
        echo"{$chave}: {$valor}<br>";
    }
    echo "--------------------------------";
    echo "<br>Arrays multidimencionais<br>";

    $linguagens = array(
        array("Php", "Php: Hypertext Preprocessor"),
        array("SQL", "Structured Query Language")
    );

    echo $linguagens[0][1];
?>