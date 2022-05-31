<?php
    function media(...$valores)
    {
        $total = array_sum($valores);
        $total = $total / count($valores);
        return $total;    
    }    
    echo media(5,5,6);
?>