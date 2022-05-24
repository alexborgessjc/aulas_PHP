<?php
    //Função anonima como callback

    //Cria uma função de callback..
    function nameToGreeting($name)
    {
        return "Olá, ".ucfirst($name)."!";
    }
    //... e mapeia a função de callback para elemnetos de um array
    $names = array("João", "Maria", "Astolfo","Alex");
    print_r(array_map(nameToGreeting, $names));

    //Em tela: Array([0] => Olá, João! [1] => Olá, Maria! [2] => Olá, Astolfinho!)
?>