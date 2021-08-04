<?php

/*
1.Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
*/

// function tagas (string $tekstas){
//         $tekstas = 'Sveiki';
//         echo '<h1>'.$tekstas.'</h1>';
//         return $tekstas;
// };

// echo tagas(1);


echo '1 uzdavinys';
function htagas($tekstas){
return "<h1> $tekstas</h1>";
}
echo htagas('Labas rytas pasauli');
echo '<br>';


/*
2.Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6).
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
*/

// function tagai (string $tekstas, int $numeris){
       
//         $numeris = rand(1,6);
//         echo '<h>'.$tekstas.'</h>';
//         return $tekstas.'<br>'.$numeris;
// }

// echo tagai(1,2);

echo '2 uzdavinys';
echo '<br>';
function htagasSkaiciai($tekstas,$skaicius){
    return "<h$skaicius> $tekstas</h$skaicius>";
    }
echo htagasSkaiciai('Labas rytas pasauli',rand(1,6));

/*
3.Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą.
Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
*/


function kodas (){
    
}


/*
4.Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
*/

/*
5.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77.
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
*/