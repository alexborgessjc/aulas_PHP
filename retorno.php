<?php
    function soma()
    {
        $num = func_num_args();
        $args = func_get_args();
    
        $total = 0;
        for ($i = 0; $i < $num; $i++)
            $total += $args[$i];    
        return $total;
    }    
    echo soma(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
?>