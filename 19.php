<?php 
// 19. Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.

$n = 27005;
$m = 31501;
$nok = 0;

if($n > $m)
{
    $moreNumber = $n;
}
else
{
    $moreNumber = $m;
}

for($i = $moreNumber; $i <= $n*$m; $i++)
{
    if(($i % $n == 0) and ($i % $m == 0))
    {
        $nok = $i;
        break;
    }
}

echo $nok;
?>
