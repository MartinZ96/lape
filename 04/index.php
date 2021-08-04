<?php

// //Uždavinys Kiek reikės šaukštų suvalgyti visą sriubą?

// $sriuba = rand(260, 300); //ml sriubos
// $saukstuKiekis = 0;

// //Vienas saukstas pasemia nuo 7 iki 10 ml sriubos
// $pasemia = rand(7, 10);

// do {
//     $saukstuKiekis++, 
//     $sriuba -= min(rand(7, 10),$sriuba);
// } while ($sriuba > 0);

// $saukstuKiekis, $sriuba;



echo "Isviso kepsnio buvo $kepsnys <br>";
do {
    // kepsnio pasmeigimas sakute
    $sakutes = rand(7, 10); // generuoja kiek pasmeigs sakute
    $kepsnys -= $sakutes; // nuo kepsnio minusuoja kiek pasmeigta ant sakutes
    $sakuciuKiekis++; // didina sakuciu skaiciu
    if ($kepsnys < 0) { //tikrina ar ne i minusa
        $kepsnys = 0; // jeigu minusas - lygu nuliui
    }
    echo "leksteje liko $kepsnys g kepsnio <br>";
    do{
        //kepsnio valgymas nuo sakutes
        $krimst = rand(4, 6); // generuoja kiek mesos sukramtys vienu krimstelejimu 
        $krimstelejimai++; // padidina krimstelejimu skaiciu
        $sakutes -= $krimst; // nuo sakutes kiekio minusuoja krimstelejimo kieki
        if ($sakutes < 0) { // tikrina ar ne i minusa
            $sakutes = 0; // jeigu minusas - lygu nuliui
        }
    } while ($sakutes > 0); // sukasi kol ant sakutes dar yra mesos
} while ($kepsnys !=0); // sukasi kol leksteje yra mesos

echo "kepsniui suvalgyti prireike $sakuciuKiekis saukstu ir $krimstelejimai krimstelejimu";