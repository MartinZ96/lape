<?php

/*
1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.

*/

$vardas = 'Petras'; 
$pavarde = 'Petraitis';

if($vardas > $pavarde){
    echo $vardas;
}
else {
    echo $pavarde;
};

echo '<br>';

/*
2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/

$vardas = 'Antulis';
$pavarde = 'Donaldas';

echo strtoupper($vardas.' ');

echo strtolower($pavarde);
echo '<br>';

/*
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/

$vardas1 = 'Ponas';
$pavarde1 = 'Bynas';
$pirmos = $vardas1[0].$pavarde1[0];

echo $pirmos;
echo '<br>';

/*
4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/

$vardas2 = 'Batuotas';
$pavarde2 = 'Katinas';
$naujas = substr($vardas2, -3).substr($pavarde2, -3);

echo $naujas;
echo '<br>';


/*
5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.
Rezultatą atspausdinti.
*/

$paris = 'An American in Paris';
$replace = str_replace(array('A', 'a'), array('*', '*'), $paris);

echo $replace;
echo '<br>';

/*
6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
*/

$paris = 'An American in Paris';
$replace = str_replace(array('A', 'a'), array('*', '*'), $paris, $count);

echo $count;
echo '<br>';

/*
7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/

//$paris1 = preg_replace(array('a','A','e','E','i','I','o','O','y','Y','u','U'),'',$paris2);
//$paris1 = preg_replace('/a/A/e/E/i/I/o/O/y/Y/u/U', '', $paris2);
//$patterns = array ('a','A','e','E','i','I','o','O','y','Y','u','U');
//$replace = array ('1');
//echo preg_replace($patterns, $replace, 'An American in Paris'); 

$paris1 = 'An American in Paris';
  $paris2 = str_ireplace(array('A','E','I','O','U'), '', $paris1);
  echo $paris2;
  echo '<br>';  

$Tiff = "Breakfast at Tiffany's";
  $Tiff1 = str_ireplace(array('A','E','I','O','U'), '', $Tiff);
  echo $Tiff1;
  echo '<br>';

$space = "2001: A Space Odyssey";
  $space1 = str_ireplace(array('A','E','I','O','U'), '', $space);
  echo $space1;
  echo '<br>';

$life = "It's a Wonderful Life";
  $life1 = str_ireplace(array('A','E','I','O','U'), '', $life);
  echo $life1;
  echo '<br>';

/*
8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) .
' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
*/

//echo 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) .' - A New Hope';
//echo 

$test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$re = '/\d/';
$number=preg_match($re, $test, $matches);
echo $matches[0];
echo '<br>';

/*
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. 
Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/



/*
10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/

function stringRender ($length) {

    $characters = 'qwertyuiopasdfghjklzxcvbnm';

    $charactersLenght = strlen($characters);

    $randomString = '';



    for ($i = 0; $i < $length; $i++) {

        $randomString.= $characters[rand(0, $charactersLenght-1)];

    }

return   $randomString;

}

echo stringRender(3);
echo '<br>';

/*
11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių,
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
*/


