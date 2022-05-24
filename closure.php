<?php
    function getGreetingFuncion()
    {
        $timeofDay = "dia";

        return(function($name) use (&$timeofDay)
        {
            $timeofDay = ucfirst($timeofDay);
            return("Bom/boa $timeofDay, $name!");
        });
    };

    $greetingFunction = getGreetingFuncion();
    echo $greetingFunction("Frederico");
?>