<?php

$n = 0;

function div($n)
{
    try {
        if ($n <= 0) {
            throw new Exception(" <br> enter the valid number");
        }
        $div = 2 / $n;
        echo "<br>" . $div;
    } catch (Exception $e) {

        echo $e->getLine();
      
    
    
    }
    finally{
        echo "<br> Finally";
    }
}

div(0);
div(2);
div(4);
