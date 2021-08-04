$skaicius1 = rand(-10, 10);

$skaicius2 = rand(-10, 10);

$skaicius3 = rand(-10, 10);

if($skaicius1<0){

    echo 'skaicius yra zalias';

    echo '<br>';

}

if($skaicius2<0){

    echo 'skaicius yra zalias';

    echo '<br>';

}

if($skaicius3<0){

    echo 'skaicius yra zalias';

    echo '<br>';

}

if($skaicius1==0){

    echo 'skaicius yra raudonas';

    echo '<br>';

}

if($skaicius2==0){

    echo 'skaicius yra raudonas';

    echo '<br>';

}

if($skaicius3==0){

    echo 'skaicius yra raudonas';

    echo '<br>';

}

if($skaicius1>0){

    echo 'skaicius yra melynas';

    echo '<br>';

}

if($skaicius2>0){

    echo 'skaicius yra melynas';

    echo '<br>';

}

if($skaicius3>0){

    echo 'skaicius yra melynas';

}



$var1 = rand(-10, 10);

$var2 = rand(-10, 10);

$var3 = rand(-10, 10);



$color1 = ($var1 < 0) ? 'green' : (($var1 > 0) ? 'blue' : 'red');

$color2 = ($var2 < 0) ? 'green' : (($var2 > 0) ? 'blue' : 'red');

$color3 = ($var3 < 0) ? 'green' : (($var3 > 0) ? 'blue' : 'red');



echo "<h2 style=\"color:$color1;display:inline-block;padding-right:20px;\">$var1</h2>";

echo "<h2 style=\"color:$color2;display:inline-block;padding-right:20px;\">$var2</h2>";

echo "<h2 style=\"color:$color3;display:inline-block;padding-right:20px;\">$var3</h2>";




$spalva1 = rand(-10, 10);

      $spalva2 = rand(-10, 10);

      $spalva3 = rand(-10, 10);



      $color1 = '#4CFF00';

      $color2 = '#FF0A1E';

      $color3 = '#0008FF';



        if ($spalva1 < 0){

            echo "<span style=\"color: $color1;\">$spalva1.</span>";

        }

        elseif ($spalva1 == 0){

            echo "<span style=\"color: $color2;\">$spalva1</span>";

        }

        elseif ($spalva1 > 0){

            echo "<span style=\"color: $color3;\">$spalva1</span>";

        }



        echo '<br>';

          if ($spalva2 < 0){

            echo "<span style=\"color: $color1;\">$spalva2.</span>";

        }

        elseif ($spalva2 == 0){

            echo "<span style=\"color: $color2;\">$spalva2</span>";

        }

        elseif ($spalva2 > 0){

            echo "<span style=\"color: $color3;\">$spalva2</span>";

        }



        echo '<br>';

          if ($spalva3 < 0){

            echo "<span style=\"color: $color1;\">$spalva3.</span>";

        }

        elseif ($spalva3 == 0){

            echo "<span style=\"color: $color2;\">$spalva3</span>";

        }

        elseif ($spalva3 > 0){

            echo "<span style=\"color: $color3;\">$spalva3</span>";

        }