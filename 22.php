<?php 
$n = 123799221214;

while($n > 0)
{
    //echo $n .' ';

    for($i = 2; $i <= $n; $i++)
    {
        if($n % $i !== 0)
        {
            continue;
        }

        if(simpleNumber($i))
        {
            echo $i .' ';
            $divider = $i;
            break;
        }
    }

    //echo '<br>';
    
    $n = intdiv($n, $divider);
}

function simpleNumber($number)
{
    for($i = 2; $i !== $number; $i++)
    {
        if($number % $i == 0)
        {   
            return false;
        }
    }

    return true;   
}
?>
