echo '<h1>4.Užduotis</h1>';

    $a = rand(1, 10);

    $b = rand(1, 10);

    $c = rand(1, 10);



    echo 'Trikampiai susidaro tada kai dvieju krastiniu sudetis didesne uz trecia.';

    echo '<br>';

    echo "Pirmas kintamasis $a, antras $b, trecias $c.";

    echo '<br>';

    echo " $a+$b > $c";



    if ($a+$b > $c){

        echo '<br>';

        echo 'Trikampis susidarys';

    }

    elseif ($a+$b <= $c){

         echo '<br>';

         echo 'Trikampis nesusidarys';

        }

    elseif ($a+$c > $b) {

        echo '<br>';

        echo 'Trikampis susidarys';

     }

     elseif ($a+$c <= $b){

        echo '<br>';

        echo 'Trikampis nesusidarys';

        }

     elseif ($b+$c > $a) {

        echo '<br>';

        echo 'Trikampis susidarys';

    }

    elseif($b+$c <= $a){

        echo '<br>';

        echo 'Trikampis nesusidarys';

        }

    else {

        echo 'Trikampis nesusidarys';

    }