<?php

    $pessoa = [
        'nome' => 'Kaike',
        'idade' => 18,
        'alturaCm' => '170cm',
        'corPele' => 'Pardo',
    ];

    $alturaIndividuo = $pessoa['alturaCm'];
    $idade = $pessoa['idade'];

    print_r($pessoa);
    echo "<br>";
    echo "Meu nome é ", $pessoa['nome'], " tenho ", $idade, " anos com uma altura de ", $alturaIndividuo, " tenho cor de pele ", $pessoa['corPele'];
    echo "<br>";

    if($idade >= 18) {
        echo "É maior de idade";
    } else {
        echo "É menor de idade";
    }