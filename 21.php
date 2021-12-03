<?php 
//21. Даны  натуральные  числа  N  и  M.  Определить,  являются  ли  они  взаимно простыми числами. 
//Взаимно простые числа не имеют общих делителей, кроме единицы.  

$n = 521;
$m = 269;

if((sumDivisors2($n) == 0) and (sumDivisors2($m) == 0) and ($n !== $m))
{
    echo "Числа $n и $m взаимно простые";
}
else 
{
    echo "Числа $n и $m не взаимно простые";
}

function sumDivisors2($number)
{
    $sum = 0;
    $previousDivisor = 0;

    for($k = 2; $k !== $number; $k++)
    {
        if($number % $k == 0)
        {
            if($previousDivisor*$k == $number)
            {
                break;
            }

            $sum += $number / $k;
            $sum += $k;
            $previousDivisor = $k;
        }
        
    }

    return $sum;   
}
?>
