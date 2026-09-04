<?php
/*
    1. if, else, elseif
    2. switch
    3. Ciklusok: for, while, foreach
    4. Ternary operátor ($valtozo = feltétel ? 'igen' : 'nem';)
    5. Tömbök (indexelt, asszociatív, tömbök tömbje)
*/

//Írj programot, ami egy számról eldönti, hogy páros vagy páratlan


    $szam = 6;
    if ($szam % 2 == 0){
            print "<br> A(z) ".$szam." páros.\n";
    } else {
            print "<br> A(z) ".$szam." páratlan.\n";
    }


    $res = ($szam % 2 == 0) ? "páros" : "páratlan";
    print "<br> A(z) ".$szam." ".$res.".\n";

    // Készíts for ciklust, ami kiírja a számokat 1-től 10-ig
    for ($i = 1; $i <= 10; $i++){
        print "<br> ".$i." \n";
    }

    //Vegyél fel egy gyümölcsök  nevű tömböt 5 gyümölcsel, és ezt írasd ki for ciklussal
    $gyumolcsok = array("alma", "körte", "meggy", "cseresznye", "barack");
    for ($i = 0; $i < count($gyumolcsok); $i++) {
        print "<br> A(z) ".($i + 1).". gyümölcs: $gyumolcsok[$i] \n";
    }
    echo "<br> \n", "<br> \n";
    //Írasd ki a gyümölcsöket foreach ciklussal
    foreach ($gyumolcsok as $key => $gyumolcs) {
        print "<br> A(z)".($key + 1).". gyümölcs: $gyumolcs \n";
    }

?>