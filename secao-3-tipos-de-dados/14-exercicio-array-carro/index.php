<?php

    $carro = [
        "Modelo" => "M3",
        "Marca" => "BMW",
        "Motor" => "V.8",
        "Cor" => "Vermelho",
        "Potência" => "260cv",
    ];

    print_r($carro);
    echo "<br>";

    echo "O carro dos sonhos é uma ", $carro["Marca"], " Modelo: ", $carro["Modelo"], " De cor ", $carro["Cor"];