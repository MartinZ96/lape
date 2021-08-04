
// 1 uzdavinys 
/*
1.echo '1. ';

$Name = 'Gražvydas';

$Surname = 'Molotokas';

$Birthday = 1992;

$CurrentYear = 2021;

$Age = $CurrentYear - $Birthday;



echo "Aš esu $Name $Surname. Man yra $Age metai(ų).";



echo '<br>';echo '<br>';

2.echo '<br>2. uzdavinio sprendimas ---------------<br>';
$pirmas = rand(0, 4); 
$antras = rand(0, 4); 
echo '<pre>'; 
echo "$pirmas<br>";
echo "$antras<br>";
if ($pirmas > $antras && $antras !==0) {
    echo round(($pirmas/$antras), 2);
 }
elseif (($antras > $pirmas && $pirmas !==0)) {
    echo round(($antras/$pirmas), 2);
}
elseif ($antras == $pirmas) {
    echo 'skaiciai yra vienodi, neskaiciuosiu';
}
else {
    echo 'dalmuo yra 0, neskaiciuosiu';
}
echo '<br>';

3.$var1 = rand(0, 4);

$var2 = rand(0, 4);

if ($var1 > $var2) {

    if ($var2 != 0) {

        echo 'Rezultatas yra ' . round(($var1 / $var2), 2) . ". Pirmas skaicius: $var1; antras skaicius: $var2.";

    } else {

        echo "Pirmas skaicius yra $var1, antras skaicius yra $var2. Dalyba is nulio negalima.";

    }

} elseif ($var2 > $var1) {

    if ($var1 != 0) {

        echo 'Rezultatas yra ' . round(($var2 / $var1), 2) . ". Pirmas skaicius: $var1; antras skaicius: $var2.";

    } else {

        echo "Pirmas skaicius yra $var1, antras skaicius yra $var2. Dalyba is nulio negalima.";

    }

} else {

    echo 'Abu skaiciai yra lygus ';

    if ($var1 != 0) {

        echo "$var1, rezultatas yra 1.";

    } else {

        echo "$var1, dalyba negalima.";

    }

}

*/
