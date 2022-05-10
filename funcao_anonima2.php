<?php
    $luckyDip = array(
        function(){
            echo "Você ganhou um saco de caramelos!";
        },
        function(){
            echo "Você ganhou um carro!";
        },
        function(){
            echo "Você ganhou balões!";
        }
    );
    $choice = rand(0,2);
    $luckyDip[$choice]();
?>