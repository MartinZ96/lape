echo '9.<br>';



$var1 = rand(0, 100);

$var2 = rand(0, 100);

$var3 = rand(0, 100);

$average = round(($var1 + $var2 + $var3 / 3), 3);

echo 'Vidurkis: '."$average";




$sum = 0;

$elements = 0;





if( 10 < $var1 && $var1 < 90){

    $sum += $var1;

    $elements++;

}

if( 10 < $var2 && $var2 < 90){

    $sum += $var2;

    $elements++;

}

if( 10 < $var3 && $var3 < 90){

    $sum += $var3;

    $elements++;

}if($elements === 0){

    echo 'Nera is ko skaiciuoti vidurkio';

} else {

    echo '<br>Specifinis Vidurkis: '.$sum/$elements;

}