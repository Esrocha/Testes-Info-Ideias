<?php

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for($i = 1; $i <= 20; $i++) {
    $array_sorteado[] = array_rand($array);
}

//Count repeated values in array
$repeated = array_count_values($array_sorteado);

//This function extract the bigger 
function bigger_key_value($array) {

    $bigger_key='';
    $bigger_value=false;

    array_walk($array,
        function (&$value,&$key) use(&$bigger_key,&$bigger_value) {
            if ($bigger_value === false || $value > $bigger_value) {
                $bigger_value = $value;
                $bigger_key = $key;
            }
        }
    );
    return "<br> O número que mais se repete é o {$bigger_key} <br> Ele se prepete {$bigger_value} vezes  ";
}

echo "Numeros sorteados são ";
foreach ($array_sorteado as $key => $value) {
    echo "{$value}, ";
}
echo bigger_key_value($repeated);



