<?php

function SeculoAno($ano) {
    
    $century = strftime("%C", strtotime($ano));

    return $century;
}

echo SeculoAno(1790);
