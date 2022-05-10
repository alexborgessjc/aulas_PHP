<?php
    $makeGreeting = function($name,$timeOfDay)
    {
        return "Bom/boa $timeOfDay, $name!";
    };
    echo $makeGreeting("Fred", "dia")."<br />";
    echo $makeGreeting("Mary", "tarde")."<br />";
?>