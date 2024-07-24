<?php
    // pattern 5
echo "<h4>Pattern 5</h4>";
    for($i=1;$i<=10;$i++)
    {
        if($i%2!=0)
        {
            for($j=1;$j<$i+1;$j+=2)
            {
                echo $j;
            }
            echo "<br>";
        }
    }
?>