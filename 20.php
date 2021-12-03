<?php 
// 20. Найти целое число в диапазоне от N до M с наибольшей суммой  делителей.  

$n = 500;
$m = 504;
$maxSumDivisors = sumDivisors2($n);
$maxNumber = 0;

for($i = $n+1; $i <= $m; $i++)
{
    $currentNumber = sumDivisors2($i);

    if($currentNumber > $maxSumDivisors)
    {
        $maxSumDivisors = $currentNumber;
        $maxNumber = $i;
    }
}

echo "$maxSumDivisors $maxNumber";

function sumDivisors2($number)
{
    $sum = 0;
    $previousDivisor = 0;

    for($k = 1; $k !== $number; $k++)
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
