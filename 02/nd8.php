$vienetoKaina = 1;

$kiekis = rand(5, 3000);




if ($kiekis > 1000 && $kiekis <= 2000) {

    $vienetoKaina = $vienetoKaina - ($vienetoKaina * 0.03);

} elseif ($kiekis > 2000) {

    $vienetoKaina = $vienetoKaina - ($vienetoKaina *  0.04);

} else {$vienetoKaina = 1;}

echo "Perkama $kiekis žvakių, vienos žvakės kainą $vienetoKaina Eur";



echo '<br>'; echo '<br>';