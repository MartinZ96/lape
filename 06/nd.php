<?php


/*
1. Sugeneruokite masyvą iš 10 elementų,
kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/


$masyvas = [];
foreach(range(1,10) as $stalcius){

    foreach(range(1,5) as $skyrius){
        $masyvas[$stalcius][$skyrius] =rand(5,25);
    }

}
echo '<pre>';
print_r($masyvas);
echo '<br>';



/*
2. Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra elementų didesnių už 10;
Raskite didžiausio elemento reikšmę;
Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
Visus masyvus “pailginkite” iki 7 elementų
Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai
ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo
reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, 
visų elementų sumai 
*/

//Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$didesni = 0;
foreach($masyvas as $stalcius){

    foreach($stalcius as $skyrius){
            if($skyrius > 10){
            $didesni++;
    }

    }
}
echo 'Didesnių už 10: ';
print_r($didesni);
echo '<pre>';


//Raskite didžiausio elemento reikšmę;

$didziausias = 0;
foreach($masyvas as $stalcius){

    foreach($stalcius as $skyrius){
            if($skyrius == $didziausias){
                echo '<pre>';
            }
            if($skyrius > $didziausias){
                $didziausias = $skyrius;
                
            }
    }
}
echo 'Didžiausio elemento reikšmė: '.$didziausias;
echo '<pre>';

//Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
//(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

// $vienodi = 0;
// foreach($masyvas as $stalcius){

//     foreach($stalcius as $skyrius){
        
//     }
// }

//Visus masyvus “pailginkite” iki 7 elementų

$prailginimas = range(1,7);
foreach($masyvas as $stalcius){

    foreach($stalcius as $skyrius){
        
    }
}


//Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai
//ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo
//reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, 
//visų elementų sumai 



/*
3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas
su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos
raidės iš intervalo A-Z.
Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).


*/

$masyvas = [];
$raides = range('A', 'Z');

foreach(range(0,10) as $key){
    $netycia = [];
    foreach(range(1, rand(2,20)) as $value){
        
    }
}



/*
4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių 
masyvai trumpiausi eitų pradžioje.
Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

*/

//usort($masyvas, function($a, $b){return count($a)<=> count($b);});

// mano dar kitoks   
// $suK=[];
// $beK=[];
// function hasK($x,$naujasMasyvas){
// if (in_array ( "K", $naujasMasyvas[$x] )){
//     return 1;
// }
// }
// foreach($naujasMasyvas as $key => $value){
// if(hasK($key,$naujasMasyvas)){
//     $suK[]=$value;
// }
// else {
//    $beK[]=$value;
// }
// }
// sort($suK);
// sort($beK);
// $isrusiuotasMasyvas=array_merge($suK,$beK);

/*
5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas
yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus
skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

*/

$masyvas = [];
$user_id = rand(1, 1000000);
$place_in_row = rand(0,100);

foreach()
