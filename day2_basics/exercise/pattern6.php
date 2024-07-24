<?php
    // pattern 6
echo "<h4>Pattern 6</h4>";
    for($i=2;$i<=10;$i+=2){
        for($j=2;$j<=$i;$j+=2)
        {
            // if($j%2==0)
            // {
                echo $j;
            // }   
        }
        echo "<br>";
    }
?>