<?php

    $x = 10;

    $y =& $x;

    echo "Atribuição após o ref1";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuição após o ref2";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    // Acontece para strings também