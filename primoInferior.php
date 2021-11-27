<?php

function primoInferior($num) {
  
  $number = $num;
  $divider = 0;
    
    for ($i=2; $i < $number ; $i++) { 
        if ($number % $i == 0) {
            $divider++;
            $number--;
            if ($number <= 0) {
                $number = 0;
            }
        }  
    }
    return " O maior número primo abaixo de {$num} é $number";
   
  
}

echo PrimoInferior(10);
