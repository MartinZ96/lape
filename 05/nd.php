<?php

/*
1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29),
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/

// $elementai = range(0,29);
// shuffle ($elementai);
// foreach ($elementai as $elementai) {
//     rand(5,25);
//     print_r ($elementai);
// }


$elementai = 0;
$masyvas = [];
do {
$masyvas[$elementai++] = rand(5, 25);
} while ($elementai <= 29);
echo '<pre>';
print_r($masyvas);


/*
2.Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/

//a
$daugiau = 0;
foreach ($masyvas as $didesni) {
    if ($didesni > 10) {
         $didesni++;
         
    }
}
echo $didesni;
echo '<pre>';
// //b DONE

// $didziausias =  max($masyvas);
// $didziausiosVertes = array_keys($masyvas, $didziausias);

// echo $didziausias.' indexas yra '.implode(", ", $didziausiosVertes);
// echo '<br>';

$max = 0;
$index = [];

foreach ($masyvas as $key => $value){
    if ($value == $max);{
        echo "lygu";
        array_push($index, $key);
    }
    if ($value > $max){
        $max = $value;
        $index = [];
        array_push($index, $key);
    }
}

echo "max - $max, indeksai - " . implode(',',$index);
echo '<pre>';
// c

$lyginiai = 0;

foreach ($masyvas as $key => $value) {
    if($key % 2 == 0)
    $lyginiai += $key;
}
echo $lyginiai;

//d

$newMasyvas = [];

foreach($newMasyvas as $key => $value){
    $newMasyvas[] = $value - $key;
}
echo '<pre>';
print_r($newMasyvas);

//e

foreach(range(0,9) as $i){
    $newMasyvas[] = rand(5,25);
}

//f

//Iš masyvo elementų sukurkite du naujus masyvus. 
//Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$porinis = [];
$neporinis = [];
foreach($masyvas as $key => $value){
    if($key % 2 == 0){

    }

}
//g




//h

$i = 0;
while($newMasyvas[$i] <= 10){
    ++$i;
}

//h



/*
3.Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200.
Suskaičiuokite kiek yra kiekvienos raidės.
*/




/*
4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/

/*
5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek 
unikalių kombinacijų gavote.
*/

/*
6.Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/

/*
7.Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame
6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/

/*
8.Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
*/

/*
9.Sugeneruokite masyvą, kurio indeksus
sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
*/

/*
10.Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma.
Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
*/


/*
11.Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais
nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite
iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip,
kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios
ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas 
(neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra 
didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau
nei per 30)

*/