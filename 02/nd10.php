echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $valandos = rand (0, 23);
echo '<br>';
echo $minutes = rand (0, 59);
echo '<br>';
echo $sekundes = rand (0, 59);
echo '<br>';
echo "$valandos:$minutes:$sekundes";
echo '<br>';
echo $seconds1 = rand(0, 300);
echo '<br>'; 
echo $minutes1 = $seconds1 / 60 % 60;
echo '<br>';
echo $seconds1 = $seconds1 % 60;
echo '<br>';
echo $minutes2 = $minutes + $minutes1;
echo '<br>';
echo $seconds2 = $sekundes + $seconds1;
if ($seconds2 >= 60){
$seconds2 = 0;
$minutes2 = $minutes2 + 1;
}
echo '<br>';
if ($minutes2 >= 60){
$minutes2 = 0;
$valandos = $valandos + 1;
}
echo '<br>';
echo "$valandos:$minutes2:$seconds2";
echo '<br>';