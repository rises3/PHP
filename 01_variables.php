<?php
/*
    1. XAMPP (PHP) telepítés, futtatás
    2. <?php ?> szintaxis
    3. Változók, konstansok ($vezetekNev, define)
    4. Adattípusok (string, int, float, bool, array)
    5. Egyszerű kiírás (echo (print), printf, sprintf, print_r, var_dump) */

    $i = 10;

    $f = 3.14;

    $b = true;

    $s = "Hunor";

    $x = 3;

    $y = "5";

    $z = $x + $y;

    var_dump($i, $f, $b, $s);

    print "$z \n";

    echo "<br> \n";
    echo "<br> \n";

    $a = [1, 2, 3];
    var_dump($a);

    // Mit ír ki?
    $message = "egy";
    print "<br> Kiír ".$message." értéket. \n";
    print "<br> Kiír $message értéket. \n";
    print '<br> Kiír ${message} értéket. \n';


    echo "<br> \n", "Kiír ",  $message, " értéket. \n";


    $ar = 1500.5;
    printf("<br> \n Az ár: %.2f Ft. <br> \n", $ar);

    $szam = 7;
    $kod = sprintf("AZON-%04d", $szam);
    print $kod;
?>