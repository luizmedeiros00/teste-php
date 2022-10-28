<?php

// Crie um array
// Popule este array com 7 números
$array = arrayOfNumbers(7, 1, 100);

// Imprima o número da posição 3 do array
echo "Array posição 3: {$array[2]} <br>";

// Crie uma variável com todas as posições do array no formato de string separado por vírgula
$arrayAsString = implode(',', $array);

// Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior
$newArray = explode(',', $arrayAsString);
unset($array);

// Crie uma condição para verificar se existe o valor 14 no array
$exists = in_array(14, $newArray);

// Faça uma busca em cada posição. Se o número da posição atual for menor que o
// da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta
// posição
$prevValue = $newArray[0];
$newArray = array_filter($newArray, function ($currentValue) use (&$prevValue) {
    if($currentValue > $prevValue){
        $prevValue = $currentValue;
        return true;
    }

    return false;
});

// Remova a última posição deste array
array_pop($newArray);

//  Conte quantos elementos tem neste array
count($newArray);

// Inverta as posições deste array
array_reverse($newArray);

function arrayOfNumbers($length, $minNumber = 1, $maxNumber = 100)
{
    $array = [];

    while (count($array) < $length) {
        $array[] = rand($minNumber, $maxNumber);
    }

    return $array;
}



