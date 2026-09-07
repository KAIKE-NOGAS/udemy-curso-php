<?php

    class Pessoa {
        function falar() {
            echo "Olá Pessoa";
        }
    }

    $matheus = new Pessoa();

    $matheus->nome = "Matheus";

    echo $matheus->nome;

    echo "<br>";

    $matheus->falar();

