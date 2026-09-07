<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2) {
        $teste = "dsa";

        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function funcao() {

        global $teste; // Definindo a variável $teste como global

        echo "$teste local <br>";
    }

    funcao();